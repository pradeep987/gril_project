<head>
<link
	href="<?= asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>"
	rel="stylesheet" type="text/css">
<link
	href="<?= asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') ?>"
	rel="stylesheet" type="text/css">
<link
	href="<?= asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') ?>"
	rel="stylesheet" type="text/css">
<link id="style_components"
	href="<?= asset('assets/global/css/components-rounded.min.css') ?>"
	rel="stylesheet" type="text/css">
</head>

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
		<div class="page-content" style="min-height: 476px;">
			<!-- BEGIN PAGE HEAD -->
			<!-- ngInclude: 'tpl/page-head.html' -->
			<div data-ng-include="'tpl/page-head.html'"
				data-ng-controller="PageHeadController" class="page-head ng-scope">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title ng-scope">
					<h1>
						<span data-ng-bind="$state.current.data.pageTitle"
							class="ng-binding">Retail Profile</span> <small
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
				<ul class="page-breadcrumb breadcrumb">
					<li><a ui-sref="dashboard">Home</a> <i class="fa fa-circle"></i>
					</li>
					<li><a ui-sref="datatablesmanaged">Business List</a> <i
						class="fa fa-circle"></i>
					</li>
					<li><a ui-sref="datatablesmanaged">Retail Business</a> <i
						class="fa fa-circle"></i>
					</li>
					<li class="active">Retail Products</li>
				</ul>
				<!-- END PAGE BREADCRUMB -->

				<!-- BEGIN MAIN CONTENT -->

				<div ng-controller="RetailBusinessController" class="ng-scope">
					<!-- BEGIN DASHBOARD STATS -->
					<!-- END DASHBOARD STATS -->
					<div class="row">
						<div class="col-md-12">

							<!-- Begin: life time stats -->
							<div class="portlet light portlet-fit portlet-datatable bordered">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-shopping-cart"></i> Product Listing
									</div>
									<div class="actions">
										<a href="javascript:void(0)" class="btn btn-outline green"> <i
											class="fa fa-plus"></i> <span class="hidden-480"> New Order </span>
										</a>
										<div class="btn-group">
											<a class="btn red btn-outline" href="javascript:void(0)"
												data-toggle="dropdown"> <i class="fa fa-share"></i> <span
												class="hidden-480"> Tools </span> <i
												class="fa fa-angle-down"></i> </a>
											<ul class="dropdown-menu pull-right">
												<li><a href="javascript:void(0)"> Export to Excel </a>
												</li>
												<li><a href="javascript:void(0)"> Export to CSV </a>
												</li>
												<li><a href="javascript:void(0)"> Export to XML </a>
												</li>
												<li class="divider"></li>
												<li><a href="javascript:void(0)"> Print Invoices </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div class="table-container">
										<div class="table-actions-wrapper">
											<span> </span> <select
												class="table-group-action-input form-control input-inline input-small input-sm">
												<option value="">Select...</option>
												<option value="Cancel">Cancel</option>
												<option value="Cancel">Hold</option>
												<option value="Cancel">On Hold</option>
												<option value="Close">Close</option>
											</select>
											<button
												class="btn btn-sm btn-outline green table-group-action-submit">
												<i class="fa fa-check"></i> Submit
											</button>
										</div>
										<table
											class="table table-striped table-bordered table-hover table-checkable"
											id="datatable_ajax">
											<thead>
												<tr role="row" class="heading">
													<th width="2%"><label
														class="mt-checkbox mt-checkbox-outline mt-checkbox-single">
															<input type="checkbox" class="group-checkable"> <span></span>
													</label>
													</th>
													<th width="5%">Edit/Delete</th>
													<th width="5%">Record&nbsp;#</th>
													<th width="15%">Product&nbsp;name</th>
													<th width="15%">Price</th>
													<th width="10%">Sales&nbsp;price</th>
													<th width="10%">Offer</th>
													<th width="10%">
														Offer&nbsp;validity&nbsp;from&nbsp;-&nbsp;to</th>
													<th width="10%">High&nbsp;lights(features)</th>
													<th width="10%">Package&nbsp;quantity&nbsp;details</th>
													<th width="10%">Specifications</th>
													<th width="10%">Description</th>
													<th width="10%">Terms&nbsp;and&nbsp;condition</th>
													<th width="10%">Weight&nbsp;or&nbsp;litter</th>
													<th width="10%">Stocks&nbsp;In&nbsp;Hand</th>
													<th width="10%">Stocks&nbsp;Notifications</th>
													<th width="10%">Status&nbsp;&nbsp;&nbsp;&nbsp;</th>
												</tr>
												<tr role="row" class="filter">
													<td></td>
													<td>
														<div class="margin-bottom-5">
															<button
																class="btn btn-sm yellow filter-submit margin-bottom">
																<i class="fa fa-search"></i> Edit
															</button>
														</div>
														<button class="btn btn-sm red filter-cancel">
															<i class="fa fa-times"></i> Delete
														</button>
													</td>
													<td><input type="text"
														class="form-control form-filter input-sm" name="order_id">
													</td>
													<td><input type="text"
														class="form-control form-filter input-sm" name="order_id">

													</td>
													<td><input type="text"
														class="form-control form-filter input-sm"
														name="order_customer_name">
													</td>
													<td><input type="text"
														class="form-control form-filter input-sm"
														name="order_ship_to">
													</td>
													<td>
														<div class="margin-bottom-5">
															<input type="text"
																class="form-control form-filter input-sm"
																name="order_price_from" placeholder="From" />
														</div> <input type="text"
														class="form-control form-filter input-sm"
														name="order_price_to" placeholder="To" />
													</td>
													<td>
														<div class="input-group date date-picker margin-bottom-5"
															data-date-format="dd/mm/yyyy">
															<input type="text"
																class="form-control form-filter input-sm" readonly
																name="order_date_from" placeholder="From"> <span
																class="input-group-btn">
																<button class="btn btn-sm default" type="button">
																	<i class="fa fa-calendar"></i>
																</button> </span>
														</div>
														<div class="input-group date date-picker"
															data-date-format="dd/mm/yyyy">
															<input type="text"
																class="form-control form-filter input-sm" readonly
																name="order_date_to" placeholder="To"> <span
																class="input-group-btn">
																<button class="btn btn-sm default" type="button">
																	<i class="fa fa-calendar"></i>
																</button> </span>
														</div>
													</td>
													<td><input class="form-control form-filter input-sm"
														name="order_ship_to" type="text">
													</td>
													<td><input class="form-control form-filter input-sm"
														name="order_ship_to" type="text">
													</td>
													<td><input class="form-control form-filter input-sm"
														name="order_ship_to" type="text">
													</td>
													<td><input class="form-control form-filter input-sm"
														name="order_ship_to" type="text">
													</td>
													<td><input class="form-control form-filter input-sm"
														name="order_ship_to" type="text">
													</td>
													<td><input class="form-control form-filter input-sm"
														name="order_ship_to" type="text">
													</td>
													<td><input class="form-control form-filter input-sm"
														name="order_ship_to" type="text">
													</td>
													<td><input class="form-control form-filter input-sm"
														name="order_ship_to" type="text">
													</td>
													<td><select name="order_status"
														class="form-control form-filter input-sm">
															<option value="">Select...</option>
															<option value="pending">Pending</option>
															<option value="closed">Closed</option>
															<option value="hold">On Hold</option>
															<option value="fraud">Fraud</option>
													</select>
													</td>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- End: life time stats -->
						</div>
					</div>


					<!-- END MAIN CONTENT -->
					<!-- BEGIN MAIN JS & CSS -->

					<!-- BEGIN MAIN JS & CSS -->
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
	src="<?= asset('assets/global/plugins/datatables/datatables.all.min.js') ?>"></script>
<script
	src="<?= asset('assets/global/plugins/jquery.blockui.min.js') ?>"
	type="text/javascript"></script>
<script
	src="<?= asset('assets/global/scripts/datatable.js') ?>"
	type="text/javascript"></script>
<script
	src="<?= asset('app/controllers/dashboard/retail-products.js') ?>"
	type="text/javascript"></script>
<script
	src="<?= asset('app/controllers/dashboard/DashboardController.js') ?>"
	type="text/javascript"></script>
<script
	src="<?= asset('app/controllers/dashboard/directives.js') ?>"
	type="text/javascript"></script>
<script
	src="<?= asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"
	type="text/javascript"></script>
<script>
    TableAjax.init();
</script>

</body>

</html>
