app.controller('areaCtrl', function ($scope, $http) {

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
										   { field: 'countryId', displayName: 'Country', visible:false },
										   { field: 'countryVal', displayName: 'Country'},
                                           { field: 'stateId', displayName: 'State', visible:false },
										   { field: 'stateVal', displayName: 'State'},
										   { field: 'cityId', displayName: 'City', visible:false },
										   { field: 'cityVal', displayName: 'City'},
										   { field: 'name', displayName: 'Area'},
										   { field: 'postalCode', displayName: 'Postal Code'},
										   { field: 'active', displayName: 'Active', width: 90},
										   { field: 'action', displayName: 'Actions', width: 90, enableFiltering: false, cellClass: 'grid-align', cellTemplate: 
											 '<div class="grid-action-cell">'+
											 '<span style="font-size:0.5em;" class="btn btn-info glyphicon glyphicon-pencil" ng-click="grid.appScope.updateRow(row.entity);"></span>&nbsp;&nbsp;<span style="font-size:0.5em;" class="btn btn-danger glyphicon glyphicon-remove"   id="delRowDtl" ng-click="grid.appScope.delRowDtl(row.entity);" data-toggle="modal" data-target="#delModal"></span></div>'}
										  ];
    	  getAllAreaList();
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
	 
	 $scope.saveArea = function(){
		 $http({
			method : "POST",
			url : "saveArea",
			data: $scope.saveItem,
			dataType: 'json',
		}).then(function(response) {
			if(response.data.successMsg){
				getAllAreaList();
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
		$scope.saveItem.area = row.name;
		$scope.saveItem.stateId = row.stateId;
		$scope.saveItem.countryId = row.countryId;
		$scope.saveItem.cityId = row.cityId;
		$scope.saveItem.postalCode = row.postalCode;
		$scope.saveItem.active = row.active === "True" ? true : false;
		$scope.showAddItem=true;
		$scope.errorMsg=false;
		$scope.successMsg=false;
		$scope.headerTxt = "Edit Area";
	 };
	 
	 $scope.addRow =  function(){
		$scope.saveItem = {};
		$scope.saveItem.active = false;
		$scope.saveItem.id = 0;
		$scope.showAddItem=true;
		$scope.errorMsg=false;
		$scope.successMsg=false;
		$scope.headerTxt = "Add Area";
	 };
	 
	 $scope.deleteRow =  function(){
		var id = $(".modal-body #rowId").val();
		if(id > 0){
			$http({
				method : "POST",
				url : "deleteArea",
				data: { 'id' : id }
			}).then(function(response) {
				if(response.data.successMsg){
					getAllAreaList();
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
		$(".modal-body #areaName").text( row.name ); 
		$(".modal-body #rowId").val( row.id ); 
	 }
	 
	 function getAllAreaList(){
		 $http({
			method : "GET",
			url : "getAllAreaList",
			cache : false
		}).then(function(response) {
			$scope.gridOptions.data = response.data;
		});
	 }
	 
	 $scope.getDropDownList = function(){
		
		$scope.categoryList = [];
		$http({
			method : "GET",
			url : "getCountryList",
			cache : true
		}).then(function(response) {
			$scope.countryList = response.data;
		});
	}
	
	$scope.$watch('saveItem.countryId', function(newValue, oldValue, scope){
		if(newValue == oldValue)
			return false;
		if(newValue){
			$http({
				method : "GET",
				url : "getStateList/"+newValue,
				cache : true
			}).then(function(response) {
				$scope.stateList = response.data;
			});
		}else{
			$scope.stateList = [];
		}
	});
	
	$scope.$watch('saveItem.stateId', function(newValue, oldValue, scope){
		if(newValue == oldValue)
			return false;
		if(newValue){
			$http({
				method : "GET",
				url : "getCityList/"+newValue,
				cache : true
			}).then(function(response) {
				$scope.cityList = response.data;
			});
		}else{
			$scope.cityList = [];
		}
	});
	 
	 initialize();
	 
	 $(window).load(function() {
		  angular.element("#gridStyle .ui-grid-filter-container").hide();
	 });
});