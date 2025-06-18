function validate_form( $container ){
	var valid = true;
	$container.find( 'small.error' ).remove();
	$container.find('select, input, textarea').each(function(){
		var $$this = $(this);
		$$this.removeClass( 'error' );
		var attr = $(this).attr('data-validation');
		if( typeof attr !== typeof undefined && attr !== false ){
			var validations = $$this.data('validation').split('|');
			for( var i=0; i<validations.length; i++ ){
				switch ( validations[i] ){
					case 'length_conditional' :
						if( $$this.val() !== '' ){
							var num = parseInt( $( $$this.data('field_number_val') ).val() );
							if( $$this.val().split(/\r*\n/).length != num ){
								valid = false;
							}
						} break;
					case 'conditional' :
						if( $$this.val() == '' && $('#'+$$this.data('conditional-field')).val() == '' ){
							valid = false;
						} break;
					case 'required' :
						if( $$this.val() == '' ){
							valid = false;
						} break;
					case 'number' :
						if( isNaN( parseInt( $$this.val() ) ) ){
							valid = false;
						} break;
					case 'email' :
						if( !/\S+@\S+\.\S+/.test( $$this.val() ) ){
							valid = false;
						} break;
					case 'match' :
						if( $$this.val() !== $('input[name="'+$$this.data('match')+'"]' ).val() ){
							valid = false;
						} break;
					case 'checked' :
						if( !$$this.prop( 'checked' ) ){
							valid = false;
						} break;
				}
				if(valid == false){
					break;
				}
			}
			if( !valid ){
				if( $$this.attr('type') == 'checkbox' ){
					$$this.parent().before('<small class="no-margin error">'+$$this.data('error')+'</small><br />');
				}
				else{
					$$this.before('<small class="error">'+$$this.data('error')+'</small>');
				}
			}
		}
	});
	return valid;
}

function getBrowser() {
   var userAgent = navigator.userAgent.toLowerCase();
   if (/edge/i.test(userAgent)) {
	   return 'edge';
   } else if (/rv:11/i.test(userAgent)) {
	   return 'ie11';
   } else if (/msie 10/i.test(userAgent)) {
	   return 'ie10';
   } else if (/opr/i.test(userAgent)) {
	   return 'opera';
   } else if (/chrome/i.test(userAgent)) {
	   return 'chrome';
   } else if (/firefox/i.test(userAgent)) {
	   return 'firefox';
   } else if (!!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)) {
	   return 'safari';
   }
   return 'undefined';
}

function revert(){
	var hideoptions={"direction":"right","mode":"hide"};
	var showoptions={"direction":"left","mode":"show"};
	jQuery("#first_div").show();
	jQuery("#first_sign_box").show();
	jQuery("#second_div").hide();
	jQuery("#second_sign_box").hide()
}

