@extends('frontend.profile.index')

@section('page-title','Cash Request')

@section('profile_content')
<div class="col-sm-9 prfl_subpages_content">
	<div class="profile_page_right_block_padding">
		<div class="row cashReqRow" style="margin-bottom: 45px;">
		   <div class="col-md-12">
			  <div class="col-md-12 cash_req" style="box-shadow: 1px 1px 10px rgba(153, 153, 153, 0.6);border-radius: 10px;padding-top: 15px;">
				 <div class="row">
					<div class="col-md-12">
					   <span class="pending_cash_bask">Request Cash</span>
					</div>
				 </div>
				 <div class="row">
					<div class="col-md-12">
					   <div class="row">
						  <div class="col-md-6" style="margin-bottom: 15px;">
							 <div class="field">
								<div class="col-md-12">
								   <label class="field__label affinityy_cashback_request_label"><strong>Available Cash Amount</strong></label>
								</div>
								<div class="col-md-12"><strong>$<span id="ac_amts">{{ $total }}</span></strong></div>
							 </div>
						  </div>
					   </div>
					   <div class="row">
						  <div class="col-md-6">
							 <div class="field">
								<div class="col-md-12">
								   <label class="field__label lh affinityy_cashback_request_label">Cash Request</label>
								</div>
								<div class="col-md-12">
								   <div class="field__input-wrapper">
									  <span class="field__add-on field__add-on--left"><strong>$</strong></span>
									  <input class="total_cash_amount field__input field__input--has-left-add-on" type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 &amp;&amp; event.charCode <= 57">
								   </div>
								   <p class="hintMsgs"></p>
								</div>
							 </div>
						  </div>
					   </div>
					   <div class="row">
						  <div class="col-md-12">
							 <div class="field" style="margin-top:16px;">
								<div class="col-md-12">
								   <label class="field__label affinityy_cashback_request_label">Cash Remaining</label>
								</div>
								<div class="col-md-12"><strong>$</strong><span><strong id="pay">{{ $total }}</strong></span></div>
							 </div>
						  </div>
					   </div>
					   <div class="row">
						  <div class="col-md-12">
							 <div class="field" style="margin-top:16px;">
								<div class="col-md-12 affinityy_cashback_request_label">
								   <p><label class="req_label"><input type="radio" name="mode" value="Paypal" id="" class="cash_mode" checked=""> Receive Cash via Paypal &nbsp; <span class="checkmark"></span></label> <input type="text" name="mode" class="paypal_email" value="php.essitco1@gmail.com" readonly=""><span class="cashPaypaltxt" style="width:100%;float: left;margin-bottom: 10px;">Note: Cash will go to your PayPal account associated with the CashDirectClub Login email ID.</span></p>
								</div>
								<div class="col-md-12 affinityy_cashback_request_label">
								   <p><label class="req_label" style="cursor:pointer;" data-toggle="modal" data-target="#address_for_cheque" for="check_add"><input type="radio" name="mode" value="" id="check_add"> Receive Cash via Check <span class="checkmark"></span></label></p>
								</div>
							 </div>
						  </div>
					   </div>
					   <div class="row" style="margin-bottom: 20px;padding: 15px;padding-top: 0px;">
						  <div class="col-md-12">
							 <input type="button" onclick="ApplyforCash();" class="confirmCash btn submit-form rc_btn" value="Request Cash" disabled="disabled">
						  </div>
					   </div>
					</div>
				 </div>
			  </div>
		   </div>
		</div>	
	</div>
</div>

