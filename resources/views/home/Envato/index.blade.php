<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codechant.com/Envato/html/rosa/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:32:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
    
    <!--------------- Hero area --------------->
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="supports-shipping">
                    <div class="col-sm-4">
                        <div class="support-shipping">
                            <div class="support-shipping-icon">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                            </div>
                            <div class="support-shipping-content">
                                <h5><a href="#">Free Shipping</a></h5>
                                <p>Get Free Shipping on all orders over $75</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="support-shipping">
                            <div class="support-shipping-icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="support-shipping-content">
                                <h5><a href="#">Support 24/7</a></h5>
                                <p>Consult our specialists for help with ans order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="support-shipping">
                            <div class="support-shipping-icon">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="support-shipping-content">
                                <h5><a href="#">No Customs or duty fees!</a></h5>
                                <p>We pay these fees so you don't have to!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div id="hero-slider" class="hero-slider owl-carousel">
                        <div style="background-image: url(img/slider/slider1.jpg)">
                            <div class="slider-caption">
                                <h2>Big Sale</h2>
                                <h1>Up to 50% off</h1>
                                <a class="btn btn-default btn-big" href="#">Shop Now!</a>
                            </div>
                        </div>
                        <div style="background-image: url(img/slider/slider2.jpg)">
                            <div class="slider-caption">
                                <h2>Big Sale</h2>
                                <h1>Up to 50% off</h1>
                                <a class="btn btn-default btn-big" href="#">Shop Now!</a>
                            </div>
                        </div>
                        <div style="background-image: url(img/slider/slider3.jpg)">
                            <div class="slider-caption">
                                <h2>Big Sale</h2>
                                <h1>Up to 50% off</h1>
                                <a class="btn btn-default btn-big" href="#">Shop Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="banner">
                        <a class="banner-box" href="#">
                            <img src="<?= asset('Envato/img/banner/img-static1.jpg') ?>"  alt="banner box 1">
                        </a>
                        <a class="banner-box" href="#">
                            <img src="<?= asset('Envato/img/banner/img-static2.jpg') ?>"  alt="banner box 2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--------------- Main wrap --------------->
    <div class="main-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-4">
                    
                    @include("home.Envato.sidemenu");
                    
                    <!--------------- Top Seller Module --------------->
                    <div class="module shop-widget top-widget secondary-module">
                        <h4 class="module-title linked-title"><a href="#"><i class="fa fa-check-square" aria-hidden="true"></i>Top sellers</a><span class="toggle-btn"></span></h4>
                        <div class="module-content mobile-collapse">
                            <ul class="widget-products">
                                <li class="widget-product">
                                    <a class="widget-item-img" href="#">
                                        <img src="<?= asset('Envato/img/product/sthumb-1.jpg') ?>"  alt="Product Thumb">
                                    </a>
                                    <div class="widget-product-content">
                                        <h5 class="product-name"><a href="#">Contour Skinny</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="5">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">$27.00</p>
                                    </div>
                                </li>
                                <li class="widget-product">
                                    <a class="widget-item-img" href="#">
                                        <img src="<?= asset('Envato/img/product/sthumb-2.jpg') ?>"  alt="Product Thumb">
                                    </a>
                                    <div class="widget-product-content">
                                        <h5 class="product-name"><a href="#">Lynn Skinny</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">$13.21</p>
                                    </div>
                                </li>
                                <li class="widget-product">
                                    <a class="widget-item-img" href="#">
                                        <img src="<?= asset('Envato/img/product/sthumb-3.jpg') ?>"  alt="Product Thumb">
                                    </a>
                                    <div class="widget-product-content">
                                        <h5 class="product-name"><a href="#">Funnky Fair</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">$26.00</p>
                                    </div>
                                </li>
                                <li class="widget-product">
                                    <a class="widget-item-img" href="#">
                                        <img src="<?= asset('Envato/img/product/sthumb-4.jpg') ?>"  alt="Product Thumb">
                                    </a>
                                    <div class="widget-product-content">
                                        <h5 class="product-name"><a href="#">Contour Hightwais</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="5">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">$24.00</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!--------------- Testimonial Module --------------->
                    <div class="module shop-widget testimonial-widget secondary-module">
                        <h4 class="module-title"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>What client says<span class="toggle-btn"></span></h4>
                        <div class="module-content mobile-collapse">
                            <div class="widget-testimonials">    
                                <div id="testimonials-carousel" class="owl-carousel">
                                    <div class="testimonial">
                                        <blockquote>“This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque felis lorem, pulvinar sed eros non, sagittis consequat urna."</blockquote>
                                        <div class="client-avatar">
                                            <img src="<?= asset('Envato/img/client/client-1.png') ?>"  alt="Client Avatar">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="clinet-name">Jane Doe</h4>
                                            <p class="client-desig">Online Marketer</p>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <blockquote>“This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque felis lorem, pulvinar sed eros non, sagittis consequat urna."</blockquote>
                                        <div class="client-avatar">
                                            <img src="<?= asset('Envato/img/client/client-2.png') ?>"  alt="Client Avatar">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="clinet-name">Cornelius Reeves</h4>
                                            <p class="client-desig">Project Manager</p>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <blockquote>“This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque felis lorem, pulvinar sed eros non, sagittis consequat urna."</blockquote>
                                        <div class="client-avatar">
                                            <img src="<?= asset('Envato/img/client/client-3.png') ?>"  alt="Client Avatar">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="clinet-name">Jochen Rechsteiner</h4>
                                            <p class="client-desig">Stylish Marketer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module shop-widget text-module secondary-module">
                        <h4 class="module-title"><i class="fa fa-th-large" aria-hidden="true"></i>Custom HTML Blocks<span class="toggle-btn"></span></h4>
                        <div class="module-content mobile-collapse">
                            <div class="text-conent">
                                <p style="margin: 0;">“Aliquam quis risus viverra, ornare ipsum vitae, congue tellus. Vestibulum nunc lorem, scelerisque a tristique non, accumsan ornare eros. Nullam sapien metus, volutpat dictum. Praesent tellus felis, aliquet id augue at, tincidunt vestibulum leo, aliquam quis risus viverra, ornare ipsum vitae."</p>
                            </div>
                        </div>
                    </div>
                    <div class="module shop-widget slider-widget">
                        <div class="module-content">
                            <div class="sidebar-slider">
                                <div id="new-arrival-carousel" class="owl-carousel default-img-carousel">
                                    <a href="#">
                                        <img src="<?= asset('Envato/img/slider/sidebar-slide-1.jpg') ?>"  alt="Sidebar slide">
                                    </a>
                                    <a href="#">
                                        <img src="<?= asset('Envato/img/slider/sidebar-slide-2.jpg') ?>"  alt="Sidebar slide">
                                    </a>
                                    <a href="#">
                                        <img src="<?= asset('Envato/img/slider/sidebar-slide-3.jpg') ?>"  alt="Sidebar slide">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8">
                    <!--------------- Main Product Widget --------------->
                    <div class="module shop-widget product-module">
                        <!-- Product tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">New Arrivals</a></li>
                            <li role="presentation"><a href="#bestsellers" aria-controls="bestsellers" role="tab" data-toggle="tab">Bestsellers</a></li>
                            <li role="presentation"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">Featured Products</a></li>
                            <li role="presentation"><a href="#mostviewed" aria-controls="mostviewed" role="tab" data-toggle="tab">Most Viewed</a></li>
                            <li role="presentation"><a href="#custom" aria-controls="custom" role="tab" data-toggle="tab">Custom</a></li>
                        </ul>
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="new">
                                <div class="row">
                                    <div class="product-container">
                                        <div class="product col-lg-4 col-sm-6 new custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/1-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/1.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Funnky</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$29.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 new featured">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/2-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/2.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Funnky hight</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$12.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 bestsellers custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/3-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/3.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Contour Skinny</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$21.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 mostviewed custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/4-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/4.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Lynn Skinny</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$26.99</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 featured custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/5-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/5.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Printed Dress</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$24.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 new mostviewed">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/6-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/6.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Sleved Fair</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$29.99</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="bestsellers">
                                <div class="row">
                                    <div class="product-container">
                                        <div class="product col-lg-4 col-sm-6 new custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/1-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/1.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Funnky</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$29.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 new featured">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/2-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/2.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Funnky hight</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$12.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 bestsellers custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/3-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/3.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Contour Skinny</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$21.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 mostviewed custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/4-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/4.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Lynn Skinny</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$26.99</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 featured custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/5-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/5.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Printed Dress</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$24.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 new mostviewed">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/6-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/6.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Sleved Fair</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$29.99</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="featured">
                                <div class="row">
                                    <div class="product-container">
                                        <div class="product col-lg-4 col-sm-6 new custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/1-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/1.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Funnky</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$29.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 new featured">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/2-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/2.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Funnky hight</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$12.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 bestsellers custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/3-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/3.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Contour Skinny</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$21.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 mostviewed custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/4-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/4.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Lynn Skinny</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$26.99</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 featured custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/5-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/5.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Printed Dress</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$24.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 new mostviewed">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/6-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/6.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Sleved Fair</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$29.99</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="mostviewed">
                                <div class="row">
                                    <div class="product-container">
                                        <div class="product col-lg-4 col-sm-6 new custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/1-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/1.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Funnky</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$29.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 new featured">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/2-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/2.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Funnky hight</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$12.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 bestsellers custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/3-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/3.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Contour Skinny</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$21.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 mostviewed custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/4-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/4.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Lynn Skinny</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$26.99</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 featured custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/5-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/5.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Printed Dress</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$24.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 new mostviewed">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/6-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/6.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Sleved Fair</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$29.99</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="custom">
                                <div class="row">
                                    <div class="product-container">
                                        <div class="product col-lg-4 col-sm-6 new custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/1-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/1.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Funnky</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$29.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 new featured">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/2-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/2.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Funnky hight</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$12.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 bestsellers custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/3-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/3.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Contour Skinny</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$21.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 mostviewed custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/4-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/4.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Lynn Skinny</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$26.99</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 featured custom">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/5-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/5.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="new">New</span>
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Printed Dress</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$24.00</p>
                                            </div>
                                        </div>
                                        <div class="product col-lg-4 col-sm-6 new mostviewed">
                                            <div class="product-thumb">
                                                <a href="#" class="thumb-link">
                                                    <img class="hover-img" src="<?= asset('Envato/img/product/6-hover.jpg') ?>"  alt="Product Hover">
                                                    <img class="front-img" src="<?= asset('Envato/img/product/6.jpg') ?>"  alt="Product Front">
                                                </a>
                                                <div class="attr-group">
                                                    <span class="sale">Sale!</span>
                                                </div>
                                                <div class="product-btn">
                                                    <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                                    <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                                    <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><a href="#">Sleved Fair</a></h5>
                                                <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                                    <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star star_full"></span>
                                                        <span class="star"></span>
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="ratingValue" content="4">
                                                        <meta itemprop="bestRating" content="5">
                                                    </div>
                                                </div>
                                                <p class="price">$29.99</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                        
                    
                    <!--------------- banners --------------->
                    <div class="module shop-widget banners">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="banner">
                                    <a href="#">
                                        <img src="<?= asset('Envato/img/banner/banner-1.jpg') ?>"  alt="Banner">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="banner">
                                    <a href="#">
                                        <img src="<?= asset('Envato/img/banner/banner-2.jpg') ?>"  alt="Banner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--------------- Special offers --------------->
                    <div class="module shop-widget offer-widget">
                        <h4 class="module-title linked-title"><a href="#"><i class="fa fa-arrows" aria-hidden="true"></i>Specials</a></h4>
                        <div class="module-content">
                            <div id="specials-carousel" class="default-carousel owl-carousel">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/7-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/7.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="item-countdown">
                                            <div class="item-countdown-time" data-time="2017/06/06 00:00:00"></div>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Funnky Heightwair</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">
                                            <span class="regular-price">$80.99</span>
                                            <span class="discount-price">$60.80</span>
                                            <span class="reduction">-25%</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/8-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/8.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Contour Hightwais</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">
                                            <span class="regular-price">$99.99</span>
                                            <span class="discount-price">$80.00</span>
                                            <span class="reduction">-20%</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/9-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/9.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="item-countdown">
                                            <div class="item-countdown-time" data-time="2017/06/06 00:00:00"></div>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Lynn Fair</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">
                                            <span class="regular-price">$50.99</span>
                                            <span class="discount-price">$40.80</span>
                                            <span class="reduction">-20%</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/10-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/10.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="item-countdown">
                                            <div class="item-countdown-time" data-time="2017-06-06 00:00:00"></div>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Frame Skyn</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">
                                            <span class="regular-price">$30.99</span>
                                            <span class="discount-price">$20.80</span>
                                            <span class="reduction">-33%</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/11-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/11.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Funnky Skyn</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">
                                            <span class="regular-price">$199.99</span>
                                            <span class="discount-price">$150.00</span>
                                            <span class="reduction">-25%</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/12-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/12.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="item-countdown">
                                            <div class="item-countdown-time" data-time="2017-06-06 00:00:00"></div>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Lynn Skinny</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">
                                            <span class="regular-price">$50.99</span>
                                            <span class="discount-price">$40.80</span>
                                            <span class="reduction">-20%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--------------- Banner area / 2 --------------->
                    <div class="module shop-widget banner-widget">
                        <div class="module-content">
                            <div class="banner">
                                <a href="#">
                                    <img src="<?= asset('Envato/img/banner/banner-3.jpg') ?>"  alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!--------------- Toplist of the week --------------->
                    <div class="module shop-widget top-widget">
                        <h4 class="module-title"><i class="fa fa-align-left" aria-hidden="true"></i>Toplist of the week</h4>
                        <div class="module-content">
                            <div id="toplist-carousel" class="owl-carousel default-carousel">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/12-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/12.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Funnky Hightwair</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">
                                            <span class="regular-price">$40.99</span>
                                            <span class="discount-price">$20.80</span>
                                            <span class="reduction">-50%</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/13-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/13.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Contour Fair</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">$40.80</p>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/14-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/14.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Contour Hightwais</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">$50.99</p>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/7-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/7.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="item-countdown">
                                            <div class="item-countdown-time" data-time="2017-06-06 00:00:00"></div>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Funnky Fair</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">
                                            <span class="regular-price">$80.00</span>
                                            <span class="discount-price">$40.80</span>
                                            <span class="reduction">-50%</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/15-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/15.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="item-countdown">
                                            <div class="item-countdown-time" data-time="2017-06-06 00:00:00"></div>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Lynn Skinny</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">
                                            <span class="regular-price">$100.00</span>
                                            <span class="discount-price">$40.80</span>
                                            <span class="reduction">-60%</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/8-hover.jpg') ?>"  alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/8.jpg') ?>"  alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="item-countdown">
                                            <div class="item-countdown-time" data-time="2017-06-06 00:00:00"></div>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><a href="#">Contour Skinny</a></h5>
                                        <div class="rating" itemtype="http://schema.org/Offer" itemscope>
                                            <div class="star_rating" itemtype="http://schema.org/AggregateRating" itemscope itemprop="aggregateRating">
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star star_full"></span>
                                                <span class="star"></span>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="4">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                        </div>
                                        <p class="price">
                                            <span class="regular-price">$59.99</span>
                                            <span class="discount-price">$40.99</span>
                                            <span class="reduction">-33%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-------------- From our blog --------------->
            <div class="row">
                <div class="col-md-12">
                    <div class="module blog-widget">
                        <h4 class="module-title linked-title"><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>From the blog</a></h4>
                        <div class="module-content">
                            <div class="article-carousel owl-carousel">
                                <article class="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="thumb-holder">
                                                <a class="thumb" href="#">
                                                    <img src="<?= asset('Envato/img/blog/blog-1.jpg') ?>"  alt="Feature image">
                                                </a>
                                                <div class="post-date">
                                                    <span class="p_date">13</span>
                                                    <span class="p_month">Aug</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="#">Summer Entertaining</a>
                                                </h3>
                                                <p> Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris.</p>
                                                <a href="#" class="readmore">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="thumb-holder">
                                                <a class="thumb" href="#">
                                                    <img src="<?= asset('Envato/img/blog/blog-2.jpg') ?>"  alt="Feature image">
                                                </a>
                                                <div class="post-date">
                                                    <span class="p_date">13</span>
                                                    <span class="p_month">Aug</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="#">Summer Entertaining</a>
                                                </h3>
                                                <p> Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris.</p>
                                                <a href="#" class="readmore">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="thumb-holder">
                                                <a class="thumb" href="#">
                                                    <img src="<?= asset('Envato/img/blog/blog-3.jpg') ?>"  alt="Feature image">
                                                </a>
                                                <div class="post-date">
                                                    <span class="p_date">13</span>
                                                    <span class="p_month">Aug</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="#">Summer Entertaining</a>
                                                </h3>
                                                <p> Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris.</p>
                                                <a href="#" class="readmore">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="thumb-holder">
                                                <a class="thumb" href="#">
                                                    <img src="<?= asset('Envato/img/blog/blog-4.jpg') ?>"  alt="Feature image">
                                                </a>
                                                <div class="post-date">
                                                    <span class="p_date">13</span>
                                                    <span class="p_month">Aug</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="#">Summer Entertaining</a>
                                                </h3>
                                                <p> Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris.</p>
                                                <a href="#" class="readmore">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="thumb-holder">
                                                <a class="thumb" href="#">
                                                    <img src="<?= asset('Envato/img/blog/blog-5.jpg') ?>"  alt="Feature image">
                                                </a>
                                                <div class="post-date">
                                                    <span class="p_date">13</span>
                                                    <span class="p_month">Aug</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="#">Summer Entertaining</a>
                                                </h3>
                                                <p> Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris.</p>
                                                <a href="#" class="readmore">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="thumb-holder">
                                                <a class="thumb" href="#">
                                                    <img src="<?= asset('Envato/img/blog/blog-6.jpg') ?>"  alt="Feature image">
                                                </a>
                                                <div class="post-date">
                                                    <span class="p_date">13</span>
                                                    <span class="p_month">Aug</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="#">Summer Entertaining</a>
                                                </h3>
                                                <p> Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris.</p>
                                                <a href="#" class="readmore">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
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
            
            <!-------------- Map --------------->
            <div class="row">
                <div class="col-md-12">
                    <div id="mapwrap" class="mapwrap">
                        <div class="google-map" id="location" data-lat="48.8560635" data-lng="2.3482364" data-zoom="10" style="height: 100%"></div>
                    </div>
                </div>
            </div>
         </div> </div> </div>
    
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

<!-- Mirrored from codechant.com/Envato/html/rosa/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:34:20 GMT -->
</html>