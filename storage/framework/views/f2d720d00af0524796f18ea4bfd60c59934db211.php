<head>

</head>
<?php echo $__env->make("dashboard.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div
	class="page-container" ng-controller="stateCtrl">
	<?php echo $__env->make("dashboard.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
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
					<li><a ui-sref="datatablesmanaged">Wholesale Business</a> <i
						class="fa fa-circle"></i>
					</li>
					<li class="active">Add Wholesale Products</li>
				</ul>
				<!-- END PAGE BREADCRUMB -->

				<!-- BEGIN MAIN CONTENT -->

				<div ng-controller="BusinessFocusController" class="ng-scope">

					<div class="col-md-12">
						<!-- BEGIN: ACCORDION DEMO -->
						<div class="portlet light bordered">
							<div class="portlet-title">
								<div class="caption font-green-sharp">
									<i class="icon-settings font-green-sharp"></i> <span
										class="caption-subject bold uppercase">Add Wholesale Products</span>
									<span class="caption-helper hide"></span>
								</div>

							</div>
							<div class="portlet-body">Blank page content goes here...</div>
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
	src="<?= asset('app/controllers/dashboard/directives.js') ?>"
	type="text/javascript"></script>


</body>

</html>
