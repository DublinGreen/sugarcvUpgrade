@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Deals Email Preview')

@push('after-styles')
@endpush

@section('template-custom-js')
<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/src/js/bootstrap-datetimepicker.js"></script>
<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/build/css/bootstrap-datetimepicker.css" rel="stylesheet"/> 
<script>
jQuery('#scheduler_date').datetimepicker({
	format : 'MM-DD-YYYY HH:mm',
	minDate : new Date('<?=date("Y-m-d H:i:s")?>'),
	ignoreReadonly  : true,
	sideBySide: true,
});

</script>
@endsection

@section('content')
<div class="container-fluid">
  <div class="main-content">
	<section class="row">
		<div class="col-md-12">
			<div class="card">
			  <div class="card-header">
				 <strong>Offers Email</strong> Demo Email Template
				 <div class="float-right">
					<a class="btn btn-danger" href="{{ route('admin.offerEmail') }}" >Back</a>
					<button class="btn btn-success" data-toggle="modal" data-target="#testEmailModal">Send Test Email</button>
					<button class="btn btn-primary" data-toggle="modal" data-target="#schedule">Set Schedule Time</button>
				 </div>
			  </div>
			  <div class="card-body">
				<?php 
					$view = view('backend.emails.template.offer_template');
					$view = str_replace("{{EMAIL_OFFER_TAG_LINE}}", $offer_email_content, $view);
					echo str_replace("{{RESCHEDULE_EMAIL_OFFER_LINE}}",'',$view);
				?>
			  </div>
			</div>
		</div>
	</section>
  </div>
</div>

<!--  Test email Modal  -->
  <div class="modal fade" id="testEmailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-primary" role="document">
	<form class="action-form row" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.offerEmail.sendTestOfferEmail') }}">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Send Test Email</h4>
		  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="emails">Email(s)</label>
						<textarea class="form-control" id="emails" name="emails" placeholder="Enter Test Email IDs (Multiple separate by comma)"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		  <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary">
			<span class="btn-label">Send</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span>
		  </button>
		</div>
	  </div>
     </form>
	</div>
  </div>

<!--  schedule Modal  -->
  <div class="modal fade" id="schedule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-primary" role="document">
	<form class="action-form row" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.offerEmail.offerEmailSchedule') }}">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Deals Email Scheduler</h4>
		  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="scheduler_date">Schedule at (US EST):</label>
						<input type="text" class="form-control" id="scheduler_date" name="schedule_time" readonly="">
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		  <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary">
			<span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span>
		  </button>
		</div>
	  </div>
     </form>
	</div>
  </div>

@endsection
