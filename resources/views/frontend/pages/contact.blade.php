@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')

@push('after-scripts')
<script>
window.resume = {!! !empty($resume) ? $resume->toJson() : '[]' !!};
syncTemplate();
</script>
@endpush

@section('content')

<main id="main">
   <div class="col-md-12 col-lg-12" style="height:80px">
   </div>
   <!--==========================
      Services Section
      ============================-->
   <section id="services">
   <div class="container">
   <header class="section-header">
      <h1 class="page-title"></h1>
	  <p class="sub-title"></p>
   </header>
	<div class="row about-container">
		<div class="col-md-12">
			<div class="page_contact_heading">Contact Us</div>
		</div>
		<div class="col-md-5">
			<p><strong>SugarCV.com</strong></p>
			<div class="address_sec">
				<p class="ofc_heading">Service Provider:</p>
				<p class="no-margin">Lorem Ipsum</p>
				<p class="no-margin">is simply dummy text</p>
				<p class="no-margin"> of the printing and</p>
				<p class="no-margin1">typesetting industry.</p>
			</div>
			<div class="address_sec">
				<p class="ofc_heading">Poland Office:</p>
				<p class="no-margin">BOLD PL Sp z o.o.</p>
				<p class="no-margin">Przeskok 2</p>
				<p class="no-margin">00-032 Warsaw</p>
				<p class="no-margin">Poland</p>
			</div>
		</div>
		<div class="col-md-5 offset-md-1">
			<div class="error msg_div"></div>
			<form class="action-form contact-details" role="form" http-type="post" method="post" data-url="{{ route('send_contact_email') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="email">Subject</label>
						<input type="text" name="subject" class="form-control fit-content" id="subject" placeholder=""/>
						<div class="validation"></div>
					</div>
					<div class="form-group col-md-12">
						<label for="email">Name</label>
						<input type="text" name="name" class="form-control fit-content" id="name" placeholder=""/>
						<div class="validation"></div>
					</div>
					<div class="form-group col-md-12">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control fit-content" id="email" placeholder=""/>
						<div class="validation"></div>
					</div>
					<div class="form-group col-md-12">
						<label for="email">Message</label>
						<textarea name="message"  rows="5" class="form-control fit-content" id="message" placeholder=""style="resize: none;"></textarea>
						<div class="validation"></div>
					</div>
				</div>
				<div class="" style="float:left">
					
				</div>
				<div class="" style="float:right">
					<button type="submit"  class="c-btn btn-success" title="Send Message">SUBMIT</button>
				</div>
			</form>
		</div>
	</div>
      <script>
         function myfun(){
         	window.location.href = "{{url('work-history')}}";
         }
      </script>
   </div>
   <section>
</main>
@endsection
