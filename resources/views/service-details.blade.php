@extends('master')
@section('content')
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Service Details</div>
                        <img src="{{ asset(Storage::url($serviceDetails->service_photo)) }}" class="card-img-top" onerror="this.src='https://placehold.it/200x200'" alt="Photo" class="img-responsive">
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Service Category</th>
                                    <td>{{ $serviceDetails->title }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Method</th>
                                    <td>Cash</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p><u><strong>Offerings</strong></u></p>
                                        <p>{{ $serviceDetails->offerings }}</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Provider Details</div>
                        <img src="{{ asset(Storage::url($serviceDetails->user_photo)) }}" class="card-img-top" onerror="this.src='https://placehold.it/200x200'" alt="Photo" class="img-responsive">
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $serviceDetails->name }}</td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td>
                                        {{ auth()->check() ? $serviceDetails->phone_number : '*********'}}

                                        {!! auth()->guest() ? '<p><small class="text-danger">Login to view</small></p>' : '' !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>
                                    {{ auth()->check() ? $serviceDetails->email : '*********'}}

                                    {!! auth()->guest() ? '<p><small class="text-danger">Login to view</small></p>' : '' !!}

                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $serviceDetails->address }}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