jQuery(document).ready(function(){
	
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="_t"]').attr("content")
		}
	});
	
	var t = $(".table-grid")
	  , o = $("#showModal")
	  , s = o.find(".loading")
	  , n = o.find(".error")
	  , a = o.find("#modalContent")
	  , i = $("#pageLoader");	
	  t.each(function(e) {
		var t = $(this)
		  , o = [];
		t.find("th").each(function() {
			var e = $(this)
			  , t = {};
			t.data = e.data("id"),
			$.each(e.data(), function(e, o) {
				"id" !== e && (t[e] = o)
			}),
			o.push(t)
		}),
		t.dataTable({
			serverSide: !0,
			processing: !0,
			scrollX:true,
			language: window._dataTablesLang,
			searchDelay: 1e3,
			responsive: !0,
			ajax: {
				url:t.data("url"),
				data: function(data){
					var filt = jQuery('#filter').val();
					data.filter = filt;
				}
			},
			columns: o,
			order: [0, "desc"]
		})
	});
	
	jQuery('.getData').each(function() {
		var store = jQuery(this);
		var url = store.data('url');
		var filter = store.attr("data-filter");
		if(typeof filter !== typeof undefined && filter !== false){
			var furl = store.data("filter_url");
			url = url+"/"+furl;
		}
		$.ajax({
			type: 'get',
			url: url,
			success:function(response){
				store.html(response);
				if(jQuery.fn.btnDisable){
					jQuery("#load-more").hide();
				} else {
					jQuery("#load-more").show();
				}
			},
			error: function(t, o, r) {
				toastr.error("Error in request.", "Error")
			}	
		});
	});
	
	jQuery('#load-more').click(function() {
		var btn = jQuery(this);
		btn.find(".fa-spin").show();
		if(typeof jQuery.fn.nextPage == typeof undefined){
			jQuery.fn.nextPage=2;
		} else {
			jQuery.fn.nextPage = jQuery.fn.nextPage + 1;
		}
		var url = btn.data('url');
		url = url+"?page="+jQuery.fn.nextPage;
		$.ajax({
			type: 'get',
			url: url,
			success:function(response){
				jQuery(".alm-reveal").append(response);
				btn.find(".fa-spin").hide();
				if(jQuery.fn.nextPage == jQuery.fn.totalPages){
					btn.remove();
				} else {
					btn.show();
				}
			},
			error: function(t, o, r) {
				btn.find(".fa-spin").hide();
				toastr.error("Error in request.", "Error")
			}	
		});
	});
	
	$(".action-form").each(function(o) {
		var r = $(this);
		r.on("click", "[type=submit]", function(o) {
			o.preventDefault();
			var s = $(this);
			var a = r.find(":input");
			s.find(".btn-spinner").css("display","inline-block");
			a.prop("readonly", !0),s.prop("disabled", true);
			var n = r.attr("http-type").toUpperCase();
			jQuery('.msg_div').html(' ');
			$.ajax({
				type: n,
				data: r.serialize(),
				url: r.data("url"),
				success: function(t) {
					if(t.type == "success"){
						jQuery('.msg_div').html('<div class="alert alert-success">'+t.message+'</div>');
					} else {
						jQuery('.msg_div').html('<div class="alert alert-danger">'+t.message+'</div>');
					}
					s.find(".btn-spinner").hide();
					a.prop("readonly", !1),
					s.prop("disabled", false),
					"success" === t.type && void 0 !== t.redirect && window.location.replace(t.redirect)
				},
				error: function(t, o, r) {
					a.prop("readonly", !1),
					s.prop("disabled", false),
					s.find(".btn-spinner").hide()
				}
			})
		});
	});	
	
	$( "#search" ).autocomplete({
		source: function(request, response) {
			$.ajax({
				url: jQuery.fn.searchUrl,
				data: {
						term : request.term
				 },
				dataType: "json",
				success: function(data){
					if(!jQuery.isEmptyObject(data)){
					   var resp = $.map(data,function(obj){
						   ob = {};
						   ob.label = __highlight(obj.title, request.term);
						   ob.value = obj.title;
						   ob.id = obj.id;						   
						   return ob;
					   });						
					} else {
						var resp = {label:"No Store", value:"No Store", id: false};
					}
				   response(resp);
				}
			});
		},		
		minLength: 3,
		autoFocus:true,
		select: function(event, ui) {
			if(ui.item.id){
			 window.open(jQuery.fn.redirectUrl+"/"+ui.item.id, "_blank");				
			} else {
				jQuery("#search").val(" ");
			}
		}
	});
 
	jQuery(document).on('click', '.sc_guidelines', function() {
		jQuery(".loading_sc_guidelines").show();
		jQuery("#sc_guidelines_logo").attr('src','');
		jQuery("#sc_guidelines_text").html('');
		jQuery("#sc_guidelines_popup").modal('show');
		var url = $(this).data('url');
		jQuery.ajax({
			type : 'get',
			url : url,
			success : function( response ) {
				jQuery("#sc_guidelines_logo").attr('src',response.logo_src);
				jQuery("#sc_guidelines_text").html(response.guidelines);
				jQuery(".loading_sc_guidelines").hide();
			}
		});
	});
	
	jQuery('.page-template-page-tpl_thankyou_page').each(function() {
		
		if(getBrowser() == "chrome"){
			var extension_rating_img = "<img src='https://www.cashdirectclub.com/wp-content/uploads/2019/03/chrome2.png' class='rating_img'>";
			var extension_button = "<a href='https://chrome.google.com/webstore/detail/affinityy-your-destinatio/ghjoedcagcnkpbfoknocfgglgfjgpbgk' target='_blank' class='btn btn-default get_btn'>Add CashDirectClub Button</a>";
		}else if(getBrowser() == "firefox"){
			var extension_rating_img = "<img src='https://www.cashdirectclub.com/wp-content/uploads/2019/03/firefox2.png' class='rating_img'>";
			var extension_button = "<a class='btn btn-default get_btn' href='https://www.affinityy.com/info@affinityy.com.xpi' iconURL='https://www.affinityy.com/icon32.png'  onclick='return install(event)'>Add CashDirectClub Button</a>"; 
		}else{
			var extension_rating_img = "<img src='https://www.cashdirectclub.com/wp-content/uploads/2019/03/chrome2.png' class='rating_img'>";
			var extension_button = "<a href='https://chrome.google.com/webstore/detail/affinityy-your-destinatio/ghjoedcagcnkpbfoknocfgglgfjgpbgk' target='_blank' class='btn btn-default get_btn'>Add CashDirectClub Button</a>";
		}
		jQuery("#extension_rating_img").html(extension_rating_img);
		jQuery("#extension_button").html(extension_button);
					
					
		var isMobile = {
			Android: function() {
				return navigator.userAgent.match(/Android/i);
			},
			BlackBerry: function() {
				return navigator.userAgent.match(/BlackBerry/i);
			},
			iOS: function() {
				return navigator.userAgent.match(/iPhone|iPad|iPod/i);
			},
			Opera: function() {
				return navigator.userAgent.match(/Opera Mini/i);
			},
			Windows: function() {
				return navigator.userAgent.match(/IEMobile/i);
			},
			any: function() {
				return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
			}
		};

		var is_mobile = false;
		if( isMobile.iOS() ){
			// alert('ios');
			var link = "https://itunes.apple.com/in/app/affinityy/id1448453433?mt=8;";
			is_mobile = true;
		}else if( isMobile.Android() ){
			// alert('Android');
			var link = "https://play.google.com/store/apps/details?id=com.affinityy";
			is_mobile = true;
		}else{
			// alert("Other");
			var link = "https://play.google.com/store/apps/details?id=com.affinityy";
		}
		jQuery("#get_app").attr("href",link);
		
		if(is_mobile){
			// alert("Mobile");
			jQuery(".on_mobile").addClass('show');
			jQuery(".on_web").addClass('hide');
		}else{
			// alert("Web");
			jQuery(".on_mobile").addClass('hide');
			jQuery(".on_web").addClass('hide');
			
			var start_shop_link = jQuery(".start_shop_link").attr("href");
			if(getBrowser() == "chrome"){
				setTimeout(function(){ detectExtension(start_shop_link); }, 2500);
			} else {
				setTimeout(function(){ detectExtension(start_shop_link); }, 5000);			
			}
			// jQuery(".on_web").addClass('show');		
		}
	});	

	if(typeof wrapper !== typeof undefined){
    jQuery(wrapper).on("click",".add_field", function(e){
        e.preventDefault();
		var thiss = $(this);
		var email_entered = $(this).parent().children('input').val(); 

		jQuery(".ref_error").text('');
		jQuery(".ref_success").text('');
		if(email_entered.trim() != ''){
			jQuery.ajax({
				type : 'post',
				url : checkEmailUrl,
				data : {
					action : 'duplicate_email_refer', email : email_entered
				},
				success : function( response ) {
					if(response == 'Email already exists.'){
						console.log(thiss.parent(".input-group"));
						thiss.closest(".input-group").find('.refer_response').show().html('Already exists. Email will not be sent to this email id.');
					}
					$('.input_fields_wrap').scrollTop($('.input_fields_wrap')[0].scrollHeight);
				}
			});
		
			if(x < max_fields){ 
				x++; 
				$(this).removeClass('add_field');
				$(this).html('<i class="fa fa-close"></i>');
				$(this).addClass('remove_field');
				if(x == max_fields){
					var add_on = '<span class="input-group-addon remove_field"><i class="fa fa-close"></i></span>';
				}else{
					var add_on = '<span class="input-group-addon add_field"><i class="fa fa-plus"></i></span>';
				}
				jQuery(wrapper).append('<div class="input-group"><div class="refer_input_container"><input type="text" class="form-control" placeholder="Enter Your Friend\'s Email" name="email_address[]" require="required">'+add_on+' </div><p class="refer_response"></p></div>'); //add input box
				$('.input_fields_wrap').scrollTop($('.input_fields_wrap')[0].scrollHeight);
			}
		}else{
			thiss.closest(".input-group").find('.refer_response').show().html('Please enter email address first.');
		}
    });

    jQuery(wrapper).on("click",".remove_field", function(e){ 
        e.preventDefault(); jQuery(this).closest(".input-group").remove(); x--;
		$('.input_fields_wrap .input-group:last-child span').addClass('add_field');
		$('.input_fields_wrap .input-group:last-child span').removeClass('remove_field');
		$('.input_fields_wrap .input-group:last-child span').html('<i class="fa fa-plus"></i>');
    });
	}

	$( "#cities" ).autocomplete({
		source: function( request, response ) {
			 var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
			 response( $.grep( us_cities, function( item ){
				 return matcher.test( item );
			 }) );
		},
		minLength: 1,
		select: function(event, ui) {
			event.preventDefault();
			$("#cities").val(ui.item.value);
			$("#selected-tag").val(ui.item.value);
			$("#cities").blur();
			$("#other_city").hide();
			if(ui.item.value == 'Other'){
				$("#other_city").show();
			}
		}
	});

	
});

