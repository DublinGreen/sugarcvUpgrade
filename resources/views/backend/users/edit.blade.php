@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Edit User')

@push('after-styles')
<link rel="stylesheet" href="https://coreui.io/demo/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css" />
@endpush

@section('template-custom-js')
<script src="https://coreui.io/demo/vendors/datatables.net/js/jquery.dataTables.js"></script>
<script src="https://coreui.io/demo/vendors/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>

@endsection

@section('content')
<div class="container-fluid profile">
  <div class="animated fadeIn">
	<div class="col-md-12">
	   <ul class="nav nav-tabs" role="tablist">
		  <li class="nav-item">
			 <a class="nav-link active show" data-toggle="tab" href="#profile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link" data-toggle="tab" href="#pcb" role="tab" aria-controls="ct" aria-selected="false">Pending Cashback</a>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link" data-toggle="tab" href="#ecb" role="tab" aria-controls="ct" aria-selected="false">Earned Cashback</a>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link" data-toggle="tab" href="#referrals" role="tab" aria-controls="ct" aria-selected="false">Referrals</a>
		  </li>
	   </ul>
	   <div class="tab-content">
		  <div class="tab-pane active show" id="profile" role="tabpanel">
			<form class="action-form" role="form" http-type="post" data-url="{{ route('admin.users.update',['id' => $user->id]) }}">
				<div class="row">
				  <div class="col-sm-6">
					<div class="form-group">
					  <label for="title">Username</label>
					  <input class="form-control"  type="text" readonly value="{{ $user->username }}">
					</div>
				  </div>
				  
				  <div class="col-sm-6">
					<div class="form-group">
					  <label for="description">email</label>
					   <input class="form-control"  type="text" readonly value="{{ $user->email }}">
					</div>
				  </div>
				  
				  <div class="col-sm-6">
					<div class="form-group">
					  <label for="description">First Name</label>
					   <input class="form-control"  type="text" name="first_name" value="{{ $user->first_name }}">
					</div>
				  </div>
				  
				  <div class="col-sm-6">
					<div class="form-group">
					  <label for="description">Last Name</label>
					   <input class="form-control"  type="text" name="last_name" value="{{ $user->last_name }}">
					</div>
				  </div>
				  
				  <div class="col-sm-6">
					<div class="form-group">
					  <label for="password">Password</label>
					   <input class="form-control"  type="password" name="password" >
					</div>
				  </div>
				  
				  <div class="col-sm-6">
					<div class="form-group">
					  <label for="cpassword">Confirm Password</label>
					   <input class="form-control"  type="password" name="cpassword" >
					</div>
				  </div>
				  
				  <div class="col-sm-6">
					<div class="form-group">
					   <label for="profile">Profile</label>
					   <input class="form-control" type="file" name="profile" >
					</div>
				  </div>
				  
				</div>
				<div class="row">
					<div class="col-md-12">
					   <div class="form-group">
							<button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-dot-circle-o"></i> Update</button>
					   </div>
					</div>				
				</div>
			</form>
		  </div>
		  <div class="tab-pane" id="pcb" role="tabpanel">
			  <div class="datatables">
				<table style="width:100%;border-top-left-radius: 5px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;border-top-right-radius: 5px;" class="table table-full table-full-small dt-responsive display nowrap table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('admin.getUserPendingCashBackList',['id' => $user->id]) }}">
				  <thead>
					<tr>
					  <th data-id="track_id">Tracking ID</th>
					  <th data-id="created_at">Tracking ID Date</th>
					  <th data-id="store_id">Store</th>
					  <th data-id="click_source">Source</th>
					  <th data-id="order_number">Order No.</th>
					  <th data-id="user_revenue">Member Cash-Back: </th>
					  <th data-id="remarks">Remarks</th>
					</tr>
				  </thead>
				  <tbody>
				  </tbody>
				</table>
			  </div>
		  </div>
		  <div class="tab-pane" id="ecb" role="tabpanel">
			  <div class="datatables">
				<table style="width:100%;border-top-left-radius: 5px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;border-top-right-radius: 5px;" class="table table-full table-full-small dt-responsive display nowrap table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('admin.getUserEarnedCashBackList',['id' => $user->id]) }}">
				  <thead>
					<tr>
					  <th data-id="track_id">Tracking ID</th>
					  <th data-id="created_at">Tracking ID Date</th>
					  <th data-id="store_id">Store</th>
					  <th data-id="click_source">Source</th>
					  <th data-id="order_number">Order No.</th>
					  <th data-id="user_revenue">Member Cash-Back: </th>
					  <th data-id="remarks">Remarks</th>
					</tr>
				  </thead>
				  <tbody>
				  </tbody>
				</table>
			  </div>
		  </div>
		  <div class="tab-pane" id="referrals" role="tabpanel">
				<div class="table-responsive referralTable" style="margin-top:10px;margin-bottom: 5px;">
					<table id="referrals" style="width:100%;border-top-left-radius: 5px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;border-top-right-radius: 5px;" class="table table-full table-full-small dt-responsive display nowrap table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('admin.getUserReferralsList',['id'=>$user->id]) }}" >
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
