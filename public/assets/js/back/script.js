jQuery(document).ready(function(){
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

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="_t"]').attr("content")
		}
	});
	
	$(".action-form").each(function(o) {
		var r = $(this);
		r.on("submit", function(o) {
			o.preventDefault();
			var form_Data = new FormData(this);
			var s = r.find("[type=submit]");
			var a = r.find(":input");
			a.prop("readonly", !0);
			var n = r.attr("http-type").toUpperCase();
			s.attr("disabled", true);
			s.find(".btn-label").hide();
			s.find(".btn-spinner").show();
			$.ajax({
				type: n,
				data: form_Data,
				url: r.data("url"),
				processData: false,
				contentType: false,
				success: function(t) {
					if(t.type == "success"){
						toastr.success(t.message, "Success");						
					} else {
						toastr.error(t.message, "Error");
					}
					s.attr("disabled", false);
					s.find(".btn-label").show();
					s.find(".btn-spinner").hide();
					a.prop("readonly", !1),
					"success" === t.type && void 0 !== t.redirect && window.location.replace(t.redirect)
				},
				error: function(t, o, r) {
					toastr.error(t.responseText, "Error"),
					a.prop("readonly", !1);
					s.attr("disabled", false);
					s.find(".btn-label").show();
					s.find(".btn-spinner").hide();
				}
			})
		})
	});
	
	jQuery(document).on('click', 'a[data-event="edit"]', function(){
		var url = jQuery(this).data('url');
		$.ajax({
			type: 'get',
			url: url,
			success: ajaxCallbackData,
			error: function(t, o, r) {	
				toastr.error("Error in request.", "Error")
			}	
		});
	});
	
	jQuery(document).on('click', 'a[data-event="delete"]', function(){
		var id = jQuery(this).data("id");
		jQuery("input[name='id']").val(id);
	});

	jQuery("#uploadCsv").submit(function(o){
		o.preventDefault();
		var r = $(this);
		var form_Data = new FormData(this);
		var s = r.find("[type=submit]");
		s.attr("disabled", true);
		s.find(".btn-label").hide();
		s.find(".btn-spinner").show();
		
		xhr = new XMLHttpRequest();
		 xhr.open("POST", r.data("url"), true);
		 xhr.onprogress = function(e) {
			 jQuery("#progressing").show();
			 jQuery("#response").html(e.currentTarget.responseText);
		 }
		 xhr.onreadystatechange = function() {
		   if (xhr.readyState == 4) {
			 console.log("Complete = " + xhr.responseText);
				s.attr("disabled", false);
				s.find(".btn-label").show();
				s.find(".btn-spinner").hide();
		   }
		 }
		 xhr.send(form_Data);
	});
	jQuery("#chart_form").submit(function(o){
		o.preventDefault();
		var r = $(this);
		var form_Data = new FormData(this);
		var s = r.find("[type=submit]");
		var a = r.find(":input");
		a.prop("readonly", !0);
		s.attr("disabled", true);
		s.find(".btn-label").hide();
		s.find(".btn-spinner").show();
		jQuery(".invalid-feedback").hide();
		
		$.ajax({
			type: "post",
			data: form_Data,
			url: r.data("url"),
			processData: false,
			contentType: false,
			success: function(t) {
				s.attr("disabled", false);
				s.find(".btn-label").show();
				s.find(".btn-spinner").hide();
				a.prop("readonly", !1);
				if(t.type == "success"){
					drawChart(t.data);
				} else {
					jQuery(".invalid-feedback").show();
				}
			},
			error: function(t, o, r) {
				a.prop("readonly", !1),
				s.attr("disabled", false);
				s.find(".btn-label").show();
				s.find(".btn-spinner").hide();
			}
		})
	});
	
	jQuery(document).on('click', '.switch-status', function(){
		var id = jQuery(this).val();
		if(jQuery(this).prop("checked") == true){
			var status = '1';
		} else {
			var status = '0';
		}
		$.ajax({
			type: "post",
			data: {'id':id, 'status': status},
			url: window.bannerStatus,
			success: function(t) {
			},
			error: function(t, o, r) {
			}
		})
	});
	
	$('.counter').each(function() {
	  var $this = $(this), countTo = $this.attr('data-count');
	  $({ countNum: $this.text()}).animate({
		countNum: countTo
	  },{
		duration: 2000,
		easing:'linear',
		step: function() {
		  $this.text(Math.floor(this.countNum));
		},
		complete: function() {
		  $this.text(this.countNum);
		}
	  });
	});
	
    $('.table-grid tbody').on('click', 'a[data-event="fatch"]', function (o) {
		o.preventDefault();
		var a = $(this);
		a.find(".btn-spinner").css("display","inline-block");
		a.find('i[class*=" fa-angle-"]').hide();
		var tr = $(this).closest('tr');
		var user_id = jQuery(this).data("user_id");
		jQuery.ajax({
			url:jQuery.fn.ajaxUrl,
			type:"post",
			data:{"user_id":user_id},
			success:function(response){
				if(response.type == "success" && response.data){
					a.attr("aria-expanded","true");
					a.attr("data-toggle","collapse");
					a.attr("data-target","#tr_"+user_id);
					a.removeAttr("data-event");
					a.find(".btn-spinner").hide();
					a.find('i[class*=" fa-angle-"]').removeAttr('style');
					var view = format(response.data, user_id);
					$( tr ).after( view );
				}
			},
			fail:function(){},
		});
		
    });


});
