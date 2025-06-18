@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Work Detail')

@push('after-styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('asset_new/lib/richeditor/richtext.min.css')}}">
 <style>
    .ui-datepicker-calendar {
        display: none;
    }

    .form-group .richText span {
        position: inherit;}
@media  screen and (max-width: 1654px) and (min-width:970px){
        span.text-danger.date-error {
    /* right: 7px; */
    left: 10px;
    TOP: 66PX;
    RIGHT: 33PX;
}
}
span.text-danger.date-error {
    TOP: 66PX;
    RIGHT: 33PX;
}
    </style>

@endpush

@push('after-scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="{{ url('assets/js/front/JavaScriptSpellCheck/include.js')}}"></script>
<script type="text/javascript">
function checkspell()
{
 $Spelling.SpellCheckInWindow('txtEditor');
}
</script>
<script>
jQuery(document).ready(function() {
	jQuery('#txtEditor').richText();
	$(".divShowHide").hide();
	$("#btnShowHide").click(function(){
		$('html,body').animate({
        scrollTop: $("#text_edit").offset().top - 100},
        'slow');
		$(".divShowHide").toggle();
	});
  $('.richText-toolbar ul').append("<li><a class='btn' onclick='checkspell();'><b>spellcheck</b></a></li>");
	setTimeout(function(){
		jQuery("#list_group .examples-item").each(function(){
			var _id = jQuery(this).attr('id');
			if(jQuery("#cli_" + _id).length){
				jQuery(this).addClass('selected');
			}
		});
	}, 300);

});
jQuery('#start_date, #end_date').datepicker({
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	dateFormat: 'MM yy',
	yearRange: "-50:+10",
	onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
				var startDate = new Date($('#start_date').val());
			var endDate = new Date($('#end_date').val());
			jQuery("span.date-error").remove();
			if (startDate > endDate){

			 jQuery("#end_date").after("<span class='text-danger date-error'>End Date should be after start date</span>");
			 jQuery('#end_date').val('');
			}
			}

});
var d = "";
jQuery("#start_date").click(function(){
	d = $(this).val();
	//alert(d);
$( "#start_date" ).datepicker('setDate',new Date(d));
jQuery('#start_date').datepicker({
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	dateFormat: 'MM yy',
	yearRange: "-50:+10",
	defaultDate:new Date(d),
	onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
			var startDate = new Date($('#start_date').val());
			var endDate = new Date($('#end_date').val());
			jQuery("span.date-error").remove();
			if (startDate > endDate){

			 jQuery("#end_date").after("<span class='text-danger date-error'>End Date should be after start date</span>");
			 jQuery('#end_date').val('');
			}
			}

});

});
var e = "";
jQuery("#end_date").click(function(){
	e = $(this).val();
//alert(e);
$( "#end_date" ).datepicker('setDate',new Date(e));
jQuery('#end_date').datepicker({
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	dateFormat: 'MM yy',
	yearRange: "-50:+10",
	defaultDate:new Date(e),
	onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
			var startDate = new Date($('#start_date').val());
			var endDate = new Date($('#end_date').val());
			jQuery("span.date-error").remove();
			if (startDate > endDate){

			 jQuery("#end_date").after("<span class='text-danger date-error'>End Date should be after start date</span>");
			 jQuery('#end_date').val('');
			}
			}

});
});
/*jQuery('#start_date, #end_date').datepicker({
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	dateFormat: 'MM yy',
	yearRange: "-50:+10",
	onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }

});*/

@if((isset($detail->current) && $detail->current == 1 ))
$( "#current_att" ).trigger( "click" );
setTimeout(function(){ $( "#current_att" ).trigger( "click" ); }, 500);

@endif

jQuery("#education").click(function(){
		var er = false;
		//var name = $("#name"). val();

			jQuery(".form-control.required").siblings(".validation").text("");
					jQuery(".form-control.required").each(function(){
						var ele = $(this);
						if(ele.val() == ""){
							$(this).siblings(".validation").text("This field is required.");
							er = true;
						}
					});
					if(er){
						return false;
					}


	});
	jQuery(".fit-content").blur(function(){
		var d = jQuery(this).val();

		if(d != ''){
			jQuery(this).after('<span class="fa fa-check success-icon"></span>');

		}
	});
	jQuery('#current_att').click(function() {
	var endat = $('#end_date').val();
	var d = $.datepicker.formatDate('MM yy', new Date());

	if ($(this).is(":checked")){
    $("#end_date").nextAll("span").remove();


jQuery("#end_date").removeClass("required");
	   $('#end_date').val('');
     $('#end_date').prop('disabled',true);
      jQuery("#end_date").css("background-color","#ced4da");
	   var startDate = new Date($('#start_date').val());
			var endDate = new Date($('#end_date').val());
			jQuery("span.date-error").remove();
			if (startDate > endDate){

			 jQuery("#end_date").after("<span class='text-danger date-error'>End Date should be after start date</span>");
			 jQuery('#end_date').val('');
			}
	}
	else
{
  $('#end_date').prop('disabled',false);
		$('#end_date').val(endat);
    	  jQuery("#end_date").css("background-color","#ffff");
         jQuery("#end_date").addClass("required");
	}
});

