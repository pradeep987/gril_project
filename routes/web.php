<?php

/*
 |--------------------------------------------------------------------------
 | Web Routes
 |--------------------------------------------------------------------------
 |
 | Here is where you can register web routes for your application. These
 | routes are loaded by the RouteServiceProvider within a group which
 | contains the "web" middleware group. Now create something great!
 |
 */
//user.registration
Route::get('/', function (){return view('user.registration');});
Route::get('/login', function (){return view('user.login');});
Route::get('/getBussinessModel', 'GetDropDownData@getBussinessModel');


Route::post('getCityState', 'user\UserRegistation@getCityState');

Route::group(['middleware' => ['web']], function () {
	Route::post('admin/loginValidation', 'Admin\Login@login');
	Route::post('sendForgetPwdMail', 'User\Login@sendForgetPwdMail');
	Route::post('loginValidation', 'User\Login@login');
	Route::post('saveUserReg', 'user\UserRegistation@create');
	Route::group(['middleware' => 'userSessionCheck'], function () {
		Route::get('/logout', 'User\Login@logout');
		Route::get('dashboard', 'dashboard\Dashboard@loadDashboard');
		Route::get('activeDashboardMenu/{id}', 'dashboard\Dashboard@activeDashboardMenu');
        
		Route::get('retailerProfile', 'dashboard\GetProfileData@getRetailerProfileData');
		Route::post('saveMyBussReg', 'dashboard\GetProfileData@saveMyBussReg');
		Route::post('saveMyBussProf', 'dashboard\GetProfileData@saveMyBussProf');
		Route::post('saveGoogleMapLocation', 'dashboard\GetProfileData@saveGoogleMapLocation');
        
        
        Route::get('wholesellerProfile', 'dashboard\GetWholesaleProfileData@getWholesaleProfileData');
		Route::post('saveMyWholesaleBussReg', 'dashboard\GetWholesaleProfileData@saveMyWholesaleBussReg');
		Route::post('saveMyWholesaleBussProf', 'dashboard\GetWholesaleProfileData@saveMyWholesaleBussProf');
		Route::post('saveWholesaleGoogleMapLocation', 'dashboard\GetWholesaleProfileData@saveGoogleMapLocation');
        
        Route::get('importerProfile', 'dashboard\GetImporterProfileData@getImporterProfileData');
		Route::post('saveMyImporterBussReg', 'dashboard\GetImporterProfileData@saveMyImporterBussReg');
		Route::post('saveMyImporterBussProf', 'dashboard\GetImporterProfileData@saveMyImporterBussProf');
		Route::post('saveImporterGoogleMapLocation', 'dashboard\GetImporterProfileData@saveGoogleMapLocation');
       
        Route::get('exporterProfile', 'dashboard\GetExporterProfileData@getExporterProfileData');
		Route::post('saveMyExporterBussReg', 'dashboard\GetExporterProfileData@saveMyExporterBussReg');
		Route::post('saveMyExporterBussProf', 'dashboard\GetExporterProfileData@saveMyExporterBussProf');
		Route::post('saveExporterGoogleMapLocation', 'dashboard\GetExporterProfileData@saveGoogleMapLocation');
        
        Route::get('manufactureProfile', 'dashboard\GetManufactureProfileData@getManufactureProfileData');
		Route::post('saveMyManufactureBussReg', 'dashboard\GetManufactureProfileData@saveMyManufactureBussReg');
		Route::post('saveMyManufactureBussProf', 'dashboard\GetManufactureProfileData@saveMyManufactureBussProf');
		Route::post('saveManufactureGoogleMapLocation', 'dashboard\GetManufactureProfileData@saveGoogleMapLocation');
        
        Route::get('serviceProfile', 'dashboard\GetserviceProfileData@getserviceProfileData');
		Route::post('saveMyServiceBussReg', 'dashboard\GetserviceProfileData@saveMyserviceBussReg');
		Route::post('saveMyserviceBussProf', 'dashboard\GetserviceProfileData@saveMyserviceBussProf');
		Route::post('saveserviceGoogleMapLocation', 'dashboard\GetserviceProfileData@saveGoogleMapLocation');
        
        
        Route::get('rentalProfile', 'dashboard\GetRentalProfileData@getRentalProfileData');
		Route::post('saveMyRentalBussReg', 'dashboard\GetRentalProfileData@saveMyRentalBussReg');
		Route::post('saveMyRentalBussProf', 'dashboard\GetRentalProfileData@saveMyRentalBussProf');
		Route::post('saveRentalGoogleMapLocation', 'dashboard\GetRentalProfileData@saveGoogleMapLocation');
	});
});

