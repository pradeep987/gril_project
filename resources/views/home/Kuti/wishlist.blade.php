<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/edo/html/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:27:21 GMT -->
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
	<title>Edo - My Wishlist </title>
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
					<li>My Wishlist</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="sidebar">
						<!-- block  top sellers -->
						<div class="block block-top-sellers">
							<div class="block-head">
								<div class="block-title">
									<div class="block-icon">
										<img src="<?= asset('Kuti/data/top-seller-icon.png') ?>" alt="store icon">
									</div>
									<div class="block-title-text text-sm">top</div>
									<div class="block-title-text text-lg">SELLERS</div>
								</div>
							</div>
							<div class="block-inner">
								<ul class="products kt-owl-carousel" data-items="1" data-autoplay="true" data-loop="true" data-nav="true">
									<li class="product">
										<div class="product-container">
											<div class="product-left">
												<div class="product-thumb">
													<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p1.jpg') ?>" alt=""></a>
													<a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
												</div>
											</div>
											<div class="product-right">
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
	                                            <div class="product-button">
	                                            	<a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
	                                            	<a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
	                                            	<a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
	                                            </div>
											</div>
										</div>
									</li>
									<li class="product">
										<div class="product-container">
											<div class="product-left">
												<div class="product-thumb">
													<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p2.jpg') ?>" alt=""></a>
													<a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
												</div>
											</div>
											<div class="product-right">
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
	                                            <div class="product-button">
	                                            	<a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
	                                            	<a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
	                                            	<a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
	                                            </div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- block  top sellers -->
						<div class="block-sidebar-img banner-hover">
							<a href="#"><img src="<?= asset('Kuti/data/banner/3.jpg') ?>" alt="Banner"></a>
						</div>
						<!-- block SPECIALS -->
						<div class="block block-specials">
							<div class="block-head">SPECIALS</div>
							<div class="block-inner">
								<div class="product">
									<div class="image">
										<a href="#"><img src="<?= asset('Kuti/data/option1/p23.jpg" alt="p23.jpg') ?>"></a>
									</div>
									<div class="product-name">
										<a href="#">Cotton Lycra Leggings</a>
									</div>
									<div class="price-box">
										<span class="product-price">$139.98</span>
										<span class="product-price-old">$169.00</span>
									</div>
								</div>
								<a href="#" class="button-radius">All Specials<span class="icon"></span></a>
							</div>
						</div>
						<!-- ./block SPECIALS -->
					</div>
					
				</div>
				<div class="col-xs-12 col-sm-8 col-md-9">
					<h1 class="page-title">My Wishlist</h1>
					<div class="page-content">
					</div>
					<div class="box-border">
						<h4>New wishlist</h4>
						<p>
							<label>Name</label>
							<input type="text">
						</p>
						<p>
							<button class="button">Save</button>
						</p>
					</div>
					<table class="table table-bordered table-wishlist">
	                    <thead>
	                        <tr>
	                            <th>Name</th>
	                            <th>Qty</th>
	                            <th>Viewed</th>
	                            <th>Created</th>
	                            <th>Derect link</th>
	                            <th>Delete</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td>My wishlist</td>
	                            <td>7</td>
	                            <td>0</td>
	                            <td>2015-06-18</td>
	                            <td>View</td>
	                            <td class="text-center"><a href="#"><i class="fa fa-close"></i></a></td>
	                        </tr>
	                    </tbody>
	                </table>
	                <ul class="row list-wishlist">
	                    <li class="col-sm-6 col-md-3">
	                        <div class="product-img">
	                            <a href="#"><img src="<?= asset('Kuti/data/wishlist1.jpg') ?>" alt="Product"></a>
	                        </div>
	                        <h5 class="product-name">
	                            <a href="#">Cotton Lycra Leggings</a>
	                        </h5>
	                        <div class="qty">
	                            <label>Quantity</label>
	                            <input type="text">
	                        </div>
	                        <div class="priority">
	                            <label>Priority</label>
	                            <select>
	                                <option>Medium</option>
	                            </select>
	                        </div>
	                        <div class="button-action">
	                            <button class="button button-sm">Save</button>
	                            <a href="#"><i class="fa fa-close"></i></a>
	                        </div>
	                    </li>
	                    <li class="col-sm-6 col-md-3">
	                        <div class="product-img">
	                            <a href="#"><img src="<?= asset('Kuti/data/wishlist2.jpg') ?>" alt="Product"></a>
	                        </div>
	                        <h5 class="product-name">
	                            <a href="#">Cotton Lycra Leggings</a>
	                        </h5>
	                        <div class="qty">
	                            <label>Quantity</label>
	                            <input type="text">
	                        </div>
	                        <div class="priority">
	                            <label>Priority</label>
	                            <select>
	                                <option>Medium</option>
	                            </select>
	                        </div>
	                        <div class="button-action">
	                            <button class="button button-sm">Save</button>
	                            <a href="#"><i class="fa fa-close"></i></a>
	                        </div>
	                    </li>
	                    <li class="col-sm-6 col-md-3">
	                        <div class="product-img">
	                            <a href="#"><img src="<?= asset('Kuti/data/wishlist3.jpg') ?>" alt="Product"></a>
	                        </div>
	                        <h5 class="product-name">
	                            <a href="#">Cotton Lycra Leggings</a>
	                        </h5>
	                        <div class="qty">
	                            <label>Quantity</label>
	                            <input type="text">
	                        </div>
	                        <div class="priority">
	                            <label>Priority</label>
	                            <select>
	                                <option>Medium</option>
	                            </select>
	                        </div>
	                        <div class="button-action">
	                            <button class="button button-sm">Save</button>
	                            <a href="#"><i class="fa fa-close"></i></a>
	                        </div>
	                    </li>
	                    <li class="col-sm-6 col-md-3">
	                        <div class="product-img">
	                            <a href="#"><img src="<?= asset('Kuti/data/wishlist4.jpg') ?>" alt="Product"></a>
	                        </div>
	                        <h5 class="product-name">
	                            <a href="#">Cotton Lycra Leggings</a>
	                        </h5>
	                        <div class="qty">
	                            <label>Quantity</label>
	                            <input type="text">
	                        </div>
	                        <div class="priority">
	                            <label>Priority</label>
	                            <select>
	                                <option>Medium</option>
	                            </select>
	                        </div>
	                        <div class="button-action">
	                            <button class="button button-sm">Save</button>
	                            <a href="#"><i class="fa fa-close"></i></a>
	                        </div>
	                    </li>
	                    <li class="col-sm-6 col-md-3">
	                        <div class="product-img">
	                            <a href="#"><img src="<?= asset('Kuti/data/wishlist5.jpg') ?>" alt="Product"></a>
	                        </div>
	                        <h5 class="product-name">
	                            <a href="#">Cotton Lycra Leggings</a>
	                        </h5>
	                        <div class="qty">
	                            <label>Quantity</label>
	                            <input type="text">
	                        </div>
	                        <div class="priority">
	                            <label>Priority</label>
	                            <select>
	                                <option>Medium</option>
	                            </select>
	                        </div>
	                        <div class="button-action">
	                            <button class="button button-sm">Save</button>
	                            <a href="#"><i class="fa fa-close"></i></a>
	                        </div>
	                    </li>
	                    <li class="col-sm-6 col-md-3">
	                        <div class="product-img">
	                            <a href="#"><img src="<?= asset('Kuti/data/wishlist6.jpg') ?>" alt="Product"></a>
	                        </div>
	                        <h5 class="product-name">
	                            <a href="#">Cotton Lycra Leggings</a>
	                        </h5>
	                        <div class="qty">
	                            <label>Quantity</label>
	                            <input type="text">
	                        </div>
	                        <div class="priority">
	                            <label>Priority</label>
	                            <select>
	                                <option>Medium</option>
	                            </select>
	                        </div>
	                        <div class="button-action">
	                            <button class="button button-sm">Save</button>
	                            <a href="#"><i class="fa fa-close"></i></a>
	                        </div>
	                    </li>
	                    <li class="col-sm-6 col-md-3">
	                        <div class="product-img">
	                            <a href="#"><img src="<?= asset('Kuti/data/wishlist7.jpg') ?>" alt="Product"></a>
	                        </div>
	                        <h5 class="product-name">
	                            <a href="#">Cotton Lycra Leggings</a>
	                        </h5>
	                        <div class="qty">
	                            <label>Quantity</label>
	                            <input type="text">
	                        </div>
	                        <div class="priority">
	                            <label>Priority</label>
	                            <select>
	                                <option>Medium</option>
	                            </select>
	                        </div>
	                        <div class="button-action">
	                            <button class="button button-sm">Save</button>
	                            <a href="#"><i class="fa fa-close"></i></a>
	                        </div>
	                    </li>
	                    <li class="col-sm-6 col-md-3">
	                        <div class="product-img">
	                            <a href="#"><img src="<?= asset('Kuti/data/wishlist8.jpg') ?>" alt="Product"></a>
	                        </div>
	                        <h5 class="product-name">
	                            <a href="#">Cotton Lycra Leggings</a>
	                        </h5>
	                        <div class="qty">
	                            <label>Quantity</label>
	                            <input type="text">
	                        </div>
	                        <div class="priority">
	                            <label>Priority</label>
	                            <select>
	                                <option>Medium</option>
	                            </select>
	                        </div>
	                        <div class="button-action">
	                            <button class="button button-sm">Save</button>
	                            <a href="#"><i class="fa fa-close"></i></a>
	                        </div>
	                    </li>
	                </ul>
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

<!-- Mirrored from kute-themes.com/html/edo/html/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:27:27 GMT -->
</html>