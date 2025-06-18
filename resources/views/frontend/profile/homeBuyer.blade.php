@extends('frontend.profile.index')

@section('page-title','HomeBuyer')

@section('profile_content')
<div class="col-sm-9 prfl_subpages_content">
	<div class="profile_page_right_block_padding">
	   <style>
		  .profile_page_right_block_padding {padding:0px;box-shadow:none;}
		  .ques_ans_wrap {padding: 20px 15px;border-bottom: 1px solid #ccc;}
		  .ques_label {font-size: 16px;font-weight: 600;margin-bottom: 10px;}
		  .ans_label {font-size: 14px;font-weight: 500;}
		  .ques_ans_wrap.txtcntr.buyerbtn {text-align: center;text-decoration: none; padding: 50px 0; border-bottom: 0px;}
		  .ques_ans_wrap.txtcntr.buyerbtn a {text-decoration: none;background: #e45338;height: 57px;padding: 12px;font-family: Montserrat;font-style: normal;font-weight: 700;line-height: normal;font-size: 18px;text-align: center;color: #FFF;box-shadow: none;border-radius: 3px;}
		  @media screen and (max-width: 1024px) {
		  .ques_ans_wrap.txtcntr.buyerbtn {padding: 30px 0;}
		  }
		  @media screen and (max-width: 767px) {
		  .ques_ans_wrap.txtcntr.buyerbtn a {font-size: 16px;}
		  }
	   </style>
	   <div class="row" style="margin-bottom: 20px;">
		  <div class="col-md-12">
			 <div class="col-md-12 req_cash bah" style="box-shadow: 1px 1px 10px rgba(153, 153, 153, 0.6);border-radius: 10px;padding:0px;padding-top: 15px;padding-bottom: 0px;">
				<div class="row">
				   <div class="col-md-12">
					  <span class="pending_cash_bask">My Homebuyer Form</span>
				   </div>
				</div>
				<div class=" buy_house_data_wrap">
				  @if(count($form))
					<div class="ques_ans_wrap">
						<div class="ques_label">
							What type of property are you purchasing?
						</div>
						<div class="ans_label">
							{{ $form->property_type }}
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							How will this property be used?
						</div>
						<div class="ans_label">
							{{ $form->how_property_be_used }}
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							When do you plan to buy a home?
						</div>
						<div class="ans_label">
							{{ $form->when_buy }}
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							What is the estimated purchase price?
						</div>
						<div class="ans_label">
							${{ $form->estimated_purchase_price }}K
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							In what city will the property be located?
						</div>
						<div class="ans_label">
							{{ $form->location }}
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							What is your full name?
						</div>
						<div class="ans_label caps">
							{{ $form->full_name }}
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Gender
						</div>
						<div class="ans_label">
							{{ $form->gender }}
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Email Address
						</div>
						<div class="ans_label">
							{{ $form->email_address }}
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Mobile or home phone number
						</div>
						<div class="ans_label">
							{{ $form->phone_number }}
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Are you currently under contract with a real estate agent?
						</div>
						<div class="ans_label">
							{{ $form->real_estate_agent }}
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Is this your first time buying a home?
						</div>
						<div class="ans_label">
							{{ $form->first_time_buy }}
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							What is your current mortgage status?
						</div>
						<?php $mortgage_status = str_replace('\\','', $form->mortgage_status) ?>
						<div class="ans_label">
							<?= $mortgage_status ?>
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Do you have any questions at this point?
						</div>
						<div class="ans_label">
							<?= ($form->anyquestion == "")?'NA':$form->anyquestion?>
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							How much are you putting down as a down payment?
						</div>
						<div class="ans_label">
							$<?= $form->down_payment?>K
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Will you have a co-borrower?
						</div>
						<div class="ans_label">
							<?= $form->co_borrower?>
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Estimate your credit score
						</div>
						<div class="ans_label">
							<?= $form->credit_score?>
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							What year were you born ?
						</div>
						<div class="ans_label">
							<?= $form->born_year?>
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Have you had a bankruptcy or foreclosure in the last 7 years?
						</div>
						<div class="ans_label">
							<?= $form->bankruptcy_foreclosure?>
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Have you or your spouse served in the military?
						</div>
						<div class="ans_label">
							<?= $form->spouse_served_in_military?>
						</div>
					</div>
					<div class="ques_ans_wrap">
						<div class="ques_label">
							Do you currently have accounts with any of the following banks?
						</div>
						<div class="ans_label">
							<?= $form->bank_account?>
						</div>
					</div>
					<div class="ques_ans_wrap txtcntr">
						<a href="{{ route('buyhouse') }}">In order to make a change you will need to resubmit the form</a>
					</div>
				  @else
				   <div class="ques_ans_wrap txtcntr buyerbtn">
					  <a href="{{ route('buyhouse') }}">Complete Homebuyer form</a>
				   </div>					  
				  @endif
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
@endsection

@push('after-styles')
<link rel="stylesheet" href="{{ url('/assets/css/front/montserrat.css') }}" />
@endpush