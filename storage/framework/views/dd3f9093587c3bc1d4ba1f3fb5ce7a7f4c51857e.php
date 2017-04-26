<?php echo $__env->make("admin.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
;
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div
	class="page-container" ng-controller="cityCtrl">
	<?php echo $__env->make("admin.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	;
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<!-- BEGIN CONTENT BODY -->
		<div class="page-content">
			<!-- BEGIN PAGE BASE CONTENT -->
			<div class="row">
				<div class="col-md-12">
					<div class="m-heading-1 border-green m-bordered">
						<h3>City</h3>
						<p>City master Page</p>
					</div>
					<div class="portlet light bordered" id="form_wizard_1">
						<div class="portlet-body form">
							<form class="cityForm" name="cityForm" id="submit_form"
								method="POST">
								<input type="hidden" name="_token"
									value="<?php echo e(csrf_token()); ?>">
								<div class="form-wizard">
									<div class="form-body">
										<div class="tab-content">
											<div class="modal fade" id="delModal" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Delete City</h4>
														</div>
														<div class="modal-body">
															<p>
																Are you sure want to delete this city <span
																	id="cityName"></span>?
															</p>
															<input type="hidden" name="rowId" id="rowId" value="" />
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default"
																data-dismiss="modal" ng-click="deleteRow()">Ok</button>
															<button type="button" class="btn btn-default"
																data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>

											<div class="row" ng-show="showAddItem">
												<div class="alert alert-danger" ng-show="errorMsg">
													<span ng-bind="responseMsg"></span>
												</div>
												<div class="alert alert-success" ng-show="successMsg">
													<span ng-bind="responseMsg"></span>
												</div>

												<h3 class="block" ng-bind="headerTxt"></h3>
												<div class="row margin-bottom15">
													<span class="form-group"
														ng-class="cityForm.countryId.$valid ? 'has-success' : 'has-error'">
														<label class="control-label col-md-2">Country <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<select class="form-control" name="countryId"
																ng-model="saveItem.countryId" required
																ng-options="obj.id as obj.name for obj in countryList">
																<option value="">Please Select</option>
															</select> <span
																ng-show="cityForm.countryId.$error.required || cityForm.countryId.$valid"
																class="help-block"> Select the Country </span>
														</div> </span> <span class="form-group"
														ng-class="cityForm.stateId.$valid ? 'has-success' : 'has-error'">
														<label class="control-label col-md-2">State <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<select class="form-control" name="stateId"
																ng-model="saveItem.stateId" required
																ng-options="obj.id as obj.name for obj in stateList">
																<option value="">Please Select</option>
															</select> <span
																ng-show="cityForm.stateId.$error.required || cityForm.stateId.$valid"
																class="help-block"> Select the State </span>
														</div> </span>

												</div>
												<div class="row margin-bottom15">
													<span class="form-group"
														ng-class="cityForm.city.$valid ? 'has-success' : 'has-error'">
														<label class="control-label col-md-2">City <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="city"
																ng-model="saveItem.city" ng-minlength="2"
																ng-maxlength="64" required /> <span
																ng-show="cityForm.city.$error.required || cityForm.city.$valid"
																class="help-block"> Enter the City </span> <span
																ng-show="cityForm.city.$error.minlength"
																class="help-block"> City have minimum 2 characters</span>
															<span ng-show="cityForm.city.$error.maxlength"
																class="help-block"> City have maximum 64 characters</span>
														</div> </span> <span class="form-group has-success"> <label
														class="control-label col-md-2">Active </label>
														<div class="col-md-4">
															<label> <input type="checkbox" name="active"
																ng-model="saveItem.active" /> </label>
														</div> </span>
												</div>
												<div class="row margin-bottom15">
													<div class="form-group">
														<label class="control-label col-md-1"></label>
														<div class="col-md-4">
															<button type="button" ng-click="saveCity()"
																ng-disabled="!(!cityForm.$error.required && !cityForm.$error.maxlength && !cityForm.$error.minlength)"
																class="btn btn-info">Submit</button>
															<button type="button" ng-click="showAddItem=false"
																class="btn btn-danger">cancel</button>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-offset-85 col-md-3 margin-bottom15">
													<button type="button" ng-click="addRow()"
														class="btn btn-info">Add</button>
													<button type="button"
														ng-click="toggleFiltering('gridStyle');showSearch=!showSearch"
														class="btn btn-info">[[showSearch ? "Hide " : ""]]Search</button>
												</div>
											</div>
											<div class="row">
												<div ui-grid="gridOptions" ui-grid-pagination id="gridStyle"></div>
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
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
	<?php echo $__env->make("admin.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script
	src="<?= asset('app/controllers/admin/city.js') ?>"></script>
</body>

</html>
