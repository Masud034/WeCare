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

    <section class="servicebg">
        <div class="container">
            <div class="row">
                @if( count($serviceProviders) > 0)

                    @foreach($serviceProviders as $sp)
                        <div class="col-md-4" style="margin-bottom: 20px;">
                            <div class="card">
                                <img src="{{ asset(Storage::url($sp->photo)) }}" class="card-img-top" onerror="this.src='https://placehold.it/200x200'" style="height: 200px;" alt="Photo" class="img-thumbnail">
                                <div class="card-body">
                                    <h5 class="card-title">Provider: {{ $sp->first_name }}</h5>
                                    <p class="card-text">{{ $sp->offerings }}</p>
                                    <p class="card-text">
                                        <small class="text-muted"><em>Category:</em></small>
                                        <small class="text-success">{{ $sp->title }}</small>
                                        <a class="btn btn-primary btn-sm float-right" href="{{ url('service-details', [$sp->user_id, $sp->service_id]) }}">View Details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @else
                    <div class="jumbotron">
                        <h1 class="display-4">404 Not Found</h1>
                        <p class="lead">Sorry! We are unable to find anything against your search. You can try something like <strong>Pet Care</strong>, <strong>Elderly Care</strong>, <strong>Child Care</strong> etc.</p>
                        <hr class="my-4">
                        <a class="btn btn-primary btn-lg" href="{{ url('/') }}" role="button">Home Page</a>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
