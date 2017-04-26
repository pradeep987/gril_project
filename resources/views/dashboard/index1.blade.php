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
	href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
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
<link href="<?= asset('assets/global/css/components.min.css') ?>"
	rel="stylesheet" type="text/css" id="style_color" />
<link href="<?= asset('assets/layouts/layout4/css/custom.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link href="<?= asset('css/style.css') ?>" rel="stylesheet"
	type="text/css" />
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md"
	ng-app="myApp" ng-controller="businessRegisration">
	My Dashoboard - {{ ucfirst(Session::get('userName') ) }}
	<!-- END QUICK NAV -->
	<!--[if lt IE 9]>
<script src="<?= asset('assets/global/plugins/respond.min.js') ?>"></script>
<script src="<?= asset('assets/global/plugins/excanvas.min.js') ?>"></script> 
<script src="<?= asset('assets/global/plugins/ie8.fix.min.js') ?>"></script> 
<![endif]-->
	<script
		src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places&key=AIzaSyAsPBMpbmG1Jwxft44p96UBAEn66D3c8jU"></script>

	<!-- BEGIN CORE PLUGINS -->
	<script src="<?= asset('assets/global/plugins/jquery.min.js') ?>"
		type="text/javascript"></script>
	<script
		src="<?= asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') ?>"
		type="text/javascript"></script>

	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script
		src="<?= asset('assets/global/plugins/select2/js/select2.full.min.js') ?>"
		type="text/javascript"></script>
	<script
		src="<?= asset('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') ?>"
		type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL SCRIPTS -->
	<script src="<?= asset('assets/global/scripts/app.min.js') ?>"
		type="text/javascript"></script>
	<!-- END THEME GLOBAL SCRIPTS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script
		src="<?= asset('assets/pages/scripts/components-select2.min.js') ?>"
		type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME LAYOUT SCRIPTS -->
	<script
		src="<?= asset('assets/layouts/layout4/scripts/layout.min.js') ?>"
		type="text/javascript"></script>
	<!-- END THEME LAYOUT SCRIPTS -->

	<script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
</body>

</html>
