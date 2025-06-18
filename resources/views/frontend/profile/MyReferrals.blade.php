@extends('frontend.profile.index')

@section('page-title','My Points')

@section('profile_content')
<div class="col-sm-9 prfl_subpages_content">
	<div class="profile_page_right_block_padding">
	   <div class="row my_refral_activity">
		  <div class="col-md-12">
			 <div class="row">
				<div class="col-md-12 referralCol">
				   <div class="my_total_referrals heading_ref">
					  <span>My Referrals:  <strong class="getData" data-url="{{ route('getMyAllReferrals') }}"><i class="fa fa-spinner fa-spin"></i>  </strong></span>
				   </div>
				   <div class="my_total_referrals">
					  <span>Referral Fees Earned:  <strong class="getData" data-url="{{ route('getReferFeesEarned') }}"><i class="fa fa-spinner fa-spin"></i>  </strong></span>
				   </div>
				   <div class="my_total_referrals">
					  <span>Referral Fees Pending:  <strong class="getData" data-url="{{ route('getReferFeesPending') }}"><i class="fa fa-spinner fa-spin"></i>  </strong></span>
				   </div>
				</div>
			 </div>
			 <div class="row datepicker_row">
				<span><strong>Date Range</strong></span>
				<div class="input-field-container">
				   <input type="text" id="DateTimeRangeInput" name="datetimes" readonly="" placeholder="Enter Range" value="">
				   <i class="fal fa-calendar-alt"></i>			
				</div>
			 </div>
			 <div class="row">
				<div class="table-responsive referralTable" style="margin-top:10px;margin-bottom: 5px;">
					<table id="referrals" style="width:100%;border-top-left-radius: 5px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;border-top-right-radius: 5px;" class="table table-full table-full-small dt-responsive display nowrap table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('profile.myreferrals.list') }}" >
						<thead>
							<tr>
								<th data-id="signupdate">SignUp Date</th>
								<th data-id="name">Name</th>
								<th data-id="email">Email</th> 
								<th data-id="active_shopper_date">First Purchase Date</th>
								<th data-id="first_purchase_referral">First Purchase Referral</th>
								<th data-id="premium_purchase_date">Premium Purchase Date</th>
								<th data-id="premium_purchase_referral">Premium Purchase Referral</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
@endsection

@push('after-styles')
<style>
  .profile_page_right_block_padding {margin-bottom: 40px;} 
  .dataTables_scrollHead {border:1px solid #ccc !important;border-bottom:none !important;}
  .dataTables_scrollBody{border:1px solid #ccc !important;border-top:none !important;}
  #DateTimeRangeInput {padding: 4px;width: 200px;border: 1px solid #ccc;height: 34px;text-indent: 10px;font-size: 14px;font-weight: 600;}
  .dt-buttons {float: left !important;text-align: left !important;padding-top: 8px !important;font-size: 14px;font-weight: 600;}
  button.dt-button.buttons-csv.buttons-html5 {border: 1px solid #ccc;padding: 2px 10px;border-radius: 5px;}
  button.dt-button.buttons-csv.buttons-html5:hover {background: #d6d6d6;}
  div#referrals_filter.dataTables_filter {margin-top: 6px;}
  .table-responsive .dataTables_filter label span.custom_search_icon {position: absolute;top: 11px;right: 10px;color: #47aab7;}
  @media only screen and (max-width:563px) and (min-width:320px) {
  span.drp-selected {float: left;width: 100%;text-align: left;margin-bottom: 5px;}
  }
  @media only screen and (max-width:767px) {
  .dt-buttons {float: right !important;text-align: right !important;position: absolute;top: 34px;right: 0px;}
  .row.datepicker_row {margin-left: -19px;}
  .table-responsive .dataTables_wrapper.no-footer .dataTables_scrollBody table.table.dataTable.no-footer tbody tr td {
  min-width: 163px !important;text-align: center;border-right: 1px solid #ccc;border-left:0px !important}
  .table-responsive .dataTables_wrapper.no-footer .dataTables_scrollBody table.table.dataTable.no-footer tbody tr td:last-child {border-right: none !important;border-bottom: 1px solid #ccc;text-align: left;}
  .dataTables_wrapper.no-footer div.dataTables_scrollBody>table {border-bottom: 1px solid #ccc;}
  .table-responsive.referralTable .dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable thead tr th {min-width:147px !important}
  .dt-buttons button.dt-button.buttons-csv.buttons-html5 {padding: 3.5px 15px;}
  }
  @media only screen and (max-width:1024px) {
  .width_on_small {width:100% !important;float:left;}
  .left_on_small {text-align: left !important;margin: 15px 0px;}
  }
  .dataTables_wrapper.no-footer .dataTables_scrollBody {
  border: 1px solid #ccc !important;
  border-top: none !important;
  }
  [data-title]:hover::after, [data-title]:hover::before{display:none !important;}
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
@endpush