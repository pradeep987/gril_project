<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codechant.com/envato/html/rosa/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:34:54 GMT -->
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosa - Responsive Ecommerce Template</title>
    <meta name="description" content="Rosa is Responsive eCommerce Template">
    
    <!-- External CSS -->
    <link rel="stylesheet" href="<?= asset('Envato/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('Envato/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('Envato/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('Envato/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('Envato/css/jquery-ui.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('Envato/css/jquery.fancybox.css') ?>">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= asset('Envato/css/style.css') ?>">
    <link rel="stylesheet" href="<?= asset('Envato/css/responsive.css') ?>">
    
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:400,700%7cPathway+Gothic+One" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="<?= asset('Envato/img/icon/favicon.ico') ?>">
	<link rel="apple-touch-icon" href="<?= asset('Envato/images/apple-touch-icon.html') ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= asset('Envato/img/icon-72x72.html') ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= asset('Envato/img/icon-114x114.html') ?>">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   
    <!--------------- Header --------------->
     @include("home.Envato.header"); 
    
    <!--------------- Primary navigation --------------->
      @include("home.Envato.menu");
    
    <!--------------- Breadcumb --------------->
    <div class="breadcrumb-wrap"> 
        <div class="container">
            <a class="breadcrumb-link" href="/gril_project/public/Envato/index-2" title="Return to Home">Home</a><i class="breadcrumb-arrow fa fa-angle-right"></i><span class="breadcrumb-current">Your shopping cart</span>
        </div>
    </div>
    
    <!--------------- Main wrap --------------->
    <div class="main-wrap static-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h4 class="page-title">Shopping-cart Summary</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="cart-steps">
                        <li class="cart-step summery complete">01. Summary</li>
                        <li class="cart-step account current">02. Sign in</li>
                        <li class="cart-step address">03. Address</li>
                        <li class="cart-step shipping">04. Shipping</li>
                        <li class="cart-step payment">05. Payment</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="display-flex" style="margin-bottom: 15px">
                    <div class="col-sm-6">
                        <form id="registerForm" class="basicfields account-form" action="#" method="post">
                            <h4 class="form-title">Create an account</h4>
                            <p>Please enter your email address to create an account</p>
                            <input type="email" name="email" placeholder="Email address">
                            <button type="submit" name="signup" class="btn btn-default pos-absolute"><i class="fa fa-user" aria-hidden="true"></i><a href="#" class="resetlink"  style="color:white;">  Create an account</a></button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <form id="signinForm" class="basicfields account-form" action="#" method="post">
                            <h4 class="form-title">Already Registered?</h4>
                            <input type="email" name="email" placeholder="Email address">
                            <input type="password" name="password" placeholder="Password">
                            <a href="#" class="resetlink">Forgot your password?</a><br/><br/>
                            <button type="submit" class="btn btn-default"><i class="fa fa-lock" aria-hidden="true"></i><a href="#" class="resetlink"  style="color:white;"> Sign in</a></button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-------------- Our brands --------------->
            <div class="row">
                <div class="col-md-12">
                    <div class="module brand-widget">
                        <h4 class="module-title"><i class="fa fa-globe" aria-hidden="true"></i>Our brands</h4>
                        <div class="module-content">
                            <div id="brand-carousel" class="brand-carousel owl-carousel">
                                         <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-1.png') ?>"  alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-2.png') ?>"  alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-3.png') ?>"  alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-4.png') ?>"  alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-5.png') ?>"  alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-1.png') ?>"  alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-2.png') ?>"  alt="brand logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-------------- Footer --------------->
       @include("home.Envato.footer");
    
    <!--------------- Back to Top --------------->
    <a id="toTop" class="toTop" href="#header"><i class="fa fa-angle-up"></i></a>
    
    <!--------------- Javascript external files -------------->
 <script src="<?= asset('Envato/js/jquery.min.js') ?>"></script>
    <script src="<?= asset('Envato/js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset('Envato/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= asset('Envato/js/jquery.countdown.js') ?>"></script>
    <script src="<?= asset('Envato/js/jquery-ui.min.js') ?>"></script>
    <script src="<?= asset('Envato/js/jquery.fancybox.js') ?>"></script>
    <script src="<?= asset('Envato/js/jquery.elevatezoom.js') ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
   <script src="<?= asset('Envato/js/map.js') ?>"></script>
    <script src="<?= asset('Envato/js/custom.js') ?>"></script>
</body>

<!-- Mirrored from codechant.com/envato/html/rosa/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:34:55 GMT -->
</html>