function tstep_signup(){
	jQuery("#fs_signup_btn a").hide();
	jQuery("#fs_signup_btn span").show();
	jQuery("#first_div .signup_btn").text('Loading...');
	jQuery(".ts_error").html('');
	var email=jQuery("#ts_email").val();
	if(email.trim()==""){
		jQuery(".ts_error").html('Email is required.');
		jQuery("#first_div .signup_btn").text('Sign Up Now');
		jQuery("#fs_signup_btn a").show();
		jQuery("#fs_signup_btn span").hide();
		return;
	}
	
	reloadCaptcha();
				
	jQuery.ajax({
		type:'post',
		url:jQuery("#tstep_btn").data('url'),
		data:{email:email},
		success:function(response){
			
			if(response.trim()=="success"){
				jQuery("#second_sign_box").show();
				jQuery("#second_div").show();
				jQuery("#first_sign_box").hide();
				jQuery("#first_div").hide();
				jQuery("#first_div .signup_btn").text('Sign Up Now');
				jQuery("#fs_signup_btn a").show();
				jQuery("#fs_signup_btn span").hide()
			}else{
				jQuery("#fs_signup_btn a").show();
				jQuery("#fs_signup_btn span").hide();
				jQuery(".ts_error").html(response);
				jQuery("#first_div .signup_btn").text('Sign Up Now')
			}
		}
	});
}

