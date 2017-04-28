
app.controller('AddRetailProductCtrl', ['$scope','CustomerService', function($scope, CustomerService) {
   	
    function intialize(){
        $scope.customer= {};
        $scope.navTab(2);
    }
  $scope.navTab = function(val){//alert(val);
		$scope.customer.currentTap = val;
		$(".steps").find("li").eq((val-1)).addClass("active");
		for(i=val; i<3;i++){
			$(".steps").find("li").eq((i)).removeClass("active");
		}
		$("#tab"+val).addClass("active");
		$(".progress-bar-success").css("width", (val*25)+"%");
	}
  $scope.customer ={
    MainCatagary:'', 
    Catagary: '',  
    SubCatagary: ''
  };
    
    $scope.$watch('customer.save.ProductOfferValidFrom', function () {
    if($scope.customer.save.ProductOfferValidFrom == undefined){
        $scope.customer.save.ProductOfferValidTo = "";
    }
    });
  $scope.maincatagaris = CustomerService.getMainCatagary();
    
  $scope.getMainCatagaryCatagarys = function(){
    $scope.catagaries = CustomerService.getMainCatagaryCatagary($scope.customer.MainCatagary);
    $scope.subcatagaries =[];
    $scope.customer.Catagary ="";
    $scope.customer.SubCatagary ="";
  }
  
  $scope.getCatagaryCities = function(){
    //debugger;
     $scope.subcatagaries = CustomerService.getCatagarySubCatagary($scope.customer.Catagary);
  }
  intialize();
}]);

app.factory("CustomerService", ['$filter', function($filter){
 var service = {};
  
  
  var maincatagarylist = [
            { "id": 1, "maincatagary": "Agriculture & Food" },
            { "id": 2, "maincatagary": "Apparel,Textiles & Accessories" },
            { "id": 3, "maincatagary": "Auto & Transportation" },

    ];
  
  var catagarylist = [
   {"Id":1, "catagary":"Agriculture", "maincatagaryId": 1},
    {"Id":3, "catagary":"Food & Beverage", "maincatagaryId": 1},
    {"Id":4, "catagary":"Apparel", "maincatagaryId": 2},
    {"Id":5, "catagary":"Textile & Leather Product", "maincatagaryId": 2},
    {"Id":6, "catagary":"Automobiles & Motorcycles", "maincatagaryId": 3},
  ];
  
  var subcatagarylist = [
    {"Id":1, "subcatagary":"Agricultural Growing Media", "catagaryId": 1},
    {"Id":2, "subcatagary":"Agricultural Waste", "catagaryId": 1},
    {"Id":3, "subcatagary":"Animal Products", "catagaryId": 1},
    {"Id":4, "subcatagary":"Beans", "catagaryId": 1},
    {"Id":5, "subcatagary":"Coffee Beans", "catagaryId": 1},
    {"Id":6, "subcatagary":"Farm Machinery & Equipment", "catagaryId": 1},
    {"Id":7, "subcatagary":"Feed", "catagaryId": 1},
    {"Id":8, "subcatagary":"Fresh Seafood", "catagaryId": 1},
    {"Id":9, "subcatagary":"Fruit", "catagaryId": 1},
    {"Id":10, "subcatagary":"Alcoholic Beverage", "catagaryId": 3},
    {"Id":11, "subcatagary":"Baby Food", "catagaryId": 3},
    {"Id":12, "subcatagary":"Baked Goods", "catagaryId": 3},
    {"Id":13, "subcatagary":"Bean Products", "catagaryId": 3},
    {"Id":14, "subcatagary":"Canned Food", "catagaryId": 3},
    {"Id":15, "subcatagary":"Apparel Design Services", "catagaryId": 4},
    {"Id":16, "subcatagary":"Apparel Processing Services", "catagaryId": 4},
    {"Id":17, "subcatagary":"Apparel Stock", "catagaryId": 4},
    {"Id":18, "subcatagary":"Children’s Clothing", "catagaryId": 4},
    {"Id":19, "subcatagary":"Coats", "catagaryId": 4},
    {"Id":20, "subcatagary":"Costumes", "catagaryId": 4},
    {"Id":21, "subcatagary":"Dresses", "catagaryId": 4},
    {"Id":22, "subcatagary":"Down & Feather", "catagaryId": 5},
    {"Id":23, "subcatagary":"Fabric", "catagaryId": 5},
    {"Id":24, "subcatagary":"Fiber", "catagaryId": 5},
    {"Id":25, "subcatagary":"Fur", "catagaryId": 5},
    {"Id":26, "subcatagary":"Grey Fabric", "catagaryId": 5},
    {"Id":27, "subcatagary":"Home Textile", "catagaryId": 5},
    {"Id":28, "subcatagary":"Leather", "catagaryId": 5},
    {"Id":29, "subcatagary":"Leather Product", "catagaryId": 5},
    {"Id":30, "subcatagary":"Other Textiles & Leather Products", "catagaryId": 5},
    {"Id":31, "subcatagary":"Aircraft", "catagaryId": 6},
    {"Id":32, "subcatagary":"Aviation Accessories", "catagaryId": 6},
    {"Id":33, "subcatagary":"Aviation Parts", "catagaryId": 6},
    {"Id":34, "subcatagary":"Bicycle", "catagaryId": 6},
    {"Id":35, "subcatagary":"Bicycle Accessories", "catagaryId": 6},
    {"Id":36, "subcatagary":"Bicycle Parts", "catagaryId": 6},
    {"Id":37, "subcatagary":"Boats & Ships", "catagaryId": 6},
    {"Id":38, "subcatagary":"Bus", "catagaryId": 6},
    {"Id":39, "subcatagary":"Bus Accessories", "catagaryId": 6},
    {"Id":40, "subcatagary":"Bus Parts", "catagaryId": 6},
    {"Id":41, "subcatagary":"Container", "catagaryId": 6},
    {"Id":42, "subcatagary":"Electric Bicycle", "catagaryId": 6},
    {"Id":43, "subcatagary":"Electric Bicycle Part", "catagaryId": 6},
    {"Id":44, "subcatagary":"Emergency Vehicles", "catagaryId": 6},
    {"Id":45, "subcatagary":"Golf Carts", "catagaryId": 6},
    {"Id":46, "subcatagary":"Locomotive", "catagaryId": 6},
    {"Id":47, "subcatagary":"Marine Supplies", "catagaryId": 6},
    {"Id":48, "subcatagary":"Personal Watercraft", "catagaryId": 6}
];
  
  service.getMainCatagary = function(){    
    return maincatagarylist;
  };
  
  service.getMainCatagaryCatagary = function(maincatagaryId){
    var states = ($filter('filter')(catagarylist, {maincatagaryId: maincatagaryId}));
    return states;
  };
  
  
  service.getCatagarySubCatagary = function(catagaryId){    
   
    var items = ($filter('filter')(subcatagarylist, {catagaryId: catagaryId}));      
    return items;
  };
  
  return service;
  
  
}]);
