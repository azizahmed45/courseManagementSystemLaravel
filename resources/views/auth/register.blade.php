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
<section class="section">
    <div class="columns is-centered">
        <div class="column is-4">
            <div class="box p-6">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control has-icons-left">
                            <input name="name" class="input @error('name') is-danger @enderror" type="text" placeholder="Your Name">
                            <span class=" icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Account Type</label>
                        <div class="control has-icons-left ">
                            <div class="select is-fullwidth">
                                <select name="account_type">
                                    <option value="student" selected>Student</option>
                                    <option value="teacher">Teacher</option>
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
                            <input name="email" class="input @error('password') is-danger @enderror" type="email" placeholder="name@example.com">
                            <span class=" icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control has-icons-left">
                            <input name="password" class="input @error('password') is-danger @enderror" type="password" placeholder="password">
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
