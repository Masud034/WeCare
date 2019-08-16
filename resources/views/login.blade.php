@extends('master')

@section('content')

 <div class="container">
   <div class ="row">
    <div class="offset-md-3 col-lg-6">
         <div class="card">
           <div class="card-header">Login</div>
           <div class="card-body">
              <form method="POST" action="{{ url('/login') }}">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
                    @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

                    @error('password')
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