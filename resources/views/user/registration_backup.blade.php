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
					<li><a href="index.html">Home </a> <i class="fa fa-circle"></i>
					</li>
					<li><span class="active">Business Registration </span>
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
													class="desc"> <i class="fa fa-check"></i> Supporting Area </span>
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
														ng-class="regform.companyName.$dirty ? (regform.companyName.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Business/Company
															Name <span class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control" focus-element
																name="companyName" ng-model="bussReg.save.companyName"
																ng-minlength="3" ng-maxlength="128" required /> <span
																ng-show="regform.companyName.$error.required || regform.companyName.$valid"
																class="help-block"> Provide your Business/Company name </span>
															<span ng-show="regform.companyName.$error.minlength"
																class="help-block"> Business/Company name have minimum 3
																characters</span> <span
																ng-show="regform.companyName.$error.maxlength"
																class="help-block"> Business/Company name have maximum
																128 characters</span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regform.personName.$dirty ? (regform.personName.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Person Name <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="personName"
																ng-model="bussReg.save.personName" ng-minlength="3"
																ng-maxlength="50" required /> <span
																ng-show="regform.personName.$error.required || regform.personName.$valid"
																class="help-block"> Provide your Person Name </span> <span
																ng-show="regform.personName.$error.minlength"
																class="help-block"> Person Name have minimum 3
																characters</span> <span
																ng-show="regform.personName.$error.maxlength"
																class="help-block"> Person Name have maximum 50
																characters</span>
														</div>
													</div>
													<div class="form-group"
														ng-class="regform.personalMobileNum.$dirty ? (regform.personalMobileNum.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Personal Mobile
															Number <span class="required"> * </span> </label>
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
														<label class="control-label col-md-3">Personal Email ID </label>
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
													<div class="form-group"
														ng-class="regform.compLogo.$dirty ? (bussReg.save.compLogo ? 'has-success' : '') : ''">
														<label class="control-label col-md-3">Company Logo </label>
														<div class="col-md-4">
															<label for="exampleInputFile1">File input</label> <input
																type="file" name="compLogo"
																ng-model="bussReg.save.compLogo" app-filereader> <span
																class="help-block">Provide your company logo </span>
														</div>
													</div>

													<div class="form-actions">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="button"
																	ng-disabled="!(regform.companyName.$valid && regform.personName.$valid && regform.personalMobileNum.$valid && regform.personalEmailId.$valid && regform.accPwd.$valid && regform.confirmPwd.$valid && bussReg.save.confirmPwd == bussReg.save.accPwd)"
																	ng-click="navTab(2)" class="btn btn-info">Continue</button>
															</div>
														</div>
													</div>
												</form>
											</div>

											<div class="tab-pane" id="tab2"
												ng-show="bussReg.currentTap === 2">
												<form class="form-horizontal" name="regComform" action="#"
													id="submit_form" method="POST">
													<h3 class="block">Provide your communication details</h3>
													<div class="form-group"
														ng-class="regComform.comMobNo.$dirty ? (regComform.comMobNo.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Mobile Number <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="comMobNo"
																ng-model="bussReg.save.comMobNo"
																ng-pattern="bussReg.mobPatteern" required /> <span
																ng-show="regComform.comMobNo.$error.pattern"
																class="help-block"> Invalid mobile number </span> <span
																ng-show="regComform.comMobNo.$error.required || regComform.comMobNo.$valid"
																class="help-block"> Provide your communication Mobile
																Number </span>

															<div
																ng-class="regComform.comAnotherMobNo[[obj]].$dirty ? (regComform.comAnotherMobNo[[obj]].$valid ? 'has-success' : 'has-error') : ''"
																ng-repeat="obj in bussReg.comOtherMob"
																class="mt-repeater">
																<div class="mt-repeater-cell">
																	<input type="text"
																		class="form-control mt-repeater-input-inline"
																		name="comAnotherMobNo[[obj]]"
																		ng-model="bussReg.save.comOtherMobNo[obj]"
																		ng-pattern="bussReg.mobPatteern"> <a
																		href="javascript:;" data-repeater-delete
																		ng-click="delAnotherMob(obj)"
																		class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline">
																		<span class="glyphicon glyphicon-remove"></span> </a>
																</div>
																<span ng-show="regComform.comAnotherMobNo[[obj]].$valid"
																	class="help-block"> Provide your another Mobile Number
																	[[$index+1]]</span> <span
																	ng-show="regComform.comAnotherMobNo[[obj]].$error.pattern"
																	class="help-block"> Invalid Mobile Number [[$index+1]]</span>
															</div>
														</div>
														<div class="col-md-4">
															<button type="button"
																ng-disabled="bussReg.comOtherMob.length > 2"
																ng-click="addAnotherMob()" class="btn btn-success">
																<span class="glyphicon glyphicon-plus"></span> Add new
																mobile number
															</button>
														</div>
													</div>

													<div class="form-group"
														ng-class="regComform.comLLNo.$dirty ? (regComform.comLLNo.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Landline Number </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="comLLNo"
																ng-model="bussReg.save.comLLNo"
																ng-pattern="bussReg.landLinePatteern" /> <span
																ng-show="regComform.comLLNo.$error.pattern"
																class="help-block"> Invalid Landline number </span> <span
																ng-show="regComform.comLLNo.$valid" class="help-block">
																Provide your communication Landline Number </span>

															<div
																ng-class="regComform.comAnotherLLNo[[obj]].$dirty ? (regComform.comAnotherLLNo[[obj]].$valid ? 'has-success' : 'has-error') : ''"
																ng-repeat="obj in bussReg.comOtherLL"
																class="mt-repeater">
																<div class="mt-repeater-cell">
																	<input type="text"
																		class="form-control mt-repeater-input-inline"
																		name="comAnotherLLNo[[obj]]"
																		ng-model="bussReg.save.comAnotherLLNo[obj]"
																		ng-pattern="bussReg.landLinePatteern"> <a
																		href="javascript:;" data-repeater-delete
																		ng-click="delAnotherLL(obj)"
																		class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline">
																		<span class="glyphicon glyphicon-remove"></span> </a>
																</div>
																<span ng-show="regComform.comAnotherLLNo[[obj]].$valid"
																	class="help-block"> Provide your another Landline
																	Number [[$index+1]]</span> <span
																	ng-show="regComform.comAnotherLLNo[[obj]].$error.pattern"
																	class="help-block"> Invalid Landline Number
																	[[$index+1]]</span>
															</div>
														</div>
														<div class="col-md-4">
															<button type="button"
																ng-disabled="bussReg.comOtherLL.length > 1"
																ng-click="addAnotherLL()" class="btn btn-success">
																<span class="glyphicon glyphicon-plus"></span> Add new
																landline number
															</button>
														</div>
													</div>


													<div class="form-group"
														ng-class="regComform.comEmailId.$dirty ? (regComform.comEmailId.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Mail ID </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="comEmailId"
																ng-model="bussReg.save.comEmailId"
																ng-pattern="bussReg.emailPatteern" /> <span
																ng-show="regComform.comEmailId.$error.pattern"
																class="help-block"> Invalid Landline number </span> <span
																ng-show="regComform.comEmailId.$valid"
																class="help-block"> Provide your communication Mail ID </span>

															<div
																ng-class="regComform.comAnotherEmailId[[obj]].$dirty ? (regComform.comAnotherEmailId[[obj]].$valid ? 'has-success' : 'has-error') : ''"
																ng-repeat="obj in bussReg.comOtherEmail"
																class="mt-repeater">
																<div class="mt-repeater-cell">
																	<input type="text"
																		class="form-control mt-repeater-input-inline"
																		name="comAnotherEmailId[[obj]]"
																		ng-model="bussReg.save.comAnotherEmailId[obj]"
																		ng-pattern="bussReg.emailPatteern"> <a
																		href="javascript:;" data-repeater-delete
																		ng-click="delAnotherEmail(obj)"
																		class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline">
																		<span class="glyphicon glyphicon-remove"></span> </a>
																</div>
																<span
																	ng-show="regComform.comAnotherEmailId[[obj]].$valid"
																	class="help-block"> Provide your another Mail ID
																	[[$index+1]]</span> <span
																	ng-show="regComform.comAnotherEmailId[[obj]].$error.pattern"
																	class="help-block"> Invalid Mail ID [[$index+1]]</span>
															</div>
														</div>
														<div class="col-md-4">
															<button type="button"
																ng-disabled="bussReg.comOtherEmail.length > 1"
																ng-click="addAnotherEmail()" class="btn btn-success">
																<span class="glyphicon glyphicon-plus"></span> Add new
																email id
															</button>
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

													<h3 class="block">Provide your business address</h3>
													<div class="form-group"
														ng-class="regComform.addressNo.$dirty ? (regComform.addressNo.$valid ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Number/Name <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="addressNo"
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
															<input type="text" class="form-control" name="addr1"
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
															<input type="text" class="form-control" name="addr2"
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
														ng-class="(regComform.countyTxt.$dirty) ? ((regComform.countyTxt.$valid) ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">County </label>
														<div class="col-md-4">
															<select id="county" class="form-control select2"
																ng-change="getCityList()"
																data-placeholder="Select a county" name="countyId"
																ng-options="obj.id as obj.name for obj in bussReg.getStateList"
																ng-model="bussReg.save.countyId">
																<option></option>
															</select> <span ng-if="bussReg.showCountryTxt"
																class="help-block">&nbsp</span> <input type="text"
																ng-if="bussReg.showCountryTxt" class="form-control"
																name="countyTxt" ng-model="bussReg.save.countyuserVal"
																required ng-minlength="3" ng-maxlength="50" /> <span
																ng-show="(regComform.countyTxt.$error.required || regComform.countyTxt.$valid)"
																class="help-block"> Provide your County </span> <span
																ng-show="regComform.countyTxt.$error.minlength"
																class="help-block"> County have minimum 3 characters</span>
															<span ng-show="regComform.countyTxt.$error.maxlength"
																class="help-block"> County have maximum 50 characters</span>
														</div>
														<div class="col-md-4">
															<button type="button"
																ng-click="bussReg.save.countyuserVal='';bussReg.showCountryTxt = !bussReg.showCountryTxt"
																class="btn btn-success">
																<span class="glyphicon glyphicon-plus"></span>
																[[bussReg.showCountryTxt ? "Hide" : "Add"]] new county
															</button>
														</div>
													</div>

													<div class="form-group"
														ng-class="(regComform.city.$dirty || regComform.cityTxt.$dirty) ? ((regComform.city.$valid || regComform.cityTxt.$valid) ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">Town/City <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<select id="city" class="form-control select2"
																ng-change="getPostCodeList()"
																data-placeholder="Select a city" name="city"
																ng-options="obj.id as obj.name for obj in bussReg.getCityList"
																ng-required="!bussReg.showCityTxt"
																ng-model="bussReg.save.city">
																<option></option>
															</select> <span
																ng-show="(regComform.city.$error.required || regComform.city.$valid)"
																class="help-block"> Provide your Town/City </span> <input
																type="text" ng-if="bussReg.showCityTxt"
																class="form-control" name="cityTxt"
																ng-model="bussReg.save.cityuserVal" required
																ng-minlength="3" ng-maxlength="50" /> <span
																ng-show="(regComform.cityTxt.$error.required || regComform.cityTxt.$valid)"
																class="help-block"> Provide your Town/City </span> <span
																ng-show="regComform.cityTxt.$error.minlength"
																class="help-block"> Town/City have minimum 3 characters</span>
															<span ng-show="regComform.cityTxt.$error.maxlength"
																class="help-block"> Town/City have maximum 50 characters</span>
														</div>
														<div class="col-md-4">
															<button type="button"
																ng-click="bussReg.save.cityuserVal='';bussReg.showCityTxt = !bussReg.showCityTxt"
																class="btn btn-success">
																<span class="glyphicon glyphicon-plus"></span>
																[[bussReg.showCityTxt ? "Hide" : "Add"]] new city
															</button>
														</div>
													</div>


													<div class="form-group"
														ng-class="(regComform.postCode.$dirty || regComform.postCodeTxt.$dirty) ? ((regComform.postCode.$valid || regComform.postCodeTxt.$valid) ? 'has-success' : 'has-error') : ''">
														<label class="control-label col-md-3">PostCode <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<select id="post-code" class="form-control select2"
																data-placeholder="Select a postCode" name="postCode"
																ng-options="obj.id as obj.postal_code for obj in bussReg.getPostCodeList"
																ng-required="!bussReg.showPostCodeTxt"
																ng-model="bussReg.save.postCode">
																<option></option>
															</select> <span
																ng-show="(regComform.postCode.$error.required || regComform.postCode.$valid)"
																class="help-block"> Provide your PostCode </span> <input
																type="text" ng-if="bussReg.showPostCodeTxt"
																class="form-control" name="postCodeTxt"
																ng-model="bussReg.save.postCodeuserVal" required
																ng-minlength="6" ng-maxlength="10" /> <span
																ng-show="(regComform.postCodeTxt.$error.required || regComform.postCodeTxt.$valid)"
																class="help-block"> Provide your PostCode </span> <span
																ng-show="regComform.postCodeTxt.$error.minlength"
																class="help-block"> PostCode have minimum 6 characters</span>
															<span ng-show="regComform.postCodeTxt.$error.maxlength"
																class="help-block"> PostCode have maximum 10 characters</span>
														</div>
														<div class="col-md-4">
															<button type="button"
																ng-click="bussReg.save.postCodeuserVal='';bussReg.showPostCodeTxt = !bussReg.showPostCodeTxt"
																class="btn btn-success">
																<span class="glyphicon glyphicon-plus"></span>
																[[bussReg.showPostCodeTxt ? "Hide" : "Add"]] new
																postCodeTxt
															</button>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-3">Latitude </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																ng-readonly="true" id="latitude"
																ng-model="bussReg.save.latitude" />
														</div>
													</div>

													<div class="form-group">
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




											<div class="tab-pane" id="tab3">
												<h3 class="block">Provide your billing and credit card
													details</h3>

											</div>
											<div class="tab-pane" id="tab4">
												<h3 class="block">Confirm your account</h3>

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
