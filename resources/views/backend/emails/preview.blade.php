@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Deals Email Preview')

@push('after-styles')
@endpush

@section('template-custom-js')
@endsection

@section('content')
<html>
<head>
<title>Cash Direct Club Offers</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900" rel="stylesheet"> 
</head>
<body style="">	
	<div style="display: none; font-size: 0px; line-height: 0px; max-height: 0px; max-width: 0px; width: 0px; opacity: 0; overflow: hidden;">
		Top store list message will display here
	</div>
	<table bgcolor="#f8f9fa" cellspacing="0" cellpadding="0" border="0" width="100%">
	<tbody>
		<tr>
			<td align="center" style="padding-bottom:30px;">
				<table width="594" border="0" align="center" cellpadding="1" cellspacing="1" style="background: #f8f9fa;">
				<tbody>
					<tr>
						<td style="border: 1px solid #e1e1e1;">
							<table width="594" border="0" align="center" cellpadding="0" cellspacing="0">
							<tbody>
								<tr bgcolor="">
									<td>
										<table width="594" border="0" align="center" cellpadding="0" cellspacing="0">
											<tr>
											<td align="center">
													@if($data['banner'] == "")
														<a href="'.HOME_URL.'/" style="display: block; padding: 15px;text-decoration:none;padding-bottom: 5px;">
															<img src="'.HOME_URL.'/wp-content/uploads/2019/08/cdc_logo_v1.png" style="width:335px;">
														</a>
														<div style="font-family: \'Source Sans Pro\', sans-serif;font-size: 21px;font-weight: bold;color: #3ea6ba;color: #028283;margin-bottom: 10px;" >TODAY'S DEALS</div>
													@else
														<img src='{{url("/images/banners/{$data["banner"]}")}}' style="max-width:100%;">
													@endif 
											</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr bgcolor="">
									<td style="">
										<div style="margin:0px;border:1px solid #dadadaa6;padding: 12px 0px;background: #f8f8f8;">
										<table width="594" border="0" align="center" cellpadding="0" cellspacing="0">
											<tr>
												<td align="center" width="164">
													<p style="margin:0px;font-family: \'Source Sans Pro\', sans-serif;font-size: 20px;font-weight: 800;line-height: 1.3;color: #333333;text-align: left;padding-left: 25px;">
													Hello $name
													</p>
												</td>
												<td align="center" width="215">
													<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
														<tr>
															<td align="right" style="padding-right:35px;">
																<span style="border: 1px solid #dfdede;background: #fff;border-radius: 4px;padding: 3px 15px;margin-left: 10px;  font-family: \'Source Sans Pro\', sans-serif;font-weight: bold;font-size: 15px;float:right;min-width:44px; display:block;text-align:left;border-radius: 30px;">$ 0.00</span>
																<span style="font-family:\'Source Sans Pro\', sans-serif;font-size: 14px;font-weight: 600;line-height: 17px;float:right;display:block;margin-top: 5px;">PENDING CASH BACK:</span>
															</td>
														</tr>
														<tr>
															<td align="right" style="padding-right:35px;padding-top: 7px;">
																<span style="border: 1px solid #dfdede;background: #fff;border-radius: 4px;padding: 3px 15px;margin-left: 10px;  font-family: \'Source Sans Pro\', sans-serif;font-weight: bold;font-size: 15px;float:right;min-width:44px; display:block;text-align:left;border-radius: 30px;">$ 0.00</span>
																<span style="font-family:\'Source Sans Pro\', sans-serif;font-size: 14px;font-weight: 600;line-height: 17px;float:right;display:block;margin-top: 5px;">EARNED CASH BACK:</span>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										</div>
									</td>
								</tr>
								<!--<tr bgcolor="#f8f9fa">
									<td>
										<table width="594" border="0" align="center" cellpadding="0" cellspacing="0">';
											
											$min_sale_amount 	= get_user_meta($user_id,'signup_bonus_min_sale_amt',true);
											if($min_sale_amount == ""){
												$min_sale_amount = "0";
											}
											$sql = "select count(track_id) as total_orders from `wp_track_revenue` where affiliate_with != 'Refer' and affiliate_with != 'Survey' and affiliate_with !='New User' and affiliate_with !='Credit Card' and affiliate_with !='extension' and user_id = '$user_id' and pointsAssigned = '1' and CAST(sale_amount AS UNSIGNED) >= '$min_sale_amount'";	
											 
											global $wpdb;
											$already_shopper = $wpdb->get_results($sql);
											$total_orders = $already_shopper[0]->total_orders;

											$signup_date = get_user_meta($user_id,'user_registered_on',true);
											$exp_days = get_user_meta($user_id,'signup_bonus_expire',true);
											$IsPublisher = get_user_meta($user_id,'is_publisher',true);
											if($signup_date == ""){
												$signup_date = "1999-01-01";
											}
											
											$date_60_days = date('Y-m-d', strtotime($signup_date ."+".$exp_days." days"));
											$current_date = date('Y-m-d');
											$show_banner = true;

											if($total_orders > 0){
												$show_banner = false;
											}
											if($IsPublisher){
												$show_banner = false;
											}
											if(strtotime($date_60_days) < strtotime($current_date)){
												$show_banner = false;
											}
											
											if($show_banner){				
												$bonusAmt = $wpdb->get_results("select user_revenue as bonus from `wp_track_revenue` where affiliate_with ='New User' and user_id = '$user_id'");
												$bonusAmount = $bonusAmt[0]->bonus;
												
												$date_60_days_create = date_create($date_60_days);
												$current_date_create = date_create($current_date);
												$remaining_days = date_diff($date_60_days_create,$current_date_create);
												$remaining_days = $remaining_days->days;

												if($remaining_days == '1'){
													$remaining_message = 'You have <span style="color:#ff2100;">'.$remaining_days.' day</span> to make your first purchase and earn your <span style="color:#ff2100;">$'.$bonusAmount.' welcome bonus!</span>';
													
												}elseif($remaining_days == '0'){
													$remaining_message = 'Make your first purchase today and earn your <span style="color:#ff2100;">$'.$bonusAmount.' welcome bonus!</span>';
												}else{
													$remaining_message = 'You have <span style="color:#ff2100;">'.$remaining_days.' days</span> to make your first purchase and earn your <span style="color:#ff2100;">$'.$bonusAmount.' welcome bonus!</span>';
												}
											
												$message .='
												<tr>
													<td style="padding:20px 25px 0px;">
														<div style="border: 1px solid #ec5d44;background: #ffefec;padding: 10px 0px;font-size: 22px;font-weight: bold; font-family: \'Source Sans Pro\', sans-serif; margin-bottom: 20px;">
															<p style="text-align:center;margin: auto;font-size: 22px;line-height: 34px;font-family: \'Source Sans Pro\', sans-serif;width: 507px;" id="email_content">
																'.$remaining_message.'
															</p>
														</div>
													</td>
												</tr>';
											}-->
										@foreach($offers as $offer)
											<tr>
												<td style="padding:20px 25px 0px;background-color:#fff;border-left: 1px solid #efefef;border-right: 1px solid #efefef;'.$border_td.'">
													<div style="margin:0px;padding-bottom: 15px;'.$border.'">
														<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
															<tr>
															<td width="30%">
																<a href="'.$url.'">
																{{ url("/images/store/".$offer->store->thumbnail.") }}
																</a>
															</td>
															<td width="70%" style="font-family:\'Source Sans Pro\', sans-serif; font-size:18px; line-height:20px;">
																<div style="font-size: 16px;line-height: 1.5;color: #007c7d; font-family: \'Source Sans Pro\', sans-serif;">
																	<a href="'.$url.'" style="text-decoration:none;font-family: \'Source Sans Pro\', sans-serif;font-size: 20px;font-weight: 800;line-height: 1.63;color: #302e2e;display: block;margin-bottom: 10px;">post_title</a>
																	<table>
																	<tr>
																	<td>
																	<span style="display:block; font-weight:800; font-size:18px;color:#007c7d;">Up to 4% Cash Back</span>
																	</td>
																	<td>
																	<a href="'.$url.'" style="margin-left:5px;"><img src='{{url("/images/other/arrow.png")}}'></a>
																	</td>
																	</tr>
																	</table>
																</div>
															</td>
															</tr>
														</table>
													</div>
												</td>
											</tr>
											@endforeach
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding: 15px 0px;"></td>
								</tr>
								<tr>
									<td>
										<table width="594" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align: center;">
											<tbody>									
												<tr bgcolor="">
													<td style="background:#fff;padding:25px 30px 15px;border: 1px solid #efefef;border-bottom: none">
														<img src='{{url("/images/other/icon-cash-back-refer-friends.png")}}' />
													</td>
												</tr>
												<tr bgcolor="">
													<td style="background:#fff;padding:0px 30px;border: 1px solid #efefef;border-bottom: none; border-top: none">
														<p style="margin:0px;font-size: 29px;line-height: 45px;color: #2a2b2b;font-family: Montserrat;margin-bottom: 15px;font-weight: 800;padding-bottom: 20px;border-bottom: 1px solid #efefef;">Get up to $10 Cash Back when you refer friends to Cash Direct Club!</p>
													</td>
												</tr>
												<tr bgcolor="">
													<td style="background: #fff;padding: 10px 30px;border: 1px solid #efefef;border-top: none;">
														<p style="font-size: 17px;line-height: 20px;color: #2a2b2b;font-family: Montserrat;font-weight: 800;text-transform: uppercase;">Your referral link:</p>
														<p style="">
															<input type="text" value="{link}" style="border: 2px solid #e1e1e1;width: 60%;padding: 13px 18px;border-radius: 8px;font-size: 15px;text-align: center;" />
														</p>
														<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
															<tr>
																<td width="33.333%" align="center" style="padding-right:10px;">
																	<p style="margin:0px;background:#1679ee;border-radius: 4px;padding: 10px 10px">
																		<span style="float:left;height:31px;display: block;margin-top: 4px;margin-left: 10px;align-items: center; justify-content: center;"><img src='{{url("/images/other/facebook-icon.png")}}'></span>
																		<span style="display:block;color: #fff;text-transform: uppercase;font-family: Montserrat;font-size: 12px;font-weight: bold;margin-top: 0px;"><a href="'.$facebook_link.'" style="text-decoration: none;color: #fff;">Share on facebook</a></span>
																	</p>
																</td>
																<td width="33.333%" align="center" style="padding:0px 5px;">
																	<p style="margin:0px;background:#38a1f3;border-radius: 4px;padding: 10px 10px">
																		<span style="float:left;height:31px;display: block;margin-top: 6px;margin-left: 10px;align-items: center; justify-content: center;"><img src='{{url("/images/other/twitter-icon.png")}}'></span>
																		<span style="display:block;color: #fff;text-transform: uppercase;font-family: Montserrat;font-size: 12px;font-weight: bold;margin-top: 0px;"><a href="'.$twitter_link.'" style="text-decoration: none;color: #fff;">Share on twitter</a></span>
																	</p>
																</td>
																<td width="33.333%" align="center" style="padding-left:10px;">
																	<p style="margin:0px;background:#4fce5d;border-radius: 4px;padding: 10px 10px;">
																		<span style="float:left;height:31px;display: block;margin-top: 4px;margin-left: 10px; align-items: center; justify-content: center;"><img src='{{url("/images/other/whatapp-icon.png")}}'
																		></span>
																		<span style="display:block;color: #fff;text-transform: uppercase;font-family: Montserrat;font-size: 12px;font-weight: bold;margin-top: 0px;"><a href="'.$whatsapp_link.'" style="text-decoration: none;color: #fff;">Share on whatsapp</a></span>
																	</p>
																</td>
															</tr>
														</table>
														<p style="padding-bottom: 20px;width: 60%;margin: auto;padding-top: 15px;">
															<a href="'.HOME_URL.'/refer/" style="border-radius: 5px;background-color: #f26047;font-family: Montserrat;font-size: 16px;font-weight: 800;text-transform:uppercase;color:#fff;text-decoration:none;text-align: center;padding: 15.5px 0px;display:block;justify-content:center; ">
																<img src='{{url("/images/other/email-icon.png")}}' style="margin-right: 10px;"> Share by email
															</a>
														</p>
													</td>
												</tr>
												<tr bgcolor="">
													<td style="">
														<table width="594" border="0" align="center" cellpadding="0" cellspacing="0">
															<tr>
																<td width="50%" style="padding:35px 0px 15px;">
																	<p style="margin:0px;color:#fff;text-align:right;padding-right:10px;">
																		<a href="'.ios_app_url.'"><img src='{{url("/images/other/series_app_store.png")}}' style="max-width:80%;"></a>
																	</p>
																</td>
																<td width="50%" style="padding:35px 0px 15px;">
																	<p style="margin:0px;color:#fff;text-align:left;padding-left:10px;">
																		<a href="'.android_app_url.'"><img src='{{url("/images/other/series_google_play.png")}}' style="max-width:80%;"></a>
																	</p>
																</td>
															</tr>
														</table>
													</td>
												</tr>
												<tr bgcolor="">
													<td style="background: #f8f8f8;padding: 0px 10px;font-size: 13px;color: #333333;font-family: \'Source Sans Pro\', sans-serif;line-height: 1.69;text-align: center;padding-top:10px;">Prices, Offers and Cash Back are subject to change. Restrictions may apply.  Your privacy is important to us. Please read our <a href="'.HOME_URL.'/privacy-policy/" style="color:#00a8bd; text-decoration:none">Privacy Policy</a>.  If you no longer wish to receive promotional emails, please <a href="'.HOME_URL.'/email-unsubscribe/?unsubscribe_id='.$unsubscribe_id.'" style="color:#00a8bd;  text-decoration:none">unsubscribe</a> here.</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>							
							</tbody>
							</table>
						</td>
					</tr>
				</tbody>
				</table>
			</td>
		</tr>
	</tbody>
	</table>
</body>
</html>
@endsection
