@extends('master')

@section('content')


 <section class="login">
     <div class="container cc">
         <div class="signup-content">
             <form method="POST" action="{{ url('/login') }}">
                 {{ csrf_field() }}
                 <div class="card-header shadow p-3 mb-5 bg-white rounded">
                     <h1 class="form-title">Login</h1>
                 </div>
                 <div class="form-group">
                     <label for="email">Email address</label>
                     <input type="email" class="form-input shadow-sm p-3 mb-1 bg-white rounded" name="email" id="email" placeholder="Email" value="{{ old('email') }}"/>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                     @enderror
                 </div>
                 <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" class="form-input shadow-sm p-3 mb-1 bg-white rounded" name="password" id="password" placeholder="Password"/>
                     <span toggle="#password" class="fas fa-eye-slash field-icon toggle-password"></span>
                     @error('password')
                     <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                           </span>
                     @enderror
                 </div>
                 <div class="form-group">
                     <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                     <label for="agree-term" class="label-agree-term">Remember me</label>
                     <a href="#" class="forget">Forgot Password</a>
                 </div>
                 <div class="form-group">
                     <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                 </div>
             </form>
             <p class="loginhere">
                 Don't have an Account? <a href="{{ url('/register') }}" class="loginhere-link"> Sign up now</a>
             </p>
         </div>
     </div>
 </section>


@endsection
