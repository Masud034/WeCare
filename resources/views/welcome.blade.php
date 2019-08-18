@extends('master')

@section('content')
    @if( !(auth()->check()) )
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

    <section id="testimonials" class="p-4 bg-custom-b text-white">
        <div class="container">
            <h1 class="text-center">Testimonials</h1>
            <div class="row text-center">
                <div class="col">
                    <div class="slider">
                        <div>
                            <blockquote class="blockp">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti dolore ea enim eos est nemo optio pariatur perspiciatis sapiente, ullam veritatis! Exercitationem, expedita repellendus? Ab animi dicta incidunt maxime necessitatibus officia quae rerum sunt.
                                </p>
                                <footer class="blockquote-footer">John Doe
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="blockp">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque debitis deleniti explicabo fugiat, nam quo reiciendis saepe totam voluptatibus! Animi aperiam autem dignissimos error eum, illo iure, nesciunt officiis placeat quidem rem repudiandae, voluptatum.
                                </p>
                                <footer class="blockquote-footer">Sam Smith
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="blockp">
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
                            <h3 class="display-5 text-uppercase">Elderly Care Options</h3>
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
                            <h3 class="display-5 text-uppercase">Child Care Options</h3>
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
                            <h3 class="display-5 text-uppercase">Pets Care Options</h3>
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

    <section id="faq" class="p-5 bg-custom text-white">
        <div class="container">
            <h1 class="text-center faq-h">Frequently Asked Question</h1>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="accordion">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne">
                                        What is WeCare?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate dicta itaque perferendis quis rem sit. Architecto cupiditate iure laboriosam odio voluptate? Asperiores at autem consequatur eius eveniet, ut? Dicta ducimus est fugiat magnam officia qui ratione reiciendis ullam voluptas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                        What type of service we provide?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate dicta itaque perferendis quis rem sit. Architecto cupiditate iure laboriosam odio voluptate? Asperiores at autem consequatur eius eveniet, ut? Dicta ducimus est fugiat magnam officia qui ratione reiciendis ullam voluptas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree">
                                        What are the payment methods?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate dicta itaque perferendis quis rem sit. Architecto cupiditate iure laboriosam odio voluptate? Asperiores at autem consequatur eius eveniet, ut? Dicta ducimus est fugiat magnam officia qui ratione reiciendis ullam voluptas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="accordion">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour">
                                        How to report an account?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate dicta itaque perferendis quis rem sit. Architecto cupiditate iure laboriosam odio voluptate? Asperiores at autem consequatur eius eveniet, ut? Dicta ducimus est fugiat magnam officia qui ratione reiciendis ullam voluptas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive">
                                        Why do you charge service fee?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate dicta itaque perferendis quis rem sit. Architecto cupiditate iure laboriosam odio voluptate? Asperiores at autem consequatur eius eveniet, ut? Dicta ducimus est fugiat magnam officia qui ratione reiciendis ullam voluptas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix">
                                        Can user take and provide care with one account?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cupiditate dicta itaque perferendis quis rem sit. Architecto cupiditate iure laboriosam odio voluptate? Asperiores at autem consequatur eius eveniet, ut? Dicta ducimus est fugiat magnam officia qui ratione reiciendis ullam voluptas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    @endif

@endsection
