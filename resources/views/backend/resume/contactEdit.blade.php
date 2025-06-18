@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')
@endpush

@section('content')
<div class="content-wrapper" style="min-height: 225px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Resume Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Users</a></li>
			  <li class="breadcrumb-item"><a href="{{ route('admin.users.resume.edit', compact('id')) }}">Resume</a></li>
              <li class="breadcrumb-item active">Resume edit</li>
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
        <div class="col-md-2"></div>
        <div class="col-md-8">
			<div class="error msg_div"></div>					
					
					  <div class="card card-primary">
						<div class="card-header">
						  <h3 class="card-title">Basic Detail</h3>
						</div>
						<div class="card-body">
							<form class="contact-details" method="post" action="{{ route('admin.update-resume', ['id' => $id]) }}">
							   <input type="hidden" name="_token" value="{{ csrf_token() }}">
							   <div class="form-row">
								  <div class="form-group col-lg-6">
									 <label for="email">First Name</label>
									 <input type="text" name="first_name" class="form-control fit-content" id="name" value="{{ $resume->first_name }}" placeholder="" data-rule="minlen:2" data-msg="Please enter at first name" data-target="#FIELD_FNAM">
									 <div class="validation"></div>
								  </div>
								  <div class="form-group col-lg-6">
									 <label for="email">Last Name</label>
									 <input type="text" class="form-control fit-content" name="last_name" value="{{ $resume->last_name }}" placeholder="" data-rule="minlen:1" data-msg="Please enter last name" data-target="#FIELD_LNAM">
									 <div class="validation"></div>
								  </div>
							   </div>
							   <div class="form-row">
								  <div class="form-group col-lg-6">
									 <label for="email">Phone</label>
									 <input type="text" class="form-control fit-content" name="Phone" value="{{ $resume->phone }}" data-rule="minlen:10" data-msg="Please enter valid no" maxlength="10" data-target="#FIELD_HPHN">
									 <div class="validation"></div>
								  </div>
								  <div class="form-group col-lg-6">
									 <label for="email">Email Address</label>
									 <input type="email" class="form-control fit-content" name="email" id="email" value="{{ $resume->email }}" data-rule="email" data-msg="Please enter a valid email" required="" data-target="#FIELD_EMAI">
									 <div class="validation"></div>
								  </div>
							   </div>
							   <div class="form-row">
								  <div class="form-group col-lg-6">
									 <label for="email">Profession</label>
									 <input type="text" class="form-control fit-content" name="profession" data-target="#FIELD_DCTL" value="{{ $resume->profession }}">
									 <div class="validation"></div>
								  </div>
								  <div class="form-group col-lg-6">
									 <label for="email">Street Address</label>
									 <input type="text" class="form-control fit-content" name="street" data-target="#FIELD_STRT" value="{{ $resume->street }}">
									 <div class="validation"></div>
								  </div>
							   </div>
							   <div class="form-row">
								  <div class="form-group col-lg-6">
									 <label for="email">City</label>
									 <input type="text" class="form-control fit-content" name="city" data-target="#FIELD_CITY" value="{{ $resume->city }}">
									 <div class="validation"></div>
								  </div>
								  <div class="form-group col-lg-3">
									 <label for="email">State/Province</label>
									 <input type="text" class="form-control fit-content" name="state" data-target="#FIELD_STAT" value="{{ $resume->state }}">
									 <div class="validation"></div>
								  </div>
								  <div class="form-group col-lg-3">
									 <label for="email">Zip Code</label>
									 <input type="text" class="form-control fit-content" name="zip" data-target="#FIELD_ZIPC" value="{{ $resume->zip }}">
									 <div class="validation"></div>
								  </div>
							   </div>
							   
							  <div class="row">
								<div class="col-12">
								  <a href="{{route('admin.users.resume.edit', ['id' => $id]) }}" class="btn btn-secondary">Cancel</a>
								  <button type="submit" value="Create new Porject" class="btn btn-success float-right">submit</button>
								</div>
							  </div>
							</form>
						<!-- /.card-body -->
					  </div>
					  <!-- /.card -->
			</div>
		</div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
