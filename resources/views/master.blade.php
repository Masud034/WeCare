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

      <!-- Testimonials -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <style type="text/css">
      .invalid-feedback {
        display: block;
      }
      *,
      *::after,
      *::before{
          margin: 0;
          box-sizing: border-box;
      }
      html,
      body {
          font-family: 'Lato', 'Arial', sans-serif;
          font-size: 16px;
          text-rendering: optimizeLegibility;
          overflow-x: hidden;
      }
      .container {
        padding: 20px;
      }
      .navbar {
          background-color: rgba(0,0,0,0.9) !important;
      }
      .navbar .nav-link {
      font-size: 14px;
      text-transform: uppercase;
      padding-left: 1rem !important;
      padding-right: 1rem !important;
      }
      .nav-item a {
          font-size: 120%;
          text-transform: uppercase;
          font-weight: 700;
          display: inline-block;
          background-image: linear-gradient(to right, #7ed56f, #28b485) !important;
          -webkit-background-clip: text !important;
          color: transparent !important;
          letter-spacing: .2rem;
          transition: all .2s;
          vertical-align: top;
          box-orient: vertical; }
      .nav-item a:hover {
          transform: scale(1.1);
           }
      .navbar .nav-item.active {
        border-left: #444 3px solid;
      }
      .navbar-brand {
          display: inline-block;
          color: #7ed56f;
          font-size: 140%;
          font-weight: 700;
          background-image: linear-gradient(to right, #7ed56f, #28b485) !important;
          -webkit-background-clip: text !important;
          color: transparent !important;
      }
      .navbar-brand img {
          height: 50px;
      }
      .carousel-item {
          height: 600px;
      }
      .carousel-image-1 {
          background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url({{ asset('img/picture1.jpg') }});
          background-size: cover;
          background-position: bottom;
          background-attachment: fixed;
      }
      .carousel-image-2 {
          background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url({{ asset('img/picture2.jpg') }});
          background-size: cover;
          background-position: top;
          background-attachment: fixed;
      }
      .carousel-image-3 {
          background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url({{ asset('img/picture3.jpg') }});
          background-size: cover;
          background-position: center;
          background-attachment: fixed;
      }
      .carousel-caption h1{
          display: inline-block;
          background-image: linear-gradient(to right, #7ed56f, #28b485);
          -webkit-background-clip: text;
          color: transparent;
      }
      .carousel-caption p{
          font-size: 120%;
          color: #EEEEEE;
      }
      .carousel-caption .btn-success{
          margin-right: 15px;
      }
      .carousel-caption .btn-primary{
          margin-right: 15px;
      }
      footer {
          color: #fff;
          background-attachment: fixed;
          background-color:#222;
      }
      footer p {
          color: #ccc;
      }
      footer a {
          color: #ccc;
      }
      .social-pet li {
          display: inline-block;
          margin-right: 10px;
      }
      .social-pet li a {
          height: 35px;
          width: 35px;
          border-radius: 50%;
          text-align: center;
          display: block;
          line-height: 35px;
          background-color: #3a5a95;
          color: #fff;
      }
      .social-pet li:nth-child(2) a {
          background-color: #57aced;
      }
      .social-pet li:nth-child(3) a {
          background-color: #dd4f43;
      }
      .social-pet li:nth-child(4) a {
          background-color: #6b27b2;
      }
      .social-pet li a:hover {
          background-color: #0141a2;
      }
      .social-pet li a:hover i {
          transform: rotate(360deg);
          -moz-transform: rotate(360deg);
          -webkit-transform: rotate(360deg);
      }
      #contact h5 {
          background-image: linear-gradient(to right, #7ed56f, #28b485) !important;
          -webkit-background-clip: text !important;
          color: transparent !important;
      }
      .footer-logo img {
          height: 120px;
      }
      .footer-logo a {
          background-image: linear-gradient(to right, #7ed56f, #28b485) !important;
          -webkit-background-clip: text !important;
          color: transparent !important;
          margin-left: 7px;
      }
      .copyright {
          margin-top: 20px;
          background-image: linear-gradient(to right, #7ed56f, #28b485) !important;
          -webkit-background-clip: text !important;
          color: transparent !important;
      }
      .menu-list li {
          display: block;
          color: #ccc;
          margin-bottom: 15px;
          list-style: none;
          text-decoration: none;
          padding: 1px;
      }
      .menu-list a {
          text-decoration: none;
          transition: all .2s;
      }
      .col-10 h6 {
          background-image: linear-gradient(to right, #7ed56f, #28b485);
          -webkit-background-clip: text;
          color: transparent;
      }
      .menu-list a:hover,
      .menu-list a:active {
          text-decoration: none;
          background-image: linear-gradient(to right, #7ed56f, #28b485);
          -webkit-background-clip: text;
          color: transparent;
      }
      .ig input {
          padding: 22px;
      }
      footer .input-group-addon {
          background-color: #0141a2;
          padding: 10px;
      }
      .f-address li {
          display: inline-block;
      }
      .f-address li i {
          color: #2995de;
          font-size: 18px;
      }
      .f-address li a {
          color: #ccc;
      }
      #elderly-header {
          background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url({{ asset('img/picture1.jpg') }});
          background-size: cover;
          background-attachment: fixed;
          background-position: bottom;
          height: 450px;
          color: #fff;
          border-bottom: 1px #eee solid;
          padding-top: 50px;
      }
      #child-header {
          background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url({{ asset('img/picture2.jpg') }});
          background-size: cover;
          background-attachment: fixed;
          background-position: top;
          height: 450px;
          color: #fff;
          border-bottom: 1px #eee solid;
          padding-top: 50px;
      }
      #pets-header {
          background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url({{ asset('img/picture3.jpg') }});
          background-size: cover;
          background-attachment: fixed;
          background-position: center;
          height: 450px;
          color: #fff;
          border-bottom: 1px #eee solid;
          padding-top: 50px;
      }
      .about-img {
          margin-top: -50px;
      }
      .mt-10 {
          margin-top: 100px;
       }
        .mt-20 {
            margin-top: 300px;
            display: inline-block;
            background-image: linear-gradient(to right, #7ed56f, #28b485);
            -webkit-background-clip: text;
            color: transparent;
            transition: all .2s;
            text-transform: uppercase;
        }
      .mt-20:hover {
          transform: skew(-5deg) scale(1.1);
          font-weight: 1000;
      }
      .blockquote-footer {
          background-color: transparent;
          margin-top: 15px;
      }
      #testimonials h2 {
          padding: 20px;
          background-image: linear-gradient(to right, #7ed56f, #28b485);
          -webkit-background-clip: text;
          color: transparent;
          text-align: center;
      }
        .tac {
            margin-top: 100px;
        }
        .tac h1,
        .tac h2 {
            background-image: linear-gradient(to right, #7ed56f, #28b485);
            -webkit-background-clip: text;
            color: transparent;
        }
    </style>

    <title>We Care</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand logo" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
      <a class="navbar-brand tname" href="{{ url('/') }}">We Care</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">About <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/services') }}">Services <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">How It Works <span class="sr-only">(current)</span></a>
            </li>
          @if( auth()->check() )
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
            </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">Register</a>
              </li>
          @endif
        </ul>
          @if( auth()->check() )
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Looking for ..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          @endif
      </div>
    </nav>
    <div style="margin-top: 76px;">
      @if( session('alert-title') )
      <div style="margin-top: 10px">
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <h4 class="alert-heading">{{ session('alert-title') }}</h4>
              <p>{{ session('alert-message') }}</p>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      @endif  

      @yield('content')
    </div>

    <footer class="pt-4" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mt-4">
                    <div class="footer-logo text-center">
                        <a href="{{ url('/') }}"><img src="img/logo.png" alt="logo"></a>
                        <h3><a href="{{ url('/') }}">Wecare</a></h3>
                        <div class="copyright">
                            &copy; <span id="year"></span> WeCare. All Rights Reserved.
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                    <h5 class="mb-4 font-weight-bold">MENU</h5>
                    <ul class="menu-list">
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="#contact">Contacts</a></li>
                        <li><a href="{{ url('/terms') }}">Terms & Condition</a></li>
                        <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 mt-2" class="address">
                    <h5 class="mb-4 font-weight-bold">ABOUT US</h5>
                    <ul class="f-address">
                        <li>
                            <div class="row">
                                <div class="col-1"><i class="fas fa-map-marker"></i></div>
                                <div class="col-10">
                                    <h6 class="font-weight-bold mb-0">Address:</h6>
                                    <p>United City, Madani Avenue,  Badda, Dhaka 1212, Bangladesh.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-1"><i class="far fa-envelope"></i></div>
                                <div class="col-10">
                                    <h6 class="font-weight-bold mb-0">Have any questions?</h6>
                                    <p><a href="#">support@wecare.com</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                                <div class="col-10">
                                    <h6 class="font-weight-bold mb-0">Phone:</h6>
                                    <p><a href="#">+88 09604-848-848</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                    <h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
                    <div class="input-group ig">
                        <input type="text" class="form-control" placeholder="Your Email Address">
                        <span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
                    </div>
                    <ul class="social-pet mt-4">
                        <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 5000,
            pause: 'hover'
        })
        $('.slider').slick({
            infinite: true,
            slideToShow: 1,
            slideToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
        })
    </script>
  </body>
</html>