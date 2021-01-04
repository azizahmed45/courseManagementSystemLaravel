@extends('layouts.app')

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Login') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('login') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="email"--}}
{{--                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email"--}}
{{--                                           class="form-control @error('email') is-invalid @enderror" name="email"--}}
{{--                                           value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password"--}}
{{--                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password"--}}
{{--                                           class="form-control @error('password') is-invalid @enderror" name="password"--}}
{{--                                           required autocomplete="current-password">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" name="remember"--}}
{{--                                               id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                        <label class="form-check-label" for="remember">--}}
{{--                                            {{ __('Remember Me') }}--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-8 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Login') }}--}}
{{--                                    </button>--}}

{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                            {{ __('Forgot Your Password?') }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


@section('head')
    <title>Login</title>

    <style>
        body {
            background-image: url('https://cdn.hipwallpaper.com/i/22/9/szOvfx.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
        }
    </style>
@endsection



@section('content')

    <div class="columns is-centered">
        <div class="column is-4">
            <div class="box p-6">
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <div class="control has-icons-left">
                            <input id="email" class="input" type="email" placeholder="name@example.com" name="email"
                                   value="{{ old('email') }}"
                                   required autocomplete="email" autofocus>
                            <span class=" icon is-small is-left">
                                <i class="fas fa-user"></i>
                                </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control has-icons-left">
                            <input id="password" class="input" type="password" name="password" required
                                   autocomplete="current-password" placeholder="password">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                        </div>
                    </div>

                    <div class="control mt-5">
                        <button class="button is-fullwidth is-primary" type="submit">Login</button>
                    </div>

                </form>

                <div class="container mt-5">
                    <p>Need an Account? <a href="{{route('register')}}">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
