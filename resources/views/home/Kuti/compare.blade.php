<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/edo/html/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:27:27 GMT -->
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
	<title>Edo - Compare</title>
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
					<li>Compare products</li>
				</ul>
			</div>
			<div class="main-page">
				<h1 class="page-title">Compare Products</h1>
				<div class="page-content">
		            <table class="table table-bordered table-compare">
		                <tbody><tr>
		                    <td class="compare-label">Product Image</td>
		                    <td class="text-center">
		                        <a href="#"><img src="<?= asset('Kuti/data/p16.jpg') ?>" alt="Product"></a>
		                    </td>
		                    <td class="text-center">
		                        <a href="#"><img src="<?= asset('Kuti/data/p17.jpg') ?>" alt="Product"></a>
		                    </td>
		                    <td class="text-center">
		                        <a href="#"><img src="<?= asset('Kuti/data/p18.jpg') ?>" alt="Product"></a>
		                    </td>
		                    
		                </tr>
		                <tr>
		                    <td class="compare-label">Product Name</td>
		                    <td>
		                        <a href="#">Perfomax</a>
		                    </td>
		                    <td>
		                        <a href="#">Perfomax</a>
		                    </td>
		                    <td>
		                        <a href="#">Perfomax</a>
		                    </td>
		                </tr>
		                <tr>
		                    <td class="compare-label">Rating</td>
		                    <td>
		                        <div class="product-star">
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star-half-o"></i>
		                            <span>(3 Reviews)</span>
		                        </div>
		                    </td>
		                    <td>
		                        <div class="product-star">
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star-half-o"></i>
		                            <span>(3 Reviews)</span>
		                        </div>
		                    </td>
		                    <td>
		                        <div class="product-star">
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star"></i>
		                            <i class="fa fa-star-half-o"></i>
		                            <span>(3 Reviews)</span>
		                        </div>
		                    </td>
		                </tr>
		                <tr>
		                    <td class="compare-label">Price</td>
		                    <td class="price">$20</td>
		                    <td class="price">$21</td>
		                    <td class="price">$20.5</td>
		                </tr>
		                <tr>
		                    <td class="compare-label">Description</td>
		                    <td>Printed evening dress with straight sleeves with black thin waist belt and ruffled linings.</td>
		                    <td>Printed evening dress with straight sleeves with black thin waist belt and ruffled linings.</td>
		                    <td>Printed evening dress with straight sleeves with black thin waist belt and ruffled linings.</td>
		                </tr>
		                <tr>
		                    <td class="compare-label">Manufacturer</td>
		                    <td>CUCGU</td>
		                    <td>Nakia</td>
		                    <td>Gola</td>
		                </tr>
		                <tr>
		                    <td class="compare-label">Availability</td>
		                    <td class="instock">Instock (20 items)</td>
		                    <td class="outofstock">Out of stock</td>
		                    <td class="instock">Instock (20 items)</td>
		                </tr>
		                <tr>
		                    <td class="compare-label">SKU</td>
		                    <td>#873289</td>
		                    <td>#874389</td>
		                    <td>#874389</td>
		                </tr>
		                <tr>
		                    <td class="compare-label">Size</td>
		                    <td>X</td>
		                    <td>XL</td>
		                    <td>XS</td>
		                </tr>
		                <tr>
		                    <td class="compare-label">Color</td>
		                    <td>Blue</td>
		                    <td>Blue</td>
		                    <td>Blue</td>
		                </tr>
		                <tr>
		                    <td class="compare-label">Weight</td>
		                    <td>0.3kg</td>
		                    <td>0.3kg</td>
		                    <td>0.3kg</td>
		                </tr>
		                <tr>
		                    <td class="compare-label">Dimensions</td>
		                    <td>40x20x72cm</td>
		                    <td>40x20x72cm</td>
		                    <td>40x20x72cm</td>
		                </tr>
		                <tr>
		                    <td class="compare-label">Action</td>
		                    <td class="action">
		                        <button class="add-cart button button-sm">Add to cart</button>
		                        <button class="button button-sm"><i class="fa fa-heart-o"></i></button>
		                        <button class="button button-sm"><i class="fa fa-close"></i></button>
		                    </td>
		                    <td class="action">
		                        <button class="add-cart button button-sm">Add to cart</button>
		                        <button class="button button-sm"><i class="fa fa-heart-o"></i></button>
		                        <button class="button button-sm"><i class="fa fa-close"></i></button>
		                    </td>
		                    <td class="action">
		                        <button class="add-cart button button-sm">Add to cart</button>
		                        <button class="button button-sm"><i class="fa fa-heart-o"></i></button>
		                        <button class="button button-sm"><i class="fa fa-close"></i></button>
		                    </td>
		                </tr>
		            </tbody></table>
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

<!-- Mirrored from kute-themes.com/html/edo/html/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:27:30 GMT -->
</html>