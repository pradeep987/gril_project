@include("dashboard.header");
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container"
	ng-controller="AddRetailProductCtrl">
	@include("dashboard.sidebar");
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" style="min-height: 476px;">
			<!-- BEGIN PAGE HEAD -->
			<!-- ngInclude: 'tpl/page-head.html' -->
			<div data-ng-include="'tpl/page-head.html'"
				class="page-head ng-scope">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title ng-scope">
					<h1>
						<span data-ng-bind="$catagary.current.data.pageTitle"
							class="ng-binding">Retail Profile</span> <small
							data-ng-bind="$catagary.current.data.pageSubTitle"
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
					<li class="active">Select Category</li>
				</ul>
				<!-- END PAGE BREADCRUMB -->

				<!-- BEGIN MAIN CONTENT -->

				<div class="ng-scope">
					<div class="col-md-12">
						<!-- BEGIN: ACCORDION DEMO -->
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
											ng-change="getMainCatagaryCatagarys()" class="form-control"
											ng-required="true" id="maincatagary"
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
											class="form-control" ng-required="true" id="subcatagary"
											data-selectsplitter-secondselect-selector="" size="8"
											required></select>
									</div>
								</div>
							</div>
							Categories Selected: [[customer.MainCatagary]]
							[[customer.Catagary]] [[customer.SubCatagary]]
							<div class="row">
								<div class="col-md-offset-3 col-md-9">
									<button type="button"
										ng-disabled="(customer.Catagary == '' || customer.SubCatagary == '')"
										ng-click="navTab(2)" class="btn btn-info">Continue</button>
								</div>
							</div>
						</div>
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
@include("dashboard.footer")
<script
	src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
<script
	src="<?= asset('app/controllers/dashboard/add-retail-product.js') ?>"
	type="text/javascript"></script>

</body>

</html>
