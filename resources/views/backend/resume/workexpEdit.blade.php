@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('asset_new/lib/richeditor/richtext.min.css')}}">
@endpush

@push('after-scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
jQuery('#start_date, #end_date').datepicker({
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	dateFormat: 'yy-mm-dd'
});
jQuery(document).ready(function() {

	jQuery('.work_expr').richText();
	$('.richText-toolbar ul').append("<li><a class='btn' onclick='checkspell();'><b>spellcheck</b></a></li>");
});
</script>
<script src="{{ url('asset_new/lib/richeditor/jquery.richtext.js')}}"></script>
<script src="{{ url('assets/js/front/JavaScriptSpellCheck/include.js')}}"></script>
<script type="text/javascript">
function checkspell()
{
 $Spelling.SpellCheckInWindow('work_expr');
}
</script>
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
			  <li class="breadcrumb-item"><a href="{{ route('admin.users.resume.edit', ['id' => $workexp->resume_id]) }}">Resume</a></li>
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
							<form class="contact-details" method="post" action="{{ route('admin.update-work-exp', ['id' => $id]) }}">
							   <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-row">
								   <div class="form-group col-lg-6">
									  <label for="email">Job Title*</label>
									  <input type="text" name="job_title" class="form-control required" id="name" value="{{ $workexp->job_title }}">
									  <div class="validation"></div>
								   </div>
								   <div class="form-group col-lg-6">
									  <label for="email">Employer*</label>
									  <input type="text" class="form-control required" name="employer" value="{{ $workexp->employer }}">
									  <div class="validation"></div>
								   </div>
								</div>
								<div class="form-row">
								   <div class="form-group col-lg-6">
									  <label for="email">City*</label>
									  <input type="text" class="form-control " name="city" value="{{ $workexp->city }}">
									  <div class="validation"></div>
								   </div>
								   <div class="form-group col-lg-6">
									  <label for="email">State* </label>
									  <input type="text" class="form-control " name="state" value="{{ $workexp->state }}">
									  <div class="validation"></div>
								   </div>
								</div>
								<div class="form-row">
								   <div class="form-group col-lg-6">
									  <label for="date">Start Date*</label>
									  <input type="text" class="form-control hasDatepicker" name="start_date" id="start_date" readonly="" value="{{ $workexp->start_date }}">
									  <div class="validation"></div>
								   </div>
								   <div class="form-group col-lg-6">
									  <label for="email">End Date</label>
									  <input type="text" class="form-control hasDatepicker" name="end_date" id="end_date" readonly="" value="{{ $workexp->end_date }}">
									  <div class="validation"></div>
								   </div>
								</div>
								<div class="form-row">
								   <div class="form-group col-lg-6">
								   </div>
								   <div class="form-group col-lg-6">
									<input type="checkbox" name="is_current" id="is_current" {{ $workexp->is_current == '1' ? 'checked' : '' }}>
									<label for="is_current"> I currently attend here</label>
								   </div>
								</div>

								 <div class="row">
									<div class="col-lg-8">
										<textarea class="work_expr" name="work_expr">{!! $workexp->work_history !!}</textarea>
									</div>
									<div class="col-md-4" >
									   <center>
										  <strong>Showing results for Job title</strong>
									   </center>
									   <ul class="examples-group" id="list_group" style="height:347px; width:auto; overflow-y: scroll;">
										  <li class="examples-item" id = '1'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												</button>
											 </div>
											 <div class="example-text" >
												Evaluated potential software products based on new and existing system development and migration requirements.
											 </div>
										  </li>
										  <li class="examples-item"  id = '2'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												</button>
											 </div>
											 <div class="example-text">
												Maximized user flow in retail section of website.
											 </div>
										  </li>
										  <li class="examples-item "  id = '3'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												</button>
											 </div>
											 <div class="example-text">
												Created and maintained web hosting account.
											 </div>
										  </li>
										  <li class="examples-item "  id = '4'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												</button>
											 </div>
											 <div class="example-text">
												Designed optimized and usable interfaces for financial applications.
											 </div>
										  </li>
										  <li class="examples-item "  id = '5'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												</button>
											 </div>
											 <div class="example-text">
												Maintained site appearance by developing and enforcing content and display standards and editing submissions.
											 </div>
										  </li>
										  <li class="examples-item "  id = '6'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												</button>
											 </div>
											 <div class="example-text">
												Procured, installed and repaired Windows workstations.
											 </div>
										  </li>
									   </ul>
									</div>
								</div>

							  <div class="row">
								<div class="col-12">
								  <a href="{{route('admin.work-exp', ['id' => $workexp->resume_id]) }}" class="btn btn-secondary">Cancel</a>
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
