@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Send Grid')

@push('after-styles')
@endpush

@section('template-custom-js')
@endsection

@section('content')
<div class="container-fluid">
  <div class="main-content" autoscroll="true" bs-affix-target="" init-ripples="" style="">
	<div class="col-md-8 col-md-offset-3">
	   <div class="card">
		  <div class="card-header">
			 <strong><i class="fa fa-facebook-square mr-1" style="color: #4f6798;"></i>Facebook</strong> Settings
		  </div>
		 <form class="form-horizontal action-form" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.settings.socialLogin.save') }}">
		  <div class="card-body">
				<div class="form-group row">
				   <label class="col-md-3 col-form-label" for="facebook_enabled">Enabled:</label>
				   <div class="col-md-2">
					  <select class="form-control" name="facebook_enabled">
						<option {{ $data["facebook_enabled"] == "1" ? "selected" : "" }} value="1">Yes</option>
						<option {{ $data["facebook_enabled"] == "0" ? "selected" : "" }} value="0">No</option>
					  </select>
				   </div>
				</div>
				<div class="form-group row">
				   <label class="col-md-3 col-form-label" for="facebook_app_id">Application ID:</label>
				   <div class="col-md-9">
					  <input class="form-control" id="facebook_app_id" type="text" name="facebook_app_id" autocomplete="current-n" value="{{ $data['facebook_app_id'] }}">
				   </div>
				</div>
				<div class="form-group row">
				   <label class="col-md-3 col-form-label" for="facebook_app_secret">Application Secret:</label>
				   <div class="col-md-9">
					  <input class="form-control" id="facebook_app_secret" type="text" name="facebook_app_secret" autocomplete="current-n" value="{{ $data['facebook_app_secret'] }}">
				   </div>
				</div>
		  </div>
	   </div>
	   
	   <div class="card">
		  <div class="card-header">
			 <strong><i class="fa fa-google-plus-square mr-1" style="color: #4f6798;"></i>Google</strong> Settings
		  </div>
		  <div class="card-body">
				<div class="form-group row">
				   <label class="col-md-3 col-form-label" for="google_enabled">Enabled:</label>
				   <div class="col-md-2">
					  <select class="form-control" name="google_enabled">
						<option {{ $data["google_enabled"] == "1" ? "selected" : "" }} value="1">Yes</option>
						<option {{ $data["google_enabled"] == "0" ? "selected" : "" }} value="0">No</option>
					  </select>
				   </div>
				</div>
				<div class="form-group row">
				   <label class="col-md-3 col-form-label" for="google_app_id">Application ID:</label>
				   <div class="col-md-9">
					  <input class="form-control" id="google_app_id" type="text" name="google_app_id" autocomplete="current-n" value="{{ $data['google_app_id'] }}">
				   </div>
				</div>
				<div class="form-group row">
				   <label class="col-md-3 col-form-label" for="google_app_secret">Application Secret:</label>
				   <div class="col-md-9">
					  <input class="form-control" id="google_app_secret" type="text" name="google_app_secret" autocomplete="current-n" value="{{ $data['google_app_secret'] }}">
				   </div>
				</div>
		  </div>
		  <div class="card-footer">
			 <button class="btn btn-sm btn-primary" type="submit"><span class="btn-label">Save</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
		  </div>
		  </form>
	   </div>
	 </div>
  </div>
</div>
@endsection
