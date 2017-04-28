<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codechant.com/Envato/html/rosa/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:35:04 GMT -->
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
      <script src="<?= asset('Envato/js/html5shiv.min.js') ?>"></script>
      <script src="<?= asset('Envato/js/respond.min.js') ?>"></script>
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
            <a class="breadcrumb-link" href="/gril_project/public/Envato/index-2" title="Return to Home">Home</a><i class="breadcrumb-arrow fa fa-angle-right"></i><span class="breadcrumb-current">About us</span>
        </div>
    </div>
    
    <!--------------- Main wrap --------------->
    <div class="main-wrap static-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h4 class="page-title">About us</h4>
                    </div>
                </div>
            </div>
            <div class="row">
               
                <!---------- Our story section ---------->
                <div class="section">
                    <div class="col-md-6">
                        <h4 class="section-heading">Our story</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Lorem ipsum dolor sit amet.</p>
                        <blockquote>Duis dictum, neque at hendrerit euismod, elit nulla mattis mi, vel auctor sem dolor nec nisl. Etiam hendrerit arcu pretium, aliquet nulla eu, placerat ipsum. Nullam suscipit nulla a sapien gravida euismod. Fusce quis ligula quis dui aliquam posuere vel sed lectus. Duis dictum, neque at hendrerit euismod, elit nulla mattis mi</blockquote>
                        <p>Etiam nulla nunc, aliquet vel metus nec, scelerisque tempus enim. Sed eget blandit lectus. Donec facilisis ornare turpis id pretium. Maecenas scelerisque interdum dolor in vestibulum. Proin euismod dui purus, non lacinia ligula luctus aIn volutpat cursus quam, a blandit neque accumsan vitae. Maecenas scelerisque interdum dolor in vestibulum.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= asset('Envato/img/pages/story.jpg') ?>" alt="Our story image">
                    </div>
                </div>
                
                <!---------- Our skills section ---------->
                <div class="section">
                    <div class="col-md-12">
                        <h4 class="section-heading">Our skill</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="skills">
                            <div class="skill prestashop">
                                <h6>Prestashop</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span>100%</span></div>
                                </div>
                            </div>
                            <div class="skill photoshop">
                                <h6>Photoshop</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span>80%</span></div>
                                </div>
                            </div>
                            <div class="skill html-css">
                                <h6>HTML/CSS</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span>90%</span></div>
                                </div>
                            </div>
                            <div class="skill other">
                                <h6>Other</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span>50%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Lorem ipsum dolor sit amet.Aliquam ornare hendrerit augue. Cras tellusCras tellus.</p>
                        <p>Proin euismod dui purus, non lacinia ligula. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Maecenas scelerisque interdum dolor in vestibulum. Proin euismod dui purus, non lacinia ligula luctus aIn volutpat cursus quam, a blandit neque accumsan vitae.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
                
                <!--------------- Our team --------------->
                <div class="section">
                    <div class="col-md-12">
                        <h4 class="section-heading">Meet our team</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="members">
                                <div class="col-md-3 col-sm-6">
                                    <div class="member-img">
                                        <img src="<?= asset('Envato/img/pages/team-1.jpg') ?>" alt="Team Member">
                                    </div>
                                    <h4 class="member-name">BRYAN JHONSON</h4>
                                    <p class="member-role">CEO &amp; Co-Founder</p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="member-img">
                                        <img src="<?= asset('Envato/img/pages/team-2.jpg') ?>" alt="Team Member">
                                    </div>
                                    <h4 class="member-name">JORDAN MARK</h4>
                                    <p class="member-role">Designer</p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="member-img">
                                        <img src="<?= asset('Envato/img/pages/team-3.jpg') ?>" alt="Team Member">
                                    </div>
                                    <h4 class="member-name">ROKAN TECH</h4>
                                    <p class="member-role">Developer</p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="member-img">
                                        <img src="<?= asset('Envato/img/pages/team-4.jpg') ?>" alt="Team Member">
                                    </div>
                                    <h4 class="member-name">MARIANE SMITH</h4>
                                    <p class="member-role">Customer Care</p>
                                </div>
                            </div>
                        </div>
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

<!-- Mirrored from codechant.com/Envato/html/rosa/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:35:11 GMT -->
</html>