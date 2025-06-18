@foreach($stores as $store)
<?php
	unset($premium_comm);
	$commissions = $store->commissions->where("premium_comm", "!=", null);
	if($commissions->count() == 1){
		$commission = $commissions->first();
		$premium_comm = $commission->premium_comm;
		$basic_comm = $commission->basic_comm;
	} else {
		foreach($commissions as $commission){
			$today = strtotime("today midnight");
			$expire = strtotime($commission->end_date);
			if($commission->all_time_valid != '0' && $today < $expire){
				$premium_comm = $commission->premium_comm;
				$basic_comm = $commission->basic_comm;
				break;
			}
		}
		if(!isset($premium_comm)){
			$commission = $commissions->first();
			$premium_comm = $commission->premium_comm;
			$basic_comm = $commission->basic_comm;
		}
	}
?>
<div class="col-sm-4 on_web" style="">
	<div class="store_wrap ">
		<div class="store_logo">
			@if($clickCount)
			<a href="{{ route('redirect', ['id' => $store->id]) }}" target="_blank"><img src="{{ url('/images/stores/'.$store->thumbnail) }}" class="img-responsive"></a>
			@else
			<a onclick="show_store_first_click('{{ route('redirect', ['id' => $store->id]) }}')"><img src="{{ url('/images/stores/'.$store->thumbnail) }}" class="img-responsive"></a>
			@endif
		</div>
		<div class="store_cb_container">
			<div class="premium_cb">
			{{ $premium_comm }}% Cash Back on purchases of $125+
			</div>
			<div class="basic_cb">
			<span>or</span> {{ $basic_comm }}% cash back
			</div>
		</div>
		<div class="store_btn">
			@if($clickCount)
				<a href="{{ route('redirect', ['id' => $store->id]) }}" target="_blank">Shop Now</a>
			@else
				<a onclick="show_store_first_click('{{ route('redirect', ['id' => $store->id]) }}')">Shop Now</a>
			@endif
			<span data-url="{{ route('stores.guidelines',['id'=>$store->id]) }}" class="sc_guidelines">Guidelines</span>
		</div>
	</div>
</div>							
@endforeach