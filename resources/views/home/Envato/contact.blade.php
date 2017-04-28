<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codechant.com/Envato/html/rosa/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:35:11 GMT -->
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
            <a class="breadcrumb-link" href="/gril_project/public/Envato/index-2" title="Return to Home">Home</a><i class="breadcrumb-arrow fa fa-angle-right"></i><span class="breadcrumb-current">Contact</span>
        </div>
    </div>
    
    <!--------------- Main wrap --------------->
    <div class="main-wrap static-page">
        <div class="container">
            <div class="row">
                <div class="display-flex" style="margin: 15px 0">
                    <div class="col-sm-6">
                        <form id="contactForm" class="basicfields account-form" action="#" method="post">
                            <h4 class="form-title">Contact Us</h4>
                            <input type="text" name="name" placeholder="Your Name *" required>
                            <input type="email" name="email" placeholder="Email address *" required>
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit" name="send" class="btn btn-default pos-absolute"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-infos contact-page">
                            <h4 class="form-title">Contact Details</h4>
                            <div class="cotact-info contact-address">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <p class="contact-content">42 avenue des Champs Elysées 75 Paris</p>
                            </div>
                            <div class="cotact-info contact-phone">
                                <div class="contact-icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <p class="contact-content">Call us now: 0123-456-789</p>
                            </div>
                            <div class="cotact-info contact-email">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <p class="contact-content">Email : fieldthemes@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-------------- Map --------------->
            <div class="row">
                <div class="col-md-12">
                    <div id="mapwrap" class="mapwrap">
                        <div class="google-map" id="location" data-lat="48.8560635" data-lng="2.3482364" data-zoom="10" style="height: 100%"></div>
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
                                   <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-1.png') ?>" alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-2.png') ?>" alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-3.png') ?>" alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-4.png') ?>" alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-5.png') ?>" alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-1.png') ?>" alt="brand logo"></a>
                                <a class="brand" href="#"><img src="<?= asset('Envato/img/brand/brand-2.png') ?>" alt="brand logo"></a>
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
    <script src="<?= asset('Envato/js/visible.js') ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI') ?>"></script>
   <script src="<?= asset('Envato/js/map.js') ?>"></script>
    <script src="<?= asset('Envato/js/custom.js') ?>"></script>
</body>

<!-- Mirrored from codechant.com/Envato/html/rosa/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:35:11 GMT -->
</html>