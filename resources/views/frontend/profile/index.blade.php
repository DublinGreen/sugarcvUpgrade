@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_my_profile page-template-page-tpl_my_profile-php page page-id-2086 logged-in small-sticky-half ')

@push('after-styles')
<link rel="stylesheet" href="https://coreui.io/demo/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css" />
<link rel="stylesheet" href="http://test.vastedge.com/cdc/wp-content/themes/couponxl/css/jquery.datetimepicker.css" />
@endpush

@section('template-custom-js')
	<script src="https://coreui.io/demo/vendors/datatables.net/js/jquery.dataTables.js"></script>
	<script src="https://coreui.io/demo/vendors/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<script type="text/javascript" src="http://test.vastedge.com/cdc/wp-includes/js/jquery/ui/datepicker.min.js"></script>
@endsection

@section('content')
<section class="custom_bg_grey_shade">
	<section id="countdown" class="newcounter getData" data-url="#"></section>
	<div class="container">
        <div class="row" style="margin-bottom:12px;margin-top:20px;"> 
            <div class="col-sm-6">
				<p class="logged_in_user_fn"><i class="fas fa-user" aria-hidden="true"></i>{{ $user->first_name }}'s Account</p>
			</div>
            <div class="col-sm-3 col-sm-offset-3">
				<p class="logged_in_user_full_name_img">
					<span class="full_name">{{ $user->first_name }} expanded</span>
					<img src="https://secure.gravatar.com/avatar/43f8ebc0bf5a2bf9e0614649e5f0eefe?s=55&amp;d=mm&amp;r=g" class="img-responsive img-user-avatar" alt="avatar">
				</p>
			</div>
		</div>
	</div>
	
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<div class="white-block top-border">
					<div class="white-block-content">
                		<div class="row">
							@include('frontend.profile.sidebar')
							@yield('profile_content')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<section>
<div class="modal fade" id="change_password" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content showCode-content">
			<div class="modal-header">
				<i class="fal fa-times" aria-hidden="true" title="close" data-dismiss="modal"></i>
				<h4 class="modal-title red-line_bottom">Change Password</h4>
			</div>
			<div class="modal-body">
				<div class="password-content-modal">
					<form id="chngPswd" http-type="post" data-url="{{ route('profile.update') }}" class="action-form" >
						<div class="row">
							
							<div class="col-sm-12 msg_div"></div>
							<div class="col-sm-12">
								<div class="input-group">
									<label for="password">PASSWORD<span class="required">*</span><span id="fname_error_msg" class="custom_edit_error"></span></label>
									<small class="error"></small>
									<input type="password" name="password" id="password" placeholder="Password (4+ characters)" class="form-control">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="input-group">
									<label for="repeat_password">REPEAT PASSWORD<span class="required">*</span><span id="fname_error_msg" class="custom_edit_error"></span></label>
									<small class="error"></small>
									<input type="password" name="repeat_password" id="repeat_password" placeholder="Repeat password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<input type="hidden" name="change_password" value="change_password">
								<input type="hidden" name="click_source" value="Web">
								<a href="javascript:;" class="btn submit-form" type="submit">Change Password <span class="fa fa-spinner fa-spin btn-spinner"></span></a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@push('after-styles')
 <style>
