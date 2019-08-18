@extends('master')

@section('content')

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


@endsection
