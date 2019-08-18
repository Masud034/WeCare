@extends('master')

@section('content')

<<<<<<< HEAD
<section class="signup">
    <div class="container cc">
        <div class="signup-content">
            <form enctype="multipart/form-data" method="POST" action="{{ url('/service') }}">
                {{ csrf_field() }}
                <div class="card-header shadow p-3 mb-5 bg-white rounded">
                    <h1 class="form-title">Add Service</h1>
                </div>
                <div class="form-group">
                    <label for="service_id">Select Service</label>
                    <select name="service_id" id="service_id" class="form-input shadow-sm p-3 mb-1 bg-white rounded">
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
                    <label for="offerings">Service offerings</label>
                    <textarea name="offerings" id="offerings" class="form-input shadow-sm p-3 mb-1 bg-white rounded"></textarea>

                    @error('offerings')
                    <span class="invalid-feedback" role="alert">
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
=======
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
          <textarea name="offerings" class="form-control" placeholder="Enter Your Offerings"></textarea> 

          @error('offerings')
          <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>
       <div class="form-group">
              <label>Payment</label>
              <input type="number" name ="payment" class="form-control" placeholder="Enter BDT Per Day">
              @error('payment')
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
>>>>>>> b45ccac622175b198bceeb09f5f461063d3d35db


@endsection
