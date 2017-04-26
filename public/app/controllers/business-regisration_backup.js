app.controller("businessRegisration", function($scope, $http){
	var geocoder;
	var map;
	var infowindow;
	var fullAddr = "";
	
	function intialize(){
		$scope.bussReg = {};
		$scope.bussReg.save = {};
		$scope.navTab(1);
		$scope.bussReg.comOtherMob = [];
		$scope.bussReg.comOtherMobCnt = 0;
		$scope.bussReg.comOtherLL = [];
		$scope.bussReg.comOtherLLCnt = 0;
		$scope.bussReg.comOtherEmail = [];
		$scope.bussReg.comOtherEmailCnt = 0;
		$scope.bussReg.mobPatteern = /^[1-9]{1}[0-9]{9}$/;
		$scope.bussReg.emailPatteern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		$scope.bussReg.landLinePatteern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
		$scope.bussReg.passwordStrength = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
		$scope.bussReg.urlPatteern = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
		
		$scope.getDropDownList();
		$(".select2").select2({
            allowClear: true
        });
		
		google.maps.event.addDomListener(window, 'load', initialize);
	}
	
	$scope.scorePassword = function(pass) {
		var score = 0, pwdStrength = "Pawword is ";
		if (!pass)
			return score;
		if(pass.length < 6)
			return score;

		// award every unique letter until 5 repetitions
		var letters = new Object();
		
		// bonus points for mixing it up
		var variations = {
			digits: /\d/.test(pass),
			lower: /[a-z]/.test(pass),
			upper: /[A-Z]/.test(pass),
			nonWords: /\W/.test(pass),
		}

		variationCount = 0;
		for (var check in variations) {
			variationCount += (variations[check] == true) ? 2.5 : 0;
		}
		score += (variationCount) * 10;
		
		if(parseInt(score) >= 70)
			pwdStrength += "Strong";
		else if(parseInt(score) >= 60)
			pwdStrength += "medium";
		else
			pwdStrength += "week";

		return pwdStrength;
	}
	
	$scope.navTab = function(val){
		$scope.bussReg.currentTap = val;
		$(".steps").find("li").eq((val-1)).addClass("active");
		for(i=val; i<3;i++){
			$(".steps").find("li").eq((i)).removeClass("active");
		}
		$("#tab"+val).addClass("active");
		$(".progress-bar-success").css("width", (val*25)+"%");
	}
	
	$scope.addAnotherMob = function(){
		$scope.bussReg.comOtherMob.push($scope.bussReg.comOtherMobCnt++);
	}
	
	$scope.delAnotherMob = function(val){
		var index = $scope.bussReg.comOtherMob.indexOf(val);
		if (index > -1) {
			$scope.bussReg.comOtherMob.splice(index, 1);
		}
	}
	
	$scope.addAnotherLL = function(){
		$scope.bussReg.comOtherLL.push($scope.bussReg.comOtherLLCnt++);
	}
	
	$scope.delAnotherLL = function(val){
		var index = $scope.bussReg.comOtherLL.indexOf(val);
		if (index > -1) {
			$scope.bussReg.comOtherLL.splice(index, 1);
		}
	}
	
	$scope.addAnotherEmail = function(){
		$scope.bussReg.comOtherEmail.push($scope.bussReg.comOtherEmailCnt++);
	}
	
	$scope.delAnotherEmail = function(val){
		var index = $scope.bussReg.comOtherEmail.indexOf(val);
		if (index > -1) {
			$scope.bussReg.comOtherEmail.splice(index, 1);
		}
	}
	
	$scope.getDropDownList = function(){
		$http({
			method : "GET",
			url : "getStateList",
			cache : true
		}).then(function(response) {
			$scope.bussReg.getStateList = response.data;
		});
		$http({
			method : "GET",
			url : "getCityList",
			cache : true
		}).then(function(response) {
			$scope.bussReg.getCityList = response.data;
		});
		$http({
			method : "GET",
			url : "getPostCodeList",
			cache : true
		}).then(function(response) {
			$scope.bussReg.getPostCodeList = response.data;
		});

	}
	
	$scope.getCityList = function(){
		/*var url = ""
		if($scope.bussReg.save.countyId){
			url="?id="+$scope.bussReg.save.countyId;
		}
		$http({
			method : "GET",
			url : "getCityList"+url,
			cache : true
		}).then(function(response) {
			$scope.bussReg.getCityList = response.data;
		});
		//$('#city').trigger('change.select2');
		
		$("#city").select2("destroy");

		$("#city").select2();*/
	}
	
	$scope.getPostCodeList = function(){
		/*var url = ""
		if($scope.bussReg.save.city){
			url="?id="+$scope.bussReg.save.city;
		}
		$http({
			method : "GET",
			url : "getPostCodeList"+url,
			cache : true
		}).then(function(response) {
			$scope.bussReg.getPostCodeList = response.data;
		});
		//$('#post-code').trigger('change.select2');
		$("#post-code").select2("destroy");

		$("#post-code").select2();*/
	}
	
	$scope.$watchGroup(['bussReg.save.addressNo', 'bussReg.save.addr1', 'bussReg.save.addr2', 'bussReg.save.countyId', 'bussReg.save.countyuserVal', 'bussReg.save.city', 'bussReg.save.cityuserVal', 'bussReg.save.postCode', 'bussReg.save.postCodeuserVal'], function(newValues, oldValues, scope) {
		if(scope.bussReg.save.addressNo && scope.bussReg.save.addr1 && (scope.bussReg.save.city || scope.bussReg.save.cityuserVal) && (scope.bussReg.save.postCode || scope.bussReg.save.postCodeuserVal)){
			 debugger;
			 var fullAddr = scope.bussReg.save.addressNo+","+scope.bussReg.save.addr1; var postalcode = "";
			 
			 if(scope.bussReg.save.addr2)
				 fullAddr += ","+scope.bussReg.save.addr2;
			 
			 if(scope.bussReg.save.countyuserVal)
				 fullAddr += ","+scope.bussReg.save.countyuserVal;
			 else if(scope.bussReg.save.countyId)
				 fullAddr += ","+$('#county').select2('data')[0]['text'];
			 
			 if(scope.bussReg.save.cityuserVal)
				 fullAddr += ","+scope.bussReg.save.cityuserVal;
			 else
				 fullAddr += ","+$('#city').select2('data')[0]['text'];
			 
			 if(scope.bussReg.save.postCodeuserVal){
				 fullAddr += ","+scope.bussReg.save.postCodeuserVal;
				 postalcode = scope.bussReg.save.postCodeuserVal;
			 }else{
				 fullAddr += ","+$('#post-code').select2('data')[0]['text'];
				 postalcode = $('#post-code').select2('data')[0]['text'];
			 }
			 if(!$scope.showMap(fullAddr)){
				 $scope.showMap(postalcode);
			 }
		 }
	});
	
	
	function callback(results, status) {
	  if (status == google.maps.places.PlacesServiceStatus.OK) {
		for (var i = 0; i < results.length; i++) {
		  createMarker(results[i]);
		}
	  }
	}

	function createMarker(place) {
	  var placeLoc = place.geometry.location;
	  var marker = new google.maps.Marker({
		map: map,
		position: place.geometry.location
	  });

	  google.maps.event.addListener(marker, 'mouseover', function() {
		infowindow.setContent(place.name);
		infowindow.open(map, this);
	  });
	}
	
	function initialize() {
	  geocoder = new google.maps.Geocoder();
	  var loca = new google.maps.LatLng(41.7475, -74.0872);
	  
	  map = new google.maps.Map(document.getElementById('map'), {
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		center: loca,
		zoom: 8
	  });

	}
	
	
	
	$scope.showMap = function(address){
		  geocoder.geocode({
			'address': address
		  }, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				
		
			  map.setCenter(results[0].geometry.location);
			  
			  var infowindow = new google.maps.InfoWindow({
				content: '<b>' + address + '</b>',
				size: new google.maps.Size(150, 50)
			  });

		  
			  var marker = new google.maps.Marker({
				draggable: true,
				map: map,
				position: results[0].geometry.location,
				title: fullAddr
			  });
			  
			  google.maps.event.addListener(marker, 'dragend', function (event) {
				document.getElementById("latitude").value = event.latLng.lat();
				document.getElementById("longitude").value = event.latLng.lng();
				
				var latlng = new google.maps.LatLng(event.latLng.lat(), event.latLng.lng());
				var geocoder = geocoder = new google.maps.Geocoder();
				geocoder.geocode({ 'latLng': latlng }, function (results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						if (results[1]) {
							var indice=0;
							for (var i=0; i<results[0].address_components.length; i++)
							{
								if (results[0].address_components[i].types[0] == "locality") {
									//this is the object you are looking for
									var city = results[0].address_components[i].long_name;
								}
								if (results[0].address_components[i].types[0] == "administrative_area_level_1") {
									//this is the object you are looking for
									var region = results[0].address_components[i].long_name;
								}if (results[0].address_components[i].types[0] == "administrative_area_level_2") {
									//this is the object you are looking for
									var district = results[0].address_components[i].long_name;
								}
								if (results[0].address_components[i].types[0] == "country") {
									//this is the object you are looking for
									var country = results[0].address_components[i].long_name;
								}
								if (results[0].address_components[i].types[0] == "postal_code") {
									//this is the object you are looking for
									var postalcode = results[0].address_components[i].long_name;
								}if (results[0].address_components[i].types[0] == "route") {
									//this is the object you are looking for
									var street = results[0].address_components[i].long_name;
								}
							}

							

								}
					}
				});
			  });
			
			  google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map, marker);
			  });
			  return true;
			} else {
			  return false;
			}
		  });

	}
	
	
	intialize();
	
});