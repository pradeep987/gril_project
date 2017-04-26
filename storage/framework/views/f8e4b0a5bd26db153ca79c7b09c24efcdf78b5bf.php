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
    <link href="<?= asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= asset('assets/global/css/components.min.css') ?>" rel="stylesheet" id="style_components" type="text/css" />    
<body
	class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo"
	ng-controller="AddRetailProductCtrl">
	<!-- BEGIN HEADER -->
	<?php echo $__env->make("dashboard.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
	<!-- END HEADER -->
	<!-- BEGIN HEADER & CONTENT DIVIDER -->
	<div class="clearfix"></div>
	<!-- END HEADER & CONTENT DIVIDER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<?php echo $__env->make("dashboard.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
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
															class="fa fa-check"></i> Select Category</span> </a>
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
                                                    <form class="form-horizontal" name="productInformation" action="#" id="submit_form" method="POST">
													<div class="col-md-9">
														<div class="portlet light bordered">
                                                   <div class="portlet-title">
                                                      <div class="caption font-green-sharp">
                                                         <i class="icon-settings font-green-sharp"></i>
                                                         <span class="caption-subject bold uppercase">Product Information</span>
                                                         <span class="caption-helper hide"></span>
                                                      </div>
                                                   </div>
                                                   <div class="portlet-body">
                                                      <div class="row">
                                                        <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3"> Product Name
                                                                <span class="required"> * </span>
                                                            </label>
                                    
                                                       <div class="col-md-4" ng-class="productInformation.provideNames.$dirty ? (productInformation.provideNames.$valid ? 'has-success' : 'has-error') : ''">
                                                                <input type="text" class="form-control" name="provideNames" ng-model="customer.save.provideNames"  ng-minlength="2" ng-maxlength="128"  required/>
																<span ng-show="productInformation.provideNames.$error.required || productInformation.provideNames.$valid" class="help-block"> Provide your Person Name </span>
																<span ng-show="productInformation.provideNames.$error.minlength" class="help-block"> Person Name have minimum 2 characters</span>
																<span ng-show="productInformation.provideNames.$error.maxlength" class="help-block"> Person Name have maximum 128 characters</span>
                                                            </div>
                                                            
                                                          </div>
                                                         
                                                        <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3"> Product sale price
                                                                <span class="required"> * </span>&nbsp;&nbsp;&nbsp;(inclusive of all taxes)
                                                            </label>
                                                            
                                                       <div class="col-md-4"  ng-class="productInformation.provideProductName.$dirty ? (productInformation.provideProductName.$valid ? 'has-success' : 'has-error') : ''">
                                                           <input type="text" class="form-control" name="provideProductName" ng-model="customer.save.provideProductName" ng-maxlength="128" ng-minlength="2" ng-pattern="/^[0-9]+$/" required/>
                                                           <span ng-show="productInformation.provideProductName.$error.required || productInformation.provideProductName.$valid" class="help-block"> Product sale price</span>    
														   <span ng-show="productInformation.provideProductName.$error.minlength" class="help-block">MinLength 2 </span>
														   <span ng-show="productInformation.provideProductName.$error.pattern" class="help-block">Invalid Product sale price</span>
														   <span ng-show="productInformation.provideProductName.$error.maxlength" class="help-block">Maximum 128 characters</span>
															</div>
                                                         
                                                            <label class="mt-checkbox">
                                                                <input id="inlineCheckbox1" value="option1" type="checkbox" ng-model="provideNameCheck"> Include
                                                                <span></span>
                                                            </label>
                                                          </div>
                                                         
                                                    <div class="form-group" ng-hide="provideNameCheck">
                                                        <label class="control-label col-md-3"> Product Offer Price
                                                                <span class="required"> * </span>&nbsp;&nbsp;&nbsp;(inclusive of all taxes)
                                                            </label>  
                                                       <div class="col-md-4"  ng-class="productInformation.productOfferPrices.$dirty ? (productInformation.productOfferPrices.$valid ? 'has-success' : 'has-error') : ''">
                                                           <input type="text" class="form-control" name="productOfferPrices" ng-model="customer.save.productOfferPrices" ng-maxlength="128" ng-minlength="2" ng-pattern="/^[0-9]+$/" required/>
                                                           <span ng-show="productInformation.productOfferPrices.$error.required || productInformation.productOfferPrices.$valid" class="help-block"> Product Offer Price</span>    
														   <span ng-show="productInformation.productOfferPrices.$error.minlength" class="help-block">MinLength 2 digits </span>
														   <span ng-show="productInformation.productOfferPrices.$error.pattern" class="help-block">Invalid Product Offer Price</span>
														   <span ng-show="productInformation.productOfferPrices.$error.maxlength" class="help-block">  Maximum 128 digits </span>
															</div>
                                                          </div>
                                                    <div class="form-group" ng-hide="provideNameCheck">
                                                        <label class="control-label col-md-3"> Product Offer In Percentage
                                                                <span class="required"> * </span>
                                                            </label>  
                                                       <div class="col-md-4"  ng-class="productInformation.productOfferInPercentage.$dirty ? (productInformation.productOfferInPercentage.$valid ? 'has-success' : 'has-error') : ''">
                                                           <input type="text" class="form-control" name="productOfferInPercentage" ng-model="customer.save.productOfferInPercentage" ng-maxlength="128" ng-minlength="2" ng-pattern="/^[0-9]+$/" required/>
                                                           <span ng-show="productInformation.productOfferInPercentage.$error.required || productInformation.productOfferInPercentage.$valid" class="help-block">  Product Offer In Percentage</span>    
														   <span ng-show="productInformation.productOfferInPercentage.$error.minlength" class="help-block">MinLength 2 </span>
														   <span ng-show="productInformation.productOfferInPercentage.$error.pattern" class="help-block">Invalid  Product Offer In Percentage</span>
														   <span ng-show="productInformation.productOfferInPercentage.$error.maxlength" class="help-block">  Maximum 128 characters</span>
															</div>
                                                          </div>
                                                        <div class="form-group">
                                                        <label class="control-label col-md-3">Offer Validity Period
                                                            <span class="required"> * </span>
                                                            </label>  
                                                <div class="mt-radio-inline" ng-init="limitedUnlimited = limited">
                                                    <label class="mt-radio">
                                                        <input ng-model="limitedUnlimited" value="limited" type="radio"> Limited
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio">
                                                        <input ng-model="limitedUnlimited" value="unlimited" type="radio"> Un Limited
                                                        <span></span>
                                                    </label>
                                                    
                                                </div>
                                                          </div>  
                                                        <div class="input-group date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                        <div class="form-group" ng-show="limitedUnlimited == 'limited'">
                                                        <label class="control-label col-md-3"> Product Offer Valid From
                                                                <span class="required"> * </span>
                                                            </label>  
                                                        <div class="col-md-4" ng-class="productInformation.ProductOfferValidFroms.$dirty ? (productInformation.ProductOfferValidFroms.$valid ? 'has-success' : 'has-error') : ''">
                                                                <input type="text" class="form-control" placeholder="yyyy-mm-dd " name="ProductOfferValidFroms" ng-model="customer.save.ProductOfferValidFrom" required/>
																<span ng-show="productInformation.ProductOfferValidFroms.$error.required || productInformation.ProductOfferValidFroms.$valid" class="help-block"> Product Offer Valid From Details </span>
															    
																
                                                            </div>
                                                          </div>
                                                          <div class="form-group" ng-class="" ng-show="limitedUnlimited == 'limited'">
                                                        <label class="control-label col-md-3"> Product Offer Valid To
                                                                <span class="required"> * </span>
                                                            </label>  
                                                       <div class="col-md-4" ng-class="productInformation.ProductOfferValidTo.$dirty ? (productInformation.ProductOfferValidTo.$valid ? 'has-success' : 'has-error') : ''">
                                                                <input type="text" class="form-control" name="ProductOfferValidTo" placeholder="yyyy-mm-dd" ng-model="customer.save.ProductOfferValidTo"  required/>
																<span ng-show="productInformation.ProductOfferValidTo.$error.required || productInformation.ProductOfferValidTo.$valid" class="help-block"> Product Offer Valid To Details </span>
															    
                                                            </div>
                                                          </div>  
                                                            </div>
                                                          
                                                           <div class="form-group" ng-class="">      
                                                          <label class="control-label col-md-3">Product taxes
                                                                <span class="required"> * </span>
                                                            </label>
                                                          <span class="col-md-2">
                                                                <input type="text" class="form-control" name="provideKeyword1" ng-model="provideKeyword1"  ng-minlength="4" placeholder="Service Charges" required/>
                                                                <span ng-show="" class="help-block"> Product Keyword </span>
																<span ng-show="regform.provideKeyword1.$error.minlength" class="help-block">Name have minimum 4 characters</span>
                                                        </span>
                                                        <span class="col-md-2 show-key-words">
                                                         <input type="text" class="form-control" name="provideKeyword2" ng-model="provideKeyword2"  ng-minlength="4" placeholder="5%" required/>
                                                                <span  pan ng-show="" class="help-block"> Product Keyword </span>
																<span ng-show="" class="help-block">Name have minimum 4 characters</span>
                                                        </span>
                                                        <span class="col-md-2 show-key-words">
                                                         <input type="text" class="form-control" name="provideKeyword3" ng-model="provideKeyword3"  ng-minlength="4" placeholder="Service Type" required/>
                                                                <span  pan ng-show="" class="help-block"> Product Keyword </span>
																<span ng-show="" class="help-block">Name have minimum 4 characters</span>
                                                        </span>
                                                        <a onClick="" ng-model="addKeyWords">Add key words</a>
                                                        </div>
                                                        <div class="form-group" ng-class="">      
                                                          <label class="control-label col-md-3">   
                                                            </label>
                                                          <span class="col-md-2">
                                                                <input type="text" class="form-control" name="provideKeyword1" ng-model="provideKeyword1"  ng-minlength="4" placeholder="Service Charges" required/>
                                                                <span ng-show="" class="help-block"> Product Keyword </span>
																<span ng-show="" class="help-block">Name have minimum 4 characters</span>
                                                        </span>
                                                        <span class="col-md-2 show-key-words">
                                                         <input type="text" class="form-control" name="provideKeyword2" ng-model="provideKeyword2"  ng-minlength="4" placeholder="5%" required/>
                                                                <span  pan ng-show="" class="help-block"> Product Keyword </span>
																<span ng-show="" class="help-block">Name have minimum 4 characters</span>
                                                        </span>
                                                        <span class="col-md-2 show-key-words">
                                                         <input type="text" class="form-control" name="provideKeyword3" ng-model="provideKeyword3"  ng-minlength="4" placeholder="Service Type" required/>
                                                                <span  pan ng-show="" class="help-block"> Product Keyword </span>
																<span ng-show="" class="help-block">Name have minimum 4 characters</span>
                                                        </span>
                                                        </div>
                                                         
                                                   
                                                          
                                                        
                                                         <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3">Product discription

                                                         <span class="required"> * </span>
                                                        </label>  
                                                       <div class="col-md-4" ng-class="productInformation.Productdiscriptions.$dirty ? (productInformation.Productdiscriptions.$valid ? 'has-success' : 'has-error') : ''">
                                                            <textarea class="form-control" rows="3" name="Productdiscriptions" ng-model="customer.save.Productdiscriptions"  ng-minlength="2" ng-maxlength="128"  required/> </textarea>
                                                                <span ng-show="productInformation.Productdiscriptions.$error.required || productInformation.Productdiscriptions.$valid" class="help-block"> Describe your product </span>
																<span ng-show="productInformation.Productdiscriptions.$error.minlength" class="help-block"> Product Description should be minimum 2 characters</span>
																<span ng-show="productInformation.Productdiscriptions.$error.maxlength" class="help-block"> Product Description should be  maximum 128 characters</span>
                                                            </div>
                                                             </div>
                                                            
                                                           
                                                            
                                                            
                                                   </div>
                                                        <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3">Terms and Conditions 

                                                        <span class="required"> * </span>
                                                        </label>  
                                                       <div class="col-md-4" ng-class="productInformation.Terms.$dirty ? (productInformation.Terms.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                            <textarea class="form-control" rows="3" name="Terms" ng-model="customer.save.Terms"  ng-minlength="2" ng-maxlength="128"  required/></textarea>
                                                            <span ng-show="productInformation.Terms.$error.required || productInformation.Terms.$valid" class="help-block"> Describe your Terms and Conditions </span>
																<span ng-show="productInformation.Terms.$error.minlength" class="help-block"> Terms and Conditions should be minimum 2 characters</span>
																<span ng-show="productInformation.Terms.$error.maxlength" class="help-block"> Terms and Conditions should be  maximum 128 characters</span>
                                                        </div>
                                                        </div>
                                                        <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3">Product Return Policy

                                                        <span class="required"> * </span>
                                                        </label>  
                                                       <div class="col-md-4" ng-class="productInformation.ProductReturnPolicy.$dirty ? (productInformation.ProductReturnPolicy.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                            <textarea class="form-control" rows="3" name="ProductReturnPolicy" ng-model="customer.save.ProductReturnPolicy"  ng-minlength="2" ng-maxlength="128"  required/></textarea>
                                                            <span ng-show="productInformation.ProductReturnPolicy.$error.required || productInformation.ProductReturnPolicy.$valid" class="help-block"> Describe about your Product Return Policy </span>
																<span ng-show="productInformation.ProductReturnPolicy.$error.minlength" class="help-block">Product Return Policy should be minimum 2 characters</span>
																<span ng-show="productInformation.ProductReturnPolicy.$error.maxlength" class="help-block">Product Return Policy should be  maximum 128 characters</span>
                                                            
                                                            
                                                        </div>
                                                        </div>
                                                        <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3">Product Warenty

                                                        <span class="required"> * </span>
                                                        </label>  
                                                       <div class="col-md-4" ng-class="productInformation.ProductWarenty.$dirty ? (productInformation.ProductWarenty.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                            <textarea class="form-control" rows="3"name="ProductWarenty" ng-model="customer.save.ProductWarenty"  ng-minlength="2" ng-maxlength="128"  required/></textarea>
                                                            <span ng-show="productInformation.ProductWarenty.$error.required || productInformation.ProductWarenty.$valid" class="help-block"> Describe about your Product Warenty </span>
																<span ng-show="productInformation.ProductWarenty.$error.minlength" class="help-block">Product Warenty should be minimum 2 characters</span>
																<span ng-show="productInformation.ProductWarenty.$error.maxlength" class="help-block">Product Warenty should be  maximum 128 characters</span>
                                                        </div>
                                                        </div>  
                                                        <div class="form-group">
                                                        <label class="control-label col-md-3">Product Package Quantity Details

                                                                <span class="required"> * </span>
                                                            </label>  
                                                       <div class="col-md-4" ng-class="productInformation.ProductPackageQuantityDetails.$dirty ? (productInformation.ProductPackageQuantityDetails.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                                <input type="text" class="form-control" name="ProductPackageQuantityDetails" ng-model="customer.save.ProductPackageQuantityDetails" ng-pattern="/^[0-9]+$/" ng-minlength="2" ng-maxlength="128"  required/ >
                                                                <span ng-show="productInformation.ProductPackageQuantityDetails.$error.required || productInformation.ProductPackageQuantityDetails.$valid" class="help-block"> Package Quantity Details </span>
																<span ng-show="productInformation.ProductPackageQuantityDetails.$error.minlength" class="help-block">Package Quantity should be minimum 2 characters</span>
																<span ng-show="productInformation.ProductPackageQuantityDetails.$error.maxlength" class="help-block">Package Quantity should be maximum 128 characters</span>
																<span ng-show="productInformation.ProductPackageQuantityDetails.$error.pattern" class="help-block">Invalid  Product Package Quantity Details</span>
                                                            </div>
                                                          </div> 
                                                          
                                                           <div class="form-group" ng-class="">      
                                                          <label class="control-label col-md-3">Product Keyword
                                                                <span class="required"> * </span>
                                                            </label>
                                                          <div class="col-md-2" ng-class="productInformation.provideKeywords1.$dirty ? (productInformation.provideKeywords1.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                                <input type="text" class="form-control" name="provideKeywords1" ng-model="customer.save.provideKeywords1"  ng-minlength="4" placeholder="e.g : Bike" required/>
                                                                <span ng-show="productInformation.provideKeywords1.$error.required || productInformation.provideKeywords1.$valid" class="help-block"> Product Keyword </span>
																<span ng-show="productInformation.provideKeywords1.$error.minlength" class="help-block">Keyword should be minimum 4 characters</span>
                                                        </div>
                                                        <div class="col-md-2" ng-class="productInformation.provideKeywords2.$dirty ? (productInformation.provideKeywords2.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                                <input type="text" class="form-control" name="provideKeywords2" ng-model="customer.save.provideKeywords2"  ng-minlength="4" placeholder="e.g : Bike" required/>
                                                                <span ng-show="productInformation.provideKeywords2.$error.required || productInformation.provideKeywords2.$valid" class="help-block"> Product Keyword </span>
																<span ng-show="productInformation.provideKeywords2.$error.minlength" class="help-block">Keyword should be minimum 4 characters</span>
                                                        </div>
                                                        <div class="col-md-2" ng-class="productInformation.provideKeywords3.$dirty ? (productInformation.provideKeywords3.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                                <input type="text" class="form-control" name="provideKeywords3" ng-model="customer.save.provideKeywords3"  ng-minlength="4" placeholder="e.g : Bike" required/>
                                                                <span ng-show="productInformation.provideKeywords3.$error.required || productInformation.provideKeywords1.$valid" class="help-block"> Product Keyword </span>
																<span ng-show="productInformation.provideKeywords3.$error.minlength" class="help-block">Keyword should be minimum 4 characters</span>
                                                        </div>
                                                        <a onClick="" ng-model="addKeyWords">Add key words</a>
                                                        </div>
                                                        <div class="form-group" ng-class="">      
                                                          <label class="control-label col-md-3">
                                                                
                                                            </label>
                                                          <span class="col-md-2">
                                                                <input type="text" class="form-control" name="provideKeyword1" ng-model="provideKeyword1"  ng-minlength="4" placeholder="e.g : Byke" required/>
                                                                <span ng-show="regform.provideKeyword1.$error.required || regform.provideKeyword1.$valid" class="help-block"> Product Keyword </span>
																<span ng-show="regform.provideKeyword1.$error.minlength" class="help-block">Name have minimum 4 characters</span>
                                                        </span>
                                                        <span class="col-md-2 show-key-words">
                                                         <input type="text" class="form-control" name="provideKeyword2" ng-model="provideKeyword2"  ng-minlength="4" placeholder="e.g : Car" required/>
                                                                <span  pan ng-show="regform.provideKeyword2.$error.required || regform.provideKeyword2.$valid" class="help-block"> Product Keyword </span>
																<span ng-show="regform.provideKeyword2.$error.minlength" class="help-block">Name have minimum 4 characters</span>
                                                        </span>
                                                        <span class="col-md-2 show-key-words">
                                                         <input type="text" class="form-control" name="provideKeyword3" ng-model="provideKeyword3"  ng-minlength="4" placeholder="e.g : Bicycle" required/>
                                                                <span  pan ng-show="regform.provideKeyword3.$error.required || regform.provideKeyword3.$valid" class="help-block"> Product Keyword </span>
																<span ng-show="regform.provideKeyword3.$error.minlength" class="help-block">Name have minimum 4 characters</span>
                                                        </span>
                                                        </div>
                                                      </div>
                                                   </div>
														 <div class="portlet light bordered">
                                                   <div class="portlet-title">
                                                      <div class="caption font-green-sharp">
                                                         <i class="icon-settings font-green-sharp"></i>
                                                         <span class="caption-subject bold uppercase">Product Images</span>
                                                         <span class="caption-helper hide"></span>
                                                      </div>
                                                   </div>
                                                 <div class="form-group">
                                                            <label class="control-label col-md-3"> Product Photo 
                                                                <span class="required" aria-required="true"> * </span>
                                                            </label>
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input name="..." type="file"> </span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                    
                                                            </div>   
                                                        </div>
                                                        <div class="form-group">
                                                        <label class="control-label col-md-3"></label>    
                                                        <span class="fileinput-new thumbnail col-md-4" style="width: 100px; height: 78px;">
                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> 
                                                        </span> 
                                                        <span class="fileinput-new thumbnail col-md-4" style="width: 100px; height: 78px;">
                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> 
                                                        </span>
                                                        <span class="fileinput-new thumbnail col-md-4" style="width: 100px; height: 78px;">
                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> 
                                                        </span>    
                                                        </div>
                                                 </div>
														<div class="portlet light bordered">
                                                 <div class="portlet-title">
                                                      <div class="caption font-green-sharp">
                                                         <i class="icon-settings font-green-sharp"></i>
                                                         <span class="caption-subject bold uppercase">Product Details</span>
                                                         <span class="caption-helper hide"></span>
                                                      </div>
                                                   </div>
                                                   <div class="portlet-body">
                                                      <div class="row">
                                                         <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3">Brand Number
                                                                <span class="required"> * </span>
                                                            </label>  
                                                       <div class="col-md-4" ng-class="productInformation.BrandNumber.$dirty ? (productInformation.BrandNumber.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                                <input type="text" class="form-control" name="BrandNumber" ng-model="customer.save.BrandNumber"  ng-minlength="2" ng-maxlength="128"  required/>
                                                                <span ng-show="productInformation.BrandNumber.$error.required || productInformation.BrandNumber.$valid" class="help-block"> Brand Number </span>
																<span ng-show="productInformation.BrandNumber.$error.minlength" class="help-block">Brand Number should be minimum 2 characters</span>
																<span ng-show="productInformation.BrandNumber.$error.maxlength" class="help-block">Brand Number should be maximum 128 characters</span>
                                                            </div>
                                                          </div>
                                                      <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3">Brand Model Name
                                                                <span class="required"> * </span>
                                                            </label>  
                                                       <div class="col-md-4" ng-class="productInformation.BrandModelName.$dirty ? (productInformation.BrandModelName.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                                <input type="text" class="form-control" name="BrandModelName" ng-model="customer.save.BrandModelName"  ng-minlength="2" ng-maxlength="128"  required/>
                                                                <span ng-show="productInformation.BrandModelName.$error.required || productInformation.BrandModelName.$valid" class="help-block"> Brand Model Name </span>
																<span ng-show="productInformation.BrandModelName.$error.minlength" class="help-block">Brand Model Name should be minimum 2 characters</span>
																<span ng-show="productInformation.BrandModelName.$error.maxlength" class="help-block">Brand Model Name should be maximum 128 characters</span>
                                                            </div>
                                                          </div>
                                                          <div class="form-group" ng-class="">
                                                            <label class="control-label col-md-3">Features
                                                                    <span class="required"> * </span>
                                                                </label>  
                                                           <div class="mt-checkbox-inline">
                                                            <label class="mt-checkbox">
                                                                <input id="inlineCheckbox1" value="option1" type="checkbox"> Waterproof
                                                                <span></span>
                                                            </label>
                                                            <label class="mt-checkbox">
                                                                <input id="inlineCheckbox2" value="option2" type="checkbox"> Quick Dry
                                                                <span></span>
                                                            </label>
                                                            <label class="mt-checkbox">
                                                                <input id="inlineCheckbox3" value="option3" type="checkbox"> Plus Size
                                                                <span></span>
                                                            </label>
                                                             <label class="mt-checkbox">
                                                                <input id="inlineCheckbox3" value="option3" type="checkbox" ng-model="others"> Others
                                                                <span></span>
                                                            </label> 
                                                               
                                                        </div>      
                                                        </div>
                                                        <div class="form-group" ng-show="others">
                                                            <label class="control-label col-md-3"></label>  
                                                           <div class="col-md-2" ng-class="productInformation.others.$dirty ? (productInformation.others.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                                <input type="text" class="form-control" name="others" ng-model="customer.save.others"  ng-minlength="2" ng-maxlength="128"  required/>
                                                                <span ng-show="productInformation.others.$error.required || productInformation.others.$valid" class="help-block">  </span>
																<span ng-show="productInformation.others.$error.minlength" class="help-block">minimum 2 characters</span>
																<span ng-show="productInformation.others.$error.maxlength" class="help-block">maximum 128 characters</span>
                                                            </div>      
                                                        </div>  
                                                             
                                                        <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3">Technics
                                                        <span class="required"> * </span>
                                                        </label>  
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
                                                          <label class="control-label col-md-3">More Details
                                                                <span class="required" aria-required="true"> * </span>
                                                            </label>
                                                          <div class="col-md-2" ng-class="productInformation.provideKeyword1.$dirty ? (productInformation.provideKeyword1.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                                <input class="form-control" type="text" class="form-control" name="provideKeyword1" ng-model="customer.save.provideKeyword1" placeholder="eg:-bike" ng-minlength="2" ng-maxlength="128"  required/>
                                                                <span ng-show="productInformation.provideKeyword1.$error.required || productInformation.provideKeyword1.$valid" class="help-block"> Product More Details </span>
																<span ng-show="productInformation.provideKeyword1.$error.minlength" class="help-block">Name have minimum 4 characters</span>
                                                        </div>
                                                        <div class="col-md-2 show-key-words">
                                                         <input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-minlength" name="provideKeyword2" ng-model="moreDetails2" ng-minlength="" placeholder="e.g : Car" required="" aria-required="true" type="text">
                                                                <span pan="" ng-show="" class="help-block ng-hide"> Product More Details </span>
																<span ng-show="" class="help-block ng-hide">Name have minimum 4 characters</span>
                                                        </div>
                                                        Please fill in both attribute name and value (e.g., Color: Red)
                                                        </div> 
                                                        
                                                      </div>
                                                   </div>
                                                   </div>
														<div class="portlet light bordered">
                                                   <div class="portlet-title">
                                                      <div class="caption font-green-sharp">
                                                         <i class="icon-settings font-green-sharp"></i>
                                                         <span class="caption-subject bold uppercase">Stock Details</span>
                                                         <span class="caption-helper hide"></span>
                                                      </div>
                                                   </div>
                                                   <div class="portlet-body">
                                                      <div class="row" data-selectsplitter-wrapper-selector="">
                                                        <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3">Stock In Hand 
                                                         <span class="required"> * </span>
                                                        </label>  
                                                       <div class="col-md-4" ng-class="productInformation.StockInHand.$dirty ? (productInformation.StockInHand.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                            <input type="text" class="form-control" name="StockInHand" ng-model="customer.save.StockInHand" ng-pattern="/^[0-9]+$/" ng-minlength="2" ng-maxlength="128"  required/>
                                                            <span ng-show="productInformation.StockInHand.$error.required || productInformation.StockInHand.$valid" class="help-block">Stock Details  </span>
                                                            <span ng-show="productInformation.StockInHand.$error.minlength" class="help-block">Stock Details should be minimum 2 characters</span>
															<span ng-show="productInformation.StockInHand.$error.maxlength" class="help-block">Stock Details should be maximum 128 characters</span>
														   <span ng-show="productInformation.StockInHand.$error.pattern" class="help-block">Invalid Stock In Hand</span>
                                                        </div>
                                                        </div>
                                                      </div>
                                                   </div>
                                                   <div class="portlet-body">
                                                      <div class="row" data-selectsplitter-wrapper-selector="">
                                                        <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3">Stock Notifications 

                                                        <span class="required"> * </span>
                                                        </label>  
                                                       <div class="col-md-4" ng-class="productInformation.StockNotifications.$dirty ? (productInformation.StockNotifications.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                            <input type="text" class="form-control" name="StockNotifications" ng-model="customer.save.StockNotifications"  ng-minlength="2" ng-maxlength="128"  required/>
                                                            <span ng-show="productInformation.StockNotifications.$error.required || productInformation.StockNotifications.$valid" class="help-block">Stock Notifications Details  </span>
                                                            <span ng-show="productInformation.StockNotifications.$error.minlength" class="help-block">Stock Notifications Details should be minimum 2 characters</span>
															<span ng-show="productInformation.StockNotifications.$error.maxlength" class="help-block">Stock Notifications Details should be maximum 128 characters</span>
                                                        </div>
                                                        </div>
                                                      </div>
                                                   </div>    
                                                   </div>
														<div class="portlet light bordered">
                                                   <div class="portlet-title">
                                                      <div class="caption font-green-sharp">
                                                         <i class="icon-settings font-green-sharp"></i>
                                                         <span class="caption-subject bold uppercase">Logistics Information</span>
                                                         <span class="caption-helper hide"></span>
                                                      </div>
                                                   </div>
                                                   <div class="portlet-body">
                                                      <div class="row" data-selectsplitter-wrapper-selector="">
                                                          <div class="form-group">
                                                        <label class="control-label col-md-3">Service Charges

                                                                <span class="required"> * </span>
                                                            </label>  
                                                       <div class="col-md-4" ng-class="productInformation.ServiceCharges.$dirty ? (productInformation.ServiceCharges.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                             <input type="text" class="form-control" name="ServiceCharges" ng-model="customer.save.ServiceCharges"  ng-minlength="2" ng-pattern="/^[0-9]+$/" ng-maxlength="128"  required/>
                                                            <span ng-show="productInformation.ServiceCharges.$error.required || productInformation.ServiceCharges.$valid" class="help-block">Service Charges Details  </span>
                                                            <span ng-show="productInformation.ServiceCharges.$error.minlength" class="help-block">Service Charges Details should be minimum 2 characters</span>
															<span ng-show="productInformation.ServiceCharges.$error.maxlength" class="help-block">Service Charges Details should be maximum 128 characters</span>
															<span ng-show="productInformation.ServiceCharges.$error.pattern" class="help-block">Invalid Service Charges Details</span>
                                                            </div>
                                                          </div>
                                                      </div>
                                                   </div>
                                                   <div class="portlet-body">
                                                      <div class="row" data-selectsplitter-wrapper-selector="">
                                                          <div class="form-group">
                                                        <label class="control-label col-md-3">Product Weight
                                                                <span class="required"> * </span>
                                                            </label>  
                                                       <div class="col-md-4" ng-class="productInformation.ProductWeight.$dirty ? (productInformation.ProductWeight.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                             <input type="text" class="form-control" name="ProductWeight" ng-model="customer.save.ProductWeight"  ng-minlength="2" ng-pattern="/^[0-9]+$/" ng-maxlength="128"  required/>
                                                            <span ng-show="productInformation.ProductWeight.$error.required || productInformation.ProductWeight.$valid" class="help-block">Product Weight Details  </span>
                                                            <span ng-show="productInformation.ProductWeight.$error.minlength" class="help-block">Product Weight Details should be minimum 2 characters</span>
															<span ng-show="productInformation.ProductWeight.$error.maxlength" class="help-block">Product Weight Details should be maximum 128 characters</span>
															<span ng-show="productInformation.ProductWeight.$error.pattern" class="help-block">Invalid Product Weight</span>
                                                            </div>
                                                          </div>
                                                      </div>
                                                   </div>  
                                                   
                                                   <div class="portlet-body">
                                                      <div class="row" data-selectsplitter-wrapper-selector="">
                                                          <div class="form-group">
                                                        <label class="control-label col-md-3">Local Delivary Charges


                                                                <span class="required"> * </span>
                                                            </label>  
                                                      <div class="col-md-4" ng-class="productInformation.localdelivarycharges.$dirty ? (productInformation.localdelivarycharges.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                             <input type="text" class="form-control" name="localdelivarycharges" ng-model="customer.save.localdelivarycharges" ng-pattern="/^[0-9]+$/" ng-minlength="2" ng-maxlength="128"  required/>
                                                            <span ng-show="productInformation.localdelivarycharges.$error.required || productInformation.localdelivarycharges.$valid" class="help-block">Local Delivary Charges Details  </span>
                                                            <span ng-show="productInformation.localdelivarycharges.$error.minlength" class="help-block">Local Delivary Charges Details should be minimum 2 characters</span>
															<span ng-show="productInformation.localdelivarycharges.$error.maxlength" class="help-block">Local Delivary Charges Details should be maximum 128 characters</span>
															<span ng-show="productInformation.localdelivarycharges.$error.pattern" class="help-block">Invalid Product Weight</span>
                                                            </div>
                                                          </div>
                                                      </div>
                                                   </div>
                                                    <div class="portlet-body">
                                                      <div class="row" data-selectsplitter-wrapper-selector="">
                                                          <div class="form-group">
                                                        <label class="control-label col-md-3">Local Postal Codes
                                                                <span class="required"> * </span>
                                                            </label>  
                                                      <div class="col-md-4" ng-class="productInformation.LocalPostalCodes.$dirty ? (productInformation.LocalPostalCodes.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                             <input type="text" class="form-control" name="LocalPostalCodes" ng-model="customer.save.LocalPostalCodes"  ng-minlength="2" ng-maxlength="128"  required/>
                                                            <span ng-show="productInformation.LocalPostalCodes.$error.required || productInformation.LocalPostalCodes.$valid" class="help-block">Local Postal Codes Details  </span>
                                                            <span ng-show="productInformation.LocalPostalCodes.$error.minlength" class="help-block">Local Postal Codes Details should be minimum 2 characters</span>
															<span ng-show="productInformation.LocalPostalCodes.$error.maxlength" class="help-block">Local Postal Codes Details should be maximum 128 characters</span>
                                                            </div>
                                                          </div>
                                                      </div>
                                                   </div>
                                                    <div class="portlet-body">
                                                      <div class="row" data-selectsplitter-wrapper-selector="">
                                                          <div class="form-group">
                                                        <label class="control-label col-md-3">Other Places Delivery Charges
                                                                <span class="required"> * </span>
                                                            </label>  
                                                       <div class="col-md-4" ng-class="productInformation.OtherPlacesDeliveryCharges.$dirty ? (productInformation.OtherPlacesDeliveryCharges.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                             <input type="text" class="form-control" name="OtherPlacesDeliveryCharges" ng-model="customer.save.OtherPlacesDeliveryCharges"  ng-minlength="2" ng-pattern="/^[0-9]+$/" ng-maxlength="128"  required/>
                                                            <span ng-show="productInformation.OtherPlacesDeliveryCharges.$error.required || productInformation.OtherPlacesDeliveryCharges.$valid" class="help-block">Other Places Delivery Charges Details  </span>
                                                            <span ng-show="productInformation.OtherPlacesDeliveryCharges.$error.minlength" class="help-block">Other Places Delivery Charges Details should be minimum 2 characters</span>
															<span ng-show="productInformation.OtherPlacesDeliveryCharges.$error.maxlength" class="help-block">Other Places Delivery Charges Details should be maximum 128 characters</span>
															<span ng-show="productInformation.OtherPlacesDeliveryCharges.$error.pattern" class="help-block">Invalid Other Places Delivery Charges</span>
                                                            </div>
                                                          </div>
                                                      </div>
                                                   </div>
                                                    <div class="portlet-body">
                                                      <div class="row" data-selectsplitter-wrapper-selector="">
                                                          <div class="form-group">
                                                        <label class="control-label col-md-3">Other Postal Codes

                                                                <span class="required"> * </span>
                                                            </label>  
                                                       <div class="col-md-4" ng-class="productInformation.OtherPostalCodes.$dirty ? (productInformation.OtherPostalCodes.$valid ? 'has-success' : 'has-error') : ' ' ">
                                                             <input type="text" class="form-control" name="OtherPostalCodes" ng-model="customer.save.OtherPostalCodes"  ng-minlength="2" ng-maxlength="128"  required/>
                                                            <span ng-show="productInformation.OtherPostalCodes.$error.required || productInformation.OtherPostalCodes.$valid" class="help-block">Other Postal Codes Details  </span>
                                                            <span ng-show="productInformation.OtherPostalCodes.$error.minlength" class="help-block">Other Postal Codes Details should be minimum 2 characters</span>
															<span ng-show="productInformation.OtherPostalCodes.$error.maxlength" class="help-block">Other Postal Codes Details should be maximum 128 characters</span>
                                                            </div>
                                                          </div>
                                                      </div>
                                                   </div>
                                                    
                                                    
                                                 </div>
														<div class="portlet light bordered">
                                                   <div class="portlet-title">
                                                      <div class="caption font-green-sharp">
                                                         <i class="icon-settings font-green-sharp"></i>
                                                         <span class="caption-subject bold uppercase">Product Group</span>
                                                         <span class="caption-helper hide"></span>
                                                      </div>
                                                   </div>
                                                   <div class="portlet-body">
                                                      <div class="row" data-selectsplitter-wrapper-selector="">
                                                        <div class="form-group" ng-class="">
                                                        <label class="control-label col-md-3">Product Group
                                                        <span class="required" aria-required="true"> * </span>
                                                        </label>  
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
                                                 </div> 
                                                     </div> <span class="col-md-3">
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
														</div> 
                                         
                                        </span>

													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="button" ng-click="navTab(1)"
																class="btn btn-info">Back</button>
															<button type="button" ng-disabled="!(productInformation.provideNames.$valid && productInformation.provideProductName.$valid && productInformation.ProductOfferPrice.$valid && productInformation.ProductOfferInPercentage.$valid && productInformation.Productdiscriptions.$valid && productInformation.Terms.$valid && productInformation.ProductReturnPolicy.$valid && productInformation.ProductWarenty.$valid && productInformation.ProductPackageQuantityDetails.$valid && productInformation.BrandNumber.$valid && productInformation.BrandModelName && productInformation.StockInHand.$valid && productInformation.StockNotifications.$valid && productInformation.ServiceCharges.$valid && productInformation.ProductWeight.$valid && productInformation.localdelivarycharges.$valid && productInformation.LocalPostalCodes.$valid && productInformation.OtherPlacesDeliveryCharges.$valid && productInformation.OtherPostalCodes.$valid)" ng-click="navTab(3)" class="btn btn-info">Continue</button>
														</div>
													</div>
                                                  </form>
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
		<span aria-hidden="true" class="quick-nav-bg"></span>
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php echo $__env->make("dashboard.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- END FOOTER -->
	<!-- BEGIN QUICK NAV -->
	<div class="quick-nav-overlay"></div>
	<!-- END QUICK NAV -->
	<!--[if lt IE 9]>
            <![endif]-->
	<!-- BEGIN CORE PLUGINS -->
	    <script src="<?= asset('app/controllers/dashboard/addRetailProductController.js') ?>" type="text/javascript"></script>
	   
</body>


</html>
