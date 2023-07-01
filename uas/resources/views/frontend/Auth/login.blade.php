@extends('frontend.Auth.layouts.index')
@section('app.title', ' - Login')

@section('content')
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    {{-- <a href="#"> <img src="{{ asset('assets/backend') . config('appConfig.logo') }}" alt="Logo" /> </a> --}}
                    <h1>{{ config('app.name') }}</h1>
                </div>
                <h1 class="auth-title">Log in.</h1>
                <p class="auth-subtitle mb-5">
                    Log in to {{ config('app.name') }}
                </p>

                <form action="{{ route('auth.login.process') }}" method="POST">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" name="username" placeholder="Username"
                            required autocomplete="username" autofocus>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" name="password"
                            placeholder="Password" />
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>

                    @if ($errors->any())
                        <span>{{ $errors->first() }}</span>
                    @endif

                    {{-- <div class="form-check form-check-lg d-flex align-items-end">
                        <input type="checkbox" class="form-check-input me-2" id="flexCheckDefault" value="" />
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div> --}}
                    <button class="btn btn-primary btn-block btn-lg mt-5 shadow-lg">
                        Log in
                    </button>
                </form>
                {{-- <div class="fs-4 mt-5 text-center text-lg">
                    <p class="text-gray-600">
                        Don't have an account?
                        <a class="font-bold" href="{{ route('auth.register') }}">Sign up</a>.
                    </p>
                    <p>
                        <a class="font-bold" href="{{ route('auth.forget') }}">Forgot password?</a>.
                    </p>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right"></div>
        </div>
    </div>
@endsection
