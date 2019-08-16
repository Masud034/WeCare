@extends('master')

@section('content')
    <section id="showcase">
        <div id="myCarousel" class="carousel slide" date-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-3">
                            <h1 class="display-3">Elderly Care</h1>
                            <p class="lead">Users can offer nursing service to elderly people by contract for some money including service fee of WeCare or choose to take such service from thousands of registered users.</p>
                            <a href="{{ url('/register') }}" class="btn btn-success btn-lg">Sign Up Now</a>
                            <a href="{{ url('/about') }}" class="btn btn-outline-success btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-3">
                            <h1 class="display-3">Child Care</h1>
                            <p class="lead">Users can offer child care service to busy or working parents for some money including service fee of WeCare or choose to take such service from thousands of registered users.</p>
                            <a href="{{ url('/register') }}" class="btn btn-success btn-lg">Sign Up Now</a>
                            <a href="{{ url('/about') }}" class="btn btn-outline-success btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-3">
                            <h1 class="display-3">Pets Care</h1>
                            <p class="lead">Users can offer take care service for pets to other users for some money including service fee of WeCare or choose to take such service from thousands of registered users.</p>
                            <a href="{{ url('/register') }}" class="btn btn-success btn-lg">Sign Up Now</a>
                            <a href="{{ url('/about') }}" class="btn btn-outline-success btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>



@endsection
