app.controller('productModelCtrl', function ($scope, $http) {

	$scope.paginationOptions = { pageNumber : 1, pageSize : 25, sort : null }; 

    function initialize(){
		  $scope.saveItem = {};		
		  $scope.saveItem.active = false;
		  $scope.errorMsg = false;
		  $scope.successMsg = false;
    	  $scope.gridOptions = {
			  enablePaging: true,
    		  paginationPageSizes : [ 25, 50, 75 ],
    		  paginationPageSize : $scope.paginationOptions.pageSize,
			  enableColumnResize: true,
			  enableColumnMenus: false,
    		  enableFiltering : true,
    		  onRegisterApi: function(gridApi){
	    		  $scope.gridApi = gridApi;
			  }
    	  };
    	  $scope.gridOptions.enableColumnResizing = true;
    	  $scope.gridOptions.enableGridMenu = false;
    	  $scope.gridOptions.fastWatch = true;
    	  $scope.gridOptions.multiSelect = false;
    	  $scope.gridOptions.enableCellEdit = false;
		  
		  $scope.gridOptions.columnDefs = [{ field: 'id', displayName: 'Id', visible:false },
										   { field: 'bcId', displayName: 'Bussiness Category', visible:false },
										   { field: 'btId', displayName: 'Bussiness Model', visible:false },
										   { field: 'ptId', displayName: 'Product Type', visible:false },
										   { field: 'bcVal', displayName: 'Bussiness Category'},
										   { field: 'btVal', displayName: 'Bussiness Model'},
										   { field: 'ptVal', displayName: 'Product Type'},
                                           { field: 'name', displayName: 'Product Model'},
										   { field: 'seo_title', displayName: 'seo_title', visible:false },
										   { field: 'seo_url', displayName: 'seo_url', visible:false },
										   { field: 'seo_desc', displayName: 'seo_desc', visible:false },
										   { field: 'seo_keywords', displayName: 'seo_keywords', visible:false },
										   { field: 'seo_tags', displayName: 'seo_tags', visible:false },
										   
										   { field: 'active', displayName: 'Active', width: 90},
										   { field: 'action', displayName: 'Actions', width: 90, enableFiltering: false, cellClass: 'grid-align', cellTemplate: 
											 '<div class="grid-action-cell">'+
											 '<span style="font-size:0.5em;" class="btn btn-info glyphicon glyphicon-pencil" ng-click="grid.appScope.updateRow(row.entity);" data-toggle="modal" data-target="#addModel"></span>&nbsp;&nbsp;<span style="font-size:0.5em;" class="btn btn-danger glyphicon glyphicon-remove"   id="delRowDtl" ng-click="grid.appScope.delRowDtl(row.entity);" data-toggle="modal" data-target="#delModel"></span></div>'}
										  ];
    	  getAllProductModelList();
		  $scope.getDropDownList();
		  $(".gridStyle").css("height","");
	 }
     $scope.toggleFiltering = function(type){  
    	  /* Auto Filter Enable Or Disable */
    	 
    	  if(angular.element("#"+type+" .ui-grid-filter-container").css('display') == "block"){
	         angular.element("#"+type+" .ui-grid-filter-container").hide();
	      }else{
	         angular.element("#"+type+" .ui-grid-filter-container").show();
	      }
	 };
	 
	 $scope.saveProductModel = function(){
		 $scope.saveItem.bussCategoryName = $('[name="bcId"] option:selected').text();
		 $scope.saveItem.bussTypeName = $('[name="btId"] option:selected').text();
		 $scope.saveItem.prodTypeName = $('[name="ptId"] option:selected').text();
		 $http({
			method : "POST",
			url : "saveProductModel",
			data: $scope.saveItem,
			dataModel: 'json',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		}).then(function(response) {
			if(response.data.successMsg){
				getAllProductModelList();
				$scope.errorMsg = false;
				$scope.successMsg = true;
				$scope.responseMsg = response.data.successMsg;
				if(!$scope.saveItem.id){
					$scope.saveItem = {};
					$scope.saveItem.active = false;
					$scope.saveItem.id = 0;
				}
					
			}else{
				$scope.responseMsg = response.data.errorMsg;
				$scope.errorMsg = true;
				$scope.successMsg = false;
			}
		});
	 };
	 
	 $scope.updateRow =  function(row){
		$scope.saveItem.id = row.id;
		$scope.saveItem.bcId = row.bcId;
		$scope.saveItem.btId = row.btId;
		$scope.saveItem.ptId = row.ptId;
		$scope.saveItem.bussCategoryName = "";
		$scope.saveItem.bussTypeName = "";
		$scope.saveItem.prodTypeName = "";
		$scope.saveItem.productModel = row.name;		
		$scope.saveItem.seoTitle = row.seo_title;
		$scope.saveItem.seoUrl = row.seo_url;
		$scope.saveItem.seoDesc = row.seo_desc;
		$scope.saveItem.seoKeywords = row.seo_keywords;
		$scope.saveItem.seoTags = row.seo_tags;		
		$scope.saveItem.active = row.active === "True" ? true : false;
		$scope.showAddItem=true;
		$scope.errorMsg=false;
		$scope.successMsg=false;
		$scope.delErrorMsg=false;
		$scope.delSuccessMsg=false;
		$scope.headerTxt = "Edit Product Model";
	 };
	 
	 $scope.addRow =  function(){
		$scope.saveItem = {};
		$scope.saveItem.active = false;
		$scope.saveItem.bcId = "";
		$scope.saveItem.btId = "";
		$scope.saveItem.ptId = "";
		$scope.saveItem.bussCategoryName = "";
		$scope.saveItem.bussTypeName = "";
		$scope.saveItem.prodTypeName = "";
		$scope.saveItem.id = 0;
		$scope.saveItem.seoTitle = "";
		$scope.saveItem.seoUrl = "";
		$scope.saveItem.seoDesc = "";
		$scope.saveItem.seoKeywords = "";
		$scope.saveItem.seoTags = "";	
		$scope.showAddItem=true;
		$scope.errorMsg=false;
		$scope.successMsg=false;
		$scope.delErrorMsg=false;
		$scope.delSuccessMsg=false;
		$scope.headerTxt = "Add Product Model";
	 };
	 
	 $scope.deleteRow =  function(){
		var id = $(".modal-body #rowId").val();
		if(id > 0){
			$http({
				method : "DELETE",
				url : "deleteProductModel/"+id,
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			}).then(function(response) {
				if(response.data.successMsg){
					getAllProductModelList();
					$scope.delErrorMsg = false;
					$scope.delSuccessMsg = true;
					$scope.responseMsg = response.data.successMsg;
				}else{
					$scope.responseMsg = response.data.errorMsg;
					$scope.delErrorMsg = true;
					$scope.delSuccessMsg = false;
				}
			});
		}
	 };
	 
	 $scope.delRowDtl = function(row){
		$(".modal-body #productModelName").text( row.name ); 
		$(".modal-body #rowId").val( row.id ); 
	 }
	 
	 function getAllProductModelList(){
		 $http({
			method : "GET",
			url : "getAllProductModelList",
			cache : false
		}).then(function(response) {
			$scope.gridOptions.data = response.data;
		});
	 }
	 
	$scope.getDropDownList = function(){
		$http({
			method : "GET",
			url : "getexporterBusinessCategroyList",
			cache : true
		}).then(function(response) {
			$scope.bussinessCategoryList = response.data;
		});
	}
	
	$scope.$watch('saveItem.bcId', function(newValue, oldValue, scope){
		if(newValue == oldValue)
			return false;
		if(newValue){
			$http({
				method : "GET",
				url : "getexporterBusinessTypeList/"+newValue,
				cache : true
			}).then(function(response) {
				$scope.businessTypeList = response.data;
			});
		}else{
			$scope.businessTypeList = [];
		}
	});
	
	$scope.$watch('saveItem.btId', function(newValue, oldValue, scope){
		if(newValue == oldValue)
			return false;
		if(newValue){
			$http({
				method : "GET",
				url : "getexporterProductTypeList/"+newValue,
				cache : true
			}).then(function(response) {
				$scope.productTypeList = response.data;
			});
		}else{
			$scope.productTypeList = [];
		}
	});
	 
	 initialize();
	 
	 $(window).load(function() {
		  angular.element("#gridStyle .ui-grid-filter-container").hide();
	 });
});