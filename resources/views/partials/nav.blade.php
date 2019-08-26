<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand logo" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
    <a class="navbar-brand" href="{{ url('/') }}">We Care</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          <form method="GET" action="{{ url('services') }}" class="form-inline my-2 my-lg-0">
              <input class="form-control search-input mr-sm-2" type="text" value="{{ @$_REQUEST['search'] }}" name="search" placeholder="Looking for ..." aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/services') }}">Services <span class="sr-only">(current)</span></a>
        </li>
        @endguest
        @if( auth()->check() )
          <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ url('/services') }}">Services</a>
          <a class="nav-link" href="{{ url('booking') }}">Bookings <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{ Auth::user()->first_name }}</a>
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

    </div>
  </nav>
