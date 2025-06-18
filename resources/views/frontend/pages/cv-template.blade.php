@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','CV Template')

@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <!--section id="cv" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="{{ url('asset_new/img/intro-img.svg')}}" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
	
        <h2>Resume Builder<br>Make a Resume Online<br><span>Quick & Easy</span></h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
  </section---><!-- #intro -->
	@php
	$val = Request::get("change");
	@endphp

  <main id="main">
  <div class="col-md-12 col-lg-12" style="height:50px">
  </div>
	<!--==========================
      Services Section
    ============================-->
   <section id="services" class="section-bg">
      <div class="container" style="margin-top:50px">
	  @if ($errors->any()) 
	   <div class="alert alert-danger">
		  <ul>
			 @foreach ($errors->all() as $error) 
			 <li>{{ $error }}</li>
			 @endforeach 
		  </ul>
	   </div>
	   @endif
	  <header class="section-header">
          <h3>CV Templates</h3>
         <p>Choose a CV template, fill it out, and download in seconds. Create a professional curriculum vitae in a few clicks. Just pick one of 18+ CV templates below, add ready-to-use suggestions, and get the job.</p>
        </header>
	  </div>
	  
	<section>  
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        
<!--Ist Row---------->
        <div class="row about-container">
          <!---div class="col-lg-4 right-space">
		   <div class="divbutton" ">
		   
            <img src="{{ url('asset_new/img/services/1-cv.png')}}" class="img-fluid" alt="">
			<div class="middle">
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SRZ1'])}}">Use This Template</a>
			</div>
				
			</div>
			<br><br>
			<h4>Cascade</h4>
			<p>Professional CV template. Neatly aligned no matter the word count.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/2-cv.png')}}" class="img-fluid" alt="">
			<div class="middle">
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SRZ3'])}}">Use This Template</a>
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div--->
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/fe784a6b-9562-415f-a1e1-d13775b73b94.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT1'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT1'])}}">Use This Template</a>
				@endif
				
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/resume2.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT4'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT4'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT4'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/resume3.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT5'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT5'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT5'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/resume4.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT6'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT6'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT6'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/resume5.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT7'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT7'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT7'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div> 
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/resume6.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT8'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT8'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT8'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div> 
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/resume7.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT9'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT9'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT9'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div> 
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/resume8.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT10'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT10'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT10'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div> 
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT11.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT11'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT11'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT11'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div> 
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT12.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT12'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT12'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT12'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div> 
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT13.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT13'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT13'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT13'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
			<div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT14.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT14'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT14'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT14'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT15.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT15'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT15'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT15'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT16.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT16'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT16'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT16'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT17.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT17'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT17'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT17'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT18.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT18'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT18'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT18'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		   <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT19.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT19'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT19'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT19'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT20.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT20'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT20'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT20'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		   <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT21.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT21'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT21'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT21'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/SCVT22.png')}}" class="img-fluid" alt="">
			<div class="middle"> 
				<!-- <a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT22'])}}">Use This Template</a> -->
				@if(!empty($val))
				<a class="btn-danger" href="{{route('final-resume', ['id' => $val, 'temp'=>'SCVT22'])}}">Use This Template</a>
				@else
				<a class="btn-danger" href="{{route('select-skin', ['id' => 'SCVT22'])}}">Use This Template</a>
				@endif
			</div>
			<br><br>
			<h4>Cubic</h4>
			<p>Perfect CV template. Ideal readability for the densest of CVs.</p>
          </div>
		  <!--div class="col-lg-4 right-space">
		  <img src="{{ url('asset_new/img/services/3-cv.png')}}"  class="img-fluid" >
			<div class="middle">
				<a class="btn-danger" href="{{route('select-resume')}}">Use This Template</a>
			</div>
            
			<br><br>
			<h4>Diamond</h4>
			<p>Single column CV template. Highlight your background and credentials.</p>
          </div-->
        </div>
	
<!--2nd Row---------->
	 <!--div class="row about-container">
          <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/4-cv.png')}}" class="img-fluid" alt="">
			<div class="middle">
				<a class="btn-danger" href="#">Use This Template</a>
			</div>
			<br><br>
			<h4>Concept</h4>
			<p>Modern CV template. Use icons for basic info and a timeline to tell your story.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/5-cv.png')}}" class="img-fluid" alt="">
			<div class="middle">
				<a class="btn-danger" href="#">Use This Template</a>
			</div>
			<br><br>
			<h4>Crisp</h4>
			<p>Creative CV template. Get abundant spacing with a polished look.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/6-cv.png')}}" class="img-fluid" alt="">
			<div class="middle">
				<a class="btn-danger" href="#">Use This Template</a>
			</div>
			<br><br>
			<h4>Enfold</h4>
			<p>Two column CV template. Draw attention to your summary and skills.</p>
          </div>
        </div-->
<!--------------3rd Row--------------->
		 <!---div class="row about-container">
          <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/7-cv.png')}}" class="img-fluid" alt="">
			<div class="middle">
				<a class="btn-danger" href="#">Use This Template</a>
			</div>
			<br><br>
			<h4>Iconic
			</h4>
			<p>Icon-based CV template. Use designer elements to make information pop.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/8-cv.png')}}" class="img-fluid" alt="">
			<div class="middle">
				<a class="btn-danger" href="#">Use This Template</a>
			</div>
			<br><br>
			<h4>Influx</h4>
			<p>Elegant CV template. Get that classic feel without looking dated.</p>
          </div>
		  <div class="col-lg-4 right-space">
            <img src="{{ url('asset_new/img/services/9-cv.png')}}" class="img-fluid" alt="">
			<div class="middle">
				<a class="btn-danger" href="#">Use This Template</a>
			</div>
			<br><br>
			<h4>Initials</h4>
			<p>Creative CV template. Draw attention to details without overwhelming the reader.</p>
          </div>
        </div-->
      </div>
    </section><!-- #about -->
  
  </main>
  
 	 
@endsection
