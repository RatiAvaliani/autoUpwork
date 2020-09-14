@extends('base.default')

@section('title', 'LoginController')

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
                                <h2>Forgot Password</h2>
                                <a href="#ResetPassword">
                                    <i class="fa fa-chevron-down d-md-none d-lg-none"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 login-form">
                            <form id="ResetPassword" method="post" action="/forgotPassword">
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
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
                                <button type="submit" class="btn btn-black">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
