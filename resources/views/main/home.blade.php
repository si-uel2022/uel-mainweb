@extends('main.layout')

@section('content')

<div class="row">
    <div class="col-sm">
        <div class="jumbotron">
            <h1 class="display-4 jumbotron-text">UBAYA E-Sport League Season 2</h1>
            <p class="jumbotron-text-small">
                UBAYA E-Sport League (UEL) adalah kompetisi e-sport yang diadakan setiap tahun. Pada tahun ini, UEL menginjak season kedua dengan tema Strive to Thrive. <br>
                UEL 2022 membuka kompetisi pada cabang Mobile Legends, PUBG Mobile dan Valorant. Tunggu apa lagi? Segera daftar dan ikuti keseruan UEL! <br>
                UEL 2022? Survive is good, thrive is better!
            </p>
        </div>
    </div>
    
    <div class="col-sm d-flex justify-content-center text-center">
        <img src="{{asset('images/logo-uel.png')}}" width="600" height="600" alt="Logo UEL">
    </div>
</div>


<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 text-center">
        <h1 class="display-4 jumbotron-text">Throwback UEL Season 1</h1>
        <div class="carousel slide" data-ride="carousel" id="carouselControl" style="border: 5px solid #A4FFFD; box-sizing: border-box;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/fotouel21_1.png')}}" alt="1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/fotouel21_2.png')}}" alt="2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/fotouel21_3.png')}}" alt="3" class="d-block w-100">
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