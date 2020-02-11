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
            <feGaussianBlur in="SourceGraphic" stdDeviation="0,0" />
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
            <div class="container position-relative">
                <div class="row">
                    <div class="col-4 text-white">
                        <p>list</p>
                        <p>list</p>
                        <p>list</p>
                        <p>list</p>
                    </div>
                </div>
            </div>
        </footer>



        <section class="min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="position-relative">
                                <img src="{{ asset('img/apps.17555.14449609212792458.454eef9f-a0a5-4522-b519-e81aa7b40d6e.jfif') }}" alt="" class="card-img-top">
                                <div class="backdrop"></div>
                            </div>
                            <div class="card-body position-relative">
                                <div class="position-absolute bg-white px-2 border border-danger" style="left: 50%; top: 0; transform: translate(-50%, -50%);">
                                    <p class="text-danger font-weight-bold m-0">Mount</p>
                                </div>
                                <h3>Lorem ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsum perferendis veritatis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="min-vh-100  bg-white" style="overflow-x: hidden;">

            <div class="container min-vh-100">
                <div class="row position-relative min-vh-100 align-items-center justify-content-center">

                    <div class="col-11">
                        <div class="display-1 font-montserrat font-weight-bold position-absolute" style="font-size: 445px; left: 50%; top: 0; transform: translate(-50%, -50%); color: #F8F8F8;">hello</div>
                        <div class="position-absolute row align-items-center" style="left: -1%; top: -50%;">
                            <span><hr class="border-dark" style="width: 50px;"></span>
                            &nbsp;
                            <span class="small">Who we are?</span>
                        </div>
                        <div class="position-relative">
                            <h2 class="text-uppercase font-roboto font-weight-bold display-3">We are - Mount Studio.</h2>
                            <p class="font-roboto ">New technologies, a creative approach and the desire to always be one step ahead are the basic principles of our studio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/motionblur.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
@stack('scripts')
</body>
</html>
