@if( session('alert-title') )
<div style="margin-top: 10px">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('alert-title') }}</h4>
        <p>{{ session('alert-message') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>
@endif  