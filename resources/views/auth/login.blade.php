@extends('layouts.app')

@section('content')
@push('css')
    <link rel="stylesheet" href="{{ url("css/style.css") }}">
@endpush

<div class="wrapper container vh-100">
    <div class="row align-items-center h-100">
        <div class="col-lg-6 d-none d-lg-flex">
        </div> <!-- ./col -->
        <div class="col-lg-6">
            <div class="w-50 mx-auto">
                <form class="mx-auto text-center" method="POST" action="{{ route('login') }}">
                    @csrf
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/">
                        Medtronix
                    </a>
                    <h1 class="h6 mb-3">Sign in</h1>
                    <div class="form-group">
                        <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="Email address" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">{{ __('Password') }}</label>

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="checkbox mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                            ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </form>
            </div> <!-- .card -->
        </div> <!-- ./col -->
    </div> <!-- .row -->
</div>
@endsection