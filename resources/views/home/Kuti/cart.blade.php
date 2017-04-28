<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/edo/html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:27:30 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/lib/bootstrap/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/lib/font-awesome/css/font-awesome.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/lib/owl.carousel/owl.carousel.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/lib/jquery-ui/jquery-ui.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/css/animate.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/css/global.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/css/style.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/css/responsive.css') ?>" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<title>Edo - Cart</title>
</head>
<body>
	<!-- header -->
	 @include("home.Kuti.header");
	<!-- ./header -->
	<div class="container">
		<div class="row">
			<div class="block block-breadcrumbs">
				<ul>
					<li class="home">
						<a href="#"><i class="fa fa-home"></i></a>
						<span></span>
					</li>
					<li>Cart</li>
				</ul>
			</div>
			<div class="main-page">
				<h1 class="page-title">Shopping Cart Summary</h1>
				<div class="page-content page-order">
		            <ul class="step">
		                <li class="current-step"><span>01. Summary</span></li>
		                <li><span>02. Sign in</span></li>
		                <li><span>03. Address</span></li>
		                <li><span>04. Shipping</span></li>
		                <li><span>05. Payment</span></li>
		            </ul>
		            <div class="heading-counter warning">Your shopping cart contains:
		                <span>1 Product</span>
		            </div>
		            <div class="order-detail-content">
		                <table class="cart_summary">
		                    <thead>
		                        <tr>
		                            <th class="cart_product">Product</th>
		                            <th>Description</th>
		                            <th>Avail.</th>
		                            <th>Unit price</th>
		                            <th>Qty</th>
		                            <th>Total</th>
		                            <th class="action"><i class="fa fa-trash-o"></i></th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <td class="cart_product">
		                                <a href="#"><img class="img-responsive" src="<?= asset('Kuti/data/p1.jpg') ?>" alt="Product"></a>
		                            </td>
		                            <td class="cart_description">
		                                <p class="product-name"><a href="#">Frederique Constant </a></p>
		                                <small class="cart_ref">SKU : #123654999</small><br>
		                                <small><a href="#">Color : Beige</a></small><br>   
		                                <small><a href="#">Size : S</a></small>
		                            </td>
		                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
		                            <td class="price"><span>61,19 €</span></td>
		                            <td class="qty">
		                                <input class="form-control input-sm" type="text" value="1">
		                                <a href="#"><i class="fa fa-caret-up"></i></a>
		                                <a href="#"><i class="fa fa-caret-down"></i></a>
		                            </td>
		                            <td class="price">
		                                <span>61,19 €</span>
		                            </td>
		                            <td class="action">
		                                <a href="#">Delete item</a>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td class="cart_product">
		                                <a href="#"><img class="img-responsive" src="<?= asset('Kuti/data/p2.jpg') ?>" alt="Product"></a>
		                            </td>
		                            <td class="cart_description">
		                                <p class="product-name"><a href="#">Frederique Constant </a></p>
		                                <small class="cart_ref">SKU : #123654999</small><br>
		                                <small><a href="#">Color : Beige</a></small><br>   
		                                <small><a href="#">Size : S</a></small>
		                            </td>
		                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
		                            <td class="price"><span>61,19 €</span></td>
		                            <td class="qty">
		                                <input class="form-control input-sm" type="text" value="1">
		                                <a href="#"><i class="fa fa-caret-up"></i></a>
		                                <a href="#"><i class="fa fa-caret-down"></i></a>
		                            </td>
		                            <td class="price">
		                                <span>61,19 €</span>
		                            </td>
		                            <td class="action">
		                                <a href="#">Delete item</a>
		                            </td>
		                        </tr>
		                    </tbody>
		                    <tfoot>
		                        <tr>
		                            <td colspan="2" rowspan="2"></td>
		                            <td colspan="3">Total products (tax incl.)</td>
		                            <td colspan="2">122.38 €</td>
		                        </tr>
		                        <tr>
		                            <td colspan="3"><strong>Total</strong></td>
		                            <td colspan="2"><strong>122.38 €</strong></td>
		                        </tr>
		                    </tfoot>    
		                </table>
		                <div class="cart_navigation">
		                    <a class="button" href="#"><i class="fa fa-angle-left"></i> Continue shopping </a>
		                    <a class="button pull-right" href="#">Proceed to checkout <i class="fa fa-angle-right"></i></a>
		                </div>
		            </div>
		        </div>
			</div>
		</div>
	</div>
	<!-- footer -->
	@include("home.Kuti.footer");
	<!-- ./footer -->
	<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
	<script type="text/javascript" src="<?= asset('Kuti/lib/jquery/jquery-1.11.2.min.js') ?>"></script>
	<script type="text/javascript" src="<?= asset('Kuti/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?= asset('Kuti/lib/jquery.bxslider/jquery.bxslider.min.js') ?>"></script>
	<script type="text/javascript" src="<?= asset('Kuti/lib/owl.carousel/owl.carousel.min.js') ?>"></script>
	<script type="text/javascript" src="<?= asset('Kuti/lib/jquery-ui/jquery-ui.min.js') ?>"></script>
	<!-- COUNTDOWN -->
	<script type="text/javascript" src="<?= asset('Kuti/lib/countdown/jquery.plugin.js') ?>"></script>
	<script type="text/javascript" src="<?= asset('Kuti/lib/countdown/jquery.countdown.js') ?>"></script>
	<!-- ./COUNTDOWN -->
	<script type="text/javascript" src="<?= asset('Kuti/js/jquery.actual.min.js') ?>"></script>
	<script type="text/javascript" src="<?= asset('Kuti/js/script.js') ?>"></script>
</body>

<!-- Mirrored from kute-themes.com/html/edo/html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:27:30 GMT -->
</html>