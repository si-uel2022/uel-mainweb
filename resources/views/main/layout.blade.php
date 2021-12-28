<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UEL 2022</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/uel.css')}}">
</head>
<body style="background-color: #222222">
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
                        <a href="/home" class="selected-nav-text">
                            Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="/aboutus" class="nav-text">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="/faq" class="nav-text">
                            FAQ
                        </a>
                    </li>
                </ul>
    
                <a href="/registration"><button class="nav-btn">Register Team</button></a>
            </div>
        </nav>

        @yield('content')
    </div>
    <div class="body-bottom">
        <div class="row">
            <div class="col-sm-2">
                <img src="{{asset('images/logo-uel.png')}}" width="130" height="130" alt="Logo UEL">
            </div>
            <div class="col-sm-6">
                <p class="heading-white-text">UBAYA E-Sport League Season 2</p>
                <p class="subheading-white-text">Report Bugs and Problem: (email SI UEL disini)</p>
                <p class="subheading-white-text">Developed by Information System UEL 2022</p>
            </div>
            <div class="col-sm-4">
                <h1>LOGO IG DAN YT</h1>
            </div>
        </div>
    </div>
    
</body>
</html>