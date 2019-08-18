<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Font 'Lato' -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400">

    <!-- Icon Font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Testimonials -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />


    <link rel="stylesheet" type="text/css" href="{{ asset('css/themeapp.css') }}">

    <title>We Care</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-xl-3 col-lg-3 col-md-4 sidebar fixed-top">
                    <div class="bottom-border pb-2 text-center mb-2 mt-2">
                        <a href="{{ url('/') }}"><img src="img/logo.png" style="width: 70px;" alt="logo"></a>
                    </div>
                    <div class="bottom-border py-2 text-center">
                        <img src="{{ asset(Storage::url($user->photo)) }}" onerror="this.src='https://placehold.it/200x200'" style="width: 150px;" alt="Photo" class="mb-3 border border-success">
                        <div>
                            <a href="#" class="text-white">{{ Auth::user()->first_name }}</a>
                        </div>
                    </div>
                    <ul class="navbar-nav flex-column mx-4 my-4 ic">
                        <li class="nav-item"><a href="#service" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-home text-light mr-3"></i>Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-user text-light mr-3"></i>Profile</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-envelope text-light mr-3"></i>Inbox</a></li>
                        <li class="nav-item"><a href="#gallery" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-image text-light mr-3"></i>Gallery</a></li>
                        <li class="nav-item"><a href="#service" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-briefcase text-light mr-3"></i>Service</a></li>
                        <!--<li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-wrench text-light mr-3"></i>Settings</a></li>-->
                        <!--<li class="nav-item"><a href="#review" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-star text-light mr-3"></i>Review</a></li>-->
                        <li class="nav-item"><a href="{{ url('/logout') }}" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-sign-out-alt text-light mr-3"></i>Logout</a></li>
                    </ul>
                </div>
                <!-- end of sidebar -->

                <!-- top-nav -->
                <div class="col-xl-9 col-lg-9 col-md-8 ml-auto bgc-dark fixed-top py-3 top-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <a class="navbar-brand" href="{{ url('/') }}">We Care</a>
                        </div>
                        <div class="col-md-5">
                            <form method="GET" action="{{ url('services') }}" class="form-inline my-2 my-lg-0">
                                <input class="form-control search-input mr-sm-2" type="text" value="{{ @$_REQUEST['search'] }}" name="search" placeholder="Looking for ..." aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <ul class="navbar-nav">
                                <li class="nav-item icon-parent mt-2"><a href="#" class="nav-link icon-bullet"><i class="fas fa-comments text-muted fa-lg"></i></a></li>
                                <li class="nav-item icon-parent mt-2"><a href="#" class="nav-link icon-bullet"><i class="fas fa-bell text-muted fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of top-nav -->
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->

<!-- cards -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-8 ml-auto">
                <div class="row pt-md-4 mt-md-4">
                    <section class="profilebg">
                        <div class="container">
                            @include('partials.alert')
                            <div class="marginfix" id="profile">
                                <div class="card">
                                    <div class="card-header shadow p-3 bgc-dark rounded text-white">
                                        <h1 class="form-title text-center mx-5">Personal information</h1>
                                    </div>
                                    <div class="body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="p-5">
                                                    <img src="{{ asset(Storage::url($user->photo)) }}" onerror="this.src='https://placehold.it/200x200'" alt="Photo" class="img-fluid imagecenter">
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">First Name</th>
                                                            <td>{{ $user->first_name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Last Name</th>
                                                            <td>{{ $user->last_name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Email</th>
                                                            <td>{{ $user->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Phone Number</th>
                                                            <td>{{ $user->phone_number }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Nid</th>
                                                            <td>{{ $user->nid }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th style="width: 45%" scope="row">Address</th>
                                                            <td>{{ $user->address }}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header shadow p-3 bg-light rounded text-center">
                                        <a class="btn btn-success" href="{{ url('profile/edit') }}" role="button">Edit Information</a>
                                    </div>
                                </div>
                            </div>

                            <div class="marginfix" id="gallery">
                                <div class="card">
                                    <div class="card-header shadow p-3 bgc-dark rounded text-white">
                                        <h1 class="form-title text-center mx-5">Photo Gallery</h1>
                                    </div>
                                    @foreach($serviceDetails as $sd)
                                        <div class="p-5">
                                            <img src="{{ asset(Storage::url($sd->photo)) }}" onerror="this.src='https://placehold.it/200x200'" alt="Photo" class="img-fluid imagecenter">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="marginfix" id="service">
                                <div class="card" id="service">
                                    <div class="card-header shadow p-3 mb-3 bgc-dark rounded text-white">
                                        <h1 class="form-title text-center mx-5">My Services</h1>
                                    </div>

                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                            <tr>

                                                <th scope="col" style="width: 15%">Service Title</th>
                                                <th scope="col" style="width: 55%">Offerings Description</th>
                                                <th scope="col">Photo</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($serviceDetails as $sd)
                                                <tr>
                                                    <td>{{ $sd->title }}</td>
                                                    <td>{{ $sd->offerings }}</td>
                                                    <td>
                                                        <img src="{{ asset(Storage::url($sd->photo)) }}" onerror="this.src='https://placehold.it/200x200'" alt="Photo" class="img-fluid imagecenter">
                                                    </td>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-header shadow p-3 bg-light rounded text-center">
                                        <a class="btn btn-success" href="{{ url('service') }}" role="button">Add Service</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of cards -->









<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
</body>
</html>
