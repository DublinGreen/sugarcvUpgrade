@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')
<link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/build/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://coreui.io/demo/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css" />

@endpush

@section('template-custom-js')
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://coreui.io/demo/vendors/datatables.net/js/jquery.dataTables.js"></script>
	<script src="https://coreui.io/demo/vendors/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/src/js/bootstrap-datetimepicker.js"></script>
	<script>
	jQuery(document).ready(function(){		
		jQuery('#sdate').datetimepicker({
			format : 'MM-DD-YYYY',
			ignoreReadonly  : true,
		});
		
		jQuery('#edate').datetimepicker({
			format : 'MM-DD-YYYY',
			ignoreReadonly  : true,
		});		
		jQuery('#filter').change(function() {
			
			if(jQuery('#filter').val() == '0'){
				var sdate = jQuery("#sdate").val();
				var edate = jQuery("#edate").val();
				
				if(sdate == '' || edate == ''){
					
					jQuery("#edate").val('{{ date("m-d-Y") }}');
					jQuery("#sdate").val('{{ date("m-d-Y", strtotime("-30 day")) }}');
				}
			}
		});
		
		jQuery(document).on("click", "#filter-submit", function(o){
			o.preventDefault();
			jQuery.fn.dataTableSettings[0].ajax.data = function(data){
				data.sdate = jQuery("#sdate").val();
				data.edate = jQuery("#edate").val();
				data.filter = jQuery("#filter").val();
				jQuery("#fsdate").val(data.sdate);
				jQuery("#fedate").val(data.edate);
				jQuery("#order").val(data.filter);
				jQuery("#form-submit").removeAttr('disabled');
			};
			$('.table-grid').DataTable().draw(true);
		});
		
		$('body').on('click', '#checkAll', function () {
			if ($(this).hasClass('allChecked')) {
				$('input.selectBox[type="checkbox"]').prop('checked', false);
				$('#ids').val('');
			} else {
				$('input.selectBox[type="checkbox"]').prop('checked', true);
				$('#ids').val('allselected');
			}
			$(this).toggleClass('allChecked');
		});		
		
		jQuery.fn.tmp = [];
		$('body').on('change', 'input.selectBox[type="checkbox"]', function () {
		  var checked = $(this).val();
		  if ($(this).is(':checked')) {
			jQuery.fn.tmp.push(checked);
		  } else {
			jQuery.fn.tmp.splice($.inArray(checked, jQuery.fn.tmp),1);
		  }
		 $('#ids').val(jQuery.fn.tmp);
		});
		
		$('#user_table').on( 'page.dt', function () {
			$( document ).ajaxComplete(function() {
				if(jQuery('.allChecked').is(':checked')){
					$('input.selectBox[type="checkbox"]').prop('checked', true);
				} else {
					if(jQuery.fn.tmp){
						setTimeout(function(){
							for(var x=0; x<jQuery.fn.tmp.length; x++){
								jQuery('.selectBox[value="'+jQuery.fn.tmp[x]+'"]').prop('checked', true);
							}					
						},200);
					}					
				}
			});
		});	
	});
	
	function formValidation(){
		var ids = jQuery('#ids').val();
		if(!ids){
			jQuery('#form-error').html('<span style="color:red;">Please select users.</span>');
			return false;
		}
		return true;
	}
	</script>
@endsection

@section('content')
<div class="container-fluid">
  <div class="main-content" autoscroll="true" bs-affix-target="" init-ripples="" style="">
	<section class="row">
	<div class="col-md-4">
	   <div class="card">
		  <div class="card-header">
			 <strong>Offers Email</strong>
		  </div>
		 <form class="form-horizontal " data-parsley-validate="" role="form" >
		  <div class="card-body">
			<div class="form-group row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="sendgrid_apikey">No. of purchases made by User:</label>
						<select class="form-control" name="filter" style="height:34px;" id="filter" required="">
							<option value="-1" selected="selected">Select</option>
							@for ($i = 0; $i <= 10; $i++) {
								<option value="{{ $i }}">{{ $i }}</option>
							@endfor
						</select>				   
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="sdate">Start Date:</label>
						<input class="form-control" id="sdate" type="text" name="sdate" readonly autocomplete="current-n">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="edate">End Date:</label>
						<input class="form-control" id="edate" type="text" name="edate" readonly autocomplete="current-n">
					</div>
				</div>
			</div>
		  </div>
		  <div class="card-footer">
			 <button class="btn btn-sm btn-primary" id="filter-submit" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
		  </div>
		  </form>
	   </div>
	  </div>
	  
	  <div class="col-md-8">
	   <div class="card">
		  <div class="card-header">
			 <strong>Users list</strong>
		  </div>
		 <form class="form-horizontal" method="post" onsubmit="return formValidation();" action="{{ route('admin.offerEmail.request') }}">
			<input type="hidden" id="fsdate" name="sdate" />
			<input type="hidden" id="fedate" name="edate" />
			<input type="hidden" id="order" name="order" />
			
		  <div class="card-body">
			<div class="datatables">
				<table class="table table-grid" id="user_table" cellspacing="0" width="100%" role="grid" data-url="{{ route('admin.offerEmail.filter') }}">
					<thead>
						<tr>
							<th data-id="action" data-orderable="false" data-searchable="false"><input type="checkbox" id="checkAll" /></th>
							<th data-id="name">User</th>
							<th data-id="email">Email</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		  </div>
		  <div class="card-footer">
			<input type="hidden" name="ids" id="ids" />
			 <button class="btn btn-sm btn-primary" id="form-submit" disabled type="submit"><span class="btn-label">Next</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
			 <span id="form-error"></span>
		  </div>
		  {{ csrf_field() }}
		  </form>
	   </div>
	  </div>
	</section>  
	</div>
</div>

@endsection
