@extends('main.layout')

@section('content')

<div class="row">
    <div class="col-sm">
        <div class="jumbotron">
            <h1 class="display-4 jumbotron-text">UBAYA E-Sport League Season 2</h1>
            <p class="jumbotron-text-small">
                UBAYA E-Sport League (UEL) adalah kompetisi e-sport yang diadakan setiap tahun. Pada tahun ini, UEL menginjak season kedua dengan tema ...
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore velit laudantium minus accusantium dolorem dolor consequatur error ad. Dicta at aliquam quae qui alias maxime officiis temporibus corporis sint itaque.
            </p>
        </div>
    </div>
    
    <div class="col-sm d-flex justify-content-center text-center">
        <img src="{{asset('images/logo-uel.png')}}" width="600" height="600" alt="Logo UEL">
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div id="vector1">
            <img src="{{asset("images/vector1.png")}}" alt="">
        </div>
    </div>
    <div class="col-sm-6">

    </div>
    
</div>
<br>
<div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8">
        <div id="vector2">
            <img src="{{asset("images/vector2.png")}}" alt="">
        </div>
    </div>
    <div class="col-sm-2">

    </div>
</div>

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="carousel slide" data-ride="carousel" id="carouselControl" style="border: 10px solid #A4FFFD; box-sizing: border-box;
        border-radius: 50px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/250" alt="1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/200" alt="2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/300" alt="3" class="d-block w-100">
                </div>
            </div>
            <a href="#carouselControl" role="button" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Prev</span>
            </a>
            <a href="#carouselControl" role="button" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-sm-2"></div>
</div>

@endsection