//Admin Route
Route::get('/admin', function () {return view('admin.login');});
Route::group(['middleware' => 'sessionCheck'], function () {
	Route::get('/admin/logout', 'Admin\Login@logout');
	Route::get('/admin/wholesale/logout', 'Admin\Login@logout');
	Route::get('/admin/hire/logout', 'Admin\Login@logout');
	Route::get('/admin/importer/logout', 'Admin\Login@logout');
	Route::get('/admin/exporter/logout', 'Admin\Login@logout');
	Route::get('/admin/manufacture/logout', 'Admin\Login@logout');
	Route::get('/admin/serviceprovider/logout', 'Admin\Login@logout');
	
	Route::get('/admin/country', function () {return view('admin.country');});
	Route::get('admin/getAllCountryList', 'Admin\Country@getAllCountryList');

	Route::get('/admin/county', function () { return view('admin.county');});
	Route::get('admin/getAllCountyList', 'Admin\County@getAllCountyList');
	Route::get('/admin/postalCode', function () { return view('admin.postalCode');});
	Route::get('admin/getAllPostalCodeList', 'Admin\PostalCode@getAllPostalCodeList');

	Route::get('/admin/businessModel', function () {return view('admin.businessModel');});
	Route::get('admin/getAllBusinessModelList', 'Admin\BusinessModel@getAllBusinessModelList');
	Route::get('/admin/businessCategroy', function () {return view('admin.businessCategroy');});
	Route::get('admin/getAllBusinessCategroyList', 'Admin\BusinessCategroy@getAllBusinessCategroyList');
	Route::get('/admin/businessType', function () {return view('admin.businessType');});
	Route::get('admin/getAllBusinessTypeList', 'Admin\BusinessType@getAllBusinessTypeList');
	Route::get('/admin/productType', function () {return view('admin.productType');});
	Route::get('admin/getAllProductTypeList', 'Admin\ProductType@getAllProductTypeList');
	Route::get('/admin/productModel', function () {return view('admin.productModel');});
	Route::get('admin/getAllProductModelList', 'Admin\ProductModel@getAllProductModelList');
	
	
	//--hire start--
    Route::get('/admin/hire/HirebusinessCategroy', function () {return view('admin.hire.businessCategroy');});
    Route::get('admin/hire/getAllBusinessCategroyList', 'Admin\hire\BusinessCategroy@getAllBusinessCategroyList');
    Route::get('/admin/hire/HirebusinessType', function () {return view('admin.hire.businessType');});
    Route::get('admin/hire/getAllBusinessTypeList', 'Admin\hire\BusinessType@getAllBusinessTypeList');
    Route::get('/admin/hire/HireproductType', function () {return view('admin.hire.productType');});
    Route::get('admin/hire/getAllProductTypeList', 'Admin\hire\ProductType@getAllProductTypeList'); 
    Route::get('/admin/hire/HireproductModel', function () {return view('admin.hire.productModel');});
    Route::get('admin/hire/getAllProductModelList', 'Admin\hire\ProductModel@getAllProductModelList');
    //--hire end--
    
   //--manufacture start--
    Route::get('/admin/manufacture/ManufacturebusinessCategroy', function () {return view('admin.manufacture.businessCategroy');});
    Route::get('admin/manufacture/getAllBusinessCategroyList', 'Admin\manufacture\BusinessCategroy@getAllBusinessCategroyList');
     Route::get('/admin/manufacture/ManufacturebusinessType', function () {return view('admin.manufacture.businessType');});
    Route::get('admin/manufacture/getAllBusinessTypeList', 'Admin\manufacture\BusinessType@getAllBusinessTypeList');
    Route::get('/admin/manufacture/ManufactureproductType', function () {return view('admin.manufacture.productType');});
    Route::get('admin/manufacture/getAllProductTypeList', 'Admin\manufacture\ProductType@getAllProductTypeList'); 
     Route::get('/admin/manufacture/ManufactureproductModel', function () {return view('admin.manufacture.productModel');});
    Route::get('admin/manufacture/getAllProductModelList', 'Admin\manufacture\ProductModel@getAllProductModelList');
    // --manufacture end--
    
    
    //--serviceprovider start--
    Route::get('/admin/serviceprovider/ServiceProviderbusinessCategroy', function () {return view('admin.serviceprovider.businessCategroy');});
    Route::get('admin/serviceprovider/getAllBusinessCategroyList', 'Admin\serviceprovider\BusinessCategroy@getAllBusinessCategroyList');
    Route::get('/admin/serviceprovider/ServiceProviderbusinessType', function () {return view('admin.serviceprovider.businessType');});
    Route::get('admin/serviceprovider/getAllBusinessTypeList', 'Admin\serviceprovider\BusinessType@getAllBusinessTypeList');
    Route::get('/admin/serviceprovider/ServiceProviderproductType', function () {return view('admin.serviceprovider.productType');});
    Route::get('admin/serviceprovider/getAllProductTypeList', 'Admin\serviceprovider\ProductType@getAllProductTypeList'); 
    Route::get('/admin/serviceprovider/ServiceProviderproductModel', function () {return view('admin.serviceprovider.productModel');});
    Route::get('admin/serviceprovider/getAllProductModelList', 'Admin\serviceprovider\ProductModel@getAllProductModelList');
    //--serviceprovider end--
     
    //--wholesale start--
    Route::get('/admin/wholesale/wholesalebusinessCategroy', function () {return view('admin.wholesale.businessCategroy');});
    Route::get('admin/wholesale/getAllBusinessCategroyList', 'Admin\wholesale\BusinessCategroy@getAllBusinessCategroyList');
    Route::get('/admin/wholesale/wholesalebusinessType', function () {return view('admin.wholesale.businessType');});
    Route::get('admin/wholesale/getAllBusinessTypeList', 'Admin\wholesale\BusinessType@getAllBusinessTypeList');
    Route::get('/admin/wholesale/wholesaleproductType', function () {return view('admin.wholesale.productType');});
    Route::get('admin/wholesale/getAllProductTypeList', 'Admin\wholesale\ProductType@getAllProductTypeList'); 
    Route::get('/admin/wholesale/wholesaleproductModel', function () {return view('admin.wholesale.productModel');});
    Route::get('admin/wholesale/getAllProductModelList', 'Admin\wholesale\ProductModel@getAllProductModelList');
    //--wholesale end--
    
   //--importer  preview start--
    Route::get('/admin/importer/ImporterbusinessCategroy', function () {return view('admin.importer.businessCategroy');});
    Route::get('admin/importer/getAllBusinessCategroyList', 'Admin\importer\BusinessCategroy@getAllBusinessCategroyList');
    Route::get('/admin/importer/ImporterbusinessType', function () {return view('admin.importer.businessType');});
    Route::get('admin/importer/getAllBusinessTypeList', 'Admin\importer\BusinessType@getAllBusinessTypeList');
    Route::get('/admin/importer/ImporterproductType', function () {return view('admin.importer.productType');});
    Route::get('admin/importer/getAllProductTypeList', 'Admin\importer\ProductType@getAllProductTypeList'); 
    Route::get('/admin/importer/ImporterproductModel', function () {return view('admin.importer.productModel');});
    Route::get('admin/importer/getAllProductModelList', 'Admin\importer\ProductModel@getAllProductModelList');
    // --importer  preview businesstype  end--
    
    //--exporter  preview start--
    Route::get('/admin/exporter/ExporterbusinessCategroy', function () {return view('admin.exporter.businessCategroy');});
    Route::get('admin/exporter/getAllBusinessCategroyList', 'Admin\exporter\BusinessCategroy@getAllBusinessCategroyList');
    Route::get('/admin/exporter/ExporterbusinessType', function () {return view('admin.exporter.businessType');});
    Route::get('admin/exporter/getAllBusinessTypeList', 'Admin\exporter\BusinessType@getAllBusinessTypeList');
    Route::get('/admin/exporter/ExporterproductType', function () {return view('admin.exporter.productType');});
    Route::get('admin/exporter/getAllProductTypeList', 'Admin\exporter\ProductType@getAllProductTypeList'); 
    Route::get('/admin/exporter/ExporterproductModel', function () {return view('admin.exporter.productModel');});
    Route::get('admin/exporter/getAllProductModelList', 'Admin\exporter\ProductModel@getAllProductModelList');
    // --exporter preview end--
    

	Route::group(['middleware' => ['web']], function () {
		Route::post('admin/saveCountry', 'Admin\Country@saveItem');
		Route::delete('admin/deleteCountry/{id}', 'Admin\Country@deleteItem');

		Route::post('admin/saveCounty', 'Admin\County@saveItem');
		Route::delete('admin/deleteCounty/{id}', 'Admin\County@deleteItem');
		Route::post('admin/savePostalcode', 'Admin\PostalCode@saveItem');
		Route::delete('admin/deletePostalcode/{id}', 'Admin\Postalcode@deleteItem');

		Route::post('admin/saveBusinessModel', 'Admin\BusinessModel@saveItem');
		Route::delete('admin/deleteBusinessModel/{id}', 'Admin\BusinessModel@deleteItem');
		Route::post('admin/saveBusinessCategroy', 'Admin\BusinessCategroy@saveItem');
		Route::delete('admin/deleteBusinessCategroy/{id}', 'Admin\BusinessCategroy@deleteItem');
		Route::post('admin/saveBusinessType', 'Admin\BusinessType@saveItem');
		Route::delete('admin/deleteBusinessType/{id}', 'Admin\BusinessType@deleteItem');
		Route::post('admin/saveProductType', 'Admin\ProductType@saveItem');
		Route::delete('admin/deleteProductType/{id}', 'Admin\ProductType@deleteItem');
		Route::post('admin/saveProductModel', 'Admin\ProductModel@saveItem');
		Route::delete('admin/deleteProductModel/{id}', 'Admin\ProductModel@deleteItem');
		
		 //--hire start
        Route::post('admin/hire/saveBusinessCategroy', 'Admin\hire\BusinessCategroy@saveItem');
        Route::delete('admin/hire/deleteBusinessCategroy/{id}', 'Admin\hire\BusinessCategroy@deleteItem');
        Route::post('admin/hire/saveBusinessType', 'Admin\hire\BusinessType@saveItem'); 
        Route::delete('admin/hire/deleteBusinessType/{id}', 'Admin\hire\BusinessType@deleteItem');
        Route::post('admin/hire/saveProductType', 'Admin\hire\ProductType@saveItem');
        Route::delete('admin/hire/deleteProductType/{id}', 'Admin\hire\ProductType@deleteItem');  
        Route::post('admin/hire/saveProductModel', 'Admin\hire\ProductModel@saveItem');
        Route::delete('admin/hire/deleteProductModel/{id}', 'Admin\hire\ProductModel@deleteItem');   
        //--hire  delete end--
           
           
            
          //--manufacture start
          Route::post('admin/manufacture/saveBusinessCategroy', 'Admin\manufacture\BusinessCategroy@saveItem');
          Route::post('admin/manufacture/saveBusinessType', 'Admin\manufacture\BusinessType@saveItem'); 
          Route::delete('admin/manufacture/deleteBusinessCategroy/{id}', 'Admin\manufacture\BusinessCategroy@deleteItem');
          Route::delete('admin/manufacture/deleteBusinessType/{id}', 'Admin\manufacture\BusinessType@deleteItem');
          Route::post('admin/manufacture/saveProductType', 'Admin\manufacture\ProductType@saveItem');
          Route::post('admin/manufacture/saveProductModel', 'Admin\manufacture\ProductModel@saveItem');
          Route::delete('admin/manufacture/deleteProductType/{id}', 'Admin\manufacture\ProductType@deleteItem');   
          Route::delete('admin/manufacture/deleteProductModel/{id}', 'Admin\manufacture\ProductModel@deleteItem');   
          //--manufacture end--
            
          
             
          // --serviceprovider start
          Route::post('admin/serviceprovider/saveBusinessCategroy', 'Admin\serviceprovider\BusinessCategroy@saveItem');
          Route::post('admin/serviceprovider/saveBusinessType', 'Admin\serviceprovider\BusinessType@saveItem'); 
          Route::delete('admin/serviceprovider/deleteBusinessCategroy/{id}', 'Admin\serviceprovider\BusinessCategroy@deleteItem');
          Route::delete('admin/serviceprovider/deleteBusinessType/{id}', 'Admin\serviceprovider\BusinessType@deleteItem');
          Route::post('admin/serviceprovider/saveProductType', 'Admin\serviceprovider\ProductType@saveItem');
          Route::post('admin/serviceprovider/saveProductModel', 'Admin\serviceprovider\ProductModel@saveItem');
          Route::delete('admin/serviceprovider/deleteProductType/{id}', 'Admin\serviceprovider\ProductType@deleteItem');   
          Route::delete('admin/serviceprovider/deleteProductModel/{id}', 'Admin\serviceprovider\ProductModel@deleteItem');   
          //--serviceprovider end--
             
         
            
           //--wholesale  start
           Route::post('admin/wholesale/saveBusinessCategroy', 'Admin\wholesale\BusinessCategroy@saveItem');
           Route::delete('admin/wholesale/deleteBusinessCategroy/{id}', 'Admin\wholesale\BusinessCategroy@deleteItem');
           Route::post('admin/wholesale/saveBusinessType', 'Admin\wholesale\BusinessType@saveItem'); 
           Route::delete('admin/wholesale/deleteProductModel/{id}', 'Admin\wholesale\ProductModel@deleteItem');   
           Route::post('admin/wholesale/saveProductType', 'Admin\wholesale\ProductType@saveItem');
           Route::post('admin/wholesale/saveProductModel', 'Admin\wholesale\ProductModel@saveItem');
           Route::delete('admin/wholesale/deleteProductType/{id}', 'Admin\wholesale\ProductType@deleteItem');   
           //--wholesale end--
          
          
          //--importer start
          Route::post('admin/importer/saveBusinessCategroy', 'Admin\importer\BusinessCategroy@saveItem');
          Route::post('admin/importer/saveBusinessType', 'Admin\importer\BusinessType@saveItem'); 
          Route::delete('admin/importer/deleteBusinessCategroy/{id}', 'Admin\importer\BusinessCategroy@deleteItem');
          Route::delete('admin/importer/deleteBusinessType/{id}', 'Admin\importer\BusinessType@deleteItem');
          Route::post('admin/importer/saveProductType', 'Admin\importer\ProductType@saveItem');
          Route::post('admin/importer/saveProductModel', 'Admin\importer\ProductModel@saveItem');
          Route::delete('admin/importer/deleteProductType/{id}', 'Admin\importer\ProductType@deleteItem');   
          Route::delete('admin/importer/deleteProductModel/{id}', 'Admin\importer\ProductModel@deleteItem');   
         //--importer end--
            
         //--exporter start
         Route::post('admin/exporter/saveBusinessCategroy', 'Admin\exporter\BusinessCategroy@saveItem');
         Route::delete('admin/exporter/deleteBusinessCategroy/{id}', 'Admin\exporter\BusinessCategroy@deleteItem');
         Route::post('admin/exporter/saveBusinessType', 'Admin\exporter\BusinessType@saveItem'); 
         Route::delete('admin/exporter/deleteBusinessType/{id}', 'Admin\exporter\BusinessType@deleteItem');
         Route::post('admin/exporter/saveProductType', 'Admin\exporter\ProductType@saveItem');
         Route::post('admin/exporter/saveProductModel', 'Admin\exporter\ProductModel@saveItem');
         Route::delete('admin/exporter/deleteProductType/{id}', 'Admin\exporter\ProductType@deleteItem');   
         Route::delete('admin/exporter/deleteProductModel/{id}', 'Admin\exporter\ProductModel@deleteItem');   
         //--exporter end--
	});

	Route::get('admin/getCountryList', 'GetDropDownData@getCountryList');
	Route::get('admin/getCountyList/{id?}', 'GetDropDownData@getCountyList');
	Route::get('admin/getBusinessCategroyList', 'GetDropDownData@getBusinessCategroyList');
	Route::get('admin/getBusinessTypeList/{id?}', 'GetDropDownData@getBusinessTypeList');
	Route::get('admin/getProductTypeList/{id?}', 'GetDropDownData@getProductTypeList');
	
	
	//--hire  add dropdown start--
    Route::get('admin/hire/getHireBusinessCategroyList', 'admin\hire\GetDropDownData@getHireBusinessCategroyList');
    Route::get('admin/hire/getHireBusinessTypeList/{id?}', 'admin\hire\GetDropDownData@getHireBusinessTypeList');
    Route::get('admin/hire/getHireProductTypeList/{id?}', 'admin\hire\GetDropDownData@getHireProductTypeList');
    //--hire add dropdown end--
    
    
    //--manufacture  add dropdown start--
    Route::get('admin/manufacture/getmanufactureBusinessCategroyList', 'admin\manufacture\GetDropDownData@getmanufactureBusinessCategroyList');
    Route::get('admin/manufacture/getmanufactureBusinessTypeList/{id?}', 'admin\manufacture\GetDropDownData@getmanufactureBusinessTypeList');
    Route::get('admin/manufacture/getmanufactureProductTypeList/{id?}', 'admin\manufacture\GetDropDownData@getmanufactureProductTypeList');
    //--manufacture add dropdown end--
    
    //--serviceprovider  add dropdown start--
    Route::get('admin/serviceprovider/getserviceproviderBusinessCategroyList', 'admin\serviceprovider\GetDropDownData@getserviceproviderBusinessCategroyList');
    Route::get('admin/serviceprovider/getserviceproviderBusinessTypeList/{id?}', 'admin\serviceprovider\GetDropDownData@getserviceproviderBusinessTypeList');
    Route::get('admin/serviceprovider/getserviceproviderProductTypeList/{id?}', 'admin\serviceprovider\GetDropDownData@getserviceproviderProductTypeList');
    //--serviceprovider add dropdown end--
    
    //--wholesale  add dropdown start--
    Route::get('admin/wholesale/getwholesaleBusinessCategroyList', 'admin\wholesale\GetDropDownData@getwholesaleBusinessCategroyList');
    Route::get('admin/wholesale/getwholesaleBusinessTypeList/{id?}', 'admin\wholesale\GetDropDownData@getwholesaleBusinessTypeList');
    Route::get('admin/wholesale/getwholesaleProductTypeList/{id?}', 'admin\wholesale\GetDropDownData@getwholesaleProductTypeList');
    //--wholesale add dropdown end--
    
    
    //--importer  add dropdown start--
    Route::get('admin/importer/getimporterBusinessCategroyList', 'admin\importer\GetDropDownData@getimporterBusinessCategroyList');
    Route::get('admin/importer/getimporterBusinessTypeList/{id?}', 'admin\importer\GetDropDownData@getimporterBusinessTypeList');
    Route::get('admin/importer/getimporterProductTypeList/{id?}', 'admin\importer\GetDropDownData@getimporterProductTypeList');
    //--importer add dropdown end--
    
    
    
    //--exporter  add dropdown start--
    Route::get('admin/exporter/getexporterBusinessCategroyList', 'admin\exporter\GetDropDownData@getexporterBusinessCategroyList');
    Route::get('admin/exporter/getexporterBusinessTypeList/{id?}', 'admin\exporter\GetDropDownData@getexporterBusinessTypeList');
    Route::get('admin/exporter/getexporterProductTypeList/{id?}', 'admin\exporter\GetDropDownData@getexporterProductTypeList');
    //--exporter add dropdown end--
});


