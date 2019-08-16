@extends('master')

@section('content')
<div class="container">
  <div class="row">
    <div class="offset-md-3 col-md-6">
      <div class="card">
        <div class="card-header">Registration Form</div>
        <div class="card-body">          
            <form method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}

            <div class="form-group">
              <label>First Name</label>
              <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ old('first_name') }}">
              @error('first_name')
                  <span class="invalid-feedback" role="alert alert-danger">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Last Name</label>
              <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}">
              @error('last_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Phone Number</label>
              <input type="tel" name="phone_number" class="form-control" placeholder="Enter your number" value="{{ old('phone_number') }}">
              @error('phone_number')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label>NID</label>
              <input type="number" name ="nid" class="form-control" placeholder="Enter your NID" value="{{ old('nid') }}">
              @error('nid')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Address</label>
              <input type="address" name="address" class="form-control" placeholder="Enter your address" value="{{ old('address') }}">
              @error('address')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Email address</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Re-Enter Password</label>
              <input type="password" name="password_confirmation" class="form-control" placeholder="Re-Enter Password">
              @error('password_confirmation')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>  
  </div>
</div>
@endsection