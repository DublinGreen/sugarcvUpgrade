@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Commission Payout')

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
			if(response.type == "success" && response.data){
				jQuery("#u_commission_type").val(response.data.publisher_comm_type);
				jQuery("input[name='type_id']").val(response.data.id);
				jQuery("#editModal").modal('show');
			}
		}
	</script>
@endsection

@section('content')
<div class="container-fluid">
  <div class="main-content" autoscroll="true" bs-affix-target="" init-ripples="" style="">
	<section class="tables-data">
	  <div class="page-header">
		<h1 class="pull-left"><i class="md md-group-add"></i> Stores</h1>
		<div class="pull-right"><a href="#" data-toggle="modal" data-target="#deleteModal" class="btn btn-block btn-outline-primary">Add Commission</a></div>
	  </div>

	  <div class="card" style="clear:both;">
		<div class="card-body">
		  <div class="datatables">
			<table class="table table-full table-full-small dt-responsive display nowrap table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('admin.settings.CommissionPayout.list') }}">
			  <thead>
				<tr>
				  <th data-id="DT_Row_Index" data-searchable="false" data-orderable="false" >S.No.</th>
				  <th data-id="publisher_comm_type">Publisher Commission Type</th>
				  <th data-id="action"></th>
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
  
<!-- Add modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
	<form class="action-form row" data-parsley-validate="" role="form" id="registerForm" http-type="post" data-url="{{ route('admin.settings.CommissionPayout.store') }}">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add Commission</h4>
		  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="commission_type">Commission Type</label>
						<input class="form-control" id="commission_type" name="commission_type" type="text" placeholder="P_10_10_10_10">
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  <button type="submit" class="btn btn-success">
			<span class="btn-label">Add</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span>
		  </button>
		</div>
	  </div>
	  </form>
	</div>
  </div>
  
<!-- edit modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
	<form class="action-form row" data-parsley-validate="" role="form" id="registerForm" http-type="post" data-url="{{ route('admin.settings.CommissionPayout.update') }}">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit Commission</h4>
		  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="commission_type">Commission Type</label>
						<input class="form-control" id="u_commission_type" name="commission_type" type="text" placeholder="P_10_10_10_10">
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  <button type="submit" class="btn btn-success">
			<span class="btn-label">Update</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span>
		  </button>
		</div>
	  </div>
	  <input type="hidden" name="type_id" />
	  </form>
	</div>
  </div>
  
<!-- Delete modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
	<form class="action-form row" data-parsley-validate="" role="form" id="registerForm" http-type="post" data-url="{{ route('admin.settings.CommissionPayout.delete') }}">
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
