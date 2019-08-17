@extends('master')
@section('content')

    <header id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center">
                    <h1>Services</h1>
                    <p>We provide a online platform for registered user to take small jobs from other users for a small amoung of money.</p>
                </div>
            </div>
        </div>
    </header>

    <!--SERVICES-->

    <section class="bg-light text-center p-5">
        <div class="container-fluid">
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

    <section id="faq" class="p-5 bg-dark text-white">
        <div class="container">
            <h1 class="text-center faq-h">Frequently Asked Question</h1>
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6">
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
@endsection
