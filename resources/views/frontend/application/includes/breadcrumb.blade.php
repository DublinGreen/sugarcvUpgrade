<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                <div class="chart-text m-r-10">
                    <h6 class="m-b-0"><small>@lang('common.register')</small></h6>
                    <h4 class="m-t-0 text-info"><span data-count data-start="0.00" data-end="2500" data-decimal="0"></span></h4></div><!--  $member->wallet->register_point  -->
                <div class="spark-chart">
                    <div id="monthchart"></div>
                </div>
            </div>
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                <div class="chart-text m-r-10">
                    <h6 class="m-b-0"><small>@lang('common.promotion')</small></h6>
                    <h4 class="m-t-0 text-primary"><span data-count data-start="0.00" data-end="3500" data-decimal="2"></span></h4></div><!--  $member->wallet->promotion_point  -->
                <div class="spark-chart">
                    <div id="lastmonthchart"></div>
                </div>
            </div>
			@if ($user = Sentinel::getUser())
				@if ($user->username == 'admin')		
				<div class="bottom_right_toggle">
					<button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
				</div>
				@endif
			@endif
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->