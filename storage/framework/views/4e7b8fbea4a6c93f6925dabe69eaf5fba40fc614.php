<?php echo $__env->make("admin.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div
	class="page-container" ng-controller="productModelCtrl">
	<?php echo $__env->make("admin.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<!-- BEGIN CONTENT BODY -->
		<div class="page-content">
			<!-- BEGIN PAGE BASE CONTENT -->
			<div class="row">
				<div class="col-md-12">
					<div class="m-heading-1 border-green m-bordered">
						<h3>Retail Product Model</h3>
						<p>Product Model master Page</p>
					</div>
					<div class="portlet light bordered" id="form_wizard_1">
						<div class="portlet-body form">
							<form class="productModelForm" name="productModelForm"
								id="submit_form" method="POST">
								<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
								<div class="form-wizard">
									<div class="form-body">
										<div class="tab-content">
											<div class="modal fade" id="delModel" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Delete Product Model</h4>
														</div>
														<div class="modal-body">
															<p>
																Are you sure want to delete this Product Model <span
																	id="productModelName"></span>?
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
											<div class="row">
												<div class="alert alert-danger" ng-show="delErrorMsg">
													<span ng-bind="responseMsg"></span>
												</div>
												<div class="alert alert-success" ng-show="delSuccessMsg">
													<span ng-bind="responseMsg"></span>
												</div>
											</div>
											<div class="row modal fade" id="addModel" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title" ng-bind="headerTxt"></h4>
														</div>
														<div class="modal-body">
															<div class="alert alert-danger" ng-show="errorMsg">
																<span ng-bind="responseMsg"></span>
															</div>
															<div class="alert alert-success" ng-show="successMsg">
																<span ng-bind="responseMsg"></span>
															</div>
															<div class="row margin-bottom15">
																<div class="form-group"
																	ng-class="productModelForm.bcId.$valid ? 'has-success' : 'has-error'">
																	<label class="control-label col-md-4">Bussiness
																		Category <span class="required"> * </span> </label>
																	<div class="col-md-8">
																		<select id="county" class="form-control" name="bcId"
																			ng-model="saveItem.bcId" required
																			ng-options="obj.id as obj.name for obj in bussinessCategoryList">
																			<option value="">Please Select</option>
																		</select> <span
																			ng-show="categoryForm.bcId.$error.required || categoryForm.bcId.$valid"
																			class="help-block"> Select the Bussiness Category </span>
																	</div>
																</div>
															</div>

															<div class="row margin-bottom15">
																<div class="form-group"
																	ng-class="productModelForm.btId.$valid ? 'has-success' : 'has-error'">
																	<label class="control-label col-md-4">Bussiness Type <span
																		class="required"> * </span> </label>
																	<div class="col-md-8">
																		<select id="county" class="form-control" name="btId"
																			ng-model="saveItem.btId" required
																			ng-options="obj.id as obj.name for obj in businessTypeList">
																			<option value="">Please Select</option>
																		</select> <span
																			ng-show="categoryForm.btId.$error.required || categoryForm.btId.$valid"
																			class="help-block"> Select the Bussiness Type </span>
																	</div>
																</div>
															</div>

															<div class="row margin-bottom15">
																<div class="form-group"
																	ng-class="productModelForm.ptId.$valid ? 'has-success' : 'has-error'">
																	<label class="control-label col-md-4">Product Type <span
																		class="required"> * </span> </label>
																	<div class="col-md-8">
																		<select id="county" class="form-control" name="ptId"
																			ng-model="saveItem.ptId" required
																			ng-options="obj.id as obj.name for obj in productTypeList">
																			<option value="">Please Select</option>
																		</select> <span
																			ng-show="categoryForm.ptId.$error.required || categoryForm.ptId.$valid"
																			class="help-block"> Select the Product Type </span>
																	</div>
																</div>
															</div>

															<div class="row margin-bottom15">
																<div class="form-group"
																	ng-class="productModelForm.productModel.$valid ? 'has-success' : 'has-error'">
																	<label class="control-label col-md-4">Product Model <span
																		class="required"> * </span> </label>
																	<div class="col-md-8">
																		<input type="text" class="form-control"
																			name="productModel" ng-model="saveItem.productModel"
																			ng-minlength="2" ng-maxlength="128" required /> <span
																			ng-show="productModelForm.productModel.$error.required || productModelForm.productModel.$valid"
																			class="help-block"> Enter the Product Model </span> <span
																			ng-show="productModelForm.productModel.$error.minlength"
																			class="help-block"> Product Model have minimum 2
																			characters</span> <span
																			ng-show="productModelForm.productModel.$error.maxlength"
																			class="help-block"> Product Model have maximum 128
																			characters</span>
																	</div>
																</div>
															</div>
															<div class="row margin-bottom15">
																<div class="form-group"
																	ng-class="productModelForm.seoTitle.$valid ? 'has-success' : 'has-error'">
																	<label class="control-label col-md-4">SEO Title </label>
																	<div class="col-md-8">
																		<input type="text" class="form-control"
																			name="seoTitle" ng-model="saveItem.seoTitle"
																			ng-maxlength="256" /> <span
																			ng-show="productModelForm.seoTitle.$error.maxlength"
																			class="help-block"> SEO Title have maximum 256
																			characters</span>
																	</div>
																</div>
															</div>
															<div class="row margin-bottom15">
																<div class="form-group"
																	ng-class="productModelForm.seoUrl.$valid ? 'has-success' : 'has-error'">
																	<label class="control-label col-md-4">SEO URL </label>
																	<div class="col-md-8">
																		<input type="text" class="form-control" name="seoUrl"
																			ng-model="saveItem.seoUrl" ng-maxlength="256" /> <span
																			ng-show="productModelForm.seoUrl.$error.maxlength"
																			class="help-block"> SEO URL have maximum 256
																			characters</span>
																	</div>
																</div>
															</div>
															<div class="row margin-bottom15">
																<div class="form-group"
																	ng-class="productModelForm.seoKeywords.$valid ? 'has-success' : 'has-error'">
																	<label class="control-label col-md-4">SEO Key Words </label>
																	<div class="col-md-8">
																		<input type="text" class="form-control"
																			name="seoKeywords" ng-model="saveItem.seoKeywords"
																			ng-maxlength="256" /> <span
																			ng-show="productModelForm.seoKeywords.$error.maxlength"
																			class="help-block"> SEO Key Words have maximum 256
																			characters</span>
																	</div>
																</div>
															</div>
															<div class="row margin-bottom15">
																<div class="form-group"
																	ng-class="productModelForm.seoTags.$valid ? 'has-success' : 'has-error'">
																	<label class="control-label col-md-4">SEO Tags </label>
																	<div class="col-md-8">
																		<input type="text" class="form-control" name="seoTags"
																			ng-model="saveItem.seoTags" ng-maxlength="256" /> <span
																			ng-show="productModelForm.seoTags.$error.maxlength"
																			class="help-block">SEO Tags have maximum 256
																			characters</span>
																	</div>
																</div>
															</div>
															<div class="row margin-bottom15">
																<div class="form-group"
																	ng-class="productModelForm.seoDesc.$valid ? 'has-success' : 'has-error'">
																	<label class="control-label col-md-4">SEO Description </label>
																	<div class="col-md-8">
																		<textarea class="form-control" name="seoDesc"
																			ng-model="saveItem.seoDesc"> </textarea>
																	</div>
																</div>
															</div>
															<div class="row margin-bottom15 has-success">
																<div class="form-group"">
																	<label class="control-label col-md-4">Active </label>
																	<div class="col-md-4">
																		<label> <input type="checkbox" name="active"
																			ng-model="saveItem.active" /> </label>
																	</div>
																</div>
															</div>
															<div class="row margin-bottom15">
																<div class="form-group">
																	<label class="control-label col-md-1"></label>
																	<div class="col-md-4">
																		<button type="button" ng-click="saveProductModel()"
																			ng-disabled="!(!productModelForm.$error.required && !productModelForm.$error.maxlength && !productModelForm.$error.minlength)"
																			class="btn btn-info">Submit</button>
																		<button type="button" data-dismiss="modal"
																			class="btn btn-danger">cancel</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-offset-85 col-md-4 margin-bottom15">
													<button type="button" ng-click="addRow()"
														data-toggle="modal" data-target="#addModel"
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
	src="<?= asset('app/controllers/admin/productModel.js') ?>"></script>
</body>

</html>
