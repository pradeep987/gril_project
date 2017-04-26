<!DOCTYPE html>
<!-- 
   Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
   Version: 4.7.1
   Author: KeenThemes
   Website: http://www.keenthemes.com/
   Contact: support@keenthemes.com
   Follow: www.twitter.com/keenthemes
   Dribbble: www.dribbble.com/keenthemes
   Like: www.facebook.com/keenthemes
   Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
   Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
   License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
   -->
<!--[if IE 8]> 
<html lang="en" class="ie8 no-js">
   <![endif]-->
<!--[if IE 9]> 
   <html lang="en" class="ie9 no-js">
      <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title>Select Category</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta
	content="Preview page of Metronic Admin Theme #4 for bootstrap form wizard demos using Twitter Bootstrap Wizard Plugin"
	name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link
	href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
	rel="stylesheet" type="text/css" />
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link
	href="<?= asset('assets/global/plugins/select2/css/select2.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link
	href="<?= asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') ?>"
	rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
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
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<body
	class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md"
	ng-controller="AddRetailProductCtrl">
	<!-- BEGIN HEADER -->
	@include("dashboard.header");
	<!-- END HEADER -->
	<!-- BEGIN HEADER & CONTENT DIVIDER -->
	<div class="clearfix"></div>
	<!-- END HEADER & CONTENT DIVIDER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		@include("dashboard.sidebar");
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<!-- BEGIN CONTENT BODY -->
			<div class="page-content">
				<!-- BEGIN PAGE HEAD-->
				<div class="page-head">
					<!-- BEGIN PAGE TITLE -->
					<div class="page-title">
						<h1>Select Category</h1>
					</div>
					<!-- END PAGE TITLE -->
					<!-- BEGIN PAGE TOOLBAR -->
					<!-- END PAGE TOOLBAR -->
				</div>
				<!-- END PAGE HEAD-->
				<!-- BEGIN PAGE BREADCRUMB -->
				<ul class="page-breadcrumb breadcrumb">
					<li><a ui-sref="dashboard">Home</a> <i class="fa fa-circle"></i>
					</li>
					<li><a ui-sref="datatablesmanaged">Business List</a> <i
						class="fa fa-circle"></i>
					</li>
					<li><a ui-sref="datatablesmanaged">Retail Business</a> <i
						class="fa fa-circle"></i>
					</li>
					<li class="active">Select Category</li>
				</ul>
				<!-- END PAGE BREADCRUMB -->
				<!-- BEGIN PAGE BASE CONTENT -->
				<div class="row">
					<div class="col-md-12">
						<div class="portlet light bordered" id="form_wizard_1">
							<div class="portlet-title">
								<div class="caption">
									<i class=" icon-layers font-red"></i> <span
										class="caption-subject font-red bold uppercase"> Select
										Category - <span class="step-title"> Step 1 of 4 </span> </span>
								</div>
							</div>
							<div class="portlet-body form">
								<form class="form-horizontal" action="#" id="submit_form"
									method="POST">
									<div class="form-wizard ">
										<div class="form-body ">
											<ul class="nav nav-pills nav-justified steps">
												<li><a href="#tab1" data-toggle="tab" class="step"> <span
														class="number"> 1 </span> <span class="desc"> <i
															class="fa fa-check"></i> Account Setup </span> </a>
												</li>
												<li><a href="#tab2" data-toggle="tab" class="step"> <span
														class="number"> 2 </span> <span class="desc"> <i
															class="fa fa-check"></i> Fill In Product Ingormation </span>
												</a>
												</li>
												<li><a href="#tab3" data-toggle="tab" class="step active"> <span
														class="number"> 3 </span> <span class="desc"> <i
															class="fa fa-check"></i> Billing Setup </span> </a>
												</li>
												<li><a href="#tab4" data-toggle="tab" class="step"> <span
														class="number"> 4 </span> <span class="desc"> <i
															class="fa fa-check"></i> Confirm </span> </a>
												</li>
											</ul>
											<div id="bar" class="progress progress-striped"
												role="progressbar">
												<div class="progress-bar progress-bar-success"></div>
											</div>
											<div class="tab-content">
												<div class="alert alert-danger display-none">
													<button class="close" data-dismiss="alert"></button>
													You have some form errors. Please check below.
												</div>
												<div class="alert alert-success display-none">
													<button class="close" data-dismiss="alert"></button>
													Your form validation is successful!
												</div>
												<div class="tab-pane active" id="tab1">
													<div class="portlet light bordered">
														<div class="portlet-title">
															<div class="caption font-green-sharp">
																<i class="icon-settings font-green-sharp"></i> <span
																	class="caption-subject bold uppercase">Select Category</span>
																<span class="caption-helper hide"></span>
															</div>
														</div>
														<div class="portlet-body">
															<div class="row" data-selectsplitter-wrapper-selector="">
																<div class="col-xs-12 col-sm-2">
																	<select ng-model="customer.MainCatagary"
																		ng-options="obj.id as obj.maincatagary for obj in maincatagaris"
																		ng-change="getMainCatagaryCatagarys()"
																		class="form-control" ng-required="true"
																		id="maincatagary"
																		data-selectsplitter-secondselect-selector="" size="8"></select>
																</div>
																<div class="col-xs-12 col-sm-2"
																	ng-hide="(customer.MainCatagary == '')">
																	<select ng-model="customer.Catagary"
																		ng-options="x.Id as x.catagary for x in catagaries"
																		ng-change="getCatagaryCities()" class="form-control"
																		ng-required="true" id="catagary"
																		data-selectsplitter-secondselect-selector="" size="8"></select>
																</div>
																<div class="col-xs-12 col-sm-2"
																	ng-hide="(customer.Catagary == '')">
																	<select ng-model="customer.SubCatagary"
																		ng-options="x.Id as x.subcatagary for x in subcatagaries"
																		class="form-control" ng-required="true"
																		id="subcatagary"
																		data-selectsplitter-secondselect-selector="" size="8"
																		required></select>
																</div>
															</div>
														</div>
														Categories Selected: [[customer.MainCatagary]]
														[[customer.Catagary]] [[customer.SubCatagary]]
														<!--<div class="row">
                                                      <div class="col-md-offset-3 col-md-9">
                                                          <button type="button" ng-disabled="(customer.Catagary == '' || customer.SubCatagary == '')" ng-click="navTab(2)" class="btn btn-info">Continue</button>
                                                      </div>
                                                      </div>-->
													</div>
												</div>
												<div class="tab-pane" id="tab2">
													<div class="row">
														<div class="col-md-9">
															<div class="portlet light bordered">
																<div class="portlet-title">
																	<div class="caption font-green-sharp">
																		<i class="icon-settings font-green-sharp"></i> <span
																			class="caption-subject bold uppercase">Product
																			Information</span> <span class="caption-helper hide"></span>
																	</div>
																</div>
																<div class="portlet-body">
																	<div class="row"
																		data-selectsplitter-wrapper-selector="">
																		<div class="col-xs-12 col-sm-2">
																			<select ng-model="customer.MainCatagary"
																				ng-options="obj.id as obj.maincatagary for obj in maincatagaris"
																				ng-change="getMainCatagaryCatagarys()"
																				class="form-control" ng-required="true"
																				id="maincatagary"
																				data-selectsplitter-secondselect-selector=""
																				size="8"></select>
																		</div>
																		<div class="col-xs-12 col-sm-2"
																			ng-hide="(customer.MainCatagary == '')">
																			<select ng-model="customer.Catagary"
																				ng-options="x.Id as x.catagary for x in catagaries"
																				ng-change="getCatagaryCities()" class="form-control"
																				ng-required="true" id="catagary"
																				data-selectsplitter-secondselect-selector=""
																				size="8"></select>
																		</div>
																		<div class="col-xs-12 col-sm-2"
																			ng-hide="(customer.Catagary == '')">
																			<select ng-model="customer.SubCatagary"
																				ng-options="x.Id as x.subcatagary for x in subcatagaries"
																				class="form-control" ng-required="true"
																				id="subcatagary"
																				data-selectsplitter-secondselect-selector=""
																				size="8" required></select>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<div class="portlet light bordered">
																<div class="portlet-title">
																	<div class="caption font-green-sharp">
																		<i class="icon-settings font-green-sharp"></i> <span
																			class="caption-subject bold uppercase">SEO Steps</span>
																		<span class="caption-helper hide"></span>
																	</div>
																</div>
																<div class="portlet-body">
																	<div class="row"
																		data-selectsplitter-wrapper-selector="">
																		<div class="col-xs-12 col-sm-2">
																			<select ng-model="customer.MainCatagary"
																				ng-options="obj.id as obj.maincatagary for obj in maincatagaris"
																				ng-change="getMainCatagaryCatagarys()"
																				class="form-control" ng-required="true"
																				id="maincatagary"
																				data-selectsplitter-secondselect-selector=""
																				size="8"></select>
																		</div>
																		<div class="col-xs-12 col-sm-2"
																			ng-hide="(customer.MainCatagary == '')">
																			<select ng-model="customer.Catagary"
																				ng-options="x.Id as x.catagary for x in catagaries"
																				ng-change="getCatagaryCities()" class="form-control"
																				ng-required="true" id="catagary"
																				data-selectsplitter-secondselect-selector=""
																				size="8"></select>
																		</div>
																		<div class="col-xs-12 col-sm-2"
																			ng-hide="(customer.Catagary == '')">
																			<select ng-model="customer.SubCatagary"
																				ng-options="x.Id as x.subcatagary for x in subcatagaries"
																				class="form-control" ng-required="true"
																				id="subcatagary"
																				data-selectsplitter-secondselect-selector=""
																				size="8" required></select>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab3">3</div>
												<div class="tab-pane" id="tab4">4</div>
											</div>
										</div>
										<div class="form-actions">
											<div class="row">
												<div class="col-md-offset-3 col-md-9">
													<a href="javascript:;" class="btn default button-previous">
														<i class="fa fa-angle-left"></i> Back </a> <a
														href="javascript:;"
														class="btn btn-outline green button-next"> Continue <i
														class="fa fa-angle-right"></i> </a> <a href="javascript:;"
														class="btn green button-submit"> Submit <i
														class="fa fa-check"></i> </a>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE BASE CONTENT -->
			</div>
			<!-- END CONTENT BODY -->
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<a href="javascript:;" class="page-quick-sidebar-toggler"> <i
			class="icon-login"></i> </a>
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	@include("dashboard.footer")
	<!-- END FOOTER -->
	<!-- BEGIN QUICK NAV -->
	<div class="quick-nav-overlay"></div>
	<!-- END QUICK NAV -->
	<!--[if lt IE 9]>
            <script src="../assets/global/plugins/respond.min.js"></script>
            <script src="../assets/global/plugins/excanvas.min.js"></script> 
            <script src="../assets/global/plugins/ie8.fix.min.js"></script> 
            <![endif]-->
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
		src="<?= asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') ?>"
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
	<script src="<?= asset('assets/pages/scripts/form-wizard.min.js') ?>"
		type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script
		src="<?= asset('app/controllers/dashboard/add-retail-product.js') ?>"
		type="text/javascript"></script>
</body>
</html>
