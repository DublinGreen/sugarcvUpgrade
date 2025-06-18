@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')

@push('after-scripts')
<script>
$(function() {
	jQuery('.change-pwd').click(function(){
		jQuery('.pwd-section').toggle();
		if(jQuery("#change_password").prop("checked")){
			jQuery("#change_password").prop("checked", false);
		} else {
			jQuery("#change_password").prop("checked", true);
		}
		
	});

   jQuery('#chooseplan').change(function(){

      $(this).find("option:selected").each(function(){

         var optionValue = $(this).attr("value");
         if(optionValue){
               $(".plans").not(".p" + optionValue).hide();
               $(".p" + optionValue).show();
         } else{
               $(".plans").hide();
         }
      });
   });
})
</script>
@endpush

@section('content')
<style>
   .plans{
      display:none;
   }
</style>
<main id="main">
   <div class="col-md-12 col-lg-12" style="height:80px">
   </div>
   <!--==========================
      Services Section
      ============================-->
   <section id="services">
   <div class="container">
   <div class="row">
   <div class="col-lg-12 mx-auto">
   <header class="section-header">
      <h1 class="page-title">Profile</h1>
   </header>
   <div class="row">
      <div class="col-lg-4 ">
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
            {{ $message }}
         </div>
         @endif
         <div class="error msg_div"></div>
         <form class="action-form" role="form" http-type="post" method="post" data-url="{{ route('profile') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-row">
               <div class="form-group col-lg-12">
                  <label for="accId">Account Id : {{ $user->id }}</label>
                  <span id="accId"></span>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-lg-12">
                  <label for="accId">Member Since : {{ date('d M, Y', strtotime($user->created_at)) }} </label>
                  <span id="accId"></span>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-lg-12">
                  <label for="email">First Name</label>
                  <input type="text" name="first_name" class="form-control fit-content" id="name" value="{{ $user->first_name }}" placeholder="" data-rule="minlen:2" data-msg="Please enter at first name" data-target="#FIELD_FNAM" />
                  <div class="validation"></div>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-lg-12">
                  <label for="email">Last Name</label>
                  <input type="text" class="form-control fit-content" name="last_name" value="{{ $user->last_name }}" placeholder="" data-rule="minlen:1" data-msg="Please enter last name" data-target="#FIELD_LNAM" />
                  <div class="validation"></div>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-lg-12">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control fit-content" name="phone" value="{{ $user->phone }}" data-rule="minlen:10" data-msg="Please enter valid no" / maxlength="10" data-target="#FIELD_HPHN">
                  <div class="validation"></div>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-lg-12">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control fit-content" name="email" id="email" value="{{ $user->email }}" data-rule="email" data-msg="Please enter a valid email" / required data-target="#FIELD_EMAI">
                  <div class="validation"></div>
               </div>
            </div>
			<div class="form-row">
				<div class="form-group col-lg-12">
				  <input type="checkbox" class="form-control fit-content hidden" style="display:none;" name="change_password" id="change_password">
				  <a href="javascript:;void()" class="change-pwd"> Change Password  </a>
				</div>
			</div>
            <div class="form-row pwd-section" style="display:none;">
               <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input type="password" class="form-control fit-content" name="password" id="password" value="">
                  <div class="pwd-validation"></div>
               </div>
               <div class="form-group col-lg-6">
                  <label for="repeat_password">Confirm Password</label>
                  <input type="password" class="form-control fit-content" name="repeat_password" id="repeat_password" value="">
               </div>
            </div>
            <div class=""><button type="submit"  class="c-btn btn-default btn-back" title="Send Message">Save</button></div>
         </form>
      </div>
	  <div class="col-md-4 col-lg-4 col-xl-4">
		<div class="widget form-horizontal">
			<h4 class="h4 my-0">Subscription</h4>
			<hr>
			<div class="form-group row">
				<label class="col-sm-4 control-label">Status</label>
				<div class="col-sm-8">
					<label id="status" class="control-label status-active">{{ isset($plan->plan->name) ? $plan->plan->name : 'Basic' }}</label>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 control-label">
					Active Date
				</label>
				<div class="col-sm-8">
					<label class="control-label font-weight-normal" id="registration-date">{{ isset($plan->active_date) ? date('M d, Y', strtotime($plan->active_date)) : date('M d, Y', strtotime($user->created_at)) }}</label>
				</div>
			</div>
       
         @php
         $time_period="";
         if(isset($plan->plan_id)){
            if($plan->plan_id == "1"){
               $time_period= "+3 months -1 Days";
            }elseif($plan->plan_id == "2" || $plan->plan_id == "3"){
               $time_period = "+12 months -1 Days";
            }
         }
         @endphp
         <div class="form-group row">
				<label class="col-sm-4 control-label">
					Expiry Date
				</label>
				<div class="col-sm-8">
					<label class="control-label font-weight-normal" >{{ isset($plan->active_date) ? date('M d, Y', strtotime($plan->active_date.$time_period)) : date('M d, Y', strtotime($user->created_at)) }}</label>
				</div>
			</div>
         @if(!empty($planList[0]))
         <div class="form-group row">
				<label class="col-sm-4 control-label">
					Subscription Plans
				</label>
				<div class="col-sm-8">
            <select id="chooseplan" >
             @foreach($planList as $list)
            <option value="{{ $list->id }}" >{{$list->name}}</option>
            
            @endforeach
            </select>
           
				</div>
			</div>
         @foreach($planList as $list)
            <p class="plans p{{$list->id}}">Plan Detail<br><b>Price:</b>{{' ₦ '.$list->prices}}<br><b>Description:</b>{{$list->description}}<br><a href="{{ route('select-plan',['id'=>$list->id]) }}"><b class="text-success">Proceed</b></a></p>
            @endforeach
         @endif
			<div class="form-group text-center">
            @if(!empty($plan))
				@if($plan->isExpired == '0')
				<button href="javascript:;" class="c-btn btn-success upgrdBtn" disabled>Active</button>
            <a href="{{ route('select-plan',['id'=>$plan->plan_id]) }}" class="c-btn btn-primary upgrdBtn" id="upgrade-to-full-access">Renew</a>
				@elseif($plan->isExpired == '1')
				<button href="javascript:;" class="c-btn btn-danger upgrdBtn" disabled>Expired</button>
            <a href="{{ route('select-plan',['id'=>$plan->plan_id]) }}" class="c-btn btn-primary upgrdBtn" id="upgrade-to-full-access">Renew</a>
				
            @else
				<a href="{{ route('plans') }}" class="c-btn btn-primary upgrdBtn" id="upgrade-to-full-access">Upgrade to Full Access</a>
				@endif
            @endif
			</div>
		</div>
	  </div>
     <div class="col-md-4 col-lg-4 col-xl-4">
      @include('frontend.chat.chat')
   </div>
      <br>
   </div>
   </div>
   </section>
</main>
@endsection
