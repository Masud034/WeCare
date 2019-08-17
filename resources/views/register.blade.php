@extends('master')

@section('content')

<section class="signup">
    <div class="container cc">
        <div class="signup-content">
            <form method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="card-header shadow p-3 mb-5 bg-white rounded">
                    <h1 class="form-title">Signup</h1>
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-input shadow-sm p-3 mb-1 bg-white rounded" name="first_name" id="first_name" placeholder="First Name" value="{{ old('first_name') }}"/>
                    @error('first_name')
                    <span class="invalid-feedback" role="alert alert-danger">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-input shadow-sm p-3 mb-1 bg-white rounded" name="last_name" id="last_name" placeholder="Last Name" value="{{ old('last_name') }}"/>
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="tel" class="form-input shadow-sm p-3 mb-1 bg-white rounded" name="phone_number" id="phone_number" placeholder="Enter your number" value="{{ old('phone_number') }}"/>
                    @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nid">NID</label>
                    <input type="number" class="form-input shadow-sm p-3 mb-1 bg-white rounded" name="nid" id="nid" placeholder="Enter your NID" value="{{ old('nid') }}"/>
                    @error('nid')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="address" class="form-input shadow-sm p-3 mb-1 bg-white rounded" name="address" id="address" placeholder="Enter your address" value="{{ old('address') }}"/>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
                    <label for="password_confirmation">Repeat Password</label>
                    <input type="password" class="form-input shadow-sm p-3 mb-1 bg-white rounded" name="password_confirmation" id="password_confirmation" placeholder="Repeat Password"/>
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term">I Agree To The
                        <a href="{{ url('/terms') }}" class="forget">Terms & Condition</a>
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                </div>
            </form>
            <p class="loginhere">
                Have already an Account? <a href="{{ url('/login') }}" class="loginhere-link"> Login here</a>
            </p>
        </div>
    </div>
</section>
@endsection
