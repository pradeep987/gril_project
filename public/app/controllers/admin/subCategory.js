app.controller('subCategoryCtrl', function ($scope, $http) {

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
										   { field: 'mcId', displayName: 'Main Category', visible:false },
										   { field: 'mcVal', displayName: 'Main Category'},
                                           { field: 'categoryId', displayName: 'Category', visible:false },
										   { field: 'categoryVal', displayName: 'Category'},
										   { field: 'name', displayName: 'SubCategory'},
										   { field: 'active', displayName: 'Active', width: 90},
										   { field: 'action', displayName: 'Actions', width: 90, enableFiltering: false, cellClass: 'grid-align', cellTemplate: 
											 '<div class="grid-action-cell">'+
											 '<span style="font-size:0.5em;" class="btn btn-info glyphicon glyphicon-pencil" ng-click="grid.appScope.updateRow(row.entity);"></span>&nbsp;&nbsp;<span style="font-size:0.5em;" class="btn btn-danger glyphicon glyphicon-remove"   id="delRowDtl" ng-click="grid.appScope.delRowDtl(row.entity);" data-toggle="modal" data-target="#delModal"></span></div>'}
										  ];
    	  getAllSubCategoryList();
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
	 
	 $scope.saveSubCategory = function(){
		 $http({
			method : "POST",
			url : "saveSubCategory",
			data: $scope.saveItem,
			dataType: 'json',
		}).then(function(response) {
			if(response.data.successMsg){
				getAllSubCategoryList();
				$scope.errorMsg = false;
				$scope.successMsg = true;
				$scope.responseMsg = response.data.successMsg;
				$scope.saveItem = {};
				$scope.saveItem.active = false;
				$scope.saveItem.id = 0;
			}else{
				$scope.responseMsg = response.data.errorMsg;
				$scope.errorMsg = true;
				$scope.successMsg = false;
			}
		});
	 };
	 
	 $scope.updateRow =  function(row){
		$scope.saveItem.id = row.id;
		$scope.saveItem.subCategory = row.name;
		$scope.saveItem.categoryId = row.categoryId;
		$scope.saveItem.mcId = row.mcId;
		$scope.saveItem.active = row.active === "True" ? true : false;
		$scope.showAddItem=true;
		$scope.errorMsg=false;
		$scope.successMsg=false;
		$scope.headerTxt = "Edit SubCategory";
	 };
	 
	 $scope.addRow =  function(){
		$scope.saveItem = {};
		$scope.saveItem.active = false;
		$scope.saveItem.id = 0;
		$scope.showAddItem=true;
		$scope.errorMsg=false;
		$scope.successMsg=false;
		$scope.headerTxt = "Add SubCategory";
	 };
	 
	 $scope.deleteRow =  function(){
		var id = $(".modal-body #rowId").val();
		if(id > 0){
			$http({
				method : "POST",
				url : "deleteSubCategory",
				data: { 'id' : id }
			}).then(function(response) {
				if(response.data.successMsg){
					getAllSubCategoryList();
					$scope.errorMsg = false;
					$scope.successMsg = true;
					$scope.responseMsg = response.data.successMsg;
				}else{
					$scope.responseMsg = response.data.errorMsg;
					$scope.errorMsg = true;
					$scope.successMsg = false;
				}
			});
		}
	 };
	 
	 $scope.delRowDtl = function(row){
		$(".modal-body #subCategoryName").text( row.name ); 
		$(".modal-body #rowId").val( row.id ); 
	 }
	 
	 function getAllSubCategoryList(){
		 $http({
			method : "GET",
			url : "getAllSubCategoryList",
			cache : false
		}).then(function(response) {
			$scope.gridOptions.data = response.data;
		});
	 }
	 
	 $scope.getDropDownList = function(){
		
		$scope.categoryList = [];
		$http({
			method : "GET",
			url : "getMainCategoryList",
			cache : true
		}).then(function(response) {
			$scope.mcList = response.data;
		});
	}
	
	$scope.$watch('saveItem.mcId', function(newValue, oldValue, scope){
		if(newValue == oldValue)
			return false;
		if(newValue){
			$http({
				method : "GET",
				url : "getCategoryList/"+newValue,
				cache : true
			}).then(function(response) {
				$scope.categoryList = response.data;
			});
		}else{
			$scope.categoryList = [];
		}
	});
	 
	 initialize();
	 
	 $(window).load(function() {
		  angular.element("#gridStyle .ui-grid-filter-container").hide();
	 });
});