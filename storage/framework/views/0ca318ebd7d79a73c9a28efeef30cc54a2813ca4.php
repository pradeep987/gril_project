<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
<meta charset="utf-8" />
<title>Gril</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Gril User Registration" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link
	href="<?= asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link
	href="<?= asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link
	href="<?= asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link
	href="<?= asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') ?>"
	rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link
	href="<?= asset('assets/global/plugins/select2/css/select2.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link
	href="<?= asset('assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet') ?>"
	type="text/css" />
<link href="<?= asset('assets/global/css/components-md.min.css') ?>"
	rel="stylesheet" id="style_components" type="text/css" />
<link href="<?= asset('assets/global/css/plugins-md.min.css') ?>"
	rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?= asset('assets/layouts/layout4/css/layout.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link
	href="<?= asset('assets/layouts/layout4/css/themes/default.min.css') ?>"
	rel="stylesheet" type="text/css" id="style_color" />
<link href="<?= asset('assets/layouts/layout4/css/custom.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link href="<?= asset('css/style.css') ?>" rel="stylesheet"
	type="text/css" />
<link href="<?= asset('css/ui-grid.min.css') ?>" rel="stylesheet"
	type="text/css" />
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md"
	ng-app="myApp">
	<!-- BEGIN HEADER -->
	<div class="page-header navbar navbar-fixed-top">
		<!-- BEGIN HEADER INNER -->
		<div class="page-header-inner ">
			<!-- BEGIN LOGO -->

			<a href="index.html"> <img
				src="<?= asset('assets/layouts/layout4/img/grril-final-1.png') ?>"
				alt="logo" class="logo-default" hight="30" width="238" /> </a>

			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler responsive-toggler"
				data-toggle="collapse" data-target=".navbar-collapse"> </a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<div class="page-top">
				<!-- BEGIN TOP NAVIGATION MENU -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li class="separator hide"></li>
						<li class="separator hide"></li>
						<li class="dropdown dropdown-user dropdown-dark"><a
							href="javascript:;" class="dropdown-toggle"
							data-toggle="dropdown" data-hover="dropdown"
							data-close-others="true"> <span
								class="username username-hide-on-mobile"> <?php echo e(ucfirst(Session::get('loginUserName') )); ?>
							</span> <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
								<img alt="" class="img-circle"
								src="<?= asset('assets/layouts/layout4/img/avatar9.jpg') ?>" />
						</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<!-- <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li> -->
								<li><a href="logout"> <i class="icon-key"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
				</div>
				<!-- END TOP NAVIGATION MENU -->
			</div>
			<!-- END PAGE TOP -->
		</div>
		<!-- END HEADER INNER -->
	</div>
	<!-- END HEADER -->