Route::get('account', function () {return view('dashboard.account');});
Route::get('retail-products', function () {return view('dashboard.retailProducts');});
Route::get('addretailerProducts', function () {return view('dashboard.addRetailProducts');});


Route::get('wholesellerProducts', function () {return view('dashboard.wholesale.wholesaleProducts');});
Route::get('addwholesellerProducts', function () {return view('dashboard.wholesale.addWholesaleProducts');});

Route::get('addretailProducts', function () {return view('dashboard.addRetailProducts');});




Route::get('/home-3', function () {return view('home.Envato.index');});
Route::get('/Envato/signup', function () {return view('home.Envato.signup');});
Route::get('/Envato/about', function () {return view('home.Envato.about');});
Route::get('/Envato/contact', function () {return view('home.Envato.contact');});
Route::get('/Envato/blog', function () {return view('home.Envato.blog');});
Route::get('/Envato/blog-single', function () {return view('home.Envato.blog-single');});
Route::get('/Envato/cart', function () {return view('home.Envato.cart');});
Route::get('/Envato/home-2', function () {return view('home.Envato.home-2');});
Route::get('/Envato/home-3', function () {return view('home.Envato.home-3');});
Route::get('/Envato/index-2', function () {return view('home.Envato.index-2');});
Route::get('/Envato/product-listing', function () {return view('home.Envato.product-listing');});
Route::get('/Envato/product-quick-view', function () {return view('home.Envato.product-quick-view');});
Route::get('/Envato/products', function () {return view('home.Envato.products');});
Route::get('/Envato/product-single', function () {return view('home.Envato.product-single');});
Route::get('/Envato/index13', function () {return view('home.Envato.index13');});
Route::get('/Envato/index12', function () {return view('home.Envato.index12');});
Route::get('/Envato/index11', function () {return view('home.Envato.index11');});
Route::get('/Envato/index10', function () {return view('home.Envato.index10');});


