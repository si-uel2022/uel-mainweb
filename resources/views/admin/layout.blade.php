<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/uel.css')}}">
</head>

<body style="background-color: #222222">
    <div class="body-gradient">

        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand nav-text" href="#">
                <img src="{{asset('images/logo-uel.png')}}" width="100" height="100" alt="Logo UEL">
            </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 44px; color: white;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    {{-- @can('access-permission-product') --}}
                                    <a class="dropdown-item" href="{{ route('admin') }}">
                                        Kembali ke dashboard
                                    </a>
                                    {{-- @endcan --}}

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @endguest
                </ul>
            </div>
        </nav>

        @yield('content')

        @yield('scripts')
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
                <a href="https://www.instagram.com/uel2022_/"><img src="{{asset('images/logo_ig.png')}}" width="75" height="75" alt="Instagram UEL"></a>
                <a href=""><img src="{{asset('images/logo_youtube.png')}}" width="130" height="130" alt="Youtube UEL"></a>
            </div>
        </div>
    </div>
    
</body>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

</html>
