@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')

@push('after-scripts')
<script>
jQuery(document).ready(function(){
	jQuery(".rename-action").click(function(){
		var ele = jQuery(this).parents(".resume-row");
		var doc_name = ele.find(".doc-name").text();
		jQuery("#rename").val(doc_name);
		jQuery("#hiddenId").val(ele.data('id'));
	});
	jQuery(".remove-action").click(function(){
		var ele = jQuery(this).parents(".resume-row");
		jQuery("#delete_hiddenId").val(ele.data('id'));
	});
	jQuery(".download-action").click(function(){
		var ele = jQuery(this).parents(".resume-row");
		jQuery("#download_hiddenid").val(ele.data('id'));
	});
	
	jQuery(".duplicate-action").click(function(){
		var ele = jQuery(this).parents(".resume-row");
		var doc_name = ele.find(".doc-name").text();
		jQuery("#title").val("Copy of "+doc_name).focus();
		jQuery("#duplicate_hidden_id").val(ele.data('id'));
	});
	
	jQuery(".email-action").click(function(){
		var ele = jQuery(this).parents(".resume-row");
		ele.find('.dropdown').hide();
		ele.find('.loader').show();
		var id = ele.data('id');
		jQuery.ajax({
			url:'{{ route("documentEmail") }}',
			type:'post',
			data:{id:id},
			success:function(result){
				if(result.type == 'success'){
					jQuery("#response_msg").html('<i class="fa fa-check-circle" style="color: green;"></i> '+result.message);
				}else{
					jQuery("#response_msg").html('<i class="fa fa-times-circle" style="color: #ff00009e;"></i> '+result.message);
				}
				$('#emailpop').modal('show'); 
				ele.find('.loader').hide();
				ele.find('.dropdown').show();

			},
			fail: function(xhr, textStatus, errorThrown){
				jQuery("#response_msg").html('<i class="fa fa-times-circle" style="color: #ff00009e;"></i> Somthing wrong with request');
			  $('#emailpop').modal('show'); 
			}
		});
	});
	
});
</script>
@endpush