function reloadCaptcha(){
	jQuery(".cap_wrap i").addClass('fa-spin');
	jQuery.ajax({
		type : 'get',
		url : jQuery("#captcha_url").val(),
		data : '',
		success : function( response ) {
			jQuery(".cap_wrap span").text(response);
			jQuery(".cap_wrap input").val('');
			jQuery(".cap_wrap i").removeClass('fa-spin');
		}
	});
}

function detectExtension(redirect_url){
	var ext = jQuery("#aff-extension-exists").text();
	
	if(ext.trim() == ''){
		jQuery(".on_web").removeClass('hide');
		jQuery(".on_web").addClass('show');
		jQuery(".button_wrap").addClass('show');
	} else {
		//window.location.href=redirect_url;
		jQuery(".button_wrap").addClass('show');
	}
}

function popup_ts_signup(){
	jQuery(".popup_fs_btn a").hide();
	jQuery(".popup_fs_btn span").show();
	jQuery(".popup_form_btn").html('Loading...');
	jQuery(".ajax-response-signup").html('');
	var email=jQuery("#register .new-member-email").val();
	var referral=jQuery("#register .referral_code").val();
	if(email.trim()==""){
		jQuery(".ajax-response-signup").html('<div class="alert alert-danger">All fields are required.</div>');
		jQuery(".popup_form_btn").html('Sign Up Now');
		jQuery(".popup_fs_btn a").show();
		jQuery(".popup_fs_btn span").hide();
		return!1
	}
	reloadCaptcha();
	jQuery.ajax({
		type:'post',
		url:verifyEmailUrl,
		data:{action:'validate_ts_signup',email:email,referral:referral},
		success:function(response){
			if(response.trim()=="success"){
				jQuery("#signup_second_box").show();
				jQuery("#signup_first_box").hide();
				jQuery(".popup_form_btn").html('Sign Up Now')
			}else{
				jQuery(".ajax-response-signup").html('<div class="alert alert-danger">'+response+'</div>');
				jQuery(".popup_form_btn").html('Sign Up Now')
			}
		jQuery(".popup_fs_btn a").show();
		jQuery(".popup_fs_btn span").hide()
	   }
	});
}

function show_popup_fst_scrn(){
	jQuery("#signup_first_box").show();
	jQuery("#signup_second_box").hide();
	jQuery(".ajax-response-signup").html('')
}

function show_store_first_click(link){
	jQuery('#continue_first_click_btn').attr('link',link);
	jQuery('#continue_first_click_btn').attr('target','_blank');
	jQuery("#store_first_click").modal('show');
}

function reload_page(){
	var url = jQuery('#continue_first_click_btn').attr('link');
	window.open(url, '_blank');
	setTimeout(function(){window.location.reload(); }, 500);
}

function __highlight(s, t) {
  var matcher = new RegExp("("+$.ui.autocomplete.escapeRegex(t)+")", "ig" );
  return s.replace(matcher, "$1");
}

function login_session(thumbnail, $this, url){
	jQuery("#login_sessionModal").modal('show');
	jQuery('#login_sessionModal img').attr('src',thumbnail);
	jQuery('.pop-continue').attr('href',url).attr('link',$($this).attr('link'));
	// jQuery('.pop-login-btn').attr('onclick','setLoginRedirectSession("'+url+'")');
}

$.ui.autocomplete.prototype._renderItem = function (ul, item) {
item.label = item.label.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(this.term) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong>$1</strong>");
    return $("<li></li>")
            .data("item.autocomplete", item)
            .append("<a>" + item.label + "</a>")
            .appendTo(ul);
};

function copy_text(){
	var input = document.getElementById("refer_link_text"); 
	var isiOSDevice = navigator.userAgent.match(/ipad|iphone/i);

	if (isiOSDevice) {
	  
		var editable = input.contentEditable;
		var readOnly = input.readOnly;

		input.contentEditable = true;
		input.readOnly = false;

		var range = document.createRange();
		range.selectNodeContents(input);

		var selection = window.getSelection();
		selection.removeAllRanges();
		selection.addRange(range);

		input.setSelectionRange(0, 999999);
		input.contentEditable = editable;
		input.readOnly = readOnly;

	} else {
		input.select();
	}
	
	document.execCommand('copy');
	jQuery("#copy_btn").text('Link Copied');
}

