<?php echo $__env->make("dashboard.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
;
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div
	class="page-container" ng-controller="stateCtrl">
	<?php echo $__env->make("dashboard.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	;
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" style="min-height: 425px;">
			<!-- BEGIN PAGE HEAD -->
			<!-- ngInclude: 'tpl/page-head.html' -->
			<div data-ng-include="'tpl/page-head.html'"
				data-ng-controller="PageHeadController" class="page-head ng-scope">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title ng-scope">
					<h1>
						<span data-ng-bind="$state.current.data.pageTitle"
							class="ng-binding">User Account</span> <small
							data-ng-bind="$state.current.data.pageSubTitle"
							class="ng-binding"></small>
					</h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN ACTUAL CONTENT -->
			<!-- uiView: -->
			<div ui-view="" class="fade-in-up ng-scope">
				<!-- BEGIN PAGE BREADCRUMB -->
				<ul class="page-breadcrumb breadcrumb ng-scope">
					<li><a ui-sref="dashboard" href="#/dashboard">Home</a> <i
						class="fa fa-circle"></i>
					</li>
					<li class="active">User Profile</li>
				</ul>
				<!-- END PAGE BREADCRUMB -->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row ng-scope" ng-controller="UserProfileController">
					<div class="col-md-12">
						<!-- BEGIN PROFILE SIDEBAR -->
						<div class="profile-sidebar">
							<!-- PORTLET MAIN -->
							<div class="portlet light profile-sidebar-portlet">
								<!-- SIDEBAR USERPIC -->
								<div class="profile-userpic">
									<img
										src="<?= asset('assets/pages/media/profile/profile_user.jpg') ?>"
										class="img-responsive" alt="">
								</div>
								<!-- END SIDEBAR USERPIC -->
								<!-- SIDEBAR USER TITLE -->
								<div class="profile-usertitle">
									<div class="profile-usertitle-name">Marcus Doe</div>
									<div class="profile-usertitle-job">Developer</div>
								</div>
								<!-- END SIDEBAR USER TITLE -->
								<!-- SIDEBAR BUTTONS -->
								<div class="profile-userbuttons">
									<button type="button" class="btn btn-circle green-haze btn-sm">Follow</button>
									<button type="button" class="btn btn-circle btn-danger btn-sm">Message</button>
								</div>
								<!-- END SIDEBAR BUTTONS -->
								<!-- SIDEBAR MENU -->
								<div class="profile-usermenu">
									<ul class="nav">
										<li ng-class="{active: $state.includes('profile.dashboard')}">
											<a ui-sref="profile.dashboard" href="#/profile/dashboard"> <i
												class="icon-home"></i> OverviewOverview </a>
										</li>
										<li ng-class="{active: $state.includes('profile.account')}"
											class="active"><a ui-sref="profile.account"
											href="#/profile/account"> <i class="icon-settings"></i>
												Account Settings </a>
										</li>
										<li><a href="#/todo"> <i class="icon-check"></i> Tasks </a>
										</li>
										<li ng-class="{active: $state.includes('profile.help')}"><a
											ui-sref="profile.help" href="#/profile/help"> <i
												class="icon-info"></i> Help </a>
										</li>
									</ul>
								</div>
								<!-- END MENU -->
							</div>
							<!-- END PORTLET MAIN -->
							<!-- PORTLET MAIN -->
							<div class="portlet light">
								<!-- STAT -->
								<div class="row list-separated profile-stat">
									<div class="col-md-4 col-sm-4 col-xs-6">
										<div class="uppercase profile-stat-title">37</div>
										<div class="uppercase profile-stat-text">Projects</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-6">
										<div class="uppercase profile-stat-title">51</div>
										<div class="uppercase profile-stat-text">Tasks</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-6">
										<div class="uppercase profile-stat-title">61</div>
										<div class="uppercase profile-stat-text">Uploads</div>
									</div>
								</div>
								<!-- END STAT -->
								<div>
									<h4 class="profile-desc-title">About Marcus Doe</h4>
									<span class="profile-desc-text"> Lorem ipsum dolor sit amet
										diam nonummy nibh dolore. </span>
									<div class="margin-top-20 profile-desc-link">
										<i class="fa fa-globe"></i> <a
											href="http://www.keenthemes.com">www.keenthemes.com</a>
									</div>
									<div class="margin-top-20 profile-desc-link">
										<i class="fa fa-twitter"></i> <a
											href="http://www.twitter.com/keenthemes/">@keenthemes</a>
									</div>
									<div class="margin-top-20 profile-desc-link">
										<i class="fa fa-facebook"></i> <a
											href="http://www.facebook.com/keenthemes/">keenthemes</a>
									</div>
								</div>
							</div>
							<!-- END PORTLET MAIN -->
						</div>
						<!-- END BEGIN PROFILE SIDEBAR -->
						<!-- BEGIN PROFILE CONTENT -->
						<!-- uiView: -->
						<div ui-view="" class="profile-content fade-in-up ng-scope">
							<div class="row ng-scope">
								<div class="col-md-12">
									<div class="portlet light">
										<div class="portlet-title tabbable-line">
											<div class="caption caption-md">
												<i class="icon-globe theme-font hide"></i> <span
													class="caption-subject font-blue-madison bold uppercase">Profile
													Account</span>
											</div>
											<ul class="nav nav-tabs">
												<li class="active"><a href="#" data-target="#tab_1_1"
													data-toggle="tab">Personal Info</a>
												</li>
												<li><a href="#" data-target="#tab_1_2" data-toggle="tab">Change
														Avatar</a>
												</li>
												<li><a href="#" data-target="#tab_1_3" data-toggle="tab">Change
														Password</a>
												</li>
												<li><a href="#" data-target="#tab_1_4" data-toggle="tab">Privacy
														Settings</a>
												</li>
											</ul>
										</div>
										<div class="portlet-body">

											<div class="tab-content">

												<!-- PERSONAL INFO TAB -->
												<div class="tab-pane active" id="tab_1_1">
													<div class="user-table">
														<table class="table table-user-information">
															<tbody>
																<tr>
																	<td>Personal Name:</td>
																	<td>Pradeep</td>
																</tr>
																<tr>
																	<td>Business Name:</td>
																	<td>Grril Services</td>
																</tr>
																<tr>
																	<td>Mobile Number</td>
																	<td>+91 999999</td>
																</tr>


																<tr>
																	<td>Mail id</td>
																	<td>grril@gmail.com</td>
																</tr>
																<tr>
																	<td>Website Url</td>
																	<td>http://www.mywebsite.com</td>
																</tr>
																<tr>
																	<td>Email</td>
																	<td><a href="mailto:info@support.com">info@support.com</a>
																	</td>
																</tr>
																<tr>
																	<td>Phone Number</td>
																	<td>123-4567-890(Landline)<br> <br>555-4567-890(Mobile)
																	</td>
																</tr>
															</tbody>
														</table>

														<a href="#" class="btn btn-primary"
															onclick="$('.user-form').fadeIn();$('.user-table').hide()">Edit</a>
													</div>
													<form role="form" action="#" style="display: none"
														class="user-form ng-pristine ng-valid">
														<div class="form-group">
															<label class="control-label">Personal Name</label> <input
																placeholder="Pradeep" class="form-control" type="text">
														</div>
														<div class="form-group">
															<label class="control-label">Business Name</label> <input
																placeholder="Grril Services" class="form-control"
																type="text">
														</div>
														<div class="form-group">
															<label class="control-label">Mobile Number</label> <input
																placeholder="+91 999999" class="form-control"
																type="text">
														</div>
														<div class="form-group">
															<label class="control-label">Mail id</label> <input
																placeholder="grril@gmail.com" class="form-control"
																type="text">
														</div>
														<div class="form-group">
															<label class="control-label">Mobile Num</label> <input
																placeholder="Web Developer" class="form-control"
																type="text">
														</div>
														<div class="form-group">
															<label class="control-label">Land Line</label>
															<textarea class="form-control" rows="3"
																placeholder="We are KeenThemes!!!"></textarea>
														</div>
														<div class="form-group">
															<label class="control-label">Website Url</label> <input
																placeholder="http://www.mywebsite.com"
																class="form-control" type="text">
														</div>
														<div class="margiv-top-10">
															<a href="#" class="btn green-haze"> Save Changes </a> <a
																href="#" class="btn default"
																onclick="$('.user-form').hide();$('.user-table').fadeIn()">
																Cancel </a>
														</div>
													</form>
												</div>
												<!-- END PERSONAL INFO TAB -->
												<!-- CHANGE AVATAR TAB -->
												<div class="tab-pane" id="tab_1_2">
													<p>Anim pariatur cliche reprehenderit, enim eiusmod high
														life accusamus terry richardson ad squid. 3 wolf moon
														officia aute, non cupidatat skateboard dolor brunch. Food
														truck quinoa nesciunt laborum eiusmod.</p>
													<form action="#" role="form" class="ng-pristine ng-valid">
														<div class="form-group">
															<div class="fileinput fileinput-new"
																data-provides="fileinput">
																<div class="fileinput-new thumbnail"
																	style="width: 200px; height: 150px;">
																	<img
																		src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
																		alt="">
																</div>
																<div
																	class="fileinput-preview fileinput-exists thumbnail"
																	style="max-width: 200px; max-height: 150px;"></div>
																<div>
																	<span class="btn default btn-file"> <span
																		class="fileinput-new"> Select image </span> <span
																		class="fileinput-exists"> Change </span> <input
																		name="..." type="file"> </span> <a href="#"
																		class="btn default fileinput-exists"
																		data-dismiss="fileinput"> Remove </a>
																</div>
															</div>
															<div class="clearfix margin-top-10">
																<span class="label label-danger">NOTE! </span> <span>Attached
																	image thumbnail is supported in Latest Firefox, Chrome,
																	Opera, Safari and Internet Explorer 10 only </span>
															</div>
														</div>
														<div class="margin-top-10">
															<a href="#" class="btn green-haze"> Submit </a> <a
																href="#" class="btn default"> Cancel </a>
														</div>
													</form>
												</div>
												<!-- END CHANGE AVATAR TAB -->
												<!-- CHANGE PASSWORD TAB -->
												<div class="tab-pane" id="tab_1_3">

													<div class="user-password-table">
														<table class="table table-user-information">
															<tbody>
																<tr>
																	<td>Password:</td>
																	<td>Last updated 2 days ago.</td>
																</tr>
															</tbody>
														</table>
														<a href="#" class="btn btn-primary"
															onclick="$('.user-password').fadeIn();$('.user-password-table').hide()">Edit</a>
													</div>

													<form action="#" class="user-password ng-pristine ng-valid"
														style="display: none">
														<div class="form-group">
															<label class="control-label">Current Password</label> <input
																class="form-control" type="password">
														</div>
														<div class="form-group">
															<label class="control-label">New Password</label> <input
																class="form-control" type="password">
														</div>
														<div class="form-group">
															<label class="control-label">Re-type New Password</label>
															<input class="form-control" type="password">
														</div>
														<div class="margin-top-10">
															<a href="#" class="btn green-haze"> Change Password </a>
															<a href="#" class="btn default"
																onclick="$('.user-password').hide();$('.user-password-table').fadeIn()">
																Cancel </a>
														</div>
													</form>
												</div>
												<!-- END CHANGE PASSWORD TAB -->
												<!-- PRIVACY SETTINGS TAB -->
												<div class="tab-pane" id="tab_1_4">
													<form action="#" class="ng-pristine ng-valid">
														<table class="table table-light table-hover">
															<tbody>
																<tr>
																	<td>Anim pariatur cliche reprehenderit, enim eiusmod
																		high life accusamus..</td>
																	<td><label class="uniform-inline"> <input
																			name="optionsRadios1" value="option1" type="radio">
																			Yes </label> <label class="uniform-inline"> <input
																			name="optionsRadios1" value="option2" checked=""
																			type="radio"> No </label>
																	</td>
																</tr>
																<tr>
																	<td>Enim eiusmod high life accusamus terry richardson
																		ad squid wolf moon</td>
																	<td><label class="uniform-inline"> <input value=""
																			type="checkbox"> Yes </label>
																	</td>
																</tr>
																<tr>
																	<td>Enim eiusmod high life accusamus terry richardson
																		ad squid wolf moon</td>
																	<td><label class="uniform-inline"> <input value=""
																			type="checkbox"> Yes </label>
																	</td>
																</tr>
																<tr>
																	<td>Enim eiusmod high life accusamus terry richardson
																		ad squid wolf moon</td>
																	<td><label class="uniform-inline"> <input value=""
																			type="checkbox"> Yes </label>
																	</td>
																</tr>
															</tbody>
														</table>
														<!--end profile-settings-->
														<div class="margin-top-10">
															<a href="#" class="btn green-haze"> Save Changes </a> <a
																href="#" class="btn default"> Cancel </a>
														</div>
													</form>
												</div>
												<!-- END PRIVACY SETTINGS TAB -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END PROFILE CONTENT -->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END ACTUAL CONTENT -->
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
	<?php echo $__env->make("dashboard.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<link
	href="<?= asset('assets/pages/css/profile.css') ?>" rel="stylesheet"
	type="text/css" />
<script
	src="<?= asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') ?>"></script>
<script
	src="<?= asset('assets/pages/scripts/profile.min.js') ?>"></script>
<script
	src="<?= asset('app/controllers/dashboard/DashboardController.js') ?>"></script>


</body>

</html>
