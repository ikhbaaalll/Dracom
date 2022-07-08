<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\FileImport;
use App\Models\Movie;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::query()
            ->withAvg('ratings', 'rating')
            ->get();

        return view('pages.admin.movie.index', compact('movies'));
    }

    public function create()
    {
        return view('pages.admin.movie.create');
    }

    public function store(Request $request)
    {
        $movieId = Movie::max('id') + 1;

        Movie::create([
            'id' => $movieId,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'episode' => $request->episode,
            'artist' => $request->artist,
            'director' => $request->director,
            'duration' => $request->duration,
            'show_date' => $request->show_date,
            'slug' => Str::slug($request->title)
        ]);

        return redirect()->route('admin.movies.index');
    }

    public function edit(Movie $movie)
    {
        return view('pages.admin.movie.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'episode' => $request->episode,
            'artist' => $request->artist,
            'director' => $request->director,
            'duration' => $request->duration,
            'show_date' => $request->show_date,
            'slug' => Str::slug($request->title)
        ]);

        return redirect()->route('admin.movies.index');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('admin.movies.index');
    }

    public function rating(Movie $movie)
    {
        $movie->load('ratings.user');

        return view('pages.admin.movie.rating', compact('movie'));
    }

    public function excel()
    {
        return view('pages.admin.import');
    }

    public function excelStore(Request $request)
    {
        $temp = $request->file('file')->store('temp');
        $path = storage_path('app') . '/' . $temp;

        $rows = Excel::toCollection(new FileImport, $path);

        $movies = Movie::all();

        set_time_limit(600);

        foreach ($rows[0] as $index => $data) {
            if ($index == 0) continue;

            $movie = $movies->where('director', 'like', $data[7])->first();
            if (!$movie) dd($data);
            $movie->update(['image' => $data[0]]);
        }
        // foreach ($rows[0][0] as $i => $header) {
        //     if ($i % 2 != 0) continue;

        //     $movie = $movies->where('title', $header)->first();

        //     foreach ($rows[0] as $index => $data) {
        //         if ($index === 0) continue;

        //         if ($movie && !is_null($data[$i])) {
        //             $email = str_replace(' ', '_', Str::lower($rows[0][$index][$i])) . '@gmail.com';

        //             $user = User::firstOrCreate([
        //                 'email' => $email
        //             ], [
        //                 'name' => $rows[0][$index][$i],
        //                 'password' => bcrypt('password')
        //             ]);

        //             $rating = Rating::query()
        //                 ->where('user_id', $user->id)
        //                 ->where('movie_id', $movie->id)
        //                 ->first();

        //             if (!$rating) {
        //                 Rating::create([
        //                     'user_id' => $user->id,
        //                     'movie_id' => $movie->id,
        //                     'rating' => $rows[0][$index][$i + 1]
        //                 ]);
        //             }
        //         }
        //     }
        // }

        return redirect()->route('admin.movies.index');
    }
}