<div class="modal fade" id="address_for_cheque" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content" style="float:left;">
         <div class="pop-title">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="close"><i class="far fa-times"></i></button>
            <h5>Add Mailing Address</h5>
         </div>
         <div class="modal-body" style="padding-top:0px;">
            <form class="action-form" http-type="post" data-url="{{ route('profile.mailingAddressForCheque') }}" style="margin-bottom:0px;" id="mailing_address_for_cheque_form">
               <div class="row">
                  <div class="col-md-6">
                     <div class="input-group">
                        <label for="first_name">FIRST NAME<span class="required">*</span></label>
                        <input type="text" name="first_name" value="" class="form-control" placeholder="Enter first name">
                     </div>
                     <div class="input-group">
                        <label for="first_name">LAST NAME<span class="required">*</span></label>
                        <input type="text" name="last_name" value="" class="form-control" placeholder="Enter last name">
                     </div>
                     <div class="input-group">
                        <label for="first_name">ADDRESS<span class="required">*</span></label>
                        <input type="text" name="address" value="" class="form-control" placeholder="Enter address">
                     </div>
                     <div class="input-group">
                        <label for="first_name">CITY<span class="required">*</span></label>
                        <input type="text" name="city" value="" class="form-control" placeholder="Enter city">
                     </div>
                     <div class="input-group">
                        <label for="first_name">STATE<span class="required">*</span></label>
                        <select class="form-control" name="state">
                           <option value="">Select state</option>
                           <option value="U.S. Armed Forces – Americas">U.S. Armed Forces – Americas</option>
                           <option value="U.S. Armed Forces – Europe">U.S. Armed Forces – Europe</option>
                           <option value="Alaska">Alaska</option>
                           <option value="Alabama">Alabama</option>
                           <option value="U.S. Armed Forces – Pacific">U.S. Armed Forces – Pacific</option>
                           <option value="Arkansas">Arkansas</option>
                           <option value="American Samoa">American Samoa</option>
                           <option value="Arizona">Arizona</option>
                           <option value="California">California</option>
                           <option value="Colorado">Colorado</option>
                           <option value="Connecticut">Connecticut</option>
                           <option value="District of Columbia">District of Columbia</option>
                           <option value="Delaware">Delaware</option>
                           <option value="Florida">Florida</option>
                           <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                           <option value="Georgia">Georgia</option>
                           <option value="Guam">Guam</option>
                           <option value="Hawaii">Hawaii</option>
                           <option value="Iowa">Iowa</option>
                           <option value="Idaho">Idaho</option>
                           <option value="Illinois">Illinois</option>
                           <option value="Indiana">Indiana</option>
                           <option value="Kansas">Kansas</option>
                           <option value="Kentucky">Kentucky</option>
                           <option value="Louisiana">Louisiana</option>
                           <option value="Massachusetts">Massachusetts</option>
                           <option value="Maryland">Maryland</option>
                           <option value="Maine">Maine</option>
                           <option value="Marshall Islands">Marshall Islands</option>
                           <option value="Michigan">Michigan</option>
                           <option value="Minnesota">Minnesota</option>
                           <option value="Missouri">Missouri</option>
                           <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                           <option value="Mississippi">Mississippi</option>
                           <option value="Montana">Montana</option>
                           <option value="North Carolina">North Carolina</option>
                           <option value="North Dakota">North Dakota</option>
                           <option value="Nebraska">Nebraska</option>
                           <option value="New Hampshire">New Hampshire</option>
                           <option value="New Jersey">New Jersey</option>
                           <option value="New Mexico">New Mexico</option>
                           <option value="Nevada">Nevada</option>
                           <option value="New York">New York</option>
                           <option value="Ohio">Ohio</option>
                           <option value="Oklahoma">Oklahoma</option>
                           <option value="Oregon">Oregon</option>
                           <option value="Pennsylvania">Pennsylvania</option>
                           <option value="Puerto Rico">Puerto Rico</option>
                           <option value="Palau">Palau</option>
                           <option value="Rhode Island">Rhode Island</option>
                           <option value="South Carolina">South Carolina</option>
                           <option value="South Dakota">South Dakota</option>
                           <option value="Tennessee">Tennessee</option>
                           <option value="Texas">Texas</option>
                           <option value="Utah">Utah</option>
                           <option value="Virginia">Virginia</option>
                           <option value="Virgin Islands">Virgin Islands</option>
                           <option value="Vermont">Vermont</option>
                           <option value="Washington">Washington</option>
                           <option value="Wisconsin">Wisconsin</option>
                           <option value="West Virginia">West Virginia</option>
                           <option value="Wyoming">Wyoming</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="input-group">
                        <label for="first_name">ZIP CODE<span class="required">*</span></label>
                        <input type="text" name="zipcode" value="" class="form-control" placeholder="Enter zip code">
                     </div>
                     <div class="input-group">
                        <label for="first_name">COUNTRY<span class="required">*</span></label>
                        <select class="form-control" name="country">
                           <option value="" class="">Select country</option>
                           <option value="United States">United States</option>
                        </select>
                     </div>
                     <div class="input-group">
                        <label for="first_name">ADDRESS TYPE<span class="required">*</span></label>
                        <select class="form-control" name="address_type">
                           <option value="">Select location</option>
                           <option value="Office">Office</option>
                           <option value="Home">Home</option>
                           <option value="Other">Other</option>
                        </select>
                     </div>
                     <div class="input-group">
                        <label for="first_name">CONTACT NUMBER<span class="required">*</span></label>
                        <input type="text" name="contact_number" value="" class="form-control" placeholder="Enter contact number">
                        <small>In case we have any issues with the mailing address</small>
                     </div>
                     <div class="input-group" style=""> 
                        <input type="submit" value="Submit" class="btn btn-block" style="">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="msg_div" style="margin-top: 20px;">  </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<div class="modal fade in" id="loanTerm" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content showCode-content">
			<div class="pop-title">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="close"><i class="far fa-times"></i></button>
				<h5>Cash Request</h5>
			</div>
			<!--<hr>-->
			<div class="modal-body">
				<h6 id="msgContent"><i id="save-pay_load" class="fa fa-circle-o-notch fa-spin" style="font-size:24px;"></i></h6>
				<div id="countdown2"></div>
				<div class="pay_button">
					<a href="javascript:;" class="btn pay_save_title_OK">Okay</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
		
