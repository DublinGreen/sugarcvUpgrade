@extends('frontend.templates.logged-main')

@section('body-classes','page-template page-template-page-tpl_recover_password page-template-page-tpl_recover_password-php page page-id-38145 small-sticky-half logged-out')

@section('page-title','Create resume')

@push('after-scripts')
<script>
window.resume = {!! !empty($resume) ? $resume->toJson() : '[]' !!};
syncTemplate();

jQuery("#next-work").click(function(){
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
jQuery('#dateob').datepicker({
	changeMonth: true,
	changeYear: true,
	showButtonPanel: true,
	dateFormat: 'd/m/Y',
	
}).on('change', function(){
	$('.datepicker-dropdown').addClass('datepicker-hide');
});
/**$('p#biodata_toggle').click(function(){
	$('.biodata_section').toggle();
}); **/

</script>
@endpush

@section('content')

<main id="main">
   <div class="col-md-12 col-lg-12" style="height:80px">
   </div>
   <!--==========================
      Services Section
      ============================-->
   <section id="services">
   <div class="container">
   <header class="section-header">
      <h1 class="page-title">What’s the best way for employers to contact you?</h1>
	  <p class="sub-title">We suggest including an email and phone number.</p>
   </header>
   <div class="row about-container">
      <div class="col-lg-8 " >
         @if(session()->has('message-success'))
         <div class="alert alert-success">
            {{ session()->get('message-success') }}
         </div>
         @elseif(session()->has('message-danger'))
         <div class="alert alert-danger">
            {{ session()->get('message-danger') }}
         </div>
         @endif
         <div class="error msg_div"></div>
         <form class="action-form contact-details" role="form" autocomplete="off" http-type="post" method="post" data-url="{{ route('createresumes') }}">
            @if(isset($edit))
				<input type="hidden" name="id" value="{{ @$resume->id }}">
			@endif
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-row">
               <div class="form-group col-lg-6">
                  <label for="email">First Name*</label>
                  <input type="text" @if(isset($edit) && empty($plan)) readonly class="form-control fit-content" @else  name="first_name" class="form-control fit-content required" @endif  maxlength="30" id="name" value="{{ @$resume->first_name }}" placeholder="" data-rule="minlen:2" data-msg="Please enter at first name" data-target="#FIELD_FNAM" />
                  @if(isset($edit) && empty($plan)) @else <div class="validation"></div> @endif 
               </div>
               <div class="form-group col-lg-6">
                  <label for="email">Last Name*</label>
                  <input type="text"  maxlength="30" @if(isset($edit) && empty($plan)) readonly class="form-control fit-content" @else  name="last_name" class="form-control fit-content required" @endif value="{{ @$resume->last_name }}" placeholder="" data-rule="minlen:1" data-msg="Please enter last name" data-target="#FIELD_LNAM" />
				  @if(isset($edit) && empty($plan)) @else <div class="validation"></div> @endif 
				  
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-lg-6">
                  <label for="email">Phone*</label>
                  <!--input type="text" class="form-control fit-content required" name="Phone" value="{{ @$resume->phone }}" data-rule="minlen:10" data-msg="Please enter valid no" / maxlength="10" data-target="#FIELD_HPHN" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"-->
                  <input type="text" class="form-control fit-content required" name="Phone" value="{{ @$resume->phone }}" data-rule="minlen:8" maxlength="15"  data-msg="Please enter valid no" / data-target="#FIELD_HPHN" oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*)\./g, '$1');">
                  <div class="validation"></div>
               </div>
               <div class="form-group col-lg-6">
                  <label for="email">Email Address*</label>
                  <input type="email" class="form-control fit-content required" name="email" id="email" value="{{ @$resume->email }}" data-rule="email" data-msg="Please enter a valid email" / required data-target="#FIELD_EMAI">
                  <div class="validation"></div>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-lg-6">
                  <label for="email">Profession</label>
				   <input type="text" name="profession" class="form-control fit-content"  maxlength="50" id="profession" value="{{ @$resume->profession }}" placeholder="" data-rule="minlen:2" data-msg="Please enter at profession" data-target="#FIELD_DCTL" />
                  <div class="validation"></div>
               </div>
               <div class="form-group col-lg-6">
                  <label for="email">Street Address</label>
				  <input type="text" name="street" class="form-control fit-content" id="street" value="{{ @$resume->street }}" placeholder="" data-rule="minlen:2" data-msg="Please enter at Street Address" data-target="#FIELD_STRT" />
                  <div class="validation"></div>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-lg-6">
                  <label for="email">City</label>
				  <input type="text" name="city" class="form-control fit-content" id="city" value="{{ @$resume->city }}" placeholder="" data-rule="minlen:2" maxlength="30" data-msg="Please enter at City" data-target="#FIELD_CITY" />
                  <div class="validation"></div>
               </div>
               <div class="form-group col-lg-3">
                  <label for="email">State/Province</label>
				  <input type="text" name="state" class="form-control fit-content" id="state" value="{{ @$resume->state }}" placeholder="" data-rule="minlen:2" data-msg="Please enter at State" maxlength="30" data-target="#FIELD_STAT" />
                  <div class="validation"></div>
               </div>
               <div class="form-group col-lg-3">
                  <label for="email">Zip Code</label>
				  <input type="text" name="zip" class="form-control fit-content" id="zip" value="{{ @$resume->zip }}" placeholder="" data-rule="minlen:2" maxlength="10" data-msg="Please enter at Zip" data-target="#FIELD_ZIPC" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                  <div class="validation"></div>
               </div>
            </div>
			
			<!--- Biodata --->
			
		  <label for="biodata" id="add-remove-biodata-link-label" >
			<a class="sub-title" id="biodata_toggle" style="color: #3983fa;margin-bottom: 13px;font-size: 20px;font-weight: 500;font-family: HK Grotesk,sans-serif;cursor:pointer;display: block;" href="javascript:void(0);" onclick="$('.biodata_section').slideToggle('slow');$('#add-remove-biodata-link-label i').toggleClass('fa-plus fa-minus');"><i class="fa fa-plus success-icon" ></i> Add Biodata</a>
		  </label>
			
			<div class="biodata_section" style="display:none;">
				<div class="form-row">
				   <div class="form-group col-lg-6">
					  <label for="dob">Date of Birth</label>
					  <input type="text" class="form-control fit-content" name="dob" id="dateob" data-target="#FIELD_DOB" value="<?php echo e(!empty(@$resume->dob) ? date('m/d/Y', strtotime(@$resume->dob)) : ''); ?>">
					  <div class="validation"></div>
				   </div>
				   <div class="form-group col-lg-6">
					  <label for="originState">State of Origin</label>
					  <input type="text" class="form-control fit-content" maxlength="40" name="originState" data-target="#FIELD_ORIGINSTATE" value="{{ @$resume->originState }}">
					  <div class="validation"></div>
				   </div>
				</div>
				
				<div class="form-row">
				   <div class="form-group col-lg-6" id="maritalStatus">
					  <label for="maritalStatus">Marital Status</label>
					  <!-- <input type="text" class="form-control fit-content" maxlength="10" name="maritalStatus" data-target="#FIELD_MARITALSTATUS" value="{{ @$resume->maritalStatus }}"> -->
					  <select class="form-control fit-content"  name="maritalStatus" data-target="#FIELD_MARITALSTATUS">
					<option value="Married" {{@$resume->maritalStatus == 'Married'?'selected':''}}>Married</option>	
					<option value="Single" {{@$resume->maritalStatus == 'Single'?'selected':''}}>Single</option>
					<option value="Divorced" {{@$resume->maritalStatus == 'Divorced'?'selected':''}}>Divorced</option>
					<option value="Separated" {{@$resume->maritalStatus == 'Separated'?'selected':''}}>Separated</option>	
					<option value="Widow" {{@$resume->maritalStatus == 'Widow'?'selected':''}}>Widow</option>
					<option value="Widower" {{@$resume->maritalStatus == 'Widower'?'selected':''}}>Widower</option>
					</select >
					  <div class="validation"></div>
				   </div>
				   <div class="form-group col-lg-6" id="newgender">
					  <label for="gender">Gender</label>
					  <!-- <input type="text" class="form-control fit-content" name="gender" data-target="#FIELD_GENDER" value="{{ @$resume->gender }}"> -->
					 <select class="form-control fit-content"  name="gender" data-target="#FIELD_GENDER">
					<option value="Male" {{@$resume->gender == 'Male'?'selected':''}}>Male</option>	
					<option value="Female" {{@$resume->gender == 'Female'?'selected':''}}>Female</option>
					<option value="Transgender" {{@$resume->gender == 'Transgender'?'selected':''}}>Transgender</option>
					</select>
					  <div class="validation"></div>
				   </div>
				</div>
			</div>
			
            <div class="form-row">
               <div class="form-group col-lg-12">
                  <label for="email" id="add-remove-social-link-label" ><a style="font-size: 20px;    color: #3983fa;font-weight: 500;font-family: HK Grotesk,sans-serif;cursor:pointer;" href="javascript:void(0);" onclick="$('.social-Links#linksContainer').slideToggle('slow');$('#add-remove-social-link-label i').toggleClass('fa-plus fa-minus');"><i class="fa fa-plus success-icon">&nbsp;</i>Add Social Links</a></label>
               </div>
			   <?php 
					$arraySoc = array();
					$arraySoc['facebook'] = (isset($resume->facebook)) ? $resume->facebook : '';
					$arraySoc['twitter'] = (isset($resume->twitter)) ? $resume->twitter : '';
					$arraySoc['linkedin'] = (isset($resume->linkedin)) ? $resume->linkedin : '';
					$arraySoc['website'] = (isset($resume->website)) ? $resume->website : '';
					$arraySoc = array_filter($arraySoc);
					if(!empty($arraySoc)){
						foreach($arraySoc as $key=>$value){
			   ?>
					   <div class="append_to_div" style="width:100%">
							<div class="social_links_save_section">
								<div class="form-row">
									<div class="form-group col-lg-6" style="padding-left:5px;">
										<label>Social Website</label>
										<select name="socialWebsite[]" class="form-control">
										<option value="">Select Social Website</option>	
											<option value="facebook" {{ ($key == 'facebook') ? 'selected' : '' }} >Facebook</option>
											<option value="linkedin" {{ ($key == 'linkedin') ? 'selected' : '' }} >LinkedIn</option>
											<option value="twitter" {{ ($key == 'twitter') ? 'selected' : '' }} >Twitter</option>
											<option value="website" {{ ($key == 'website') ? 'selected' : '' }} >website</option>
										</select>
									</div>
									<div class="form-group col-lg-5">
										<label>Social Link</label>
										<input type="text" class="form-control fit-content social_val" name="socialLinks[]" value="{{ $value }}" style="width:100%" />
										<div class="validation"></div>
									</div>
									<div class="form-group col-lg-1">
										<label style="width:100%;height:34px;">&nbsp;</label>
										<a id="delete_social_icon" href="javascript:void(0);" ><i class="fa fa-trash" style="cursor:pointer"></i></a>
									</div>
								</div>
							</div>
						</div>
				<?php }
				}?>
			   <div class="social-Links" id="linksContainer" style="display:none;width:100%;float:left">
					
			  		 <div class="append_to_div">
						<div class="social_links_save_section">
							<div class="form-row">
								<div class="form-group col-lg-6" style="padding-left:5px;">
									<label>Social Website</label>
									<select name="socialWebsite[]" class="form-control">
									<option value="">Select Social Website</option>	
									<option value="facebook">Facebook</option>
										<option value="linkedin">LinkedIn</option>
										<option value="twitter">Twitter</option>
										<option value="website">website</option>
									</select>
								</div>
								<div class="form-group col-lg-5">
									<label>Social Link </label>
									<input type="text" class="form-control fit-content social_val" name="socialLinks[]" value="" style="width:100%" />
									<div class="validation"></div>
								</div>
								<div class="form-group col-lg-1">
									<label style="width:100%;height:34px;">&nbsp;</label>
									<a id="delete_social_icon" href="javascript:void(0);" ><i class="fa fa-trash" style="cursor:pointer"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="row">
							<div class="form-group col-lg-6" style="padding-left:5px;">
								<label for="email" style="font-size: 12px;"><a id="add_more_social_icon" href="javascript:void(0);" onclick="addMoreLinks();"><i class="fa fa-plus success-icon">&nbsp;</i>&nbsp;Add one more</a></label>
							</div>
						</div>
					</div>
			   </div>
            </div>
            <!---div class="form-group">
               <label for="email">Zip Code</label>
                             <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                             <div class="validation"></div>
                           </div--->
			@if(isset($skin_id))
	<div class="" style="float:left"><a  class="c-btn btn-default btn-back" href="{{url('select-resume/skin/'.$skin_id)}}">Back</a></div>
		  @else
			  <div class="" style="float:left"><a  class="c-btn btn-default btn-back" href="{{route('select-resume')}}">Back</a></div>
		  @endif
            
            <div class="" style="float:right"><button type="submit"  class="c-btn btn-success" title="" id="next-work">NEXT: WORK HISTORY</button></div>
         </form>
      </div>
	<div class="col-md-5 col-lg-4 col-xl-4 resume-thumbnail" skin="{{\Session::get('skin')}}">
		
		@if(\Session::has('skin'))
			@php $skin = \Session::get('skin'); $skin = 'frontend.cvTemplates.'.$skin; @endphp 
			@include($skin)
		@elseif(isset($resume->skin_id) && (\View::exists('frontend.cvTemplates.'.$resume->skin_id)))
						@php $skin = $resume->skin_id; $skin = 'frontend.cvTemplates.'.$skin;

						@endphp
						@include($skin)
					@else
						@include('frontend.cvTemplates.SCVT1')
		@endif
	   <p class="btn-preview-ctnr"><button type="button" class="btn btn-default btn-preview"><i class="far fa-eye"></i>Preview</button></p>
	</div>
      <br>
      <script>
         function myfun(){
         	window.location.href = "{{url('work-history')}}";
         }
		 function addMoreLinks(){
			// $("#linksContainer .social_links_save_section:last-child").clone().appendTo("#linksContainer .append_to_div");
			var vi = jQuery("#social_temp").html();
			jQuery("#linksContainer .append_to_div").append(vi);
			$("a#delete_social_icon").click(function(){
				$(this).parents().eq(2).remove();
			}); 
		 }
      </script>
	  <script type="text/html" id="social_temp">
		<div class="social_links_save_section">
			<div class="form-row">
				<div class="form-group col-lg-6" style="padding-left:5px;">
					<label>Social Website</label>
					<select name="socialWebsite[]" class="form-control">
					<option value="">Select Social Website</option>	
						<option value="facebook">Facebook</option>
						<option value="linkedin">LinkedIn</option>
						<option value="twitter">Twitter</option>
						<option value="website">website</option>
					</select>
				</div>
				<div class="form-group col-lg-5">
					<label>Social Link</label>
					<input type="text" class="form-control fit-content social_val" name="socialLinks[]" value="" style="width:100%" />
					<div class="validation"></div>
				</div>
				<div class="form-group col-lg-1">
					<label style="width:100%;height:34px;">&nbsp;</label>
					<a id="delete_social_icon" href="javascript:void(0);" ><i class="fa fa-trash" style="cursor:pointer"></i></a>
				</div>
			</div>
		</div>
	  </script>
   </div>
   <section>
<style>
@media and (min-width:768px){
.col-lg-12.social_links_save_section .col-lg-5 {
    padding-right: 0;
}
}
#newgender span,#maritalStatus span{
display:none;
}
</style>
</main>
@endsection