function goto_next_step(step){
	
	if(step == 2){
		
		jQuery('.error').html('');
		var error = false;
		var property_type = jQuery("input[name='property_type']:checked").val() || 'empty';		
		if(property_type == '' || property_type == 'empty'){			
			jQuery('#property_type_error').html('Please choose one option');
			var error = true;
		}
		
		var how_property_be_used = jQuery("input[name='how_property_be_used']:checked").val() || 'empty';
		if(how_property_be_used == '' || how_property_be_used == 'empty'){
			jQuery('#how_property_be_used_error').html('Please choose one option');
			var error = true;
		}
		
		var when_buy = jQuery("input[name='when_buy']:checked").val() || 'empty';
		if(when_buy == '' || when_buy == 'empty'){
			jQuery('#when_buy_error').html('Please choose one option');
			var error = true;
		}
		
		var estimated_purchase_price = jQuery('#estRange').val();
		var location = jQuery('#cities').val().trim();
		var other_location = jQuery('#other_city').val().trim();
		
		// console.log('location='+location);
		// console.log('other_location='+other_location);
		if(location == '' || location == 'undefined' || (location == 'Other' && (other_location == '' || other_location == 'undefined') )){
			jQuery('#location_error').html('Please enter your city name');
			var error = true;
		}
		
		var full_name = jQuery('#full_name').val();
		if(jQuery.trim(full_name) == ''){
			jQuery('#full_name_error').html('Please enter your name');
			var error = true;
		} else {
			var filter = /^[a-zA-Z\s]+$/;
			if (!filter.test(full_name)) {			
				jQuery('#full_name_error').html('Invalid Name');
				var error = true;
			}
		}
		
		var gender = jQuery("input[name='gender']:checked").val() || 'empty';
		if(gender == '' || gender == 'empty'){
			jQuery('#gender_error').html('Please choose your gender');
			var error = true;
		}
		
		if(error == true){
			$( ".form_section .error" ).each(function( index ) {
				if($( this ).text().trim()){
					var scroll_to = $( this ).attr('id');
					// console.log(scroll_to);
					$('html, body').animate({
						scrollTop: ($("#"+scroll_to).offset().top - parseInt(50))
					}, 'slow');
					return false;
				}
			});
			return false;
		} 
		
		
		var cashback_amount = parseInt(estimated_purchase_price) * comm * parseInt(1000) / parseInt(100);
		
		//cashback_amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		
		jQuery('span#cashback_amount').html('$'+cashback_amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
		jQuery('span#full_name_desc').html(full_name);
		
		jQuery(".loading_overlay").show();
		window.scrollTo(0, 0);
		jQuery(".bottom_header, .user_cb_details a, .banner_section, .banner_overlay_shadow, .as_featured_section, .hiw_section, .testimonials_section, .faq_section, .form_section").hide();
		jQuery(".user_cb_details").append('<a href="'+homeUrl+'" class="homepg_menu1 cancel_form_btn">Cancel Form</a>');
		jQuery(".navbar-toggle-custom.pull-right.collapsed").hide();
		jQuery(".form_section_second").show();
		jQuery("#steps").val(step);
		
	}else if(step == 3){
		
		jQuery('.error').html('');
		var error = false;
		
		var email_address = jQuery('#email_address').val();
		if(email_address == ''){
			jQuery('#email_address_error').html('Please enter your email address');
			var error = true;
		} else {
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (!filter.test(email_address)) {			
				jQuery('#email_address_error').html('Invalid email address');
				var error = true;
			}
		}
		
		var phone_number = jQuery('#phone_number').val();
		if(phone_number == ''){
			jQuery('#phone_number_error').html('Please enter your contact number');
			var error = true;
		} else {			
			var filter = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4,9})$/;
			if (!filter.test(phone_number)) {			
				jQuery('#phone_number_error').html('Invalid contact number. It should be 10 to 15 digits.');
				var error = true;
			}
		}
		
		var real_estate_agent = jQuery("input[name='real_estate_agent']:checked").val() || 'empty';		
		if(real_estate_agent == '' || real_estate_agent == 'empty'){			
			jQuery('#real_estate_agent_error').html('Please choose one option');
			var error = true;
		}
		
		var first_time_buy = jQuery("input[name='first_time_buy']:checked").val() || 'empty';
		if(first_time_buy == '' || first_time_buy == 'empty'){
			jQuery('#first_time_buy_error').html('Please choose one option');
			var error = true;
		}
		
		var mortgage_status = jQuery("input[name='mortgage_status']:checked").val() || 'empty';
		if(mortgage_status == '' || mortgage_status == 'empty'){
			jQuery('#mortgage_status_error').html('Please choose one option');
			var error = true;
		}
		
		var anyquestion = jQuery('#anyquestion').val();
		
		if(error == true){
			$( ".form_section_second .error" ).each(function( index ) {
				if($( this ).text().trim()){
					var scroll_to = $( this ).attr('id');
					// console.log(scroll_to);
					$('html, body').animate({
						scrollTop: ($("#"+scroll_to).offset().top - parseInt(50))
					}, 'slow');
					return false;
				}
			});
			return false;
		}
		
		jQuery("img.primary.img-responsive").show();
		jQuery(".buy_house_mobile.img-responsive").addClass('step3');
		jQuery(".mobile_view.form_second_heading").addClass('step3_padding');
		
		jQuery(".loading_overlay").show();
		window.scrollTo(0, 0);
		jQuery("nav#mobile_menu").css('background','#ffffff');
		jQuery(".form_section_second").hide();
		jQuery(".form_section_third").show();
		jQuery("#steps").val(step);
				
	}else if(step == 4){
		
		jQuery('.error').html('');
		var error = false;
		
		var down_payment = jQuery('#down_payment').val();
		
						var hb_tc = jQuery("input[name='hb_tc']:checked").val() || 'empty';		
				if(hb_tc == '' || hb_tc == 'empty'){			
					jQuery('#hb_tc_error').html('Please accept the terms & conditions');
					var error = true;
				}
				
		var co_borrower = jQuery("input[name='co_borrower']:checked").val() || 'empty';		
		if(co_borrower == '' || co_borrower == 'empty'){			
			jQuery('#co_borrower_error').html('Please choose one option');
			var error = true;
		}
		
		var credit_score = jQuery("input[name='credit_score']:checked").val() || 'empty';
		if(credit_score == '' || credit_score == 'empty'){
			jQuery('#credit_score_error').html('Please choose one option');
			var error = true;
		}
		
		var born_year = jQuery('#born_year').val();
		if(born_year == '' || born_year == '-1'){
			jQuery('#born_year_error').html('Please select your born year');
			var error = true;
		}
		
		var bankruptcy_foreclosure = jQuery("input[name='bankruptcy_foreclosure']:checked").val() || 'empty';
		if(bankruptcy_foreclosure == '' || bankruptcy_foreclosure == 'empty'){
			jQuery('#bankruptcy_foreclosure_error').html('Please choose one option');
			var error = true;
		}
		
		var spouse_served_in_military = jQuery("input[name='spouse_served_in_military']:checked").val() || 'empty';
		if(spouse_served_in_military == '' || spouse_served_in_military == 'empty'){
			jQuery('#spouse_served_in_military_error').html('Please choose one option');
			var error = true;
		}
		
		var bank_account = jQuery("input[name='bank_account']:checked").val() || 'empty';
		if(bank_account == '' || bank_account == 'empty'){
			jQuery('#bank_account_error').html('Please choose one option');
			var error = true;
		}
		
		if(error == true){
			$( ".form_section_third .error" ).each(function( index ) {
				if($( this ).text().trim()){
					var scroll_to = $( this ).attr('id');
					// console.log(scroll_to);
					$('html, body').animate({
						scrollTop: ($("#"+scroll_to).offset().top - parseInt(50))
					}, 'slow');
					return false;
				}
			});
			return false;
		}
		
		jQuery(".finish-btn").hide();
		jQuery(".loading-btn").show();
		
		jQuery.ajax({
			url: houseAjaxUrl,
			type:'post',
			data:jQuery('#multistep_form').serialize(),
			success:function(result){				
				if(result.type == 'success'){
					jQuery(".finish-btn").show();
					jQuery(".loading-btn").hide();
					jQuery(".loading_overlay").show();
					window.scrollTo(0, 0);
					jQuery("nav#mobile_menu").css({'box-shadow':'0px 0px 1px #a0a0a0','background': '#ffffff'});
					jQuery(".form_section_second").hide();
					jQuery(".form_section_third").hide();
					jQuery(".form_section_fourth").show();
					jQuery(".menu_sec .cancel_form_btn").remove();
					jQuery(".menu_sec").append('<a href="http://test.vastedge.com/cdc" class="homepg_menu1 cancel_form_btn">Back to Homepage</a>');
					jQuery("#steps").val(step);
					setTimeout(function(){jQuery(".loading_overlay").hide();}, 1000);
				} else {
					alert("error: "+result.message);
					jQuery('body').scrollTop( 10 );
					jQuery(".finish-btn").show();
					jQuery(".loading-btn").hide();
				}				
			}
		});
	}
	
	setTimeout(function(){jQuery(".loading_overlay").hide();}, 1500);
}

