<div class="container py-4 position-fixed" style="z-index: 7;">
    <div class="row">
        <div class="col-12">
            <a href="#">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </a>
        </div>
    </div>
</div>

<div class="container-fluid position-relative" style="">
    <div class="row justify-content-center">
        <div class="col-12 position-absolute centered-absolute" style="z-index: 4;">
            <p class="text-uppercase font-montserrat text-mount font-weight-bold text-white text-center">Mount studio</p>
        </div>
        <a href="#portfolio">
            <img src="{{ asset('img/portfolio.png') }}" class="position-absolute" style="z-index: 4; right: 20px; bottom: 20px;" alt="">
        </a>
        <div class="col-9 centered-shadow vh-70 position-absolute centered-absolute">
        </div>
        <div class="col-12 p-0">
            <div id="container">
                <div class="backdrop-light"></div>
                <video autoplay muted loop>
                    <source src="{{ asset('video/main.min.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>
