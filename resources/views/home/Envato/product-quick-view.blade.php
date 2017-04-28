<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codechant.com/Envato/html/rosa/product-quick-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:35:40 GMT -->
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
  <div class="single-product">
   <div id="single-container" class="product-container">
                                <div class="product">
                                    <div class="col-sm-5">
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
                                    <div class="col-sm-7">
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

<!-- Mirrored from codechant.com/Envato/html/rosa/product-quick-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:35:41 GMT -->
</html>