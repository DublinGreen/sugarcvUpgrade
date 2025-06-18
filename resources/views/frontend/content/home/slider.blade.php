<?php
	$banners = \App\Models\Banners::where("status", '1')->get();
	$store_commissions = [];
	$q = \App\Models\Banners::leftjoin("offer", "banners.offers", "=", "offer.id")
				->leftjoin("storecommissions", "offer.store_id", "=", "storecommissions.store_id")
				->where("banners.status", '1')
				->select(["banners.id as banner_id", "offer.id as offer_id", "offer.store_id", "storecommissions.commission_type", "storecommissions.store_comm", "storecommissions.basic_comm", "storecommissions.premium_comm", "storecommissions.all_time_valid", "storecommissions.start_date", "storecommissions.end_date"])
				->get()
				->map(function($value) use(&$store_commissions){
					$store_commissions[$value->banner_id][] = $value->toArray();
					return $store_commissions;
				})
				->all();
	// echo "<pre>";
	// print_r($store_commissions);
	// echo "</pre>";
	$active = "active";
?>
<div class="container mob_no_pad">
   <div id="category_slider" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
	  @foreach($banners as $banner)
		<?php
			unset($premium_comm);
			if(isset($store_commissions[$banner->id])){
				$commissions = $store_commissions[$banner->id];
				if(count($commissions) == 1){
					$commission = $commissions[0];
					$premium_comm = $commission['premium_comm'];
					$basic_comm = $commission['basic_comm'];
				} else {
					foreach($commissions as $commission){
						$today = strtotime("today midnight");
						$expire = strtotime($commission['end_date']);
						if($commission['all_time_valid'] != '0' && $today < $expire){
							$premium_comm = $commission['premium_comm'];
							$basic_comm = $commission['basic_comm'];
							break;
						}
					}
					if(!isset($premium_comm)){
						$commission = $commissions[0];
						$premium_comm = $commission['premium_comm'];
						$basic_comm = $commission['basic_comm'];
					}
				}
			}
		?>
	  
         <div class="item {{$active}}">
            <div class="category_banner_wrap food_snacks">
               <img src="{{ url('/images/banners/'.$banner->desktop_banner) }}" class="web_banner" style="width:100%;display:none;">
               <img src="{{ url('/images/banners/'.$banner->mobile_banner) }}" class="mob_banner" style="width:100%;display:none;">
               <div class="banner_content">
                  <div class="txt_banner">Earn up to {{ $premium_comm }}% Cash Back</div>
                  <div class="button_banner">
						<a href="{{ route('redirect', ['id' => $commissions[0]['store_id']]) }}" target="_blank">Shop Now</a>
				  </div>
               </div>
            </div>
         </div>
		 <?php $active =""; ?>
	  @endforeach
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#category_slider" data-slide="prev">
      <span class="fa fa-chevron-left"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#category_slider" data-slide="next">
      <span class="fa fa-chevron-right"></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
</div>
<style>
.banner_content {position: absolute;top: 101px;width: auto !important;right: 290px;}
.txt_banner {font-size: 20px;font-weight: bold;color:#028283;}
.button_banner a {color: #fff;background: #eb543a;padding: 10px 20px;border-radius: 4px;font-weight: bold;font-size: 16px;text-decoration:none;}
.button_banner {margin-top: 20px;}
</style>