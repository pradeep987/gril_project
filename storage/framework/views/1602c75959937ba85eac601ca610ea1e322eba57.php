<?php echo $__env->make("admin.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
;
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div
	class="page-container" ng-controller="subCategoryCtrl">
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
						<h3>Sub Category</h3>
						<p>Sub Category master Page</p>
					</div>
					<div class="portlet light bordered" id="form_wizard_1">
						<div class="portlet-body form">
							<form class="subCategoryForm" name="subCategoryForm"
								id="submit_form" method="POST">
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
															<h4 class="modal-title">Delete Sub Category</h4>
														</div>
														<div class="modal-body">
															<p>
																Are you sure want to delete this subCategory <span
																	id="subCategoryName"></span>?
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
														ng-class="subCategoryForm.mcId.$valid ? 'has-success' : 'has-error'">
														<label class="control-label col-md-2">Main Category <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<select class="form-control" name="mcId"
																ng-model="saveItem.mcId" required
																ng-options="obj.id as obj.name for obj in mcList">
																<option value="">Please Select</option>
															</select> <span
																ng-show="subCategoryForm.countryId.$error.required || subCategoryForm.countryId.$valid"
																class="help-block"> Select the Main Category </span>
														</div> </span> <span class="form-group"
														ng-class="subCategoryForm.categoryId.$valid ? 'has-success' : 'has-error'">
														<label class="control-label col-md-2">Category <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<select class="form-control" name="categoryId"
																ng-model="saveItem.categoryId" required
																ng-options="obj.id as obj.name for obj in categoryList">
																<option value="">Please Select</option>
															</select> <span
																ng-show="subCategoryForm.categoryId.$error.required || subCategoryForm.categoryId.$valid"
																class="help-block"> Select the Category </span>
														</div> </span>

												</div>
												<div class="row margin-bottom15">
													<span class="form-group"
														ng-class="subCategoryForm.subCategory.$valid ? 'has-success' : 'has-error'">
														<label class="control-label col-md-2">Sub Category <span
															class="required"> * </span> </label>
														<div class="col-md-4">
															<input type="text" class="form-control"
																name="subCategory" ng-model="saveItem.subCategory"
																ng-minlength="2" ng-maxlength="64" required /> <span
																ng-show="subCategoryForm.subCategory.$error.required || subCategoryForm.subCategory.$valid"
																class="help-block"> Enter the Sub Category </span> <span
																ng-show="subCategoryForm.subCategory.$error.minlength"
																class="help-block"> Sub Category have minimum 2
																characters</span> <span
																ng-show="subCategoryForm.subCategory.$error.maxlength"
																class="help-block"> Sub Category have maximum 64
																characters</span>
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
															<button type="button" ng-click="saveSubCategory()"
																ng-disabled="!(!subCategoryForm.$error.required && !subCategoryForm.$error.maxlength && !subCategoryForm.$error.minlength)"
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
	src="<?= asset('app/controllers/admin/subCategory.js') ?>"></script>
</body>

</html>
