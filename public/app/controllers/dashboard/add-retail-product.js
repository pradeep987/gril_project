
app.controller('AddRetailProductCtrl', ['$scope','CustomerService', function($scope, CustomerService) {
    	
  $scope.navTab = function(val){
		$scope.bussReg.currentTap = val;
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
  
}]);

app.factory("CustomerService", ['$filter', function($filter){
 var service = {};
  
  
  var maincatagarylist = [
            { "id": 1, "maincatagary": "USA" },
            { "id": 2, "maincatagary": "Canada" },
            { "id": 3, "maincatagary": "India" },
    ];
  
  var catagarylist = [
    {"Id":1, "catagary":"Alaska", "maincatagaryId": 1},
    {"Id":2, "catagary":"California", "maincatagaryId": 1},
    {"Id":3, "catagary":"New York", "maincatagaryId": 1},
    {"Id":4, "catagary":"New Brunswick", "maincatagaryId": 2},
    {"Id":5, "catagary":"Manitoba", "maincatagaryId": 2},
    {"Id":6, "catagary":"Delhi", "maincatagaryId": 3},
    {"Id":7, "catagary":"Bombay", "maincatagaryId": 3},
    {"Id":8, "catagary":"Calcutta", "maincatagaryId": 3}
  ];
  
  var subcatagarylist = [
    {"Id":1, "subcatagary":"Anchorage", "catagaryId": 1},
    {"Id":2, "subcatagary":"Fairbanks", "catagaryId": 1},
    {"Id":3, "subcatagary":"Lakes", "catagaryId": 1},
    {"Id":4, "subcatagary":"Palmer", "catagaryId": 1},
    {"Id":5, "subcatagary":"Adelanto", "catagaryId": 2},
    {"Id":6, "subcatagary":"Artesia", "catagaryId": 2},
    {"Id":7, "subcatagary":"Benicia", "catagaryId": 2},
    {"Id":8, "subcatagary":"Clovis", "catagaryId": 2},
    {"Id":9, "subcatagary":"Dublin", "catagaryId": 2},
    {"Id":10, "subcatagary":"Manhattan", "catagaryId": 3},
    {"Id":11, "subcatagary":"Bronx", "catagaryId": 3},
    {"Id":12, "subcatagary":"Brooklyn", "catagaryId": 3},
    {"Id":13, "subcatagary":"Queens", "catagaryId": 3},
    {"Id":14, "subcatagary":"Staten Island", "catagaryId": 3},
    {"Id":15, "subcatagary":"Bathurst", "catagaryId": 4},
    {"Id":16, "subcatagary":"Campbellton", "catagaryId": 4},
    {"Id":17, "subcatagary":"Dieppe", "catagaryId": 4},
    {"Id":18, "subcatagary":"Edmundston", "catagaryId": 4},
    {"Id":19, "subcatagary":"Fredericton", "catagaryId": 4},
    {"Id":20, "subcatagary":"Miramichi", "catagaryId": 4},
    {"Id":21, "subcatagary":"Moncton", "catagaryId": 4},
    {"Id":22, "subcatagary":"Brandon", "catagaryId": 5},
    {"Id":23, "subcatagary":"Dauphin", "catagaryId": 5},
    {"Id":24, "subcatagary":"Flin Flon", "catagaryId": 5},
    {"Id":25, "subcatagary":"Morden", "catagaryId": 5},
    {"Id":26, "subcatagary":"Portage la Prairie", "catagaryId": 5},
    {"Id":27, "subcatagary":"Selkirk", "catagaryId": 5},
    {"Id":28, "subcatagary":"Steinbach", "catagaryId": 5},
    {"Id":29, "subcatagary":"Thompson", "catagaryId": 5},
    {"Id":30, "subcatagary":"Winkler", "catagaryId": 5},
    {"Id":31, "subcatagary":"South Delhi", "catagaryId": 6},
    {"Id":32, "subcatagary":"North Delhi", "catagaryId": 6},
    {"Id":33, "subcatagary":"East Delhi", "catagaryId": 6},
    {"Id":34, "subcatagary":"West Delhi", "catagaryId": 6},
    {"Id":35, "subcatagary":"Old Delhi", "catagaryId": 6},
    {"Id":36, "subcatagary":"New Delhi", "catagaryId": 6},
    {"Id":37, "subcatagary":"Yamuna Paar", "catagaryId": 6},
    {"Id":38, "subcatagary":"Chembur", "catagaryId": 7},
    {"Id":39, "subcatagary":"Borivali West", "catagaryId": 7},
    {"Id":40, "subcatagary":"Ghatkopar West", "catagaryId": 7},
    {"Id":41, "subcatagary":"Juhu", "catagaryId": 7},
    {"Id":42, "subcatagary":"Mira Road", "catagaryId": 7},
    {"Id":43, "subcatagary":"Powai", "catagaryId": 7},
    {"Id":44, "subcatagary":"Virar West", "catagaryId": 7},
    {"Id":45, "subcatagary":"Rajarhat", "catagaryId": 8},
    {"Id":46, "subcatagary":"Park Street", "catagaryId": 8},
    {"Id":47, "subcatagary":"Golpark", "catagaryId": 8},
    {"Id":48, "subcatagary":"Chandan Nagar", "catagaryId": 8}
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
