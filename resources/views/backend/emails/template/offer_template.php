<?php
$template_1 = '<html><head>
					<title>CashDirectClub Offers</title>
					<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">					
					<link rel="shortcut icon" type="image/x-icon" href="http://test.vastedge.com/cdc/wp-content/uploads/2018/10/affinityy-logo-1.png">
					<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900" rel="stylesheet">
				</head>
				<body style="">	
				<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tbody><tr>
				<td align="center">
					<table width="690" border="0" align="center" cellpadding="1" cellspacing="1" style="background: #f8f8f8;border-style: hidden;border: 1px solid #dfdede;">
					  <tbody><tr>
						<td>
						 <table width="665" border="0" align="center" cellpadding="0" cellspacing="0">
						  <tbody><tr bgcolor="">
							<td>
								<p style="text-align:center;margin:0px;">
									<a href="'.url("/").'" style="display: block;border-bottom: 1px solid #dfdede; padding: 15px;">
										<img src="http://test.vastedge.com/cdc/wp-content/uploads/2018/10/affinityy-logo-1.png" style="width:175px;;">
									</a>
									<span style="display: block;padding: 10px 0px;font-weight: bold;font-family: \'Source Sans Pro\', sans-serif;text-transform:uppercase" id="first_name_user">
										HELLO, {{FIRSTNAME}}!
									</span>
								</p>
							</td>
						  </tr>
						  <tr bgcolor="">
							<td style="border: 1px solid #ec5d44;background: #ffefec;padding: 25px 0px;font-size: 22px;font-weight: bold; font-family: \'Source Sans Pro\', sans-serif;">
								<p style="text-align:center;margin: auto;font-size: 22px;line-height: 34px;font-family: \'Source Sans Pro\', sans-serif;width: 507px;" id="email_content">
									{{EMAIL_OFFER_TAG_LINE}}
								</p>
								{{RESCHEDULE_EMAIL_OFFER_LINE}}
							</td>
						  </tr>
						  <tr bgcolor="">
							<td>
								<p></p>
							</td>
						  </tr>
						  <tr bgcolor="">
							<td style="border:1px solid #e1e1e1;border-radius: 4px;background:#fff;">
									<table width="672" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#f8f8f8" style="background:#f8f8f8;border: 1px solid #e3e3e3;">
									<tbody><tr align="center">
									<td align="center">
										<p style="line-height:25px;font-size:16px;margin:0px;padding:13px 0 15px 0px;font-family:\'Source Sans Pro\', sans-serif;font-weight:bold;text-transform:uppercase;">Most Popular cash back stores</p>
									</td>
									</tr>
									</tbody></table> 
								<table width="665" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF" style="">
									<tbody>
										<tr>
											<td colspan="3">&nbsp;</td>
										</tr>
										<tr>';
								// $popular_stores = array(4250,17234,16241,3425,4248,17788,4239,35756,3427,16247,44413,28253);
								$popular_stores = array(4250,17234,16241,3425,23931,17788,4239,35756,3427,16247,14100,28253);
								$popular_stores = \App\models\Store::whereIn("id", $popular_stores)->get();
								$IMAGE_SIZE 	= 	array('150','200');
								$inc = 0;
								global $wpdb;
								
								// foreach($popular_stores as $store_id){
								foreach($popular_stores as $store){
									
									$inc++;
									
									$current_date = date('Y-m-d').' 00:00:00';
									$current_date_str = strtotime($current_date);
									
									// $comm_array = $wpdb->get_results( "SELECT * from store_commissions where store_id={$store_id} and all_time_valid='0' order by id desc limit 2", ARRAY_A);
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
									
									/*
									$start_date1 = strtotime($comm_array[1]['start_date']);
									$start_date2 = strtotime($comm_array[0]['start_date']);
									$end_date1 = strtotime($comm_array[1]['end_date']);
									$end_date2 = strtotime($comm_array[0]['end_date']);
									$store_comm = $basic_comm  = $premium_comm = "";
									
									if($current_date_str >= $start_date1 && $current_date_str <= $end_date1){
										$store_comm   = $comm_array[1]['store_comm'] ;
										$basic_comm   = $comm_array[1]['basic_comm'];
										$premium_comm = $comm_array[1]['premium_comm']; 
									}
									if($current_date_str >= $start_date2 && $current_date_str <= $end_date2){
										$store_comm   = $comm_array[0]['store_comm'] ;
										$basic_comm   = $comm_array[0]['basic_comm'];
										$premium_comm = $comm_array[0]['premium_comm']; 
									}
									if($store_comm == '' && $basic_comm  == '' && $premium_comm == ''){ 
										$comm_array = $wpdb->get_results( "SELECT * from store_commissions where store_id={$store_id} and all_time_valid='1' order by id desc limit 1", ARRAY_A);
										$store_comm   = $comm_array[0]['store_comm'] ;
										$basic_comm   = $comm_array[0]['basic_comm'];
										$premium_comm = $comm_array[0]['premium_comm']; 
									}*/
									$logo_url = url('/images/stores/'.$store->thumbnail);
									$mgn = "";
									if($inc == 2 || $inc == 5 || $inc == 8 || $inc == 11){
										$mgn = " 0px";
									} 
									$template_1 .= '
											<td >
												<div style="float: left;text-align: center;margin: 15px'.$mgn.'; border-radius: 8px;border: 1px solid #e0e0e0;margin-top:0px;height: 134px;">
													<a href="'.url("/").'?aff-store='.$store->id.'&u={{encoded_user_id}}&source=offer_email" style="width:100%;height:90px;float: left;text-align: center;"><img src="'.$logo_url.'" style="max-width: 70%;margin-top: 15px;"></a>
													<span style="float:left;padding:9px 0px 12px 0px;width:196px;height: 18px;font-family: \'Source Sans Pro\', sans-serif;font-size: 15px;font-weight: 600;font-style: normal;font-stretch: normal;line-height: normal;letter-spacing: normal;text-align: center;color: #007c7d;">Up to '.$premium_comm.'% Cash Back</span>
												</div>
											</td>';
									if ($inc % 3 == 0) {
										$template_1 .= '<tr></tr>';
									}
								}
								
								$template_1 .= '</tr>
								</tbody></table>
								<div style"">
									<p style="margin: 0px;background: #fff;text-align: center;padding: 50px 0px 40px;font-family: \'Source Sans Pro\', sans-serif;font-size: 12px;font-weight: 600;">
										<a href="'.url("/").'" style="width: 217px;height: 46px;border-radius: 4px;background-color: #f94024;text-decoration: none;padding: 13px 30px 14px 30px;">
										<span style="width: 157px;height: 19px;font-family: \'Source Sans Pro\', sans-serif;font-size: 16px;font-weight: 800;font-style: normal;font-stretch: normal;line-height: 1.19;letter-spacing: 1.2px;color: #fff;">SEE ALL STORES</span>
										</a>
									</p>
								</div>
							</td>
						  </tr>
						  <tr bgcolor="">
							<td>
								<p></p>
							</td>
						  </tr>
						   <tr bgcolor="">
							<td>
								<p style="font-family: \'Source Sans Pro\', sans-serif;font-size: 13px;line-height: 22px;text-align: center;">Prices, Offers and Cash Back are subject to change. Restrictions may apply.<br/>Your privacy is important to us. Please read our <a href="'.url("/").'/privacy-policy/" style="color:#00a8bd;text-decoration:none;">Privacy Policy.</a> <br>
								If you no longer wish to receive promotional emails, please <a id="UN_SUBSCRIBE_LINK" href="{{UN_SUBSCRIBE_LINK}}" style="color:#00a8bd;text-decoration:none;">unsubscribe</a> here.</p>
							</td>
						  </tr>
						 </tbody></table>
						</td>
					  </tr>
					</tbody></table>
				</td>
				</tr>
				</tbody></table>
				
			</body></html>';
echo $template_1;
?>