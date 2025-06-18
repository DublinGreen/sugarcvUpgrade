<?php $i=0; ?>
@foreach($stores as $store)
	@if($i == 0)
	<div class="first_sec_row affinityy_top_stores">
    @endif
	
	@if($i < 7)
	 <div class="store_block">
		<div class="store_img">
		   <img src="{{ url('/images/stores/'.$store->thumbnail) }}">
		</div>
	 </div>
	@endif
	 
	@if($i == 6)
	</div>
	@endif
	
	@if($i == 7)
	<div class="second_sec_row affinityy_top_stores">
    @endif
	
	@if($i > 6)
	 <div class="store_block">
		<div class="store_img">
		   <img src="{{ url('/images/stores/'.$store->thumbnail) }}">
		</div>
	 </div>
	@endif 
	 
	@if($i == count($stores) - 1)
	</div>
	@endif
	
	<?php $i++;  ?>
 @endforeach
<div class="signup_bottom_btn" id="signup_btn_txt_div"><button class="btn header_signup" data-target="#register" data-toggle="modal">Sign Up for Free</button></div>