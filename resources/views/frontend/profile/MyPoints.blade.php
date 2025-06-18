@extends('frontend.profile.index')

@section('page-title','My Points')

@section('profile_content')
<div class="col-sm-9 prfl_subpages_content">
   <div class="profile_page_right_block_padding">
      <style>
         .panel-group .panel {
         margin-bottom: 0;
         border-radius: 10px;
         }
         .white-block-content .profile_page_right_block_padding div#accordion13, .white-block-content .profile_page_right_block_padding div#accordion123, .white-block-content .profile_page_right_block_padding div#accordion1234, .white-block-content .profile_page_right_block_padding div#accordion03 {
         border-radius: 10px;
         }
         .panel-group {
         margin-bottom: 40px !important;
         }
         .white-block-content .profile_page_right_block_padding div.custom_accordian .panel.panel-default .panel-heading .panel-title .fa {
         -webkit-text-stroke: 0px #fff;
         font-size:12px !important;
         }
         .row.custom_bg_red_shade {
         color: #fdfffe;
         }
         span.fontawesome-stacked-icon.signout {
         color: #028283;
         }
         span.pending_cash_bask span {font-size: 14px;}
         input#order_date {background: #0000;}
         span.required {color: #cd2122;font-size: 12px;margin-left: 2px;}
      </style>
      <div class="panel-group" id="accordion03">
         <div class="panel panel-default">
            <div id="my_point" class="panel-collapse collapse in">
               <div class="panel-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <span class="pending_cash_bask">Pending Cash Back: <strong class="getData" data-url="{{ route('getPendingCashBack') }}"><i class="fa fa-spinner fa-spin"></i>  </strong></span>
                     </div>
                  </div>
                  <div class="panel-group custom_accordian" id="accordion2">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 class="panel-title">
                              <a data-toggle="collapse" class="collapsed" data-parent="#accordion2" href="#p_point">
                              <strong><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true" style="display:none;"></i>&nbsp;What is Pending Cash Back ?</strong>
                              </a>
                           </h4>
                        </div>
                        <div id="p_point" class="panel-collapse collapse">
                           <div class="panel-body">
                              <div class="col-sm-12">
                                 <p class="pending_cb_txt"> 
                                    Qualified purchases will be posted to your member account under “Pending Cash Back” within 5 days of your purchase. Pending Cash Back stays in a “pending” state for up to 90 days to account for different store return policies and order cancellations.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
				<div class="table-responsive pending_pts_history_tbl" style="margin-top:10px;">
					<table class="table table-full table-full-small dt-responsive display nowrap table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('getPendingCashBackList') }}" style="border: 1px solid #ccc; font-size:14px;margin-bottom: 0px;width:100%;border-top-left-radius: 5px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;border-top-right-radius: 5px;">
						<thead>
							<tr>
								<th data-id="order_date">Order Date</th>
								<th data-id="store_id">Store</th>
								<th data-id="sale_amount">Order Value</th> 
								<th data-id="user_revenue">Cash Back</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			
               </div>
            </div>
         </div>
      </div>
      <div class="panel-group" id="accordion13">
         <div class="panel panel-default">
            <div id="my_point" class="panel-collapse collapse in">
               <div class="panel-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <span class="pending_cash_bask">Earned Cash Back: <strong class="getData" data-url="{{ route('getEarnedCashBack') }}"><i class="fa fa-spinner fa-spin"></i>  </strong></span>
                     </div>
                  </div>
					<div class="table-responsive pending_pts_history_tbl" style="margin-top:10px;">
						<table class="table table-full table-full-small dt-responsive display nowrap table-grid" cellspacing="0" width="100%" role="grid" data-url="{{ route('getEarnedCashBackList') }}" style="border: 1px solid #ccc; font-size:14px;margin-bottom: 0px;width:100%;border-top-left-radius: 5px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;border-top-right-radius: 5px;">
							<thead>
								<tr>
									<th data-id="order_date">Order Date</th>
									<th data-id="store_id">Store</th>
									<th data-id="sale_amount">Order Value</th> 
									<th data-id="user_revenue">Cash Back</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				  
               </div>
            </div>
         </div>
      </div>
      <div class="panel-group" id="accordion123">
         <div class="panel panel-default">
            <div id="my_point" class="panel-collapse collapse in">
               <div class="panel-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <span class="pending_cash_bask">Redeemed Cash Back: <strong class="getData" data-url="{{ route('getRedeemedCashBack') }}"><i class="fa fa-spinner fa-spin"></i>  </strong></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <style>
         th{border-bottom: 0px solid #ccc !important;border-right: 1px solid #ccc;}
         td{border-top: 1px solid #ccc;border-right: 1px solid #ccc;}
         tr {border-bottom: 0px solid #ccc;}
         #my_clicks {margin-top: 26px;padding: 12px;}
         body .panel-group .panel-title a {font-weight: normal;font-size: 16px;}
         #myclickTable{border-collapse: collapse !important;} 
         @media (min-width: 768px){
         #myclickresp_table{border-bottom:none !important; }
         }
         .hist_row {font-weight: bold;margin-top: 13px;}
         table#mycashTable th {border-left: none !important;}
         table#mycashTable td {border-left: none;border-bottom: 1px;}
         .inc_hist {color: #999;margin-left: 10px;}
         .profile_page_right_block_padding {box-shadow : none !important;padding : 0px !important;}
      </style>
   </div>
</div>
@endsection