@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')

@push('after-styles')
@endpush
<style>
@media  screen and (max-width: 1298px){
  button.color-selector-reset.color-selector.acr-reset-them-ctnr, button.color-selector-reset.background-color-selector.acr-reset-them-ctnr {
      width: 28px!important;}
}
.below_select {
  top:30px;
  margin-right: 100px;
  margin-bottom: 10px;
}
.updateImageDiv {
    white-space: nowrap;
}
#font-list{
	max-height: 250px;
    overflow: auto;
}
</style>
@php
$template = Request::get("temp");
@endphp
@push('after-scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ url('assets/js/front/JavaScriptSpellCheck/include.js')}}"></script>
<script type="text/javascript">
function checkspell()
{
 // $Spelling.SpellCheckInWindow('document');
 // $('#document').binSpellCheckFields(options)
 $Spelling.LiveValidation(document)
}
</script>
<script>
$(function(){
	$( ".sortableInner" ).sortable({
		stop: function(event, ui) {
			// /*var data = [];
			// jQuery("#CONTAINER_PARENT_1").each(function(index){
			//    var wList=jQuery(this);
			//    var id = wList.data("id");
			//    wList.find(".para-count").text(index+1);
			//    data.push({"id":id, "position":index+1});
			// });
			// console.log(data);
			// data = JSON.stringify(data);
			// jQuery.ajax({
			// 	url:"<?php echo route('final-position') ?>",
			// 	type:"POST",
			// 	data:{sort:data},
			// 	success:function(result){
			// 		console.log(result);
			// 	}
			// });*/
		}
	});

  jQuery(".spellcheck-action").click(function(){
checkspell();
// alert();
  });
	$( ".expr-list" ).disableSelection();

	jQuery(".editcontent").click(function(){
		var id = jQuery(this).attr("dhref");
		window.location.href=id;
	});

	jQuery(".deleteHistory").click(function(){
		var id = jQuery(this).data("id");
		jQuery("#hiddenId").val(id);
	});

	jQuery(".rename-action").click(function(){
		jQuery(this).hide();
		jQuery(".rename-content").show();
	});

	jQuery(".cancel-btn").click(function(){
		jQuery(".rename-content").hide();
		jQuery(".rename-action").show();
	});

	jQuery("#resume_name").keyup(function(event){
		var keycode = (event.keyCode ? event.keyCode : event.which);
		if(keycode == '13'){
			updateName();
		}
	});

	jQuery(".save-rename").click(function(){
		updateName();
	});


	jQuery(".duplicate-action").click(function(){
		var _n = jQuery(".rename-action").data('name');
		jQuery("#title").val("Copy of "+_n).focus();
	});

	// jQuery(".del-section").click(function(){
	// 	var resume_id = jQuery(this).parent().data('resumeid');
	// 	jQuery(this).parents('.section-container').remove();
	// 	jQuery.ajax({
	// 		url:"<?php echo route('deletsection') ?>",
	// 		type:"POST",
	// 		data:{id:resume_id},
	// 		success:function(result){

	// 		}
	// 	});
	// });
	jQuery(".del-section").click(function(){
		var resume_id = jQuery(this).parent().attr('data-resumeId');
		var url = jQuery(this).parent().data('href');
		
		jQuery(this).parents('.section-container').remove();
		jQuery.ajax({
			url:url,
			type:"POST",
			data:{id:resume_id},
			success:function(result){
				jQuery(".deletesec").text(result['message']);
				setTimeout(function(){
					jQuery(".deletesec").hide();
				},3000);
			}
		});
	});

	jQuery("#custom-name-size").on("input change", function(e) {
		jQuery(".name-size-container").text($(this).val()+"pt");
		jQuery("#document .name").css('font-size', $(this).val()+"px");
		window.formatting_nameSize = $(this).val()+"px";
	});

	jQuery("#custom-font-size").on("input change", function(e) {
		jQuery(".font-size-container").text($(this).val()+"pt");
		jQuery("#document.fontsize").css('font-size', $(this).val()+"px");
		window.formatting_fontSize = $(this).val()+"px";
	});

	jQuery("#custom-line-spacing").on("input change", function(e) {
		jQuery("#document").css('line-height', $(this).val()+"px");
		window.formatting_lineSpacing = $(this).val()+"px";
	});

	jQuery(".color-selector").click(function(){
		var colr = jQuery(this).data('color');
		jQuery(".sectiontitle, .name, .resumeTitle, .headingIcon svg circle,.scvt1.address,.address10").css('color',colr);
		jQuery(".headingIcon svg circle").css('fill',colr);
		window.formatting_color = colr;
	});

	jQuery(".font-family").click(function(){
		var family = jQuery(this).data('family');
		jQuery("#document").css('font-family', family);
		jQuery("#font-style").text(family).css('font-family', family);
		window.formatting_fontFamily = family;
	});
	jQuery(".background-color-selector").click(function(){
		var colr = jQuery(this).data('color');
		jQuery(".topsection,.scvt").css('background-color',colr);
		jQuery(".scvt11.shape").css('border-top-color',colr);
		window.formatting_backgroundColor = colr;
	});
	jQuery(".titleupdate input").click(function(){
		return false;
	});
	jQuery(".rename-section").click(function(){
		$(this).next("span").show();
		return false;
	});

	jQuery(".eduname").click(function(){

		var btn = jQuery(this);
		jQuery(this).parent('span').toggle();
		var title = $(this).prev("input").val();
		var link = $(this).prev("input").data('link');
		var resume_id = {{ $id }};
		
		jQuery.ajax({
			url:"<?php echo route('section-title') ?>",
			type:"POST",
			data:{id:resume_id, title:title,section:link},
			success:function(result){
				//btn.parents('.sectiontitle').text(title)
				//alert(title);
				if (btn.parents('.sectiontitle').find("span.newtitle").length == 1) {
					btn.parents('.sectiontitle').find("span.newtitle").text(title);
				} else {
					btn.parents('.sectiontitle').contents().first()[0].textContent=title;
				}
				
				
			return false;
			}
		});

		// var id= jQuery(this).attr('class');
		// alert(id);
		return false;
	});
	jQuery(".cancel").click(function(){
		$(this).prev("input").val('');
		jQuery(this).parent('span').toggle();
		return false;
	});

	jQuery(".save-btn").click(function(){
		var fontSize = window.formatting_fontSize;
		var lineSpacing = window.formatting_lineSpacing;
		var color = window.formatting_color;
		var fontFamily = window.formatting_fontFamily;
		var nameSize = window.formatting_nameSize;
		var backgroundColor=window.formatting_backgroundColor;
		var position = '';
	 //console.log(position);

		var skin = "{{$template}}";
		var btn = jQuery(this);
		btn.find('span').hide();
		btn.find('i').show();
		btn.attr('disabled', true);
		var resume_id = {{ $id }};
		var check = btn.attr('id');
		
		jQuery.ajax({
			url:"<?php echo route('final-resume-formatting') ?>",
			type:"POST",
			data:{id:resume_id, fontSize:fontSize, lineSpacing:lineSpacing, color:color, fontFamily:fontFamily, nameSize:nameSize,skin_id:skin,backgroundColor:backgroundColor,position:position},
			success:function(result){
				btn.find('span').show();
				btn.find('i').hide();
				btn.attr('disabled', false);
				if(check != '' && check != undefined){
					jQuery("#response-msg-pop").show();
				setTimeout(function(){
					jQuery("#response-msg-pop").hide();
					window.location.href = '{{ route("documenthome") }}';
				},3000);
				}else{
					jQuery("#response-msg").show();
				setTimeout(function(){
					jQuery("#response-msg").hide();
				},3000);
				}

			}
		});

	});
});
function updateName(){
	var resume_id = {{ $id }};
	var name = jQuery("#resume_name").val();
	jQuery(".save-rename").hide();
	jQuery(".rename-content .fa-spin").show();
	jQuery.ajax({
		url:"<?php echo route('documentRename') ?>",
		type:"POST",
		data:{id:resume_id, rename:name, ajax:true},
		success:function(result){
			jQuery(".save-rename, .rename-action").show();
			jQuery(".rename-content .fa-spin, .rename-content").hide();
			jQuery(".rename-action .resume-name-text span").text(name);
			jQuery(".rename-action").attr('data-name', name);
		}
	});
}
/* for scvt6 */
$(document).ready(function(){
  $(".editcontent").hover(function(){
	var id = $(this).attr('data-id');
	if(id == "SECTIONNAME_BIOD" || id == "personal_info"){
	console.log(id);
		jQuery("#"+id).trigger('hover');
	}
  });

});
</script>
@endpush

@section('content')
<style>
	.editcontent {
    /* display: inline-block; */
    -webkit-transition: all 0.1s ease-out;
}

.editcontent:hover {
    /* border:1px solid black; */
	background-color:#D8D8D8;
    cursor: pointer;
    -webkit-transform: scale(1.1);
}
.editcontent:hover .rename-section {
    font-size:8px;
	display:block;
}

.titleupdate span{
	font-size:10px;
}
</style>
<main id="main">
   <div class="col-md-12 col-lg-12" style="height:80px">
   </div>
   <!--==========================
      Services Section
      ============================-->
   <section id="services" class="work-history-before">
	   <div class="container">
	   <p>&nbsp;</p>
		<div class="row">
		  <div class="col-lg-12 mx-auto" >
				@if ($errors->any())
					<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
								@foreach ($errors->all() as $error)
                                 <div>{{$error}}</div>
                             @endforeach
					</div>
				@endif
			  <div class="row" style="margin-bottom: 15px;">
				<div class="col-sm-4 col-md-4"></div>
				<div class="col-sm-8 col-md-8">
					<div class="resume-name-edit-wrap rename-action" data-name="{{ $resume->resume_name != null ? $resume->resume_name : $resume->first_name."_".$resume->first_name."_CV"."_".$resume->id }}">
						<a class="resume-name-text" href="javascript:void(0)">
						<i class="fa fa-pencil"></i><span>[{{ $resume->resume_name != null ? $resume->resume_name : $resume->first_name."_".$resume->first_name."_CV"."_".$resume->id }}]</span></a>
					</div>

					<div class="resume-name-edit-wrap rename-content" style="display:none;">
						<input type="text" id="resume_name" value="{{ $resume->resume_name != null ? $resume->resume_name : $resume->first_name."_".$resume->first_name."_CV"."_".$resume->id }}" />
						<span class="fa fa-check save-rename"></span>
						<span class="fa fa-spinner fa-spin" style="display:none;"></span>
						<span class="cancel-btn">Cancel</span>
					</div>
					<div class="dropdown more-action">
					  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						More Options
					  </a>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item duplicate-action" data-toggle="modal" data-target="#duplicatepop" style="display: block !important">Duplicate</a>
						<a class="dropdown-item remove-action" data-toggle="modal" data-target="#removepop" style="display: block !important">Delete</a>
						<a class="dropdown-item doc-action" data-toggle="modal" data-target="#docpop" style="display: block !important">Documents</a>
					</div>
					</div>
				</div>
			  </div>
			  <!-- for image update -->
			     <form action="{{ route('imageUpdate') }}" method="post" enctype="multipart/form-data" id="uploadImageForm" style="display:none;">

					<div class="row" style="margin-bottom: 15px;">
						<div class="col-sm-4 col-md-3"></div>
						<div class="col-sm-8 col-md-9">

							<div class="updateImageDiv">
							<span>Select Image:</span>
							<input type="hidden" name="id" value="{{ $resume->id }}">
							<span class=""><input type="file" id="" name="resumeImage" accept="image/*"></span>
              <div class="below_select">
							<button type="submit" class="btn btn-success " id="saveImage" name="imageUploadFinalize">Upload</button>
							<span class="" style="font-size:12px;">&nbsp;Type: jpg/jpeg</span></div>
							</div>
						</div>
						<input type="hidden" id="hiddenId" name="id" value="{{ $id }}" />
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
				</form>
			  <div class="row">
					<div class="col-sm-4 col-md-4 sidebar ">
						<!--div class="mini-submenu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</div-->
						<div class="list-group position-sticky">
							<a href="javascript:void(0);" class="list-group-item spellcheck-action">
								<i class="fa fa-font"></i> Spell Check
							</a>

							<a href="{{ route('edit-resume',['id' => $id]) }}" class="list-group-item">
								<i class="fa fa-header"></i> Heading
							</a>
							<a href="{{ route('edit-summary',['id' => $id]) }}" class="list-group-item">
								<i class="fa fa-list"></i> Professional Summary
							</a>
							<a href="{{ route('editEducationList', ['id' => $id]) }}" class="list-group-item">
								<i class="fa fa-book"></i> Education
							</a>
							<a href="{{ route('edit-skills', ['id' => $id]) }}" class="list-group-item">
								<i class="fa fa-bar-chart-o"></i> Skills
							</a>
							<a href="{{ route('editExprList',['id' => $id]) }}" class="list-group-item">
								<i class="fa fa-users"></i> Work History
							</a>
							@if(isset($resume->extraSection) && $resume->extraSection)
							<a href="{{ route('edit-section',['id' => $id]) }}" class="list-group-item">
								<i class="fa fa-list-alt"></i> {{ @$resume->extraSection->title }}
							</a>
							@else
							<a href="{{ route('edit-section',['id' => $id]) }}" class="list-group-item">
								<i class="fa fa-plus"></i> Add a section
							</a>
							@endif
							<a href="#" data-toggle="modal" data-target="#downloadpop" class="list-group-item">
								<i class="fa fa-download"></i> Download
							</a>
						</div>
						<p>&nbsp;</p>
						<div class="list-group position-sticky">
							<div class="list-group-item">
								<div class="filter-list">
									<div class="filter-title">Title Color</div>
									<div class="filter-content">
										<ul class="filter-color list-unstyled">
											<li class="item">
												<button type="button" title="Reset" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#252932' ? 'active' : '' }}" data-color="#252932">
													<span class="color-selector-radio"></span>
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#e9a507' ? 'active' : '' }}" data-color="#e9a507" style="background:#e9a507">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#fe7a66' ? 'active' : '' }}" data-color="#fe7a66" style="background:#fe7a66">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#d0021b' ? 'active' : '' }}" data-color="#d0021b" style="background:#d0021b">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#39c3b1' ? 'active' : '' }}" data-color="#39c3b1" style="background:#39c3b1">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#34495E' ? 'active' : '' }}" data-color="#34495E" style="background:#34495E">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#FFFFFF' ? 'active' : '' }}" data-color="#FFFFFF" style="background:#FFFFFF;border:1px solid;">
												</button>
											</li>
										</ul>
										<br>
									<ul class="filter-color list-unstyled">
										<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#92A8D1' ? 'active' : '' }}" data-color="#92A8D1" style="background:#92A8D1">
												</button>
											</li>

											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#955251' ? 'active' : '' }}" data-color="#955251" style="background:#955251">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#DD4124' ? 'active' : '' }}" data-color="#DD4124" style="background:#DD4124">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#EFC050' ? 'active' : '' }}" data-color="#EFC050" style="background:#EFC050">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#5B5EA6' ? 'active' : '' }}" data-color="#5B5EA6" style="background:#5B5EA6">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#000000' ? 'active' : '' }}" data-color="#000000" style="background:#000000">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#0000FF' ? 'active' : '' }}" data-color="#0000FF" style="background:#0000FF">
												</button>
											</li>
										</ul><br>
										<ul class="filter-color list-unstyled">
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#E15D44' ? 'active' : '' }}" data-color="#E15D44" style="background:#E15D44">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#DFCFBE' ? 'active' : '' }}" data-color="#DFCFBE" style="background:#DFCFBE">
												</button>
											</li>

											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#6EB954' ? 'active' : '' }}" data-color="#6EB954" style="background:#6EB954">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset color-selector acr-reset-them-ctnr {{ $resume->color == '#C3447A' ? 'active' : '' }}" data-color="#C3447A" style="background:#C3447A">
												</button>
											</li>
											
										</ul>
									</div>
								</div>

								<div class="filter-list">
									<div class="filter-title">Name Size</div>
									<div class="filter-content">
										<input type="range" class="custom-range" min="18" max="46" step="1" value="{{ $resume->first_name != null ? str_replace('px', '', $resume->first_name) : '25'}}" id="custom-name-size">
										<div class="name-size-container">25pt</div>
									</div>
								</div>

								<div class="filter-list">
									<div class="filter-title">Font Size</div>
									<div class="filter-content">
										<input type="range" class="custom-range" min="8" max="14" step="1" value="{{ $resume->fontSize != null ? str_replace('px', '', $resume->fontSize) : '11'}}" id="custom-font-size">
										<div class="font-size-container">11pt</div>
									</div>
								</div>

								<div class="filter-list">
									<div class="filter-title">Line Spacing</div>
									<div class="filter-content">
										<input type="range" class="custom-range" min="14" max="34" step="1" value="{{ $resume->lineSpacing != null ? str_replace('px', '', $resume->lineSpacing) : '18'}}" id="custom-line-spacing">
									</div>
								</div>

								<div class="filter-list">
									<div class="filter-title">Font Style</div>
									<div class="filter-content">
										<div class="dropdown show">
										  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="font-style" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											{{ $resume->fontFamily or 'Century Gothic'}}
										  </a>

										  <div class="dropdown-menu" id="font-list" aria-labelledby="font-style">
											<a href="javascript:;" class="dropdown-item font-family" data-family="Arial" style="font-family:Arial">Arial</a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Bodoni MT" style="font-family:Bodoni MT">Bodoni MT</a>


											<a href="javascript:;" class="dropdown-item font-family" data-family="Candara" style="font-family:Trebuchet MS"> Candara</a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Cambria" style="font-family:Trebuchet MS"> Cambria</a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Century Gothic" style="font-family:Centory Gothic">Centory Gothic</a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Courier New" style="font-family:Courier New">Courier New</a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Fantasy" style="font-family:Trebuchet MS">Fantasy  </a>

											<a href="javascript:;" class="dropdown-item font-family" data-family="Helvetica" style="font-family:Trebuchet MS">Helvetica</a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Georgia" style="font-family:Georgia">Georgia</a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Geneva" style="font-family:Trebuchet MS"> Geneva</a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Trebuchet MS" style="font-family:Trebuchet MS">Trebuchet MS</a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Monospace" style="font-family:Trebuchet MS">Monospace </a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Optima" style="font-family:Trebuchet MS"> Optima</a>
											<a href="javascript:;" class="dropdown-item font-family" data-family="Serif" style="font-family:Trebuchet MS">Serif </a>




											<a href="javascript:;" class="dropdown-item font-family" data-family="Verdana" style="font-family:Trebuchet MS"> Verdana</a>





										  </div>
										</div>
									</div>
								</div>
								<div class="filter-list" id="backgroundInactive">
									<div class="filter-title">Background Color</div>
									<div class="filter-content">
										<ul class="filter-color list-unstyled">
											<li class="item">
												<button type="button" title="Reset" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#252932' ? 'active' : '' }}" data-color="#252932">
													<span class="color-selector-radio"></span>
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#e9a507' ? 'active' : '' }}" data-color="#e9a507" style="background:#e9a507">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#fe7a66' ? 'active' : '' }}" data-color="#fe7a66" style="background:#fe7a66">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#d0021b' ? 'active' : '' }}" data-color="#d0021b" style="background:#d0021b">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#39c3b1' ? 'active' : '' }}" data-color="#39c3b1" style="background:#39c3b1">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#34495E' ? 'active' : '' }}" data-color="#34495E" style="background:#34495E">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#FFFFFF' ? 'active' : '' }}" data-color="#FFFFFF" style="background:#FFFFFF;border:1px solid;">
												</button>
											</li>
											
										</ul>
										<br>
									<ul class="filter-color list-unstyled">
										<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#92A8D1' ? 'active' : '' }}" data-color="#92A8D1" style="background:#92A8D1">
												</button>
											</li>

											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#955251' ? 'active' : '' }}" data-color="#955251" style="background:#955251">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#DD4124' ? 'active' : '' }}" data-color="#DD4124" style="background:#DD4124">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#EFC050' ? 'active' : '' }}" data-color="#EFC050" style="background:#EFC050">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#5B5EA6' ? 'active' : '' }}" data-color="#5B5EA6" style="background:#5B5EA6">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#000000' ? 'active' : '' }}" data-color="#000000" style="background:#000000">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#0000FF' ? 'active' : '' }}" data-color="#0000FF" style="background:#0000FF">
												</button>
											</li>
										</ul><br>
										<ul class="filter-color list-unstyled">
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#E15D44' ? 'active' : '' }}" data-color="#E15D44" style="background:#E15D44">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#DFCFBE' ? 'active' : '' }}" data-color="#DFCFBE" style="background:#DFCFBE">
												</button>
											</li>

											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#6EB954' ? 'active' : '' }}" data-color="#6EB954" style="background:#6EB954">
												</button>
											</li>
											<li class="item">
												<button type="button" class="color-selector-reset background-color-selector acr-reset-them-ctnr {{ $resume->backgroundColor == '#C3447A' ? 'active' : '' }}" data-color="#C3447A" style="background:#C3447A">
												</button>
											</li>
											
										</ul>
									</div>
								</div>
								<div class="filter-list">
									<div class="filter-title border-bottom-0">
										<a href="{{ route('cv-template', ['change' => $id]) }}" class="btn btn-secondary text-white font-weight-bold">
											<span>Change template</span>
										</a>
									</div>

								</div>
								<div class="filter-list">
									<p>&nbsp;</p>
									<button class="c-btn btn-success btn-lg pull-right save-btn"><span>Save</span> <i class="fa fa-spinner fa-spin" style="display:none;"></i></button>
									<p style="font-size: 13px;color: #28a745;text-align: right;position: relative;top: 25px;right: 10px;display:none;" id="response-msg">Saved Successfully</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8 col-md-8 page-finalize" id="page-finalize">
            <form class="contact-details" >
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
					@if($template)
						@include('frontend.cvTemplates.'.$template)
						@elseif(isset($resume->skin_id) && (\View::exists('frontend.cvTemplates.'.$resume->skin_id)))
						@php $skin = $resume->skin_id; $skin = 'frontend.cvTemplates.'.$skin;

						@endphp
						@include($skin)
					@else
						@include('frontend.cvTemplates.temp1',['highlighter' => '<p class="preview-template-highlighter" style="left: 76.217px; top: 12.405px; width: 151.434px; height: 35.236px;"></p>'])
					@endif
        </form>
					</div>
				</div>
		   </div>
		</div>
	</div>
   </section>
</main>

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
	<input type="hidden" id="delete_hiddenId" name="id" value="{{ $id }}"/>
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
	<input type="hidden" id="hiddenId" name="id" value="{{ $id }}" />
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
		<input type="hidden" id="download_hiddenid" name="id" value="{{$id}}" />
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  </form>
	  </div>
	</div>

	<!-- Dashboard -->
	<div class="custom-modal modal fade" id="docpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	 <div class="modal-content">
		  <div class="modal-body">
			<p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</p>
			<div class="model-main-content">
				<h2 class="text-center"><strong>Documents Home</strong></h2>
				<p></p>
				<p class="mt-2">Save before leave?</p>
				<p style="font-size: 13px;color: #28a745;display:none;" id="response-msg-pop">Saved Successfully</p>

		    </div>
		  </div>
		  <div class="modal-footer">
			<a href="{{ route('documenthome') }}" class="c-btn btn-default btn-back">Don't Save</a>
			<button class="c-btn btn-danger save-btn" id="doc" data-dismiss="modal">SAVE</button>
		  </div>
		</div>

	  </div>
	</div>
@endsection
