@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Work Detail')

@push('after-styles')
<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('asset_new/lib/richeditor/richtext.min.css')}}">

@endpush
<style>span.text-danger.date-error {
    TOP: 65PX;
}
</style>
@push('after-scripts')
<!--script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script-->
<script>
$(document).ready(function(){

	if(jQuery('#is_current').prop('checked') == true){
		$('#end_date').prop('disabled',true);
		$('#end_date').val('');
			 jQuery("#end_date").css("background-color","#ced4da");
			  jQuery("#end_date").removeClass("required");
	}
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#list_group li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>

jQuery('#start_date, #end_date').datepicker({
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	dateFormat: 'yy-mm-dd',
	autoclose: true

}).on('change', function(){
	$('.datepicker-dropdown').addClass('datepicker-hide');
		var startDate = new Date($('#start_date').val());
var endDate = new Date($('#end_date').val());
$("span.date-error").remove();
if (startDate > endDate){

 $("#end_date").after("<span class='text-danger date-error'>End Date should be after start date</span>");
 $('#end_date').val('');
}
});

jQuery('#start_date').datepicker({
	minDate:0,
    yearRange: "-100:+20",

});
var countries = ['Application Developer','Artificial Intelligence Engineer','Computer Programmer','Developer','Marketing Manager','Senior Developer','Senior Tester','Software Engineer','Technical Specialist','Web Designer','Web Developer'];
jQuery(document).ready(function() {
	autocomplete(document.getElementById("name"), countries);
	  	jQuery('.work_expr').richText();
			$('.richText-toolbar ul').append("<li><a class='btn' onclick='checkspell();'><b>spellcheck</b></a></li>")

	jQuery("#next-step").click(function(){
		var er = false;
		//var name = $("#name"). val();
		if(!$("#name").val())
		{
			 $('#skippop').modal('show');
				jQuery("#services").show();
				jQuery("#editor").hide();
		}else{
			jQuery(".form-control.required").siblings(".validation").text("");
		$("#job-title").text($('#name').val());
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
					jQuery("#services").hide();
				jQuery("#editor").show();
		}
		//call the function and update the work detail section
		var job_title=$("#name").val();
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_t"]').attr('content')
			},
			url			:	"{{ route('work-detail') }}",
			type		:	"get",
			data		:	{category_id:job_title},
			contentType: "application/json; charset=utf-8",
			success:function(response){
				var data=jQuery.parseJSON(response);
				var html=``;
				$('#list_group').empty() ;
				 console.log(data[0]);
				 for (i = 0; i < data.length; ++i) {
					 var j=i+1;
    html+=`<li class="examples-item" id = '`+j+`'>
								 <div class="example-icon">
									<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
									</button>
								 </div>
								 <div class="example-text" >
								 `+data[i].job_title+`
								 </div>
							  </li>`;
}
//console.log(html);
$('#list_group').append(html);
			//	 location.reload();
			// $.each(response, function(index) {
			// 	console.log(response[index]);
			//
			//  });
			}
		});
	});

	// jQuery(".fit-content").blur(function(){
		// var d = jQuery(this).val();

		// if(d != ''){
			// jQuery(this).after('<span class="fa fa-check success-icon"></span>');

		// }
	// });

		jQuery("#back-step").click(function(){
		jQuery("#services").show();
		jQuery("#editor").hide();
		});

	jQuery("#skip-step").click(function(){
		jQuery("#services").hide();
		jQuery("#editor").show();
		$('#skippop').modal('hide');
	});
	setTimeout(function(){
		jQuery("#list_group .examples-item").each(function(){
			var _id = jQuery(this).attr('id');
			if(jQuery("#cli_" + _id).length){
				jQuery(this).addClass('selected');
				// jQuery("#cli_" + _id).attr('contenteditable',false);
			}
		});
	}, 300);

	jQuery("#is_current").click(function(){
		if(jQuery(this).prop('checked') == true){
			 jQuery("#end_date").val("<?php echo date('m/d/Y') ?>");
			 jQuery("#end_date").css("background-color","#ced4da");
			  jQuery("#end_date").removeClass("required");
			var startDate = new Date($('#start_date').val());
			var endDate = new Date($('#end_date').val());
			jQuery("span.date-error").remove();
          $("#end_date").nextAll("span").remove();
			if (startDate > endDate){

			 jQuery("#end_date").after("<span class='text-danger date-error'>End Date should be after start date</span>");
			 jQuery('#end_date').val('');
			}
jQuery('#end_date').val('');
			jQuery("#end_date").attr("disabled", true)
			jQuery("#end_date").css('pointer-event', 'none');
		}else{
			 jQuery("#end_date").val('');
			jQuery("#end_date").attr("disabled", false)
			 jQuery("#end_date").addClass("required");
			  jQuery("#end_date").css("background-color","#ffff");
		}
	});
});
</script>
<script src="{{ url('asset_new/lib/richeditor/jquery.richtext.js')}}"></script>
<script src="{{ url('assets/js/front/JavaScriptSpellCheck/include.js')}}"></script>
<script type="text/javascript">
function checkspell()
{
 $Spelling.SpellCheckInWindow('work_expr');
}
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
}
</script>
@endpush


