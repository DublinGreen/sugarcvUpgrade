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
	jQuery('.summary').richText();
		$('.richText-toolbar ul').append("<li><a class='btn' onclick='checkspell();'><b>spellcheck</b></a></li>");
});
</script>
<script src="{{ url('asset_new/lib/richeditor/jquery.richtext.js')}}"></script>
<script src="{{ url('assets/js/front/JavaScriptSpellCheck/include.js')}}"></script>
<script type="text/javascript">
function checkspell()
{
 $Spelling.SpellCheckInWindow('summary');
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
            <h1 class="m-0 text-dark">Summary Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Users</a></li>
			  <li class="breadcrumb-item"><a href="{{ route('admin.users.resume.edit', compact('id')) }}">Resume</a></li>
              <li class="breadcrumb-item active">Summary edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	   <form action="{{ route('admin.update-summary', compact('id')) }}" method="post" >
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		   <div class="row about-container">
			  <div class="col-lg-9 mx-auto" >
				 <div class="row">
				<div class="col-lg-8">
					<textarea class="summary" name="summary">{!!  $resume->summary->summary !!}</textarea>
				</div>
				<div class="col-md-4" >
				   <center>
					  <strong>Showing results for summary</strong>
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
				<div class="col-sm-12">
					<a href="{{route('admin.users.resume.edit', ['id' => $id]) }}" class="btn btn-secondary">Cancel</a>
					<button type="submit" class="btn btn-success float-right">Save</button>
				</div>

				</div>
			  </div>
			</div>
		</form>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
