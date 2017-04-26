<?php echo $__env->make("dashboard.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container"
	ng-controller="serviceProfileCntrl">
	<?php echo $__env->make("dashboard.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" style="min-height: 476px;">

			<div ui-view="" class="fade-in-up ng-scope">
				<!-- BEGIN PAGE BREADCRUMB -->
				<ul class="page-breadcrumb breadcrumb ng-scope">
					<li><a ui-sref="dashboard" href="#/dashboard.html">Home</a> <i
						class="fa fa-circle"></i>
					</li>
					<li><a ui-sref="datatablesmanaged">Business List</a> <i
						class="fa fa-circle"></i>
					</li>
					<li><a ui-sref="datatablesmanaged">Service Business</a> <i
						class="fa fa-circle"></i>
					</li>
					<li class="active">Service Profile</li>
				</ul>
				<!-- END PAGE BREADCRUMB -->

				<!-- BEGIN MAIN CONTENT -->
				<div class="ng-scope">
					<!-- BEGIN DASHBOARD STATS -->
					<!-- END DASHBOARD STATS -->
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet box blue">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-gift"></i>My Service Business
									</div>
									<div class="tools">
										<a href="javascript:;" class="collapse" data-original-title=""
											title=""> </a>
									</div>
									<div class="actions">
										<a href="javascript:;" ng-click="myBussReg=true"
											class="btn btn-default btn-sm"> <i class="fa fa-edit"></i>
											Edit </a>
									</div>
								</div>
								<div class="portlet-body form">
									<!-- BEGIN FORM-->
									<div class="form-body">


										<form class="form-horizontal" name="userClassform1" action="#"
											id="submit_form" method="POST">
											<meta name="myBussReg-csrf-token"
												content="<?php echo e(csrf_token()); ?>">
											<input type="hidden" name="id"
												ng-init="serviceBuss[0].id = '<?php echo e(Crypt::encrypt($data[0]->id)); ?>'" />
											<div class="form-group"
												ng-class="userClassform1.title.$dirty ? (userClassform1.title.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4">Business Title <span
													class="required"> * </span> </label>
												<div class="col-md-8" ng-show="!myBussReg"
													ng-init="serviceBuss[0].title = '<?php echo e(!empty($data[0]) ? $data[0]->title : ''); ?>'"
													ng-bind="' : '+serviceBuss[0].title"></div>
												<div class="col-md-8" ng-show="myBussReg">
													<input type="text" class="form-control" name="title"
														ng-model="serviceBuss[0].title" ng-minlength="2"
														ng-maxlength="256" required /> <span
														ng-show="userClassform1.title.$error.required || userClassform1.title.$valid"
														class="help-block"> Provide your Business Title </span> <span
														ng-show="userClassform1.title.$error.minlength"
														class="help-block"> Title have minimum 6 characters</span>
													<span ng-show="userClassform1.title.$error.maxlength"
														class="help-block"> Title have maximum 256 characters</span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform1.classifcation.$dirty ? (userClassform1.classifcation.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4">Classification<span class="required">
														* </span> </label>
												<div class="col-md-8" ng-show="!myBussReg"
													ng-init="serviceBuss[0].clasification = '<?php echo e(!empty($data[0]) ? $data[0]->clasification : ''); ?>'"
													ng-bind="' : '+serviceBuss[0].clasification"></div>
												<div class="col-md-8" ng-show="myBussReg">
													<input type="text" class="form-control"
														name="classifcation"
														ng-model="serviceBuss[0].clasification" ng-minlength="6"
														ng-maxlength="256" required /> <span
														ng-show="userClassform1.classifcation.$error.required || userClassform1.classifcation.$valid"
														class="help-block"> Provide your Classifcation </span> <span
														ng-show="userClassform1.classifcation.$error.minlength"
														class="help-block"> Classifcation have minimum 6
														characters</span> <span
														ng-show="userClassform1.classifcation.$error.maxlength"
														class="help-block"> Classifcation have maximum 256
														characters</span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform1.description.$dirty ? (userClassform1.description.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4 left">Description <span
													class="required"> * </span> </label>
												<div class="col-md-8" ng-show="!myBussReg"
													ng-init="serviceBuss[0].description = '<?php echo e(!empty($data[0]) ? $data[0]->description : ''); ?>'"
													ng-bind="' : '+serviceBuss[0].description"></div>
												<div class="col-md-8" ng-show="myBussReg">
													<textarea type="text" class="form-control"
														name="description" ng-model="serviceBuss[0].description"
														ng-minlength="6" ng-maxlength="1024" required></textarea>
													<span
														ng-show="userClassform1.description.$error.required || userClassform1.description.$valid"
														class="help-block"> Provide your Description </span> <span
														ng-show="userClassform1.description.$error.minlength"
														class="help-block"> Description have minimum 6 characters</span>
													<span ng-show="userClassform1.description.$error.maxlength"
														class="help-block"> Description have maximum 1024
														characters</span>
												</div>
											</div>


											<div class="form-group" ng-show="myBussReg">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="button" ng-click="saveMyServiceBussReg()"
															ng-disabled="!(!userClassform1.$error.required  && !userClassform1.$error.maxlength && !userClassform1.$error.minlength)"
															class="btn btn-info">Save</button>
														<button type="button" ng-click="myBussReg=false"
															class="btn btn-info">Cancel</button>
													</div>
												</div>
											</div>
										</form>
									</div>
									<!-- END FORM-->
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
						<div class="col-md-6 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet box blue">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-gift"></i>My Service Business
									</div>
									<div class="tools">
										<a href="javascript:;" class="collapse" data-original-title=""
											title=""> </a>
									</div>
									<div class="actions">
										<a href="javascript:;" ng-click="myBussProfile=true"
											class="btn btn-default btn-sm"> <i class="fa fa-edit"></i>
											Edit </a>
									</div>
								</div>
								<div class="portlet-body form">
									<!-- BEGIN FORM-->
									<div class="form-body">
										<form class="form-horizontal" name="userClassform2" action="#"
											id="submit_form" method="POST">
											<meta name="myBussProfile-csrf-token"
												content="<?php echo e(csrf_token()); ?>">
											<input type="hidden" name="id"
												ng-init="serviceContactDtl[0].id = '<?php echo e(Crypt::encrypt($data[0]->id)); ?>'" />
											<div class="form-group"
												ng-class="userClassform2.mobile.$dirty ? (userClassform2.mobile.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4">Mobile<span class="required"> * </span>
												</label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].mobile = '<?php echo e(!empty($data[0]) ? $data[0]->mobile : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].mobile"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<input type="text" class="form-control" name="mobile"
														ng-model="serviceContactDtl[0].mobile"
														ng-pattern="contactDtl.mobPatteern" required /> <span
														ng-show="userClassform2.mobile.$error.required || userClassform2.mobile.$valid"
														class="help-block"> Provide your mobile Number </span> <span
														ng-show="userClassform2.mobile.$error.pattern"
														class="help-block"> Invalid Mobile number </span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform2.landline.$dirty ? (userClassform2.landline.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4">Land Line </label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].landline = '<?php echo e(!empty($data[0]) ? $data[0]->landline : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].landline"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<input type="text" class="form-control" name="landline"
														ng-model="serviceContactDtl[0].landline"
														ng-pattern="contactDtl.landLinePatteern" /> <span
														ng-show="userClassform2.landline.$error.required || userClassform2.landline.$valid"
														class="help-block"> Provide your land line number </span>
													<span ng-show="userClassform2.landline.$error.pattern"
														class="help-block"> Invalid land line number </span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform2.email.$dirty ? (userClassform2.email.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4">Mail Id </label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].email = '<?php echo e(!empty($data[0]) ? $data[0]->email : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].email"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<input type="text" class="form-control" name="email"
														ng-model="serviceContactDtl[0].email" ng-maxlength="128"
														ng-pattern="contactDtl.emailPatteern" /> <span
														ng-show="userClassform2.email.$error.required || userClassform2.email.$valid"
														class="help-block"> Provide your mail id </span> <span
														ng-show="userClassform2.email.$error.pattern"
														class="help-block"> Invalid mail id </span> <span
														ng-show="userClassform2.email.$error.maxlength"
														class="help-block"> Mail Id have maximum 128 characters</span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform2.website.$dirty ? (userClassform2.website.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4">Business Website</label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].website = '<?php echo e(!empty($data[0]) ? $data[0]->website : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].website"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<input type="text" class="form-control" name="website"
														ng-model="serviceContactDtl[0].website" ng-minlength="2"
														ng-maxlength="256" ng-pattern="contactDtl.urlPatteern" />
													<span
														ng-show="userClassform2.website.$error.required || userClassform2.website.$valid"
														class="help-block"> Provide your business website </span>
													<span ng-show="userClassform2.website.$error.minlength"
														class="help-block"> Business website have minimum 2
														characters</span> <span
														ng-show="userClassform2.website.$error.pattern"
														class="help-block"> Invalid business website </span> <span
														ng-show="userClassform2.website.$error.maxlength"
														class="help-block"> Business website have maximum 256
														characters</span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform2.bussName.$dirty ? (userClassform2.bussName.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4">Business Name<span class="required">
														* </span> </label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].bussName = '<?php echo e(!empty($data[0]) ? $data[0]->name : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].bussName"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<input type="text" class="form-control" name="bussName"
														ng-model="serviceContactDtl[0].bussName" ng-minlength="2"
														ng-maxlength="256" required /> <span
														ng-show="userClassform2.bussName.$error.required || userClassform2.bussName.$valid"
														class="help-block"> Provide your Business name </span> <span
														ng-show="userClassform2.bussName.$error.minlength"
														class="help-block"> Business name have minimum 2
														characters</span> <span
														ng-show="userClassform2.bussName.$error.maxlength"
														class="help-block"> Business name have maximum 256
														characters</span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform2.numberName.$dirty ? (userClassform2.numberName.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4 left">Number/Name<span
													class="required"> * </span> </label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].numberName = '<?php echo e(!empty($data[0]) ? $data[0]->number_or_name : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].numberName"
													ng-blur="showGoogleMap()"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<textarea type="text" class="form-control"
														name="numberName"
														ng-model="serviceContactDtl[0].numberName"
														ng-minlength="2" ng-maxlength="256" required></textarea>
													<span
														ng-show="userClassform2.numberName.$error.required || userClassform2.numberName.$valid"
														class="help-block"> Provide your Number/Name </span> <span
														ng-show="userClassform2.numberName.$error.minlength"
														class="help-block"> Number/Name have minimum 2 characters</span>
													<span ng-show="userClassform2.numberName.$error.maxlength"
														class="help-block"> Number/Name have maximum 256
														characters</span>
												</div>
											</div>

											<div class="form-group"
												ng-class="userClassform2.address_1.$dirty ? (userClassform2.address_1.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4 left">Address 1<span class="required">
														* </span> </label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].address_1 = '<?php echo e(!empty($data[0]) ? $data[0]->address_1 : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].address_1"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<textarea type="text" class="form-control" name="address_1"
														ng-model="serviceContactDtl[0].address_1"
														ng-minlength="2" ng-maxlength="256" required
														ng-blur="showGoogleMap()"></textarea>
													<span
														ng-show="userClassform2.address_1.$error.required || userClassform2.address_1.$valid"
														class="help-block"> Provide your address 1 </span> <span
														ng-show="userClassform2.address_1.$error.minlength"
														class="help-block"> Address 1 have minimum 2 characters</span>
													<span ng-show="userClassform2.address_1.$error.maxlength"
														class="help-block"> Address 1 have maximum 256 characters</span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform2.address_2.$dirty ? (userClassform2.address_2.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4 left">Address 2 </label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].address_2 = '<?php echo e(!empty($data[0]) ? $data[0]->address_2 : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].address_2"
													ng-blur="showGoogleMap()"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<textarea type="text" class="form-control" name="address_2"
														ng-model="serviceContactDtl[0].address_2"
														ng-maxlength="256"></textarea>
													<span
														ng-show="userClassform2.address_2.$error.required || userClassform2.address_2.$valid"
														class="help-block"> Provide your address 2 </span> <span
														ng-show="userClassform2.address_2.$error.maxlength"
														class="help-block"> Address 2 have maximum 256 characters</span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform2.postal_code.$dirty ? (userClassform2.postal_code.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4">Pin<span class="required"> * </span>
												</label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].postal_code = '<?php echo e(!empty($data[0]) ? $data[0]->postal_code : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].postal_code"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<input type="text" class="form-control" name="postal_code"
														ng-model="serviceContactDtl[0].postal_code"
														ng-minlength="1" ng-maxlength="10"
														ng-blur="showGoogleMap()" required /> <span
														ng-show="userClassform2.postal_code.$error.required || userClassform2.postal_code.$valid"
														class="help-block"> Provide your Postal Code </span> <span
														ng-show="userClassform2.postal_code.$error.minlength"
														class="help-block"> Postal Code have minimum 1 characters</span>
													<span ng-show="userClassform2.postal_code.$error.maxlength"
														class="help-block"> Postal Code have maximum 10 characters</span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform2.city.$dirty ? (userClassform2.city.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4">City<span class="required"> * </span>
												</label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].city = '<?php echo e(!empty($data[0]) ? $data[0]->city : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].city"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<input type="text" class="form-control" name="city"
														ng-model="serviceContactDtl[0].city" ng-minlength="2"
														ng-maxlength="64" required ng-blur="showGoogleMap()" /> <span
														ng-show="userClassform2.city.$error.required || userClassform2.city.$valid"
														class="help-block"> Provide your City </span> <span
														ng-show="userClassform2.city.$error.minlength"
														class="help-block"> City have minimum 2 characters</span>
													<span ng-show="userClassform2.city.$error.maxlength"
														class="help-block"> City have maximum 64 characters</span>
												</div>
											</div>
											<div class="form-group"
												ng-class="userClassform2.county.$dirty ? (userClassform2.county.$valid ? 'has-success' : 'has-error') : 'has-success'">
												<label class="col-md-4">County<span class="required"> * </span>
												</label>
												<div class="col-md-8" ng-show="!myBussProfile"
													ng-init="serviceContactDtl[0].county = '<?php echo e(!empty($data[0]) ? $data[0]->county : ''); ?>'"
													ng-bind="' : '+serviceContactDtl[0].county"></div>
												<div class="col-md-8" ng-show="myBussProfile">
													<input type="text" class="form-control" name="county"
														ng-model="serviceContactDtl[0].county" ng-minlength="2"
														ng-maxlength="64" required ng-blur="showGoogleMap()" /> <span
														ng-show="userClassform2.county.$error.required || userClassform2.county.$valid"
														class="help-block"> Provide your County </span> <span
														ng-show="userClassform2.county.$error.minlength"
														class="help-block"> County have minimum 2 characters</span>
													<span ng-show="userClassform2.county.$error.maxlength"
														class="help-block"> County have maximum 64 characters</span>
												</div>
											</div>
											<div class="form-group" ng-show="myBussProfile">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="button" ng-click="saveMyServiceBussProf()"
															ng-disabled="!(!userClassform2.$error.required  && !userClassform2.$error.maxlength && !userClassform2.$error.minlength && !userClassform2.$error.pattern)"
															class="btn btn-info">Save</button>
														<button type="button" ng-click="myBussProfile=false"
															class="btn btn-info">Cancel</button>
													</div>
												</div>
											</div>
										</form>
									</div>
									<!-- END FORM-->
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
					</div>
					<div class="row">

						<div class="col-md-6 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet light bordered ">
								<div class="portlet-title">
									<div class="caption caption-md">
										<i class="icon-bar-chart font-red"></i> <span
											class="caption-subject font-red bold uppercase">Map</span>
									</div>
								</div>
								<div id="map" style="width: 480px;"></div>
								<!-- END PORTLET-->

							</div>
						</div>
					</div>
				</div>
				<!-- END ACTUAL CONTENT -->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<?php echo $__env->make("dashboard.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<script
		src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places&key=AIzaSyAsPBMpbmG1Jwxft44p96UBAEn66D3c8jU"></script>
	<script
		src="<?= asset('app/controllers/dashboard/serviceController.js') ?>"></script>


	</body>

	</html>