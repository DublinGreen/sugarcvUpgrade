$(function() {
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
	
	jQuery(".fit-content").keyup(function(){
		var i = jQuery(this).data("target");
		var d = jQuery(this).val();
		jQuery(i).text(d);
	});
	
	jQuery(".fit-content").blur(function(){
		var d = jQuery(this).val();		
		if(d != ''){
			jQuery(this).after('<span class="fa fa-check success-icon"></span>');
		}
	}); 
	
	jQuery(".fit-work-content").blur(function(){
		var d = jQuery(this).val();		
		
		console.log('d='+d);
		if(d != ''){
			jQuery(this).after('<span class="fa fa-check success-icon"></span>');
		}
	}); 
	
	jQuery(".btn-preview").click(function(){
		jQuery(this).parents('.resume-thumbnail').addClass('enable-preview').append('<span class="fa fa-close disable-preview"></span>');
	});  
	
	jQuery(document).on('click', '.disable-preview', function(){
		jQuery('.resume-thumbnail').removeClass('enable-preview');
		jQuery(this).remove();
	});
	
	jQuery(".spellcheck-action").click(function(){
		//var txt = jQuery("#FIELD_FNAM").text();
		spellcheck("#FIELD_FNAM");
	});

	jQuery("#ess-chat button.btn-box-tool").click(function(){
		jQuery(this).parents(".direct-chat").toggleClass('collapsed-box');
		setTimeout(function(){$('#chat-body').animate({ scrollTop: $("#chat-body")[0].scrollHeight }, 0);},200);	
	});
});

function spellcheck(sourceID){
	$('#spellcheckresults').remove();
	var txt = jQuery(sourceID).text();
	var $container = $('<div id="spellcheckresults"></div>').appendTo('body');
	offset = jQuery(sourceID).offset(), height = jQuery(sourceID)[0].offsetHeight, ul = $('<ul id="spellchecklist" data-target="'+sourceID+'"></ul>');
	jQuery.ajax({
		url:"http://localhost/jquery-spellcheck/spellcheck.php?text="+txt+"&lang=en&ignorecaps=1&ignoredigits=1",
		type:"POST",
		data:{text:encodeURIComponent(txt)},
		success:function(result){
			console.log(result);
			console.log(result.corrections[result.original]);
			console.log(result.corrections.length);
			
			if(jQuery.isEmptyObject( result.corrections )){
				return;
			}

			for ( k=0; k<result.corrections[result.original].length; k++ ){
				ul.append('<li>'+result.corrections[result.original][k]+'</li>');					
			}
			//ul.append('<li class="ignore">ignore</dd></li>');

			
			$container.append(ul).find('li').bind('click', function(event) {
				var $this = $(this), $parent = $this.parent(), $ele_id = $parent.data('target');
				console.log($this.text(), $ele_id);
				
				jQuery($ele_id).text($this.text());
				//jQuery($ele_id).text(jQuery($ele_id).val().replace( $parent.find('dt').text(), $this.text() ) );
				$('#spellcheckresults').remove();
				/*if ( !$this.is('.ignore') )
					self.$element.val( self.$element.val().replace( $parent.find('dt').text(), $this.text() ) );
				$parent.remove();
				if ( $('#spellcheckresults').is(':empty') )
					$('#spellcheckresults').remove();
				this.blur();*/
			}).end().css({ top: offset.top + height, left: offset.left });
		}
	});
		
}

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

function syncTemplate(){
	var data = window.resume;
	
	if(data){
		jQuery("#FIELD_FNAM").text(data.first_name);
		jQuery("#FIELD_LNAM").text(data.last_name);
		jQuery("#FIELD_HPHN").text(data.phone);
		jQuery("#FIELD_EMAI").text(data.email);
		jQuery("#FIELD_DCTL").text(data.profession);
		jQuery("#FIELD_STRT").text(data.street);
		jQuery("#FIELD_CITY").text(data.city);
		jQuery("#FIELD_STAT").text(data.state);
		jQuery("#FIELD_ZIPC").text(data.zip);
	}
}
