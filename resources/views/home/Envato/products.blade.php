<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codechant.com/Envato/html/rosa/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:34:55 GMT -->
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosa - Responsive Ecommerce Template</title>
    <meta name="description" content="Rosa is Responsive eCommerce Template">
    
    
    
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
               @include("Envato.header"); 
    
    <!--------------- Primary navigation --------------->
             @include("Envato.menu");
    
    <!--------------- Breadcumb --------------->
    <div class="breadcrumb-wrap"> 
        <div class="container">
            <a class="breadcrumb-link" href="/gril_project/public/Envato/index-2" title="Return to Home">Home</a><i class="breadcrumb-arrow fa fa-angle-right"></i><span class="breadcrumb-current">Women</span>
        </div>
    </div>
    
    <!--------------- Main wrap --------------->
    <div class="main-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-4">
                    
                     @include("home.Envato.sidemenu");
                    
                    <!--------------- Woocommerce filter module -------------->
                    <div id="woocommerce-filter-module" class="module shop-widget woocommerce-filter-module secondary-module">        
                        <h4 class="module-title"><i class="fa fa-filter" aria-hidden="true"></i>Filter products by<span class="toggle-btn"></span></h4>
                        <div class="module-content mobile-collapse">
                            <form id="filterform" class="filterform layered-form liveform" name="filterform" action="#" method="get">
                               
                                <!-- Manufacterer filter -->
                                <div class="layered-filter">
                                    <h4 class="filter-title">Manufacturer</h4>
                                    <div class="filter-content">
                                        <div class="input-row">
                                            <div class="input-rule check">
                                                <span class="input-style"></span>
                                                <input id="activeden" type="checkbox" name="manufacturer" value="activeden">
                                            </div>
                                            <label class="filter-label" for="activeden">Activeden <span class="numofitems">(16)</span></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price filter -->
                                <div class="layered-filter">
                                    <h4 class="filter-title">Price</h4>
                                    <div class="filter-content">
                                        <label for="amount" class="top-label price-label">Range: </label>
                                        <input type="text" id="amount" class="range-data" readonly>
                                        <div id="price_ranger" class="price-ranger ui-ranger" data-min="16" data-max="53"></div>
                                    </div>
                                </div>
                                
                                <!-- Size filter -->
                                <div class="layered-filter">
                                    <h4 class="filter-title">Size</h4>
                                    <div class="filter-content">
                                        <div class="sizes-input">
                                            <div class="input-col-2">
                                                <div class="input-rule check">
                                                    <span class="input-style"></span>
                                                    <input id="s_size" type="checkbox" name="size" value="s">
                                                </div>
                                                <label class="filter-label" for="s_size">S <span class="numofitems">(16)</span></label>
                                            </div>
                                            <div class="input-col-2">
                                                <div class="input-rule check">
                                                    <span class="input-style"></span>
                                                    <input id="m_size" type="checkbox" name="size" value="m">
                                                </div>
                                                <label class="filter-label" for="m_size">M <span class="numofitems">(16)</span></label>
                                            </div>
                                            <div class="input-col-2">
                                                <div class="input-rule check">
                                                    <span class="input-style"></span>
                                                    <input id="l_size" type="checkbox" name="size" value="l">
                                                </div>
                                                <label class="filter-label" for="l_size">L <span class="numofitems">(16)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Color filter -->
                                <div class="layered-filter">
                                    <h4 class="filter-title">Color</h4>
                                    <div class="filter-content">
                                        <div class="color-input">
                                            <div class="input-col-2">
                                                <input id="beige_color" type="button" name="color" value="1" style="background-color: #f5f5dc"><label class="filter-label" for="beige_color">Beige <span class="numofitems">(6)</span></label>
                                            </div>
                                            <div class="input-col-2">
                                                <input id="white_color" type="button" name="color" value="2" style="background-color: #ffffff"><label class="filter-label" for="white_color">White <span class="numofitems">(3)</span></label>
                                            </div>
                                            <div class="input-col-2">
                                                <input id="black_color" type="button" name="color" value="3" style="background-color: #434A54"><label class="filter-label" for="black_color">Black <span class="numofitems">(3)</span></label>
                                            </div>
                                            <div class="input-col-2">
                                                <input id="orange_color" type="button" name="color" value="4" style="background-color: #F39C11"><label class="filter-label" for="orange_color">Orange <span class="numofitems">(6)</span></label>
                                            </div>
                                            <div class="input-col-2">
                                                <input id="blue_color" type="button" name="color" value="5" style="background-color: #5D9CEC"><label class="filter-label" for="blue_color">Blue <span class="numofitems">(5)</span></label>
                                            </div>
                                            <div class="input-col-2">
                                                <input id="green_color" type="button" name="color" value="6" style="background-color: #A0D468"><label class="filter-label" for="green_color">Green <span class="numofitems">(1)</span></label>
                                            </div>
                                            <div class="input-col-2">
                                                <input id="yellow_color" type="button" name="color" value="7" style="background-color: #F1C40F"><label class="filter-label" for="yellow_color">Yellow <span class="numofitems">(3)</span></label>
                                            </div>
                                            <div class="input-col-2">
                                                <input id="pink_color" type="button" name="color" value="8" style="background-color: #FCCACD"><label class="filter-label" for="pink_color">Pink <span class="numofitems">(6)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Compositions filter -->
                                <div class="layered-filter">
                                    <h4 class="filter-title">Compositions</h4>
                                    <div class="filter-content">
                                        <div class="input-row">
                                            <div class="input-rule check">
                                                <span class="input-style"></span>
                                                <input id="viscose" type="checkbox" name="composition" value="viscose">
                                            </div>
                                            <label class="filter-label" for="viscose">Viscose <span class="numofitems">(6)</span></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Styles filter -->
                                <div class="layered-filter">
                                    <h4 class="filter-title">Styles</h4>
                                    <div class="filter-content">
                                        <div class="input-row">
                                            <div class="input-rule check">
                                                <span class="input-style"></span>
                                                <input id="dressy" type="checkbox" name="style" value="Dressy">
                                            </div>
                                            <label class="filter-label" for="dressy">Dressy <span class="numofitems">(6)</span></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Properties filter -->
                                <div class="layered-filter">
                                    <h4 class="filter-title">Properties</h4>
                                    <div class="filter-content">
                                        <div class="input-row">
                                            <div class="input-rule check">
                                                <span class="input-style"></span>
                                                <input id="short_dress" type="checkbox" name="property" value="short-dress">
                                            </div>
                                            <label class="filter-label" for="short_dress">Short Dress <span class="numofitems">(6)</span></label>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
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
                    <!--------------- Banner area --------------->
                    <div class="module shop-widget banner-widget">
                        <div class="module-content">
                            <div class="banner">
                                <a href="#">
                                    <img src="<?= asset('Envato/img/banner/women.jpg') ?>" alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!--------------- Page title --------------->
                    <div class="page-header">
                        <div class="row">
                            <div class="col-md-10 col-sm-8">
                                <h4 class="page-title">Women</h4>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <p class="page-description">There are 16 Product</p>
                            </div>
                        </div>
                    </div>
                    
                    <!--------------- Products Toolbar --------------->
                    <div class="toolbar">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <!-- Viewmode -->
                                <div class="view-modes">
                                    <a href="#" class="grid view-mode active" title="Grid" data-mode="grid_mode"><i class="fa fa-th-large"></i></a>
                                    <a href="#" class="list view-mode" title="List" data-mode="list_mode"><i class="fa fa-th-list"></i></a>
                                </div>

                                <!-- Compare Product Form -->
                                <form method="post" action="http://codechant.com/Envato/html/rosa/products-comparison.html" class="compare-form"> 
                                    <button type="submit" class="btn_compare">
                                        <span>Compare (<strong class="total-compare-val">3</strong>)</span> 
                                    </button> 
                                    <input type="hidden" name="compare_product_count" class="compare_product_count" value="3"> 
                                    <input type="hidden" name="compare_product_list" class="compare_product_list" value="">
                                </form>
                            </div>

                            <!-- Product shorting -->
                            <div class="col-lg-7 col-md-5 col-sm-8">
                                <div class="shop-short-by">
                                    <label>Sort by</label>
                                    <form class="woocommerce-ordering live-form" method="get">
                                        <div class="input-rule select">
                                            <span class="input-style">--</span>
                                            <select name="orderby" class="orderby">
                                                <option value="menu_order" selected="selected">--</option>
                                                <option value="price-low">Price: Lowest first</option>
                                                <option value="price-high">Price: Highest first</option>
                                                <option value="name-a">Product Name: A to Z</option>
                                                <option value="name-z">Product Name: Z to A</option>
                                                <option value="onStock">In stock</option>
                                                <option value="refer-low">Reference: Lowest first</option>
                                                <option value="refer-high">Reference: Highest first</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Number of items in page -->
                            <div class="col-lg-2 col-md-3 col-sm-4">
                                <div class="itemnum-wrap">
                                    <label> Show </label>
                                    <form name="itemPage" action="#" method="get" class="itemPage liveform">
                                        <div class="input-rule select">
                                            <span class="input-style">12</span>
                                            <select name="numberItem">
                                                <option value="12" selected="selected">12</option>
                                                <option value="24">24</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--------------- Main Product Widget --------------->
                    <div class="module products">
                        <div class="row">
                            <div id="mode_switcher" class="product-container">
                                <div class="product col-lg-4 col-sm-6 new custom">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/1-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/1.jpg') ?>" alt="Product Front">
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
                                        <p class="product-description">Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                        <div class="product-btn list-view-btn">
                                            <a class="to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart<span class="tooltip">Add To Cart</span></a>
                                            <a class="to-wish" href="#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                            <a class="to-compare" href="#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>
                                            <a class="to-view" data-fancybox-type="iframe" href="/gril_project/public/Envato/product-quick-view"><i class="fa fa-eye"></i><span class="tooltip">Quick View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product col-lg-4 col-sm-6 new featured">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/2-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/2.jpg') ?>" alt="Product Front">
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
                                        <p class="product-description">100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom.</p>
                                    </div>
                                </div>
                                <div class="product col-lg-4 col-sm-6 bestsellers custom">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/3-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/3.jpg') ?>" alt="Product Front">
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
                                        <p class="product-description">Short-sleeved blouse with feminine draped sleeve detail.</p>
                                    </div>
                                </div>
                                <div class="product col-lg-4 col-sm-6 mostviewed custom">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/4-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/4.jpg') ?>" alt="Product Front">
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
                                        <p class="product-description">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                    </div>
                                </div>
                                <div class="product col-lg-4 col-sm-6 featured custom">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/5-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/5.jpg') ?>" alt="Product Front">
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
                                        <p class="product-description">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                    </div>
                                </div>
                                <div class="product col-lg-4 col-sm-6 new mostviewed">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/6-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/6.jpg') ?>" alt="Product Front">
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
                                        <p class="product-description">Short-sleeved blouse with feminine draped sleeve detail.</p>
                                    </div>
                                </div>
                                <div class="product col-lg-4 col-sm-6 new custom">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/1-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/1.jpg') ?>" alt="Product Front">
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
                                        <p class="product-description">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                    </div>
                                </div>
                                <div class="product col-lg-4 col-sm-6 new featured">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/2-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/2.jpg') ?>" alt="Product Front">
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
                                        <p class="product-description">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                    </div>
                                </div>
                                <div class="product col-lg-4 col-sm-6 bestsellers custom">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/3-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/3.jpg') ?>" alt="Product Front">
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
                                        <p class="product-description">Printed evening dress with straight sleeves with black thin waist belt and ruffled linings.</p>
                                    </div>
                                </div>
                                <div class="product col-lg-4 col-sm-6 mostviewed custom">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/4-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/4.jpg') ?>" alt="Product Front">
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
                                        <p class="product-description">Sleeveless knee-length chiffon dress. V-neckline with elastic under the bust lining.</p>
                                    </div>
                                </div>
                                <div class="product col-lg-4 col-sm-6 featured custom">
                                    <div class="product-thumb">
                                        <a href="#" class="thumb-link">
                                            <img class="hover-img" src="<?= asset('Envato/img/product/5-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/5.jpg') ?>" alt="Product Front">
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
                                            <img class="hover-img" src="<?= asset('Envato/img/product/6-hover.jpg') ?>" alt="Product Hover">
                                            <img class="front-img" src="<?= asset('Envato/img/product/6.jpg') ?>" alt="Product Front">
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
                    
                    <!---------------- Product pagination --------------->
                    <div class="pagination-bar">
                        <div class="row">
                            <div class="pagination-content">
                                <div class="col-md-3 col-sm-4">
                                    <p class="product-count">Showing 1-12 of 16 items</p>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <ul class="paginations">
                                        <li class="pagination prev disabled"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                        <li class="pagination current"><a href="#">1</a></li>
                                        <li class="pagination"><a href="#">2</a></li>
                                        <li class="pagination next"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <form class="showall" action="#" method="get">
                                        <button type="submit" class="btn btn-default">Show all</button>
                                    </form>
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
          @include("Envato.footer");
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

<!-- Mirrored from codechant.com/Envato/html/rosa/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:34:56 GMT -->
</html>