<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movieSliders = Movie::query()
            // ->with('ratings')
            ->withAvg('ratings', 'rating')
            ->find([35, 44, 9]);

        $movies = Movie::query()
            // ->with('ratings')
            ->withAvg('ratings', 'rating')
            ->orderBy('title')
            ->whereNotIn('id', [35, 44, 9])
            ->get();

        return view('home', compact('movieSliders', 'movies'));
    }

    public function show(Movie $movie)
    {
        $movie->loadAvg('ratings', 'rating')->load('ratings.user');

        $rating = Rating::query()
            ->whereBelongsTo($movie)
            ->whereBelongsTo(auth()->user())
            ->first();

        return view('pages.user.movie.show', compact('movie', 'rating'));
    }

    public function rating()
    {
        $ratings = Rating::query()
            ->with(['movie', 'user'])
            ->whereBelongsTo(auth()->user())
            ->get();

        return view('pages.user.movie.rating', compact('ratings'));
    }

    public function ratingStore(Request $request, Movie $movie)
    {
        $request->validate(['rating' => 'required']);

        Rating::create([
            'movie_id' => $movie->id,
            'user_id' => auth()->id(),
            'rating' => $request->rating
        ]);

        return redirect()->route('movie.show', ['movie' => $movie])->with('message', 'Sukses memberi rating film ' . $movie->title);
    }

    public function recommendation()
    {
        $ratings = Rating::query()
            ->get(['user_id', 'movie_id', 'rating']);

        $movies = Movie::query()
            ->withAvg('ratings', 'rating')
            ->inRandomOrder()
            ->limit(30)
            ->get();

        $users = User::query()
            ->where('role', 0)
            ->whereHas('ratings')
            ->inRandomOrder()
            ->limit(20)
            ->get()
            ->pluck('id')
            ->toArray();
        $totalUsers = count($users);

        $userRating = $ratings->where('user_id', auth()->id());

        $doneMovie = [];

        $recommendationMovie = array_values($movies
            ->whereNotIn('id', $userRating->pluck('movie_id')->toArray())
            ->toArray());
        $totalRecommedations = count($recommendationMovie);

        $userMovies = array_values($movies
            ->whereIn('id', $userRating->pluck('movie_id')->toArray())
            ->toArray());
        $totalUserMovie = count($userMovies);

        $recommended = collect();

        $time_start = microtime(true);
        set_time_limit(6000);

        $recommededResults = collect();
        if ($userRating->count() >= 5) {

            for ($i = 0; $i < $totalRecommedations; $i++) {
                $eachMovie = collect();

                for ($j = 0; $j < $totalUserMovie; $j++) {
                    if ($recommendationMovie[$i]["id"] === $userMovies[$j]["id"] || in_array($userMovies[$j]["id"], $doneMovie)) continue;

                    $top = 0;

                    $totalFirst = 0;
                    $totalSecond = 0;
                    $userId = collect();

                    for ($k = 0; $k < $totalUsers; $k++) {
                        $firstMovie = $ratings
                            ->where('user_id', $users[$k])
                            ->where('movie_id', $recommendationMovie[$i]["id"])
                            ->first();

                        $secondMovie = $ratings
                            ->where('user_id', $users[$k])
                            ->where('movie_id', $userMovies[$j]["id"])
                            ->first();

                        if (
                            $firstMovie && $secondMovie
                        ) {
                            $total = ($firstMovie->rating - $recommendationMovie[$i]["ratings_avg_rating"]) * ($secondMovie->rating - $userMovies[$j]["ratings_avg_rating"]);

                            $top += $total;

                            $first = pow($firstMovie->rating - $recommendationMovie[$i]["ratings_avg_rating"], 2);
                            $second = pow($secondMovie->rating - $userMovies[$j]["ratings_avg_rating"], 2);

                            $totalFirst += $first;
                            $totalSecond += $second;

                            $userId->push([
                                'user' => $users[$k],
                                'rating_first' => [$firstMovie->rating, $recommendationMovie[$i]["ratings_avg_rating"]],
                                'rating_second' => [$secondMovie->rating, $userMovies[$j]["ratings_avg_rating"]],
                                'first_total' => $firstMovie->rating - $recommendationMovie[$i]["ratings_avg_rating"],
                                'second_total' => $secondMovie->rating - $userMovies[$j]["ratings_avg_rating"],
                                'total' => $total
                            ]);
                        }
                    }

                    if ($top > 0 && $totalFirst > 0 && $totalSecond > 0) {
                        $bottom = sqrt($totalFirst) * sqrt($totalSecond);

                        if ($top / $bottom > 0 && !is_null($userId)) {
                            $similarity = $top / $bottom;

                            $eachMovie->push([
                                'first' => $recommendationMovie[$i]["id"],
                                'second' => $userMovies[$j]["id"],
                                'similarity' => $similarity,
                                'top' => $top,
                                'bottom' => $bottom,
                                'user_id' => $userId,
                                'user_rating' => $ratings
                                    ->where('user_id', auth()->id())
                                    ->where('movie_id', $userMovies[$j]["id"])
                                    ->first()
                                    ->rating * $similarity
                            ]);
                        }
                    }
                }

                if ($eachMovie->count()) {
                    $recommended->push([
                        'id' => $recommendationMovie[$i]['id'],
                        'prediction' => $eachMovie->sum('user_rating') / $eachMovie->sum('similarity')
                    ]);
                }

                array_push($doneMovie, $recommendationMovie[$i]["id"]);
            }

            $recommededResults = $movies->whereIn('id', $recommended->pluck('id')->toArray())
                ->transform(function ($movie) use ($recommended) {
                    $movie->prediction = intval($recommended->where('id', $movie->id)->first()['prediction']);

                    return $movie;
                });

            $recommededResults = $recommededResults->sortByDesc('prediction');

            $time_end = microtime(true);

            $execution_time = ($time_end - $time_start);

            // dd($execution_time, $totalRecommedations, $recommededResults);
        }

        return view('pages.user.movie.recommendation', compact('ratings', 'userRating', 'recommededResults'));
    }
}
