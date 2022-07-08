@extends('layouts.guest')

@section('content')
    <div class="col-lg-8">
        <div class="card-group d-block d-md-flex flex-md-column align-items-center row">
            <div class="card col-md-7 p-4 mb-0 bg-white bg-opacity-75">
                <div class="card-body p-4">
                    <h3 class="text-center">{{ __('Register Dracom') }}</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                                </svg></span>
                            <input class="form-control" type="text" name="name" placeholder="{{ __('Name') }}"
                                required autocomplete="off" autofocus>
                            @error('name')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-envelope-open') }}"></use>
                                </svg></span>
                            <input class="form-control" type="text" name="email" placeholder="{{ __('Email') }}"
                                required>
                            @error('email')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-lock-locked') }}"></use>
                                </svg></span>
                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                name="password" placeholder="{{ __('Password') }}" required password">
                            @error('password')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-4"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-lock-locked') }}"></use>
                                </svg></span>
                            <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password"
                                name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required
                                password">
                        </div>

                        <div class="row mx-auto">
                            <button class="btn btn-danger mx-auto px-4" type="submit">{{ __('Daftar') }}</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="card col-md-7 text-white bg-danger">
                <div class="card-body text-center">
                    <div class="d-flex">
                        <p class="text-black mt-2">Sudah punya akun?</p>
                        <a href="{{ route('login') }}" class="btn text-white">{{ __('Masuk') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
