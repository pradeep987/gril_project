app.controller('businessModelCtrl', function ($scope, $http) {

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
                                           { field: 'name', displayName: 'Business Model'},
                                           { field: 'tbl_name', displayName: 'Table Name'},
                                           { field: 'short_name', displayName: 'Short Name'},
                                           { field: 'icon', displayName: 'Icon'},
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
    	  getAllBusinessModelList();
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
	 
	 $scope.saveBusinessModel = function(){
		 $http({
			method : "POST",
			url : "saveBusinessModel",
			data: $scope.saveItem,
			dataType: 'json',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		}).then(function(response) {
			if(response.data.successMsg){
				getAllBusinessModelList();
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
		$scope.saveItem.businessModel = row.name;
		$scope.saveItem.tblName = row.tbl_name;
		$scope.saveItem.shortName = row.short_name;
		$scope.saveItem.iconName = row.icon;
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
		$scope.headerTxt = "Edit Business Model";
	 };
	 
	 $scope.addRow =  function(){
		$scope.saveItem = {};
		$scope.saveItem.active = false;
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
		$scope.headerTxt = "Add Business Model";
	 };
	 
	 $scope.deleteRow =  function(){
		var id = $(".modal-body #rowId").val();
		if(id > 0){
			$http({
				method : "DELETE",
				url : "deleteBusinessModel/"+id,
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			}).then(function(response) {
				if(response.data.successMsg){
					getAllBusinessModelList();
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
		$(".modal-body #businessModelName").text( row.name ); 
		$(".modal-body #rowId").val( row.id ); 
	 }
	 
	 function getAllBusinessModelList(){
		 $http({
			method : "GET",
			url : "getAllBusinessModelList",
			cache : false
		}).then(function(response) {
			$scope.gridOptions.data = response.data;
		});
	 }
	 
	 initialize();
	 
	 $(window).load(function() {
		  angular.element("#gridStyle .ui-grid-filter-container").hide();
	 });
});