@section('content')
<style>
/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
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
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9;
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important;
  color: #ffffff;
}
</style>

<main id="main">
   <div class="col-md-12 col-lg-12" style="height:80px">
   </div>
   <!--==========================
      Services Section
      ============================-->

 @if(isset($detail))
 <form class="action-form" role="form" http-type="post" method="post" data-url="{{ route('edit-workdetail',['id' => $detail['id']]) }}">
	@else
 <form autocomplete="off" class="action-form" role="form" http-type="post" method="post" data-url="{{ route('save-workdetail') }}">
	@endif
   <section id="services">
   <div class="container">
   <div class="row about-container">
      <div class="col-lg-9 mx-auto" >
         <bR><br>
         <div class="col-sm-8 error msg_div"></div>
         <h2>Tell us about your most recent job</h2>
         <h4><b>We’ll start there and work backward.</b></h4>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-row">
               <div class="form-group col-lg-6 autocomplete" style="width:200px;">
                  <label for="email">Job Title*</label>
                  <input type="text" name="job_title"  class="form-control fit-work-content required" id="name" data-rule="minlen:2" data-msg="Please enter Job Title " value="{{isset($detail['job_title'])? $detail->job_title:''}}" />

									<div class="validation"></div>
               </div>
               <div class="form-group col-lg-6">
                  <label for="email">Employer*</label>
                  <input type="text" class="form-control fit-work-content required" name="employer" data-rule="minlen:1" data-msg="Please enter Employer name" value="{{isset($detail['employer'])? $detail->employer:''}}" />
                  <div class="validation"></div>
               </div>
            </div>
            <div class="form-row">

               <div class="form-group col-lg-6">
                  <label for="email">State*</label>
                  <input type="text" class="form-control fit-work-content required" name="state" data-msg="Please enter a  State" value="{{isset($detail['state'])? $detail->state:''}}" / >
                  <div class="validation"></div>
               </div>
			    <div class="form-group col-lg-6">
                  <label for="Country">Country*</label>
                  <input type="text" class="form-control fit-work-content required" name="country" data-rule="minlen:10" data-msg=""  value="{{isset($detail['country'])? $detail->country:''}}"/ >
                  <div class="validation"></div>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-lg-6">
                  <label for="date">Start Date*</label>
                  <input type="text" class="form-control fit-work-content required" name="start_date" id="start_date" readonly  value="{{isset($detail['start_date'])? date('Y-m-d',strtotime($detail->start_date)):''}}" >
                  <div class="validation"></div>
               </div>
               <div class="form-group col-lg-6">
                  <label for="email">End Date*</label>
                  <input type="text" class="form-control fit-work-content required" name="end_date" id="end_date"  value="{{isset($detail['end_date'])? date('Y-m-d', strtotime($detail->end_date)):''}}" >
                  <div class="validation"></div>
               </div>
            </div>
			<div class="form-row">
			   <div class="form-group col-lg-6">
			   </div>
			   <div class="form-group col-lg-6">
				<input class="required" type="checkbox" name="is_current" id="is_current" {{ (isset($detail->is_current) && $detail->is_current == 1 ) ? 'checked' :'' }} />
				<label for="is_current"> I currently work here</label>
			   </div>
			</div>

            <div class="" style="float:left"><a  class="c-btn btn-default btn-back" href="{{route('work-history')}}">Back</a></div>
            <div class="" style="float:right"><a href="#" id="next-step"  class="c-btn btn-success btn-lg" title="" >NEXT: ADD WORK DETAILS</a></div>

      </div>
   </div>
   </section>

	<section id="editor" style="display:none;">
		<div class="container">
		   <div class="row about-container">
			  <div class="col-lg-9 mx-auto" >
				 <div class="col-sm-8 error msg_div"></div>
				 <h2>Tell us about your most recent job</h2>
				 <h4><b>We’ll start there and work backward.</b></h4>
				 <div class="row">
				<div class="col-lg-8">
					<textarea class="work_expr" name="work_expr">{!! isset($detail['work_history'])? $detail->work_history:'' !!}</textarea>
				</div>
				<div class="col-md-4" >
					<center>
 					 <strong>Showing results for <span id="job-title">Job title</span></strong>
 					<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Job title.." title="Enter Text">
 				 </center>
				   <ul class="examples-group" id="list_group" style="height:347px; width:auto; overflow-y: scroll;">
				   @if(isset($work_job))

				   <?php
				   $no = '1';
				   ?>
				   @foreach($work_job as $work)
					   <li class="examples-item" id = '{{$no}}'>
						 <div class="example-icon">
							<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
							</button>
						 </div>
						 <div class="example-text" >
						 {{$work->job_title}}
						 </div>
					  </li>
					<?php $no++; ?>
					 @endforeach
					@endif


				   </ul>
				</div>
				</div>
				<div class="" style="float:left"><a id="back-step" class="c-btn btn-default btn-back" href="#">Back</a></div>
				<div class="" style="float:right"><button type="submit" class="c-btn btn-success btn-lg" title="" >NEXT: ADD WORK DETAILS</button></div>

			  </div>
			</div>
		</div>
	</section>
	@if(\Request::has('edit'))
		<input type="hidden" name="id" value="{{ \Request::input('edit') }}" />
		<input type="hidden" name="redirect" value="{{ route('editExprList', ['id' => \Request::input('edit')]) }}" />
	@endif
	</form>

		<div class="custom-modal modal fade" id="skippop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			  <form action="" method="post" >
				<div class="modal-content" >
				  <div class="modal-body">
					<p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					</p>
					<div class="model-main-content" style="margin:0px 45px !important">
						<center>
						<img src="{{url('/asset_new/img/logo/model.png')}}" class="img-fliud">
						<h4>Do you want to leave this section blank?</h4>
						<p style="font-size:15px">
							It's okay to include part-time or unofficial jobs too. Here are some titles we've seen other users like you add:

						</p></center>
						<div class="col-md-5 col-sm-5 col-xs-5" style="float:left">
						<ul style="font-size:15px">
								<li>Volunteer</li>
								<li>Tutor</li>
								<li>Babysitter</li>
								<li>Dogwalker</li>
						</ul>
						</div>
						<div class="col-md-7 col-sm-7 col-xs-7" style="float:left">
						<ul style="font-size:15px">
								<li>Teaching Assistant</li>
								<li>Office Helper</li>
								<li>Work Study</li>
								<li>Data Entry Clerk</li>
						</ul>
						</div>
					</div>
				  </div>
				  <div class="modal-footer">
					<a class="c-btn btn-default btn-back" data-dismiss="modal">Add A TITLE</a>

					<a id="skip-step" class="c-btn btn-danger btn-back" href="#">SKIP FOR NOW</a>

				  </div>
				</div>
				<input type="hidden" id="hiddenId" name="id" />
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  </form>
			  </div>
			</div>
</main>
@endsection
