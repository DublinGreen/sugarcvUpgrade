<div class="tabs">
	<ul class="nav nav-tabs nav-justified hp_tabs" style="display:none;">
	  <li class="active"><a data-toggle="tab" href="#search_stores">Search Stores</a></li>
	  <li><a data-toggle="tab" href="#store_categories">Store Categories</a></li>
	</ul>

	<div class="tab-content">
	  <div id="search_stores" class="tab-pane fade in active">
		<section class="search_section">
			<div class="row store_row">
				<div class="col-md-6 col-md-offset-3">
					<div class="mobile_searchbar" style="display:block;">  
						<form action="https://www.cashdirectclub.com/store/" onsubmit="return false;">
						  <div class="input-group">
							<input type="text" id="search" class="form-control tags ui-autocomplete-input" value="" placeholder="Enter a store name" required="" name="keyword" autocomplete="off" data-url="{{ route('stores.search') }}">
							<div class="input-group-btn">
							  <button class="btn btn-default" type="submit">
								<i class="far fa-search"></i>
							  </button>
							</div>
						  </div>
						</form> 
					</div>
				</div>			
			</div>
		</section>
	  </div>
	  <div id="store_categories" class="tab-pane fade">
			<h2 style="display:none" class="store_cat_toggle">Store Categories</h2>
			 
	  </div>
	</div>	
</div>