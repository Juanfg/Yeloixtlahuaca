<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Centro de Asistencia Yeloixtlahuaca A.C.</title>
	<meta name="description" content="Unika - Responsive One Page HTML5 Template">
	<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
	<meta name="author" content="imransdesign.com">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Fonts  -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

	<!-- Libs and Plugins CSS -->
	<link rel="stylesheet" href="{{URL::asset('assetsYelo/inc/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assetsYelo/inc/animations/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assetsYelo/inc/font-awesome/css/font-awesome.min.css')}}"> <!-- Font Icons -->
	<link rel="stylesheet" href="{{URL::asset('assetsYelo/inc/owl-carousel/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assetsYelo/inc/owl-carousel/css/owl.theme.css')}}">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{URL::asset('assetsYelo/css/reset.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assetsYelo/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assetsYelo/css/mobile.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assetsYelo/css/skin/fresh-lime.css')}}">

</head>

<body data-spy="scroll" data-target="#main-navbar">
	<div class="page-loader"></div>  <!-- Display loading image while page loads -->
	<div class="body">

		<!--========== BEGIN HEADER ==========-->
		<header id="header" class="header-main">

			<!-- Begin Navbar -->
			<nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand page-scroll" href="#">Yeloixtlahuaca</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="page-scroll" href="{{URL::asset('#header')}}">Inicio</a></li>
							<li><a class="page-scroll" href="{{URL::asset('#mission-section')}}">Mision, Vision y Objetivo</a></li>
							<li><a class="page-scroll" href="{{URL::asset('#portfolio-section')}}">Secciones</a></li>
							<li><a class="page-scroll" href="{{URL::asset('#team-section')}}">Integrantes</a></li>
							<li><a class="page-scroll" href="{{URL::asset('#partners-section')}}">Donantes</a></li>
							<li><a class="page-scroll" href="{{URL::asset('#social-section')}}">Redes Sociales</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
			<!-- End Navbar -->

		</header>
		<!-- ========= END HEADER =========-->
		@yield('img')
		@yield('radio')
		@yield('mvo')
		@yield('secciones')
		@yield('team')
		@yield('donantes')
		@yield('paypal')
		@yield('social')

	</div>
	<!-- Plugins JS -->
	<script src="{{URL::asset('assetsYelo/inc/jquery/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('assetsYelo/inc/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('assetsYelo/inc/owl-carousel/js/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('assetsYelo/inc/stellar/js/jquery.stellar.min.js')}}"></script>
	<script src="{{URL::asset('assetsYelo/inc/animations/js/wow.min.js')}}"></script>
	<script src="{{URL::asset('assetsYelo/inc/waypoints.min.js')}}"></script>
	<script src="{{URL::asset('assetsYelo/inc/isotope.pkgd.min.js')}}"></script>
	<script src="{{URL::asset('assetsYelo/inc/classie.js')}}"></script>
	<script src="{{URL::asset('assetsYelo/inc/jquery.easing.min.js')}}"></script>
	<script src="{{URL::asset('assetsYelo/inc/jquery.counterup.min.js')}}"></script>
	<script src="{{URL::asset('assetsYelo/inc/smoothscroll.js')}}"></script>

	<!-- Theme JS -->
	<script src="{{URL::asset('assetsYelo/js/theme.js')}}"></script>
</body>
</html>
