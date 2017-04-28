<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themesground.com/Lotus/V1/HTML/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:18:21 GMT -->
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Lotus premium HTML5 & CSS3 Template</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="<?= asset('Lotus/css/bootstrap.min.css') ?>">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="<?= asset('Lotus/css/main.css') ?>">
	    <link rel="stylesheet" href="<?= asset('Lotus/css/blue.css') ?>">
	    <link rel="stylesheet" href="<?= asset('Lotus/css/owl.carousel.css') ?>">
		<link rel="stylesheet" href="<?= asset('Lotus/css/owl.transitions.css') ?>">
		<link rel="stylesheet" href="<?= asset('Lotus/css/animate.min.css') ?>">
		<link rel="stylesheet" href="<?= asset('Lotus/css/rateit.css') ?>">
		<link rel="stylesheet" href="<?= asset('Lotus/css/bootstrap-select.min.css') ?>">

		

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="<?= asset('Lotus/css/font-awesome.css') ?>">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


	</head>
    <body class="cnt-home">
          @include("home.Lotus.header"); 

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-bd">
	<div class="container">
		<div class="x-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12 x-text text-center">
					<h1>404</h1>
					<p>We are sorry, the page you've requested is not available. </p>
					<form role="form" class="outer-top-vs outer-bottom-xs">
                        <input placeholder="Search" autocomplete="off">
                        <button class="  btn-default le-button">Go</button>
                    </form>
					<a href="/laravel/public/Lotus/home"><i class="fa fa-home"></i> Go To Homepage</a>
				</div>
			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
	</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->
@include("home.Lotus.footer");
<!-- ============================================================= FOOTER : END============================================================= -->


	<!-- For demo purposes – can be removed on production -->
	
	
	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="<?= asset('Lotus/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?= asset('Lotus/js/bootstrap.min.js') ?>"></script>
	<script src="<?= asset('Lotus/js/bootstrap-hover-dropdown.min.js') ?>"></script>
	<script src="<?= asset('Lotus/js/owl.carousel.min.js') ?>"></script>
	
	<script src="<?= asset('Lotus/js/echo.min.js') ?>"></script>
	<script src="<?= asset('Lotus/js/jquery.easing-1.3.min.js') ?>"></script>
	<script src="<?= asset('Lotus/js/bootstrap-slider.min.js') ?>"></script>
    <script src="<?= asset('Lotus/js/jquery.rateit.min.js') ?>"></script>
    <script type="text/javascript" src="<?= asset('Lotus/js/lightbox.min.js') ?>"></script>
    <script src="<?= asset('Lotus/js/bootstrap-select.min.js') ?>"></script>
    <script src="<?= asset('Lotus/js/wow.min.js') ?>"></script>
	<script src="<?= asset('Lotus/js/scripts.js') ?>"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="<?= asset('Lotus/switchstylesheet') ?>"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>

<!-- Mirrored from themesground.com/Lotus/V1/HTML/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:18:22 GMT -->
</html>
