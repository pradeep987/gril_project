<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/edo/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:25:25 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= asset('Kuti/css/reset.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/lib/bootstrap/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/lib/font-awesome/css/font-awesome.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/lib/owl.carousel/owl.carousel.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/lib/jquery-ui/jquery-ui.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/css/animate.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/css/global.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/css/style.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('Kuti/css/responsive.css') ?>" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<title>Edo - Home</title>
</head>
<body>
	<!-- header -->
	<?php echo $__env->make("home.Kuti.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>; 
	<!-- ./header -->
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-sm-8 col-md-8 col-lg-9">
					<!-- Home slide -->
					<div class="block block-slider">
						<ul class="home-slider kt-bxslider">
							<li><img src="<?= asset('Kuti/data/option1/slide03.png') ?>" alt="Slider"></li>
							<li><img src="<?= asset('Kuti/data/option1/slide02.png') ?>" alt="Slider"></li>
							<li><img src="<?= asset('Kuti/data/option1/slide01.png') ?>" alt="Slider"></li>
							<li><img src="<?= asset('Kuti/data/option1/slide04.png') ?>" alt="Slider"></li>
						</ul>
					</div>
					<!-- ./Home slide -->
					<div class="row">
						<div class="col-md-12 col-lg-4">
							<!-- block-shop-features -->
							<div class="block block-shop-features">
								<div class="block-head">
									<div class="block-title">
										<div class="block-icon">
											<img src="<?= asset('Kuti/data/shop-features-icon.png') ?>" alt="store icon">
										</div>
										<div class="block-title-text text-sm">shop</div>
										<div class="block-title-text text-lg">features</div>
									</div>
								</div>
								<div class="block-inner">
									<ul class="list-banner">
										<li class="banner-hover"><a href="#"><img src="<?= asset('Kuti/data/option1/banner1.jpg') ?>" alt="Banner"></a></li>
										<li class="banner-hover"><a href="#"><img src="<?= asset('Kuti/data/option1/banner2.jpg') ?>" alt="Banner"></a></li>
										<li class="banner-hover"><a href="#"><img src="<?= asset('Kuti/data/option1/banner3.jpg') ?>" alt="Banner"></a></li>
									</ul>
								</div>
							</div>
							<!-- ./block-shop-features-->
						</div>
						<div class="col-md-12 col-lg-8">
							<!-- block-offers -->
							<div class="block block-offers">
								<div class="block-head">
									<div class="block-title">
										<div class="block-icon">
											<img src="<?= asset('Kuti/data/offers-icon.png') ?>" alt="store icon">
										</div>
										<div class="block-title-text text-sm">today's</div>
										<div class="block-title-text text-lg">offers</div>
									</div>
								</div>
								<div class="block-inner">
									<ul class="products kt-owl-carousel" data-margin="0" data-loop="true"  data-nav="true" data-responsive='{"0":{"items":2},"600":{"items":2},"1000":{"items":2}}'>
										<li class="product">
											<div class="product-container">
												<div class="product-left">
													<div class="product-thumb">
														<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p3.jpg') ?>" alt="Product"></a>
														<a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
													</div>
													<div class="product-status">
														<span class="new">New</span>
														<span class="sale">Sale</span>
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
														<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p4.jpg') ?>" alt="Product"></a>
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
														<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p5.jpg') ?>" alt="Product"></a>
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
							<!-- block-offers -->
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-3">
					<!-- block category -->
					<div class="block block-category">
						<div class="block-head">
							<ul class="nav-tab">
		                        <li class="active"><a data-toggle="tab" href="#tab-categories">categories</a></li>
		                        <li><a data-toggle="tab" href="#tab-guarantee">GUARANTEE</a></li>
	                      	</ul>
						</div>
						<div class="block-inner">
							<div class="tab-container">
								<div id="tab-categories" class="tab-panel active">
									<ul class="categories">
										<li>
											<a href="#" title="Perfume &amp; Cologne">
												<span class="text">Perfume &amp; Cologne</span>
												<span class="count">(14)</span>
											</a>
										</li>
										<li>
											<a href="#" title="Skincare">
												<span class="text">Skincare</span>
												<span class="count">(19)</span>
											</a>
										</li>
										<li>
											<a href="#l" title="Metkup">
												<span class="text">Metkup</span>
												<span class="count">(16)</span>
											</a>
										</li>
										<li>
											<a href="#" title="Mobile phone">
												<span class="text">Mobile phone</span>
												<span class="count">(19)</span>
											</a>
										</li>
										<li>
											<a href="#" title="Tablet">
												<span class="text">Tablet</span>
												<span class="count">(15)</span>
											</a>
										</li>
										<li>
											<a href="#" title="Watch sport">
												<span class="text">Watch sport</span>
												<span class="count">(19)</span>
											</a>
										</li>
										<li>
											<a href="#" title="Women's Apparel">
												<span class="text">Women's Apparel</span>
												<span class="count">(17)</span>
											</a>
										</li>
										<li>
											<a href="#" title="Men's Apparel">
												<span class="text">Men's Apparel</span>
												<span class="count">(19)</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="text">Accessories</span>
												<span class="count">(1)</span>
											</a>
										</li>
									</ul>
								</div>
								<div id="tab-guarantee" class="tab-panel">
									<div class="block-guarantee">
										<h5>
											<span>THE OFFICIAL FAMISHOP® SHOP GUARANTEE</span>
										</h5>
										<ul>
											<li><a href="#">Free Shipping Every Day</a></li>
											<li><a href="#">Earn VIP Rewards</a></li>
											<li><a href="#">Dedicated FamiShop Experts</a></li>
											<li><a href="#">Order Missing Pieces</a></li>
										</ul>
										<a href="#" class="button-radius">Learn more<span class="icon"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ./block category -->
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
												<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p1.jpg') ?>" alt="Product"></a>
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
												<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p2.jpg') ?>" alt="Product"></a>
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
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<!-- block  host deals -->
			<div class="block block-hot-deals">
				<div class="block-head">
					<div class="block-title">
						<div class="block-icon">
							<img src="<?= asset('Kuti/data/offers-icon.png') ?>" alt="store icon">
						</div>
						<div class="block-title-text text-sm">hot</div>
						<div class="block-title-text text-lg">deals</div>
					</div>
					<div class="block-countdownt">
						<span class="countdown-lastest" data-y="2016" data-m="10" data-d="1" data-h="00" data-i="00" data-s="00"></span>
					</div>
				</div>
				<div class="block-inner">
					<ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
						<li class="product">
							<div class="product-container">
								<div class="product-left">
									<div class="product-thumb">
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p6.jpg') ?>" alt="Product"></a>
										<a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
									</div>
									<div class="product-status">
										<span class="new">New</span>
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
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p7.jpg') ?>" alt="Product"></a>
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
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p8.jpg') ?>" alt="Product"></a>
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
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p9.jpg') ?>" alt="Product"></a>
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
										<a class="product-img" href="#"><img src="<?= asset('Kuti/data/option1/p10.jpg') ?>" alt="Product"></a>
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
			<!-- ./block hot deals -->
		</div>
		<!--Block banner -->
		<div class="row">
			<div class="row">
				<div class="col-sm-6">
					<div class="block block-banner banner-hover">
						<a href="#"><img src="<?= asset('Kuti/data/option1/banner3.png') ?>" alt="Banner"></a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="block block-banner banner-hover">
						<a href="#"><img src="<?= asset('Kuti/data/option1/banner4.png') ?>" alt="Banner"></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Block banner -->
		<!-- block-popular-cat--> 
		<div class="row">
			<div class="block-popular-cat">
				<h3 class="title">
					<span class="text">Popular Categories</span>
				</h3>
				<div class="popular-inner">
					<div class="list-popular-cat kt-owl-carousel" data-margin="0" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
						<div class="item">
							<div class="image">
								<img src="<?= asset('Kuti/data/option1/popular1.png') ?>" alt="popular1.png">
							</div>
							<div class="inner">
								<h5 class="parent-categories">Personal Electronics</h5>
								<ul class="sub-categories">
									<li><a href="#">Xperia Z3 Phones and Tablet</a></li>
									<li><a href="#">XB950 Extra Bass Bluetooth Headset</a></li>
									<li><a href="#">Bluetooth Wireless Speakers</a></li>
									<li><a href="#">Hi-Res Walkman Digital Music Player</a></li>
									<li><a href="#">Personal Audio Accessories</a></li>
								</ul>
							</div>
						</div>
						<div class="item">
							<div class="image">
								<img src="<?= asset('Kuti/data/option1/popular2.png') ?>" alt="popular2.png">
							</div>
							<div class="inner">
								<h5 class="parent-categories">Personal Electronics</h5>
								<ul class="sub-categories">
									<li><a href="#">Xperia Z3 Phones and Tablet</a></li>
									<li><a href="#">XB950 Extra Bass Bluetooth Headset</a></li>
									<li><a href="#">Bluetooth Wireless Speakers</a></li>
									<li><a href="#">Hi-Res Walkman Digital Music Player</a></li>
									<li><a href="#">Personal Audio Accessories</a></li>
								</ul>
							</div>
						</div>
						<div class="item last">
							<div class="image">
								<img src="<?= asset('Kuti/data/option1/popular3.png') ?>" alt="popular3.png">
							</div>
							<div class="inner">
								<h5 class="parent-categories">Personal Electronics</h5>
								<ul class="sub-categories">
									<li><a href="#">Xperia Z3 Phones and Tablet</a></li>
									<li><a href="#">XB950 Extra Bass Bluetooth Headset</a></li>
									<li><a href="#">Bluetooth Wireless Speakers</a></li>
									<li><a href="#">Hi-Res Walkman Digital Music Player</a></li>
									<li><a href="#">Personal Audio Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ./block-popular-cat-->
	</div>
	<!-- footer -->
	  <?php echo $__env->make("home.Kuti.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
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

<!-- Mirrored from kute-themes.com/html/edo/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:26:40 GMT -->
</html>