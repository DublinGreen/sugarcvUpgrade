@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')
  <style>
* {
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  box-sizing:border-box;
}

*:before, *:after {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

.clearfix {
  clear:both;
}

.text-center {text-align:center;}


pre {
display: block;
padding: 9.5px;
margin: 0 0 10px;
font-size: 13px;
line-height: 1.42857143;
color: #333;
word-break: break-all;
word-wrap: break-word;
background-color: #F5F5F5;
border: 1px solid #CCC;
border-radius: 4px;
}

.header {
  padding:20px 0;
  position:relative;
  margin-bottom:10px;
  
}

.header:after {
  content:"";
  display:block;
  height:1px;
  background:#eee;
  position:absolute; 
  left:30%; right:30%;
}

.header h2 {
  font-size:3em;
  font-weight:300;
  margin-bottom:0.2em;
}

.header p {
  font-size:14px;
}



#a-footer {
  margin: 20px 0;
}

.new-react-version {
  padding: 20px 20px;
  border: 1px solid #eee;
  border-radius: 20px;
  box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1);
  
  text-align: center;
  font-size: 14px;
  line-height: 1.7;
}

.new-react-version .react-svg-logo {
  text-align: center;
  max-width: 60px;
  margin: 20px auto;
  margin-top: 0;
}





.success-box {
  margin:50px 0;
  padding:10px 10px;
  border:1px solid #eee;
  background:#f9f9f9;
}

.success-box img {
  margin-right:10px;
  display:inline-block;
  vertical-align:top;
}

.success-box > div {
  vertical-align:top;
  display:inline-block;
  color:#888;
}



/* Rating Star Widgets Style */
.rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  font-size: 12px;
}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:1.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
}


  </style>
  <style>
.text-editor-wrap .text-editor-group {
    float: left;
    width: 48%;
    position: relative;
}
.text-editor-wrap .text-editor-inner {
    max-height: 470px;
    overflow: auto;
    overflow-x: hidden;
    overflow-y: auto;
}
.add-delete-row {
    position: relative;
}
.text-center {
    text-align: center !important;
}
.rating-container {
    position: relative;
    margin-top: 7px;
}

.rating {
    line-height: 1;
    display: inline-block;
}
.text-editor-wrap {
    width: 100%;
}
.rating-item {
    display: inline-block;
    vertical-align: middle;
    font-size: 0;
    position: relative;
    margin: 0 1px;
}
/*.rating-input {
    position: absolute;
    visibility: hidden;
    left: 15%;
    top: 22%;
}*/
.rating-stars input.input_width.form-control {
    display: inline-block;
    width: 250px;
}
.rating-container {
    position: relative;
    margin-top: 7px
}

.rating {
    line-height: 1;
    display: inline-block
}

.rating-reset {
    display: inline-block;
    color: #3983fa;
    vertical-align: middle;
    margin-right: 3px;
    margin-top: 2px;
    font-size: 19px
}

.rating-item {
    display: inline-block;
    vertical-align: middle;
    font-size: 0;
    position: relative;
    margin: 0 1px
}

.rating-item::before {
    font-size: 17px;
    color: #666
}

.rating-input {
    position: absolute;
    visibility: hidden;
    left: 15%;
    top: 22%
}

.rating:hover .rating-item::before {
    color: #3983fa
}

.rating .rating-item-active::before {
    color: #3983fa
}

.rating-item:hover ~ .rating-item::before {
    color: #666
}

.rating-item-active:hover ~ .rating-item-active::before {
    color: #666
}

.rating-item-active::before {
    color: #3983fa
}
	</style>
@endpush

@push('after-scripts')
<script>
		