@section('content')

  <main id="main">
  <div class="col-md-12 col-lg-12" style="height:80px">
  </div>
	<!--==========================
      Services Section
    ============================-->
   <section id="services" class="resume-list">
		<div class="container" id="js-resumehome-container">
			<div class="resume-home">
				<div class="row">
					<div class="col-xs-12 col-lg-6 hidden-xs hidden-sm hidden-md">
						<h1 class="h1"><span>Documents</span></h1>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<div class="col-xs-12 col-sm-9 mobile-filter">
							<div class="row">
								
								<div class="sort-view-filter" style="visibility: hidden;">
									<label class="mr-5 sort-view hidden-xs">View:</label>
									<div class="btn-group" role="group">
										<button type="button" class="btn btn-default btn-sm list-btn active"><span class="glyphicon glyphicon-th-list"></span></button>
										<button type="button" class="btn btn-default btn-sm grid-btn"><span class="glyphicon glyphicon-th-large"></span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 text-right mobile-dropdown">
							<div class="row">
								<button type="button" class="btn btn-sm btn-active mt-20 mr-20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Create New<span class="fa fa-chevron-down ml-5"></span>
								</button>
								<ul class="dropdown-menu mt-10">
									<li><a href="{{ route('cv-template') }}"><span class="fa fa-plus mr-5"></span>Create New CV</a></li>
									<!--li role="separator" class="divider"></li>
									<li><a href="#	"><span class="fa fa-plus mr-5"></span> Create New Cover Letter</a></li-->
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					 @if ($message = Session::get('success'))
					 <div class="alert alert-success">
						{{ $message }}
					 </div>
					 @endif
					</div>
				</div>
			</div>
		</div>
		
		<div class="container" id="js-listview-container">
		   <div class="col-sm-12 list-block visible" id="list-block">
			  <div class="row">
				 <div class="col-sm-9 hidden visible-lg">
					<div class="row">
					  <div class="col-sm-6">
						 <div class="row">
							<h5 class="h5">My Documents</h5>
						 </div>
					  </div>
					  <div class="col-sm-3">
						 <h5 class="h5">Type</h5>
					  </div>
					  <div class="col-sm-3">
						 <h5 class="h5">Modified:</h5>
					  </div>
					</div>
				 </div>
				 <div class="col-sm-3 hidden visible-lg"></div>
			  </div>
			  @if($pending_resume != null)
				  <div class="row resume-row" data-id="{{ $pending_resume->id }}">
					 <div class="doc-list-box clearfix">
						<div class="col-xs-10 col-sm-11 col-md-10 col-lg-9">
						   <div class="row">
								 <div class="col-xs-6 col-sm-6">
									<div class="list-doc-name">
									   <span class="doc-name" title="{{ $pending_resume->resume_name != null ? $pending_resume->resume_name : $pending_resume->first_name."_".$pending_resume->first_name."_CV"."_".$pending_resume->id }}">{{ $pending_resume->resume_name != null ? $pending_resume->resume_name : $pending_resume->first_name."_".$pending_resume->first_name."_CV"."_".$pending_resume->id }}</span>
									   <div class="badge-warning badge">Complete Your Resume</div>
									</div>
								 </div>
								 <div class="col-xs-6 col-sm-3 p-0">
									<span class="doc-type resume-bg">&nbsp;&nbsp;CV</span>
								 </div>
								 <div class="col-xs-12 col-sm-3">
									<span class="doc-date">Modified: {{ date('d M, Y', strtotime($pending_resume->updated_at)) }}</span>
								 </div>
						   </div>
						</div>
						<div class="col-xs-2 col-sm-1 col-md-2 col-lg-3 list-icons text-right">
						   <div class="hidden-xs hidden-sm hidden-md">
								<a href="{{ route('select-skin',["id" => $pending_resume->skin_id]) }}" class="c-btn btn-success">Continue</a>
						   </div>
						</div>
					 </div>
				  </div>
			  @endif
			  
			  @if(!$resume->isEmpty())
				  @foreach($resume as $cv)
					  <div class="row resume-row" data-id="{{ $cv->id }}">
						 <div class="doc-list-box clearfix">
							<div class="col-xs-10 col-sm-11 col-md-10 col-lg-9">
							   <div class="row">
									 <div class="col-xs-6 col-sm-6">
										<div class="list-doc-name">
										   <span class="doc-name" title="{{ $cv->resume_name != null ? $cv->resume_name : $cv->first_name."_".$cv->first_name."_CV"."_".$cv->id }}">{{ $cv->resume_name != null ? $cv->resume_name : $cv->first_name."_".$cv->first_name."_CV"."_".$cv->id }}</span>
										</div>
									 </div>
									 <div class="col-xs-6 col-sm-3 p-0">
										<span class="doc-type resume-bg">&nbsp;&nbsp;CV</span>
									 </div>
									 <div class="col-xs-12 col-sm-3">
										<span class="doc-date">Modified: {{ date('d M, Y', strtotime($cv->updated_at)) }}</span>
									 </div>
							   </div>
							</div>
							<div class="col-xs-2 col-sm-1 col-md-2 col-lg-3 list-icons text-right">
							   <div class="hidden-xs hidden-sm hidden-md">
								  <a href="{{ route("final-resume", ["id" => $cv->id]) }}"><div class="list-doc-icons pr-30 js-doc-edit  fa pencil" title=""><span>Edit</span></div></a>
								  <div class="list-doc-icons pr-30 js-doc-download fa download download-action" data-toggle="modal" data-target="#downloadpop"><span>Download</span></div>
								  <a target="_blank" href="{{ route('documentpdf', ['id' => $cv->id , 'name' => $cv->resume_name != null ? $cv->resume_name.'.pdf' : $cv->first_name."_".$cv->first_name."_CV"."_".$cv->id.'.pdf' ]) }}"><div class="list-doc-icons pr-30 js-doc-print fa print"><span>Print</span></div></a>
							   </div>
							   <div class="dropdown">
								  <span class="list-doc-icons" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></span>
								  <ul class="dropdown-menu">
									 <!-- Dropdown menu links -->
									 <li class="js-doc-edit hidden-lg"><a href="{{ route("final-resume", ["id" => $cv->id]) }}"><span class="fa fa-pencil " title=""></span> Edit</a></li>
									 <li class="duplicate-action" data-toggle="modal" data-target="#duplicatepop"><span class="fa fa-copy mr-2"></span> <span>Duplicate</span></li>
									 <li class="hidden-lg download-action" data-toggle="modal" data-target="#downloadpop"><span class="fa fa-download mr-2"></span> Download</li>
									 <li class="email-action"><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i> <span>Email</span></li>
									 <li class="hidden"><i class="fa fa-share-alt mr-2" aria-hidden="true"></i> Share</li>
									 <li class="rename-action" data-toggle="modal" data-target="#renamepop"><span class="fa fa-edit mr-2"></span> <span data-toggle="modal" data-target="#doc-rename-modal">Rename</span></li>
									 <li class="remove-action" data-toggle="modal" data-target="#removepop"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i> <span data-toggle="modal">Remove</span></li>
								  </ul>
							   </div>
							   <span class="loader" style="font-size: 21px;position: relative;top: -11px;display:none;"><i class="fa fa-spinner fa-spin"></i></span>
							</div>
						 </div>
					  </div>
				 @endforeach
			  @else
			  <div class="row js-list-content js-data">
				<div class="doc-list-box clearfix text-center">
					<strong >Empty</strong>
				</div>
			  </div>
			  @endif
			  
			  <?php echo $resume->render(); ?>
		   </div>
		</div>		
		
	</section> 
	
	<!-- Rename -->
	<div class="custom-modal modal fade" id="renamepop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	  <form action="{{ route('documentRename') }}" method="post" >
		<div class="modal-content">
		  <div class="modal-body">
			<p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</p>
			<div class="model-main-content">
				<h4>Rename</h4>
				<p>
					<input type="text" name="rename" id="rename" placeholder="Rename"/>
				</p>
			</div>
		  </div>
		  <div class="modal-footer">
			<a class="c-btn btn-default btn-back" data-dismiss="modal">Cancel</a>
			<button type="submit" class="c-btn btn-danger">Yes, Update</button>
		  </div>
		</div>
		<input type="hidden" id="hiddenId" name="id" />
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  </form>
	  </div>
	</div>
	
	<!-- Download -->
	<div class="custom-modal modal fade" id="downloadpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	  <form action="{{ route('downloadDocument') }}" method="post" >
		<div class="modal-content">
		  <div class="modal-body">
			<p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</p>
			<div class="model-main-content">
				<h2 class="text-center"><strong>Download</strong></h2>
				<p>Which format do you want to use?</p>
				<div class="form-group form-check">
					<input type="radio" class="form-check-input format" name="format" id="pdf" value="pdf" required>
					<label class="form-check-label" for="pdf">Adobe PDF (.pdf)</label>
				</div>			
				<div class="form-group form-check">
					<input type="radio" class="form-check-input format" name="format" id="docx" value="docx" required>
					<label class="form-check-label" for="docx">MS word document (.docx)</label>
				</div>			
		    </div>
		  </div>
		  <div class="modal-footer">
			<a class="c-btn btn-default btn-back" data-dismiss="modal">Cancel</a>
			<button type="submit" class="c-btn btn-danger">Download</button>
		  </div>
		</div>
		<input type="hidden" id="download_hiddenid" name="id" />
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  </form>
	  </div>
	</div>
	
	<!-- Remove -->
	<div class="custom-modal modal fade" id="removepop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	  <form action="{{ route('documentRemove') }}" method="post" >
		<div class="modal-content">
		  <div class="modal-body">
			<p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</p>
			<div class="model-main-content">
				<h2 class="text-center"><strong>Remove</strong></h2>
				<p>Are you sure you want to delete this Resume?</p>
				<small>This action cannot be undone</small>
		    </div>
		  </div>
		  <div class="modal-footer">
			<a class="c-btn btn-default btn-back" data-dismiss="modal">Cancel</a>
			<button type="submit" class="c-btn btn-danger">Yes, Delete</button>
		  </div>
		</div>
		<input type="hidden" id="delete_hiddenId" name="id" />
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  </form>
	  </div>
	</div>
	
	<!-- Duplicate -->
	<div class="custom-modal modal fade" id="duplicatepop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	  <form action="{{ route('duplicate') }}" method="post" >
		<div class="modal-content">
		  <div class="modal-body">
			<p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</p>
			<div class="model-main-content">
				<h2 class="text-center"><strong>Duplicate</strong></h2>
				<p style="margin-top: 15px;">
					<input type="text" name="title" id="title" placeholder="Title"/>
				</p>
			</div>
		  </div>
		  <div class="modal-footer">
			<a class="c-btn btn-default btn-back" data-dismiss="modal">Cancel</a>
			<button type="submit" class="c-btn btn-danger">Save</button>
		  </div>
		</div>
		<input type="hidden" id="duplicate_hidden_id" name="id" />
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  </form>
	  </div>
	</div>
	
	<!-- Email sent -->
	<div class="custom-modal modal fade" id="emailpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-body">
			<p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</p>
			<div class="model-main-content">
				<p style="margin: 40px -10px;text-align: center;" id="response_msg">
                    
				</p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	
  </main>
@endsection

@push('after-styles')

 <link href="{{ url('asset_new/css/sugarcv.css')}}" rel="stylesheet">
