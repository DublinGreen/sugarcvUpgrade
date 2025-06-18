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

});

	
	
	
	$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
	  alert('ok');
    rules: {
      name: {
        required: true        
      },
        prices: {
        required: true
      },
    },
    messages: {
      name: {
        required: "Please enter Plan Name"        
      },
      
      prices: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});