@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')
<style>
.resume-thumbnail .resume-preview {
    background: #fff;
    border: 1px solid #ddd;
    cursor: pointer;
    margin: 0 auto;
    width: 230px;
    height: 304px;
    text-align: left;
    overflow: hidden;
    position: relative;
}
.page-tips .resume-thumbnail {
    margin-top: 20px
}

.resume-thumbnail .btn-preview-ctnr {
    text-align: center;
    margin: 15px 0 0 auto;
    width: 236px
}

.resume-thumbnail .btn-preview {
    color: #3a96f0;
    background-color: #f6f8fa;
    border-color: #ddd;
    font-size: 11px;
    padding: 0.4rem 1.6rem;
    border-radius: 3px;
    letter-spacing: 0.5px;
    line-height: 16px;
    box-shadow: none
}

.resume-thumbnail .btn-preview:hover {
    border-color: #3591cf
}

.resume-thumbnail .btn-preview .fa-eye {
    font-size: 14px;
    font-weight: 400;
    position: relative;
    top: 1px;
    margin-right: 5px
}

.resume-thumbnail #document .doc-overlay.section-overlay {
    display: none
}

.resume-thumbnail .resume-preview {
    background: #fff;
    border: 1px solid #ddd;
    cursor: pointer;
    margin: 0 0 0 auto;
    width: 230px;
    height: 304px;
    text-align: left;
    overflow: hidden;
    position: relative
}

.resume-thumbnail .resume-preview:hover {
    border-color: #3591cf
}

.resume-thumbnail .resume-preview #document {
    cursor: pointer;
    transform: scale(0.383);
    transform-origin: top left
}

.resume-thumbnail .resume-preview #document.MLI2 {
    transform: scale(0.381)
}

.resume-thumbnail .resume-preview .custom-preview-scrollbar {
    overflow: hidden
}

.resume-thumbnail .preview-template-highlighter {
    border: 2px solid #4da3ff;
    background-color: rgba(76,163,255,0.15);
    position: absolute;
    max-width: 100%
}
.page-finalize #document {
    box-shadow: 0 0 10px rgba(88,88,95,0.12);
    background-color: #fff;
    border: 1px solid #e8ecf0;
}
</style>
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
              <li class="breadcrumb-item active">Resume edit</li>
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
				<div class="col-sm-4 col-md-4 sidebar ">
					<!--div class="mini-submenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div-->
					<div class="list-group position-sticky">
						<!--a href="javascript:void(0);" class="list-group-item spellcheck-action">
							<i class="fa fa-font"></i> Spell Check
						</a-->
						<a href="{{ route('admin.edit-resume',['id' => $id]) }}" class="list-group-item">
							<i class="fa fa-header"></i> Heading
						</a>
						<a href="{{ route('admin.edit-summary',['id' => $id]) }}" class="list-group-item">
							<i class="fa fa-list"></i> Professional Summary
						</a>
						<a href="{{ route('admin.education-list', ['id' => $id]) }}" class="list-group-item">
							<i class="fa fa-book"></i> Education
						</a>
						<a href="{{ route('admin.resume-skills', ['id' => $id]) }}" class="list-group-item">
							<i class="fa fa-bar-chart-o"></i> Skills
						</a>
						<a href="{{ route('admin.work-exp',['id' => $id]) }}" class="list-group-item">
							<i class="fa fa-users"></i> Work History
						</a>							
						@if(isset($resume->extraSection) && $resume->extraSection)
						<a href="{{ route('admin.section',['id' => $id]) }}" class="list-group-item">
							<i class="fa fa-list-alt"></i> {{ $resume->extraSection->title }}
						</a>
						@endif						
						<!--a href="#" class="list-group-item">
							<i class="fa fa-download"></i> Download
						</a-->
					</div>  
				</div>
				<div class="col-sm-8 col-md-8 page-finalize">
				@if(isset($resume->skin_id))
					@php $skin = $resume->skin_id; $skin = 'frontend.cvTemplates.'.$skin; @endphp
					@include($skin)
				@else
					@include('frontend.cvTemplates.temp1',['highlighter' => '<p class="preview-template-highlighter" style="left: 76.217px; top: 12.405px; width: 151.434px; height: 35.236px;"></p>'])
				@endif
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
