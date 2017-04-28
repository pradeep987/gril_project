<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codechant.com/Envato/html/rosa/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:35:23 GMT -->
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
   
    <!--------------- Header --------------->
      @include("home.Envato.header"); 
    
    <!--------------- Primary navigation --------------->
    @include("home.Envato.menu");
    
    <!--------------- Breadcumb --------------->
    <div class="breadcrumb-wrap"> 
        <div class="container">
            <a class="breadcrumb-link" href="/gril_project/public/Envato/index-2" title="Return to Home">Home</a><i class="breadcrumb-arrow fa fa-angle-right"></i><a class="breadcrumb-link" href="/gril_project/public/Envato/blog" title="Return to Blog">Blog</a><i class="breadcrumb-arrow fa fa-angle-right"></i><span class="breadcrumb-current">Summer Entertaining</span>
        </div>
    </div>
    
    <!--------------- Main wrap --------------->
    <div class="main-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                   
                    <!--------------- Recent Blog Post --------------->
                    <div class="module blog-widget recent-widget secondary-module">
                        <h4 class="module-title linked-title"><a href="#"><i class="fa fa-image" aria-hidden="true"></i>Recent Posts</a><span class="toggle-btn"></span></h4>
                        <div class="module-content mobile-collapse">
                            <ul class="recent-list">
                                <li class="recent-post">
                                    <a href="#" class="recent-post-thumb">
                                        <img src="<?= asset('Envato/img/blog/blog-1.jpg') ?>" alt="...">
                                    </a>
                                    <div class="recent-post-content">
                                        <h5><a href="/gril_project/public/Envato/blog-single">Summer Entertainment</a></h5>
                                        <span class="date">Aug 13, 2015</span>
                                    </div>
                                </li>
                                <li class="recent-post">
                                    <a href="#" class="recent-post-thumb">
                                        <img src="<?= asset('Envato/img/blog/blog-2.jpg') ?>" alt="...">
                                    </a>
                                    <div class="recent-post-content">
                                        <h5><a href="/gril_project/public/Envato/blog-single">Bibendum Auctor</a></h5>
                                        <span class="date">Aug 13, 2015</span>
                                    </div>
                                </li>
                                <li class="recent-post">
                                    <a href="#" class="recent-post-thumb">
                                        <img src="<?= asset('Envato/img/blog/blog-3.jpg') ?>" alt="...">
                                    </a>
                                    <div class="recent-post-content">
                                        <h5><a href="/gril_project/public/Envato/blog-single">Bibendum Auctor</a></h5>
                                        <span class="date">Aug 13, 2015</span>
                                    </div>
                                </li>
                                <li class="recent-post">
                                    <a href="#" class="recent-post-thumb">
                                        <img src="<?= asset('Envato/img/blog/blog-4.jpg') ?>" alt="...">
                                    </a>
                                    <div class="recent-post-content">
                                        <h5><a href="/gril_project/public/Envato/blog-single">Summer Entertainment</a></h5>
                                        <span class="date">Aug 13, 2015</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!--------------- Banner area --------------->
                    <div class="module shop-widget banner-widget">
                        <div class="module-content">
                            <div class="banner">
                                <a href="#">
                                    <img src="<?= asset('Envato/img/banner/women-page-2.jpg') ?>" alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    
                    <!--------------- Main Product Widget --------------->
                    <div class="article-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <article class="post single-post">
                                    <div class="article-thumbnail">
                                        <img src="<?= asset('Envato/img/blog/single-big.jpg') ?>" alt="...">
                                    </div>
                                    <h4 class="article-title">Summer Entertaining</h4>
                                    <p class="article-metas">
                                        <span class="meta category">
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            <a href="#">Uncategories</a>
                                        </span>
                                        <span class="meta commentcount">
                                            <i class="fa fa-comments" aria-hidden="true"></i>
                                            <a href="#">0 Comments</a>
                                        </span>
                                        <span class="meta view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <span>View (408)</span>
                                        </span>
                                        <span class="meta author">
                                            <span>Author:</span>
                                            <span>Field Themes</span>
                                        </span>
                                    </p>
                                    <div class="article-content">
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris.</p>
                                        <blockquote>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris.</blockquote>
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus sit amet mauris.</p>
                                    </div>
                                </article>
                            </div>
                            
                            <!--------------- Comment area --------------->
                            <div class="col-md-12">
                                <div class="comments-area">
                                    <h3 class="comment-title">2 Comments</h3>

                                    <ul class="comments">
                                        <li class="comment">
                                            <div class="comment-avatar">
                                                <img src="<?= asset('Envato/img/client/client-1.png') ?>" alt="Commenter Pic">
                                            </div>
                                            <div class="comment-body">
                                                <h5 class="comment-name">Rebeca John</h5>/<span class="comment-date">15 May, 2016</span>
                                                <p class="comment-content">Today essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
                                                <a class="reply-btn" href="#">Reply</a>
                                            </div>
                                            <ul class="comments child-comments">
                                                <li class="comment">
                                                    <div class="comment-avatar">
                                                        <img src="<?= asset('Envato/img/client/client-2.png') ?>" alt="Commenter Pic">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h5 class="comment-name">John Wensley</h5>/<span class="comment-date">2 July, 2016</span>
                                                        <p class="comment-content">Remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                                                        <a class="reply-btn" href="#">Reply</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <form id="commentform" class="basicfields commentform" action="#" method="post">
                                        <h3>Leave Your Comments</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="name" placeholder="Full Name *" pattern="[A-Za-z].{3,50}" title="Only caps and small letters allowed" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" name="email" placeholder="Email *" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" title="Enter a valid email" required="">
                                            </div>
                                            <div class="col-md-12">
                                                <textarea name="message" placeholder="Message" rows="6"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <input class="btn btn-default" type="submit" value="Submit Comment">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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

<!-- Mirrored from codechant.com/Envato/html/rosa/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 09:35:23 GMT -->
</html>