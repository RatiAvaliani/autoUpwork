@extends('base.default')

@section('title', 'RegisterController')

@section('css')
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
                                <h2>Reset Password Page</h2>
                                <a href="#ResetPasswordPage">
                                    <i class="fa fa-chevron-down d-md-none d-lg-none"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 login-form">
                            <form id="ResetPasswordPage" method="POST" action="/resetPassword">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Rep-Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Rep-Password">
                                </div>
                                <input hidden name="token" placeholder="token" value="{{ $token }}">
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
                                <button type="submit" class="btn btn-black">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
