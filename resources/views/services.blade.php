@extends('master')
@section('content')
<div class="container">
	<div class="row">
		@foreach($serviceProviders as $sp)
		<div class="col-md-4" style="margin-bottom: 20px;">
			<div class="card">
			<img src="{{ asset(Storage::url($sp->photo)) }}" class="card-img-top" onerror="this.src='https://placehold.it/200x200'" style="height: 200px;" alt="Photo" class="img-thumbnail">
			<div class="card-body">
				<h5 class="card-title">Provider: {{ $sp->first_name }}</h5>
				<p class="card-text">{{ $sp->offerings }}</p>
				<p class="card-text text-right">
					<small class="text-muted"><em>Category:</em></small>
					<small class="text-success">{{ $sp->title }}</small>
				</p>
			</div>
		</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