<style>
html,body{min-height:100%}body{background-color:#fafafa;color:#333;font-size:14px;font-family:"Open Sans"}a{cursor:pointer}a:hover{text-decoration:none}h1,.h1,h2,.h2,h3,.h3,h4,.h4,h5,.h5,h6,.h6{color:#333;font-family:"Montserrat";font-weight:400;line-height:1.3}h1>strong,.h1>strong,h2>strong,.h2>strong,h3>strong,.h3>strong,h4>strong,.h4>strong,h5>strong,.h5>strong,h6>strong,.h6>strong{font-weight:400}h1>b,.h1>b,h2>b,.h2>b,h3>b,.h3>b,h4>b,.h4>b,h5>b,.h5>b,h6>b,.h6>b{color:#ffa60a;font-size:inherit;font-weight:600}b{background:transparent;color:#ffa60a;font-size:inherit;padding:0}h1,.h1{font-size:30px}h2,.h2{font-size:20px}h3,.h3{font-size:16px}h4,.h4{font-size:14px;line-height:1.5}h5,.h5{font-size:12px;line-height:31px}a:focus{outline:none}.m-5{margin:5px}.m-10{margin:10px}.m-15{margin:15px}.m-20{margin:20px}.m-30{margin:30px}.m-40{margin:40px}.m-60{margin:60px}.mt-5{margin-top:5px}.mt-10{margin-top:10px}.mt-15{margin-top:15px}.mt-20{margin-top:20px}.mt-30{margin-top:30px}.mt-40{margin-top:40px}.mt-60{margin-top:60px}.mb-5{margin-bottom:5px}.mb-10{margin-bottom:10px}.mb-15{margin-bottom:15px}.mb-20{margin-bottom:20px}.mb-30{margin-bottom:30px}.mb-40{margin-bottom:40px}.mb-60{margin-bottom:60px}.ml-5{margin-left:5px}.ml-10{margin-left:10px}.ml-15{margin-left:15px}.ml-20{margin-left:20px}.ml-30{margin-left:30px}.ml-40{margin-left:40px}.ml-60{margin-left:60px}.mr-5{margin-right:5px}.mr-10{margin-right:10px}.mr-15{margin-right:15px}.mr-20{margin-right:20px}.mr-30{margin-right:30px}.mr-40{margin-right:40px}.mr-60{margin-right:60px}.pt-5{padding-top:5px}.pt-10{padding-top:10px}.pt-15{padding-top:15px}.pt-20{padding-top:20px}.pt-30{padding-top:30px}.pt-40{padding-top:40px}.pt-60{padding-top:60px}.pb-5{padding-bottom:5px}.pb-10{padding-bottom:10px}.pb-15{padding-bottom:15px}.pb-20{padding-bottom:20px}.pb-30{padding-bottom:30px}.pb-40{padding-bottom:40px}.pb-60{padding-bottom:60px}.pl-5{padding-left:5px}.pl-10{padding-left:10px}.pl-15{padding-left:15px}.pl-20{padding-left:20px}.pl-30{padding-left:30px}.pl-40{padding-left:40px}.pl-60{padding-left:60px}.pr-5{padding-right:5px}.pr-10{padding-right:10px}.pr-15{padding-right:15px}.pr-20{padding-right:20px}.pr-30{padding-right:30px}.pr-40{padding-right:40px}.pr-60{padding-right:60px}.w100{width:100% !important}.dochome-pages .resume-bg{padding:5px 10px;text-align:center;vertical-align:-webkit-baseline-middle;text-transform:capitalize;color:#fff;border-radius:15px;background-color:#47ce76;font-family:"Montserrat";font-size:12px}.dochome-pages .cover-letter-bg{padding:5px 10px;text-align:center;vertical-align:-webkit-baseline-middle;text-transform:capitalize;color:#fff;border-radius:15px;background-color:#ffa400;font-family:"Montserrat";font-size:12px}@media screen and (max-width: 480px){.dochome-pages .cover-letter-bg{font-size:11px}}.dochome-pages .doc-date{vertical-align:-webkit-baseline-middle;color:#666;font-family:"Open Sans";font-size:12px;font-weight:300;line-height:20px}@media screen and (max-width: 768px){.dochome-pages .doc-date{font-size:10px}}.dochome-pages .disabled-link{cursor:not-allowed !important;color:grey !important}.bg-white{padding-bottom:35px;background:#fff}.doc-error{margin-bottom:15px;text-align:center;color:#e6533e;font-size:13px}.hidden-iphone{display:none}@media screen and (max-width: 767px){.create-upload-document .btn-group{display:block}}.create-upload-document .h1{margin:0;line-height:23px}@media screen and (max-width: 767px){.create-upload-document .h1{line-height:30px}}.create-upload-document .form-group{margin:0}.create-upload-document .doc-content-box{border-color:#d9d9d9;border-top:1px solid}.create-upload-document .doc-content-box .inner-content{min-height:335px;margin-top:35px;padding:20px;border:1px solid;border-color:#d9d9d9;background-color:#fff}@media screen and (min-width: 1024px){.create-upload-document .doc-content-box .inner-content{max-height:100%;padding:20px 80px}}.create-upload-document .doc-content-box .h1{padding-bottom:15px}.create-upload-document .doc-content-box p{color:#3b3b3b;font-family:"Open Sans";font-size:14px;font-weight:400;line-height:20px}.create-upload-document .doc-content-box p a{display:block;padding-top:30px;color:#0094bc}.doc-services-container .more-services-title{margin:0;padding:30px 15px;color:#666;font-weight:600}.doc-services-container .wrap-content-box{float:left;overflow:hidden;height:auto;min-height:265px;margin:0 0 23px;cursor:pointer;border:1px solid #e2e2e2;background-color:#fff;-moz-box-shadow:0 0 3px rgba(0,0,0,0.13);-webkit-box-shadow:0 0 3px rgba(0,0,0,0.13);box-shadow:0 0 3px rgba(0,0,0,0.13)}.doc-services-container .inner-content{padding:20px}.doc-services-container .inner-content .h3{margin:0;font-weight:600}.doc-services-container .inner-content p{min-height:75px;margin:0;padding:10px 0;line-height:18px}.doc-services-container .inner-content a{text-decoration:none;text-transform:uppercase;color:#25a8e0;font-size:12px;font-weight:400}.doc-services-container .inner-content a i{font-size:16px}.overlay-loader{position:fixed;display:none;z-index:9999;top:0;right:0;bottom:0;left:0;background-color:rgba(250,250,250,0.75)}.overlay-loader .loading-img{height:100%;background:url(/images/zty/loading-widget-anim.gif) center center no-repeat}.dochomes-v2 .create-upload-document .doc-content-box{border-top:none}.dochomes-v2 .create-upload-document .doc-content-box .inner-content{margin:0 0 25px}.dochomes-v2 .disable-it{pointer-events:none;opacity:0.5}.dochomes-v2 .btn-extension{font-size:12px;padding:5px;color:#787878;font-weight:600;pointer-events:none}.doc-mobile-head{min-height:46px;padding:5px 10px;text-align:center;background:#fff}.doc-mobile-head .home-icon{color:#868e96;padding-right:8px}.doc-page-topbar{background:#4b494f;padding:10px 15px;font-size:14px;font-family:"Montserrat"}.doc-page-topbar .step-name{color:#ffa300;font-weight:600}.doc-mobile-page .doc-list-group .doc-text-muted{color:#868e96;background:#f8f9fa}.doc-mobile-page .doc-text{margin:15px 0;font-family:"Open Sans";text-align:center;font-size:24px}.doc-mobile-page .doc-list-group-item{display:block;border:1px solid;border-color:#d9d9d9;font-size:14px;margin-bottom:15px;padding:15px;color:#495057;cursor:pointer;background:#fff}.doc-mobile-page .doc-page-action .btn{display:block;font-weight:600;font-family:"Montserrat"}.doc-mobile-emailfrom .form-group{position:relative;margin-bottom:10px}.doc-mobile-emailfrom .form-control{transition:all 0.2s ease-in-out}.doc-mobile-emailfrom .form-control,.doc-mobile-emailfrom .form-control:focus{font-size:14px;color:#7f7f7f;background:transparent;border-width:0 0 1px 0;border-color:#d9d9d9;outline:none;-webkit-box-shadow:none;box-shadow:none;border-radius:0}.doc-mobile-emailfrom .custom-placeholder-focus .form-control ~ label{color:#48a4ff;right:0;text-align:right}.doc-mobile-emailfrom .custom-placeholder-wrap label{display:inline-block;width:30%;text-transform:uppercase;position:absolute;top:15px;right:70%;white-space:nowrap;transition:all 0.3s ease-in-out}.doc-mobile-emailfrom .custom-placeholder-focus .form-control{border-color:#3591cf;padding-right:25%}.doc-mobile-emailfrom label,.doc-mobile-emailfrom .form-control::placeholder{color:#7f7f7f;font-size:1.2rem;text-transform:uppercase;font-weight:400}.doc-mobile-emailfrom .form-text-box{margin-top:3rem;border:1px solid;border-color:#d9d9d9}.doc-mobile-emailfrom .form-text-box .form-attachment{border-bottom:1px solid;border-color:#d9d9d9;display:flex}.doc-mobile-emailfrom .form-text-box .form-attachment>span{color:#868e96;padding:1rem}.doc-mobile-emailfrom .form-text-box textarea{padding:1rem;height:30vh;border:none}.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}@-webkit-keyframes bounceInUp{0%{opacity:0;transform:translateY(2000px)}60%{opacity:1;transform:translateY(-30px)}80%{transform:translateY(10px)}100%{transform:translateY(0)}}@-moz-keyframes bounceInUp{0%{opacity:0;transform:translateY(2000px)}60%{opacity:1;transform:translateY(-30px)}80%{transform:translateY(10px)}100%{transform:translateY(0)}}@-ms-keyframes bounceInUp{0%{opacity:0;transform:translateY(2000px)}60%{opacity:1;transform:translateY(-30px)}80%{transform:translateY(10px)}100%{transform:translateY(0)}}@-o-keyframes bounceInUp{0%{opacity:0;transform:translateY(2000px)}60%{opacity:1;transform:translateY(-30px)}80%{transform:translateY(10px)}100%{transform:translateY(0)}}@keyframes bounceInUp{0%{opacity:0;transform:translateY(2000px)}60%{opacity:1;transform:translateY(-30px)}80%{transform:translateY(10px)}100%{transform:translateY(0)}}.bounceInUp{-webkit-animation:bounceInUp 1s;-moz-animation:bounceInUp 1s;animation:bounceInUp 1s}.low-score-popup{max-width:580px;margin:0 auto;top:20%}.low-score-popup .title{color:#000;font-family:"Open Sans";font-size:18px;font-weight:600;letter-spacing:0.38px}.low-score-popup .review-txt{color:#4a4a4a;font-family:"Open Sans";font-size:16px;font-weight:400;margin-bottom:20px}.low-score-popup .review-modal-list .resume-error-list{color:#000;font-family:"Open Sans";font-size:14px;font-weight:700;text-align:left;display:block;margin:0 auto 0 36%;padding-bottom:15px}.low-score-popup .review-modal-list .fa-exclamation-circle{color:#f1582d;margin-right:8px}.low-score-popup .review-modal-list .fa-exclamation-circle:before{content:"\f06a";font-family:FontAwesome}.low-score-popup .review-modal-list .toggle-list{cursor:pointer;margin-bottom:15px;display:inline-block}.low-score-popup .btn-primary{max-width:340px;margin:5px auto;font-weight:600;background-color:#2380be}.low-score-popup .btn-primary:focus,.low-score-popup .btn-primary:active{background-color:#3591cf;border-color:#3591cf}.low-score-popup .download-with-error{color:#25ade0;font-family:"Open Sans";font-size:12px;font-weight:400}.low-score-popup .widget-resume-progress{background:url(/images/bg-progress-bar.png) center 6px no-repeat}.low-score-popup .resume-strength{position:relative;max-height:150px}.low-score-popup .resume-strength .resume-strength-details{position:absolute;top:30px;left:50%;transform:translateX(-50%);-ms-transform:translateX(-50%);-webkit-transform:translateX(-50%);text-transform:uppercase}.low-score-popup .resume-strength .resume-strength-details .strength-value{font-size:48px;font-weight:700;line-height:1.1}.low-score-popup .resume-strength .resume-strength-details .strength-remark{margin:0;font-size:20px;font-weight:700}.low-score-popup .resume-strength .resume-strength-details .strength-label{margin:0;font-weight:700;letter-spacing:-0.17px;line-height:1.4}.btn{font-size:14px;font-weight:400;border-radius:3px;padding:9px 24px;font-family:"Montserrat";text-transform:uppercase}@media all and (max-width: 767px){.btn{padding:9px 11px}}.btn+.no-link{opacity:0.7}.btn-primary{color:#fff;background-color:#3591cf;border-color:transparent}.btn-primary:active:focus,.btn-primary.active:focus,.btn-primary:focus,.btn-primary.focus,.btn-primary:hover,.btn-primary:active,.btn-primary.active,.open>.btn-primary.dropdown-toggle{background-color:#3591cf;border-color:transparent;outline:none;box-shadow:none}.btn-primary[disabled]{color:#fff;background-color:#3591cf;border-color:transparent}.btn-primary[disabled]:active:focus,.btn-primary[disabled].active:focus,.btn-primary[disabled]:focus,.btn-primary[disabled].focus,.btn-primary[disabled]:hover,.btn-primary[disabled]:active,.btn-primary[disabled].active,.open>.btn-primary[disabled].dropdown-toggle{background-color:#3591cf;border-color:transparent;outline:none;box-shadow:none}.btn-default{color:#333;background-color:#fff;border-color:#d9d9d9}.btn-default:active:focus,.btn-default.active:focus,.btn-default:focus,.btn-default.focus,.btn-default:hover,.btn-default:active,.btn-default.active,.open>.btn-default.dropdown-toggle{background-color:#fff;border-color:#d9d9d9;outline:none;box-shadow:none}.btn-secondary{color:#fff;background-color:#3591cf}.btn-secondary:active:focus,.btn-secondary.active:focus,.btn-secondary:focus,.btn-secondary.focus,.btn-secondary:hover,.btn-secondary:active,.btn-secondary.active,.open>.btn-secondary.dropdown-toggle{background-color:#2380be;outline:none;box-shadow:none;color:#fff}.btn-link{color:#25ade0;background-color:transparent;font-weight:400;text-transform:none}.btn-link:active:focus,.btn-link.active:focus,.btn-link:focus,.btn-link.focus,.btn-link:hover,.btn-link:active,.btn-link.active,.open>.btn-link.dropdown-toggle{outline:none;box-shadow:none;color:#25ade0}.btn-lg{font-size:18px;padding:12px 24px}.btn-sm{font-size:12px;padding:6px 18px}.dochome-pages .btn-active{border-radius:3px;background-color:#ff6d67;color:#fff;font-size:12px;font-weight:400;font-family:"Montserrat";text-transform:uppercase}@media screen and (max-width: 767px){.dochome-pages .btn-active{width:100%;margin-top:10px}}.dochome-pages .dropdown-menu{right:0;left:auto;min-width:135px}.dochome-pages .dropdown-menu li.divider{margin:10px 15px}.dochome-pages .dropdown-menu li a{color:#4c4c4c;font-size:14px;font-weight:400;line-height:29px;font-family:"Open Sans"}.dochome-pages .dropdown-menu li a:hover{background-color:transparent}.dochome-pages .list-block .dropdown-menu,.dochome-pages .grid-block .dropdown-menu{padding:20px;box-shadow:none;border-color:#d9d9d9}.dochome-pages .list-block .dropdown-menu li,.dochome-pages .grid-block .dropdown-menu li{padding-bottom:15px;color:#4c4c4c;font-family:"Open Sans";font-size:14px;font-weight:400;cursor:pointer}.dochome-pages .list-block .dropdown-menu li:nth-child(7),.dochome-pages .grid-block .dropdown-menu li:nth-child(7){padding-bottom:0}@media all and (max-width: 767px){.dochome-pages.dochomes-v2 .btn-active{margin-top:20px}}.dochome-pages.dochomes-v2 .list-block .dropdown-menu li:nth-child(7),.dochome-pages.dochomes-v2 .grid-block .dropdown-menu li:nth-child(7){padding-bottom:15px}@media all and (max-width: 767px){.dochome-pages.dochomes-v2 .list-block .dropdown-menu li a,.dochome-pages.dochomes-v2 .grid-block .dropdown-menu li a{padding:0}}.form-control{-webkit-box-shadow:none;box-shadow:none;height:40px;color:#333;border:1px solid #d9d9d9;border-radius:3px}.form-control:focus{font-size:14px;border-color:#767676;-webkit-box-shadow:none;box-shadow:none}.form-control::-moz-placeholder{color:#3b3b3b;opacity:1}.form-control:-ms-input-placeholder{color:#3b3b3b}.form-control::-webkit-input-placeholder{color:#3b3b3b}.label-float{position:relative;min-height:40px}.label-float.invalid{min-height:65px;padding-bottom:35px}.label-float .text-danger{position:relative;top:40px;left:2px}.label-float input,.label-float label{cursor:text;font-weight:400;font-size:14px;position:absolute;transition:all 0.15s ease;width:100%;color:#333}.label-float input{padding:11px 12px 0;top:0}.label-float label{top:10px;left:9px;color:#919191;display:inline-block;width:auto}.label-float input.filled ~ label,.label-float input:focus ~ label{font-size:10px;top:2px;left:4px}.radio{margin-bottom:7px}.radio label{display:inline-block;vertical-align:middle;position:relative;padding-left:25px;color:#000;font-weight:400;line-height:26px}.radio label::before{content:"";display:inline-block;position:absolute;width:20px;height:20px;left:10px;top:3px;margin-left:-10px;border:1px solid #d9d9d9;border-radius:50%;background-color:#fafafa;outline:none;-webkit-transition:border 0.15s ease-in-out;-o-transition:border 0.15s ease-in-out;transition:border 0.15s ease-in-out}.radio label::after{display:inline-block;position:absolute;content:" ";width:12px;height:12px;left:14px;top:7px;margin-left:-10px;border-radius:50%;background-color:#3591cf;outline:none;-webkit-transform:scale(0, 0);-ms-transform:scale(0, 0);-o-transform:scale(0, 0);transform:scale(0, 0);-webkit-transition:-webkit-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);-moz-transition:-moz-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);-o-transition:-o-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);transition:transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33)}.radio input[type="radio"]{opacity:0;z-index:1;cursor:pointer;outline:none}.radio input[type="radio"]:focus+label::before{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;outline:none}.radio input[type="radio"]:checked+label::after{-webkit-transform:scale(1, 1);-ms-transform:scale(1, 1);-o-transform:scale(1, 1);transform:scale(1, 1)}.checkbox{margin-bottom:7px}.checkbox label{display:inline-block;vertical-align:middle;position:relative;padding-left:0;margin-left:22px;color:#000;font-weight:400;line-height:26px}.checkbox input[type=checkbox]{display:none}.checkbox input[type=checkbox]+label::before{font-family:FontAwesome;display:inline-block}.checkbox input[type=checkbox]+label::before{content:'';position:absolute;height:18px;width:18px;border:1px solid #d9d9d9;left:-22px;border-radius:3px;top:5px}.checkbox input[type=checkbox]:checked+label::before{content:"\f00c";color:#3591cf;font-size:13px;text-align:center;line-height:15px}.btn-group-lc .btn-default{border-color:#3591cf;color:#3591cf}.btn-group-lc .btn-default:active:focus,.btn-group-lc .btn-default.active:focus,.btn-group-lc .btn-default:focus,.btn-group-lc .btn-default.focus,.btn-group-lc .btn-default:hover,.btn-group-lc .btn-default:active,.btn-group-lc .btn-default.active,.open>.btn-group-lc .btn-default.dropdown-toggle{color:#fff;background-color:#3591cf;border-color:#3591cf;outline:none;box-shadow:none}.nav-tabs li a{margin:0;border-radius:0;border:0 none;border-bottom:9px solid transparent;color:#3b3b3b}.nav-tabs li.active a,.nav-tabs li.active a:hover,.nav-tabs li.active>a:focus,.nav-tabs li a:hover{border:0 none;color:#3b3b3b;border-bottom:9px solid #3591cf;background:transparent}.nav-tabs li.active a,.nav-tabs li.active a:hover,.nav-tabs li.active>a:focus{font-weight:600}.dochomes-v2 .nav-tabs{border-bottom:0}.dochomes-v2 .nav-tabs li a{color:#333;border-bottom-width:8px}.dochomes-v2 .nav-tabs li.active a,.dochomes-v2 .nav-tabs li.active a:hover,.dochomes-v2 .nav-tabs li.active>a:focus,.dochomes-v2 .nav-tabs li a:hover{color:#333;border-bottom-width:8px}@media all and (max-width: 767px){.dochomes-v2 .nav-tabs{border-bottom:1px solid #d9d9d9}}.list-unstyled{margin:0;padding:0;list-style:none}.doc-sprite{background-image:url("../../../../images/commonsprite.png");width:70px;height:74px;background-repeat:no-repeat;display:inline-block;margin:30px 0}.create-doc{background-position:0 0;height:70px}.upload-doc{background-position:-70px 0}.rename-icon{background-position:-4px -73px;width:57px;height:62px;margin:0}.delete-icon{background-position:-65px -80px;width:55px;height:55px;margin:0}.list-icons div{display:inline-block}.list-icons .dropdown{bottom:10px}@media screen and (max-width: 767px){.list-icons .dropdown{bottom:0px}}.list-icons .list-doc-icons{color:#3591cf;font-size:18px;font-weight:400;cursor:pointer;display:inline-block;text-align:center}.list-icons .list-doc-icons:focus,.list-icons .list-doc-icons:hover,.list-icons .list-doc-icons:active{text-decoration:none}.list-icons .list-doc-icons .fa-ellipsis-v{color:#333;width:20px}.list-icons .list-doc-icons span{color:#3a383e;font-family:"Open Sans";font-size:12px;font-weight:400;line-height:20px}.service-sprit{width:100%;height:113px;transform:scaleX(1.1);background:url(../../../../images/res-services.png) no-repeat left top}.sky-light{background-position:0 0}.green-light{background-position:0 -118px}.orange-light{background-position:0 -236px}.lock-icon{height:25px;text-align:center;background:#4a4a4a;border-radius:30px;color:#dadada;line-height:24px;display:inline-block;width:35px;font-size:12px}@media screen and (min-width: 480px){.lock-icon{margin-left:10px;width:45px;font-size:16px}}.pencil:before{content:"\f040";display:block;font-family:fontawesome}.check:before{content:"\f05d";display:block;font-family:fontawesome}.download:before{content:"\f019";display:block;font-family:fontawesome}.print:before{content:"\f02f";display:block;font-family:fontawesome}.email:before{content:"\f003";display:block;font-family:fontawesome}.mail-icon{margin:0 auto;position:relative;width:60px;height:60px;background:#e4f1fe;border-radius:30px;text-align:center;line-height:60px;margin-bottom:25px}.mail-icon:before{content:'\f003';font-family:fontawesome;font-size:28px;color:#48a4ff}.font-orange{color:#f7971d;font-size:18px;font-weight:400;line-height:24px;padding-right:10px}.modal{padding:0 !important}.modal.fade .modal-dialog{-webkit-transform:translate3d(0, 125%, 0);-o-transform:translate3d(0, 125%, 0);transform:translate3d(0, 125%, 0)}.modal.in .modal-dialog{-webkit-transform:translate3d(0, 0, 0);-o-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}@media (min-width: 768px){.modal .modal-dialog.nopreview-dailog{width:315px;margin:30px auto;top:300px}}.modal .modal-content{border-radius:0;box-shadow:none}.modal .no-preview .h2{font-family:"Open Sans";color:#3b3b3b;margin-top:15px;margin-bottom:20px}.modal .no-preview .btn{width:195px}@media (min-width: 768px){.modal .doc-modal.modal-dialog{width:375px;margin:30px auto;top:25%}}.modal .doc-modal .modal-header{border:none;padding-bottom:0}.modal .doc-modal .modal-header .h2{font-weight:600}.modal .doc-modal .modal-header .close{opacity:1}.modal .doc-modal .btn{min-width:155px;font-weight:600}.modal .doc-modal .doc-name{min-width:300px;width:93%;max-width:100%;height:40px;border:1px solid;border-color:#d9d9d9;border-radius:3px;margin:5px 0;padding:6px 12px}.modal .doc-modal.doc-delete-modal .btn{min-width:130px;padding:10px}.modal .doc-download-modal .modal-body .h4{margin-top:0;font-weight:600}.modal .doc-download-modal .modal-body .label-container{position:relative;cursor:pointer;color:#3b3b3b;font-family:"Montserrat";font-size:14px;font-weight:400;line-height:20px;display:block;padding-left:30px;margin-bottom:10px}.modal .doc-download-modal .modal-body .label-container input{position:absolute;opacity:0}.modal .doc-download-modal .modal-body .checkmark{position:absolute;top:0;left:0;height:20px;width:20px;background:#fff;border-radius:15px;border:1px solid;border-color:#d9d9d9}.modal .doc-download-modal .modal-body .checkmark:after{content:"";position:absolute;display:none}.modal .doc-download-modal .modal-body .label-container input:checked ~ .checkmark:after{display:block}.modal .doc-download-modal .modal-body .label-container .checkmark:after{top:4px;left:4px;width:10px;height:10px;border-radius:15px;background:#3591cf}.modal .doc-rename-modal .modal-body,.modal .doc-duplicate-modal .modal-body,.modal .doc-delete-modal .modal-body{padding:0 15px 15px}.modal .doc-rename-modal .modal-body .h2,.modal .doc-duplicate-modal .modal-body .h2,.modal .doc-delete-modal .modal-body .h2{font-weight:600}@media (min-width: 768px){.modal .doc-email-modal.modal-dialog{width:500px;margin:30px auto;top:auto}}.modal .doc-email-modal .modal-body{padding:15px 0}.modal .doc-email-modal .modal-body .form-group{width:100%;padding-bottom:15px;border-bottom:1px solid #d9d9d9;margin-bottom:10px;clear:both}.modal .doc-email-modal .modal-body .form-group label{margin-left:15px;float:left;margin-top:10px}.modal .doc-email-modal .modal-body .form-group .form-control{width:85%;float:right;border:transparent}@media screen and (max-width: 480px){.modal .doc-email-modal .modal-body .form-group .form-control{width:80%}}.modal .doc-email-modal .modal-body .email-msg{width:100%;border-bottom:1px solid #d9d9d9;height:120px;border:transparent;padding:0 15px;resize:none}.modal .doc-email-modal .modal-body .email-msg:hover,.modal .doc-email-modal .modal-body .email-msg:focus{outline:transparent}.modal .doc-email-modal .modal-body .doc-error{text-align:left;padding:0 15px}.modal .doc-email-modal .doc-email-attachment{display:inline-block;float:left;font-size:12px;font-weight:400;border:1px solid;border-color:#d9d9d9;border-radius:3px;text-align:center;padding:3px 5px}.modal .doc-email-modal .doc-email-attachment p{margin:0;color:#3591cf}@media (min-width: 768px){.modal .doc-emailconformation-modal.modal-dialog{width:375px;margin:30px auto;top:15%}}.modal .doc-confirmation-modal .modal-content{padding:45px}.modal .doc-confirmation-modal .modal-header{padding:0}.modal .doc-confirmation-modal .modal-header .h2{display:inline;font-size:18px}.modal .doc-confirmation-modal .modal-body{padding:15px 0}.modal .doc-confirmation-modal .modal-body p{line-height:22px;margin-bottom:20px}.modal .doc-confirmation-modal .modal-body .doc-name{width:100%;min-width:285px}.modal .doc-confirmation-modal .modal-footer{border:none;padding:15px 0 0}@media (max-width: 767px){.doc-modal.modal-dialog{width:100%;margin:0;display:table;height:100%}.modal-content-wrap{display:table-cell;vertical-align:bottom}}@media screen and (min-width: 768px) and (max-width: 820px){.docEmail-modal .modal-content-wrap{display:table-cell;vertical-align:bottom}}@media screen and (max-width: 820px){.modal-open{top:0;left:0;right:0;bottom:0}.docEmail-modal{min-width:335px;width:100%;margin:0 auto;display:table;height:100%}.docEmail-modal .modal-header{border:none;padding:15px 15px 0}.docEmail-modal .modal-header .close{opacity:1}.docEmail-modal .modal-body{padding:5px 15px 15px 15px;position:relative}.docEmail-modal .btn-primary{min-width:300px;width:100%;height:40px;border-radius:3px;line-height:22px;font-family:"Montserrat";font-size:12px;font-weight:400}.docEmail-modal .tip-info{color:#58585f;font-family:"Source Sans Pro",Helvetica,Arial,sans-serif;font-size:13px;font-weight:400;line-height:16px;margin:15px 0 0}.choose-email-format-body{font-family:"Open Sans"}.choose-email-format-body .h3{font-weight:600;line-height:20px;color:#58585f;margin-bottom:15px;font-family:"Open Sans"}.choose-email-format-body .label-txt{color:#494e4f;font-size:14px;font-weight:400;margin-bottom:5px;margin-top:15px}.choose-email-format-body .common-format{min-width:300px;width:100%;height:40px;padding:8px 10px;border:1px solid;border-color:#d9d9d9;color:#494e4f;font-size:14px;font-weight:400;line-height:24px}.choose-email-format-body .format-option{margin-bottom:45px}.choose-email-format-body .choose-format{display:none;position:absolute;background:#fff;top:41px;z-index:1;width:100%;height:40px;padding:0;left:0;border:1px solid;border-color:#d9d9d9}.choose-email-format-body .choose-format li{padding:9px 10px}.choose-email-format-body .choose-format li a{color:#494e4f}.choose-email-format-body .choose-format li.selected{background:#48a4ff;color:#fff}.choose-email-format-body .format-dropdown{position:relative}.choose-email-format-body .format-dropdown:before{content:'\f107';font-family:FontAwesome;position:absolute;right:15px;top:10px;font-size:18px;color:#333}.choose-email-format-body .format-dropdown:hover .choose-format{background:#fff;height:130px;list-style:none;width:100%;line-height:25px}.ack-email-format-body{font-family:"Open Sans";text-align:center}.ack-email-format-body .h3{font-weight:600;line-height:20px;color:#58585f;margin-bottom:15px;font-family:"Open Sans"}.ack-email-format-body .h3 .user-ID{color:#a8a8ac;font-size:14px;font-weight:400;line-height:24px;display:block}.ack-email-format-body .selected-format{color:#58585f;font-weight:600;font-size:14px;margin-bottom:15px;padding-bottom:10px;border-bottom:1px solid;border-color:#d9d9d9}.ack-email-format-body .selected-format .txt-orange{font-weight:400}.ack-email-format-body .ack-txt{color:#58585f;font-size:13px;font-weight:400;line-height:20px;margin-bottom:15px}.unlimited-download-modal .header{background:#576475}.unlimited-download-modal .header .close{color:#fff}.unlimited-download-modal .header .h3{text-align:center;color:#fff;font-size:18px;font-family:"Open Sans";font-weight:600;line-height:20px}.unlimited-download-modal .header .h3 .txt{font-size:14px;margin-bottom:15px}.unlimited-download-modal .header .user-ID{color:#fff;font-family:"Open Sans";font-size:14px;font-weight:400;line-height:24px;padding-bottom:15px}.unlimited-download-modal .resend-txt{color:#494e4f;font-family:"Source Sans Pro",Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:16px;text-align:center;padding:11px;background:#eff2f6;border-bottom:1px solid;border-color:#d9d9d9}.unlimited-download-modal .modal-body{text-align:center}.unlimited-download-modal .modal-body .h3{color:#f7971d;font-family:"Montserrat";font-size:18px;font-weight:600;line-height:20px;margin-top:50px}.unlimited-download-modal .modal-body .txt{color:#58585f;font-family:"Open Sans";font-size:16px;font-weight:400;line-height:24px;margin-bottom:40px}.unlimited-download-modal .modal-body .ignor-txt{color:#333;font-family:"Montserrat";font-size:12px;font-weight:400;text-transform:uppercase;margin-top:15px;margin-bottom:0}}.list-block{margin-bottom:40px}.list-block .list-view-title .h5{color:#3b3b3b;font-family:"Open Sans";font-weight:600;margin-top:25px;margin-bottom:10px}.list-block .doc-list-box{padding:20px 10px 10px;background-color:#fff;border:1px solid;border-color:#d9d9d9;margin-bottom:20px}.list-block .doc-list-box .list-content .list-doc-name{color:#3b3b3b;font-family:"Montserrat";font-size:14px;font-weight:400;line-height:20px}.list-block .doc-list-box .list-content .list-doc-name span{cursor:pointer;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;display:inline-block;width:85%;vertical-align:middle}@media screen and (max-width: 768px){.list-block .doc-list-box .list-content .list-doc-name{font-size:12px}}@media screen and (max-width: 480px){.list-block .doc-list-box .lock-icon{height:20px;width:25px;line-height:22px}}@media screen and (max-width: 480px){.list-block .p-0{padding:0}}.dochomes-v2 .list-block{margin-bottom:0}.dochomes-v2 .list-block .list-view-title .h5{margin-top:0}.dochomes-v2 .list-block .list-view-title .h5 i{display:none}.dochomes-v2 .list-block .resume-strength{font-size:16px;vertical-align:-webkit-baseline-middle;font-weight:700;text-transform:uppercase}@media all and (min-width: 768px){.dochomes-v2 .list-block .doc-list-box{padding:17px 0;width:100%;display:table}.dochomes-v2 .list-block .doc-list-box>div{display:table-cell;float:none;vertical-align:middle}.dochomes-v2 .list-block .doc-list-box .icon-more{display:block}}.dochomes-v2 .list-block .resume-no-score{font-size:25px;line-height:1}.dochomes-v2 .btn-show-more{margin-bottom:15px}.doc-grid-container{margin-top:30px;margin-bottom:60px}@media screen and (max-width: 667px){.doc-grid-container{height:auto;overflow-x:auto;margin-top:0;margin-bottom:35px}}.doc-grid-container .grid-content{background:#fff;max-height:320px;border:1px solid;border-color:#d9d9d9}.doc-grid-container .top-grid-content{position:relative}.doc-grid-container .top-grid-content img{height:230px}@media screen and (min-width: 992px) and (max-width: 1199px){.doc-grid-container .top-grid-content img{height:185px}}.doc-grid-container .top-grid-content .gridview-resume-icon{padding:8px;pointer-events:none;position:absolute;top:15px;right:15px;width:40px;height:37px;box-shadow:0 0 9px rgba(0,0,0,0.29);border:1px solid #ddd;background:#fff}.doc-grid-container .doc-type{position:absolute;bottom:35px;right:20px}.doc-grid-container .lock-icon{position:absolute;bottom:35px;right:10px}.doc-grid-container .bottom-grid-content{min-height:105px;background:#fff;padding:10px 15px 0;box-shadow:0 -2px 4px rgba(0,0,0,0.07);position:relative;width:100%;margin-top:-30px}.doc-grid-container .bottom-grid-content .grid-inner-content{border-bottom:1px solid;border-color:#d9d9d9;padding:0 5px 10px}.doc-grid-container .bottom-grid-content .h4{color:#000;font-family:"Montserrat";font-weight:400;line-height:20px;margin:0;width:100%;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.doc-grid-container .bottom-grid-content .grid-options>div,.doc-grid-container .bottom-grid-content .grid-options>a{border-left:1px solid;border-color:#d9d9d9;padding:5px 0;text-align:center;cursor:pointer;font-size:12px;line-height:20px;font-weight:400;color:#3591cf;font-family:"Open Sans";height:50px}.doc-grid-container .bottom-grid-content .grid-options>div:nth-child(1),.doc-grid-container .bottom-grid-content .grid-options>a:nth-child(1){border:none}.doc-grid-container .bottom-grid-content .grid-options>div:nth-child(5),.doc-grid-container .bottom-grid-content .grid-options>a:nth-child(5){font-size:18px}.doc-grid-container .bottom-grid-content .grid-options .list-doc-icons .fa-ellipsis-v{margin-top:10px;color:#333}@media screen and (max-width: 667px){.doc-grid-container .doc-mobile-scroll{height:340px;overflow:hidden}.doc-grid-container .doc-mobile-scroll .col-sm-6{width:270px;float:left}}.dochomes-v2 .doc-grid-container{margin:20px 0}.dochomes-v2 .doc-grid-container .bottom-grid-content{margin-top:-54px}.dochomes-v2 .doc-grid-container .bottom-grid-content .grid-options>div:nth-child(5),.dochomes-v2 .doc-grid-container .bottom-grid-content .grid-options>a:nth-child(5){font-size:12px}.dochomes-v2 .doc-grid-container .bottom-grid-content .grid-options .icon-more{display:block}.dochomes-v2 .doc-grid-container .bottom-grid-content .grid-inner-content{padding-bottom:5px}.dochomes-v2 .doc-grid-container .bottom-grid-content .doc-date{vertical-align:unset}@media all and (max-width: 767px){.dochomes-v2 .doc-grid-container .bottom-grid-content .doc-date{display:block}}.dochomes-v2 .doc-grid-container .btn-extension{position:absolute;top:15px;right:15px;box-shadow:0 0 9px rgba(0,0,0,0.29)}.dochomes-v2 .doc-grid-container .resume-strength{font-size:25px;font-weight:700}.carousel-inner{min-height:600px;max-height:100%;background-color:#fff}.carousel-control.left,.carousel-control.right{background-image:none}.carousel-control>.glyphicon-chevron-left{color:#000;margin-left:-35px}.carousel-control>.glyphicon-chevron-right{color:#000;margin-right:-35px}@media screen and (min-width: 767px){.carousel-control>.glyphicon-chevron-left{margin-left:-136px;color:#fff}.carousel-control>.glyphicon-chevron-right{margin-right:-136px;color:#fff}}.resume-home{padding-top:15px;padding-bottom:10px;border-bottom:none}@media screen and (min-width: 767px){.resume-home{padding-top:60px;padding-bottom:20px;border-bottom:1px solid #d9d9d9}}@media screen and (min-width: 641px) and (max-width: 767px){.resume-home .mobile-filter{display:inline-block;width:60%}.resume-home .mobile-dropdown{display:inline-block;width:40%;padding:0}}.resume-home .h1{line-height:23px}.resume-home .h1 span{color:#ff6d67;font-weight:600}.resume-home .sort-view-filter{display:inline-block;margin:20px 35px 20px 0}@media screen and (max-width: 375px){.resume-home .sort-view-filter{margin:0}}.resume-home .sort-view-filter .btn-default{color:inherit;background-color:#fff}.resume-home .sort-view-filter label{color:#3b3b3b;font-family:"Open Sans";font-size:14px;font-weight:600;line-height:31px}.resume-home .sort-view-filter select{width:130px;padding:6px;color:#3b3b3b;border:1px solid;border-color:#d9d9d9;border-radius:3px;font-family:"Open Sans";font-size:12px;font-weight:400}.resume-home .sort-view-filter .active{color:#fff;background-color:#ff6d67 !important}@media screen and (max-width: 640px){.resume-home .btn-active{width:100%}}@media screen and (min-width: 769px) and (max-width: 1199px){.resume-home .btn-active{margin-right:0}}.modal-filter{background:#3c3c3c}.modal-filter .col-sm-12{padding:15px 0}.modal-filter .btn{min-width:155px;text-transform:uppercase;color:#fff;font-family:"Montserrat";font-weight:400}.modal-filter i{padding-top:5px;cursor:pointer;color:#fff;font-size:18px;font-weight:400}@media screen and (max-width: 768px){.modal-filter i{color:#333}}.modal-filter .lock-icon{background-color:#fff}.modal-filter .lock-icon i{padding:0;cursor:auto}.modal-filter .modal-doc-name>span{position:relative;vertical-align:middle;color:#fff;font-family:"Montserrat";font-size:14px;font-weight:400;line-height:20px}.modal-filter .txt-white{padding-right:25px;color:#fff;font-family:"Open Sans";font-size:12px;font-weight:400}.modal-filter .close,.modal-filter .close .fa-close,.modal-filter .close:hover,.modal-filter .close:focus{opacity:1;color:#fff}@media all and (min-width: 768px){.dochomes-v2 .resume-home{padding-bottom:0;margin-bottom:25px}}.dochomes-v2 .resume-home .sort-view-filter{margin-bottom:0}@media all and (min-width: 768px){.dochomes-v2 .resume-home .sort-view-filter{margin-top:0;position:relative}.dochomes-v2 .resume-home .sort-view-filter:after{position:absolute;top:9px;right:-15px;content:'';color:#ddd;width:1px;height:18px;border-right:1px solid #ddd}}@media all and (min-width: 768px){.dochomes-v2 .mobile-filter{text-align:right}}.paination-section .pagination{margin:25px 0 45px}.paination-section .pagination>li{display:inline-block;margin:0 8px;vertical-align:middle}.paination-section .pagination>li.disabled>a{pointer-events:none;opacity:0.75;font-weight:400}.paination-section .pagination>li>a,.paination-section .pagination>li>span{padding:5px;margin-left:0;color:#565656;font-family:"Montserrat";font-size:14px;font-weight:600;border:none;background-color:transparent;border-bottom:4px solid transparent}.paination-section .pagination>li>a:hover,.paination-section .pagination>li>a:focus,.paination-section .pagination>li>span:hover,.paination-section .pagination>li>span:focus{background-color:transparent;color:#565656;border-bottom:4px solid transparent}.paination-section .pagination>li:first-child>a,.paination-section .pagination>li:last-child>a,.paination-section .pagination>li:first-child>span,.paination-section .pagination>li:last-child>span{text-transform:uppercase;border-radius:3px;border:1px solid #d9d9d9;padding:10px 15px;background-color:#fff;color:#3b3b3b;font-family:"Montserrat";font-size:14px}.paination-section .pagination>li:first-child:not(.disabled)>a:hover,.paination-section .pagination>li:last-child:not(.disabled)>a a:hover{background:#fff;font-weight:600}.paination-section .pagination .active>a,.paination-section .pagination .active>span{background-color:transparent;border-bottom:4px solid #3591cf;font-weight:600}.paination-section .pagination .active>a:hover,.paination-section .pagination .active>a:focus,.paination-section .pagination .active>span:hover,.paination-section .pagination .active>span:focus{background-color:transparent;border-color:#3591cf}@media all and (max-width: 991px){.paination-section{padding:15px}}body,html{height:100%;min-height:100%}.dochome-pages{min-height:calc(100% - 120px)}body,html{height:100%;min-height:100%}.dochome-pages{min-height:calc(100% - 120px)}input{height:40px;padding:5px 10px;color:#3b3b3b;border:1px solid;border-color:#d9d9d9;border-radius:3px;background:#fff;font-size:14px;font-weight:400;line-height:24px}.btn-primary{border-color:#ff6d67;background-color:#ff6d67;font-weight:600;line-height:inherit}.btn-primary:hover,.btn-primary:focus,.btn-primary:active,.btn-primary:active:hover,.btn-primary.active:hover{background-color:#ff6d67}.modal .customizer-modal-dialog .modal-body .resume-order-form .btn-primary{width:100%}.create-upload-document{margin-top:60px;margin-bottom:60px}.doc-grid-container .grid-content{max-height:325px}@media (max-width: 600px){.footer__container .footer{font-size:16px}.footer__links{margin-bottom:25px;padding-left:0}.footer__links__item{line-height:1.5}}.doc-page-topbar .step-name{color:#fff}
.list-block .doc-list-box{width: 100%;}
.dropdown.show {display: inline-block !important;}
.resume-list ul.dropdown-menu.show {padding: 20px;box-shadow: none;border-color: #d9d9d9;}
.resume-list .list-block .dropdown-menu li, .dochome-pages .grid-block .dropdown-menu li {padding-bottom: 15px;color: #4c4c4c;font-family: "Open Sans";font-size: 14px;font-weight: 400;cursor: pointer;}
.custom-modal.show {opacity: 1 !important;}
.custom-modal.show .modal-dialog {-webkit-transform: translate3d(0, 0, 0);-o-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);}
.form-group input.format {
    height: 15px;
    position: initial;
}
.modal-backdrop.fade.show {
    opacity: .5;
}
</style>
@endpush


