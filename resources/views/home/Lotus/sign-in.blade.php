<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themesground.com/Lotus/V1/HTML/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:18:21 GMT -->
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
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="/gril_project/public/Lotus/home">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Sign in</h4>
	<p class="">Hello, Welcome to your account.</p>
	<div class="social-sign-in outer-top-xs">
		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
	</div>
	<form class="register-form outer-top-xs" role="form">
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
		</div>
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
		  	</label>
		  	<a href="#" class="forgot-password pull-right">Forgot your Password?</a>
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Create a new account</h4>
	<p class="text title-tag-line">Create your new account.</p>
	<form class="register-form outer-top-xs" role="form">
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
	    	<input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="<?= asset('Lotus/images/brands/brand1.png') ?>" src="<?= asset('Lotus/images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="<?= asset('Lotus/images/brands/brand2.png') ?>" src="<?= asset('Lotus/images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('Lotus/images/brands/brand3.png') ?>" src="<?= asset('Lotus/images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('Lotus/images/brands/brand4.png') ?>" src="<?= asset('Lotus/images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('Lotus/images/brands/brand5.png') ?>" src="<?= asset('Lotus/images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('Lotus/images/brands/brand6.png') ?>" src="<?= asset('Lotus/images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('Lotus/images/brands/brand2.png') ?>" src="<?= asset('Lotus/images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('Lotus/images/brands/brand4.png') ?>" src="<?= asset('Lotus/images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('Lotus/images/brands/brand1.png') ?>" src="<?= asset('Lotus/images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('Lotus/images/brands/brand5.png') ?>" src="<?= asset('Lotus/images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
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

<!-- Mirrored from themesground.com/Lotus/V1/HTML/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:18:21 GMT -->
</html>
