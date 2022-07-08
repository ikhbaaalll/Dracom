@extends('layouts.guest')

@section('content')
    <div class="col-lg-8">
        <div class="card-group d-block d-md-flex flex-md-column align-items-center row">
            <div class="card col-md-7 p-4 mb-0 bg-white bg-opacity-75">
                <div class="card-body">
                    <h3 class="text-center">{{ __('Login Dracom') }}</h3>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-envelope-open') }}"></use>
                                </svg></span>
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                                placeholder="{{ __('Email') }}" required autofocus autocomplete="off">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-4"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-lock-locked') }}"></use>
                                </svg></span>
                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                name="password" placeholder="{{ __('Password') }}" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mx-auto">
                            <button class="btn btn-danger mx-auto px-4" type="submit">{{ __('Login') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card col-md-7 text-white bg-danger">
                <div class="card-body text-center">
                    <div class="d-flex">
                        <p class="text-black mt-2">Belum punya akun?</p>
                        <a href="{{ route('register') }}" class="btn text-white">{{ __('Register') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
