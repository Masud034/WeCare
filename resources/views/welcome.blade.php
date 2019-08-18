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


    <section class="py-5" id="steps">
        <div class="container steps">
            <div class="row">
                <div class="col-md-3 mb-4 text-center">
                    <i class="fas fa-user-plus fa-4x mb-2"></i>
                    <h3>Register</h3>
                    <p>Register today and provide care to other registered user or look for a care now.</p>
                </div>
                <div class="col-md-3 mb-4 text-center">
                    <i class="fas fa-search-plus fa-4x mb-2"></i>
                    <h3>Search Care</h3>
                    <p>Search available service that other user provide and find the care you're looking for.</p>
                </div>
                <div class="col-md-3 mb-4 text-center">
                    <i class="fas fa-hand-holding-usd fa-4x mb-2"></i>
                    <h3>Provide care</h3>
                    <p>Find a care that you are capable to provide to the other registered users.</p>
                </div>
                <div class="col-md-3 mb-4 text-center">
                    <i class="fas fa-money-check-alt fa-4x mb-2"></i>
                    <h3>Earn Money</h3>
                    <p>You can eary handy money by providing care regardless of age, profession or experience.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="p-4 bg-dark text-white">
        <div class="container">
            <h1 class="text-center">Testimonials</h1>
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

    <section class="bg-light text-center p-5">
        <div class="container-fluid cfluid">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="card card-1 text-light py-4 my-4 mx-auto">
                        <div class="card-body">
                            <h5 class="text-uppercase font-weight-bold mb-3">SERVICE TYPE ONE</h5>
                            <h3 class="display-4">Elderly Care Options</h3>
                            <ul class="list-unstyled">
                                <li class="font-weight-bold py-3 card-list-item">Nursing care</li>
                                <li class="font-weight-bold py-3 card-list-item">Home care for a day</li>
                                <li class="font-weight-bold py-3 card-list-item">Foster care for a day</li>
                                <li class="font-weight-bold py-3 card-list-item border-0">Resident contract care</li>
                            </ul>
                            <a href="{{ url('/register') }}" class="btn p-2 text-uppercase font-weight-bold price-card-button text-light">sign-up</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-2 text-light py-4 my-4 mx-auto">
                        <div class="card-body">
                            <h5 class="text-uppercase font-weight-bold mb-3">SERVICE TYPE TWO</h5>
                            <h3 class="display-4">Child Care Options</h3>
                            <ul class="list-unstyled">
                                <li class="font-weight-bold py-3 card-list-item">Babysit care</li>
                                <li class="font-weight-bold py-3 card-list-item">Home care for a day</li>
                                <li class="font-weight-bold py-3 card-list-item">Foster care for a day</li>
                                <li class="font-weight-bold py-3 card-list-item ">Resident contract care</li>
                            </ul>
                            <a href="{{ url('/register') }}" class="btn p-2 text-uppercase font-weight-bold price-card-button text-light">sign-up</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-3 text-light py-4 my-4 mx-auto">
                        <div class="card-body">
                            <h5 class="text-uppercase font-weight-bold mb-3">SERVICE TYPE THREE</h5>
                            <h3 class="display-4">Pets Care Options</h3>
                            <ul class="list-unstyled">
                                <li class="font-weight-bold py-3 card-list-item">Transport service</li>
                                <li class="font-weight-bold py-3 card-list-item">Home care for a day</li>
                                <li class="font-weight-bold py-3 card-list-item">Foster care for a day</li>
                                <li class="font-weight-bold py-3 card-list-item border-0">Resident contract care</li>
                            </ul>
                            <a href="{{ url('/register') }}" class="btn p-2 text-uppercase font-weight-bold price-card-button text-light">sign-up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content-home')

    <section class="dash">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-xl-2 col-lg-3 col-md-4 sidebar">

                    <div class="bottom-border pb-3">
                        <img src="images/admin.jpeg" width="50" class="rounded-circle mr-3">
                        <a href="#" class="text-white">Helen Smith</a>
                    </div>
                    <ul class="navbar-nav flex-column mt-4">
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>Profile</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Inbox</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>Sales</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>Analytics</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Charts</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i>Tables</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>Documentation</a></li>
                    </ul>
                </div>
                <!-- end of sidebar -->

                <!-- top-nav -->
                <div class="col-lg-9">

                </div>
                <!-- end of top-nav -->
            </div>
        </div>
    </section>

@endsection
