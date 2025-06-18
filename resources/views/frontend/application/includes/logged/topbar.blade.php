<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="header_wrap cdc_in">
		<nav class="navbar">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="top: 0px;">
				<img src="https://www.cashdirectclub.com/wp-content/uploads/2019/06/menu_icon.png" class="menu_icon">
		  </button>
		  <a class="navbar-brand" href="{{ route('home') }}">
			<img src="https://www.cashdirectclub.com/wp-content/uploads/2019/06/cdc-logo.png?v=1.0.1" class="cdc_logo">
			<img src="https://www.cashdirectclub.com/wp-content/uploads/2019/06/mobile-cdc-logo.png?v=1.0.0" class="cdc_mobile_logo" style="display:none;">
		  </a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar" style="padding-top: 0px;">
		  <ul class="nav navbar-nav navbar-right right_buttons_sec">
			<li class="user_cb_details">
				<?php 
					if(isset($user->userMeta()->image_url)){
						$url = url('/images/users/'.$user->userMeta()->image_url);
					} elseif(isset($user->userMeta()->social_image_url)){
						$url = $user->userMeta()->social_image_url;
					} else {
						$url = "https://secure.gravatar.com/avatar/?s=55&amp;d=mm&amp;r=g";
					}
				?>
				<a href="{{ route('profile') }}">{{ $user->first_name }}'s Cash Back: $0.00 <img src="{{ $url }}"></a>
				<a class="my_account_mob_btn" style="display:none;" href="{{ route('profile') }}">My Account</a>
				
			</li>
		  </ul>
		  <ul class="nav navbar-nav for_mobile" style="display:none;">
			<li class="active"><a href="{{ route('home') }}">Shop Stores <span>&amp; Earn up to 15%</span></a></li>
			<li class=""><a href="https://www.cashdirectclub.com/personal-loan">Get a Personal Loan <span>&amp; Earn $100</span></a></li> 
			<li class=""><a href="https://www.cashdirectclub.com/buy-a-house">Buy a House <span>&amp; Earn up to $5.000</span></a></li> 
			<li class=""><a href="https://www.cashdirectclub.com/refer">Refer Friends <span>&amp; Earn Up to $10+</span></a></li>
			<li class=""><a href="https://www.cashdirectclub.com/faq" class="transparent"><span>FAQ</span></a></li>
			<li class=""><a href="https://www.cashdirectclub.com/contact" class="transparent"><span>Contact Us</span></a></li>
		  </ul>
		</div>
	  </div>
	</nav>
		<nav class="navbar bottom_header">
	  <div class="container">
		<div class="collapse navbar-collapse" id="myNavbar" style="padding-top: 0px;">
		  <ul class="nav navbar-nav">
			<li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Shop Stores <span>Earn up to 15%</span></a></li>
			<li class="{{ Route::currentRouteName() == 'personalloan' ? 'active' : '' }}"><a href="{{ route('personalloan') }}">Get a Personal Loan <span>Earn $100</span></a></li> 
			<li class="{{ Route::currentRouteName() == 'buyhouse' ? 'active' : '' }}"><a href="{{ route('buyhouse') }}">Buy a House <span>Earn up to $5.000</span></a></li> 
			<li class="{{ Route::currentRouteName() == 'refer' ? 'active' : '' }}"><a href="{{ route('refer') }}">Refer Friends <span>Earn Up to $10+</span></a></li> 
		  </ul>
		</div>
	  </div>
	</nav>
	
	 <!-- Hotjar Tracking Code for https://sugarcv.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1956037,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
    <!-- End Hotjar Tracking Code for https://sugarcv.com -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65263217-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-65263217-4');
</script>
<!-- End Global site tag (gtag.js) - Google Analytics -->
	</header>
