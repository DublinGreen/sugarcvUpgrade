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
   <section id="services" class="education-detail-before">
	   <div class="container">
		   <header class="section-header">
		   </header>
		   <div class="row about-container">
			  <div class="col-lg-8 " >
				 <h2 class="page-title">Great, let’s work on your education</h2>
				 <strong>Here’s what you need to know:</strong>
				 <p class="mt-2" style="line-height:28px">Employers quickly scan the education section We’ll take care of the formatting so it’s easy to find
				 </p>
			  </div>
			  <div class="col-md-5 col-lg-4 col-xl-4 resume-thumbnail">
				@if(\Session::has('skin'))
					@php $skin = \Session::get('skin'); $skin = 'frontend.cvTemplates.'.$skin; @endphp 
					@include($skin)
				@elseif(isset($resume->skin_id))
					@php $skin = $resume->skin_id; $skin = 'frontend.cvTemplates.'.$skin; @endphp
					@include($skin)	
				@else
					@include('frontend.cvTemplates.temp1', ['highlighter' => ''])
				@endif

			   <p class="btn-preview-ctnr"><button type="button" class="btn btn-default btn-preview"><i class="far fa-eye"></i>Preview</button></p>
			  </div>
		   </div>
			<div class="row footer-btn">
				<div class="col-md-6 col-lg-6 col-sm-12">
					<a class="c-btn btn-default btn-back" href="{{route('exprList')}}">Back</button></a>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12 text-right">
					<a href="{{ $count != 0 ? route('educationList') : route('enter-education-detail')}}"  class="c-btn btn-success btn-lg" title="" >Next</a>
				</div>
			</div>
		</div>
   </section>
</main>

@endsection
