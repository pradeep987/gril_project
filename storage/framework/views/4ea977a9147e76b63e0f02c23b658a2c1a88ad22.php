<?php echo $__env->make("dashbord.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
;
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div
	class="page-container" ng-controller="stateCtrl">
	<?php echo $__env->make("dashbord.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
							class="ng-binding">Admin Dashboard Template</span> <small
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
					<li><a ui-sref="dashboard" href="#/dashboard.html">Home</a> <i
						class="fa fa-circle"></i>
					</li>
					<li class="active">Dashboard</li>
				</ul>
				<!-- END PAGE BREADCRUMB -->
				<!-- BEGIN MAIN CONTENT -->
				<div ng-controller="DashboardController" class="ng-scope">
					<div class="note note-info">
						<h3>
							Meet Metronic AngularJS Version! <span class="close"
								data-close="note"></span>
						</h3>
						<p>AngularJS version of Metronic gives an extremely fast browsing
							experience to users. It uses lazy loading of dependency
							resources(modules, controllers, templates, jquery plugins,
							javascripts and even css files) on demand. UI-Router is used for
							flexible routing with nested views. UI Bootstrap enables using
							all Bootstrap framework components with pure AngularJS
							directives.</p>
						<span class="label label-danger">NOTE:</span> All Metronic
						features from the HTML version(pages, layout options, components,
						plugins, etc) are fully compatible in the AngularJS version.
						<p></p>
					</div>
					<!-- BEGIN DASHBOARD STATS -->
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">1349</div>
									<div class="desc">New Feedbacks</div>
								</div>
								<a class="more" href="#"> View more <i
									class="m-icon-swapright m-icon-white"></i> </a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat red">
								<div class="visual">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="details">
									<div class="number">12,5M$</div>
									<div class="desc">Total Profit</div>
								</div>
								<a class="more" href="#"> View more <i
									class="m-icon-swapright m-icon-white"></i> </a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat green">
								<div class="visual">
									<i class="fa fa-shopping-cart"></i>
								</div>
								<div class="details">
									<div class="number">549</div>
									<div class="desc">New Orders</div>
								</div>
								<a class="more" href="#"> View more <i
									class="m-icon-swapright m-icon-white"></i> </a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat purple">
								<div class="visual">
									<i class="fa fa-globe"></i>
								</div>
								<div class="details">
									<div class="number">+89%</div>
									<div class="desc">Brand Popularity</div>
								</div>
								<a class="more" href="#"> View more <i
									class="m-icon-swapright m-icon-white"></i> </a>
							</div>
						</div>
					</div>
					<!-- END DASHBOARD STATS -->
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet light bordered ">
								<div class="portlet-title">
									<div class="caption caption-md">
										<i class="icon-settings font-green"></i> <span
											class="caption-subject font-green bold uppercase">Sales
											Summary</span> <span class="caption-helper hide">weekly
											stats...</span>
									</div>
									<div class="actions">
										<div class="btn-group btn-group-devided" data-toggle="buttons">
											<label class="btn dark btn-outline btn-circle btn-sm active">
												<input name="options" class="toggle" id="option1"
												type="radio">Today</label> <label
												class="btn dark btn-outline btn-circle btn-sm"> <input
												name="options" class="toggle" id="option2" type="radio">Week</label>
											<label class="btn dark btn-outline btn-circle btn-sm"> <input
												name="options" class="toggle" id="option2" type="radio">Month</label>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div class="row list-separated">
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">Total Sales</div>
											<div class="uppercase font-hg font-red-flamingo">
												13760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">Revenue</div>
											<div class="uppercase font-hg font-green">
												4760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">Expenses</div>
											<div class="uppercase font-hg font-purple">
												1760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">Growth</div>
											<div class="uppercase font-hg font-blue">
												9760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
									</div>
									<ul class="list-separated list-inline-xs hide">
										<li>
											<div class="font-grey-mint font-sm">Total Sales</div>
											<div class="uppercase font-hg font-red-flamingo">
												13760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
										<li></li>
										<li class="border">
											<div class="font-grey-mint font-sm">Revenue</div>
											<div class="uppercase font-hg font-green">
												4760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
										<li class="divider"></li>
										<li>
											<div class="font-grey-mint font-sm">Expenses</div>
											<div class="uppercase font-hg font-purple">
												1760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
										<li class="divider"></li>
										<li>
											<div class="font-grey-mint font-sm">Growth</div>
											<div class="uppercase font-hg font-blue">
												9760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
									</ul>
									<div id="sales_statistics"
										class="portlet-body-morris-fit morris-chart"
										style="height: 260px; position: relative;">
										<svg height="260" version="1.1" width="627"
											xmlns="http://www.w3.org/2000/svg"
											style="overflow: hidden; position: relative; top: -0.366638px;">
										<desc>Created with Raphaël 2.1.2</desc> <defs /> <path
											style="" fill="none" stroke="none" d="M0,260H627"
											stroke-width="0.5" /> <path style="" fill="none"
											stroke="none" d="M0,195H627" stroke-width="0.5" /> <path
											style="" fill="none" stroke="none" d="M0,130H627"
											stroke-width="0.5" /> <path style="" fill="none"
											stroke="none" d="M0,65H627" stroke-width="0.5" /> <path
											style="" fill="none" stroke="none" d="M0,0H627"
											stroke-width="0.5" /> <path style="fill-opacity: 1;"
											fill="#e3f5f3" stroke="none"
											d="M0,104C39.4016393442623,106.16666666666666,118.2049180327869,115.91666666666666,157.6065573770492,112.66666666666666C197.0081967213115,109.41666666666666,275.8114754098361,76.91074681238615,315.2131147540984,78C354.18647540983613,79.07741347905282,432.1331967213115,124.04166666666666,471.1065573770492,121.33333333333331C510.0799180327869,118.62499999999999,588.0266393442623,72.58333333333331,627,56.333333333333314L627,260L0,260Z"
											fill-opacity="1" /> <path style="" fill="none"
											stroke="#92e9dc"
											d="M0,104C39.4016393442623,106.16666666666666,118.2049180327869,115.91666666666666,157.6065573770492,112.66666666666666C197.0081967213115,109.41666666666666,275.8114754098361,76.91074681238615,315.2131147540984,78C354.18647540983613,79.07741347905282,432.1331967213115,124.04166666666666,471.1065573770492,121.33333333333331C510.0799180327869,118.62499999999999,588.0266393442623,72.58333333333331,627,56.333333333333314"
											stroke-width="0" /> <circle cx="0" cy="104" r="0"
											fill="#92e9dc" stroke="#ffffff" style="" stroke-width="1" />
										<circle cx="157.6065573770492" cy="112.66666666666666" r="0"
											fill="#92e9dc" stroke="#ffffff" style="" stroke-width="1" />
										<circle cx="315.2131147540984" cy="78" r="0" fill="#92e9dc"
											stroke="#ffffff" style="" stroke-width="1" /> <circle
											cx="471.1065573770492" cy="121.33333333333331" r="0"
											fill="#92e9dc" stroke="#ffffff" style="" stroke-width="1" />
										<circle cx="627" cy="56.333333333333314" r="0" fill="#92e9dc"
											stroke="#ffffff" style="" stroke-width="1" /> <path
											style="fill-opacity: 1;" fill="#59aea2" stroke="none"
											d="M0,138.66666666666666C39.4016393442623,145.16666666666666,118.2049180327869,166.83333333333331,157.6065573770492,164.66666666666666C197.0081967213115,162.5,275.8114754098361,122.42258652094716,315.2131147540984,121.33333333333331C354.18647540983613,120.25591985428049,432.1331967213115,155.45833333333334,471.1065573770492,156C510.0799180327869,156.54166666666666,588.0266393442623,133.25,627,125.66666666666666L627,260L0,260Z"
											fill-opacity="1" /> <path style="" fill="none"
											stroke="#399a8c"
											d="M0,138.66666666666666C39.4016393442623,145.16666666666666,118.2049180327869,166.83333333333331,157.6065573770492,164.66666666666666C197.0081967213115,162.5,275.8114754098361,122.42258652094716,315.2131147540984,121.33333333333331C354.18647540983613,120.25591985428049,432.1331967213115,155.45833333333334,471.1065573770492,156C510.0799180327869,156.54166666666666,588.0266393442623,133.25,627,125.66666666666666"
											stroke-width="0" /> <circle cx="0" cy="138.66666666666666"
											r="0" fill="#399a8c" stroke="#ffffff" style=""
											stroke-width="1" /> <circle cx="157.6065573770492"
											cy="164.66666666666666" r="0" fill="#399a8c" stroke="#ffffff"
											style="" stroke-width="1" /> <circle cx="315.2131147540984"
											cy="121.33333333333331" r="0" fill="#399a8c" stroke="#ffffff"
											style="" stroke-width="1" /> <circle cx="471.1065573770492"
											cy="156" r="0" fill="#399a8c" stroke="#ffffff" style=""
											stroke-width="1" /> <circle cx="627" cy="125.66666666666666"
											r="0" fill="#399a8c" stroke="#ffffff" style=""
											stroke-width="1" /></svg>
										<div class="morris-hover morris-default-style"
											style="display: none;"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
						<div class="col-md-6 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet light bordered ">
								<div class="portlet-title">
									<div class="caption caption-md">
										<i class="icon-bar-chart font-red"></i> <span
											class="caption-subject font-red bold uppercase">Member
											Activity</span> <span class="caption-helper hide">weekly
											stats...</span>
									</div>
									<div class="actions">
										<div class="btn-group btn-group-devided" data-toggle="buttons">
											<label class="btn green btn-outline btn-circle btn-sm active">
												<input name="options" class="toggle" id="option1"
												type="radio">Today</label> <label
												class="btn red btn-outline btn-circle btn-sm"> <input
												name="options" class="toggle" id="option2" type="radio">Week</label>
											<label class="btn blue btn-outline btn-circle btn-sm"> <input
												name="options" class="toggle" id="option2" type="radio">Month</label>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div class="row number-stats margin-bottom-30">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="stat-left">
												<div class="stat-chart">
													<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
													<div id="sparkline_bar">
														<canvas
															style="display: inline-block; width: 113px; height: 55px; vertical-align: top;"
															width="113" height="55"></canvas>
													</div>
												</div>
												<div class="stat-number">
													<div class="title">Total</div>
													<div class="number">2460</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="stat-right">
												<div class="stat-chart">
													<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
													<div id="sparkline_bar2">
														<canvas
															style="display: inline-block; width: 107px; height: 55px; vertical-align: top;"
															width="107" height="55"></canvas>
													</div>
												</div>
												<div class="stat-number">
													<div class="title">New</div>
													<div class="number">719</div>
												</div>
											</div>
										</div>
									</div>
									<div class="table-scrollable table-scrollable-borderless">
										<table class="table table-hover table-light">
											<thead>
												<tr class="uppercase">
													<th colspan="2">MEMBER</th>
													<th>Earnings</th>
													<th>CASES</th>
													<th>CLOSED</th>
													<th>RATE</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="fit"><img class="user-pic rounded"
														src="../assets/pages/media/users/avatar4.jpg">
													</td>
													<td><a href="javascript:;" class="primary-link">Brain</a>
													</td>
													<td>$345</td>
													<td>45</td>
													<td>124</td>
													<td><span class="bold font-green">80%</span>
													</td>
												</tr>
												<tr>
													<td class="fit"><img class="user-pic rounded"
														src="../assets/pages/media/users/avatar5.jpg">
													</td>
													<td><a href="javascript:;" class="primary-link">Nick</a>
													</td>
													<td>$560</td>
													<td>12</td>
													<td>24</td>
													<td><span class="bold font-green">67%</span>
													</td>
												</tr>
												<tr>
													<td class="fit"><img class="user-pic rounded"
														src="../assets/pages/media/users/avatar6.jpg">
													</td>
													<td><a href="javascript:;" class="primary-link">Tim</a>
													</td>
													<td>$1,345</td>
													<td>450</td>
													<td>46</td>
													<td><span class="bold font-green">98%</span>
													</td>
												</tr>
												<tr>
													<td class="fit"><img class="user-pic rounded"
														src="../assets/pages/media/users/avatar7.jpg">
													</td>
													<td><a href="javascript:;" class="primary-link">Tom</a>
													</td>
													<td>$645</td>
													<td>50</td>
													<td>89</td>
													<td><span class="bold font-green">58%</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet light bordered tasks-widget">
								<div class="portlet-title">
									<div class="caption caption-md">
										<i class="icon-bar-chart font-green hide"></i> <span
											class="caption-subject font-green bold uppercase">TASKS</span>
										<span class="caption-helper">16 pending</span>
									</div>
									<div class="inputs">
										<div class="portlet-input input-small input-inline">
											<div class="input-icon right">
												<i class="icon-magnifier"></i> <input
													class="form-control form-control-solid"
													placeholder="search..." type="text">
											</div>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div class="task-content">
										<div class="slimScrollDiv"
											style="position: relative; overflow: hidden; width: auto; height: 282px;">
											<div class="scroller"
												style="height: 282px; overflow: hidden; width: auto;"
												data-always-visible="1" data-rail-visible1="0"
												data-handle-color="#D7DCE2" data-initialized="1">
												<!-- START TASK LIST -->
												<ul class="task-list">
													<li>
														<div class="task-checkbox">
															<input value="1" name="test" type="hidden"> <input
																class="liChild" value="2" name="test" type="checkbox">
														</div>
														<div class="task-title">
															<span class="task-title-sp"> Present 2013 Year IPO
																Statistics at Board Meeting </span> <span
																class="label label-sm label-success">Company</span> <span
																class="task-bell"> <i class="fa fa-bell-o"></i> </span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;"
																	data-toggle="dropdown" dropdown-menu-hover=""
																	data-close-others="true"> <i class="fa fa-cog"></i> <i
																	class="fa fa-angle-down"></i> </a>
																<ul class="dropdown-menu pull-right">
																	<li><a href="javascript:;"> <i class="fa fa-check"></i>
																			Complete </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-pencil"></i>
																			Edit </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-trash-o"></i>
																			Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input class="liChild" value="" type="checkbox">
														</div>
														<div class="task-title">
															<span class="task-title-sp"> Hold An Interview for
																Marketing Manager Position </span> <span
																class="label label-sm label-danger">Marketing</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;"
																	data-toggle="dropdown" dropdown-menu-hover=""
																	data-close-others="true"> <i class="fa fa-cog"></i> <i
																	class="fa fa-angle-down"></i> </a>
																<ul class="dropdown-menu pull-right">
																	<li><a href="javascript:;"> <i class="fa fa-check"></i>
																			Complete </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-pencil"></i>
																			Edit </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-trash-o"></i>
																			Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input class="liChild" value="" type="checkbox">
														</div>
														<div class="task-title">
															<span class="task-title-sp"> AirAsia Intranet System
																Project Internal Meeting </span> <span
																class="label label-sm label-success">AirAsia</span> <span
																class="task-bell"> <i class="fa fa-bell-o"></i> </span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;"
																	data-toggle="dropdown" dropdown-menu-hover=""
																	data-close-others="true"> <i class="fa fa-cog"></i> <i
																	class="fa fa-angle-down"></i> </a>
																<ul class="dropdown-menu pull-right">
																	<li><a href="javascript:;"> <i class="fa fa-check"></i>
																			Complete </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-pencil"></i>
																			Edit </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-trash-o"></i>
																			Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input class="liChild" value="" type="checkbox">
														</div>
														<div class="task-title">
															<span class="task-title-sp"> Technical Management Meeting
															</span> <span class="label label-sm label-warning">Company</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;"
																	data-toggle="dropdown" dropdown-menu-hover=""
																	data-close-others="true"> <i class="fa fa-cog"></i> <i
																	class="fa fa-angle-down"></i> </a>
																<ul class="dropdown-menu pull-right">
																	<li><a href="javascript:;"> <i class="fa fa-check"></i>
																			Complete </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-pencil"></i>
																			Edit </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-trash-o"></i>
																			Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input class="liChild" value="" type="checkbox">
														</div>
														<div class="task-title">
															<span class="task-title-sp"> Kick-off Company CRM Mobile
																App Development </span> <span
																class="label label-sm label-info">Internal Products</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;"
																	data-toggle="dropdown" dropdown-menu-hover=""
																	data-close-others="true"> <i class="fa fa-cog"></i> <i
																	class="fa fa-angle-down"></i> </a>
																<ul class="dropdown-menu pull-right">
																	<li><a href="javascript:;"> <i class="fa fa-check"></i>
																			Complete </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-pencil"></i>
																			Edit </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-trash-o"></i>
																			Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input class="liChild" value="" type="checkbox">
														</div>
														<div class="task-title">
															<span class="task-title-sp"> Prepare Commercial Offer For
																SmartVision Website Rewamp </span> <span
																class="label label-sm label-danger">SmartVision</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;"
																	data-toggle="dropdown" dropdown-menu-hover=""
																	data-close-others="true"> <i class="fa fa-cog"></i> <i
																	class="fa fa-angle-down"></i> </a>
																<ul class="dropdown-menu pull-right">
																	<li><a href="javascript:;"> <i class="fa fa-check"></i>
																			Complete </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-pencil"></i>
																			Edit </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-trash-o"></i>
																			Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input class="liChild" value="" type="checkbox">
														</div>
														<div class="task-title">
															<span class="task-title-sp"> Sign-Off The Comercial
																Agreement With AutoSmart </span> <span
																class="label label-sm label-default">AutoSmart</span> <span
																class="task-bell"> <i class="fa fa-bell-o"></i> </span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;"
																	data-toggle="dropdown" dropdown-menu-hover=""
																	data-close-others="true"> <i class="fa fa-cog"></i> <i
																	class="fa fa-angle-down"></i> </a>
																<ul class="dropdown-menu pull-right">
																	<li><a href="javascript:;"> <i class="fa fa-check"></i>
																			Complete </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-pencil"></i>
																			Edit </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-trash-o"></i>
																			Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input class="liChild" value="" type="checkbox">
														</div>
														<div class="task-title">
															<span class="task-title-sp"> Company Staff Meeting </span>
															<span class="label label-sm label-success">Cruise</span>
															<span class="task-bell"> <i class="fa fa-bell-o"></i> </span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;"
																	data-toggle="dropdown" dropdown-menu-hover=""
																	data-close-others="true"> <i class="fa fa-cog"></i> <i
																	class="fa fa-angle-down"></i> </a>
																<ul class="dropdown-menu pull-right">
																	<li><a href="javascript:;"> <i class="fa fa-check"></i>
																			Complete </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-pencil"></i>
																			Edit </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-trash-o"></i>
																			Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li class="last-line">
														<div class="task-checkbox">
															<input class="liChild" value="" type="checkbox">
														</div>
														<div class="task-title">
															<span class="task-title-sp"> KeenThemes Investment
																Discussion </span> <span
																class="label label-sm label-warning">KeenThemes </span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;"
																	data-toggle="dropdown" dropdown-menu-hover=""
																	data-close-others="true"> <i class="fa fa-cog"></i> <i
																	class="fa fa-angle-down"></i> </a>
																<ul class="dropdown-menu pull-right">
																	<li><a href="javascript:;"> <i class="fa fa-check"></i>
																			Complete </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-pencil"></i>
																			Edit </a>
																	</li>
																	<li><a href="javascript:;"> <i class="fa fa-trash-o"></i>
																			Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
												</ul>
												<!-- END START TASK LIST -->
											</div>
											<div class="slimScrollBar"
												style="background: rgb(215, 220, 226) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 216.098px;"></div>
											<div class="slimScrollRail"
												style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
										</div>
									</div>
									<div class="task-footer">
										<div class="btn-arrow-link pull-right">
											<a href="javascript:;">See All Tasks</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
						<div class="col-md-6 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet light bordered">
								<div class="portlet-title tabbable-line">
									<div class="caption caption-md">
										<i class="icon-globe font-green hide"></i> <span
											class="caption-subject font-green bold uppercase">Feeds</span>
									</div>
									<ul class="nav nav-tabs">
										<li class="active"><a href="#" data-target="#tab_1_1"
											data-toggle="tab"> System </a>
										</li>
										<li><a href="#" data-target="#tab_1_2" data-toggle="tab">
												Activities </a>
										</li>
									</ul>
								</div>
								<div class="portlet-body">
									<!--BEGIN TABS-->
									<div class="tab-content">
										<div class="tab-pane active" id="tab_1_1">
											<div class="slimScrollDiv"
												style="position: relative; overflow: hidden; width: auto; height: 306px;">
												<div class="scroller"
													style="height: 306px; overflow: hidden; width: auto;"
													data-always-visible="1" data-rail-visible1="0"
													data-handle-color="#D7DCE2" data-initialized="1">
													<ul class="feeds">
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			You have 4 pending tasks. <span
																				class="label label-sm label-info"> Take action <i
																				class="fa fa-share"></i> </span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">Just now</div>
															</div>
														</li>
														<li><a href="javascript:;">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-sm label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">New version v1.4 just lunched!</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">20 mins</div>
																</div> </a>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-danger">
																			<i class="fa fa-bolt"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">Database server #12 overloaded.
																			Please fix the issue.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">24 mins</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">New order received and pending for
																			process.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">30 mins</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">New payment refund and pending
																			approval.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">40 mins</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-warning">
																			<i class="fa fa-plus"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">New member registered. Pending
																			approval.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">1.5 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			Web server hardware needs to be upgraded. <span
																				class="label label-sm label-default "> Overdue </span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">2 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">Prod01 database server is overloaded
																			90%.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">3 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-warning">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">New group created. Pending manager
																			review.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">5 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">Order payment failed.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">18 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">New application received.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">21 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">Dev90 web server restarted. Pending
																			overall system check.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">22 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">New member registered. Pending
																			approval</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">21 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">L45 Network failure. Schedule
																			maintenance.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">22 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">Order canceled with failed payment.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">21 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">Web-A2 clound instance created.
																			Schedule full scan.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">22 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">Member canceled. Schedule account
																			review.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">21 hours</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">New order received. Please take care
																			of it.</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">22 hours</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="slimScrollBar"
													style="background: rgb(215, 220, 226) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 146.078px;"></div>
												<div class="slimScrollRail"
													style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
											</div>
										</div>
										<div class="tab-pane" id="tab_1_2">
											<div class="slimScrollDiv"
												style="position: relative; overflow: hidden; width: auto; height: 337px;">
												<div class="scroller"
													style="height: 337px; overflow: hidden; width: auto;"
													data-always-visible="1" data-rail-visible1="0"
													data-handle-color="#D7DCE2" data-initialized="1">
													<ul class="feeds">
														<li><a href="javascript:;">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-sm label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">New user registered</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">Just now</div>
																</div> </a>
														</li>
														<li><a href="javascript:;">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-sm label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">New order received</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">10 mins</div>
																</div> </a>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-danger">
																			<i class="fa fa-bolt"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			Order #24DOP4 has been rejected. <span
																				class="label label-sm label-danger "> Take action <i
																				class="fa fa-share"></i> </span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">24 mins</div>
															</div>
														</li>
														<li><a href="javascript:;">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-sm label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">New user registered</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">Just now</div>
																</div> </a>
														</li>
														<li><a href="javascript:;">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-sm label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">New user registered</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">Just now</div>
																</div> </a>
														</li>
														<li><a href="javascript:;">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-sm label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">New user registered</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">Just now</div>
																</div> </a>
														</li>
														<li><a href="javascript:;">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-sm label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">New user registered</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">Just now</div>
																</div> </a>
														</li>
														<li><a href="javascript:;">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-sm label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">New user registered</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">Just now</div>
																</div> </a>
														</li>
														<li><a href="javascript:;">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-sm label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">New user registered</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">Just now</div>
																</div> </a>
														</li>
														<li><a href="javascript:;">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-sm label-success">
																				<i class="fa fa-bell-o"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">New user registered</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">Just now</div>
																</div> </a>
														</li>
													</ul>
												</div>
												<div class="slimScrollBar"
													style="background: rgb(215, 220, 226) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
												<div class="slimScrollRail"
													style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
											</div>
										</div>
									</div>
									<!--END TABS-->
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!-- BEGIN REGIONAL STATS PORTLET-->
							<div class="portlet light bordered ">
								<div class="portlet-title">
									<div class="caption">
										<i class="icon-share font-green"></i> <span
											class="caption-subject font-green bold uppercase">Recent
											Activities</span>
									</div>
									<div class="actions">
										<div class="btn-group">
											<a class="btn btn-sm btn-default btn-circle" href="#"
												data-toggle="dropdown" dropdown-menu-hover=""
												data-close-others="true"> Filter By <i
												class="fa fa-angle-down"></i> </a>
											<div
												class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
												<label> <input type="checkbox"> Finance</label> <label> <input
													checked="" type="checkbox"> Membership</label> <label> <input
													type="checkbox"> Customer Support</label> <label> <input
													checked="" type="checkbox"> HR</label> <label> <input
													type="checkbox"> System</label>
											</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen"
											href="#" data-original-title="" title=""> </a>
									</div>
								</div>
								<div class="portlet-body">
									<div class="slimScrollDiv"
										style="position: relative; overflow: hidden; width: auto; height: 300px;">
										<div class="scroller"
											style="height: 300px; overflow: hidden; width: auto;"
											data-always-visible="1" data-rail-visible="0"
											data-initialized="1">
											<ul class="feeds">
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-sm label-info">
																	<i class="fa fa-check"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc">
																	You have 4 pending tasks. <span
																		class="label label-sm label-warning "> Take action <i
																		class="fa fa-share"></i> </span>
																</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date">Just now</div>
													</div>
												</li>
												<li><a href="#">
														<div class="col1">
															<div class="cont">
																<div class="cont-col1">
																	<div class="label label-sm label-success">
																		<i class="fa fa-bar-chart-o"></i>
																	</div>
																</div>
																<div class="cont-col2">
																	<div class="desc">Finance Report for year 2013 has been
																		released.</div>
																</div>
															</div>
														</div>
														<div class="col2">
															<div class="date">20 mins</div>
														</div> </a>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-sm label-danger">
																	<i class="fa fa-user"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc">You have 5 pending membership that
																	requires a quick review.</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date">24 mins</div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-sm label-info">
																	<i class="fa fa-shopping-cart"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc">
																	New order received with <span
																		class="label label-sm label-success"> Reference
																		Number: DR23923 </span>
																</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date">30 mins</div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-sm label-success">
																	<i class="fa fa-user"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc">You have 5 pending membership that
																	requires a quick review.</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date">24 mins</div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-sm label-default">
																	<i class="fa fa-bell-o"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc">
																	Web server hardware needs to be upgraded. <span
																		class="label label-sm label-default "> Overdue </span>
																</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date">2 hours</div>
													</div>
												</li>
												<li><a href="#">
														<div class="col1">
															<div class="cont">
																<div class="cont-col1">
																	<div class="label label-sm label-default">
																		<i class="fa fa-briefcase"></i>
																	</div>
																</div>
																<div class="cont-col2">
																	<div class="desc">IPO Report for year 2013 has been
																		released.</div>
																</div>
															</div>
														</div>
														<div class="col2">
															<div class="date">20 mins</div>
														</div> </a>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-sm label-info">
																	<i class="fa fa-check"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc">
																	You have 4 pending tasks. <span
																		class="label label-sm label-warning "> Take action <i
																		class="fa fa-share"></i> </span>
																</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date">Just now</div>
													</div>
												</li>
												<li><a href="#">
														<div class="col1">
															<div class="cont">
																<div class="cont-col1">
																	<div class="label label-sm label-danger">
																		<i class="fa fa-bar-chart-o"></i>
																	</div>
																</div>
																<div class="cont-col2">
																	<div class="desc">Finance Report for year 2013 has been
																		released.</div>
																</div>
															</div>
														</div>
														<div class="col2">
															<div class="date">20 mins</div>
														</div> </a>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-sm label-default">
																	<i class="fa fa-user"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc">You have 5 pending membership that
																	requires a quick review.</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date">24 mins</div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-sm label-info">
																	<i class="fa fa-shopping-cart"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc">
																	New order received with <span
																		class="label label-sm label-success"> Reference
																		Number: DR23923 </span>
																</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date">30 mins</div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-sm label-success">
																	<i class="fa fa-user"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc">You have 5 pending membership that
																	requires a quick review.</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date">24 mins</div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-sm label-warning">
																	<i class="fa fa-bell-o"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc">
																	Web server hardware needs to be upgraded. <span
																		class="label label-sm label-default "> Overdue </span>
																</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date">2 hours</div>
													</div>
												</li>
												<li><a href="#">
														<div class="col1">
															<div class="cont">
																<div class="cont-col1">
																	<div class="label label-sm label-info">
																		<i class="fa fa-briefcase"></i>
																	</div>
																</div>
																<div class="cont-col2">
																	<div class="desc">IPO Report for year 2013 has been
																		released.</div>
																</div>
															</div>
														</div>
														<div class="col2">
															<div class="date">20 mins</div>
														</div> </a>
												</li>
											</ul>
										</div>
										<div class="slimScrollBar"
											style="background: rgb(187, 187, 187) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 181.087px;"></div>
										<div class="slimScrollRail"
											style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
									</div>
									<div class="scroller-footer">
										<div class="btn-arrow-link pull-right">
											<a href="#">See All Records</a> <i class="icon-arrow-right"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- END REGIONAL STATS PORTLET-->
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- BEGIN PORTLET-->
							<div class="portlet light bordered">
								<div class="portlet-title">
									<div class="caption caption-md">
										<i class="icon-bar-chart font-green"></i> <span
											class="caption-subject font-green bold uppercase">Customer
											Support</span> <span class="caption-helper">45 pending</span>
									</div>
									<div class="inputs">
										<div class="portlet-input input-inline input-small ">
											<div class="input-icon right">
												<i class="icon-magnifier"></i> <input
													class="form-control form-control-solid input-circle"
													placeholder="search..." type="text">
											</div>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div class="slimScrollDiv"
										style="position: relative; overflow: hidden; width: auto; height: 329px;">
										<div class="scroller"
											style="height: 329px; overflow: hidden; width: auto;"
											data-always-visible="1" data-rail-visible1="0"
											data-handle-color="#D7DCE2" data-initialized="1">
											<div class="general-item-list">
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic rounded"
																src="../assets/pages/media/users/avatar4.jpg"> <a
																href="" class="item-name primary-link">Nick Larson</a> <span
																class="item-label">3 hrs ago</span>
														</div>
														<span class="item-status"> <span
															class="badge badge-empty badge-success"></span> Open</span>
													</div>
													<div class="item-body">Lorem ipsum dolor sit amet,
														consectetuer adipiscing elit, sed diam nonummy nibh
														euismod tincidunt ut laoreet dolore magna aliquam erat
														volutpat.</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic rounded"
																src="../assets/pages/media/users/avatar3.jpg"> <a
																href="" class="item-name primary-link">Mark</a> <span
																class="item-label">5 hrs ago</span>
														</div>
														<span class="item-status"> <span
															class="badge badge-empty badge-warning"></span> Pending</span>
													</div>
													<div class="item-body">Lorem ipsum dolor sit amet,
														consectetuer adipiscing elit, sed diam nonummy nibh
														euismod tincidunt ut laoreet dolore magna aliquam erat
														volutpat tincidunt ut laoreet.</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic rounded"
																src="../assets/pages/media/users/avatar6.jpg"> <a
																href="" class="item-name primary-link">Nick Larson</a> <span
																class="item-label">8 hrs ago</span>
														</div>
														<span class="item-status"> <span
															class="badge badge-empty badge-primary"></span> Closed</span>
													</div>
													<div class="item-body">Lorem ipsum dolor sit amet,
														consectetuer adipiscing elit, sed diam nonummy nibh.</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic rounded"
																src="../assets/pages/media/users/avatar7.jpg"> <a
																href="" class="item-name primary-link">Nick Larson</a> <span
																class="item-label">12 hrs ago</span>
														</div>
														<span class="item-status"> <span
															class="badge badge-empty badge-danger"></span> Pending</span>
													</div>
													<div class="item-body">Consectetuer adipiscing elit Lorem
														ipsum dolor sit amet, consectetuer adipiscing elit, sed
														diam nonummy nibh euismod tincidunt ut laoreet dolore
														magna aliquam erat volutpat.</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic rounded"
																src="../assets/pages/media/users/avatar9.jpg"> <a
																href="" class="item-name primary-link">Richard Stone</a>
															<span class="item-label">2 days ago</span>
														</div>
														<span class="item-status"> <span
															class="badge badge-empty badge-danger"></span> Open</span>
													</div>
													<div class="item-body">Lorem ipsum dolor sit amet,
														consectetuer adipiscing elit, ut laoreet dolore magna
														aliquam erat volutpat.</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic rounded"
																src="../assets/pages/media/users/avatar8.jpg"> <a
																href="" class="item-name primary-link">Dan</a> <span
																class="item-label">3 days ago</span>
														</div>
														<span class="item-status"> <span
															class="badge badge-empty badge-warning"></span> Pending</span>
													</div>
													<div class="item-body">Lorem ipsum dolor sit amet, sed diam
														nonummy nibh euismod tincidunt ut laoreet dolore magna
														aliquam erat volutpat.</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic rounded"
																src="../assets/pages/media/users/avatar2.jpg"> <a
																href="" class="item-name primary-link">Larry</a> <span
																class="item-label">4 hrs ago</span>
														</div>
														<span class="item-status"> <span
															class="badge badge-empty badge-success"></span> Open</span>
													</div>
													<div class="item-body">Lorem ipsum dolor sit amet,
														consectetuer adipiscing elit, sed diam nonummy nibh
														euismod tincidunt ut laoreet dolore magna aliquam erat
														volutpat.</div>
												</div>
											</div>
										</div>
										<div class="slimScrollBar"
											style="background: rgb(215, 220, 226) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 153.316px;"></div>
										<div class="slimScrollRail"
											style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
					</div>
				</div>
				<!-- END MAIN CONTENT -->
				<!-- BEGIN MAIN JS & CSS -->
				<script class="ng-scope">
    Dashboard.init();
</script>
				<!-- BEGIN MAIN JS & CSS -->
			</div>
			<!-- END ACTUAL CONTENT -->
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
	<?php echo $__env->make("dashbord.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<link
	href="<?= asset('assets/global/plugins/morris/morris.css') ?>"
	rel="stylesheet" type="text/css" />
<script
	src="<?= asset('app/controllers/admin/county.js') ?>"></script>
<script
	src="<?= asset('assets/global/plugins/morris/morris.min.js') ?>"></script>
<script
	src="<?= asset('assets/global/plugins/morris/raphael-min.js') ?>"></script>
<script
	src="<?= asset('assets/global/plugins/jquery.sparkline.min.js') ?>"></script>
<script
	src="<?= asset('assets/pages/scripts/dashboard.min.js') ?>"></script>
<script
	src="<?= asset('js/DashboardController.js') ?>"></script>
</body>

</html>