.profile_page_right_block_padding label{text-transform:capitalize;}
.profile_pg_munus ul.list-unstyled li a h4 {font-weight: bold !important;margin-top: 17px;}
.profile_pg_munus ul.list-unstyled li a p {font-size: 17px !important;letter-spacing: 0.7px;margin-top:-4px;}
.profile_txt{font-size: 23px;letter-spacing: 0.3px;padding-left: 30px;margin-bottom: 0px;}
.profile_page_right_block_padding {padding: 5px 15px 10px !important;margin-left: 50px;width: 750px;border-radius: 6px;} 
.profile_page_right_block_padding div#basic_info .input-group input {height: 30px !important;border-radius: 10px !important;width: 255px !important;}
a.changePswd {margin-bottom: 25px;}
.profile_pg_munus ul.list-unstyled li:last-child a {color: #028283;} 
p.logged_in_user_fn {font-size: 40px !important;color: #028283 !important;font-weight: bold !important;}
span.fontawesome-stacked-icon.referral {color: #028283 !important;}
div#basic_info .panel-body {padding-bottom: 0px;padding-top: 5px;}
.prfl_subpages_content {margin-bottom: 120px;}
.profile_pg_munus ul.list-unstyled {padding: 12px 20px !important;}
.custom_bg_red_shade {font-size: 22px !important;font-weight: 300;}  
span.cross_icon {position: absolute;right: -20px;font-size: 38px;color: #3b3a3f;top: -6px;cursor:pointer;} 
.cross_icon .fa{-webkit-text-stroke: 5px #e85036;}
.link_detail_info {margin-left: 25px !important;color: #e2c8be !important;}
.page-template-page-tpl_my_profile .white-block:not(.widget) .white-block-content ul li.active {border-bottom-color: #ced0d1 !important;}
.profile_page_right_block_padding div#basic_info input.btn.submit-form {padding: 6px 30px;}
div#p_point, #p_point_1, #p_point_23 {width: 100% !important;}
p.pending_cb_txt {font-size: 13px;font-weight: 400;color: #484848;margin-bottom: 0px;}
.white-block-content .profile_page_right_block_padding div.custom_accordian .panel.panel-default .panel-collapse .panel-body {padding-top: 0px !important;padding-bottom: 0px !important;}
.table-responsive .dataTables_filter label input {border: 1px solid #d7d7d9 !important;text-indent: 3px !important;}
.table-responsive .dataTables_filter label span.custom_search_icon {right: 8px !important;font-size: 18px !important;}
.table-responsive .dataTables_filter label span.custom_search_icon .fa{-webkit-text-stroke: .5px white;}
.table-responsive .dataTables_filter label input::placeholder {color: #a7a8ac;opacity: 1;font-weight:normal;}
.table-responsive .dataTables_filter label input:-ms-input-placeholder {color: #a7a8ac;font-weight:normal;}
.table-responsive .dataTables_filter label input::-ms-input-placeholder {color: #a7a8ac;font-weight:normal;}
#pcashback_table th, #pcashback_table td, #cashback_table th, #cashback_table td {text-align: center;} 
input.paypal_email {padding: 2px 5px;background: #fff;border: 1px solid #d0d1d3;border-radius: 6px;color: #111;}
input.total_cash_amount.field__input.field__input--has-left-add-on {background: #fff;border: 1px solid #d0d1d3;   border-radius: 4px;color: #111;height: 27px;width: 103px;}
.col-md-12.affinityy_cashback_request_label {margin: 8px 0px;}
span.pending_cash_bask {padding-left: 15px !important;margin-bottom: 10px;}
.req_label {position: relative;padding-left: 17px;margin-bottom: 12px;cursor: pointer;font-size: 15px; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;}
.req_label input {position: absolute;opacity: 0;}
.checkmark {position: absolute;top: 5px;left: 0;height: 12px;width: 12px; background-color: #fff !important;border-radius: 50%; border: 1px solid #ccc;}
.req_label:hover input ~ .checkmark {border: 1px solid #ccc;background-color:#fff;}
.req_label input:checked ~ .checkmark {background-color: #fafafa !important;border: 1px solid #028283;}
.checkmark:after {content: "";position: absolute;display: none;}
.req_label input:checked ~ .checkmark:after {display: block;}
.req_label .checkmark:after {top: 2px;left: 2px; width: 6px;height: 6px;border-radius: 50%;background: #028283;}
.rc_btn {background: #028283 !important;font-size: 14px !important;font-weight: 600 !important; border: 1px solid #028283 !important; padding: 5px 35px !important;}
label.req_label {text-transform: inherit;}
span.cashPaypaltxt {font-size: 12px;}
input#DateTimeRangeInput {border-radius: 6px !important; height: 26px; width: 205px !important;padding-left:0px !important;}
.row.datepicker_row .input-field-container{width:auto !important;}
.row.datepicker_row .input-field-container i.fa.fa-calendar , .row.datepicker_row .input-field-container i.fal.fa-calendar-alt {top: 3px !important;color:#000 !important;}
input#DateTimeRangeInput::placeholder {color: #a8a9ad;font-weight:normal;}
span.pending_cash_bask {margin-bottom: 5px;}
span.pending_cash_bask {font-weight: 500;}
.flex{display: flex !important; justify-content: center !important;align-items: center !important;}
.my_total_referrals.heading_ref {padding-top: 20px;}
.row.datepicker_row {padding-bottom: 0px !important;}
.table-responsive .dataTables_filter label input {height: 29px !important;width: 165px !important;}
.table-responsive .dataTables_length label {margin-bottom: 12px;}
.table-responsive .dataTables_filter label span.custom_search_icon {color: #6197b1 !important;}
.table-responsive select {border-radius: 6px;width: fit-content;}
.table-responsive #referrals_wrapper.dataTables_wrapper .dataTables_paginate .paginate_button.previous, .table-responsive #referrals_wrapper.dataTables_wrapper .dataTables_paginate .paginate_button.next {background: transparent !important;}
.table-responsive .dataTables_filter label input::placeholder {color: #a9aaac;}
.table-responsive .dataTables_filter label input:-ms-input-placeholder {color: #a9aaac;}
.table-responsive .dataTables_filter label input::-ms-input-placeholder {color: #a9aaac;}
.table-responsive #referrals_wrapper .dataTables_scroll {margin-bottom: 8px;}
div#referrals_wrapper {margin-bottom: 8px;}
.paginate_button.previous, .paginate_button.next, .paginate_button.previous.disabled, .paginate_button.next.disabled {padding-left: 0px !important;padding-right: 0px !important;}
.table-responsive .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {color: #fff !important;}
.table-responsive .dataTables_wrapper .dataTables_paginate .paginate_button {border-radius: 6px;padding: 2px 5px !important;}
.table-responsive .dataTables_wrapper .dataTables_paginate.paging_simple_numbers .paginate_button.disabled:hover {    color: #666 !important;cursor: not-allowed;}
a.paginate_button.previous:before, a.paginate_button.next:after {-webkit-text-stroke: 1px #fff;}
.paginate_button:hover.previous:before, .paginate_button:hover.next:after{-webkit-text-stroke: 1px #47aab7;}
.dataTables_wrapper .dataTables_paginate .paginate_button {font-weight: normal;}
div#accordion201 {margin-bottom: 10px !important;}
table{border-radius: 4px}
table.dataTable tbody tr{background-color:transparent !important;}
div#accordion2, #accordion20 {margin-bottom: 20px !important;}
.table-responsive {margin-bottom: 25px;}
.dataTables_info {color: #666 !important;font-weight: normal;}
.row.custom_bg_red_shade{margin-bottom:0px !important;}
#p_point_1 p, #p_point_23 p {font-weight: normal;}
table.dataTable thead .sorting_asc {background-image: url('http://test.vastedge.com/loan/wp-content/uploads/2018/09/sort_asc.png') !important;}
table.dataTable thead .sorting_desc {background-image: url('http://test.vastedge.com/loan/wp-content/uploads/2018/09/sort_desc.png') !important;}
#mycashTable table.dataTable thead th, #mycashTable table.dataTable thead td {border-bottom: 0px solid #c4c4c4 !important;}

@media screen and (min-width: 320px) and (max-width: 767px) {
	.custom_bg_grey_shade .container {width: 100% !important;} 
	p.logged_in_user_fn {font-size: 24px !important;}
	.row.custom_bg_red_shade {padding: 10px;font-size: 16px !important;}
	.cross_icon i.fa.fa-times {margin-right: 5px;}
	span.full_name {text-align: left !important;padding-left: 0px !important;padding-top: 10px !important;}
	.profile_pg_munus ul.list-unstyled {background: #f2f2f3;}
	p.logged_in_user_full_name_img img {height: 50px !important;width: 50px !important;}
	.profile_pg_munus ul.list-unstyled li a p {margin-top: 4px;}
	.profile_page_right_block_padding {width: 100% !important;margin-left: 0px !important;}

	#basic_info .panel-body {padding-left: 0px;}
	h4.profile_txt {padding-left: 10px;padding-top: 25px;}
	.profile_page_right_block_padding {box-shadow: 0px 2px 2px rgba(138, 138, 138, 0.3) !important;}
	.white-block-content .profile_page_right_block_padding div#accordion13, .white-block-content .profile_page_right_block_padding div#accordion123, .white-block-content .profile_page_right_block_padding div#accordion1234, .white-block-content .profile_page_right_block_padding div#accordion03{box-shadow: 0px 3px 5px rgba(153, 153, 153, 0.6) !important;}
	.panel{border:none !important;box-shadow:none !important;}
	span.pending_cash_bask {font-size: 20px !important;}
	span.pending_cash_bask {padding: 5px 0px !important;}
	div#accordion2, #accordion20 {margin-bottom: 0px !important;}
	.white-block-content .profile_page_right_block_padding div.custom_accordian .panel.panel-default .panel-heading {padding: 0px 0px !important;margin-left: -8px !important;}
	.table-responsive {padding: 0 0px !important;}
	.table-responsive .dataTables_length label, .table-responsive .dataTables_wrapper .dataTables_info{text-align:left;}
	#pcashback_table_filter, #cashback_table_filter, #clicks_table_filter {float: left;text-align: left;margin-top: 0px;position: relative;}
	.table-responsive .dataTables_filter label span.custom_search_icon {right: 30px !important;font-size: 18px !important;}
	.dataTables_wrapper .dataTables_paginate{text-align:left !important;margin-left:-5px;}
	.my_total_referrals span {font-size: 18px !important;line-height: 22px;}
	.profile_pg_munus ul.list-unstyled li {padding-bottom: 3px;}
}
</style>
@endpush