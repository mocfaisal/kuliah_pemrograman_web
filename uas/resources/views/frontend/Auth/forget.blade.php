@extends('frontend.Auth.layouts.index')
@section('app.title', ' - Forget Password')

@section('content')
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    {{-- <a href="#"><img src="{{ asset('assets/backend') . config('appConfig.logo') }}" alt="Logo" /></a> --}}
                    <h1>{{ config('app.name') }}</h1>
                </div>
                <h1 class="auth-title">Forgot Password</h1>
                <p class="auth-subtitle mb-5">
                    Input your email and we will send you reset password link.
                </p>

                <form action="index.html">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-xl" placeholder="Email" />
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg mt-5 shadow-lg">
                        Send
                    </button>
                </form>
                <div class="fs-4 mt-5 text-center text-lg">
                    <p class="text-gray-600">
                        Remember your account?
                        <a class="font-bold" href="{{ route('auth.login') }}">Log in</a>.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right"></div>
        </div>
    </div>
@endsection
