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
            <h1>Add User </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">User </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">	 
        <div class="col-md-2"></div>
        <div class="col-md-8">
			<div class="error msg_div"></div>
					<form class="action-form" role="form" http-type="post" method="post" data-url="{{route('admin.save_user')}}" onsubmit="Validate_form();">
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					  <div class="card card-primary">
						<div class="card-header">
						  <h3 class="card-title">Basic Detail</h3>

						  <div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
							  <i class="fas fa-minus"></i></button>
						  </div>
						</div>
						<div class="card-body">
						  <div class="form-group ">
							<label for="inputName">First Name</label>
							<input type="text" id="name" name="first_name" class="form-control" maxlength="15">	 					
						  </div>
						  <div class="form-group">
							<label for="inputName">Last Name</label>
							<input type="text" id="name" name="last_name" class="form-control" maxlength="15">							
						  </div>
						  <div class="form-group">
							<label for="inputName">Email</label>
							<input type="email" id="email" name="email" class="form-control" maxlength="50">
							
						  </div>
						   <div class="form-group">
							<label for="inputSpentBudget">Mobile </label>
							<input type="text" id="inputSpentBudget"  name="mobile" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" maxlength="15">
						  </div>
						  <div class="form-group ">
							<label for="inputSkills" >password</label>                       
							<input class="form-control"  type="password" name="password" id="txtPassword" onkeyup="passwordmatch()" />
                        
						  </div>
							<div class="form-group  hiden" id="confrim" >
							  <label for="inputSkills" >Confrim password</label>
							  <input class="form-control"   type="password" name="confirmpassword" id="txtConfirmPassword"  onkeyup="Validate()"  />
							<div id="notmatch"></div>                      
						
							</div>
						  <!--div class="form-group">
							<label for="inputProjectLeader">Project Leader</label>
							<input type="text" id="inputProjectLeader" class="form-control">
						  </div--->
						</div>
						<!-- /.card-body -->
					  </div>
					  <!-- /.card -->
					  <div class="row">
					<div class="col-12">
					  <a href="#" class="btn btn-secondary">Cancel</a>
					  <button type="submit" value="Create new Porject" class="btn btn-success float-right">submit</button>
					</div>
				  </div>
				 </form>
			</div>
		</div>
      <br><br>
    </section>
    <!-- /.content -->
  </div>
 
@endsection
