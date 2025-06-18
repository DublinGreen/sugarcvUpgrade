@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('asset_new/lib/richeditor/richtext.min.css')}}">
@endpush

@push('after-scripts')
<script>
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
            <h1 class="m-0 text-dark">Section Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Users</a></li>
			  <li class="breadcrumb-item"><a href="{{ route('admin.users.resume.edit', ['id' => $section->resume_id]) }}">Resume</a></li>
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
							<form class="contact-details" method="post" action="{{ route('admin.update-section', ['id' => $section->id]) }}">
							   <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-row">
								   <div class="form-group col-lg-6">
									  <label for="email">Title*</label>
									  <input type="text" name="title" class="form-control required" id="name" value="{{ $section->title }}">
									  <div class="validation"></div>
								   </div>
								</div>

								 <div class="row">
									<div class="col-lg-12">
										<textarea class="work_expr" name="content">{!! $section->content !!}</textarea>
									</div>
								</div>
							   <br>
							  <div class="row">
								<div class="col-12">
								  <a href="{{route('admin.users.resume.edit', ['id' => $section->resume_id]) }}" class="btn btn-secondary">Cancel</a>
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
