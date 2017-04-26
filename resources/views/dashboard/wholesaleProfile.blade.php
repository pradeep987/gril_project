@include("dashboard.header");
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div
	class="page-container" ng-controller="stateCtrl">
	@include("dashboard.sidebar");
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
					<li><a ui-sref="datatablesmanaged">Business Profile</a> <i
						class="fa fa-circle"></i>
					</li>
					<li><a ui-sref="datatablesmanaged">Business Listing</a> <i
						class="fa fa-circle"></i>
					</li>
					<li class="active">WholeSale</li>
				</ul>
				<!-- END PAGE BREADCRUMB -->

				<!-- BEGIN MAIN CONTENT -->
				<div ng-controller="wholesaleBusinessController" class="ng-scope">
					<!-- BEGIN DASHBOARD STATS -->
					<!-- END DASHBOARD STATS -->
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet box blue">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-gift"></i>My Wholesale Business
									</div>
									<div class="tools">
										<a href="javascript:;" class="collapse" data-original-title=""
											title=""> </a> <a href="javascript:;" class="reload"
											data-original-title="" title=""> </a>
									</div>
								</div>
								<div class="portlet-body form">
									<!-- BEGIN FORM-->
									<form action="#"
										class="form-horizontal form-row-sepe ng-pristine ng-valid">
										<div class="form-body">

											<h4 class="form-section">Wholesale Business 1</h4>
											<div id="wholesale_hide_div_1">
												<div class="form-group">
													<label class="col-md-4">Business Title</label>
													<div class="col-md-3">: Grril</div>
													<div class="col-md-5">
														<a href="javascript:;"
															style="position: absolute; right: 0;"
															class="btn btn-default btn-sm" onclick="open_close(1)"><i
															class="fa fa-edit"></i> Edit </a>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4">Discription</label>
													<div class="col-md-8">: asdadadada Some Discription
														asdadadadad dsfsfsfsdfsfs fdsfsfsfs</div>
												</div>
												<div class="form-group">
													<label class="col-md-4">Business Classifications</label>
													<div class="col-md-3">: Software</div>
												</div>
											</div>
											<div id="wholesale_show_div_1" style="display: none">
												<div class="form-group">
													<label class="control-label col-md-3">Business Title <span
														class="required"> * </span> </label>
													<div class="col-md-8">
														<div class="input-icon right">
															<input class="form-control" name="username1"
																id="username2_input" placeholder="Business Title"
																type="text">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Discription <span
														class="required"> * </span> </label>
													<div class="col-md-8">
														<textarea id="maxlength_textarea" class="form-control"
															maxlength="12" rows="2"
															placeholder="This textarea has a limit of 12 chars."></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Business Classifies <span
														class="required"> * </span> </label>
													<div class="col-md-8">
														<div class="input-icon right">
															<input class="form-control" name="username1"
																id="username2_input" placeholder="Business Title"
																type="text">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn purple">
															<i class="fa fa-check"></i> Submit
														</button>
														<button type="button" class="btn default"
															onclick="cancel(1)">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</form>

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
										<i class="fa fa-gift"></i>Wholesale Business Address
									</div>
									<div class="actions">
										<a href="javascript:;"
											onclick="$('.business-form').fadeIn();$('.business-table').hide();$('.hd-sh-edit').hide()"
											class="btn btn-default btn-sm"> <i class="fa fa-edit"></i>
											Edit </a>
									</div>
								</div>
								<div class="portlet-body">
									<div class="business-table">
										<table class="table table-user-information">
											<tbody>
												<tr>
													<td>Mobile Number</td>
													<td>: +91 990099900</td>
												</tr>
												<tr>
													<td>Land Line</td>
													<td>: 044 78877887</td>
												</tr>
												<tr>
													<td>Mail Id</td>
													<td>: grril@support.com</td>
												</tr>
												<tr>
													<td>Business Website</td>
													<td>: grril.com</td>
												</tr>
												<tr>
													<td>Business Name</td>
													<td>: Grril</td>
												</tr>
												<tr>
													<td>Address 1</td>
													<td>: 4th Street,your colony,your area,your city,your
														country,5000031.</td>
												</tr>
												<tr>
													<td>Address 2</td>
													<td>: 4th Street,your colony,your area,your city,your
														country,5000031.</td>
												</tr>
												<tr>
													<td>City</td>
													<td>: chennai</td>
												</tr>
												<tr>
													<td>Country</td>
													<td>: India</td>
												</tr>
												<tr>
													<td>Pin</td>
													<td>: 50000032</td>
												</tr>
											</tbody>
										</table>
									</div>
									<form role="" action="#" style="display: none"
										class="business-form ng-pristine ng-valid">
										<div class="form-group">
											<label class="control-label">Mobile Number</label> <input
												placeholder="+91 990099900" class="form-control" type="text">
										</div>
										<div class="form-group">
											<label class="control-label">Land Line</label> <input
												placeholder="044 78877887" class="form-control" type="text">
										</div>
										<div class="form-group">
											<label class="control-label">Mail Id</label> <input
												placeholder="grril@support.com" class="form-control"
												type="text">
										</div>
										<div class="form-group">
											<label class="control-label">Business Website</label> <input
												placeholder="grril.com" class="form-control" type="text">
										</div>
										<div class="form-group">
											<label class="control-label">Business Name</label> <input
												placeholder="Grril" class="form-control" type="text">
										</div>
										<div class="form-group">
											<label class="control-label">Address 1</label> <input
												placeholder="4th Street,your colony,your area,your city,your country,5000031."
												class="form-control" type="text">
										</div>
										<div class="form-group">
											<label class="control-label">Address 2</label>
											<textarea class="form-control" rows="3"
												placeholder="4th Street,your colony,your area,your city,your country,5000031."></textarea>
										</div>
										<div class="form-group">
											<label class="control-label">City</label> <input
												placeholder="Chennai" class="form-control" type="text">
										</div>
										<div class="form-group">
											<label class="control-label">Country</label> <input
												placeholder="India" class="form-control" type="text">
										</div>
										<div class="form-group">
											<label class="control-label">Pin</label> <input
												placeholder="50000032" class="form-control" type="text">
										</div>
										<div class="margiv-top-10">
											<a href="javascript:void(0)" class="btn green-haze"> Save
												Changes </a> <a href="javascript:void(0)"
												class="btn default"
												onclick="$('.business-form').hide();$('.business-table').fadeIn();$('.hd-sh-edit').show()">
												Cancel </a>
										</div>
									</form>

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
											class="caption-subject font-red bold uppercase">Map</span> <span
											class="caption-helper hide">weekly stats...</span>
									</div>
								</div>



								<!-- END PORTLET-->

							</div>
						</div>
					</div>
					<script>
    function open_close(id)
    {
        $('#wholesale_hide_div_'+id).hide();
        $('#wholesale_show_div_'+id).fadeIn();
    }
        
    function cancel(id)
    {
        $('#wholesale_hide_div_'+id).fadeIn();
        $('#wholesale_show_div_'+id).hide();
    }
    </script>
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
@include("dashboard.footer")
<link
	id="style_components"
	href="<?= asset('assets/global/css/components-rounded.min.css') ?>"
	rel="stylesheet" type="text/css">
<script
	src="<?= asset('app/controllers/dashboard/DashboardController.js') ?>"></script>


</body>

</html>
