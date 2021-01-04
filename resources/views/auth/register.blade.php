@extends('layouts.app')

@section('head')
    <title>Register</title>

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
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}









<section class="section">
    <div class="columns is-centered">
        <div class="column is-4">
            <div class="box p-6">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control has-icons-left">
                            <input name="name" class="input" type="text" placeholder="Your Name">
                            <span class=" icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Account Type</label>
                        <div class="control has-icons-left ">
                            <div class="select is-fullwidth">
                                <select>
                                    <option selected>Student</option>
                                    <option>Teacher</option>
                                </select>
                            </div>
                            <span class="icon is-left">
                                    <i class="fas fa-user-tie"></i>
                                </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left">
                            <input name="email" class="input" type="email" placeholder="name@example.com">
                            <span class=" icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control has-icons-left">
                            <input name="password" class="input" type="password" placeholder="password">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Confirm Password</label>
                        <div class="control has-icons-left">
                            <input name="password_confirmation" class="input" type="password" placeholder="confirm password">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                        </div>
                    </div>

                    <div class="control mt-5">
                        <button type="submit" class="button is-fullwidth is-primary">Register</button>
                    </div>

                </form>

                <div class="container mt-5">
                    <p>Have an Account? <a href="{{route('login')}}">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