jQuery('#degreeName').on('change', function() {
  var valCheck = this.value;
  if( valCheck == 'Others' ){
	jQuery('#displayDegree').show();
	jQuery('#degreeName').removeAttr('name');
	jQuery('#displayDegree input').attr('name', 'degree');
  } else {
	jQuery('#displayDegree').hide();
	jQuery('#degreeName').attr('name', 'degree');
	jQuery('#displayDegree input').removeAttr('name');
  }
});
</script>
<script src="{{ url('asset_new/lib/richeditor/jquery.richtext.js')}}"></script>

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
	  <header class="section-header">


       </header>

	  <div class="row about-container">

          <div class="col-lg-9 mx-auto" >

		  <h2>Tell us about your education</h2>
		  <h4><b>Include every school, even if you're still there or didn't graduate.</b></h4>
		<div class="col-sm-8 error msg_div"></div>
	@if(isset($detail))
		<form class="action-form" http-type="post" method="post" data-url="{{ route('updateEducation',['id' => $detail->id]) }}">
	@else
		<form class="action-form" http-type="post" method="post" data-url="{{ route('save-educationdata') }}">
	@endif
		   <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-row">
			   <div class="form-group col-lg-6">
				  <label for="email">School Name*</label>
				  <input type="text" name="school_name" class="form-control fit-content required" id="name" placeholder="" data-rule="minlen:2" data-msg="Please enter Job Title " value="{{isset($detail->school_name)? $detail->school_name:''}}" />
				  <div class="validation"></div>
			   </div>
			   <div class="form-group col-lg-6">
				  <label for="email">School Location*</label>
				  <input type="text" class="form-control required fit-content" name="school_location"  placeholder="" placeholder="" data-rule="minlen:1" data-msg="Please enter Employer name" value="{{isset($detail->school_location)? $detail->school_location:''}}" />
				  <div class="validation"></div>
			   </div>
			</div>
			<div class="form-row">
			   <div class="form-group col-lg-6">
				  <label for="email">Degree*</label>
				  <?php
					// $degree = ['High School Diploma', 'GED', 'Associate of Arts', 'Associate of Science', 'Associate of Applied Science', 'Bachelor of Science'];
					$degree = ['Bachelor of Science (BSc)', 'Bachelor of Arts (B.A)', 'Bachelor of Education (B.Ed)', 'Bachelor of Pharmacy (B.Pharm)', 'LLB', 'Master of Science (MSc)', 'MBA', 'LLM', 'PhD', 'Doctorate Degree', 'Others'];
				  ?>
				  <select class="form-control required" name="degree" id="degreeName">
					<option value="">Select</option>
					@foreach($degree as $dgre)
						<option {{ (isset($detail->degree) && $detail->degree == $dgre) ? 'selected' : '' }}>{{ $dgre }}</option>
					@endforeach
				  </select>
				  <div class="validation"></div>
			   </div>
			   <div class="form-group col-lg-6" style="display:none" id="displayDegree">
				  <label for="email">Enter Degree</label>
				  <input type="text" class="form-control fit-content" placeholder="" data-rule="minlen:1">

			   </div>
			</div>
			<div class="form-row">
			   <div class="form-group col-lg-6">
				  <label for="date">Field of Study*</label>
				  <input type="text" class="form-control fit-content required" name="study_field"  value="{{isset($detail->study_field)? $detail->study_field:''}}" >
				  <div class="validation"></div>
			   </div>
			   <div class="form-group col-lg-3">
				  <label for="email">Graduation Start Date*</label>
				  <input type="text" class="form-control fit-content required" name="start_date" id="start_date" readonly value="{{isset($detail->graduation_start_date)? $detail->graduation_start_date:''}}" >
				  <div class="validation"></div>
			   </div>
			   <div class="form-group col-lg-3">
				  <label for="email">Graduation End Date*</label>
				  <input type="text" class="form-control fit-content required" name="end_date" id="end_date" readonly value="{{isset($detail->graduation_end_date)? $detail->graduation_end_date:''}}" >
				  <div class="validation"></div>
			   </div>
			</div>
			<div class="form-row">
			   <div class="form-group col-lg-6">
			   </div>
			   <div class="form-group col-lg-6">
				<input class="required" type="checkbox" name="current_att" id="current_att" {{ (isset($detail->current) && $detail->current == 1 ) ? 'checked' :'' }} />
				<label for="current_att"> I currently attend here</label>
			   </div>
			</div>
			<div class="form-row">
			   <span style="color: #007bff;">+</span> &nbsp; <a href="javascript:void(0)"  id="btnShowHide">  Add a description to this section</a>
			   <br><br>
			</div>
			<div class="form-row">
			   <div class="form-group col-lg-12"  id="text_edit">
				  <div class="row divShowHide">
					 <div class="col-lg-8 " >
						  <textarea  class="form-control" id="txtEditor" name="txtEditor">
							@if(isset($detail))
							{!! isset($detail['description'])? $detail->description:'' !!}
							@endif
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
							  <div class="example-text">Majored in [Subject]
							  </div>
						   </li>
						   <li class="examples-item"  id = '2'>
							  <div class="example-icon">
								 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
								 </button>
							  </div>
							  <div class="example-text">Elected to [Elected Position] for  in [Year]</div>
						   </li>
						   <li class="examples-item "  id = '3'>
							  <div class="example-icon">
								 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
								 </button>
							  </div>
							  <div class="example-text">Dissertation: [Name of Dissertation]</div>
						   </li>
						   <li class="examples-item "  id = '4'>
							  <div class="example-icon">
								 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
								 </button>
							  </div>
							  <div class="example-text">Graduated in Top [Number] of Class</div>
						   </li>
						   <li class="examples-item "  id = '5'>
							  <div class="example-icon">
								 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
								 </button>
							  </div>
							  <div class="example-text">Recipient of [Scholarship Name] Scholarship</div>
						   </li>
						   <li class="examples-item "  id = '6'>
							  <div class="example-icon">
								 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
								 </button>
							  </div>
							  <div class="example-text">Awarded [Award Name]</div>
						   </li>
						   <li class="examples-item "  id = '7'>
							  <div class="example-icon">
								 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
								 </button>
							  </div>
							  <div class="example-text">Graduated with [Number] GPA</div>
						   </li>
						   <li class="examples-item "  id = '8'>
							  <div class="example-icon">
								 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
								 </button>
							  </div>
							  <div class="example-text">Member of [Honor's Society Name]</div>
						   </li>
						   <li class="examples-item "  id = '9'>
							  <div class="example-icon">
								 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
								 </button>
							  </div>
							  <div class="example-text">Dean's List [Semester and Year]</div>
						   </li>
						   <li class="examples-item "  id = '10'>
							  <div class="example-icon">
								 <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
								 </button>
							  </div>
							  <div class="example-text">Member of [Student Organization or Club Name]</div>
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
				  </div><!-- div show hide--->
			   </div><!--- form group---->
			</div>	<!--- form row--->

			@if(\Request::has('edit'))
				<input type="hidden" name="id" value="{{ \Request::input('edit') }}" />
				<input type="hidden" name="redirect" value="{{ route('editEducationList', ['id' => \Request::input('edit')]) }}" />
			@endif
				<br>
				<div class="" style="float:left"><a  class="c-btn btn-default btn-back" href="{{route('education-detail')}}">Back</a></div>
                <div class="" style="float:right"><button type="submit"   class="c-btn btn-success" title="" id="education">Save & Next </button></div>

              </form>
		  </div>
		@if(isset($detail))
		<script>
		function next(){
			window.location.href = "{{url('work-expr/'.$detail['id'])}}";
		}
		</script>
		@else
		<script>
		function next(){
			window.location.href = "{{url('work-expr')}}";
		}
		</script>


		@endif

		<!------div class="row about-container">
			<div class="col-md-6 col-lg-6 col-sm-12">
			<center><button class ="btn btn-danger btn-lg" href="">Back</button></center>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12">
			<center><button class ="btn btn-success btn-lg" class="submit-form"  href="javascript:void(0)" >Next</button></center>
			</div>
			</div------>
		</div>
	</div>

	</section>
  </main>
@endsection
