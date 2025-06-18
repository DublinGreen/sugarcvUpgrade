@extends('frontend.templates.logged-main')

@section('body-classes','home logged-in')

@section('page-title','Home Page')

@section('content')
	@if(!isset($isCategoryPage))
		@include('frontend.content.home.slider')
		<section id="countdown" class="newcounter getData" data-url="{{ route('countdownview') }}"></section>
		@include('frontend.content.home.search_stores')
	@endif
	<div class="container">	
		<div class="feature_wrap {{ isset($isCategoryPage) ? 'category_page' : 'home-page' }}">
			@if(isset($isCategoryPage))
				@include('frontend.content.home.category_search_stores')
			@endif
			<section class="store_section">
				<div class="row">					
					<div class="col-md-3">
						<div class="widget white-block widget_rs_store_categories">	
							<div class="store-cate"><h4 class="store_categ">Store Categories</h4></div>
							<ul class="store-ul list-unstyled offer-cat-filter getData" data-url="{{ route('homepage.stores.categories.list') }}"></ul>
						</div>
					</div>
					<div class="col-md-9">
						<div id="ajax-load-more" class="ajax-load-more-wrap grey alm-0" style="display: block;">
							<ul class="alm-listing alm-ajax">
								<div class="alm-reveal getData" data-url="{{ route('homepage.stores.list') }}" {{ isset($isCategoryPage) ? 'data-filter=category data-filter_url='.$slug : '' }}>
								</div>
							</ul>
							<div class="alm-btn-wrap">
								<button id="load-more" class="alm-load-more-btn more" data-url="{{ $load_more }}" style="display:none;">See more stores <i class="fa fa-spinner fa-spin" style="display:none;"></i></button>
							</div>
					    </div>  
					</div>
				</div>
			</section>
		</div>
	</div>
@endsection
@push('after-scripts')
<script>jQuery.fn.searchUrl = "{{ route('stores.search') }}"; jQuery.fn.redirectUrl = "{{ url('redirect') }}";</script>
<script src="http://code.jquery.com/jquery-migrate-3.0.0.js"></script>
<div id="store_first_click" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title red-line_bottom">
					<img src="http://test.vastedge.com/cdc/wp-content/uploads/2019/04/icon-information.png">
					<p class="title_heading">Please Note</p>
				</h4>
			</div>
			<div class="modal-body">				
				<div class="row">					
					<div class="col-md-12">
						<p class="body">Cash back on your purchases can take up to 3 business days to post to your account!</p>
						<p class="shop_head">
							<a link="" id="continue_first_click_btn" onclick="reload_page()">Continue Shopping</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endpush