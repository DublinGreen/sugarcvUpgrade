@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

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
            <h1 class="m-0 text-dark">Users Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Report</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
              <div class="table-responsive">
                <table class="table table m-0 table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('admin.report.getUserList') }}">
                  <thead>
                    <tr>
                      <th data-id="first_name" data-orderable="false" data-searchable="false">Name</th>
                      <th data-id="email" data-orderable="false" data-searchable="false">Email</th>
                      <th data-id="plan" data-orderable="false" data-searchable="false">Plan</th>
                      <th data-id="last_login" data-orderable="false" data-searchable="false">Last Login</th>
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
  @endsection
