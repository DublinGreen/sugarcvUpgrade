<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="_t" content="{{ csrf_token() }}" />
    <!-- Favicon icon -->
    <title>	@yield('page-title') </title>

    @stack('before-styles')
	
	  <!-- Favicons -->
	  <link href="{{ url('images/logo/fafa-icon.png')}}" rel="icon">
	  <link href="{{ url('images/logo/fafa-icon.png')}}" rel="apple-touch-icon">

	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
	  
	  <!-- Bootstrap CSS File -->
	 <link href="{{ url('asset_new/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> 

	  <!-- Libraries CSS Files -->
	  <link href="{{ url('asset_new/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	  <link href="{{ url('asset_new/lib/animate/animate.min.css')}}" rel="stylesheet">
	  <link href="{{ url('asset_new/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
	  <link href="{{ url('asset_new/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
	  <link href="{{ url('asset_new/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
	  
	  <!-- datepicker -->
	  <link href="{{ url('asset_new/lib/datepicker/datepicker.min.css')}}" rel="stylesheet">

	  <!-- Main Stylesheet File -->
	  <link href="{{ url('asset_new/css/style.css')}}" rel="stylesheet">
	  <link href="{{ url('asset_new/css/font.css')}}" rel="stylesheet">
    @section('template-css')
    @show

    @stack('after-styles')
	<script>var homeUrl = "{{ url('/') }}";</script>

</head>

<body class="@yield('body-classes') card-no-border " id="body">

@yield('layout-content')

@stack('before-scripts')

	
  <script src="{{ url('asset_new/lib/jquery/jquery.min.js')}}"></script>
	<!-- JavaScript Libraries -->
  <script src="{{ url('asset_new/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ url('asset_new/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('asset_new/lib/easing/easing.min.js')}}"></script>
  <script src="{{ url('asset_new/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{ url('asset_new/lib/wow/wow.min.js')}}"></script>
  <script src="{{ url('asset_new/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ url('asset_new/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ url('asset_new/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ url('asset_new/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ url('asset_new/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ url('asset_new/contactform/contactform.js')}}"></script>
  
  <!-- datepicker -->
  <script src="{{ url('asset_new/lib/datepicker/datepicker.min.js')}}"></script>
  
  <!-- Template Main Javascript File -->
  <script src="{{ url('asset_new/js/main.js')}}"></script>
  
  <script src="{{ url('asset_new/js/script.js') }}"></script>
  
<script>
function myfunction(){
	var x = document.getElementById("create");
	if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
myfunction
</script>

<script>
$(".alert").fadeTo(2000, 500).slideUp(500, function(){
   $(".alert").slideUp(500);
});
</script>
		
			
<script>	


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}	

$( "#resume" ).click(function() {
  $("#create_resume").hide();  
  $("#upload_resume").show();
});	

$("#close_resume").click(function(){	
	$("#upload_resume").hide();  
	$("#create_resume").show();
	
});
$('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });


		</script>		
		

@section('template-custom-js')
    {{--Defaults to Material --}}
@show

@stack('after-scripts')

</body>

</html>
