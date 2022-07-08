@extends('layouts.app')

@section('content')
    <div id="movies" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#movies" data-slide-to="0" class="active"></li>
            <li data-target="#movies" data-slide-to="1"></li>
            <li data-target="#movies" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($movieSliders as $movie)
                <div class="carousel-item @if ($loop->index == 0) active @endif">
                    <div class="card bg-white bg-opacity-75 px-5">
                        <div class="card-body row">
                            <div class="col-4 my-auto">
                                <img class="img-fluid d-block mx-auto text-center" src="{{ $movie->image }}"
                                    alt="First slide">
                                <h3 class="text-black text-center">{{ $movie->title }}</h3>
                            </div>
                            <div class="col-7">
                                <h5 class="text-black font-bold">Deskripsi</h5>
                                <h6 class="text-black">{{ $movie->description }}</h6>
                                <h5 class="text-black font-bold">Sutradara</h5>
                                <h6 class="text-black">{{ $movie->director }}</h6>
                                <h5 class="text-black font-bold">Pemain</h5>
                                <h6 class="text-black">{{ $movie->artist }}</h6>
                                <h5 class="text-black font-bold">Episode</h5>
                                <h6 class="text-black">{{ $movie->episode }}</h6>
                                <h5 class="text-black font-bold">Rating</h5>
                                <h6 class="text-black">&#9733; {{ number_format($movie->ratings_avg_rating, 2) }}</h6>
                                @auth
                                    <a href="{{ route('movie.show', ['movie' => $movie, 'rating' => true]) }}"
                                        class="btn btn-sm btn-danger text-white mt-2">Beri Rating</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-sm btn-danger text-white mt-2">Beri
                                        Rating</a>
                                @endauth
                                <a href="{{ route('movie.show', $movie) }}"
                                    class="btn btn-sm btn-secondary text-white mt-2">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#movies" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#movies" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid bg-white">
        <div class="row d-flex justify-content-center px-5">
            <h2 class="ml-5">Drama Korea</h2>
            @foreach ($movies as $movie)
                <div class="col-sm-6 col-md-4 col-lg-4 pb-5 d-flex justify-content-center">
                    <div class="card h-100" style="width: 80%;">
                        <div class="card-body row d-flex flex-column">
                            <div class="col-10 mx-auto">
                                <div class="col-7 mx-auto">
                                    <img class="img-fluid d-block mx-auto text-center" src="{{ $movie->image }}"
                                        alt="First slide">
                                </div>
                                <h3 class="text-black text-center">{{ $movie->title }}</h3>
                            </div>
                            <div class="col">
                                <h5 class="text-black  font-bold">Sutradara</h5>
                                <h6 class="text-black ">{{ $movie->director }}</h6>
                                <h5 class="text-black font-bold">Pemain</h5>
                                <h6 class="text-black ">{{ substr($movie->artist, 0, 20) }}</h6>
                                <h5 class="text-black font-bold">Rating</h5>
                                <h6 class="text-black ">&#9733; {{ number_format($movie->ratings_avg_rating, 2) }}
                                </h6>
                            </div>
                        </div>
                        <div class="card-footer">
                            @auth
                                <a href="{{ route('movie.show', ['movie' => $movie, 'rating' => true]) }}"
                                    class="btn btn-sm btn-danger text-white mt-2">Beri Rating</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-sm btn-danger text-white mt-2">Beri Rating</a>
                            @endauth
                            <a href="{{ route('movie.show', $movie) }}"
                                class="btn btn-sm float-right btn-secondary text-white mt-2">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
