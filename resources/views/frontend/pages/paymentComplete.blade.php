@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Payment Complete')

@push('after-scripts')
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
			<h2></h2>

			</header>
			<p>&nbsp;</p>

			<div class="row about-container">
				<div class="success-page">
				@if($id == 'success')
				  <i class="fa fa-check-circle" aria-hidden="true"></i>
					<h2>Payment Successful !</h2>
					<p>We are delighted to inform you that we received your payments</p>
				@else
					<i class="fa fa-times-circle" aria-hidden="true"></i>
					<h2>Payment Failed !</h2>
					<p>We are inform you that we did not received your payments</p>
				@endif
				  <a href="{{ route('documenthome') }}" class="c-btn btn-success btn-lg">Dashboard</a>
				</div>
			</div>
		</div>
	<p>&nbsp;</p>
	
	</section> 
    
  <style>
  i.fa.fa-check-circle {
    font-size: 85px;
    color: #47c7c5;
}
  i.fa.fa-times-circle {
    font-size: 85px;
    color: #ff00007a;
}
.success-page{
  display:block;
  margin: 0 auto;
  text-align: center;
}
.success-page img{
  max-width:62px;
  display: block;
  margin: 0 auto;
}

h2{
  color:#47c7c5;
    margin-top: 25px;

}
a{
  text-decoration: none;
}  </style>
  </main>
@endsection
