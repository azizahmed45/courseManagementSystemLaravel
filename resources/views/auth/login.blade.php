@extends('layouts.app')

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
                            <input id="email" class="input @error('email') is-danger @enderror" type="email" placeholder="name@example.com" name="email"
                                   value="{{ old('email') }}"
                                   required autocomplete="email" autofocus>
                            <span class=" icon is-small is-left">
                                <i class="fas fa-user"></i>
                                </span>
                            @error('email')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control has-icons-left">
                            <input id="password" class="input  @error('password') is-danger @enderror" type="password" name="password" required
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