jQuery(document).ready(function () {
	jQuery('#list li').click(function () {
		var content = $(this).find(".example-text").text();
		var parent = $(this).attr('id');
		var contents = $(this).find(".example-text").text();
		var content = $.trim(contents);
		if ($(this).hasClass('selected')) {
			$(this).removeClass('selected')
			jQuery("#content").find(".li_"+parent).remove();
		} else{
			 
			 var news= $("#content").append( '<div class="row add-delete-row li_'+parent+'"> <div class="col-md-4 text-center"><div class="rating-container"><a href="javascript:;" class="rating-reset fa fa-minus-circle"></a><div class="rating"><label class="rating-item fa fa-star " data-start="1"></label><label class="rating-item fa fa-star " data-start="2"></label><label class="rating-item fa fa-star " data-start="3"></label><label class="rating-item fa fa-star " data-start="4"></label><label class="rating-item fa fa-star " data-start="5"><input class="rating-input" name="rating[]" type="hidden"></label></div></div></div><div class="pl-0 col-md-7"> <div class="form-group placeholder-wrap  bold-FRFM no-label is-valid"><input type="text" tabindex="2" name="skill[]" class="form-control" autocomplete="Add your skills here." value="'+content+'"></div></div><a class="delete" href="javascript:;"><i class="fa fa-trash fa-lg" id="li_'+parent+'"></i></a></div>' );
			 $(this).addClass('selected');
		}
		jQuery('#li_'+parent, '#li_u_'+parent).click(function () {
			$(this).removeClass('selected')
			jQuery("#content").find(".li_"+parent).remove();
			jQuery("#content").find(".li_u_"+parent).remove();
		
		});
	}); 
	
	jQuery("#content").on("click", ".delete",function(){
		jQuery(this).parent(".add-delete-row").remove();
	});
			
	jQuery('#add').click(function () {
		var err = false;
		jQuery('input[name*="skill"]').each(function(){
			var ele = jQuery(this);
			if(ele.val() == ""){
				ele.focus();
				err = true;
			}
		});
		
		if(err){
			return false;
		}
		
		var no = jQuery(".add-delete-row").length;
		var new_no = no+1;		
		var news= $("#content").append( '<div class="row add-delete-row c_'+new_no+'"> <div class="col-md-4 text-center"><div class="rating-container"><a href="javascript:;" class="rating-reset fa fa-minus-circle"></a><div class="rating"><label class="rating-item fa fa-star " data-start="1"></label><label class="rating-item fa fa-star " data-start="2"></label><label class="rating-item fa fa-star " data-start="3"></label><label class="rating-item fa fa-star " data-start="4"></label><label class="rating-item fa fa-star " data-start="5"><input class="rating-input" name="rating[]" type="hidden"></label></div></div></div><div class="pl-0 col-md-7"> <div class="form-group placeholder-wrap  bold-FRFM no-label is-valid"><input type="text" tabindex="2" name="skill[]" class="form-control" autocomplete="Add your skills here." value=""></div></div><a class="delete" href="javascript:;"><i class="fa fa-trash fa-lg" id="c_'+new_no+'"></i></a></div>' );		
		jQuery('#c_'+new_no).click(function () {
			jQuery("#content").find(".c_"+new_no).remove();
		});
	});
	
	jQuery("#content").on("click", ".rating-item",function(){
		var t = jQuery(this);
		t.parent('.rating').find(".rating-item").removeClass("rating-item-active");
		t.parent('.rating').find(".rating-input").val(t.data('start'));
		t.prevAll('.rating-item').addClass('rating-item-active');
		t.addClass("rating-item-active");
	});
		
});
function validateForm(form){
	var err = false;
	jQuery('input[name*="skill"]').each(function(){
		var ele = jQuery(this);
		if(ele.val() == ""){
			ele.focus();
			err = true;
		}
	});
	
	if(err){
		return false;
	}else{
		return true;
	}
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
			  <li class="breadcrumb-item"><a href="{{ route('admin.users.resume.edit', ['id' => $skills->resume_id]) }}">Resume</a></li>
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
							<form class="contact-details" method="post" action="{{ route('admin.update-resume-skills', ['id' => $id]) }}">
							   <input type="hidden" name="_token" value="{{ csrf_token() }}">
							  <div class="row about-container">       
								   <input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="col-lg-8" >
									 <div class="container-fluid">
										<p>&nbsp;</p>
										<div id='content' class="fa-ul" style="">
											@if(isset($skills->skills) && $skills->skills != "")
												@php
													$allskills = json_decode($skills->skills);
												@endphp
												@foreach($allskills as $index => $skill)
												<div class="row add-delete-row li_u_{{ $index }}"> 
													<div class="col-md-4 text-center">
														<div class="rating-container">
															<a href="javascript:;" class="rating-reset fa fa-minus-circle"></a>
															<div class="rating">
																<label class="rating-item fa fa-star {{ ($skill->rating != '' && $skill->rating >= 1) ? 'rating-item-active' : '' }}" data-start="1"></label>
																<label class="rating-item fa fa-star {{ ($skill->rating != '' && $skill->rating >= 2) ? 'rating-item-active' : '' }}" data-start="2"></label>
																<label class="rating-item fa fa-star {{ ($skill->rating != '' && $skill->rating >= 3) ? 'rating-item-active' : '' }}" data-start="3"></label>
																<label class="rating-item fa fa-star {{ ($skill->rating != '' && $skill->rating >= 4) ? 'rating-item-active' : '' }}" data-start="4"></label>
																<label class="rating-item fa fa-star {{ ($skill->rating != '' && $skill->rating >= 5) ? 'rating-item-active' : '' }}" data-start="5">
																	<input class="rating-input" name="rating[]" type="hidden" value="{{ $skill->rating }}">
																</label>
															</div>
														</div>
													</div>
												<div class="pl-0 col-md-7"> 
													<div class="form-group placeholder-wrap  bold-FRFM no-label is-valid">
														<input type="text" tabindex="2" name="skill[]" class="form-control" autocomplete="Add your skills here." value="{{ $skill->skill }}">
													</div>
												</div>
												<a class="delete" href="javascript:;"><i class="fa fa-trash fa-lg" id="li_u_{{ $index }}"></i></a>
											</div>
											@endforeach
											@endif
										</div>
										<i class='fa fa-plus' id='add'>Add Skill</i>
										</div>	  
									</div>
									<div class="col-md-4" style="">
									   <center>
										  <strong>Showing Some popular skills</strong>
									   </center>
									   <ul class="examples-group" id="list" style="padding:0;height:450px; width:auto; overflow-y: scroll;">
										  <li class="examples-item" id = '1'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text"><span class="ttc_token" style="color:#0000ff">[Type]</span> components assembly</div>
										  </li>
										  <li class="examples-item"  id = '2'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text"><span class="ttc_token" style="color:#0000ff">[Type]</span> support</div>
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
											 <div class="example-text"><span class="ttc_token" style="color:#0000ff">[Type]</span> support</div>
										  </li>
										  <li class="examples-item "  id = '5'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Shelter arrangements</div>
										  </li>
										  <li class="examples-item "  id = '6'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Product testing</div>
										  </li>
										  <li class="examples-item "  id = '7'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Product testing</div>
										  </li>
										  <li class="examples-item "  id = '8'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Documentation review</div>
										  </li>
										  <li class="examples-item "  id = '9'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Shelter arrangements</div>
										  </li>
										  <li class="examples-item "  id = '10'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Documentation review</div>
										  </li>
										  <li class="examples-item "  id = '11'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Quality assurance controls</div>
										  </li>
										  <li class="examples-item "  id = '12'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Process Management</div>
										  </li>
										  <li class="examples-item "  id = '13'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Account Development</div>
										  </li>
										  <li class="examples-item "  id = '14'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Deviation correction</div>
										  </li>
										  <li class="examples-item "  id = '15'>
											 <div class="example-icon">
												<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
												
												</button>
											 </div>
											 <div class="example-text">Construction surveying</div>
										  </li>
									   </ul>
									</div>
								</div>
							   
							  <div class="row">
								<div class="col-12">
								  <a href="{{ route('admin.users.resume.edit', compact('id')) }}" class="btn btn-secondary">Cancel</a>
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
