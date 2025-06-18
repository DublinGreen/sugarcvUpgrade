@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')

@push('after-styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('asset_new/lib/richeditor/richtext.min.css')}}">
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
jQuery(document).ready(function() {
	jQuery('.summary').richText() ;
    $('.richText-toolbar ul').append("<li><a class='btn' onclick='checkspell();'><b>spellcheck</b></a></li>");
    $(".fa-font").on("click",function(){
      // alert("e");
      $(this).parent('a').parent('li').addClass('is-selected');
    });
});
</script>
<script>
$(document).ready(function(){

  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#list_group li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script src="{{ url('asset_new/lib/richeditor/jquery.richtext.js?v=1.0')}}"></script>
<script src="{{ url('assets/js/front/JavaScriptSpellCheck/include.js')}}"></script>
<script type="text/javascript">
function checkspell()
{
 $Spelling.SpellCheckInWindow('summary');
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
 <form class="action-form" role="form" http-type="post" method="post" data-url="{{ route('save-summary') }}">
	<section id="editor">
		<div class="container">
		   <div class="row about-container">
			  <div class="col-lg-9 mx-auto" >
				 <div class="col-sm-8 error msg_div"></div>
				 <strong>Briefly tell us about your background</strong>
				 <p>Get help writing your bullet points with the pre-written examples below.</p>
				 <div class="row">
				<div class="col-lg-8">
					<textarea class="summary" name="summary">{!! isset($detail['summary'])? $detail->summary:'' !!}</textarea>
				</div>
				<div class="col-md-4" >
				   <center>
					  <strong>Showing results for summary</strong>
					  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Summary.." title="Enter Text">
				   </center>
				   <ul class="examples-group" id="list_group" style="height:347px; width:auto; overflow-y: scroll;">
				   <?php
				   $sr='1';
				   ?>
				   @foreach($summary as $summaries)
				    <li class="examples-item" id = '{{$sr}}'>
						 <div class="example-icon">
							<button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
							</button>
						 </div>
						 <div class="example-text" >
						 {{$summaries->name}}
						 </div>
					  </li>
				   <?php $sr++;?>
				   @endforeach

					  <!---li class="examples-item"  id = '2'>
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
					  </li-->
				   </ul>
				</div>
				</div>
				@if(isset($edit))
					<div class="" style="float:right"><button type="submit" class="c-btn btn-success btn-lg" title="Send Message" >NEXT: EXTRA SECTIONS</button></div>
				@else
					<div class="" style="float:left"><a id="back-step" class="c-btn btn-default btn-back" href="{{route('summary')}}">Back</a></div>
				<div class="" style="float:right"><button type="submit" class="c-btn btn-success btn-lg" title="Send Message" >NEXT: EXTRA SECTIONS</button></div>
				@endif


			  </div>
			</div>
		</div>
	</section>
	@if(isset($edit))
		<input type="hidden" name="id" value="{{ $edit }}" />
	@endif
	</form>

</main>

@endsection
