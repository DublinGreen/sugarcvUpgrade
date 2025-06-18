@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')

@endpush

@section('template-custom-js')
@endsection

@section('content')
<div class="container-fluid">
  <div class="main-content" autoscroll="true" bs-affix-target="" init-ripples="" style="">
	<section class="row">
	<div class="col-md-8">
	   <div class="card">
		  <div class="card-header">
			 <strong>Offers Email</strong>
		  </div>
		 <form class="form-horizontal action-form" http-type="post" data-url="{{ route('admin.offerEmail.save_email_content') }}">
		  <div class="card-body">
			<div class="form-group row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="offer_email_content">Email Template Setup</label>
						<textarea class="form-control" id="offer_email_content" type="text" name="offer_email_content">{{ $data['offer_email_content'] }}</textarea>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="offer_email_subject">Email Subject</label>
						<input class="form-control" id="offer_email_subject" type="text" name="offer_email_subject" value="{{ $data['offer_email_subject'] }}" autocomplete="current-n">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="email_cohort">Email Cohort</label>
						<input class="form-control" id="email_cohort" type="text" name="email_cohort" value="{{ $email_cohort }}" autocomplete="current-n">
					</div>
				</div>
			</div>
		  </div>
		  <div class="card-footer">
			 <button class="btn btn-sm btn-primary" id="filter-submit" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
			 <a class="btn btn-sm btn-success" type="submit" href="{{ route('admin.offerEmail') }}">Back</a>
		  </div>
		  </form>
	   </div>
	  </div>
	 </section>  
	</div>
</div>

@endsection
