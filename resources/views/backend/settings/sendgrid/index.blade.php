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
	<section class="">
	<div class="col-md-8 col-md-offset-3">
	   <div class="card">
		  <div class="card-header">
			 <strong>SendGrid</strong> Settings
		  </div>
		 <form class="form-horizontal action-form" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.settings.sendgrid.save') }}">
		  <div class="card-body">
				<div class="form-group row">
				   <label class="col-md-3 col-form-label" for="sendgrid_apikey">API Key:</label>
				   <div class="col-md-9">
					  <input class="form-control" id="sendgrid_apikey" type="password" name="sendgrid_apikey" autocomplete="email" value="{{ $data['sendgrid_apikey'] }}">
				   </div>
				</div>
				<div class="form-group row">
				   <label class="col-md-3 col-form-label" for="sendgrid_name">Name:</label>
				   <div class="col-md-9">
					  <input class="form-control" id="sendgrid_name" type="text" name="sendgrid_name" autocomplete="current-n" value="{{ $data['sendgrid_name'] }}">
				   </div>
				</div>
				<div class="form-group row">
				   <label class="col-md-3 col-form-label" for="sendgrid_email">Sending Address:</label>
				   <div class="col-md-9">
					  <input class="form-control" id="sendgrid_email" type="text" name="sendgrid_email" autocomplete="current-e" value="{{ $data['sendgrid_email'] }}">
				   </div>
				</div>
		  </div>
		  <div class="card-footer">
			 <button class="btn btn-sm btn-primary" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
		  </div>
		  </form>
	   </div>
	  </div>
	</section>
  </div>
</div>
@endsection
