@extends('main.layout')

@section('content')

<div class="body-gradient">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand nav-text" href="#">
            <img src="{{asset('images/logo-uel.png')}}" width="100" height="100" alt="Logo UEL">
        </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toogle Nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="#" class="selected-nav-text">
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-text">
                        About Us
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-text">
                        FAQ
                    </a>
                </li>
            </ul>

            <button class="nav-btn">Register Team</button>
        </div>
    </nav>



        <div class="row">
            <div class="col-sm">
                <div class="jumbotron">
                    <h1 class="display-4 jumbotron-text">UBAYA E-Sport League Season 2</h1>
                    <p class="text-light">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, hic. Labore ipsa obcaecati magnam soluta quae voluptatum corrupti cupiditate aliquam explicabo in beatae corporis optio esse debitis, assumenda similique porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero praesentium ratione iusto delectus amet sapiente. Quae dolorum iusto eius consectetur nesciunt nemo! Sunt ipsum veniam, excepturi facilis quibusdam nesciunt earum.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, hic. Labore ipsa obcaecati magnam soluta quae voluptatum corrupti cupiditate aliquam explicabo in beatae corporis optio esse debitis, assumenda similique porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero praesentium ratione iusto delectus amet sapiente. Quae dolorum iusto eius consectetur nesciunt nemo! Sunt ipsum veniam, excepturi facilis quibusdam nesciunt earum.
                        
                        
                    </p>
                </div>
            </div>
            
            <div class="col-sm d-flex justify-content-center text-center">
                <img src="{{asset('images/logo-uel.png')}}" width="600" height="600" alt="Logo UEL">
            </div>
        </div>

        <div class="row">
            <div id="vector1">
                <img src="{{asset("images/vector1.png")}}" alt="">
            </div>
            <br>
            <div id="vector2">
                <img src="{{asset("images/vector2.png")}}" alt="">
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
</div>

@endsection