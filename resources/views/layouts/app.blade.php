<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/demo3.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @stack('styles')
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="filters hidden d-none">
    <defs>
        <filter id="blur" x="-20%" y="0" width="140%" height="100%">
            <feGaussianBlur in="SourceGraphic" stdDeviation="0,0"/>
        </filter>
    </defs>
</svg>
<div class="menu" style="z-index: 10;">
    <div class="menu-bg js-blur"></div>
    <nav class="menu-items">
        <a href="#" class="menu-item">
            <span class="js-blur">About us</span>
        </a>
        <a href="#" class="menu-item">
            <span class="js-blur">Portfolio</span>
        </a>
        <a href="#" class="menu-item">
            <span class="js-blur">Clients</span>
        </a>
        <a href="#" class="menu-item">
            <span class="js-blur">Blog</span>
        </a>
        <a href="#" class="menu-item">
            <span class="js-blur">Contact</span>
        </a>
    </nav>
</div>
<button class="menu-toggle"><span>Open Menu</span></button>
<div id="app">

    <main class="">
        @yield('content')
    </main>

    <footer class="position-relative py-5 min-vh-100">
        <div class="position-absolute" style="left: 0; top: 0;" id="three_background"></div>
        <div class="backdrop"></div>
        <div class="container position-relative text-white">
            <div class="row">
                <div class="row position-relative min-vh-100 align-items-center justify-content-center">

                    <div class="col-10 text-white">
                        <div class="position-absolute row align-items-center" style="left: -1%; top: -10%;">
                            <span><hr class="border-dark" style="width: 50px;"></span>
                            &nbsp;
                            <span class="small">Interested?</span>
                        </div>
                        <div class="position-relative">
                            <h4 class="text-uppercase font-roboto font-weight-bold display-3">We really hope for our
                                future collaboration!</h4>
                            <p class="font-roboto ">Bishkek</p>
                        </div>
                        <div class="">
                            <a href="mailto:mount.studio.kg@gmail.com"><p class="text-white">mount.studio.kg@gmail.com</p></a>
                            <a href="tel:+996 701 001 052"><p class="text-white">+996 701 001 052</p></a>
                            <a href="tel:+996 755 020 197"><p class="text-white">+996 755 020 197</p></a>
                            <p class="text-white">Shopokova str. 121/1(Red Centre) 5 floor 516 cab</p>
                        </div>
                    </div>
                    <div class="col-2 text-white">
                        <p>Send a request</p>
                        <a href="#portfolio">
                            <img src="{{ asset('img/logo_white.png') }}" class="position-absolute" style="z-index: 4; right: 20px;" alt="">
                        </a>
                    </div>
                </div>
            </div>
    </footer>


</div>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/motionblur.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
@stack('scripts')
</body>
</html>
