@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
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
	jQuery('#txtEditor').richText();
	$(".divShowHide").hide();
	$("#btnShowHide").click(function(){
		$(".divShowHide").toggle();
	});
$('.richText-toolbar ul').append("<li><a class='btn' onclick='checkspell();'><b>spellcheck</b></a></li>");
});
</script>
<script src="{{ url('asset_new/lib/richeditor/jquery.richtext.js')}}"></script>
<script src="{{ url('assets/js/front/JavaScriptSpellCheck/include.js')}}"></script>
<script type="text/javascript">
function checkspell()
{
 $Spelling.SpellCheckInWindow('txtEditor');
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
			  <li class="breadcrumb-item"><a href="{{ route('admin.users.resume.edit', ['id' => $education->resume_id]) }}">Resume</a></li>
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
        <div class="col-md-1"></div>
        <div class="col-md-10">
			<div class="error msg_div"></div>

					  <div class="card card-primary">
						<div class="card-header">
						  <h3 class="card-title">Basic Detail</h3>
						</div>
						<div class="card-body">
							<form class="contact-details" method="post" action="{{ route('admin.update-education', ['id' => $id]) }}">
							   <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-row">
								   <div class="form-group col-lg-6">
									  <label for="email">School Name*</label>
									  <input type="text" name="school_name" class="form-control" id="name" placeholder="" value="{{ $education->school_name }}">
									  <div class="validation"></div>
								   </div>
								   <div class="form-group col-lg-6">
									  <label for="email">School Location*</label>
									  <input type="text" class="form-control" name="school_location" placeholder="" value="{{ $education->school_location }}">
									  <div class="validation"></div>
								   </div>
								</div>

								<div class="form-row">
								   <div class="form-group col-lg-6">
									  <label for="email">Degree*</label>
										  <select class="form-control" name="degree">
											<option value="">Select</option>
											<option {{ $education->degree == "High School Diploma" ? 'selected' : '' }}>High School Diploma</option>
											<option {{ $education->degree == "GED" ? 'selected' : '' }}>GED</option>
											<option {{ $education->degree == "Associate of Arts" ? 'selected' : '' }}>Associate of Arts</option>
											<option {{ $education->degree == "Associate of Science" ? 'selected' : '' }}>Associate of Science</option>
											<option {{ $education->degree == "Associate of Applied Science" ? 'selected' : '' }}>Associate of Applied Science</option>
											<option {{ $education->degree == "Bachelor of Science" ? 'selected' : '' }}>Bachelor of Science</option>
										  </select>
									  <div class="validation"></div>
								   </div>
								</div>

								<div class="form-row">
								   <div class="form-group col-lg-6">
									  <label for="date">Field of Study</label>
									  <input type="text" class="form-control" name="study_field" value="{{ $education->study_field }}">
									  <div class="validation"></div>
								   </div>
								   <div class="form-group col-lg-3">
									  <label for="email">Graduation Start Date*</label>
									  <input type="text" class="form-control hasDatepicker" name="start_date" id="start_date" readonly="" value="{{ $education->graduation_start_date }}">
									  <div class="validation"></div>
								   </div>
								   <div class="form-group col-lg-3">
									  <label for="email">Graduation End Date</label>
									  <input type="text" class="form-control hasDatepicker" name="end_date" id="end_date" readonly="" value="{{ $education->graduation_end_date }}">
									  <div class="validation"></div>
								   </div>
								</div>
								<div class="form-row">
								   <div class="form-group col-lg-6">
								   </div>
								   <div class="form-group col-lg-6">
									<input type="checkbox" name="current_att" id="current_att" {{ $education->current == '1' ? 'checked' : '' }}>
									<label for="current_att"> I currently attend here</label>
								   </div>
								</div>
							  <div class="row">
									 <div class="col-lg-8" >
										  <textarea id="txtEditor" class="form-control" name="txtEditor">
											<ul>
											{!!htmlspecialchars_decode($education->description)!!}
											</ul>
											</textarea>
										  <ul id='content'></ul>
									 </div>
									 <div class="col-md-4" >
										<ul class="examples-group" id="list_group" style="height:370px; width:auto; overflow-y: scroll;">
										   <li class="examples-item" id = '1'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Majored in <span class="ttc_token" style="color:#0000ff">[Subject]</span>
											  </div>
										   </li>
										   <li class="examples-item"  id = '2'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Elected to <span class="ttc_token" style="color:#0000ff">[Elected Position]</span> for <span class="ttc_token" style="color:#0000ff">[Student Organization, Fraternity or Sorority]</span> in <span class="ttc_token" style="color:#0000ff">[Year]</span></div>
										   </li>
										   <li class="examples-item "  id = '3'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Dissertation: <span class="ttc_token" style="color:#0000ff">[Name of Dissertation]</span></div>
										   </li>
										   <li class="examples-item "  id = '4'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Graduated in Top <span class="ttc_token" style="color:#0000ff">[Number]</span>% of Class</div>
										   </li>
										   <li class="examples-item "  id = '5'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Recipient of <span class="ttc_token" style="color:#0000ff">[Scholarship Name]</span> Scholarship</div>
										   </li>
										   <li class="examples-item "  id = '6'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Awarded <span class="ttc_token" style="color:#0000ff">[Award Name]</span></div>
										   </li>
										   <li class="examples-item "  id = '7'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Graduated with <span class="ttc_token" style="color:#0000ff">[Number]</span> GPA</div>
										   </li>
										   <li class="examples-item "  id = '8'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Member of <span class="ttc_token" style="color:#0000ff">[Honor's Society Name]</span></div>
										   </li>
										   <li class="examples-item "  id = '9'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Dean's List <span class="ttc_token" style="color:#0000ff">[Semester and Year]</span></div>
										   </li>
										   <li class="examples-item "  id = '10'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Member of <span class="ttc_token" style="color:#0000ff">[Student Organization or Club Name]</span></div>
										   </li>
										   <li class="examples-item "  id = '11'>
											  <div class="example-icon">
												 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												 </button>
											  </div>
											  <div class="example-text">Graduated cum laude</div>
										   </li>
										</ul>
									 </div>
							  </div>
							  <div class="row">
								<div class="col-12">
								  <a href="{{route('admin.education-list', ['id' => $education->resume_id]) }}" class="btn btn-secondary">Cancel</a>
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
