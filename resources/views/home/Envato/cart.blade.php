<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codechant.com/Envato/html/rosa/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:34:55 GMT -->
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
                        <li class="cart-step summery current">01. Summary</li>
                        <li class="cart-step account">02. Sign in</li>
                        <li class="cart-step address">03. Address</li>
                        <li class="cart-step shipping">04. Shipping</li>
                        <li class="cart-step payment">05. Payment</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="cart_summary" class="cart_summery">
                        <tr>
                            <th class="cart_product">Product</th>
                            <th class="cart_description">Description</th>
                            <th class="cart_avail">Availability</th>
                            <th class="cart_unit_price">Unit price</th>
                            <th class="cart_quantity">Qty</th>
                            <th class="cart_delete">&nbsp;</th>
                            <th class="cart_total">Total</th>
                        </tr>
                        <tr>
                            <td class="cart_product_content"><img src="<?= asset('Envato/img/product/sthumb-1.jpg') ?>" alt="Product on cart"></td>
                            <td class="cart_desc_content">
                                <h5>Funnky Fair</h5>
                                <p class="cart-sku">SKU: demo_3</p>
                                <p class="cart_size">Size: S</p>
                                <p class="cart_color">Color: Orange</p>
                            </td>
                            <td class="cart_avail_content"><span class="availability-status label label-success">In stock</span></td>
                            <td class="cart_unit_price_content"><span class="price">$26.00</span></td>
                            <td class="cart_quantity_content"><input type="number" min="1" value="1"></td>
                            <td class="cart_delete_item"><a href="#" class="deleteItem"><i class="fa fa-trash"></i></a></td>
                            <td class="cart_total_item_price"><span class="price">$26.00</span></td>
                        </tr>
                        <tr>
                            <td class="cart_product_content"><img src="<?= asset('Envato/img/product/sthumb-2.jpg') ?>" alt="Product on cart"></td>
                            <td class="cart_desc_content">
                                <h5>Corounty</h5>
                                <p class="cart-sku">SKU: demo_5</p>
                                <p class="cart_size">Size: M</p>
                                <p class="cart_color">Color: Black</p>
                            </td>
                            <td class="cart_avail_content"><span class="availability-status label label-success">In stock</span></td>
                            <td class="cart_unit_price_content"><span class="price">$27.00</span></td>
                            <td class="cart_quantity_content"><input type="number" min="1" value="1"></td>
                            <td class="cart_delete_item"><a href="#" class="deleteItem"><i class="fa fa-trash"></i></a></td>
                            <td class="cart_total_item_price"><span class="price">$27.00</span></td>
                        </tr>
                        <tr class="cart_total_price">
                            <td rowspan="3" colspan="2" id="cart_voucher" class="cart_voucher"></td>
                            <td colspan="4" class="text-right">Total products</td>
                            <td class="price" id="total_product"><span class="price">$53.00</span></td>
                        </tr>
                        <tr class="cart_total_delivery">
                            <td colspan="4" class="text-right">Total shipping</td>
                            <td class="price" id="total_shipping">$2.00</td>
                        </tr>
                        <tr class="cart_total_end_price">
                            <td colspan="4" class="total_price_container text-right"> <span>Total</span></td>
                            <td class="price" id="total_price_container"> 
                                <span class="total_price price">$29.00</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="next-wrap">
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-default"><i class="fa fa-angle-left"></i> Continue shopping</a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="#" class="btn btn-default">Process to checkout <i class="fa fa-angle-right"></i></a>
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

<!-- Mirrored from codechant.com/Envato/html/rosa/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:34:55 GMT -->
</html>