@extends('master')

@section('content')


<section class="signup">
    <div class="container cc">
        <div class="signup-content">
            <form enctype="multipart/form-data" method="POST" action="{{ url('/profile/edit') }}">
                {{ csrf_field() }}
                <div class="card-header shadow p-3 mb-5 bg-white rounded">
                    <h1 class="form-title">Update your info</h1>
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-input shadow-sm p-3 mb-1 bg-white rounded" placeholder="First Name" value="{{ $user->first_name }}">
                    @error('first_name')
                    <span class="invalid-feedback" role="alert alert-danger">
								<strong>{{ $message }}</strong>
							</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-input shadow-sm p-3 mb-1 bg-white rounded" placeholder="Last Name" value="{{ $user->last_name }}">
                    @error('last_name')
                    <span class="invalid-feedback" role="alert alert-danger">
								<strong>{{ $message }}</strong>
							</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="tel" name="phone_number" id="phone_number" class="form-input shadow-sm p-3 mb-1 bg-white rounded" placeholder="Phone Number" value="{{ $user->phone_number }}">
                    @error('phone_number')
                    <span class="invalid-feedback" role="alert alert-danger">
								<strong>{{ $message }}</strong>
							</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nid">NID</label>
                    <input type="number" name="nid" id="nid" class="form-input shadow-sm p-3 mb-1 bg-white rounded" placeholder="Enter your NID" value="{{ $user->nid }}">
                    @error('nid')
                    <span class="invalid-feedback" role="alert alert-danger">
								<strong>{{ $message }}</strong>
							</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="address" name="address" id="address" class="form-input shadow-sm p-3 mb-1 bg-white rounded" placeholder="Enter your address" value="{{ $user->address }}">
                    @error('address')
                    <span class="invalid-feedback" role="alert alert-danger">
								<strong>{{ $message }}</strong>
							</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Enter address</label>
                    <input type="email" name="email" id="email" class="form-input shadow-sm p-3 mb-1 bg-white rounded" placeholder="Enter email" value="{{ $user->email }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert alert-danger">
								<strong>{{ $message }}</strong>
							</span>
                    @enderror
                </div>
                <div class="form-group mb-5">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-input shadow-sm p-3 mb-1 bg-white rounded" name="photo" id="photo"/>
                    @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Add"/>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
