<!DOCTYPE html>

<!--[if IE 8]> 
<html lang="en" class="ie8 no-js">
   <![endif]-->
<!--[if IE 9]> 
   <html lang="en" class="ie9 no-js">
      <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<body
	class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md"
	ng-controller="AddRetailProductCtrl">
	<!-- BEGIN HEADER -->
	@include("dashboard.header");
	<!-- END HEADER -->
	<!-- BEGIN HEADER & CONTENT DIVIDER -->
	<div class="clearfix"></div>
	<!-- END HEADER & CONTENT DIVIDER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		@include("dashboard.sidebar");
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<!-- BEGIN CONTENT BODY -->
			<div class="page-content">
				<!-- BEGIN PAGE HEAD-->
				<div class="page-head">
					<!-- BEGIN PAGE TITLE -->
					<div class="page-title">
						<h1>Select Category</h1>
					</div>
					<!-- END PAGE TITLE -->
					<!-- BEGIN PAGE TOOLBAR -->
					<!-- END PAGE TOOLBAR -->
				</div>
				<!-- END PAGE HEAD-->
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
				<!-- BEGIN PAGE BASE CONTENT -->
				<div class="row">
					<div class="col-md-12">
						<div class="portlet light bordered" id="form_wizard_1">
							<div class="portlet-title">
								<div class="caption">
									<i class=" icon-layers font-red"></i> <span
										class="caption-subject font-red bold uppercase"> Select
										Category - <span class="step-title"> Step 1 of 4 </span> </span>
								</div>
							</div>
							<div class="portlet-body form">
								<form class="form-horizontal" action="#" id="submit_form"
									method="POST">
									<div class="form-wizard ">
										<div class="form-body ">
											<ul class="nav nav-pills nav-justified steps">
												<li><a href="#tab1" data-toggle="tab" class="step"> <span
														class="number"> 1 </span> <span class="desc"> <i
															class="fa fa-check"></i> Select Category </span> </a>
												</li>
												<li><a href="#tab2" data-toggle="tab" class="step"> <span
														class="number"> 2 </span> <span class="desc"> <i
															class="fa fa-check"></i> Fill In Product Ingormation </span>
												</a>
												</li>
												<li><a href="#tab3" data-toggle="tab" class="step active"> <span
														class="number"> 3 </span> <span class="desc"> <i
															class="fa fa-check"></i> Waiting for approved </span> </a>
												</li>
												<li><a href="#tab4" data-toggle="tab" class="step"> <span
														class="number"> 4 </span> <span class="desc"> <i
															class="fa fa-check"></i> Confirm </span> </a>
												</li>
											</ul>
											<div id="bar" class="progress progress-striped"
												role="progressbar">
												<div class="progress-bar progress-bar-success"></div>
											</div>
											<div class="tab-content">
												<div class="alert alert-danger display-none">
													<button class="close" data-dismiss="alert"></button>
													You have some form errors. Please check below.
												</div>
												<div class="alert alert-success display-none">
													<button class="close" data-dismiss="alert"></button>
													Your form validation is successful!
												</div>
												<div class="tab-pane active" id="tab1"
													ng-show="customer.currentTap === 1">
													<div class="portlet light bordered">
														<form class="form-horizontal" name="productform"
															action="#" id="submit_form" method="POST">
															<div class="portlet-title">
																<div class="caption font-green-sharp">
																	<i class="icon-settings font-green-sharp"></i> <span
																		class="caption-subject bold uppercase">Select Category</span>
																	<span class="caption-helper hide"></span>
																</div>
															</div>
															<div class="portlet-body">

																<div class="row" data-selectsplitter-wrapper-selector="">
																	<div class="col-xs-12 col-sm-3">
																		<select ng-model="customer.MainCatagary"
																			ng-options="obj.id as obj.maincatagary for obj in maincatagaris"
																			ng-change="getMainCatagaryCatagarys()"
																			class="form-control" ng-required="true"
																			id="maincatagary"
																			data-selectsplitter-secondselect-selector="" size="8"></select>
																	</div>
																	<div class="col-xs-12 col-sm-3"
																		ng-show="(customer.MainCatagary)">
																		<select ng-model="customer.Catagary"
																			ng-options="x.Id as x.catagary for x in catagaries"
																			ng-change="getCatagaryCities()" class="form-control"
																			ng-required="true" id="catagary"
																			data-selectsplitter-secondselect-selector="" size="8"></select>
																	</div>
																	<div class="col-xs-12 col-sm-3"
																		ng-show="(customer.Catagary)">
																		<select ng-model="customer.SubCatagary"
																			ng-options="x.Id as x.subcatagary for x in subcatagaries"
																			class="form-control" ng-required="true"
																			id="subcatagary"
																			data-selectsplitter-secondselect-selector="" size="8"
																			required></select>
																	</div>
																</div>

															</div>
															Categories Selected: [[customer.MainCatagary]]
															[[customer.Catagary]] [[customer.SubCatagary]]
															<!--<div class="row">
          <div class="col-md-offset-3 col-md-9">
              <button type="button" ng-disabled="(customer.Catagary == '' || customer.SubCatagary == '')" ng-click="navTab(2)" class="btn btn-info">Continue</button>
          </div>
          </div>-->
															<div class="row">
																<div class="col-md-offset-3 col-md-9">
																	<!--<button type="button" ng-disabled="!(productform.MainCatagary.$valid && productform.Catagary.$valid && productform.SubCatagary.$valid)" ng-click="navTab(2)" class="btn btn-info">Continue</button>
