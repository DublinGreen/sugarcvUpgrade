<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="_t" content="{{ csrf_token() }}" />
    <!-- Favicon icon -->
    <title>	@yield('page-title') </title>

    @stack('before-styles')
	
     <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('admin_css/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('admin_css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('admin_css/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <link rel="stylesheet" href="{{url('admin_css/css/style.css')}}">
    @section('template-css')
    @show

    @stack('after-styles')


</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<!---body class="@yield('body-classes') app header-fixed sidebar-fixed aside-menu-fixed pace-running pace-done sidebar-lg-show animated fadeIn"--->

@yield('layout-content')

@stack('before-scripts')

<!-- jQuery -->
<script src="{{url('admin_css/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('admin_css/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('admin_css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('admin_css/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{url('admin_css/dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{url('admin_css/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{url('admin_css/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('admin_css/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{url('admin_css/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('admin_css/plugins/chart.js/Chart.min.js')}}"></script>


<script src="{{url('admin_css/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{url('admin_css/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{url('admin_css/dist/js/pages/dashboard2.js')}}"></script>
<script src="{{url('admin_css/js/script.js')}}"></script>
  <style>
  .hiden{
	  display:none ;
  }
  </style>
 <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script>
$(".alert").fadeTo(2000, 500).slideUp(500, function(){
   $(".alert").slideUp(500);
});
	
	</script>
@section('template-custom-js')
    {{--Defaults to Material --}}
@show

@stack('after-scripts')

</body>

</html>
