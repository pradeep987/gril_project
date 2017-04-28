<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/edo/html/post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:28:51 GMT -->
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
	<title>Edo - Blog</title>
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
					<li class="home">
						<a href="#">Blogs</a>
						<span></span>
					</li>
					<li>Sed ut perspiciatis unde omnis iste natus error</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-3">
					<div class="block block-widget">
						<div class="block-head">
							<h5 class="widget-title">BLOG CATEGORIES</h5>
						</div>
						<div class="block-inner">
							<ul class="list-link">
								<li><a href="#">News</a></li>
								<li><a href="#">About Beauty</a></li>
								<li><a href="#">Baby & Mom</a></li>
								<li><a href="#">Diet & Fitness</a></li>
								<li><a href="#">Media</a></li>
								<li><a href="#">Makeup</a></li>
								<li><a href="#">Design</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Templates</a></li>
								<li><a href="#">Other</a></li>

							</ul>
						</div>
					</div>
					<div class="block block-widget">
						<div class="block-head">
							<h5 class="widget-title">POPULAR POSTS</h5>
						</div>
						<div class="block-inner">
							<ul class="list-posts-widget">
								<li>
									<div class="post-thumb">
										<a href="/gril_project/public/Kuti/post"><img src="<?= asset('Kuti/data/blogs/1.jpg') ?>" alt="Blog"></a>
									</div>
									<div class="post-info">
										<h5 class="entry_title"><a href="/gril_project/public/Kuti/post">Lorem ipsum dolor sit amet</a></h5>
										<div class="post-meta">
                                            <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                            <span class="comment-count">
                                                <i class="fa fa-comment-o"></i> 3
                                            </span>
                                        </div>
									</div>
								</li>
								<li>
									<div class="post-thumb">
										<a href="/gril_project/public/Kuti/post"><img src="<?= asset('Kuti/data/blogs/2.jpg') ?>" alt="Blog"></a>
									</div>
									<div class="post-info">
										<h5 class="entry_title"><a href="/gril_project/public/Kuti/post">Lorem ipsum dolor sit amet</a></h5>
										<div class="post-meta">
                                            <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                            <span class="comment-count">
                                                <i class="fa fa-comment-o"></i> 3
                                            </span>
                                        </div>
									</div>
								</li>
								<li>
									<div class="post-thumb">
										<a href="/gril_project/public/Kuti/post"><img src="<?= asset('Kuti/data/blogs/3.jpg') ?>" alt="Blog"></a>
									</div>
									<div class="post-info">
										<h5 class="entry_title"><a href="/gril_project/public/Kuti/post">Lorem ipsum dolor sit amet</a></h5>
										<div class="post-meta">
                                            <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                            <span class="comment-count">
                                                <i class="fa fa-comment-o"></i> 3
                                            </span>
                                        </div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="block block-widget">
						<div class="block-head">
							<h5 class="widget-title">RECENT COMMENTS</h5>
						</div>
						<div class="block-inner">
							<ul class="recent-comment-list">
                                <li>
                                    <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                    <div class="comment">
                                        "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                    </div>
                                    <div class="author">Posted by <a href="#">Admin</a></div>
                                </li>
                                <li>
                                    <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                    <div class="comment">
                                        "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                    </div>
                                    <div class="author">Posted by <a href="#">Admin</a></div>
                                </li>
                                <li>
                                    <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                    <div class="comment">
                                        "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                    </div>
                                    <div class="author">Posted by <a href="#">Admin</a></div>
                                </li>
                            </ul>
						</div>
					</div>
					<div class="block block-widget">
						<div class="block-head">
							<h5 class="widget-title">Tags</h5>
						</div>
						<div class="block-inner">
							<div class="tagcloud">
								<a href="#">actual</a>
								<a href="#">adorable</a>
								<a href="#">change</a>
								<a href="#">consider</a>
								<a href="#">phenomeno</a>
								<a href="#">span</a>
								<a href="#">spanegs</a>
								<a href="#">change</a>
								<a href="#">gives</a>
								<a href="#">good</a>
								<a href="#">spanegs</a>
								<a href="#">change</a>
								<a href="#">consider</a>
								<a href="#">gives</a>
								<a href="#">good</a>
							</div>
						</div>
					</div>
					<div class="block-sidebar-img banner-hover">
						<a href="#"><img src="<?= asset('Kuti/data/banner/2.jpg') ?>" alt="Banner"></a>
					</div>
				</div>
				<div class="col-sm-8 col-md-9">
					<div class="main-page">
						<h1 class="page-title">Sed ut perspiciatis unde omnis iste natus error</h1>
						<div class="page-content clearfix">
		                    <article class="entry-detail">
			                    <div class="entry-meta-data">
			                        <span class="author">
			                        <i class="fa fa-user"></i> 
			                        by: <a href="#">Admin</a></span>
			                        <span class="cat">
			                            <i class="fa fa-folder-o"></i>
			                            <a href="#">News, </a>
			                            <a href="#">Promotions</a>
			                        </span>
			                        <span class="comment-count">
			                            <i class="fa fa-comment-o"></i> 3
			                        </span>
			                        <span class="date"><i class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>
			                        <span class="post-star">
			                            <i class="fa fa-star"></i>
			                            <i class="fa fa-star"></i>
			                            <i class="fa fa-star"></i>
			                            <i class="fa fa-star"></i>
			                            <i class="fa fa-star-half-o"></i>
			                            <span>(7 votes)</span>
			                        </span>
			                    </div>
			                    <div class="entry-photo">
			                        <img src="<?= asset('Kuti/data/blogs/blog-full.jpg') ?>" alt="Blog">
			                    </div>
			                    <div class="entry-content clearfix">
			                        <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel.</p>

			                        <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>

			                        <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. </p>

			                        <p>Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. </p>
			                        <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>

			                        <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. </p>
			                    </div>
			                    <div class="entry-tags">
			                        <span>Tags:</span>
			                        <a href="#">beauty,</a>
			                        <a href="#">medicine,</a>
			                        <a href="#">health</a>
			                    </div>
			                </article>
			                <div id="comments">
								<h4 class="comments-title">2 comments for "Sed ut perspiciatis unde omnis iste natus error"</h4>
								<ol class="comment-list">
									<li class="comment">
										<div class="comment-avatar">
											<img src="<?= asset('Kuti/data/avatar.jpg') ?>" alt="Avatar">
										</div>
										<div class="comment-content">
											<div class="comment-meta">
												<a href="#" class="comment-author">jon Conner</a>
												<span class="comment-date">March 14, 2013 at 8:03 am</span>
											</div>
											<div class="comment-entry">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
											</div>
											<div class="comment-actions">
												<a class="comment-reply-link" href="#"><i class="fa fa-share"></i> Reply</a>
											</div>
										</div>
									</li>
									<li class="comment">
										<div class="comment-avatar">
											<img src="<?= asset('Kuti/data/avatar.jpg') ?>" alt="Avatar">
										</div>
										<div class="comment-content">
											<div class="comment-meta">
												<a href="#" class="comment-author">jon Conner</a>
												<span class="comment-date">March 14, 2013 at 8:03 am</span>
											</div>
											<div class="comment-entry">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
											</div>
											<div class="comment-actions">
												<a class="comment-reply-link" href="#"><i class="fa fa-share"></i> Reply</a>
											</div>
										</div>
									</li>
								</ol>
								<div class="comment-form">
									<h3 class="comment-reply-title">Leave a Comment</h3>
									<small>Your email address will not be published. Required fields are marked *</small>
									<p>
										<label class="required">Name</label>
										<input type="text">
									</p>
									<p>
										<label class="required">Email</label>
										<input type="text">
									</p>
									<p>
										<label>Website</label>
										<input type="text">
									</p>
									<p>
										<label class="required">Comment</label>
										<textarea rows="5"></textarea>	
									</p>
									<p>
										<button class="button">Post review</button>
									</p>
								</div>
							</div>
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

<!-- Mirrored from kute-themes.com/html/edo/html/post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:29:08 GMT -->
</html>