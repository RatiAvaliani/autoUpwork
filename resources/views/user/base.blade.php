@extends('base.default')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/user/base.css') }}">
    @section('addCss')
    @show
@stop

@section('menu')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand"><a href="/dashboard">{{{ Auth::user()->name }}}</a></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="main-navbar navbar-nav mr-auto"></ul>
            <ul class="navbar-nav form-inline my-2 my-lg-0">
                <li class="nav-item notifications">
                    <div class="dropdown">
                        <span id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="notifications-count">0</span>
                        </span>

                        <div class="dropdown-menu" aria-labelledby="notifications">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link logout" href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 p-0">
                @include('user.menu')
            </div>
            <div class="col-lg-10 mt-3">

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center mt-2 mb-4 user-content-title">{!! str_replace('/', ' ', Request::path()) !!}</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        @if (Auth::user()->email_verified_at === null)
                            <div class="alert alert-warning" role="alert">
                                You need to verify you email, you can do so <a href="/verifyEmail">here</a>.
                            </div>
                        @endif
                        @if (session()->get('status'))
                            <div class="alert alert-primary" role="alert">
                                {{ session()->get('status')  }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user-content">
                            @section('page')
                            @show
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('/js/user/base.js') }}"></script>
    @section('addJs')
    @show
@stop
