app.controller('stateCtrl', function ($scope, $http) {

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
										   { field: 'name', displayName: 'County'},
                                           
                                           { field: 'seo_title', displayName: 'seo_title', visible:false },
										   { field: 'seo_url', displayName: 'seo_url', visible:false },
										   { field: 'seo_desc', displayName: 'seo_desc', visible:false },
										   { field: 'seo_keywords', displayName: 'seo_keywords', visible:false },
										   { field: 'seo_tags', displayName: 'seo_tags', visible:false },
                                           
										   { field: 'active', displayName: 'Active', width: 90},
										   { field: 'action', displayName: 'Actions', width: 90, enableFiltering: false, cellClass: 'grid-align', cellTemplate: 
											 '<div class="grid-action-cell">'+
											 '<span style="font-size:0.5em;" class="btn btn-info glyphicon glyphicon-pencil" ng-click="grid.appScope.updateRow(row.entity);" data-toggle="modal" data-target="#addModal"></span>&nbsp;&nbsp;<span style="font-size:0.5em;" class="btn btn-danger glyphicon glyphicon-remove"   id="delRowDtl" ng-click="grid.appScope.delRowDtl(row.entity);" data-toggle="modal" data-target="#delModal"></span></div>'}
										  ];
    	  getAllCountyList();
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
	 
	 $scope.saveCounty = function(){//alert($scope.saveItem.countryId)
		 $http({
			method : "POST",
			url : "saveCounty",
			data: $scope.saveItem,
			dataType: 'json',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		}).then(function(response) {
			if(response.data.successMsg){
				getAllCountyList();
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
	 
	 $scope.updateRow =  function(row){//alert(row.name);
		$scope.saveItem.id = row.id;
		$scope.saveItem.county = row.name;
		$scope.saveItem.countryId = row.countryId;
                                       
        $scope.saveItem.seoTitle = row.seo_title;
		$scope.saveItem.seoUrl = row.seo_url;
		$scope.saveItem.seoDesc = row.seo_desc;
		$scope.saveItem.seoKeywords = row.seo_keywords;
		$scope.saveItem.seoTags = row.seo_tags;	
                                       
		$scope.saveItem.active = row.active === "True" ? true : false;
		$scope.showAddItem=true;
		$scope.errorMsg=false;
		$scope.successMsg=false;
		$scope.headerTxt = "Edit Country";
	 };
	 
	 $scope.addRow =  function(){
		$scope.saveItem = {};
		$scope.saveItem.active = false;
		$scope.saveItem.id = 0;
		$scope.saveItem.county = "";
		$scope.saveItem.countryId = "";
                                       
        $scope.saveItem.seoTitle = "";
		$scope.saveItem.seoUrl = "";
		$scope.saveItem.seoDesc = "";
		$scope.saveItem.seoKeywords = "";
		$scope.saveItem.seoTags = "";	
		$scope.showAddItem=true;
		$scope.errorMsg=false;
		$scope.successMsg=false;
		$scope.headerTxt = "Add Country";
	 };
	 
	 $scope.deleteRow =  function(){
		var id = $(".modal-body #rowId").val();
		if(id > 0){
			$http({
				method : "DELETE",
				url : "deleteCounty/"+id,
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			}).then(function(response) {
				if(response.data.successMsg){
					getAllCountyList();
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
		$(".modal-body #CountryName").text( row.name ); 
		$(".modal-body #rowId").val( row.id ); 
	 }
	 
	 function getAllCountyList(){
		 $http({
			method : "GET",
			url : "getAllCountyList",
			cache : false
		}).then(function(response) {
			$scope.gridOptions.data = response.data;
		});
	 }
	 
	 $scope.getDropDownList = function(){
		$http({
			method : "GET",
			url : "getCountryList",
			cache : true
		}).then(function(response) {//alert(response.data)
			$scope.countryList = response.data;
		});
	}
	 
	 initialize();
	 
	 $(window).load(function() {
		  angular.element("#gridStyle .ui-grid-filter-container").hide();
	 });
});