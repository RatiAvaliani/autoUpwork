@extends('base.default')
@section('title', 'Main Page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@stop

@section('menu')
    @include('base.mainMenu')
@stop

@section('content')
    <section id="main-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">

                    <div id="main-slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('/images/243554.png') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('/images/646639.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('/images/bLxcjh3.png') }}" alt="Third slide">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center mt-5 mb-5">Welcome To Auto Upwork</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="info-image mt-2 p-4 float-right">
                        <img class="ml-2" src="{{ asset('/images/clip-art.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 ml-auto">
                    <div class="info-section mt-2 p-4">
                        <h4>Where can I get some</h4>
                        <p class="mt-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="info-section mt-2 p-4">
                        <h4>Where can I get some</h4>
                        <p class="mt-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="info-image mt-2 p-4 float-right">
                        <img class="ml-2" src="{{ asset('/images/clip-art.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center mt-5 mb-5">What we offer</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="info-section mt-2 p-4">
                        <h4 class="text-center">Where can I get some</h4>
                        <p class="mt-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
