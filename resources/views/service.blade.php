@extends('master')

@section('content')

<div class="container">
 <div class ="row">
  <div class="offset-md-2 col-lg-8">
   <div class="card">
     <div class="card-header">Services</div>
     <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="{{ url('/service') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label>Select service</label>
          <select name="service_id" class="form-control">
            <option value="">Select one</option>
            @foreach($services as $service)
              <option value="{{ $service->id }}">{{ $service->title }}</option>
            @endforeach
          </select> 
          @error('service_id')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>Service offerings</label>
          <textarea name="offerings" class="form-control"></textarea> 

          @error('offerings')
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

      <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
  </div>
</div> 
</div>
</div>
</div>


@endsection