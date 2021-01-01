<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Title -->
	<title>პირადი კაბინეტი</title>
	<link rel="stylesheet" href="{{ asset('admin/assets/fonts/fonts/font-awesome.min.css')}}">

	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}">

	<!-- Sidemenu Css -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/sidemenu.css')}}">

	<!-- Dashboard css -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/admin-custom.css')}}">

	<!-- c3.js Charts Plugin -->
	<link rel="stylesheet" href="{{ asset('admin/assets/plugins/charts-c3/c3-chart.css')}}">

	<!---Font icons-->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet"/>
    
    <link rel="stylesheet" href="{{ asset('admin/assets/adminfonts/css/bpg-banner-extrasquare-caps.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/adminfonts/css/bpg-arial.min.css') }}">

	</head>
	<body class="construction-image h-100">

		<!--Loader-->
		<div id="global-loader">
			<img src="{{ asset('admin/assets/images/products/products/loader.png') }}" class="loader-img floating" alt="">
		</div>

		@yield('content')


		<!-- Dashboard js -->
		<script src="{{ asset('admin/assets/js/vendors/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('admin/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js') }}"></script>
		<script src="{{ asset('admin/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('admin/assets/js/vendors/jquery.sparkline.min.js') }}"></script>
		<script src="{{ asset('admin/assets/js/vendors/selectize.min.js') }}"></script>
		<script src="{{ asset('admin/assets/js/vendors/jquery.tablesorter.min.js') }}"></script>
		<script src="{{ asset('admin/assets/js/vendors/circle-progress.min.js') }}"></script>
		<script src="{{ asset('admin/assets/plugins/rating/jquery.rating-stars.js') }}"></script>
		<!-- p-scroll bar Js-->
		<script src="{{ asset('admin/assets/plugins/pscrollbar/pscrollbar.js') }}"></script>
		<script src="{{ asset('admin/assets/plugins/pscrollbar/pscroll.js') }}"></script>

		<!-- Fullside-menu Js-->
		<script src="{{ asset('admin/assets/plugins/toggle-sidebar/sidemenu.js') }}"></script>

		<!--Counters -->
		<script src="{{ asset('admin/assets/plugins/counters/counterup.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/counters/waypoints.min.js') }}"></script>
		<!-- Custom Js-->
		<script src="{{ asset('admin/assets/js/admin-custom.js') }}"></script>

	</body>
</html>