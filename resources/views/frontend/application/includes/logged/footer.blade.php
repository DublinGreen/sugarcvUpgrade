<div class="container-fluid footer-full-container">
   <div class="container">
      <footer>
         <div class="row footer">
            <div class="col-md-6">
               <div class="footer_sec_heading">
                  About Us
               </div>
               <div class="footer_sec_desc">
                  <p>Cash Direct Club provides our members with a lifetime of cash back rewards, whether you are looking to make an everyday online purchase or a major purchase like buying a home. </p>
                  <p>Our mission is to enable our members to live life more affordably. Your Cash Direct Club membership is completely free and we encourage you to share our service with your friends.</p>
               </div>
            </div>
            <div class="col-md-6">
               <div>
                  <img src="https://www.cashdirectclub.com/wp-content/uploads/2019/06/cdc-logo.png?v=1.0.0" class="web_only">
               </div>
               <div class="footer_new_menus">
                  <ul>
                     <li><a href="{{ route('termsconditions') }}">Terms &amp; Conditions</a></li>
                     <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                     <li><a href="{{ route('contact') }}">Contact Us</a></li>
                  </ul>
                  <ul>
                     <li><a href="{{ route('privacyNotice') }}">Privacy Notice</a></li>
                     <li><a href="{{ route('contact') }}">Help &amp; Support</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
   </div>
   <div class="copyright_footer">
      © All rights reserved - CashDirectClub.com
   </div>
</div>

