@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Email Configurations')

@push('after-styles')
@endpush

@section('template-custom-js')
@endsection

@section('content')
<div class="container-fluid">
  <div class="main-content" autoscroll="true" bs-affix-target="" init-ripples="" style="">
	<section class="">
	<div class="row">
		<div class="col-md-6">
		   <div class="card">
			  <div class="card-header">
				 <strong>Offer Email Configurations</strong>
			  </div>
			 <form class="form-horizontal action-form" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.settings.offerEmailConf') }}">
			  <div class="card-body">
					<div class="form-group row">
					   <label class="col-md-4 col-form-label" for="offer_amount">Offer amount in dollar:</label>
					   <div class="col-md-8">
						  <input class="form-control" id="offer_amount" type="number" name="offer_amount" value="{{ $data['offer_amount']}}">
					   </div>
					</div>
					<div class="form-group row">
					   <label class="col-md-4 col-form-label" for="offer_period">Offer period in days:</label>
					   <div class="col-md-8">
						  <input class="form-control" id="offer_period" type="number" name="offer_period" value="{{ $data['offer_period'] }}">
					   </div>
					</div>
			  </div>
			  <div class="card-footer">
				 <button class="btn btn-sm btn-primary" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
			  </div>
			  </form>
		   </div>
		  </div>
		  <div class="col-md-6">
		   <div class="card">
			  <div class="card-header">
				 <strong>App/Extension Download Bonus</strong>
			  </div>
			 <form class="form-horizontal action-form" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.settings.appExtensionDownloadBonus') }}">
			  <div class="card-body">
					<div class="form-group row">
					   <label class="col-md-4 col-form-label" for="app_bonus">App Bonus:</label>
					   <div class="col-md-8">
						  <input class="form-control" id="app_bonus" type="number" name="app_bonus" value="{{  $data['app_bonus'] }}">
					   </div>
					</div>
					<div class="form-group row">
					   <label class="col-md-4 col-form-label" for="extension_bonus">Extension Bonus:</label>
					   <div class="col-md-8">
						  <input class="form-control" id="extension_bonus" type="number" name="extension_bonus" value="{{  $data['extension_bonus'] }}">
					   </div>
					</div>
			  </div>
			  <div class="card-footer">
				 <button class="btn btn-sm btn-primary" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
			  </div>
			  </form>
		   </div>
		  </div>
	  </div>
	  <div class="row">
	    <div class="col-md-12">
		   <div class="card">
			  <div class="card-header">
				 <strong>First Purchase Email Configurations</strong>
			  </div>
			 <form class="form-horizontal action-form" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.settings.firstPurchaseEmailConf') }}">
			  <div class="card-body">
			  <div class="row col-md-12">
				  <div class="col-md-5">
						<div class="form-group row">
						   <label class="col-md-6 col-form-label" for="signup_bonus_expire_days">Signup bonus expire days:</label>
						   <div class="col-md-6">
							  <input class="form-control" id="signup_bonus_expire_days" type="number" name="signup_bonus_expire_days" value="{{ $data['signup_bonus_expire_days'] }}">
						   </div>
						</div>
						<div class="form-group row">
						   <label class="col-md-6 col-form-label" for="signup_bonus_amount">Signup bonus amount:</label>
						   <div class="col-md-6">
							  <input class="form-control" id="signup_bonus_amount" type="number" name="signup_bonus_amount" value="{{ $data['signup_bonus_amount'] }}">
						   </div>
						</div>
						<div class="form-group row">
						   <label class="col-md-6 col-form-label" for="days_before_bonus_expire30">Reminder email Sequence:</label>
						   <div class="col-md-6">
							  <input class="form-control" id="days_before_bonus_expire30" type="text" name="days_before_bonus_expire30" value="{{ $data['days_before_bonus_expire30'] }}">
						   </div>
						</div>
						<div class="form-group row">
						   <label class="col-md-6 col-form-label" for="signup_bonus_min_sale_amt">Minimum Sale Amount:</label>
						   <div class="col-md-6">
							  <input class="form-control" id="signup_bonus_min_sale_amt" type="number" name="signup_bonus_min_sale_amt" min="1" value="{{ $data['signup_bonus_min_sale_amt'] }}">
						   </div>
						</div>
				  </div>
				  <div class="col-md-7">
					  <div class="form-group row">
						  <div class="row col-md-8 extensions">
							<label class="col-md-3 col-form-label">Extension-1</label>
							<input type="number" min="1" class="form-control" name="signup_bonus_extension1" value="{{ $data['signup_bonus_extension1'] }}" required="">
						  </div>
						  <div class="col-md-4">
							<span class="btn btn-primary btn-sm" onclick="preview_extension_email(1)">Preview</span>
							<span class="btn btn-primary btn-sm" onclick="test_extension_email(1)">Test Email</span>
						  </div>
					  </div>
					  <div class="form-group row">
						 <div class="row col-md-8 extensions">
							<label class="col-md-3 col-form-label">Extension-2</label>
							<input type="number" min="1" class="form-control" name="signup_bonus_extension2" value="{{ $data['signup_bonus_extension2'] }}" required="">
						 </div>
						<div class="col-md-4">
							<span class="btn btn-primary btn-sm" onclick="preview_extension_email(2)">Preview</span>
							<span class="btn btn-primary btn-sm" onclick="test_extension_email(2)">Test Email</span>
						</div>
					  </div>
					  <div class="form-group row ">
						 <div class="row col-md-8 extensions">
							<label class="col-md-3 col-form-label">Extension-3</label>
							<input type="number" min="1" class="form-control" name="signup_bonus_extension3" value="{{ $data['signup_bonus_extension3'] }}" required="">
						</div>
						<div class="col-md-4">
							<span class="btn btn-primary btn-sm" onclick="preview_extension_email(3)">Preview</span>
							<span class="btn btn-primary btn-sm" onclick="test_extension_email(3)">Test Email</span>
						</div>
					  </div>
				  </div>
				
				 </div>
			  </div>
			  <div class="card-footer">
				 <button class="btn btn-sm btn-primary" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
			  </div>
			  </form>
		   </div>
		 </div>
	  </div>
	  <div class="row">
	    <div class="col-md-12">
		   <div class="card">
			  <div class="card-header">
				 <strong>Welcome Series Emails</strong>
			  </div>
			  <div style="padding: 0.75rem 1.25rem 0;">Enter 0 to send the email on same day</div>
			  <div style="padding-left: 1.25rem;">Leave blank to disable the email</div>
			 <form class="form-horizontal action-form" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.settings.welcomeSeriesEmail') }}">
			  <div class="card-body">
					<div class="row form-group">
						<div class="row col-md-9">
							<label class="col-md-3">1<sup>st</sup> Email</label>
							<input type="number" class="form-control col-md-9" name="welcome_series1" value="{{ $data['welcome_series1'] }}" required="">
						</div>
						<div class="col-md-3">
							<label class="switch switch-label switch-pill switch-primary">
								<input class="switch-input switch-status" type="checkbox" name="is_enable_welcome_series1" value="1" @if($data['is_enable_welcome_series1'] == '1') ? checked : '' @endif>
								<span class="switch-slider" data-checked="✓" data-unchecked="✕"></span>
							</label>
							<span class="btn btn-primary btn-sm preview_btn" onclick="preview_welcome_email(1)">Preview</span>
							<span class="btn btn-primary btn-sm test_email" onclick="test_welcome_email(1)">Test Email</span>
						</div> 
					</div>
					<div class="row form-group">
						<div class="row col-md-9">
							<label class="col-md-3">2<sup>nd</sup> Email</label>
							<input type="number" class="form-control col-md-9" name="welcome_series2" value="{{ $data['welcome_series2'] }}" required="">
						</div>
						<div class="col-md-3">
							<label class="switch switch-label switch-pill switch-primary">
								<input class="switch-input switch-status" name="is_enable_welcome_series2" type="checkbox" name="is_enable_welcome_series2" value="1" @if($data['is_enable_welcome_series2'] == '1') ? checked : '' @endif>
								<span class="switch-slider" data-checked="✓" data-unchecked="✕"></span>
							</label>
							<span class="btn btn-primary btn-sm preview_btn" onclick="preview_welcome_email(2)">Preview</span>
							<span class="btn btn-primary btn-sm test_email" onclick="test_welcome_email(2)">Test Email</span>
						</div> 
					</div>
					<div class="row form-group">
						<div class="row col-md-9">
							<label class="col-md-3">3<sup>rd</sup> Email</label>
							<input type="number" class="form-control col-md-9" name="welcome_series3" value="{{ $data['welcome_series3'] }}" required="">
						</div>
						<div class="col-md-3">
							<label class="switch switch-label switch-pill switch-primary">
								<input class="switch-input switch-status" name="is_enable_welcome_series3" type="checkbox" name="is_enable_welcome_series3" value="1" @if($data['is_enable_welcome_series3'] == '1') ? checked : '' @endif>
								<span class="switch-slider" data-checked="✓" data-unchecked="✕"></span>
							</label>
							<span class="btn btn-primary btn-sm preview_btn" onclick="preview_welcome_email(3)">Preview</span>
							<span class="btn btn-primary btn-sm test_email" onclick="test_welcome_email(3)">Test Email</span>
						</div>  
					</div>
			  </div>
		  <div class="card-footer">
			 <button class="btn btn-sm btn-primary" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
		  </div>
		  </form>
	   </div>
	   </div>
	 </div>
	 <div class="row">
		<div class="col-md-6">
		   <div class="card">
			  <div class="card-header">
				 <strong>Confirmation Email after Signups</strong>
			  </div>
			 <form class="form-horizontal action-form" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.settings.confirmEmailAfterSignup') }}">
			  <div class="card-body">
					<div class="form-group row">
					   <label class="col-md-4 col-form-label" for="confirm_email_reminder_days">Reminder Days:</label>
					   <div class="col-md-8">
						  <input class="form-control" id="confirm_email_reminder_days" type="text" name="confirm_email_reminder_days" value="{{ $data['confirm_email_reminder_days'] }}">
					   </div>
					</div>
			  </div>
			  <div class="card-footer">
				 <button class="btn btn-sm btn-primary" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
			  </div>
			  </form>
		   </div>
		  </div>
		  <div class="col-md-6">
		   <div class="card">
			  <div class="card-header">
				 <strong>First Click Email Subject</strong>
			  </div>
			 <form class="form-horizontal action-form" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.settings.firstEmailClickSubject') }}">
			  <div class="card-body">
					<div class="form-group row">
					   <label class="col-md-4 col-form-label" for="first_click_email_subject">Subject:</label>
					   <div class="col-md-8">
						  <input class="form-control" id="first_click_email_subject" type="text" name="first_click_email_subject" value="{{ $data['first_click_email_subject'] }}">
					   </div>
					</div>
			  </div>
			  <div class="card-footer">
				 <button class="btn btn-sm btn-primary" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
			  </div>
			  </form>
		   </div>
		  </div>
	  </div>
</section>
</div>
</div>
@endsection
