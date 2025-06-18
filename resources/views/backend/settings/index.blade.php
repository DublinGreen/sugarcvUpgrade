@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')

@endpush

@section('template-custom-js')
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.settings')}}">Settings</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
     
        <div class="col-md-4 offset-md-4">
		 <div class="error msg_div"></div>
		 <form id="updatePasswordForm" class="action-form" role="form" http-type="post" method="post" data-url="{{ route('admin.updatePassword') }}" >
		
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Change Password</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Old Password</label>
                <input type="password" id="old_password" name="old_password" class="form-control" value="">
				<div id="notmatch"></div>
              </div>
              <div class="form-group">
                <label for="inputDescription">New Password</label>
                <input type="password" id="new_password" name="new_password" class="form-control" value="">
              </div>
              
               <div class="form-group">
                <label for="inputSpentBudget">Confirm New Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" value="">
              </div>
              <!--div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div--->
				<div class="row">
				<div class="col-12">
					<a href="#" class="btn btn-secondary">Cancel</a>
					<button type="submit" value="" class="btn btn-success float-right">{{'Submit'}}</button>
				</div>
				</div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
		  </form>
        </div>
      </div>
      <br><br>
    </section>
    <!-- /.content -->
  </div>
 
@endsection
