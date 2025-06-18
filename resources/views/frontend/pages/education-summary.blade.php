@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')

@push('after-scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(function(){
	$( ".expr-list" ).sortable({
    stop: function(event, ui) {
		var data = [];
        jQuery(".work-list").each(function(index){
		   var wList=jQuery(this);
		   var id = wList.data("id");
		   wList.find(".para-count").text(index+1);
		   data.push({"id":id, "position":index+1});
		});
		console.log(data);
		data = JSON.stringify(data);
		jQuery.ajax({
			url:"<?php echo route('orderEducation') ?>",
			type:"POST",
			data:{sort:data},
			success:function(result){
				console.log(result);
			}
		});
    }
});
	$( ".expr-list" ).disableSelection();
	
	jQuery(".deleteHistory").click(function(){
		var id = jQuery(this).data("id");
		console.log(id);
		jQuery("#hiddenId").val(id);
	});
});
</script>
@endpush

@section('content')

  <main id="main">
  
	<!--==========================
      Services Section
    ============================-->
   <section id="services" >
   <div class="col-md-12 col-lg-12" style="height:130px">
  </div>
      <div class="container">
	  <header class="section-header">
          <h2>Education Summary</h2>
      
        </header>
	  
	 <div class="row about-container">
		@if($errors->any())
		<div class="col-sm-8 error msg_div">
			<div class="alert alert-success" role="alert">
			  {{$errors->first()}}
			</div>
		</div>
		@endif
		
		@php
			$i=1;
		@endphp
		<div class="expr-list" style="width:100%;">
        @foreach($summary as $sumry)
			<div class="col-lg-12 work-list" data-id="{{ $sumry->id }}">
				  <div class="para-item">
					 <div class="para-head">
						<span class="para-count para-count-1">{{$i}}
						</span>
						<h5 class="para-title h5">{{$sumry->degree}}</h5>
						<p class="para-s-title"> {{$sumry->study_field}} | {{$sumry->school_name}}-{{$sumry->school_location}} | {{ date('M, Y',strtotime($sumry->graduation_start_date)) }} - {{ $sumry->current == '1' ? 'Current' : date('M, Y', strtotime($sumry->graduation_end_date)) }} </p>
					 </div>
					 <div class="para-info bottom-shadow">
						<ul>
						   {!!html_entity_decode($sumry->description)!!}
						</ul>
					 </div>
						@php
							$attr = isset($edit) ? [ 'id' => $sumry->id, 'edit' => $edit ] : [ 'id' => $sumry->id ];
						@endphp
					 <div class="para-toolbar">
						<a id="iconEdit" href="{{ route('editEducation',$attr) }}" class="" title="Edit"><i class="fa fa-pencil fs-16"></i></a>
						<a class="deleteHistory" tabindex data-toggle="modal" data-target="#deleteWorkHistory" data-id="{{ $sumry->id }}" title="Delete"><i class="fa fa-trash"></i></a>
						<span href="javascript:void(0);" class="" id="iconDrag" title="Move"><i class="fa fa-arrows fs-16"></i>
						</span>
					 </div>
				  </div>
			</div>
			@php
				$i++
			@endphp
		  @endforeach
		  </div>
			@php
				$attr = isset($edit) ? [ 'edit' => $edit ] : [ ];
			@endphp
		  <div class="col-lg-12" > 
			  <a class="btn btn-block btn-block-add" href="{{route('enter-education-detail', $attr)}}"id="btn_expr_addanother" type="button"><i class="fa fa-plus-circle icon-plus"></i>ADD ANOTHER DEGREE</a>
		  </div>
		  <p>&nbsp;</p>
          <div class="col-lg-12" > 
			@if(isset($edit))
				<div class="" style="float:right"><a href="{{url('final-resume/'.$edit)}}"  class="c-btn btn-success btn-lg" title="" >Next: Skill</a></div>
			@else
				<div class="" style="float:left"><a class="c-btn btn-default btn-back" href="{{route('education-detail')}}">Back</a></div>
				<div class="" style="float:right"><a href="{{url('skills')}}"  class="c-btn btn-success btn-lg" title="" >Next: Skill</a></div>
			@endif
			
			
		  </div>
		 
	</div>
	</div>
	
	</section> 
	
	<!-- Modal -->
	<div class="custom-modal modal fade" id="deleteWorkHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	  <form action="{{ route('deleteEducation') }}" method="post" >
		<div class="modal-content">
		  <div class="modal-body">
			<p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</p>
			<div class="model-main-content">
				<h4 class="text-center">Are you sure</h4>
				<p>You want to delete this entry?</p>
			</div>
		  </div>
		  <div class="modal-footer">
			<a class="c-btn btn-default btn-back" data-dismiss="modal">Cancel</a>
			<button type="submit" class="c-btn btn-danger btn-lg">Yes, Delete Entry</button>
		  </div>
		</div>
		@if(isset($id))
		<input type="hidden"  name="next" value="next" />
		@endif
		<input type="hidden" id="hiddenId" name="edu_id" />
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  </form>
	  </div>
	</div>
    
  <style>
  .para-item {
    position: relative;
    border: 1px solid #e8ecf0;
    cursor: pointer;
    display: block;
    padding: 20px 115px 0 60px;
    margin-bottom: 20px;
    height: auto;
    background-color: #fff;
}

.para-count {
    color: #fff;
    font-size: 15px;
    font-weight: 600;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    text-indent: 9px;
    line-height: 30px;
}

.para-count-1:before {
    border-top-color: #266cb4;
}
.para-count:before {
    content: '';
    position: absolute;
    left: 0;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 47px 47px 0 0;
    border-color: #007bff rgba(0,0,0,0) rgba(0,0,0,0) rgba(0,0,0,0);
    z-index: -1;
}

.para-title, .para-s-title {
    font-size: 14px;
    line-height: 1.2em;
    display: inline-block !important;
    margin-bottom: 0;
}

.para-title {
    font-weight: 600;
    font-family: "Source Sans Pro",Arial,sans-serif;
    color: #58585f;
}

.para-s-title:before {
    content: "|";
    padding: 0 5px;
}
.para-info.bottom-shadow:after {
    content: '';
    position: absolute;
    width: 100%;
    left: 0;
    margin: 0;
    bottom: 0;
    background-image: linear-gradient(to bottom, rgba(252,252,252,0) 0%, #fcfcfc 60%);
    height: 45px;
}

.para-info {
    color: #706668;
    font-size: 12px;
    font-weight: 400;
    line-height: 17px;
    overflow: hidden;
    padding: 2rem 0;
    max-height: 10.5rem;
}
.para-toolbar {
    position: absolute;
    top: 9px;
    right: 10px;
}
  </style>
  </main>
@endsection