function goto_prev_step(step){
	jQuery(".loading_overlay").show();
	window.scrollTo(0, 0);	
	if(step == 1){
		jQuery(".navbar-toggle-custom.pull-right.collapsed").show();
		jQuery(".user_cb_details .cancel_form_btn").remove();
		jQuery(".form_section_second, .form_section_third, .form_section_fourth").hide();
		jQuery(".bottom_header, .user_cb_details a:not(.my_account_mob_btn), .banner_section, .banner_overlay_shadow, .as_featured_section, .hiw_section, .testimonials_section, .faq_section, .form_section").show();
	}else if(step == 2){
		
		jQuery("img.primary.img-responsive").hide();
		jQuery(".buy_house_mobile.img-responsive").removeClass('step3');
		jQuery(".mobile_view.form_second_heading").removeClass('step3_padding');
		
		jQuery("nav#mobile_menu").css('background','transparent');
		jQuery(".menu_sec li, .banner_section, .banner_overlay_shadow, .as_featured_section, .hiw_section, .testimonials_section, .faq_section, .form_section").hide();
		jQuery(".form_section_third, .form_section_fourth").hide();
		jQuery(".menu_sec").append('<a href="'+homeUrl+'" class="homepg_menu1 cancel_form_btn">Cancel Form</a>');
		jQuery(".form_section_second").show();
	}
	jQuery("#steps").val(step);
	setTimeout(function(){jQuery(".loading_overlay").hide();}, 1500);
}



