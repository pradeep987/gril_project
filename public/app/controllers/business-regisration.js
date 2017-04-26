app.controller("businessRegisration", function($scope, $http){
	var geocoder, map, infowindow;
	var fullAddr = "",map_city = "",map_region = "",map_district = "",map_country = "",map_postalcode = "",map_street = "",map_city_short = "",map_region_short = "",map_district_short = "",map_country_short = "",map_postalcode_short = "",map_street_short = "";
	var sec = 5, refreshInterval = null, marker = "", cnt=0;
	function intialize(){
		$scope.bussReg = {};
		$scope.bussReg.save = {};
		$scope.navTab(1);
		$scope.bussReg.mobPatteern = /^[1-9]{1}[0-9]{9}$/;
		$scope.bussReg.emailPatteern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		$scope.bussReg.landLinePatteern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
		$scope.bussReg.passwordStrength = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
		$scope.bussReg.urlPatteern = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
		
		$scope.getDropDownList();
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
	
	$scope.someSelected = function (object) {
		if(object){
			return Object.keys(object).some(function (key) {
				return object[key];
			});
		}
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
	
	$scope.getDropDownList = function(){
		$http({
			method : "GET",
			url : "getBussinessModel",
			cache : true
		}).then(function(response) {
			$scope.bussReg.getBussinessModelList = response.data;
		});
	}
	
	/*$scope.$watchGroup(['bussReg.save.addressNo', 'bussReg.save.addr1', 'bussReg.save.addr2', 'bussReg.save.city', 'bussReg.save.postalCode', 'bussReg.save.county'], function(newValues, oldValues, scope) {
		
	});*/
	
	
	$scope.showGoogleMap = function(){
		if($scope.bussReg.save.addressNo && $scope.bussReg.save.addr1 && $scope.bussReg.save.city && $scope.bussReg.save.postalCode && $scope.bussReg.save.county){
			 var fullAddr = $scope.bussReg.save.addressNo+","+$scope.bussReg.save.addr1; var postalcode = "";
			 
			 if($scope.bussReg.save.addr2)
				 fullAddr += ","+$scope.bussReg.save.addr2;
			 
			 if($scope.bussReg.save.city)
				 fullAddr += ","+$scope.bussReg.save.city;
			 
			 if($scope.bussReg.save.postalCode){
				 fullAddr += ","+$scope.bussReg.save.postalCode;
				 postalcode = $scope.bussReg.save.postalCode;
			 }
			 /*if(!$scope.showMap(fullAddr)){
				 $scope.showMap(postalcode);
			 }*/
			 $scope.showMap(fullAddr);
		 }
	}
	
	$scope.codeAddress = function() {
		var address = $scope.bussReg.save.postalCode;
		if(address){
			$scope.bussReg.save.city = "";
			$scope.bussReg.save.county = "";
			$scope.showMap(address);
			$http({
				method : "POST",
				url : "getCityState",
				data: {"address" : address},
				dataType: 'json',
			}).then(function(response) {//alert(response.data);
				$scope.bussReg.save.city = response.data.city;
				$scope.bussReg.save.county = response.data.area_county;
			});
		}
	} 
	
	
	
	$scope.saveRegistration =  function(){
		$scope.bussReg.save.map_street = map_street;
		$scope.bussReg.save.map_postalcode = map_postalcode;
		$scope.bussReg.save.map_country = map_country;
		$scope.bussReg.save.map_city = map_city;
		$scope.bussReg.save.map_district = map_district;
		$scope.bussReg.save.map_region = map_region;
		$scope.bussReg.map_street_short = map_street_short;
		$scope.bussReg.map_postalcode_short = map_postalcode_short;
		$scope.bussReg.map_country_short = map_country_short;
		$scope.bussReg.map_city_short = map_city_short;
		$scope.bussReg.map_district_short = map_district_short;
		$scope.bussReg.map_region_short = map_region_short;
		//alert($scope.bussReg.save.bussModel);
		//console.log("Hi :",$scope.bussReg.save);
		$http({
			method : "POST",
			url : "saveUserReg",
			data: $scope.bussReg.save,
			dataModel: 'json',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		}).then(function(response) {
			if(response.data.successMsg){
				$scope.navTab(4);
				refreshInterval = setInterval(interval, 1000);
				
			}else{
				$scope.responseMsg = response.data.errorMsg;
				$scope.delErrorMsg = true;
				$scope.delSuccessMsg = false;
				$("body").scrollTop(0);
			}
		});
	}
	
	function interval(){
		if(sec <= 0){
			clearInterval(refreshInterval);
			document.location = "dashboard";
		}
		$("#sec").text(sec--);
	}
	
	$scope.goToDashboard =  function(){
		document.location = "dashboard";
	}
	
	
		
		function initialize() {
		  geocoder = new google.maps.Geocoder();
		  var loca = new google.maps.LatLng(41.7475, -74.0872);
		  
		  map = new google.maps.Map(document.getElementById('map'), {
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: loca,
			zoom: 12
		  });

		}
		
		
		
		$scope.showMap = function(address){
			  geocoder.geocode({
				'address': address
			  }, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					
				  cnt=0;
				  map.setCenter(results[0].geometry.location);
				  
				  var infowindow = new google.maps.InfoWindow({
					content: '<b>' + address + '</b>',
					size: new google.maps.Size(150, 50)
				  });
				  
				  if (marker && marker.setMap) {
					    marker.setMap(null);
				  }
				  marker = new google.maps.Marker({
					draggable: true,
					map: map,
					position: results[0].geometry.location,
					title: address
				  });
				  
				  if(address && address.length > 16){
				  	map.setZoom(18);
				  }else{
					  map.setZoom(12);  
				  }
				  
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
										map_city = results[0].address_components[i].long_name;
										map_city_short = results[0].address_components[i].short_name;
									}
									if (results[0].address_components[i].types[0] == "administrative_area_level_1") {
										map_region = results[0].address_components[i].long_name;
										map_region_short = results[0].address_components[i].short_name;
									}if (results[0].address_components[i].types[0] == "administrative_area_level_2") {
										map_district = results[0].address_components[i].long_name;
										map_district_short = results[0].address_components[i].short_name;
									}
									if (results[0].address_components[i].types[0] == "country") {
										map_country = results[0].address_components[i].long_name;
										map_country_short = results[0].address_components[i].short_name;
									}
									if (results[0].address_components[i].types[0] == "postal_code") {
										map_postalcode = results[0].address_components[i].long_name;
										map_postalcode_short = results[0].address_components[i].short_name;
									}if (results[0].address_components[i].types[0] == "route") {
										map_street = results[0].address_components[i].long_name;
										map_street_short = results[0].address_components[i].short_name;
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
				  if(cnt == 0 && $scope.bussReg.save.postalCode){
					  $scope.showMap($scope.bussReg.save.postalCode);
					  cnt++;
				  }
				  return false;
				}
			  });
			//console.log("Hi :"+map_street+", "+map_postalcode+", "+map_country+", "+map_region+", "+map_city+", "+map_district);
		}
	
	intialize();
	
});