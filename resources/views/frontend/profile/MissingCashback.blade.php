@extends('frontend.profile.index')

@section('page-title','My Points')

@section('profile_content')
<div class="col-sm-9 prfl_subpages_content">
	<div class="profile_page_right_block_padding">
		<div id="my_point" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">
						<span class="pending_cash_bask" style="display:block;">Missing Cash Back </span>
						<span class="pending_cash_bask" style="font-size:14px !important;margin-top: -10px;">My Click History</span> 
					</div>
				</div>	
				<div class="table-responsive pending_pts_history_tbl" style="margin-top:10px;">
					<table class="table table-full table-full-small dt-responsive display nowrap table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('profile.missingCashback.list') }}" style="border: 1px solid #ccc; font-size:14px;margin-bottom: 0px;width:100%;border-top-left-radius: 5px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;border-top-right-radius: 5px;">
						<thead>
							<tr>
								<th data-id="created_at">Date</th>
								<th data-id="store_id">Store</th>
								<th data-id="track_id">Clicks</th> 
								<th data-id="action" data-searchable="false">action</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>			
			</div>
		</div>
		<div id="mcb_modal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" style="font-size: 30px;">×</button>
				<h4 class="modal-title">Missing Cash Back Request</h4>
			  </div>
			  <form action="" id="mcb_form" method="post" style="float:none;padding:0px;" autocomplete="off" class="action-form" http-type="post" data-url="{{ route('profile.missing_cb') }}">
			  <div class="modal-body">
				<div class="row mcb_txt">
					<div class="col-md-12">
						<p>Missing cashback request is not eligible on NA stores.</p>
					</div>
				</div>
				<div class="row mcb_txt1">
					<div class="col-md-12">
						<p>You have already requested a missing cashback on this click.</p>
					</div>
				</div>
				<div class="row mcb_txt2">
					<div class="col-md-12">
						<p>Your cash back can take up to 5 business days to post to your account.</p>
					</div>
				</div>
				<div class="row mcb_fields">
					<div class="col-md-6">
						<div class="form-group">
						  <label for="usr">Click ID:<span class="required">*</span></label> 
						  <input type="text" class="form-control" id="click_id" name="click_id" readonly="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="usr">Store:<span class="required">*</span></label>
						  <input type="text" class="form-control" id="store_name" name="store_name" readonly="">
						  <input type="hidden" class="form-control" id="store_id" name="store_id" readonly="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="usr">Order Date:<span class="required">*</span></label>
						  <input type="date" class="form-control hasDatepicker" id="order_date" name="order_date" placeholder="MM-DD-YYYY">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="usr">Sale Amount:<span class="required">*</span></label>
						  <input type="text" class="form-control" id="sale_amount" name="sale_amount">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						  <label for="usr">Order Number:<span class="required">*</span></label>
						  <input type="text" class="form-control" id="order_no" name="order_no">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						  <label for="usr">Comments:<span class="required">*</span></label>
						  <textarea class="form-control" id="notes" name="notes" maxlength="100"></textarea>
						</div>
					</div>
				</div>
			  </div>
			  <div class="modal-footer">
				<span class="pull-left msg_div"></span>
				<style>
				@media (min-width:320px) and (max-width:767px){span#mcb_response {width: 100%;text-align: left;margin-bottom: 10px;}}
				</style>
				<button type="submit" class="btn btn-success mcb_s_btn">Submit <i class="fa btn-spinner fa-spinner fa-spin"></i></button>
				<button type="button" class="btn btn-success mcb_l_btn hide"><i class="fa fa-spinner fa-spin"></i> &nbsp;Loading</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			  </form>
			  </div>
			</div>
		</div>		
	</div>
</div>
@endsection

@push('after-styles')
<script>var mcbUrl = "{{ route('checkForMCB') }}";</script>
@endpush