<div class="modal fade" id="loginModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<i class="fal fa-times" aria-hidden="true" data-dismiss="modal"></i>
				<h4 class="modal-title red-line_bottom">
					Sign In
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<form class="col-md-12 new-member popup_signin" accept-charset="UTF-8" data-form="auth" data-remote="true" id="authenticationForm" method="post" role="form" autocomplete="off">
								<div class="row">
									<div class="col-md-12">
										<span class="signInError help-block"></span>
										<div class="ajax-response"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="control-label">
												<input autofocus="autofocus" class="form-control" id="member_email" name="data[username]" type="text" value="" autocomplete="off" data-validation="required" data-error="required" placeholder="Enter your email here" />
											</div>
										</div>
									</div>
								</div>	
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="control-label">
												<input autocomplete="off" class="form-control" id="new-member-password" name="data[password]" type="password" autocomplete="off" data-validation="required" data-error="required" placeholder="Enter your password here" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12" id="pop_login_btn">
										<input class="btn btn-md btn-info btn-block popup_form_btn submit-form login-form" name="commit" type="button" value="Sign In with Email" />
										<span class="signup_loading_btn" style="display:none;">
											Loading... <i class="fa fa-spinner fa-spin"></i>
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<div class="control-label">
												<label class="custom_cbox">
												  <input id="rememberme" name="data[remember]" type="checkbox" value="true" /> Keep me signed in
												  <span class="custom_cmark"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="forgot_form_wrap"><a class="forgot-pass" href="/change-password">Forgot Password?</a></div>
									</div>
								</div>
								{{ csrf_field() }}
							</form>
						</div>
					</div>
				</div>
				<div class="row or_wrapper">
					<div class="col-md-12">
						<div class="or_txt">or</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="fb-sign-in">
							<a href="?action=wordpress_social_authenticate&mode=login&provider=Facebook&redirect_to=http%3A%2F%2F65.49.52.120%2Faffinityy%2Faffinityy-loan-rewards%2F">
								<i class="fa fa-facebook">&nbsp;</i> Sign In with Facebook
							</a>
						</div> 
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="gplus-sign-in">
							<a href="?action=wordpress_social_authenticate&mode=login&provider=Google&redirect_to=http%3A%2F%2F65.49.52.120%2Faffinityy%2Faffinityy-loan-rewards%2F">
								<i class="fa fa-google">&nbsp;</i> Sign In with Google
							</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="register" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<i class="fal fa-times" aria-hidden="true" data-dismiss="modal"></i>
				<h4 class="modal-title red-line_bottom">
					Sign Up for Free
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="row" id="signup_first_box_attatch">
							<div class="col-md-12">
								<div class="bonus_pop_wrap">
									<div class="dollar_sec"><i class="fa fa-dollar-sign"></i> </div>									
									<div class="bonus_sec">20</div>									
									<div class="text_sec"><span>welcome<sup>*</sup></span><span>bonus</span></div>									
								</div>
								<div class="signup_form_heading" id="signup_form_heading_div">
								</div>
								<div class="signup_form_sub_heading">
									<span>valid through July 31!</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="popup_form_wrapper">
									<div class="ajax-response-signup"></div>
									<form class="new-member row" id="register_form" action="">
										<span class="signInError help-block"></span>
										<div id="signup_first_box">
											<div class="col-sm-12 mbottom20">
												<input autofocus="autofocus" class="form-control new-member-email" id="new-member-email" name="email" type="email" value="" placeholder="Enter your email here" onKeyDown="if(event.keyCode==13) popup_ts_signup();" />
											</div>
											<div class="col-md-12 mbottom20 popup_fs_btn">
												<a href="javascript:void(0)" class="affinityy_signup_btn" onclick="popup_ts_signup();">
													Sign Up with Email
												</a>
												<span class="popup_signup_loading_btn" style="display:none;">
													Loading... <i class="fa fa-spinner fa-spin"></i>
												</span> 
											</div>
											<!--
											<div class="col-md-12">
												<div class="or_txt_width">
													<div class="or_txt">or</div>
												</div>
											</div>-->
											<p class="z-index_p">
												By signing up you agree to our&nbsp;
												<a class="agr_lnk" href="/terms-conditions/">
													Terms & Conditions
												</a>.
											</p>
											<p class="z-index_p t-m-0">
												<i class="fa fa-info-circle"></i> *Bonus terms apply
											</p>
											<div class="or_wrapper_signup">
												<div class="col-md-12">
													<div class="or_txt">or</div>
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="social_signups_btns">
													<p class="fb_signup">
														<a href="?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Facebook&amp;redirect_to=" class="affinityy_signup_btn_fb">
															<i class="fa fa-facebook">&nbsp;</i> Sign Up with Facebook
														</a>
													</p>
													<p class="g_signup">
														<a href="?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Google&amp;redirect_to=" class="affinityy_signup_btn_g_plus">
															<i class="fa fa-google">&nbsp;</i> Sign Up with Google
														</a>
													</p>
												</div>
											</div>
											
											<p class="z-index_p fsp" style="display:none;">
												By signing up you agree to our&nbsp;
												<a class="agr_lnk" href="terms-conditions/">
													Terms & Conditions
												</a>.
											</p>
											<p class="z-index_p t-m-0 fsp" style="display:none;">
												*To qualify for a welcome bonus, you must be a new member and make your first qualifying purchase of $20 or more within 2 days of becoming a member.
											</p>
											
										</div>
										<div id="signup_second_box" style="display: none;">
											<div class="col-sm-12 mbottom20">
												<label for="first_name">First Name</label>
											   <input autofocus="autofocus" class="form-control" id="first_name" name="first_name" type="text" value="" placeholder="Enter your first name here" required />
											</div>
											<div class="col-sm-12 mbottom20">
												<label for="last_name">Last Name</label>
											   <input autofocus="autofocus" class="form-control" id="last_name" name="last_name" type="text" value="" placeholder="Enter your last name here">
											</div>
											<div class="col-sm-12 mbottom20">
												<label for="new-member-password">Password</label>
												<input autocomplete="off" class="form-control new-member-password" id="new-member-password" name="password" type="password" placeholder="Password (4+ characters)">
											</div>
											<div class="col-sm-12 mbottom20">
												<label for="repeat_password">Confirm Password</label>
												<input autocomplete="off" class="form-control repeat_password" id="repeat_password" name="repeat_password" type="password" placeholder="Confirm password">
												<?php
													$headers = apache_request_headers();
														
													if(isset($headers['Uid'])){
														$uid = $headers['Uid'];
													}elseif(isset($headers['uid'])){
														$uid = $headers['uid'];
													} else {
														$uid = '';
													}
													$_SESSION['uid'] = $uid;
																																							
													echo '<input type="hidden" name="uid" id="uid" value="'.$uid.'">';
													echo '<input type="hidden" name="clickid" id="clickid" value="">';
												?>
											</div>
											<div class="col-sm-12">
												<div class="cap_wrap">
													<span></span>
													<input type="text" name="captcha" autocomplete="off" /> 
													<a href="javascript:reloadCaptcha()"><i class="fa fa-refresh" title="Refresh Captcha Image"></i></a>
												</div>
											</div>
											<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
											<input type="hidden" value="<?= $actual_link;?>" name="signup_from" /> 
											<input type="hidden" value="register" name="action" />
											<div class="col-md-12 popup_ss_btn">
												<a href="javascript:void(0)" class="submit-form register-form affinityy_signup_btn">Sign Up</a>
												<span class="popup_signup_loading_btn" style="display:none;">
													Loading... <i class="fa fa-spinner fa-spin"></i>
												</span>
											</div>
											<div class="col-md-12 popup_ss_btn">
												<p class="sign_up_back_btn">
													<a href="javascript:void(0)" onclick="show_popup_fst_scrn()" >Back</a>
												</p>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

