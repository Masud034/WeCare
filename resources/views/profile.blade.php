@extends('master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-5">
			<div class="card">
				<div class="card-header">
					Your Profile

					<a class="float-right" href="{{ url('profile/edit') }}">Edit information</a>
				</div>
				<div class="body">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<table class="table table-bordered">			  
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
											<th scope="row">Address</th>
											<td>{{ $user->address }}</td>			      
										</tr>			    
									</tbody>
								</table>
							</div>						
							<div class="offset-md-1 col-md-4">
								<img src="{{ asset(Storage::url($user->photo)) }}" onerror="this.src='https://placehold.it/200x200'" style="width: 200px;" alt="Photo" class="img-thumbnail">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	

		<div class="col-md-7">
			<div class="card">
				<div class="card-header">
					My Services

					<a class="btn btn-sm btn-primary float-right" href="{{ url('service') }}">
						+ Add Service
					</a>
				</div>

				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								
								<th scope width="25%" ="col">Service Title</th>
								<th scope width="25%" ="col">Offerings</th>
								<th scope width="10%" ="col">Payment</th>
								<th scope width="50%" ="col">Photo</th>
							</tr>
						</thead>
						<tbody>

						  @foreach($serviceDetails as $sd)
							<tr>
								<td>{{ $sd->title }}</td>
								<td>{{ $sd->offerings }}</td>
								<td>BDT {{ $sd->payment }} per day</td>
								<td>
									<img src="{{ asset(Storage::url($sd->photo)) }}" onerror="this.src='https://placehold.it/200x200'" style="width: 200px;" alt="Photo" class="img-thumbnail">
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
</div>

@endsection