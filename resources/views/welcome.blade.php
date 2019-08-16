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
                            <a href="{{ url('/about') }}#elderly-header" class="btn btn-outline-success btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-3">
                            <h1 class="display-3">Child Care</h1>
                            <p class="lead">Users can offer child care service to busy or working parents for some money including service fee of WeCare or choose to take such service from thousands of registered users.</p>
                            <a href="{{ url('/register') }}" class="btn btn-success btn-lg">Sign Up Now</a>
                            <a href="{{ url('/about') }}#child-header" class="btn btn-outline-success btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-3">
                            <h1 class="display-3">Pets Care</h1>
                            <p class="lead">Users can offer take care service for pets to other users for some money including service fee of WeCare or choose to take such service from thousands of registered users.</p>
                            <a href="{{ url('/register') }}" class="btn btn-success btn-lg">Sign Up Now</a>
                            <a href="{{ url('/about') }}#pets-header" class="btn btn-outline-success btn-lg">Learn More</a>
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

    <section id="testimonials" class="p-4 bg-dark text-white">
        <div class="container">
            <h2 class="text-center">Testimonials</h2>
            <div class="row text-center">
                <div class="col">
                    <div class="slider">
                        <div>
                            <blockquote class="blockguote">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti dolore ea enim eos est nemo optio pariatur perspiciatis sapiente, ullam veritatis! Exercitationem, expedita repellendus? Ab animi dicta incidunt maxime necessitatibus officia quae rerum sunt.
                                </p>
                                <footer class="blockquote-footer">John Doe
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="blockguote">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque debitis deleniti explicabo fugiat, nam quo reiciendis saepe totam voluptatibus! Animi aperiam autem dignissimos error eum, illo iure, nesciunt officiis placeat quidem rem repudiandae, voluptatum.
                                </p>
                                <footer class="blockquote-footer">Sam Smith
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="blockguote">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at deleniti dicta dolores ducimus, ex, explicabo illo incidunt ipsam magnam modi molestiae natus nemo nesciunt nisi porro qui quidem quisquam rerum sed tempora tempore veritatis!
                                </p>
                                <footer class="blockquote-footer">Meghan William
                                </footer>
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
