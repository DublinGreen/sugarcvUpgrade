@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')


@section('content')
		
  <main id="main">
  <div class="col-md-12 col-lg-12" style="height:80px">
  </div>
	<!--==========================
      Services Section
    ============================-->
   <section id="services" class="section-bg">
      <div class="container">
	  <header class="section-header">
	  
       <h2>What did you do at job Title as a job</h2>
		 
				
        </header>
		<p>Get help writing your bullet points with the pre-written examples below.

</p>
		@if(isset($detail))
		<form action="{{ route('update-workhistory') }}" role="form"  method="post" accept-charset="UTF-8" >
		<input type="hidden" name="edit_id" value="{{$detail['id']}}">
		@else
	  <form action="{{ route('save-workhistory') }}" role="form"  method="post" accept-charset="UTF-8" >
		@endif
	  <div class="row about-container">       
		   <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="col-lg-8 " > 
		 <div class="container-fluid">
			<div class="row">
				
				
							<textarea id="txtEditor" class="form-control" name="txtEditor">
							
							@if(isset($detail))
							<ul>
							{!!htmlspecialchars_decode($detail['work_history'])!!}
							</ul>
							@endif
							</textarea> 
							<ul id='content'></ul>
						
					
			</div>
			</div>	  
		  </div>
		   <div class="col-md-4" style="height:450px; width:auto; overflow-y: scroll;">
		   <center><h4>Showing results for Job title</h4></center>
		   <ul class="examples-group" id="list_group">
		   
		   <li class="examples-item" id = '1'>
		   <div class="example-icon">
		   <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
		   <i class="icon-add fas fa-plus"></i>
		   </button>
		   </div>
		   <div class="example-text" >
		   Evaluated potential software products based on new and existing system development and migration requirements.
		   </div>
		   
		  
		   </li>
		   
		   <li class="examples-item"  id = '2'>
		   <div class="example-icon">
		   <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
		   <i class="icon-add fas fa-plus"></i>
		   </button>
		   </div>
		   <div class="example-text">
		  Maximized user flow in retail section of website.
		   </div>
		   </li>
		   
		   <li class="examples-item "  id = '3'>
		   <div class="example-icon">
		   <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
		   <i class="icon-add fas fa-plus"></i>
		   </button>
		   </div>
		   <div class="example-text">
		  Created and maintained web hosting account.
		   </div>
		   </li>
		   
		   <li class="examples-item "  id = '4'>
		   <div class="example-icon">
		   <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
		   <i class="icon-add fas fa-plus"></i>
		   </button>
		   </div>
		   <div class="example-text">
			Designed optimized and usable interfaces for financial applications.
		   </div>
		   </li>
		   
		   <li class="examples-item "  id = '5'>
		   <div class="example-icon">
		   <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
		   <i class="icon-add fas fa-plus"></i>
		   </button>
		   </div>
		   <div class="example-text">
		  Maintained site appearance by developing and enforcing content and display standards and editing submissions.
		   </div>
		   </li>
		   
		   <li class="examples-item "  id = '6'>
		   <div class="example-icon">
		   <button type="button" class="btn-icon btn-icon-primary rounded-circle  js-addttc">
		   <i class="icon-add fas fa-plus"></i>
		   </button>
		   </div>
		   <div class="example-text">
		  Procured, installed and repaired Windows workstations.
		   </div>
		   </li>		   
		   </ul>          
		</div>
		
			</div>
			<div class="" style="float:left"><a  class="btn btn-danger btn-lg" href="{{route('work-detail')}}">Back</a></div>
         <div class="" style="float:right"><button type="submit"   class="btn btn-success"  >Next Add Work Detail</button></div>
				
		
		
			</form>
			
			
			<!--div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content--
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div--->
	</section>  
    
  
  </main>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="{{ url('asset_new/editor/editor.js')}}"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
		<link href="{{ url('asset_new/editor/editor.css')}}" type="text/css" rel="stylesheet"/>
		
			<script>
		$(document).ready(function() {
        $("#txtEditor").Editor();
        $('form').submit(function () {
            $('#txtEditor').val($('#txtEditor').Editor('getText'));
        });
		
        $('#txtEditor').Editor('setText', $('#txtEditor').val());
			
		});
		</script>
	
		<script>
		
		jQuery(document).ready(function () {
			jQuery('#list_group li').click(function () {
				var parent = $(this).attr('id');
				var content = $("#"+parent+" .example-text").text();
				// var abc = $("#content").append( "<li class='li_"+parent+"'>"+content+"</li>" );
				
				if ($(this).hasClass('selected')) {
					
					$(this).removeClass('selected')
					jQuery("#content").find(".li_"+parent).remove();
				} else
				{
					
					 var news= $("#content").append( "<li class='li_"+parent+"'>"+content+"</li>" );
					 $(this).addClass('selected');
					 $("#txtEditor").Editor("setText", news)
				}
								
				
			}); 
		});
		</script>
			
  @section('template-css')
  <style>

	</style>
@endsection
  
@endsection
