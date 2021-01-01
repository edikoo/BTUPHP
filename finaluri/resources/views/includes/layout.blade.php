<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>პირადი კაბინეტი</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Title -->
		<link rel="stylesheet" href="{{ asset('admin/assets/fonts/fonts/font-awesome.min.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

		<!-- Sidemenu Css -->
		<link rel="stylesheet" href="{{ asset('admin/assets/css/sidemenu.css')}}">

		<!-- Bootstrap Css -->
		<link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}">

		<!-- Dashboard Css -->
		<link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
		<link rel="stylesheet" href="{{ asset('admin/assets/css/admin-custom.css')}}">

		<!-- c3.js Charts Plugin -->
		<link rel="stylesheet" href="{{ asset('admin/assets/plugins/charts-c3/c3-chart.css')}}">

		<!-- p-scroll bar css-->
		<link rel="stylesheet" href="{{ asset('admin/assets/plugins/pscrollbar/pscrollbar.css')}}">

		<!---Font icons-->
        <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet"/>
        <link href="{{ asset('admin/plugins/iconfonts/icons.css') }}" rel="stylesheet"/>

        
        <link rel="stylesheet" href="{{ asset('admin/assets/adminfonts/css/bpg-banner-extrasquare-caps.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/adminfonts/css/bpg-arial.min.css') }}">

        @stack('css')
    </head>

	<body class="app sidebar-mini">

		<div id="global-loader">
			<img src="{{ asset('admin/assets/images/products/products/loader.png') }}" class="loader-img floating" alt="">
		</div>

		<div class="page">
			<div class="page-main  h-100">
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
						
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
			
							<div class="d-flex order-lg-2 ml-auto">
								<div class="dropdown d-none d-md-flex" >
									<a  class="nav-link icon full-screen-link">
										<i class="fe fe-maximize-2"  id="fullscreen-button"></i>
									</a>
								</div>

								<div class="dropdown ">
									<a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
										<img src="{{ asset('admin/assets/images/faces/male/profile.png') }}" alt="profile-img" class="avatar avatar-md brround">
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="button">
											<i class="dropdown-icon icon icon-power"></i> გასვლა
                                        </a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="{{ asset('admin/assets/images/faces/male/profile.png') }}" alt="user-img" class="avatar avatar-lg brround">
							</div>
							<div class="user-info">
								<h2>გამარჯობა {{ Auth::user()->name }}</h2>
							</div>
						</div>
					</div>
					<ul class="side-menu">

						<li>
							<a class="side-menu__item" href="{{ route('home') }}"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">მთავარი</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cubes"></i><span class="side-menu__label">ამანათები</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">

								@can('Admin')
									<li>
										<a href="{{ route('parcel.create') }}" class="slide-item">ამანათის დამატება</a>
									</li>
								@endcan
								
									<li>
										<a href="{{ route('parcel.index', 1) }}" class="slide-item">საწყობში</a>
									</li>

									<li>
										<a href="{{ route('parcel.index', 2) }}" class="slide-item">გზაში</a>
									</li>

									<li>
										<a href="{{ route('parcel.index', 3) }}" class="slide-item">ჩამოსული</a>
									</li>
							</ul>
						</li>


						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">კატეგორიები</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
									<li>
										<a href="{{ route('category.create') }}" class="slide-item">დამატება</a>
									</li>
								
									<li>
										<a href="{{ route('category.index') }}" class="slide-item">სია</a>
									</li>
								
							</ul>
						</li>


				
					</ul>
				</aside>

                @yield('content')


			</div>

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © {{ date('Y') }} . დამზადებულია <a href="https://itweb.ge/">ITWEB.GE</a> მიერ ყველა წესის დაცვით.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>


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

        @stack('js')
	</body>


</html>