function ApplyforCash(){
	$(".confirmCash").attr("disabled","disabled");
	var total_order_points = jQuery("#ac_amts").text();
	var total_order_points = total_order_points.split(',').join('');
	var totalPoints = Number(total_order_points);
	
	var remainingPts = jQuery("#pay").text();
	remainingPts = remainingPts.replace(',','');
	var requested_cash_amount = jQuery(".total_cash_amount").val();
	
	var cash_request = '<?php echo $cash_request; ?>';
	var recv_cheque = 0;
	
	recv_cheque = jQuery("input[name='mode']:checked").val();
	 
	if(cash_request == '0'){
		var msg = 'Your cash request is already in process.';
		jQuery('#msgContent').html(msg);
		jQuery(".pay_save_title_OK").show();
		jQuery('.pop-model-bg').show();
		jQuery('#loanTerm').show();
		jQuery(".confirmCash").removeAttr("disabled");
	} else {
		@if($total >= 50)
			jQuery.ajax({
				url: '{{ route("profile.applyforcash") }}',
				type:'post',
				data:{totalPoints:totalPoints,remainingPts:remainingPts,requested_cash_amount:requested_cash_amount,recv_cheque:recv_cheque},
				success:function(result){
					if(result.trim() == 'success'){
						var msg = '<div class="alert alert-success" style="margin-bottom:20px;font-size: 14px;">Thank you. Your cash request has been submitted! We will send you a confirmation email once your cash has been sent.</div>';
					} else if(result.trim() == 'fail') {
						var msg = '<div class="alert alert-danger" style="margin-bottom:20px;font-size: 14px;">Invalid cash requested amount.</div>';
					}else {
						var msg = '<div class="alert alert-danger" style="margin-bottom:20px;font-size: 14px;">There is some system error.</div>';
					}
					jQuery('#cash_respnse').html(msg);
					jQuery('body').scrollTop( 10 );
					setTimeout(function(){
						window.location.href=window.location.href;
					},2000);
				}
			});
		@else
			var msg = 'You must have a minimum of $50 in order to redeem your cash back.';
			jQuery('#msgContent').html(msg);
			jQuery(".pay_save_title_OK").show();
			jQuery(".pop-model-bg").hide();
			jQuery('#loanTerm').show();
			jQuery(".confirmCash").removeAttr("disabled");
		@endif
		
	}
	
	return true;
}

</script>
@endsection

@push('after-styles')
<style>
@media (min-width: 768px) {
	#loanTerm .modal-dialog {width: 560px;height: 323px;}
}
#loanTerm .pop-title h5 {font-size: 28px;text-transform: uppercase;font-weight: bold;text-align: center;color: #3ca7bb;padding-top: 61px;}
#loanTerm h6#msgContent {text-align: center;font-size: 18px;font-weight: 700;line-height: 20px;width: 450px;margin: auto;}
#loanTerm .pay_button {width: 450px;margin: auto;text-align: center;margin-top: 30px;margin-bottom: 36px;}
#loanTerm .pay_button a.btn.pay_save_title_OK {width: 200px;margin: auto;background: #fff;color: #3ca7bb;border: 3px solid;font-size: 18px;font-weight: 700;height: 54px;padding: 13px;}
.pop-title button.close i.fa.fa-times {position: absolute;top: 10px;right: 10px;font-size: 50px;-webkit-text-stroke: 7px #fff;color: #000 !important;}
.pop-model-bg {background: rgba(0, 0, 0, 0.95);}
div#loanTerm.modal {top: 23vh;}
#address_for_cheque .pop-title h5 {text-align: center;text-transform: uppercase;font-weight: bold;font-size: 22px;color: #007c7d;margin-top: 50px;}
#address_for_cheque button.close{opacity:1;}
#address_for_cheque .modal-dialog {width: 620px;}
#address_for_cheque .input-group {width: 100%;}
#address_for_cheque small {font-size:10px;color: #ac999f;padding-top: 7px;float: left;}
#address_for_cheque .btn-block {color:#fff;margin-top: 10px;background:#eb543a;}
#address_for_cheque label{margin-bottom:0px;margin-top:5px;}
#address_for_cheque .form-control{border-radius:4px;}
#mailing_address_for_cheque_form select.form-control {color: #a9a5a5;}
.input-group select {-webkit-appearance: none;-moz-appearance: none;background: url(http://test.vastedge.com/cdc/wp-content/uploads/2019/04/sort_desc_2.png) no-repeat;background-position: 98% 10px;background-size: 14px;}
.profile_page_right_block_padding {padding:0px;box-shadow:none;}

#countdown2 .col-md-12.firstPurcahseText {width: 90%;padding-left: 0px;font-size: 14px;}
#countdown2 .container {width: 100% !important;}
</style>

@endpush