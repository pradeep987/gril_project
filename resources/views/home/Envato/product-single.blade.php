<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codechant.com/Envato/html/rosa/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:34:56 GMT -->
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
            <a class="breadcrumb-link" href="/gril_project/public/Envato/index-2" title="Return to Home">Home</a><i class="breadcrumb-arrow fa fa-angle-right"></i><a class="breadcrumb-link" href="/gril_project/public/Envato/product-listing" title="Return to Women">Women</a><i class="breadcrumb-arrow fa fa-angle-right"></i><span class="breadcrumb-current">Contour Fair</span>
        </div>
    </div>
    
    <!--------------- Main wrap --------------->
    <div class="main-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-4">
                   
                    <!--------------- Special offers --------------->
                    <div class="module shop-widget offer-widget">
                        <h4 class="module-title linked-title"><a href="#"><i class="fa fa-arrows" aria-hidden="true"></i>Specials</a></h4>
                        <div class="module-content">
                            <div id="specials-carousel" class="carousel-item-1 owl-carousel">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/7-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/7.jpg') ?>" alt="Product Front">
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
                                            <a class="to-view" data-fancybox-type="iframe" href="#"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/8-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/8.jpg') ?>" alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="#"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/9-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/9.jpg') ?>" alt="Product Front">
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
                                            <a class="to-view" data-fancybox-type="iframe" href="#"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/10-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/10.jpg') ?>" alt="Product Front">
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
                                            <a class="to-view" data-fancybox-type="iframe" href="#"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/11-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/11.jpg') ?>" alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
                                        </div>
                                        <div class="product-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i><span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="#"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/12-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/12.jpg') ?>" alt="Product Front">
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
                                            <a class="to-view" data-fancybox-type="iframe" href="#"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
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
                    
                    <!--------------- Viewed products Module --------------->
                    <div class="module shop-widget viewed-widget secondary-module">
                        <h4 class="module-title"><i class="fa fa-check-square" aria-hidden="true"></i>Viewed Products</h4>
                        <div class="module-content">
                            <ul class="widget-products">
                                <li class="widget-product">
                                    <a class="widget-item-img" href="#">
                                        <img src="<?= asset('Envato/img/product/sthumb-1.jpg') ?>" alt="Product Thumb">
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
                                        <p class="item-desc">Long printed dress with thin...</p>
                                    </div>
                                </li>
                                <li class="widget-product">
                                    <a class="widget-item-img" href="#">
                                        <img src="<?= asset('Envato/img/product/sthumb-2.jpg') ?>" alt="Product Thumb">
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
                                        <p class="item-desc">Printed evening dress with straight...</p>
                                    </div>
                                </li>
                                <li class="widget-product">
                                    <a class="widget-item-img" href="#">
                                        <img src="<?= asset('Envato/img/product/sthumb-3.jpg') ?>" alt="Product Thumb">
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
                                        <p class="item-desc">Printed evening dress with straight...</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!--------------- Banner area --------------->
                    <div class="module shop-widget banner-widget">
                        <div class="module-content">
                            <div class="banner">
                                <a href="#">
                                    <img src="<?= asset('Envato/img/banner/women-page-2.jpg') ?>" alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-9 col-sm-8">
                    
                    <!--------------- Main Product Widget --------------->
                    <div class="module single-product">
                        <div class="row">
                            <div id="single-container" class="product-container">
                                <div class="product">
                                    <div class="col-md-5">
                                        <div class="product-thumb">
                                            <img id="img-holder" class="zoomable" src="<?= asset('Envato/img/product/15-big.jpg') ?>" alt="Product 15" data-zoom-image="img/product/15-big.jpg">
                                            <div class="list-thumbs">
                                                <a class="list-thumb active" href="#" data-image="img/product/15-big.jpg" data-image-zoom="img/product/15-big.jpg">
                                                    <img src="<?= asset('Envato/img/product/15-thumb.jpg') ?>" alt="15 Thumb">
                                                </a>
                                                <a class="list-thumb" href="#" data-image="img/product/15-hover-big.jpg" data-image-zoom="img/product/15-hover-big.jpg">
                                                    <img src="<?= asset('Envato/img/product/15-hover-thumb.jpg') ?>" alt="15 Thumb">
                                                </a>
                                            </div>
                                            <div class="attr-group">
                                                <span class="new">New</span>
                                                <span class="sale">Sale!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="product-info">
                                            <h3 class="product-name">Contour Fair</h3>
                                            <div class="comment-block">
                                                <div class="rating-block">
                                                    <span>Rating</span>
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
                                                </div>
                                                
                                                <div class="readreview-block">
                                                    <a href="#" class="to-review">
                                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                                        <span>Read </span>
                                                        <span class="review-number">( 1 )</span>
                                                    </a>
                                                </div>
                                                
                                                <div class="writereview-block">
                                                    <a href="#new_review_form" class="to-review-form">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        <span>Write A Review</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="product_model product-page-attr">
                                                <label>Model: </label>
                                                <span class="attr_value">demo_5</span>
                                            </p>
                                            <p class="product_condition product-page-attr">
                                                <label>Condition: </label>
                                                <span class="attr_value">New</span>
                                            </p>
                                            <p class="product_manufacturer product-page-attr">
                                                <label>Manufacturer: </label>
                                                <a href="#" class="attr_value">Activeden</a>
                                            </p>
                                            <p class="single-description">Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                            <p class="quantity-block">
                                                <span class="quantity_available">298</span><span style="display: none;" class="quantityAvailableTxt">Item</span><span class="quantityAvailableTxtMultiple">Items</span>
                                                <span class="availability-status label label-success">In stock</span>
                                            </p>
                                            <p class="warning_inline last_quantities" style="display: none;">Warning: Last items in stock!</p>
                                            <span class="price">$30.51</span>
                                        </div>
                                        <form id="buyForm" action="#" method="post">
                                            <input type="hidden" name="id_product" value="15">
                                            <input type="hidden" name="price" value="30.51"> <input type="hidden" name="currency" value="USD">
                                            <div class="box-info-product">
                                                <div class="product_attributes">
                                                    <div id="quantity_wanted" class="product_attribute">        
                                                        <label>Quantity</label>
                                                        <input type="number" name="qty" id="quantity_wanted_content" value="1" min="1">
                                                    </div>
                                                    <div id="size_wanted" class="product_attribute">
                                                        <label class="attribute_label">Size</label>
                                                        <div class="input-rule select">
                                                            <span class="input-style">S</span>
                                                            <select name="size" class="size">
                                                                <option value="s" selected="selected">S</option>
                                                                <option value="m">M</option>
                                                                <option value="l">L</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div id="color_wanted" class="product_attribute">
                                                        <label class="attribute_label">Color</label>
                                                        <div class="color-input">
                                                            <div class="input-rule input-radio">
                                                                <span class="input-style" style="background-color: #f5f5dc">Beige</span>
                                                                <input id="beige_color" type="radio" name="color" value="beige">
                                                            </div>
                                                            <div class="input-rule input-radio">
                                                                <span class="input-style input-radio" style="background-color: #ffffff">White</span>
                                                                <input id="white_color" type="radio" name="color" value="white">
                                                            </div>
                                                            <div class="input-rule input-radio">
                                                                <span class="input-style" style="background-color: #434A54">Black</span>
                                                                <input id="black_color" type="radio" name="color" value="black">
                                                            </div>
                                                            <div class="input-rule input-radio">
                                                                <span class="input-style" style="background-color: #F39C11">Orange</span>
                                                                <input id="orange_color" type="radio" name="color" value="orange">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-cart-bottom">
                                                <div id="usefull_link_block">
                                                    <a href="#" title="Add to my wishlist"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                                    <a href="#"><i class="fa fa-envelope-o"></i>Send to a friend</a>
                                                    <a href="javascript:print();"><i class="fa fa-print"></i>Print</a>
                                                </div>
                                                <button type="submit" name="Submit" class="btn btn-default"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                            </div>
                                        </form>
                                        
                                        <div class="share-on-social">
                                            <a href="#" class="share_twitter"><i class="fa fa-twitter"></i>Tweet</a>
                                            <a href="#" class="share_facebook"><i class="fa fa-facebook"></i>Share</a>
                                            <a href="#" class="share_google-plus"><i class="fa fa-google-plus"></i>Google+</a>
                                            <a href="#" class="share_pinterest"><i class="fa fa-pinterest"></i>Pinterest</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <!-- More information container -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="information-container product-module">
                                    <!-- Information tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#more" aria-controls="more" role="tab" data-toggle="tab">More info</a></li>
                                        <li role="presentation"><a href="#data-sheet" aria-controls="data-sheet" role="tab" data-toggle="tab">Data Sheet</a></li>
                                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="more">
                                            <div class="more-information">
                                                <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="data-sheet">
                                            <table class="data-table">
                                                <tr>
                                                    <td>Compositions</td>
                                                    <td>Viscose</td>
                                                </tr>
                                                <tr>
                                                    <td>Styles</td>
                                                    <td>Casual</td>
                                                </tr>
                                                <tr>
                                                    <td>Properties</td>
                                                    <td>Maxi Dress</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="reviews">
                                            <ul class="list-reviews">
                                                <li class="review">
                                                    <div class="review-heading">
                                                        <p class="review-author">John Doe</p>
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
                                                        <em class="rating_date">08/13/2015</em>
                                                    </div>
                                                    <div class="review-body">
                                                        <h5 class="review-title">Great Product</h5>
                                                        <p class="review-comment">Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <a href="#reviewForm" class="btn btn-default to-view" data-width="630">Write your review!</a>
                                            <form id="reviewForm" class="basicfields reviewform" method="post" accept-charset="#" style="display:none;">
                                                <div class="col-md-12"><h4 class="form-title">Write a review</h4></div>
                                                <div class="col-md-6">
                                                    <img src="<?= asset('Envato/img/product/15.jpg') ?>" alt="15 Review Giving">
                                                    <h5 class="product-name">Funnky</h5>
                                                    <p class="product-description">Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating_input">
                                                        <label>Quality: </label>
                                                        <input type="hidden" name="rating">
                                                        <a class="zero-rating" data-rate="0" href="#"></a>
                                                        <div class="star-rating">
                                                            <a class="rating" data-rate="1" href="#"></a>
                                                            <a class="rating" data-rate="2" href="#"></a>
                                                            <a class="rating" data-rate="3" href="#"></a>
                                                            <a class="rating" data-rate="4" href="#"></a>
                                                            <a class="rating" data-rate="5" href="#"></a>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="title" placeholder="Title *">
                                                    <textarea name="review-comment" placeholder="Comment: *" rows="8"></textarea>
                                                    <input type="text" name="name" placeholder="Your name: *">
                                                    <div class="form-footer">
                                                        <span>* Required fields</span>
                                                        <input class="btn btn-default" type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    
                    <!--------------- Related product module --------------->
                    <div class="module shop-widget related-widget">
                        <h4 class="module-title"><i class="fa fa-check" aria-hidden="true"></i>6 Other products in the same category</h4>
                        <div class="module-content">
                            <div id="related-carousel" class="carousel-item-4 owl-carousel">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/7-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/7.jpg') ?>" alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/8-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/8.jpg') ?>" alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/9-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/9.jpg') ?>" alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/10-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/10.jpg') ?>" alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/11-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/11.jpg') ?>" alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/12-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/12.jpg') ?>" alt="Product Front">
                                        </a>
                                        <div class="attr-group">
                                            <span class="new">New</span>
                                            <span class="sale">Sale!</span>
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

<!-- Mirrored from codechant.com/Envato/html/rosa/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:35:04 GMT -->
</html>