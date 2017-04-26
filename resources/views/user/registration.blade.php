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
	<!-- BEGIN HEADER -->
	<div class="page-header navbar navbar-fixed-top">
		<!-- BEGIN HEADER INNER -->
		<div class="page-header-inner ">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="index.html"> <img
					src="<?= asset('assets/layouts/layout4/img/logo-light.png') ?>"
					alt="logo" class="logo-default" /> </a>
				<div class="menu-toggler sidebar-toggler">
					<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
				</div>
			</div>
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
						<!-- BEGIN NOTIFICATION DROPDOWN -->
						<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
						<!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
						<!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
						<!-- END INBOX DROPDOWN -->
						<li class="separator hide"></li>
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
						<li class="dropdown dropdown-user dropdown-dark"><a
							href="javascript:;" class="dropdown-toggle"
							data-toggle="dropdown" data-hover="dropdown"
							data-close-others="true"> <span
								class="username username-hide-on-mobile"> Nick </span> <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
								<img alt="" class="img-circle"
								src="<?= asset('assets/layouts/layout4/img/avatar9.jpg') ?>" />
						</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li><a href="page_user_profile_1.html"> <i class="icon-user"></i>
										My Profile </a>
								</li>
								<li><a href="page_user_login_1.html"> <i class="icon-key"></i>
										Log Out </a>
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
	<!-- BEGIN HEADER & CONTENT DIVIDER -->
	<div class="clearfix"></div>
	<!-- END HEADER & CONTENT DIVIDER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN CONTENT -->
		<div>
			<!-- BEGIN CONTENT BODY -->
			<div class="page-content">
				<!-- BEGIN PAGE BREADCRUMB -->
				<ul class="page-breadcrumb breadcrumb">
					<li><a href="index.html">Home</a> <i class="fa fa-circle"></i>
					</li>
					<li><span class="active">Business Registration</span>
					</li>
				</ul>
				<!-- END PAGE BREADCRUMB -->
				<!-- BEGIN PAGE BASE CONTENT -->
				<div class="row">
					<div class="col-md-12">
						<div class="m-heading-1 border-green m-bordered">
							<h3>Business Registration</h3>
							<p>Description about business registration.</p>
						</div>
						<div class="m-heading-1 border-red m-bordered note note-danger"
							id="errorMsg" ng-show="delErrorMsg">
							<h3>Error</h3>
							<p ng-bind="responseMsg"></p>
						</div>
						<div class="portlet light bordered" id="form_wizard_1">
							<div class="portlet-title">
								<div class="caption">
									<i class=" icon-layers font-red"></i> <span
										class="caption-subject font-red bold uppercase"> Business
										Registration - <span class="step-title"> Step 1 of 4 </span> </span>
								</div>
							</div>

							<div class="portlet-body form">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li><a class="step"> <span class="number"> 1 </span> <span
													class="desc"> <i class="fa fa-check"></i> Personal Details
												</span> </a>
											</li>
											<li><a class="step"> <span class="number"> 2 </span> <span
													class="desc"> <i class="fa fa-check"></i> Communication
														Details </span> </a>
											</li>
											<li><a class="step"> <span class="number"> 3 </span> <span
													class="desc"> <i class="fa fa-check"></i> Business
														Classification </span> </a>
											</li>
											<li><a class="step"> <span class="number"> 4 </span> <span
													class="desc"> <i class="fa fa-check"></i> Finished </span>
											</a>
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
												Your records inserted successfully!
											</div>
											<div class="tab-pane" id="tab1"
												ng-show="bussReg.currentTap === 1">
												<form class="form-horizontal" name="regform" action="#"
													id="submit_form" method="POST">
													<h3 class="block">Provide your personal details</h3>
													<div class="form-group"
														ng-class="regform.personName.$dirty ? (regform.personName.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Person Name <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="personName"
																ng-model="bussReg.save.personName" ng-minlength="2"
																ng-maxlength="128" required /> <span
																ng-show="regform.personName.$error.required || regform.personName.$valid"
																class="help-block"> Provide your Person Name </span> <span
																ng-show="regform.personName.$error.minlength"
																class="help-block"> Person Name have minimum 2
																characters</span> <span
																ng-show="regform.personName.$error.maxlength"
																class="help-block"> Person Name have maximum 128
																characters</span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regform.personalMobileNum.$dirty ? (regform.personalMobileNum.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Mobile Number <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																name="personalMobileNum"
																ng-model="bussReg.save.personalMobileNum"
																ng-pattern="bussReg.mobPatteern" required /> <span
																ng-show="regform.personalMobileNum.$error.required || regform.personalMobileNum.$valid"
																class="help-block"> Provide your personal mobile number
															</span> <span
																ng-show="regform.personalMobileNum.$error.pattern"
																class="help-block"> Invalid mobile number </span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regform.personalEmailId.$dirty ? (regform.personalEmailId.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Email ID </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																name="personalEmailId"
																ng-model="bussReg.save.personalEmailId"
																ng-pattern="bussReg.emailPatteern" ng-maxlength="64" />
															<span ng-show="regform.personalEmailId.$valid"
																class="help-block"> Provide your personal email id
																address </span> <span
																ng-show="regform.personalEmailId.$error.pattern"
																class="help-block"> Invalid email id </span> <span
																ng-show="regform.personalEmailId.$error.maxlength"
																class="help-block"> Email ID have maximum 64 characters</span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regform.accPwd.$dirty ? (regform.accPwd.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Account Password <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="password" class="form-control" name="accPwd"
																ng-model="bussReg.save.accPwd" ng-minlength="6"
																ng-maxlength="12" required /> <span
																ng-show="regform.accPwd.$error.required"
																class="help-block"> Provide your account password </span>
															<span ng-show="regform.accPwd.$error.minlength"
																class="help-block"> Password have minimum 6 characters</span>
															<span ng-show="regform.accPwd.$error.maxlength"
																class="help-block"> Password have maximum 12 characters</span>
															<span ng-show="regform.accPwd.$valid" class="help-block"
																ng-bind="scorePassword(bussReg.save.accPwd)"> </span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regform.confirmPwd.$dirty ? (regform.confirmPwd.$valid && bussReg.save.confirmPwd == bussReg.save.accPwd ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Confirm Password <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="password" class="form-control"
																name="confirmPwd" ng-model="bussReg.save.confirmPwd"
																required /> <span
																ng-show="regform.confirmPwd.$error.required || (regform.confirmPwd.$valid && bussReg.save.confirmPwd == bussReg.save.accPwd)"
																class="help-block"> Provide your confirm password </span>
															<span
																ng-show="regform.confirmPwd.$valid && bussReg.save.confirmPwd != bussReg.save.accPwd"
																class="help-block"> Password and confirm password must
																be same</span>
														</div>
													</div>
													<div class="form-actions">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="button"
																	ng-disabled="!(regform.personName.$valid && regform.personalMobileNum.$valid && regform.personalEmailId.$valid && regform.accPwd.$valid && regform.confirmPwd.$valid && bussReg.save.confirmPwd == bussReg.save.accPwd)"
																	ng-click="navTab(2)" class="btn btn-info">Continue</button>
															</div>
														</div>
													</div>
												</form>
											</div>

											<div class="tab-pane" id="tab2"
												ng-show="bussReg.currentTap === 2">
												<form class="form-horizontal" enctype="multipart/form-data"
													name="regComform" action="#" id="submit_form2"
													method="POST">
													<h3 class="block">Provide your communication details</h3>
													<div class="form-group"
														ng-class="regComform.companyName.$dirty ? (regComform.companyName.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Business/Company
															Name <span class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																name="companyName" ng-model="bussReg.save.companyName"
																ng-minlength="3" ng-maxlength="128" required /> <span
																ng-show="regComform.companyName.$error.required || regComform.companyName.$valid"
																class="help-block"> Provide your Business/Company name </span>
															<span ng-show="regComform.companyName.$error.minlength"
																class="help-block"> Business/Company name have minimum 3
																characters</span> <span
																ng-show="regComform.companyName.$error.maxlength"
																class="help-block"> Business/Company name have maximum
																128 characters</span>
														</div>
													</div>

													<div class="form-group"
														ng-class="regComform.comWebsite.$dirty ? (regComform.comWebsite.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Website </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="comWebsite"
																ng-model="bussReg.save.comWebsite"
																ng-pattern="bussReg.urlPatteern" ng-maxlength="128" /> <span
																ng-show="regComform.comWebsite.$valid"
																class="help-block"> Provide your company website </span>
															<span ng-show="regComform.comWebsite.$error.pattern"
																class="help-block"> Invalid website </span> <span
																ng-show="regComform.comWebsite.$error.maxlength"
																class="help-block"> website have maximum 128 characters</span>
														</div>
													</div>

													<!-- <div class="form-group" ng-class="regComform.compLogo_1.$dirty ? (bussReg.save.compLogo_1 ? 'has-success' : '') : ''">
                                                            <label class="control-label col-md-3">Company Logo
                                                            </label>
                                                            <div class="col-md-4">
															<label for="exampleInputFile1">File input</label>
															<input type="file" name="compLogo" ng-model="bussReg.save.compLogo">
															<span class="help-block">Provide your company logo </span>
															</div>
                                                        </div>	-->

													<div class="form-group"
														ng-class="regComform.postalCode.$dirty ? (regComform.postalCode.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Postal Code <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="postalCode"
																ng-model="bussReg.save.postalCode" ng-minlength="1"
																ng-maxlength="10" required
																ng-blur="codeAddress();showGoogleMap()" /> <span
																ng-show="regComform.postalCode.$error.required || regComform.postalCode.$valid"
																class="help-block"> Provide your Postal Code </span> <span
																ng-show="regComform.postalCode.$error.minlength"
																class="help-block"> Postal Code have minimum 1
																characters</span> <span
																ng-show="regComform.postalCode.$error.maxlength"
																class="help-block"> Postal Code have maximum 10
																characters</span>
														</div>
													</div>

													<h3 class="block">Provide your business address</h3>
													<div class="form-group"
														ng-class="regComform.addressNo.$dirty ? (regComform.addressNo.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Number/Name <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																ng-blur="showGoogleMap()" name="addressNo"
																ng-model="bussReg.save.addressNo" ng-minlength="3"
																ng-maxlength="128" required /> <span
																ng-show="regComform.addressNo.$error.required || regComform.addressNo.$valid"
																class="help-block"> Provide your Number/Name </span> <span
																ng-show="regComform.addressNo.$error.minlength"
																class="help-block"> Number/Name have minimum 3
																characters</span> <span
																ng-show="regComform.addressNo.$error.maxlength"
																class="help-block"> Number/Name name have maximum 128
																characters</span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regComform.addr1.$dirty ? (regComform.addr1.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Address Line 1 <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																ng-blur="showGoogleMap()" name="addr1"
																ng-model="bussReg.save.addr1" ng-minlength="3"
																ng-maxlength="128" required /> <span
																ng-show="regComform.addr1.$error.required || regComform.addr1.$valid"
																class="help-block"> Provide your Address Line 1 </span>
															<span ng-show="regComform.addr1.$error.minlength"
																class="help-block"> Address Line 1 have minimum 3
																characters</span> <span
																ng-show="regComform.addr1.$error.maxlength"
																class="help-block"> Address Line 1 have maximum 128
																characters</span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regComform.addr2.$dirty ? (regComform.addr2.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Address Line 2 </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																ng-blur="showGoogleMap()" name="addr2"
																ng-model="bussReg.save.addr2" ng-minlength="3"
																ng-maxlength="128" /> <span
																ng-show="regComform.addr2.$valid" class="help-block">
																Provide your Address Line 1 </span> <span
																ng-show="regComform.addr2.$error.minlength"
																class="help-block"> Address Line 2 have minimum 3
																characters</span> <span
																ng-show="regComform.addr2.$error.maxlength"
																class="help-block"> Address Line 2 have maximum 128
																characters</span>
														</div>
													</div>




													<div class="form-group"
														ng-class="regComform.city.$dirty ? (regComform.city.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">City <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																ng-blur="showGoogleMap()" name="city"
																ng-model="bussReg.save.city" ng-minlength="3"
																ng-maxlength="64" required /> <span
																ng-show="regComform.city.$error.required || regComform.city.$valid"
																class="help-block"> Provide your City </span> <span
																ng-show="regComform.city.$error.minlength"
																class="help-block"> City have minimum 3 characters</span>
															<span ng-show="regComform.city.$error.maxlength"
																class="help-block"> City have maximum 64 characters</span>
														</div>
													</div>

													<div class="form-group"
														ng-class="regComform.county.$dirty ? (regComform.county.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">County <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																ng-blur="showGoogleMap()" name="county"
																ng-model="bussReg.save.county" ng-minlength="3"
																ng-maxlength="64" required /> <span
																ng-show="regComform.county.$error.required || regComform.county.$valid"
																class="help-block"> Provide your County </span> <span
																ng-show="regComform.county.$error.minlength"
																class="help-block"> County have minimum 3 characters</span>
															<span ng-show="regComform.county.$error.maxlength"
																class="help-block"> County have maximum 64 characters</span>
														</div>
													</div>


													<div class="form-group" ng-show="false">
														<label class="control-label col-md-3">Latitude </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																ng-readonly="true" id="latitude"
																ng-model="bussReg.save.latitude" />
														</div>
													</div>

													<div class="form-group" ng-show="false">
														<label class="control-label col-md-3">Longitude </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																ng-readonly="true" id="longitude"
																ng-model="bussReg.save.longitude" />
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-3"></label>
														<div class="col-md-9">
															<div id="map"></div>
														</div>
													</div>


													<div class="form-actions">
														<!-- Hi : [[!regComform.$error.required]], [[!regComform.$error.pattern]], [[!regComform.$error.maxlength]], [[!regComform.$error.minlength]] -->
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="button" ng-click="navTab(1)"
																	class="btn btn-info">Back</button>
																<button type="button" ng-click="navTab(3)"
																	ng-disabled="!(!regComform.$error.required && !regComform.$error.pattern && !regComform.$error.maxlength && !regComform.$error.minlength)"
																	class="btn btn-info">Continue</button>
															</div>
														</div>
													</div>
												</form>
											</div>




											<div class="tab-pane" id="tab3"
												ng-show="bussReg.currentTap === 3">
												<h3 class="block">Provide your bussiness classification</h3>
												<form class="form-horizontal" name="regClassform" action="#"
													id="submit_form" method="POST">
													<meta name="csrf-token" content="{{ csrf_token() }}">
													<div class="form-group"
														ng-class="(regClassform.bussModel.$valid ? 'has-success' : 'has-error')">
														<label class="control-label col-md-3">Bussiness Model <span
															class="required"> * </span> </label>
														<div class="col-md-8">
															<div class="mt-checkbox-inline">
																<label class="mt-checkbox"
																	ng-repeat="obj in bussReg.getBussinessModelList"> <input
																	name="bussModel"
																	ng-required="!someSelected(bussReg.save.bussModel)"
																	ng-model="bussReg.save.bussModel[obj.id+';'+obj.name+';'+obj.tbl_name]"
																	type="checkbox" id="inlineCheckbox1" value="obj.id">
																	[[obj.name]] <span></span> </label>
															</div>
															<span
																ng-show="regClassform.bussModel.$error.required || regClassform.bussModel.$valid"
																class="help-block"> Select your Bussiness Model</span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regClassform.title.$dirty ? (regClassform.title.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Business Title <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="title"
																ng-model="bussReg.save.title" ng-minlength="6"
																ng-maxlength="256" required /> <span
																ng-show="regClassform.title.$error.required || regClassform.title.$valid"
																class="help-block"> Provide your Business Title </span>
															<span ng-show="regClassform.title.$error.minlength"
																class="help-block"> Title have minimum 6 characters</span>
															<span ng-show="regClassform.title.$error.maxlength"
																class="help-block"> Title have maximum 256 characters</span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regClassform.classifcation.$dirty ? (regClassform.classifcation.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Classification <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																name="classifcation"
																ng-model="bussReg.save.classifcation" ng-minlength="6"
																ng-maxlength="256" required /> <span
																ng-show="regClassform.classifcation.$error.required || regClassform.classifcation.$valid"
																class="help-block"> Provide your Classifcation </span> <span
																ng-show="regClassform.classifcation.$error.minlength"
																class="help-block"> Classifcation have minimum 6
																characters</span> <span
																ng-show="regClassform.classifcation.$error.maxlength"
																class="help-block"> Classifcation have maximum 256
																characters</span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regClassform.description.$dirty ? (regClassform.description.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Description <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<textarea type="text" class="form-control"
																name="description" ng-model="bussReg.save.description"
																ng-minlength="6" ng-maxlength="1024" required></textarea>
															<span
																ng-show="regClassform.description.$error.required || regClassform.description.$valid"
																class="help-block"> Provide your Description </span> <span
																ng-show="regClassform.description.$error.minlength"
																class="help-block"> Description have minimum 6
																characters</span> <span
																ng-show="regClassform.description.$error.maxlength"
																class="help-block"> Description have maximum 1024
																characters</span>
														</div>
													</div>


													<div class="form-actions">
														<!-- Hi : [[!regClassform.$error.required]], [[!regClassform.$error.pattern]], [[!regClassform.$error.maxlength]], [[!regClassform.$error.minlength]] -->
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="button" ng-click="navTab(2)"
																	class="btn btn-info">Back</button>
																<button type="button" ng-click="saveRegistration()"
																	ng-disabled="!(!regClassform.$error.required  && !regClassform.$error.maxlength && !regClassform.$error.minlength)"
																	class="btn btn-info">Submit</button>
															</div>
														</div>
													</div>
												</form>
											</div>


											<div class="tab-pane" id="tab4"
												ng-show="bussReg.currentTap === 4">
												<h3 class="block">Finished</h3>
												<div class="portlet-body">
													<div class="note note-success">
														<h4 class="block">Successfully Registered</h4>
														<p>
															Thanks for your contribution, within <span id="sec">5</span>
															sec automatically navigate to Dashoboad page
															<button type="button" ng-click="goToDashboard()"
																class="btn btn-info">Goto My Dashboard</button>
															.
														</p>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE BASE CONTENT -->
			</div>
			<!-- END CONTENT BODY -->
		</div>
		<!-- END CONTENT -->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">2017 &copy; Gril</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->

	<div class="quick-nav-overlay"></div>
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
	<script src="<?= asset('app/app.js') ?>"></script>
	<script src="<?= asset('js/common.js') ?>"></script>
	<script src="<?= asset('app/controllers/business-regisration.js') ?>"></script>
</body>

</html>