Route::get('/home-2', function () {return view('home.Kuti.index');});
Route::get('/Kuti/blog', function () {return view('home.Kuti.blog');});
Route::get('/Kuti/cart', function () {return view('home.Kuti.cart');});
Route::get('/Kuti/category-grid', function () {return view('home.Kuti.category-grid');});
Route::get('/Kuti/category-grid2', function () {return view('home.Kuti.category-grid2');});
Route::get('/Kuti/category-list', function () {return view('home.Kuti.category-list');});
Route::get('/Kuti/category-list2', function () {return view('home.Kuti.category-list2');});
Route::get('/Kuti/checkout', function () {return view('home.Kuti.checkout');});
Route::get('/Kuti/compare', function () {return view('home.Kuti.compare');});
Route::get('/Kuti/login', function () {return view('home.Kuti.login');});
Route::get('/Kuti/post', function () {return view('home.Kuti.post');});
Route::get('/Kuti/wishlist', function () {return view('home.Kuti.wishlist');});



Route::get('/home-1', function () {return view('home.Lotus.home');});
Route::get('/Lotus/404', function () {return view('home.Lotus.404');});
Route::get('/Lotus/blog', function () {return view('home.Lotus.blog');});
Route::get('/Lotus/blog-details', function () {return view('home.Lotus.blog-details');});
Route::get('/Lotus/category', function () {return view('home.Lotus.category');});
Route::get('/Lotus/checkout', function () {return view('home.Lotus.checkout');});
Route::get('/Lotus/contact', function () {return view('home.Lotus.contact');});
Route::get('/Lotus/contact-us', function () {return view('home.Lotus.contact-us');});
Route::get('/Lotus/detail', function () {return view('home.Lotus.detail');});
Route::get('/Lotus/faq', function () {return view('home.Lotus.faq');});
Route::get('/Lotus/index6c11', function () {return view('home.Lotus.index6c11');});
Route::get('/Lotus/index8a95', function () {return view('home.Lotus.index8a95');});
Route::get('/Lotus/my-wishlist', function () {return view('home.Lotus.my-wishlist');});
Route::get('/Lotus/product-comparison', function () {return view('home.Lotus.product-comparison');});
Route::get('/Lotus/shopping-cart', function () {return view('home.Lotus.shopping-cart');});
Route::get('/Lotus/sign-in', function () {return view('home.Lotus.sign-in');});
Route::get('/Lotus/terms-conditions', function () {return view('home.Lotus.terms-conditions');});
Route::get('/Lotus/track-orders', function () {return view('home.Lotus.track-orders');});
Route::get('/Lotus/switchstylesheet', function () {return view('home.Lotus.switchstylesheet');});
Route::get('/Lotus/Dress', function () {return view('home.Lotus.Dress');});
Route::get('/Lotus/cartt', function () {return view('home.Lotus.cartt');});


