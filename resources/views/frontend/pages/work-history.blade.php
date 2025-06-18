@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')

@push('after-scripts')
<script>
window.resume = {!! !empty($resume) ? $resume->toJson() : '[]' !!};
syncTemplate();
</script>
@endpush

@php
$next = route('work-detail');
if(Session::has('resume_id')){
	$resume_id = Session::get('resume_id');
	$count = App\Models\Resumeworkdetail::where('resume_id', $resume_id)->count();
	if($count > 0){
		$next = route("exprList");
	}
}
@endphp

@section('content')

<main id="main">
   <div class="col-md-12 col-lg-12" style="height:80px">
   </div>
   <!--==========================
      Services Section
      ============================-->
   <section id="services" class="work-history-before">
	   <div class="container">
		   <header class="section-header">
		   </header>
		   <div class="row about-container">
			  <div class="col-lg-8 " >
				 <h2 class="page-title">Now, let’s fill out your work history</h2>
				 <strong>Here’s what you need to know:</strong>
				 <p>Employers scan your resume for six seconds to decide if you’re a match
					We’ll suggest bullet points that make a great impression
				 </p>
			  </div>
			  <div class="col-md-5 col-lg-4 col-xl-4 resume-thumbnail">
				@if(isset($resume->skin_id))
					@php $skin = $resume->skin_id; $skin = 'frontend.cvTemplates.'.$skin; @endphp
					@include($skin)
				@else
					@include('frontend.cvTemplates.temp1',['highlighter' => '<p class="preview-template-highlighter" style="left: 76.217px; top: 70.301px; width: 151.434px; height: 174.648px;"></p>'])
				@endif
			   <p class="btn-preview-ctnr"><button type="button" class="btn btn-default btn-preview"><i class="far fa-eye"></i>Preview</button></p>
			  </div>
		   </div>
			<div class="row footer-btn">
				<div class="col-md-6 col-lg-6 col-sm-12">
					<a class="c-btn btn-default btn-back" href="{{route('create-resume')}}">Back</button></a>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12 text-right">
					<a href="{{ $next }}"  class="c-btn btn-success btn-lg" title="Send Message" >Next</a>
				</div>
			</div>
		</div>
   </section>
</main>

@endsection
