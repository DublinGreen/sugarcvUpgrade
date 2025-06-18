@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')
<link rel="stylesheet" href="https://coreui.io/demo/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css" />
@endpush

@section('template-custom-js')
	<script src="https://coreui.io/demo/vendors/datatables.net/js/jquery.dataTables.js"></script>
	<script src="https://coreui.io/demo/vendors/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
	<script>
		jQuery(document).ready(function(){
			jQuery(document).on('click', 'a[data-event="delete"]', function(){
				var id = jQuery(this).data('id');
				jQuery("input[name='id']").val(id);
			});
		});	
		function ajaxCallbackData(response){
		}
	</script>
@endsection

@section('content')
<div class="container-fluid">
  <div class="main-content" autoscroll="true" bs-affix-target="" init-ripples="" style="">
	<section class="tables-data">
	  <div class="page-header">
		<h1 class="pull-left"><i class="md md-group-add"></i> Offers Emails</h1>
	  </div>

	  <div class="card" style="clear:both;">
		<div class="card-body">
		  <div class="datatables">
			<table class="table table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('admin.offerEmail.list') }}">
			  <thead>
				<tr>
				  <th data-id="id">Offer ID</th>
				  <th data-id="cashback_amount">Offer Bonus</th>
				  <th data-id="days_limit">Order Limit</th>
				  <th data-id="schedule_time">Schedule Time</th>
				  <th data-id="users">Users In Group</th>
				  <th data-id="description">Cohort</th>
				  <th data-id="status">Status</th>
				  <th data-id="shopped_users">Offer Conversions</th>
				  <th data-id="shopped_users_rate">Offer Conversions Rate</th>
				  <th data-id="action">action</th>
				</tr>
			  </thead>
			  <tbody>
			  </tbody>
			</table>
		  </div>
		</div>
	  </div>
	</section>
  </div>
</div>

<!-- publish modal -->
  <div class="modal fade" id="publishModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
	<form class="action-form row" data-parsley-validate="" role="form" id="registerForm" http-type="post" data-url="{{ route('admin.stores.status') }}">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Publish</h4>
		  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		</div>
		<div class="modal-body">
		  <h5>Are you sure ?</h5>
		  <input type="hidden" name="id" id="id" />
		  <input type="hidden" name="status" value="1" />
		</div>
		<div class="modal-footer">
		  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  <button type="submit" class="btn btn-success">
			<span class="btn-label">Publish</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span>
		  </button>
		</div>
	  </div>
	  </form>
	</div>
  </div>
  
<!-- trash modal -->
  <div class="modal fade" id="trashModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
	<form class="action-form row" data-parsley-validate="" role="form" id="registerForm" http-type="post" data-url="{{ route('admin.stores.status') }}">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Trash</h4>
		  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		</div>
		<div class="modal-body">
		  <h5>Are you sure ?</h5>
		  <input type="hidden" name="id" id="id" />
		  <input type="hidden" name="status" value="0" />
		</div>
		<div class="modal-footer">
		  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  <button type="submit" class="btn btn-danger">
			<span class="btn-label">Drafts</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span>
		  </button>
		</div>
	  </div>
	  </form>
	</div>
  </div>

<!-- Delete modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
	<form class="action-form row" data-parsley-validate="" role="form" id="registerForm" http-type="post" data-url="{{ route('admin.stores.delete') }}">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Delete permanent</h4>
		  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		</div>
		<div class="modal-body">
		  <h5>Are you sure ?</h5>
		  <input type="hidden" name="id" id="id" />
		</div>
		<div class="modal-footer">
		  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  <button type="submit" class="btn btn-danger">
			<span class="btn-label">Delete</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span>
		  </button>
		</div>
	  </div>
	  </form>
	</div>
  </div>

@endsection
