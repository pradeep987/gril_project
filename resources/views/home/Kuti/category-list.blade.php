<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/edo/html/category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:27:44 GMT -->
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
	<title>Edo - Category List</title>
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
					<li><a href="#">Beauty & Perfumes</a><span></span></li>
					<li>Men</li>
				</ul>
			</div>
			<div class="block block-filter-top">
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<div class="filter-label first">Category</div>
					</div>
					<div class="col-sm-9 col-md-10 first">
						<div class="filter-value">
							<ul class="list-category">                                                    
								<li><a href="#">Dresses</a></li>
								<li><a href="#">Jeans & Trousers</a></li>
								<li><a href="#">Blouses & Shirts </a></li>
								<li><a href="#">Tops & T-Shirts </a></li>
								<li><a href="#">Jackets & Coats </a></li>
								<li><a href="#">Skirts</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<div class="filter-label">Price</div>
					</div>
					<div class="col-sm-9 col-md-10">
						<div class="filter-value">
							<div class="block-filter-inner box-filter-price">
								<div data-label-reasult="Filter By Price: " data-min="0" data-max="500" data-unit="$" class="slider-range-price" data-value-min="50" data-value-max="350"></div>
								<div class="amount-range-price">Filter By Price: $50 - $350</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<div class="filter-label">Color</div>
					</div>
					<div class="col-sm-9 col-md-10">
						<div class="filter-value">
							<ul class="list-color">
								<li><a href="#"><span style=" background:#4d6dbd;">blule</span></a></li>
								<li><a href="#"><span style=" background:#2fbcda;">blule</span></a></li>
								<li class="selected"><a href="#"><span style=" background:#ffe00c;">blule</span></a></li>
								<li><a href="#"><span style=" background:#72b226;">blule</span></a></li>
								<li><a href="#"><span style=" background:#fb5d5d;">blule</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<div class="filter-label">Color</div>
					</div>
					<div class="col-sm-9 col-md-10">
						<div class="filter-value">
							<ul class="list-size">
								<li><a href="#"><span>X</span></a></li>
								<li><a href="#"><span>XL</span></a></li>
								<li class="selected"><a href="#"><span>S</span></a></li>
								<li><a href="#"><span>XS</span></a></li>
								<li><a href="#"><span>M</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<div class="filter-label last">Bands</div>
					</div>
					<div class="col-sm-9 col-md-10">
						<div class="filter-value">
							<ul class="list-category last">                                                    
								<li><a href="#">Band 01</a></li>
								<li><a href="#">Band 02</a></li>
								<li><a href="#">Band 03</a></li>
								<li><a href="#">Band 04</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<h3 class="page-title">
				<span>beauty & perfumes</span>
				<a href="#" class="button-radius compare-link">Compare (1)<span class="icon"></span></a>
			</h3>
			<div class="sortPagiBar">
				<ul class="display-product-option">
                    <li class="view-as-grid">
                        <span>grid</span>
                    </li>
                    <li class="view-as-list selected">
                        <span>list</span>
                    </li>
                </ul>
				<div class="sortPagiBar-inner">
					<nav>
                      <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">Next »</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <div class="show-product-item">
                    	<select class="">
	                    	<option value="1">Show 6</option>
	                    	<option value="1">Show 12</option>
	                    </select>
                    </div>
                    
                    <div class="sort-product">
                    	<select>
	                    	<option value="1">Postion</option>
	                    	<option value="1">Product name</option>
	                    </select>
	                    <div class="icon"><i class="fa fa-sort-alpha-asc"></i></div>
                    </div>
				</div>
			</div>
			<div class="category-products">
				<ul class="products list row">
					<li class="product col-xs-12 col-sm-6">
						<div class="product-container">
							<div class="inner row">
								<div class="product-left col-sm-6">
									<div class="product-thumb">
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p29.jpg') ?>" alt="Product"></a>
										<a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
									</div>
								</div>
								<div class="product-right col-sm-6">
									<div class="product-name">
										<a href="#">Cotton Lycra Leggings</a>
									</div>
									<div class="price-box">
										<span class="product-price">$139.98</span>
										<span class="product-price-old">$169.00</span>
									</div>
									<div class="product-star">
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star-half-o"></i>
	                                </div>
	                                <div class="desc">Top zipper closure, two pockets in the front, Slit patch pocket in the back. Detachable, adjustable shoulder strap. Interior</div>
	                                <div class="product-button">
	                                	<a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
	                                	<a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
	                                	<a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
	                                </div>
								</div>
							</div>
						</div>
					</li>
					<li class="product col-xs-12 col-sm-6">
						<div class="product-container">
							<div class="inner row">
								<div class="product-left col-sm-6">
									<div class="product-thumb">
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p30.jpg') ?>" alt="Product"></a>
										<a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
									</div>
								</div>
								<div class="product-right col-sm-6">
									<div class="product-name">
										<a href="#">Cotton Lycra Leggings</a>
									</div>
									<div class="price-box">
										<span class="product-price">$139.98</span>
										<span class="product-price-old">$169.00</span>
									</div>
									<div class="product-star">
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star-half-o"></i>
	                                </div>
	                                <div class="desc">Top zipper closure, two pockets in the front, Slit patch pocket in the back. Detachable, adjustable shoulder strap. Interior</div>
	                                <div class="product-button">
	                                	<a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
	                                	<a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
	                                	<a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
	                                </div>
								</div>
							</div>
						</div>
					</li>
					<li class="product col-xs-12 col-sm-6">
						<div class="product-container">
							<div class="inner row">
								<div class="product-left col-sm-6">
									<div class="product-thumb">
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p31.jpg') ?>" alt="Product"></a>
										<a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
									</div>
								</div>
								<div class="product-right col-sm-6">
									<div class="product-name">
										<a href="#">Cotton Lycra Leggings</a>
									</div>
									<div class="price-box">
										<span class="product-price">$139.98</span>
										<span class="product-price-old">$169.00</span>
									</div>
									<div class="product-star">
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star-half-o"></i>
	                                </div>
	                                <div class="desc">Top zipper closure, two pockets in the front, Slit patch pocket in the back. Detachable, adjustable shoulder strap. Interior</div>
	                                <div class="product-button">
	                                	<a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
	                                	<a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
	                                	<a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
	                                </div>
								</div>
							</div>
						</div>
					</li>
					<li class="product col-xs-12 col-sm-6">
						<div class="product-container">
							<div class="inner row">
								<div class="product-left col-sm-6">
									<div class="product-thumb">
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p32.jpg') ?>" alt="Product"></a>
										<a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
									</div>
								</div>
								<div class="product-right col-sm-6">
									<div class="product-name">
										<a href="#">Cotton Lycra Leggings</a>
									</div>
									<div class="price-box">
										<span class="product-price">$139.98</span>
										<span class="product-price-old">$169.00</span>
									</div>
									<div class="product-star">
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star-half-o"></i>
	                                </div>
	                                <div class="desc">Top zipper closure, two pockets in the front, Slit patch pocket in the back. Detachable, adjustable shoulder strap. Interior</div>
	                                <div class="product-button">
	                                	<a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
	                                	<a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
	                                	<a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
	                                </div>
								</div>
							</div>
						</div>
					</li>
					<li class="product col-xs-12 col-sm-6">
						<div class="product-container">
							<div class="inner row">
								<div class="product-left col-sm-6">
									<div class="product-thumb">
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p33.jpg') ?>" alt="Product"></a>
										<a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
									</div>
								</div>
								<div class="product-right col-sm-6">
									<div class="product-name">
										<a href="#">Cotton Lycra Leggings</a>
									</div>
									<div class="price-box">
										<span class="product-price">$139.98</span>
										<span class="product-price-old">$169.00</span>
									</div>
									<div class="product-star">
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star-half-o"></i>
	                                </div>
	                                <div class="desc">Top zipper closure, two pockets in the front, Slit patch pocket in the back. Detachable, adjustable shoulder strap. Interior</div>
	                                <div class="product-button">
	                                	<a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
	                                	<a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
	                                	<a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
	                                </div>
								</div>
							</div>
						</div>
					</li>
					<li class="product col-xs-12 col-sm-6">
						<div class="product-container">
							<div class="inner row">
								<div class="product-left col-sm-6">
									<div class="product-thumb">
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p34.jpg') ?>" alt="Product"></a>
										<a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
									</div>
								</div>
								<div class="product-right col-sm-6">
									<div class="product-name">
										<a href="#">Cotton Lycra Leggings</a>
									</div>
									<div class="price-box">
										<span class="product-price">$139.98</span>
										<span class="product-price-old">$169.00</span>
									</div>
									<div class="product-star">
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star-half-o"></i>
	                                </div>
	                                <div class="desc">Top zipper closure, two pockets in the front, Slit patch pocket in the back. Detachable, adjustable shoulder strap. Interior</div>
	                                <div class="product-button">
	                                	<a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
	                                	<a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
	                                	<a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
	                                </div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="sortPagiBar">
				<ul class="display-product-option">
                    <li class="view-as-grid selected">
                        <span>grid</span>
                    </li>
                    <li class="view-as-list">
                        <span>list</span>
                    </li>
                </ul>
				<div class="sortPagiBar-inner">
					<nav>
                      <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">Next »</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <div class="show-product-item">
                    	<select class="">
	                    	<option value="1">Show 6</option>
	                    	<option value="1">Show 12</option>
	                    </select>
                    </div>
                    
                    <div class="sort-product">
                    	<select>
	                    	<option value="1">Postion</option>
	                    	<option value="1">Product name</option>
	                    </select>
	                    <div class="icon"><i class="fa fa-sort-alpha-asc"></i></div>
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

<!-- Mirrored from kute-themes.com/html/edo/html/category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:27:56 GMT -->
</html>