/* code for change value */
var slider1 = document.getElementById("estRange");
var output1 = document.getElementById("newRange");
var maxVal1 = $('#estRange').attr('max');

if(slider1){
	if(slider1.value == maxVal1){
		var content1 = '1M+';
	} else {
		var increasedVal = parseInt(slider1.value) + parseInt(50);
		
		if(increasedVal > 1000){
			increasedVal = '1M+';
		}else if(increasedVal == 1000){
			increasedVal = '1M';
		} else {
			increasedVal = increasedVal +'k';
		}
		
		var content1 = '$'+ slider1.value +'k to $'+increasedVal;
	}
	// console.log('content1='+content1);
	output1.innerHTML = content1;

	slider1.oninput = function() {
		var curVal = $('#estRange').val();
		
		if(curVal == maxVal1){
			var content1 = '1M+';
		} else {
			var increasedVal = parseInt(curVal)+parseInt(50);
			if(increasedVal > 1000){
				increasedVal = '1M+';
			}else if(increasedVal == 1000){
				increasedVal = '1M';
			} else {
				increasedVal = increasedVal +'k';
			}
			var content1 = '$'+curVal+'k to $'+increasedVal;
		} 
		output1.innerHTML = content1;  
	}
}

function outputUpdate(){
	var curVal = $('#estRange').val();
	var maxVal1 = $('#estRange').attr('max');
	
	if(curVal == maxVal1){
		var content = '1M+';
	} else {
		var increasedVal = parseInt(curVal)+parseInt(50);
		if(increasedVal > 1000){
			increasedVal = '1M+';
		}else if(increasedVal == 1000){
			increasedVal = '1M';
		} else {
			increasedVal = increasedVal +'k';
		}
		var content1 = '$'+curVal+'k to $'+increasedVal;
	}
	// console.log('new content='+content1);
	$("#newRange").html(content1);
}


/* code for second change value */
var slider = document.getElementById("down_payment_Range");
var output = document.getElementById("SecondRange");
var maxVal = $('#down_payment_Range').attr('max');

if(slider){
	if(slider.value == maxVal){
		var content = '1M+';
	} else {
		var increasedVal = parseInt(slider.value) + parseInt(25);
		
		if(increasedVal > 1000){
			increasedVal = '1M+';
		}else if(increasedVal == 1000){
			increasedVal = '1M';
		} else {
			increasedVal = increasedVal +'k';
		}
		
		var content = '$'+ slider.value +'k to $'+increasedVal;
	}
	output.innerHTML = content;

	slider.oninput = function() {
		var curVal = $('#down_payment_Range').val();	
		var increasedVal = parseInt(curVal)+parseInt(25);
		if(increasedVal > 1000){
			increasedVal = '1M+';
		}else if(increasedVal == 1000){
			increasedVal = '1M';
		} else {
			increasedVal = increasedVal +'k';
		}
		var content = '$'+curVal+'k to $'+increasedVal;
		
		output.innerHTML = content;  
	}
}

/* code for move slider */
var val = ($('#down_payment_Range').val() - $('#down_payment_Range').attr('min')) / ($('#down_payment_Range').attr('max') - $('#down_payment_Range').attr('min'));
    
$('#down_payment_Range').css('background-image',
	'-webkit-gradient(linear, left top, right top, '
	+ 'color-stop(' + val + ', #6ac5dc), '
	+ 'color-stop(' + val + ', #d6d5d9)'
	+ ')'
);

$('#down_payment_Range').on("change mousemove", function (){
    var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
    
    $(this).css('background-image',
		'-webkit-gradient(linear, left top, right top, '
		+ 'color-stop(' + val + ', #6ac5dc), '
		+ 'color-stop(' + val + ', #d6d5d9)'
		+ ')'
	);
});

