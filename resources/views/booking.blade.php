@extends('master')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-primary">
          <strong>My Bookings / As a Customer</strong>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Service Type</th>
                <th>Provider Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Booking Id</th>
                <th>Number Of Days</th>
                <th>Amount</th>
                <th>Status</th>                
              </tr>
            </thead>
            <tbody>
              @foreach($asAcustomerBookings as $customerBooking)
                <tr>
                  <td>
                    <span class="badge badge-info">{{ $customerBooking->title }}</span>
                  </td>
                  <td>{{ $customerBooking->name }}</td>
                  <td>{{ $customerBooking->phone_number }}</td>
                  <td>{{ $customerBooking->address }}</td>
                  <td>
                    <span class="badge badge-warning">{{ $customerBooking->booking_id }}</span>
                  </td>
                  <td>{{ $customerBooking->number_of_days }}</td>
                  <td>BDT {{ $customerBooking->amount }}</td>
                  <td>
                    <span class="badge badge-primary">{{ $customerBooking->status }}</span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-warning">
          <strong>My Bookings / As a Provider</strong>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Service Type</th>
                <th>Customer Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Booking Id</th>
                <th>Number Of Days</th>
                <th>Amount</th>
                <th>Status</th>                
              </tr>
            </thead>
            <tbody>
              @foreach($asAProviderBookings as $providerBooking)
                <tr>
                  <td>
                    <span class="badge badge-info">{{ $providerBooking->title }}</span>
                  </td>
                  <td>{{ $providerBooking->name }}</td>
                  <td>{{ $providerBooking->phone_number }}</td>
                  <td>{{ $providerBooking->address }}</td>
                  <td>
                    <span class="badge badge-warning">{{ $providerBooking->booking_id }}</span>
                  </td>
                  <td>{{ $providerBooking->number_of_days }}</td>
                  <td>BDT {{ $providerBooking->amount }}</td>
                  <td>
                    <span class="badge badge-primary">{{ $providerBooking->status }}</span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection