<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dracom</title>
    <link rel="icon" href="{{ asset('assets/images/background.jpg') }}" type="image/x-icon">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="d-flex flex-column">
    <div id="page-content">
        <nav class="navbar navbar-expand-lg bg-danger navbar-light sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">Dracom</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item {{ request()->is('movies/recommendation') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('movie.recommendation') }}">Rekomendasi</a>
                        </li>
                        <li class="nav-item {{ request()->is('movies/myrating') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('movie.rating') }}">Rating Saya</a>
                        </li>
                        <li class="nav-item">
                            @auth
                                <a class="nav-link" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logoutform').submit();">Logout</a>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            @endauth

                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <footer id="sticky-footer" class="flex-shrink-0 py-2 bg-white text-black">
        <div class="container text-center">
            <h6>Copyright &#169; {{ now()->year }} DRACOM. All Rights Reserved</h6>
            <h6>Website Sistem Rekomendasi Drama Korea</h6>
            <h6>Item Based Collaborative Filtering</h6>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    @yield('scripts')
</body>

</html>