function outputUpdate1(){
	var curVal = $('#down_payment_Range').val();
	var maxVal1 = $('#down_payment_Range').attr('max');
	
	if(curVal == maxVal1){
		var content = '1M+';
	} else {
		var increasedVal = parseInt(curVal)+parseInt(25);
		if(increasedVal > 1000){
			increasedVal = '1M+';
		}else if(increasedVal == 1000){
			increasedVal = '1M';
		} else {
			increasedVal = increasedVal +'k';
		}
		var content1 = '$'+curVal+'k to $'+increasedVal;
	}
	// console.log('new content='+content1);
	$("#SecondRange").html(content1);
}

/* End Second Range slider code */

$( '.lined_options input[type=radio]' ).on( 'change', function() {
    $this = $( this );
    $this.parent().parent().parent().addClass( 'currently_enabled' );
	$('.currently_enabled input[type="radio"]').each(function(){
		if ($(this).prop('checked')) {
           $(this).parent().addClass( 'clicked' );
        }else{
			$(this).parent().removeClass( 'clicked' );
		}
	});
	$('.option_container_wrap').removeClass( 'currently_enabled' );
} );

$('input[name=rating]' ).on( 'change', function() {
	var ratingVal = $(this).val();	
	jQuery.ajax({
		url: ratingAjaxUrl,
		type:'post',
		data:{"input":ratingVal},
		success:function(result){
			console.log(result);
		}
	});	
});

function send_feedback(){
	var feedback = $("#feedback").val();
	if(feedback == ''){
		jQuery('#feedback_error').html('please enter feedback');
		return false;
	} else {
		if(feedback.length > 300){
			jQuery('#feedback_error').html('maximum 300 characters allowed');
			return false;
		}
	}
	jQuery('.send_feedback').hide();
	jQuery('.feedback_loading_btn').show();
	
	jQuery.ajax({
		url: feedbackAjaxUrl,
		type:'post',
		data:{input:feedback},
		success:function(result){
			$("#feedback").val('');
			jQuery('.feedback_loading_btn').css('background', '#56980e');
			jQuery('.feedback_loading_btn').html('Thanks for your feedback');
			
			setTimeout(function(){window.location.href=homeUrl}, 100);
		}
	});	
}

function select_city(city){
	if(city == 'other'){
		$("#other_city").show();
	}else{
		$("#other_city").hide();
	}
}

$('.navbar-brand').on('click', function(e) {
	e.preventDefault();
	var blank = false;
	var property_type = jQuery("input[name='property_type']:checked").val() || 'empty';
	var how_property_be_used = jQuery("input[name='how_property_be_used']:checked").val() || 'empty';
	var when_buy = jQuery("input[name='when_buy']:checked").val() || 'empty';
	var location = jQuery('#cities').val().trim();
	var other_location = jQuery('#other_city').val().trim();
	var full_name = jQuery('#full_name').val();
	var gender = jQuery("input[name='gender']:checked").val() || 'empty';
	
	if((property_type == '' || property_type == 'empty') && (how_property_be_used == '' || how_property_be_used == 'empty') && (when_buy == '' || when_buy == 'empty') && (location == '' || location == 'undefined' || (location == 'Other' && (other_location == '' || other_location == 'undefined') )) && (jQuery.trim(full_name) == '') && (gender == '' || gender == 'empty') ){var blank = true;}
		
	var stepVal = jQuery("#steps").val();
	
	if(blank == true || stepVal == '4'){
		window.location.href=homeUrl;
	} else {
		$('#confirm').modal('show')
		.one('click', '#yes', function(e) {
			window.location.href=homeUrl;
		});
	}
  
});

function mcb_popup(store,track_id,store_id, form_allowed){
	$("#mcb_modal .mcb_fields").hide();
	$("#mcb_modal .modal-footer .btn-success").hide();
	$("#mcb_modal .mcb_txt").hide();
	$("#mcb_modal .mcb_txt1").hide();
	$("#mcb_modal .mcb_txt2").hide();
	jQuery.ajax({
		type : 'POST',
		url  : mcbUrl,
		data : {track_id : track_id},
		success : function(response){
			if(response.trim() == "exist"){
				$("#mcb_modal .mcb_txt1").show();
				jQuery("#mcb_response").html('');
				$("#mcb_modal").modal("show");
				return false;
			}else{
				if(store == "NA"){
					$("#mcb_modal .mcb_txt").show();
				}else{
					if(form_allowed == '1'){
						$("#mcb_modal .mcb_fields").show();
						$("#mcb_modal .modal-footer .btn-success").show();
						$("#click_id").val(track_id);
						$("#store_name").val(store);
						$("#order_date").val('');
						$("#order_no").val('');
						$("#sale_amount").val('');
						$("#notes").val('');
						$("#store_id").val(store_id);
					} else {
						$("#mcb_modal .mcb_txt2").show();
					}
				}
				jQuery("#mcb_response").html('');
				$("#mcb_modal").modal("show");
			}
		}
	});
}

