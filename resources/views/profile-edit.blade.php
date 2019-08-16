@extends('master')

@section('content')

<div class="container">
	<div class="row">
		<div class="offset-md-2 col-md-8">
			<div class="card">
				<div class="card-header">Update your information</div>
				<div class="card-body">
					<form enctype="multipart/form-data" method="POST" action="{{ url('/profile/edit') }}">
						{{ csrf_field() }}

						<div class="form-group">
							<label>First Name</label>
							<input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $user->first_name }}">
							@error('first_name')
							<span class="invalid-feedback" role="alert alert-danger">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label>Last Name</label>
							<input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $user->last_name }}">
							@error('last_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label>Phone Number</label>
							<input type="tel" name="phone_number" class="form-control" placeholder="Enter your number" value="{{ $user->phone_number }}">
							@error('phone_number')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label>NID</label>
							<input type="number" name ="nid" class="form-control" placeholder="Enter your NID" value="{{ $user->nid }}">
							@error('nid')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label>Address</label>
							<input type="address" name="address" class="form-control" placeholder="Enter your address" value="{{ $user->address }}">
							@error('address')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label>Email address</label>
							<input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $user->email }}">
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group">
							<label>Photo</label>
							<input type="file" name="photo" class="" />
							@error('photo')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<button type="submit" class="btn btn-primary float-right">Update</button>
					</div>
				</div>
			</div>				
		</div>	
	</div>
</div>

@endsection