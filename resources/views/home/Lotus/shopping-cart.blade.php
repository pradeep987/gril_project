<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themesground.com/Lotus/V1/HTML/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:17:49 GMT -->
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
     @include("home.Lotus.header"); 

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th class="cart-romove item">Remove</th>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					<th class="cart-edit item">Edit</th>
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Subtotal</th>
					<th class="cart-total last-item">Grandtotal</th>
				</tr>
			</thead><!-- /thead -->
			<tfoot>
				<tr>
					<td colspan="7">
						<div class="shopping-cart-btn">
							<span class="">
								<a href="#" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
								<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
							</span>
						</div><!-- /.shopping-cart-btn -->
					</td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="/gril_project/public/Lotus/detail">
						    <img src="<?= asset('\Lotus\images\products\p1.jpg') ?>" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href="/gril_project/public/Lotus/detail">Floral Print Buttoned</a></h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="rating rateit-small"></div>
							</div>
							<div class="col-sm-8">
								<div class="reviews">
									(06 Reviews)
								</div>
							</div>
						</div><!-- /.row -->
						<div class="cart-product-info">
											<span class="product-color">COLOR:<span>Blue</span></span>
						</div>
					</td>
					<td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
					<td class="cart-product-quantity">
						<div class="quant-input">
				                <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div>
				                <input type="text" value="1">
			              </div>
		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>
				</tr>
				<tr>
					<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="/gril_project/public/Lotus/detail">
						    <img src="<?= asset('\Lotus\images\products\p2.jpg') ?>" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href="/gril_project/public/Lotus/detail">Floral Print Buttoned</a></h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="rating rateit-small"></div>
							</div>
							<div class="col-sm-8">
								<div class="reviews">
									(06 Reviews)
								</div>
							</div>
						</div><!-- /.row -->
						<div class="cart-product-info">
						<span class="product-color">COLOR:<span>Pink</span></span>
						</div>
					</td>
					<td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
					<td class="cart-product-quantity">
						<div class="cart-quantity">
							<div class="quant-input">
				                <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div>
				                <input type="text" value="1">
			              </div>
			            </div>
		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>
				</tr>
			</tbody><!-- /tbody -->
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->				<div class="col-md-4 col-sm-12 estimate-ship-tax">
	<table class="table">
		<thead>
			<tr>
				<th>
					<span class="estimate-title">Estimate shipping and tax</span>
					<p>Enter your destination to get shipping and tax.</p>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
						<div class="form-group">
							<label class="info-title control-label">Country <span>*</span></label>
							<select class="form-control unicase-form-control selectpicker">
								<option>--Select options--</option>
								<option>India</option>
								<option>SriLanka</option>
								<option>united kingdom</option>
								<option>saudi arabia</option>
								<option>united arab emirates</option>
							</select>
						</div>
						<div class="form-group">
							<label class="info-title control-label">State/Province <span>*</span></label>
							<select class="form-control unicase-form-control selectpicker">
								<option>--Select options--</option>
								<option>TamilNadu</option>
								<option>Kerala</option>
								<option>Andhra Pradesh</option>
								<option>Karnataka</option>
								<option>Madhya Pradesh</option>
							</select>
						</div>
						<div class="form-group">
							<label class="info-title control-label">Zip/Postal Code</label>
							<input type="text" class="form-control unicase-form-control text-input" placeholder="">
						</div>
						<div class="pull-right">
							<button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>
						</div>
					</td>
				</tr>
		</tbody>
	</table>
</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 estimate-ship-tax">
	<table class="table">
		<thead>
			<tr>
				<th>
					<span class="estimate-title">Discount Code</span>
					<p>Enter your coupon code if you have one..</p>
				</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td>
						<div class="form-group">
							<input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
						</div>
						<div class="clearfix pull-right">
							<button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
						</div>
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 cart-shopping-total">
	<table class="table">
		<thead>
			<tr>
				<th>
					<div class="cart-sub-total">
						Subtotal<span class="inner-left-md">$600.00</span>
					</div>
					<div class="cart-grand-total">
						Grand Total<span class="inner-left-md">$600.00</span>
					</div>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
						<div class="cart-checkout-btn pull-right">
							<button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
							<span class="">Checkout with multiples address!</span>
						</div>
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
</div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="<?= asset('images/brands/brand1.png') ?>" src="<?= asset('images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="<?= asset('images/brands/brand2.png') ?>" src="<?= asset('images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('images/brands/brand3.png') ?>" src="<?= asset('images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('images/brands/brand4.png') ?>" src="<?= asset('images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('images/brands/brand5.png') ?>" src="<?= asset('images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('images/brands/brand6.png') ?>" src="<?= asset('images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('images/brands/brand2.png') ?>" src="<?= asset('images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('images/brands/brand4.png') ?>" src="<?= asset('images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('images/brands/brand1.png') ?>" src="<?= asset('images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?= asset('images/brands/brand5.png') ?>" src="<?= asset('images/blank.gif') ?>" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->
@include("home.Lotus.footer");
<!-- ============================================================= FOOTER : END============================================================= -->


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

	
</body>

<!-- Mirrored from themesground.com/Lotus/V1/HTML/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:17:49 GMT -->
</html>