-->
																	<button type="button" ng-click="navTab(2)"
																		class="btn btn-info">Continue</button>
																</div>
															</div>
														</form>
													</div>
												</div>
												<div class="tab-pane" id="tab2"
													ng-show="customer.currentTap === 2">
													<span class="col-md-9">
														<div class="portlet light bordered">
															<div class="portlet-title">
																<div class="caption font-green-sharp">
																	<i class="icon-settings font-green-sharp"></i> <span
																		class="caption-subject bold uppercase">Product
																		Information</span> <span class="caption-helper hide"></span>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row">
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3"> Product Name <span
																			class="required"> * </span> </label>

																		<div class="col-md-4">
																			<input type="text" class="form-control"
																				name="provideName" ng-model="provideName"
																				ng-minlength="2" ng-maxlength="128" required /> <span
																				ng-show="" class="help-block"> Product Name </span>
																			<span ng-show="regform.provideName.$error.minlength"
																				class="help-block">Name have minimum 2 characters</span>
																			<span ng-show="regform.provideName.$error.maxlength"
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3"> Correnct Type <span
																			class="required"> * </span> </label>

																		<div class="col-md-4">
																			<input type="text" class="form-control"
																				name="correnctType" ng-model="correnctType"
																				ng-minlength="2" ng-maxlength="128" required /> <span
																				ng-show="" class="help-block"> Product Name </span>
																			<span ng-show="regform.provideName.$error.minlength"
																				class="help-block">Name have minimum 2 characters</span>
																			<span ng-show="regform.provideName.$error.maxlength"
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3"> Product sale
																			price <span class="required"> * </span>&nbsp;&nbsp;&nbsp;(inclusive
																			of all taxes) </label>

																		<div class="col-md-4">
																			<input type="text" class="form-control"
																				name="provideName" ng-model="provideName"
																				ng-minlength="2" ng-maxlength="128" required /> <span
																				ng-show="regform.provideName.$error.required || regform.provideName.$valid"
																				class="help-block"> Product sale price </span> <span
																				ng-show="regform.provideName.$error.minlength"
																				class="help-block">Name have minimum 2 characters</span>
																			<span ng-show="regform.provideName.$error.maxlength"
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																		<label class="mt-checkbox"> <input
																			id="inlineCheckbox1" value="option1" type="checkbox"
																			ng-model="provideNameCheck"> Include <span></span> </label>
																	</div>

																	<div class="form-group" ng-hide="provideNameCheck">
																		<label class="control-label col-md-3"> Product Offer
																			Price <span class="required"> * </span>&nbsp;&nbsp;&nbsp;(inclusive
																			of all taxes) </label>
																		<div class="col-md-4">
																			<input type="text" class="form-control"
																				name="provideName" ng-model="provideOffer"
																				ng-minlength="2" ng-maxlength="128" required /> <span
																				ng-show="regform.provideName.$error.required || regform.provideName.$valid"
																				class="help-block"> Product sale price </span> <span
																				ng-show="regform.provideName.$error.minlength"
																				class="help-block">Name have minimum 2 characters</span>
																			<span ng-show="regform.provideName.$error.maxlength"
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																	<div class="form-group" ng-hide="provideNameCheck">
																		<label class="control-label col-md-3"> Product Offer
																			In Percentage <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input type="text" class="form-control"
																				name="provideName" ng-model="productPercentage"
																				ng-minlength="2" ng-maxlength="128" required /> <span
																				ng-show="regform.provideName.$error.required || regform.provideName.$valid"
																				class="help-block"> Product Offer </span> <span
																				ng-show="regform.provideName.$error.minlength"
																				class="help-block">Name have minimum 2 characters</span>
																			<span ng-show="regform.provideName.$error.maxlength"
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="control-label col-md-3">Offer Validity
																			Period <span class="required"> * </span> </label>
																		<div class="mt-radio-inline"
																			ng-init="limitedUnlimited = limited">
																			<label class="mt-radio"> <input
																				ng-model="limitedUnlimited" value="limited"
																				type="radio"> Limited <span></span> </label> <label
																				class="mt-radio"> <input ng-model="limitedUnlimited"
																				value="unlimited" type="radio"> Un Limited <span></span>
																			</label>

																		</div>
																	</div>
																	<div class="form-group"
																		ng-show="limitedUnlimited == 'limited'">
																		<label class="control-label col-md-3"> Product Offer
																			Valied From <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input type="text" class="form-control"
																				name="provideName" ng-model="valiedFrom"
																				ng-minlength="2" ng-maxlength="128" required /> <span
																				ng-show="" class="help-block"> Product Offer </span>
																			<span ng-show="" class="help-block">Name have minimum
																				2 characters</span> <span ng-show=""
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																	<div class="form-group" ng-class=""
																		ng-show="limitedUnlimited == 'limited'">
																		<label class="control-label col-md-3"> Product Offer
																			Valied To <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input type="text" class="form-control"
																				name="provideName" ng-model="valiedTo"
																				ng-minlength="2" ng-maxlength="128" required /> <span
																				ng-show="regform.provideName.$error.required || regform.provideName.$valid"
																				class="help-block"> Product Offer </span> <span
																				ng-show="regform.provideName.$error.minlength"
																				class="help-block">Name have minimum 2 characters</span>
																			<span ng-show="regform.provideName.$error.maxlength"
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Product taxes <span
																			class="required"> * </span> </label> <span
																			class="col-md-2"> <input type="text"
																			class="form-control" name="provideKeyword1"
																			ng-model="provideKeyword1" ng-minlength="4"
																			placeholder="Service Charges" required /> <span
																			ng-show="" class="help-block"> Product Keyword </span>
																			<span
																			ng-show="regform.provideKeyword1.$error.minlength"
																			class="help-block">Name have minimum 4 characters</span>
																		</span> <span class="col-md-2 show-key-words"> <input
																			type="text" class="form-control"
																			name="provideKeyword2" ng-model="provideKeyword2"
																			ng-minlength="4" placeholder="5%" required /> <span
																			pan ng-show="" class="help-block"> Product Keyword </span>
																			<span ng-show="" class="help-block">Name have minimum
																				4 characters</span> </span> <span
																			class="col-md-2 show-key-words"> <input type="text"
																			class="form-control" name="provideKeyword3"
																			ng-model="provideKeyword3" ng-minlength="4"
																			placeholder="Service Type" required /> <span pan
																			ng-show="" class="help-block"> Product Keyword </span>
																			<span ng-show="" class="help-block">Name have minimum
																				4 characters</span> </span> <a onClick=""
																			ng-model="addKeyWords">Add key words</a>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3"> </label> <span
																			class="col-md-2"> <input type="text"
																			class="form-control" name="provideKeyword1"
																			ng-model="provideKeyword1" ng-minlength="4"
																			placeholder="Service Charges" required /> <span
																			ng-show="" class="help-block"> Product Keyword </span>
																			<span ng-show="" class="help-block">Name have minimum
																				4 characters</span> </span> <span
																			class="col-md-2 show-key-words"> <input type="text"
																			class="form-control" name="provideKeyword2"
																			ng-model="provideKeyword2" ng-minlength="4"
																			placeholder="5%" required /> <span pan ng-show=""
																			class="help-block"> Product Keyword </span> <span
																			ng-show="" class="help-block">Name have minimum 4
																				characters</span> </span> <span
																			class="col-md-2 show-key-words"> <input type="text"
																			class="form-control" name="provideKeyword3"
																			ng-model="provideKeyword3" ng-minlength="4"
																			placeholder="Service Type" required /> <span pan
																			ng-show="" class="help-block"> Product Keyword </span>
																			<span ng-show="" class="help-block">Name have minimum
																				4 characters</span> </span>
																	</div>




																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Product
																			discription <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<textarea class="form-control" rows="3"></textarea>
																		</div>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Tearms and
																			Conditions <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<textarea class="form-control" rows="3"></textarea>
																		</div>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Product Return
																			Policy <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<textarea class="form-control" rows="3"></textarea>
																		</div>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Product Warenty

																			<span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<textarea class="form-control" rows="3"></textarea>
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="control-label col-md-3">Product Package
																			Quantity Details <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input class="form-control" name="BrandName"
																				ng-model="packageQuantity" ng-minlength=""
																				ng-maxlength="" required="" aria-required="true"
																				aria-invalid="false"
																				aria-describedby="provideName-error" type="text"> <span
																				ng-show="" class="help-block"> Package Quantity
																				Details </span> <span ng-show="" class="help-block">Name
																				have minimum 2 characters</span> <span ng-show=""
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Product Keyword
																			<span class="required"> * </span> </label> <span
																			class="col-md-2"> <input type="text"
																			class="form-control" name="provideKeyword1"
																			ng-model="provideKeyword1" ng-minlength="4"
																			placeholder="e.g : Byke" required /> <span
																			ng-show="regform.provideKeyword1.$error.required || regform.provideKeyword1.$valid"
																			class="help-block"> Product Keyword </span> <span
																			ng-show="regform.provideKeyword1.$error.minlength"
																			class="help-block">Name have minimum 4 characters</span>
																		</span> <span class="col-md-2 show-key-words"> <input
																			type="text" class="form-control"
																			name="provideKeyword2" ng-model="provideKeyword2"
																			ng-minlength="4" placeholder="e.g : Car" required />
																			<span pan
																			ng-show="regform.provideKeyword2.$error.required || regform.provideKeyword2.$valid"
																			class="help-block"> Product Keyword </span> <span
																			ng-show="regform.provideKeyword2.$error.minlength"
																			class="help-block">Name have minimum 4 characters</span>
																		</span> <span class="col-md-2 show-key-words"> <input
																			type="text" class="form-control"
																			name="provideKeyword3" ng-model="provideKeyword3"
																			ng-minlength="4" placeholder="e.g : Bicycle" required />
																			<span pan
																			ng-show="regform.provideKeyword3.$error.required || regform.provideKeyword3.$valid"
																			class="help-block"> Product Keyword </span> <span
																			ng-show="regform.provideKeyword3.$error.minlength"
																			class="help-block">Name have minimum 4 characters</span>
																		</span> <a onClick="" ng-model="addKeyWords">Add key
																			words</a>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3"> </label> <span
																			class="col-md-2"> <input type="text"
																			class="form-control" name="provideKeyword1"
																			ng-model="provideKeyword1" ng-minlength="4"
																			placeholder="e.g : Byke" required /> <span
																			ng-show="regform.provideKeyword1.$error.required || regform.provideKeyword1.$valid"
																			class="help-block"> Product Keyword </span> <span
																			ng-show="regform.provideKeyword1.$error.minlength"
																			class="help-block">Name have minimum 4 characters</span>
																		</span> <span class="col-md-2 show-key-words"> <input
																			type="text" class="form-control"
																			name="provideKeyword2" ng-model="provideKeyword2"
																			ng-minlength="4" placeholder="e.g : Car" required />
																			<span pan
																			ng-show="regform.provideKeyword2.$error.required || regform.provideKeyword2.$valid"
																			class="help-block"> Product Keyword </span> <span
																			ng-show="regform.provideKeyword2.$error.minlength"
																			class="help-block">Name have minimum 4 characters</span>
																		</span> <span class="col-md-2 show-key-words"> <input
																			type="text" class="form-control"
																			name="provideKeyword3" ng-model="provideKeyword3"
																			ng-minlength="4" placeholder="e.g : Bicycle" required />
																			<span pan
																			ng-show="regform.provideKeyword3.$error.required || regform.provideKeyword3.$valid"
																			class="help-block"> Product Keyword </span> <span
																			ng-show="regform.provideKeyword3.$error.minlength"
																			class="help-block">Name have minimum 4 characters</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="portlet light bordered">
															<div class="portlet-title">
																<div class="caption font-green-sharp">
																	<i class="icon-settings font-green-sharp"></i> <span
																		class="caption-subject bold uppercase">Product Images</span>
																	<span class="caption-helper hide"></span>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-3"> Product Photo <span
																	class="required" aria-required="true"> * </span> </label>
																<div class="fileinput fileinput-new"
																	data-provides="fileinput">

																	<span class="btn default btn-file"> <span
																		class="fileinput-new"> Select image </span> <span
																		class="fileinput-exists"> Change </span> <input
																		name="..." type="file"> </span> <a href="javascript:;"
																		class="btn default fileinput-exists"
																		data-dismiss="fileinput"> Remove </a>

																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-3"></label> <span
																	class="fileinput-new thumbnail col-md-4"
																	style="width: 100px; height: 78px;"> <img
																	src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
																	alt=""> </span> <span
																	class="fileinput-new thumbnail col-md-4"
																	style="width: 100px; height: 78px;"> <img
																	src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
																	alt=""> </span> <span
																	class="fileinput-new thumbnail col-md-4"
																	style="width: 100px; height: 78px;"> <img
																	src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
																	alt=""> </span>
															</div>
														</div>
														<div class="portlet light bordered">
															<div class="portlet-title">
																<div class="caption font-green-sharp">
																	<i class="icon-settings font-green-sharp"></i> <span
																		class="caption-subject bold uppercase">Product Details</span>
																	<span class="caption-helper hide"></span>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row">
																	<div class="form-group">
																		<label class="control-label col-md-3">Brand Number <span
																			class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input class="form-control" name="BrandName"
																				ng-model="modelName" ng-minlength="" ng-maxlength=""
																				required="" aria-required="true"
																				aria-invalid="false"
																				aria-describedby="provideName-error" type="text"> <span
																				ng-show="" class="help-block"> Brand Name </span> <span
																				ng-show="" class="help-block">Name have minimum 2
																				characters</span> <span ng-show=""
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Brand Model Name
																			<span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input type="text" class="form-control"
																				name="provideName" ng-model="brandModelName"
																				ng-minlength="2" ng-maxlength="128" required /> <span
																				ng-show="" class="help-block"> Brand Model Name </span>
																			<span ng-show="" class="help-block">Name have minimum
																				2 characters</span> <span ng-show=""
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Featurs <span
																			class="required"> * </span> </label>
																		<div class="mt-checkbox-inline">
																			<label class="mt-checkbox"> <input
																				id="inlineCheckbox1" value="option1" type="checkbox">
																				Waterproof <span></span> </label> <label
																				class="mt-checkbox"> <input id="inlineCheckbox2"
																				value="option2" type="checkbox"> Quick Dry <span></span>
																			</label> <label class="mt-checkbox"> <input
																				id="inlineCheckbox3" value="option3" type="checkbox">
																				Plus Size <span></span> </label> <label
																				class="mt-checkbox"> <input id="inlineCheckbox3"
																				value="option3" type="checkbox" ng-model="others">
																				Others <span></span> </label>

																		</div>
																	</div>
																	<div class="form-group" ng-show="others">
																		<label class="control-label col-md-3"></label>
																		<div class="col-md-2">
																			<input type="text" class="form-control"
																				name="provideName" ng-model="" ng-minlength=""
																				ng-maxlength="" required />

																		</div>
																	</div>

																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Technics <span
																			class="required"> * </span> </label>
																		<div class="col-md-4">
																			<select class="form-control">
																				<option>Option 1</option>
																				<option>Option 2</option>
																				<option>Option 3</option>
																				<option>Option 4</option>
																				<option>Option 5</option>
																			</select>
																		</div>
																	</div>



																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">More Details <span
																			class="required" aria-required="true"> * </span> </label>
																		<span class="col-md-2"> <input
																			class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-minlength"
																			name="provideKeyword1" ng-model="moreDetails1"
																			ng-minlength="" placeholder="e.g : Byke" required=""
																			aria-required="true" type="text"> <span ng-show=""
																			class="help-block ng-hide"> Product More Details </span>
																			<span ng-show="">Name have minimum 4 characters</span>
																		</span> <span class="col-md-2 show-key-words"> <input
																			class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-minlength"
																			name="provideKeyword2" ng-model="moreDetails2"
																			ng-minlength="" placeholder="e.g : Car" required=""
																			aria-required="true" type="text"> <span pan=""
																			ng-show="" class="help-block ng-hide"> Product More
																				Details </span> <span ng-show=""
																			class="help-block ng-hide">Name have minimum 4
																				characters</span> </span> Please fill in both
																		attribute name and value (e.g., Color: Red)
																	</div>

																</div>
															</div>
														</div>
														<div class="portlet light bordered">
															<div class="portlet-title">
																<div class="caption font-green-sharp">
																	<i class="icon-settings font-green-sharp"></i> <span
																		class="caption-subject bold uppercase">Stalk Details</span>
																	<span class="caption-helper hide"></span>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row" data-selectsplitter-wrapper-selector="">
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Stalk In Hand <span
																			class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input type="text" class="form-control" name=""
																				ng-model="stalninHand" ng-minlength="2"
																				ng-maxlength="" required />
																		</div>
																	</div>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row" data-selectsplitter-wrapper-selector="">
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Stalk
																			Notifications <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input type="text" class="form-control" name=""
																				ng-model="stalninHand" ng-minlength="2"
																				ng-maxlength="" required />
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="portlet light bordered">
															<div class="portlet-title">
																<div class="caption font-green-sharp">
																	<i class="icon-settings font-green-sharp"></i> <span
																		class="caption-subject bold uppercase">Logistics
																		Information</span> <span class="caption-helper hide"></span>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row" data-selectsplitter-wrapper-selector="">
																	<div class="form-group">
																		<label class="control-label col-md-3">Service Chaarges

																			<span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input class="form-control" name="serviceCharges"
																				ng-model="serviceCharges" ng-minlength=""
																				ng-maxlength="" required="" aria-required="true"
																				aria-invalid="false"
																				aria-describedby="provideName-error" type="text"> <span
																				ng-show="" class="help-block"> Service Chaarges </span>
																			<span ng-show="" class="help-block">Name have minimum
																				2 characters</span> <span ng-show=""
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row" data-selectsplitter-wrapper-selector="">
																	<div class="form-group">
																		<label class="control-label col-md-3">Product Weight <span
																			class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input class="form-control" name="Product Weight"
																				ng-model="productWeight" ng-minlength=""
																				ng-maxlength="" required="" aria-required="true"
																				aria-invalid="false"
																				aria-describedby="provideName-error" type="text"> <span
																				ng-show="" class="help-block"> Product Weight </span>
																			<span ng-show="" class="help-block">Name have minimum
																				2 characters</span> <span ng-show=""
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="portlet-body">
																<div class="row" data-selectsplitter-wrapper-selector="">
																	<div class="form-group">
																		<label class="control-label col-md-3">local delevary
																			caharges <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input class="form-control" name="Product Weight"
																				ng-model="localDelevaryCaharges" ng-minlength=""
																				ng-maxlength="" required="" aria-required="true"
																				aria-invalid="false"
																				aria-describedby="provideName-error" type="text"> <span
																				ng-show="" class="help-block"> local delevary
																				caharges </span> <span ng-show="" class="help-block">Name
																				have minimum 2 characters</span> <span ng-show=""
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row" data-selectsplitter-wrapper-selector="">
																	<div class="form-group">
																		<label class="control-label col-md-3">local postal
																			cods <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input class="form-control" name="Product Weight"
																				ng-model="localPostalCods" ng-minlength=""
																				ng-maxlength="" required="" aria-required="true"
																				aria-invalid="false"
																				aria-describedby="provideName-error" type="text"> <span
																				ng-show="" class="help-block"> local postal cods</span>
																			<span ng-show="" class="help-block">Name have minimum
																				2 characters</span> <span ng-show=""
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row" data-selectsplitter-wrapper-selector="">
																	<div class="form-group">
																		<label class="control-label col-md-3">Other places
																			delevery charges <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input class="form-control" name="Product Weight"
																				ng-model="otherPlacesDeleveryCharges"
																				ng-minlength="" ng-maxlength="" required=""
																				aria-required="true" aria-invalid="false"
																				aria-describedby="provideName-error" type="text"> <span
																				ng-show="" class="help-block"> Other Places Delevery
																				Charges</span> <span ng-show="" class="help-block">Name
																				have minimum 2 characters</span> <span ng-show=""
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row" data-selectsplitter-wrapper-selector="">
																	<div class="form-group">
																		<label class="control-label col-md-3">Other Postal
																			Cods <span class="required"> * </span> </label>
																		<div class="col-md-4">
																			<input class="form-control" name="Product Weight"
																				ng-model="otherPostalCods" ng-minlength=""
																				ng-maxlength="" required="" aria-required="true"
																				aria-invalid="false"
																				aria-describedby="provideName-error" type="text"> <span
																				ng-show="" class="help-block"> Other Postal Cods
																				Charges</span> <span ng-show="" class="help-block">Name
																				have minimum 2 characters</span> <span ng-show=""
																				class="help-block">Name have maximum 128 characters</span>
																		</div>
																	</div>
																</div>
															</div>


														</div>
														<div class="portlet light bordered">
															<div class="portlet-title">
																<div class="caption font-green-sharp">
																	<i class="icon-settings font-green-sharp"></i> <span
																		class="caption-subject bold uppercase">Product Group</span>
																	<span class="caption-helper hide"></span>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row" data-selectsplitter-wrapper-selector="">
																	<div class="form-group" ng-class="">
																		<label class="control-label col-md-3">Product Group <span
																			class="required" aria-required="true"> * </span> </label>
																		<div class="col-md-4">
																			<select class="form-control">
																				<option value="Option 1">Option 1</option>
																				<option value="Option 2">Option 2</option>
																				<option value="Option 3">Option 3</option>
																				<option value="Option 4">Option 4</option>
																				<option value="Option 5">Option 5</option>
																			</select>
																		</div>
																	</div>
																</div>
															</div>
														</div> </span> <span class="col-md-3">
														<div class="portlet light bordered">
															<div class="portlet-title">
																<div class="caption font-green-sharp">
																	<i class="icon-settings font-green-sharp"></i> <span
																		class="caption-subject bold uppercase">SEO Steps</span>
																	<span class="caption-helper hide"></span>
																</div>
															</div>
															<div class="portlet-body">
																<div class="row" data-selectsplitter-wrapper-selector="">
																	Title,Discription,Key Words</div>
															</div>
														</div> </span>

													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="button" ng-click="navTab(1)"
																class="btn btn-info">Back</button>
															<button type="button" ng-click="navTab(3)"
																ng-disabled="!(!regComform.$error.required && !regComform.$error.pattern && !regComform.$error.maxlength && !regComform.$error.minlength)"
																class="btn btn-info">Continue</button>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab3"
													ng-show="customer.currentTap === 3">
													3
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="button" ng-click="navTab(2)"
																class="btn btn-info">Back</button>
															<button type="button" ng-click="navTab(4)"
																ng-disabled="!(!regComform.$error.required && !regComform.$error.pattern && !regComform.$error.maxlength && !regComform.$error.minlength)"
																class="btn btn-info">Continue</button>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab4"
													ng-show="customer.currentTap === 4">
													4
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="button" ng-click="navTab(3)"
																class="btn btn-info">Back</button>
															<button type="button" ng-click="navTab(5)"
																ng-disabled="!(!regComform.$error.required && !regComform.$error.pattern && !regComform.$error.maxlength && !regComform.$error.minlength)"
																class="btn btn-info">Continue</button>
														</div>
													</div>
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
		<!-- BEGIN QUICK SIDEBAR -->
		<a href="javascript:;" class="page-quick-sidebar-toggler"> <i
			class="icon-login"></i> </a>
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	@include("dashboard.footer")
	<!-- END FOOTER -->
	<!-- BEGIN QUICK NAV -->
	<div class="quick-nav-overlay"></div>
	<!-- END QUICK NAV -->
	<!--[if lt IE 9]>
            <![endif]-->
	<!-- BEGIN CORE PLUGINS -->
	<script
		src="<?= asset('app/controllers/dashboard/addRetailProductController.js') ?>"
		type="text/javascript"></script>
</body>
</html>
