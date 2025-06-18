@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')
@push('after-styles')

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
@endpush
@push('after-scripts')
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#list li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
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
			jQuery(".bold-FRFM input").filter(function(){return this.value==content}).parents('.add-delete-row').remove();
		} else{
			 
			 var news= $("#content").append( '<div class="row add-delete-row li_'+parent+'"> <div class="col-md-4 text-center"><div class="rating-container"><a href="javascript:;" class="rating-reset fa fa-minus-circle"></a><div class="rating"><label class="rating-item fa fa-star " data-start="1"></label><label class="rating-item fa fa-star " data-start="2"></label><label class="rating-item fa fa-star " data-start="3"></label><label class="rating-item fa fa-star " data-start="4"></label><label class="rating-item fa fa-star " data-start="5"><input class="rating-input" name="rating[]" type="hidden"></label></div></div></div><div class="pl-0 col-md-7"> <div class="form-group placeholder-wrap  bold-FRFM no-label is-valid"><input type="text" tabindex="2" name="skill[]" class="form-control" autocomplete="Add your skills here." value="'+content+'"></div></div><a class="delete" href="javascript:;"><i class="fa fa-trash fa-lg" id="c_'+parent+'"></i></a></div>' );
			 $(this).addClass('selected');
		}
		jQuery('#li_'+parent, '#li_u_'+parent).click(function () {
			$(this).removeClass('selected')
			jQuery("#content").find(".li_"+parent).remove();
			jQuery("#content").find(".li_u_"+parent).remove();
		
		});
	}); 
	
	jQuery("#content").on("click", ".delete",function(){
	var clas =	jQuery(this).children("i").attr('id');
	var x =	jQuery(this).parent().find('.bold-FRFM input').val();
	var y = $('#list li .example-text:contains("'+ x+'")').text();

	if(x == y){
		$('#list li .example-text:contains("'+ x+'")').parent('li').removeClass('selected');
	}
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
	
	setTimeout(function(){
		jQuery(".bold-FRFM input").each(function(){
			var _txt = jQuery(this).val();
			jQuery("#list .examples-item .example-text").each(function(){
				if(jQuery(this).text().trim() == _txt){
					jQuery(this).parent('.examples-item').addClass('selected');
				}
			});
		});
	},300);
		
});
/*function validateForm(form){
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
}*/
function find_duplicate_in_array(arra1) {
        var object = {};
        var result = [];

        arra1.forEach(function (item) {
          if(!object[item])
              object[item] = 0;
            object[item] += 1;
        })

        for (var prop in object) {
           if(object[prop] >= 2) {
               result.push(prop);
           }
        }
return result;

    }

    
function validateForm(form){
	var err = false;
	jQuery('input[name*="skill"]').each(function(){
		var ele = jQuery(this);
		if(ele.val() == ""){
			ele.focus();
			err = true;
		}
	});
	var arr = $('input[name="skill[]"]').map(function () {
    return this.value;
}).get();
       var x =  find_duplicate_in_array(arr);
	if(x != ''){
		alert('Duplicate Skill');
		return false;
	}
		
	if(err){
		return false;
	}else{
		return true;
	}
}

</script>		
@endpush

@section('content')
		
  <main id="main">
  <div class="col-md-12 col-lg-12" style="height:80px">
  </div>
	<!--==========================
      Services Section
    ============================-->
   <section id="editor">
      <div class="container">
		<div class="row about-container">
			<div class="col-lg-11 mx-auto" >
				<div class="col-sm-8 error msg_div"></div>
				<h2>What skills do you want to highlight?</h2>
				<p>Use our expert recommendations below to get started.</p>
				  <form action="{{ route('save-skills') }}" role="form"  method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)" >
					
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
							<i class='fa fa-plus' id='add'><span class="ml-1">Add Skill</span></i>
							</div>	  
						</div>
						@if(isset($Skills_detail) && $Skills_detail->count())
						<div class="col-md-4" style="">
						   <center>
							  <strong>Showing Some popular skills</strong>
							  <input class="mt-2" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Skills" title="Enter Text">
						   </center>
						   <ul class="examples-group" id="list" style="padding:0;height:450px; width:auto; overflow-y: scroll;">
						   
				   
						   <?php 
						   $no = '1';
						   ?>
						   @foreach($Skills_detail as $skill_single)
							  <li class="examples-item" id = '{{$no}}'>
								 <div class="example-icon">
									<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
									
									</button>
								 </div>
								 <div class="example-text">{{$skill_single->skill_name}}</div>
							  </li>
							  @php $no++;@endphp
							@endforeach  
						   </ul>
						</div>
						@endif	
					</div>
					<br><br>
					@if(isset($edit))
						<input type="hidden" value="{{ $edit }}" name="id" />
					<div class="" style="float:right">
						<button type="submit" class="c-btn btn-success btn-lg" >Next: Summary</button>
					</div>
					@else
						<div class="" style="float:left">
					<a class="c-btn btn-default btn-back" href="{{route('skills')}}">Back</a></div>
					<div class="" style="float:right">
						<button type="submit" class="c-btn btn-success btn-lg" >Next: Summary</button>
					</div>
					@endif
					
					
			</form>

			</div>
		</div>
	  </div>
	</section>  
    
  
  </main>
			
  @section('template-css')
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

a {
  color: tomato;
  text-decoration: none;
}

a:hover {
  color: #2196f3;
}

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

	</style>
	
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
@endsection
  
@endsection
