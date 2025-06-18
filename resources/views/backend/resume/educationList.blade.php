@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Education List')

@push('after-styles')
<link rel="stylesheet" href="https://coreui.io/demo/3.0.0/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css" />
@endpush

@section('template-custom-js')
	<script src="https://coreui.io/demo/3.0.0/vendors/datatables.net/js/jquery.dataTables.js"></script>
	<script src="https://coreui.io/demo/3.0.0/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 225px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Education List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Users</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.users.resume.edit', compact('id')) }}">Resume</a></li>
              <li class="breadcrumb-item active">Education</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

	@if ($message = Session::get('success'))
	<section class="content">
      <div class="container-fluid">
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>	
				<strong>{{ $message }}</strong>
		</div>
	 </div>
	</section>
	@endif

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
		  <div class="table-responsive">
			<table class="table m-0 table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('admin.getEducationList', compact('id')) }}">
			  <thead>
				<tr>
				  <th data-id="school_name" data-orderable="false" data-searchable="false">Name</th>
				  <th data-id="school_location" data-orderable="false" data-searchable="false">Location</th>
				  <th data-id="degree" data-orderable="false" data-searchable="false">Degree</th>
				  <th data-id="start_date" data-orderable="false" data-searchable="false">Start Date</th>
				  <th data-id="end_date" data-orderable="false" data-searchable="false">End Date</th>
				  <th data-id="action" data-orderable="false" data-searchable="false">Action</th>
				</tr>
			  </thead>
			  <tbody>
			  </tbody>
			</table>
		  </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
<!-- Delete -->
<div id="deletePop" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
	  </div>
	  <div class="modal-body">
		<h3>Delete</h3>
		<p>Are you sure?</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-danger">Delete</button>
	  </div>
	</div>

  </div>
</div>



@endsection
