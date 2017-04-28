<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/edo/html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:27:27 GMT -->
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
	<title>Edo - Checkout</title>
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
						<span></span>@include("Kuti.header");
					</li>
					<li>Check out</li>
				</ul>
			</div>
			<div class="main-page">
				<h1 class="page-title">Check out</h1>
				<div class="page-content checkout-page">
		            <h3 class="checkout-sep">1. Checkout Method</h3>
		            <div class="box-border">
		                <div class="row">
		                    <div class="col-sm-6">
		                        <h4>Checkout as a Guest or Register</h4>
		                        <p>Register with us for future convenience:</p>
		                        <ul>
		                            <li><label><input type="radio" name="radio1">Checkout as Guest</label></li>
		                            <li><label><input type="radio" name="radio1">Register</label></li>
		                        </ul>
		                        <br>
		                        <h4>Register and save time!</h4>
		                        <p>Register with us for future convenience:</p>
		                        <p><i class="fa fa-check-circle text-primary"></i> Fast and easy check out</p>
		                        <p><i class="fa fa-check-circle text-primary"></i> Easy access to your order history and status</p>
		                        <button class="button">Continue</button>
		                    </div>
		                    <div class="col-sm-6">
		                        <h4>Login</h4>
		                        <p>Already registered? Please log in below:</p>
		                        <label>Email address</label>
		                        <input type="text">
		                        <label>Password</label>
		                        <input type="password">
		                        <p><a href="#">Forgot your password?</a></p>
		                        <button class="button">Login</button>
		                    </div>

		                </div>
		            </div>
		            <h3 class="checkout-sep">2. Billing Infomations</h3>
		            <div class="box-border">
		                <ul>
		                    <li class="row">
		                        <div class="col-sm-6">
		                            <label for="first_name" class="required">First Name</label>
		                            <input type="text" name="first_name" id="first_name">
		                        </div><!--/ [col] -->
		                        <div class="col-sm-6">
		                            <label for="last_name" class="required">Last Name</label>
		                            <input type="text" name="last_name" id="last_name">
		                        </div><!--/ [col] -->
		                    </li><!--/ .row -->
		                    <li class="row">
		                        <div class="col-sm-6">
		                            <label for="company_name">Company Name</label>
		                            <input type="text" name="company_name" id="company_name">
		                        </div><!--/ [col] -->
		                        <div class="col-sm-6">
		                            <label for="email_address" class="required">Email Address</label>
		                            <input type="text"  name="email_address" id="email_address">
		                        </div><!--/ [col] -->
		                    </li><!--/ .row -->
		                    <li class="row"> 
		                        <div class="col-xs-12">

		                            <label for="address" class="required">Address</label>
		                            <input type="text" name="address" id="address">

		                        </div><!--/ [col] -->

		                    </li><!-- / .row -->

		                    <li class="row">

		                        <div class="col-sm-6">
		                            
		                            <label for="city" class="required">City</label>
		                            <input type="text" name="city" id="city">

		                        </div><!--/ [col] -->

		                        <div class="col-sm-6">
		                            <label class="required">State/Province</label>
		                                <select name="Province">
		                                    <option value="Alabama">Alabama</option>
		                                    <option value="Illinois">Illinois</option>
		                                    <option value="Kansas">Kansas</option>
		                            </select>
		                        </div><!--/ [col] -->
		                    </li><!--/ .row -->

		                    <li class="row">

		                        <div class="col-sm-6">

		                            <label for="postal_code" class="required">Zip/Postal Code</label>
		                            <input type="text" name="postal_code" id="postal_code">
		                        </div><!--/ [col] -->

		                        <div class="col-sm-6">
		                            <label class="required">Country</label>
		                            <select name="Country">
		                                <option value="USA">USA</option>
		                                <option value="Australia">Australia</option>
		                                <option value="Austria">Austria</option>
		                                <option value="Argentina">Argentina</option>
		                                <option value="Canada">Canada</option>
		                            </select>
		                        </div><!--/ [col] -->
		                    </li><!--/ .row -->
		                    <li class="row">
		                        <div class="col-sm-6">
		                            <label for="telephone" class="required">Telephone</label>
		                            <input  type="text" name="telephone" id="telephone">
		                        </div><!--/ [col] -->

		                        <div class="col-sm-6">
		                            <label for="fax">Fax</label>
		                            <input type="text" name="fax" id="fax">
		                        </div><!--/ [col] -->

		                    </li><!--/ .row -->

		                    <li class="row">
		                        <div class="col-sm-6">
		                            <label for="password" class="required">Password</label>
		                            <input type="password" name="password" id="password">
		                        </div><!--/ [col] -->

		                        <div class="col-sm-6">
		                            <label for="confirm" class="required">Confirm Password</label>
		                            <input type="password" name="confirm" id="confirm">
		                        </div><!--/ [col] -->
		                    </li><!--/ .row -->
		                    <li>
		                        <button class="button">Continue</button>
		                    </li>
		                </ul>
		            </div>
		            <h3 class="checkout-sep">3. Shipping Information</h3>
		            <div class="box-border">
		                <ul>
		                                    
		                    <li class="row">
		                        
		                        <div class="col-sm-6">
		                            
		                            <label for="first_name_1" class="required">First Name</label>
		                            <input type="text" name="first_name_1" id="first_name_1">

		                        </div><!--/ [col] -->

		                        <div class="col-sm-6">
		                            
		                            <label for="last_name_1" class="required">Last Name</label>
		                            <input type="text" name="last_name_1" id="last_name_1">

		                        </div><!--/ [col] -->

		                    </li><!--/ .row -->

		                    <li class="row">
		                        
		                        <div class="col-sm-6">
		                            
		                            <label for="company_name_1">Company Name</label>
		                            <input type="text" name="company_name_1" id="company_name_1">

		                        </div><!--/ [col] -->

		                        <div class="col-sm-6">
		                            
		                            <label for="email_address_1" class="required">Email Address</label>
		                            <input type="text" name="email_address_1" id="email_address_1">

		                        </div><!--/ [col] -->

		                    </li><!--/ .row -->

		                    <li class="row">

		                        <div class="col-xs-12">

		                            <label for="address_1" class="required">Address</label>
		                            <input type="text" name="address_1" id="address_1">

		                        </div><!--/ [col] -->

		                    </li><!--/ .row -->

		                    <li class="row">

		                        <div class="col-sm-6">
		                            
		                            <label for="city_1" class="required">City</label>
		                            <input type="text" name="city_1" id="city_1">

		                        </div><!--/ [col] -->

		                        <div class="col-sm-6">

		                            <label class="required">State/Province</label>

		                            <div class="custom_select">

		                                <select name="custom_select">

		                                    <option value="Alabama">Alabama</option>
		                                    <option value="Illinois">Illinois</option>
		                                    <option value="Kansas">Kansas</option>

		                                </select>

		                            </div>

		                        </div><!--/ [col] -->

		                    </li><!--/ .row -->

		                    <li class="row">

		                        <div class="col-sm-6">

		                            <label for="postal_code_1" class="required">Zip/Postal Code</label>
		                            <input type="text" name="postal_code_1" id="postal_code_1">

		                        </div><!--/ [col] -->

		                        <div class="col-sm-6">

		                            <label class="required">Country</label>

		                            <div class="custom_select">

		                                <select name="Country">
		                                    
		                                    <option value="USA">USA</option>
		                                    <option value="Australia">Australia</option>
		                                    <option value="Austria">Austria</option>
		                                    <option value="Argentina">Argentina</option>
		                                    <option value="Canada">Canada</option>

		                                </select>

		                            </div>

		                        </div><!--/ [col] -->

		                    </li><!--/ .row -->

		                    <li class="row">

		                        <div class="col-sm-6">

		                            <label for="telephone_1" class="required">Telephone</label>
		                            <input type="text" name="telephone_1" id="telephone_1">

		                        </div><!--/ [col] -->

		                        <div class="col-sm-6">

		                            <label for="fax_1">Fax</label>
		                            <input type="text" name="fax_1" id="fax_1">

		                        </div><!--/ [col] -->

		                    </li><!--/ .row -->

		                </ul>
		                <button class="button">Continue</button>
		            </div>
		            <h3 class="checkout-sep">4. Shipping Method</h3>
		            <div class="box-border">
		                <ul class="shipping_method">
		                    <li>
		                        <p class="subcaption bold">Free Shipping</p>
		                        <label for="radio_button_3"><input type="radio" checked="checked" name="radio_3" id="radio_button_3">Free $0</label>
		                    </li>

		                    <li>
		                        <p class="subcaption bold">Free Shipping</p>
		                        <label for="radio_button_4"><input type="radio" name="radio_3" id="radio_button_4"> Standard Shipping $5.00</label>
		                    </li>
		                </ul>
		                <button class="button">Continue</button>
		            </div>
		            <h3 class="checkout-sep">5. Payment Information</h3>
		            <div class="box-border">
		                <ul>
		                    <li>
		                        <label for="radio_button_5"><input type="radio" checked="checked" name="radio_4" id="radio_button_5"> Check / Money order</label>
		                    </li>

		                    <li>
		            
		                        <label for="radio_button_6"><input type="radio" name="radio_4" id="radio_button_6"> Credit card (saved)</label>
		                    </li>

		                </ul>
		                <button class="button">Continue</button>
		            </div>
		            <h3 class="checkout-sep">6. Order Review</h3>
		            <div class="box-border">
		                <table class="table table-bordered table-responsive cart_summary">
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
		                                <a href="#"><img src="<?= asset('Kuti/data/p1.jpg') ?>" alt="Product"></a>
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
		                                <a href="#"><img src="<?= asset('Kuti/data/p2.jpg') ?>" alt="Product"></a>
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
		                <button class="button pull-right">Place Order</button>
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

<!-- Mirrored from kute-themes.com/html/edo/html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:27:27 GMT -->
</html>