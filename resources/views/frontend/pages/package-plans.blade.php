@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Plans')

@push('after-styles')
<style>

.main-title {
  text-align: center;
}

.pricing-tables {
  padding: 20px;
}
.pricing-tables h1 {
  font-size: 48px;
}
.pricing-tables .plan.first {
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
}
.pricing-tables .plan.last {
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.pricing-tables .plan.recommended {
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
}
.pricing-tables .plan.recommended .head {
  margin-bottom: 20px;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.pricing-tables.attached .col-sm-4 {
  padding-left: 0;
  padding-right: 0;
}
.pricing-tables.attached .col-md-4 {
  padding-left: 0;
  padding-right: 0;
}
.pricing-tables.attached .col-sm-3 {
  padding-left: 0;
  padding-right: 0;
}
.pricing-tables.attached .col-md-3 {
  padding-left: 0;
  padding-right: 0;
}
.pricing-tables.attached .plan {
  border-radius: 0;
}
.pricing-tables.attached .plan .head {
  border-radius: 0;
}
.pricing-tables.attached .plan.recommended {
  border-radius: 4px;
}
.pricing-tables.attached .plan.recommended .head {
  background: #0d328d;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.pricing-tables.attached .plan.last {
  border-bottom-right-radius: 4px;
}
.pricing-tables.attached .plan.last .head {
  border-top-right-radius: 4px;
}
.pricing-tables.attached .plan.first {
  border-bottom-left-radius: 4px;
}
.pricing-tables.attached .plan.first .head {
  border-top-left-radius: 4px;
}

.plan {
  box-shadow: 0 2px 2px rgba(10, 10, 10, 0.06);
  min-height: 100px;
  background: #fff;
  border-radius: 4px;
  margin: 20px 0;
  padding-bottom: 25px;
  text-align: center;
}
.plan .head {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  padding: 12px 16px;
  background: #0D328D;
  color: #fff;
}
.plan .price {
  border-top: 1px solid #eee;
  margin: 0 auto 30px auto;
  width: 80%;
}
.plan .price h3 {
  font-size: 30px;
  vertical-align: top;
  line-height: 1;
}
.plan .price h3 span {
/*   font-size: 38px;
  vertical-align: top;
  position: relative;
  margin: 6px 0 0 -7px;
  display: inline-block;
 */}
.plan .price h4 {
  color: #aaa;
  font-size: 14px;
}
.plan .btn {
  padding: 10px 30px;
  text-transform: uppercase;
  font-weight: 500;
}
.plan ul {
  list-style-type: none;
  padding: 20px;
  margin-top: 2px;
}
.plan ul li {
  line-height: 22px;
  margin-bottom: 15px;
  font-size: 14px;
  font-weight: 400;
}
.plan ul li a {
  text-decoration: underline;
  color: #e6e9ed;
}
.plan ul li:last-child {
  border-bottom: none;
}
.plan ul strong {
  font-weight: 700;
}
.plan.recommended {
  margin-top: 6px;
  box-shadow: 0 0 22px rgba(10, 10, 10, 0.42);
  position: relative;
  z-index: 99;
  border-radius: 4px;
}
.plan.recommended .head {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  background: #171717;
}
.plan.recommended .btn {
  margin-bottom: 10px;
}

.pricing-tables.attached h3 {
    margin-top: 25px;
    color: #dc3545;
    font-weight: 600;
}
.plan ul.item-list {
    height: 142px;
	color: #000;
}
.btn-success {
    background: #0d328d!important;
}
.pricing-tables.attached h3.text-center {
    color: #0d328d;
}
</style>
@endpush

@push('after-scripts')
@endpush

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
		   
		  <div class="pricing-tables attached">

			<h3 class="text-center"> Select a Plan and be able to Download your Resume/CV</h3>
			<div class="row">
			@if(!$plans->isEmpty())
				@foreach($plans as $plan)
				  <div class="col-sm-4 col-md-4">
					<div class="plan {{ $plan->is_recommended == '1' ? 'recommended' : '' }}">
					  <div class="head">
						<strong>{{ $plan->name }}</strong>
					  </div>

					  <ul class="item-list">
					  {!! $plan->description !!}
					  </ul>

					  <div class="price">
						<h3><span class="symbol">₦</span> {{ $plan->prices }}</h3>
						<!--h4>14 Days</h4-->
					  </div>
					  <a href="{{ route('select-plan',['id' => $plan->id]) }}" class="c-btn btn-success btn-lg">Continue</a>
					  <!--a href="{{ route('flutterwave-payment',['id' => $plan->id]) }}" class="c-btn btn-success btn-lg">Continue</a-->
					</div>
				  </div>
			  @endforeach
			@else
				<p>No plans found.</p>
			@endif

			</div>
			<!-- row-->

		  </div>
		  <!-- pricing-tables -->
		   
		</div>
   </section>
</main>

@endsection
