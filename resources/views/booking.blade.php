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
                <th>Provider Details</th>
                <th>Booking Id</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Ratings</th>                                
              </tr>
            </thead>
            <tbody>
              @foreach($asAcustomerBookings as $customerBooking)
                <tr>
                  <td>
                    <span class="badge badge-info">{{ $customerBooking->title }}</span>
                  </td>
                  <td>                  
                    <address>
                      <strong>{{ $customerBooking->name }}</strong>
                      <br>
                      {{ $customerBooking->phone_number }}
                      <br>
                      <i class="fa fa-map-marker"></i> {{ $customerBooking->address }}
                    </address>
                  </td>
                  <td>
                    <span class="badge badge-warning">{{ $customerBooking->booking_id }}</span>
                  </td>
                  <td>{{ $customerBooking->from_date }}</td>
                  <td>{{ $customerBooking->to_date }}</td>
                  <td>BDT {{ $customerBooking->amount }}</td>
                  <td>
                    <span class="badge badge-primary">{{ $customerBooking->status }}</span>
                  </td>
                  <td>
                    <i class="fa fa-star" data-value="1" title="Click to rate" onclick="rateThisService(1, '{{ $customerBooking->booking_id }}')" style="color: {{ ($customerBooking->rating >= 1) ? '#ffc107' : '#000000'}}"></i>
                    <i class="fa fa-star" data-value="2" title="Click to rate" onclick="rateThisService(2, '{{ $customerBooking->booking_id }}')" style="color: {{ ($customerBooking->rating >= 2) ? '#ffc107' : '#000000'}}"></i>
                    <i class="fa fa-star" data-value="3" title="Click to rate" onclick="rateThisService(3, '{{ $customerBooking->booking_id }}')" style="color: {{ ($customerBooking->rating >= 3) ? '#ffc107' : '#000000'}}"></i>
                    <i class="fa fa-star" data-value="4" title="Click to rate" onclick="rateThisService(4, '{{ $customerBooking->booking_id }}')" style="color: {{ ($customerBooking->rating >= 4) ? '#ffc107' : '#000000'}}"></i>
                    <i class="fa fa-star" data-value="5" title="Click to rate" onclick="rateThisService(5, '{{ $customerBooking->booking_id }}')" style="color: {{ ($customerBooking->rating >= 5) ? '#ffc107' : '#000000'}}"></i>
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
                <th>Customer Details</th>
                <th>Booking Id</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Rating</th>                
              </tr>
            </thead>
            <tbody>
              @foreach($asAProviderBookings as $providerBooking)
                <tr>
                  <td>
                    <span class="badge badge-info">{{ $providerBooking->title }}</span>
                  </td>
                  <td>
                    <address>
                      <strong>{{ $providerBooking->name }}</strong>
                      <br>
                      {{ $providerBooking->phone_number }}
                      <br>
                      {{ $providerBooking->address }}
                    </address>
                  </td>
                  <td>
                    <span class="badge badge-warning">{{ $providerBooking->booking_id }}</span>
                  </td>
                  <td>{{ $providerBooking->from_date }}</td>
                  <td>{{ $providerBooking->to_date }}</td>
                  <td>BDT {{ $providerBooking->amount }}</td>
                  <td>
                    <span class="badge badge-primary">{{ $providerBooking->status }}</span>
                  </td>
                  <td>
                    <i class="fa fa-star" data-value="1" style="color: {{ ($providerBooking->rating >= 1) ? '#ffc107' : '#000000'}}"></i>
                    <i class="fa fa-star" data-value="2" style="color: {{ ($providerBooking->rating >= 2) ? '#ffc107' : '#000000'}}"></i>
                    <i class="fa fa-star" data-value="3" style="color: {{ ($providerBooking->rating >= 3) ? '#ffc107' : '#000000'}}"></i>
                    <i class="fa fa-star" data-value="4" style="color: {{ ($providerBooking->rating >= 4) ? '#ffc107' : '#000000'}}"></i>
                    <i class="fa fa-star" data-value="5" style="color: {{ ($providerBooking->rating >= 5) ? '#ffc107' : '#000000'}}"></i>
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

@section('customJS')
  <script>
    function rateThisService(rating, booking_id) {
      window.location.href = "rate-service/booking/" + booking_id + "/rating/" + rating;
    } 
  </script>
@endsection