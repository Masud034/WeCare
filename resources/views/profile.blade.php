@extends('master')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/themeapp.css') }}">

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="sidebar" style="margin-top: -20px">
                    <div class="bottom-border py-2 text-center">
                        <img src="{{ asset(Storage::url($user->photo)) }}" onerror="this.src='https://placehold.it/200x200'" style="width: 150px;" alt="Photo" class="mb-3 border border-success">
                        <div>
                            <a href="{{ url('/services') }}" class="text-white">{{ Auth::user()->first_name }}</a>
                        </div>
                    </div>
                    <ul class="navbar-nav flex-column mx-4 my-4 ic">
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-user text-light mr-3"></i>Profile</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-envelope text-light mr-3"></i>Inbox</a></li>
                        <li class="nav-item"><a href="#service" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-briefcase text-light mr-3"></i>Service</a></li>
                        <!--<li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-wrench text-light mr-3"></i>Settings</a></li>-->
                        <!--<li class="nav-item"><a href="#review" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-star text-light mr-3"></i>Review</a></li>-->
                        <li class="nav-item"><a href="#gallery" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-image text-light mr-3"></i>Gallery</a></li>
                        <li class="nav-item"><a href="{{ url('/logout') }}" class="nav-link text-white p-3 mb-1 sidebar-link text-center"><i class="fas fa-sign-out-alt text-light mr-3"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">

                    <div class="" id="profile">
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

                    <div class="" id="service">
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

                    <div class="" id="gallery">
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


                </div>
            </div>
        </div>
    </div>

@endsection
