<html>
	<head>
		<title>Affinityy Offers</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">					
		<link rel="shortcut icon" type="image/x-icon" href="https://www.affinityy.com/wp-content/uploads/2017/09/favicon-32x32.png">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	</head>
	<body style="background:#f8f8f8">	
		<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tbody>
			<tr>
				<td align="center" style="padding-bottom:30px;">
					<table width="594" border="0" align="center" cellpadding="1" cellspacing="1" style="background: #f8f8f8;">
					<tbody>
						<tr>
							<td>
								<table width="594" border="0" align="center" cellpadding="0" cellspacing="0">
								<tbody>
									<tr bgcolor="">
										<td>
											<p style="text-align:center;margin:0px;">
												<a href="https://www.affinityy.com/" style="display: block; padding: 15px;">
													<img src="https://www.affinityy.com/wp-content/uploads/2018/10/affinityy-logo-1.png" style="width:120px;;">
												</a>
											</p>
										</td>
									</tr>
									<tr bgcolor="">
										<td style=" background: #fff; padding: 40px 0px 30px;">
											<p style="text-align:center;margin: auto;font-size: 26px;line-height: 38px;font-family: Montserrat;font-weight:900;color:#222222;">
												<span style="display:block;">Hello {{ $user->first_name }} {{ $user->last_name }}</span>
												<span style="display:block;">Thank you for registering for Affinityy!</span>
											</p>
											<p style="text-align: center;margin: auto;font-size: 16px;line-height: 40px; font-family: Montserrat;color: #3a3a3a;font-weight: 500;">
												Please confirm your membership by clicking the button below.
											</p>
											<p style="margin: 0px;padding: 20px 0px 15px;text-align: center;">
												<a href="{{ route('user.activate', ['code' => $code]) }}" style="font-family: Montserrat;  font-size: 19.2px;font-weight: 600;letter-spacing: 1px; border-radius: 4.8px;background-color: #eb543a;color: #fff;text-decoration: none;padding: 15px 30px;text-transform: uppercase;">CONFIRM EMAIL</a>
											</p>
										</td>
									</tr>
									@if($user->is_publisher != "1")
									<tr bgcolor="">
										<td style="padding: 21px 0px 0px;"></td>
									</tr>
									<tr bgcolor="">
										<td style="padding:25px 0px;border: 1px solid #f94024;">
											<p style="font-size: 24px;margin:0px;line-height: 1.25;font-family: Montserrat; font-weight:800; color:#fe5037;text-align:center;">
												Make your first purchase within {{ $days }} to redeem your ${{$bonus}} bonus! 
											</p>
										</td>
									</tr>
									@endif
									
									<tr bgcolor="">
										<td style="padding:15px 0px;">
											@if($user->is_publisher != "1")
												<p style="font-size: 10px;margin:0px;line-height: 22px;font-family: Montserrat;font-weight: 500;color: #333333;text-align:center;">
													*Minimum required purchase of ${{$min_sale_amount}}, not including taxes and other fees. ${{$bonus}} bonus applicable to first purchase only.
												</p>
											@endif
											
											<p style="font-size: 10px;margin:0px;line-height: 22px;font-family: Montserrat;font-weight: 500;color: #333333;text-align:center;">
												Prices, Offers and Cash Back are subject to change. Restrictions may apply.  Your privacy is important to us. Please read our <a href="{{ route('privacyPolicy') }}" style="color:#00a8bd;">Privacy Policy</a>.  If you no longer wish to receive promotional emails, please <a href="#" style="color:#00a8bd;">unsubscribe</a> here. 
											</p>
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
