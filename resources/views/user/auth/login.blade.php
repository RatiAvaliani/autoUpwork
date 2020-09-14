@extends('base.default')

@section('title', 'LoginController')

@section('css')
    <meta name="google-signin-client_id" content="632432910352-t053sbge324cpbcjnhpognj6hjtivkic.apps.googleusercontent.com">
    <link rel="stylesheet" href="{{ asset('/css/user/auth/login.css') }}">
@stop
@section('content')
    <div class="login-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-5 login-text">
                            <div>
                                <h1 class="mt-5">Auto Upwork</h1>
                                <h2>Login Page</h2>
                                <a href="#login">
                                    <i class="fa fa-chevron-down d-md-none d-lg-none"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 login-form">
                            <form id="login" method="post" action="/auth">
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember_token" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <a href="/forgotPassword">Forgot Password?</a>
                                </div>
                                @if (session()->get('status'))
                                    <div class="alert alert-primary" role="alert">
                                        {{ session()->get('status')  }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li><i class="fa fa-exclamation-triangle"></i>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-black">Login</button>
                                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="https://apis.google.com/js/platform.js" async defer></script>
@stop
