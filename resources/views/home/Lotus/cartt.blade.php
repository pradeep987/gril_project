<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themesground.com/Lotus/V1/HTML/track-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:18:21 GMT -->
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

@include("Lotus.header");
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="/laravel/public/Lotus/home">Home</a></li>
				<li class='active'>Track your orders</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">

		   <div class="well">
        
                   <div style="background-color: green;color:white; height:50px;width:100%;font-size:20px;border-radius:5px;">
               1. <strong fon-size:25px;>BEFORE YOU PLACE YOUR ORDER! > Sign In</strong>
               
               </div>
               
               <div style="background-color:white; height:350px;width:100%;font-size:18px;border-radius:2px;">
                   <div class="row" ><div class="col-lg-6 text-center" style="margin-top:20px;">
                  <strong>Get started with our secure login flow</strong>
                       </div>
                       <div class="col-lg-6" style="margin-top:20px;">
                        <strong>Advantages of Sign Up</strong>
                       </div>
                   </div>
                   
                   <div class="row"  >
                   <div class="col-lg-6 text-center"  style="margin-top:25px;">
                       <input  type="text" value=""/>
                       </div>
                       <div class="col-lg-6 pull-right">
               <i class="fa fa-truck" aria-hidden="true"></i> <strong>Manage your Orders Easily Track Orders, Hassle free Returns</strong>  
               </div></div>
                   <br><br>
                    <div class="row" >
                   <div class="col-lg-6 text-center" style="margin-bottom:0px;">
                   
                    <input  class="btn btn-primary" type="button" value="COTINUE"/ >
               </div>
                           <div class="col-lg-6 pull-right">
                   
                  <i class="fa fa-bell" aria-hidden="true"></i> <strong>Make Informed DecisionsGet Relevant Alerts and Recommendations</strong>
               </div>
         </div>
                 <br><br>  <div class="row" >
                       <div class="col-lg-6 "></div>
                   <div class="col-lg-6 pull-right"> 
                  <i class="fa fa-heart" aria-hidden="true"></i> <strong>Engage SociallyWith wishlists, Reviews, Ratings</strong>
         </div>
         </div>
	 </div>
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->


<!-- ============================================================= FOOTER : END============================================================= -->
@include("Lotus.footer");

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

<!-- Mirrored from themesground.com/Lotus/V1/HTML/track-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:18:21 GMT -->
</html>
