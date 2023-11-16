@push('css')
    <link rel="stylesheet" href="{{ url("css/style.css") }}">
@endpush
@extends('layouts.app')

@section('content')

<div class="wrapper container vh-100 py-5">
    <div class="row align-items-center h-100">
      <form class="col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mx-auto text-center py-5">
          <h2 class="my-3">Register</h2>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <hr class="my-4">
        <div class="row mb-4">
          <div class="col-md-6">
            <div class="form-group">
              <label for="password">New Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="password-confirm">Confirm Password</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            </div>
          </div>
          <div class="col-md-6">
            <p class="mb-2">Password requirements</p>
            <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following requirements: </p>
            <ul class="small text-muted pl-4 mb-0">
              <li> Minimum 8 character </li>
              <li>At least one special character</li>
              <li>At least one number</li>
              <li>Can’t be the same as a previous password </li>
            </ul>
          </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      </form>
    </div>
  </div>
@endsection
