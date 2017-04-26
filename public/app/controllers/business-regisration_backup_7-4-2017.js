app.controller("businessRegisration", function($scope, $http){
	var geocoder, map, infowindow;
	var fullAddr = "",map_city = "",map_region = "",map_district = "",map_country = "",map_postalcode = "",map_street = "";
	var sec = 5, refreshInterval = null;
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
	
	$scope.$watchGroup(['bussReg.save.addressNo', 'bussReg.save.addr1', 'bussReg.save.addr2', 'bussReg.save.city', 'bussReg.save.postalCode', 'bussReg.save.county'], function(newValues, oldValues, scope) {
		if(scope.bussReg.save.addressNo && scope.bussReg.save.addr1 && scope.bussReg.save.city && scope.bussReg.save.postalCode && scope.bussReg.save.county){
			 var fullAddr = scope.bussReg.save.addressNo+","+scope.bussReg.save.addr1; var postalcode = "";
			 
			 if(scope.bussReg.save.addr2)
				 fullAddr += ","+scope.bussReg.save.addr2;
			 
			 if(scope.bussReg.save.city)
				 fullAddr += ","+scope.bussReg.save.city;
			 
			 if(scope.bussReg.save.postalCode){
				 fullAddr += ","+scope.bussReg.save.postalCode;
				 postalcode = scope.bussReg.save.postalCode;
			 }
			 if(!$scope.showMap(fullAddr)){
				 $scope.showMap(postalcode);
			 }
		 }
	});
	
	/*$scope.$watch('bussReg.save.postalCode', function(newValues, oldValues, scope) {
		if(newValues && newValues != oldValues && newValues.length >= 1){
			var geocoder = new google.maps.Geocoder();
			var country = "India";
			scope.bussReg.save.county = "";
			scope.bussReg.save.city = "";
			geocoder.geocode({ 'address': newValues+ ',' + country }, function (result, status) {

				var addressComponent = result[0]['address_components'];
				// find state data
				var stateQueryable = $.grep(addressComponent, function (x) {
					return $.inArray('administrative_area_level_1', x.types) != -1;
				});
				

				if (stateQueryable.length) {
					scope.bussReg.save.county = stateQueryable[0]['long_name'];
					
					var cityQueryable = $.grep(addressComponent, function (x) {
						return $.inArray('locality', x.types) != -1;
					});

					// find city data
					if (cityQueryable.length) {
						scope.bussReg.save.city = cityQueryable[0]['long_name'];
					}
				}
			});
		 }
	});*/
	
	$scope.codeAddress = function() {//alert(1);
		geocoder = new google.maps.Geocoder();
		var address = $scope.bussReg.save.postalCode;
		if(address){
			$scope.showMap(address);		
			geocoder.geocode({ 'address': address }, function (results, status) {
				if (status == google.maps.GeocoderStatus.OK) {                       
					
					for (var component in results[0]['address_components']) {
						for (var i in results[0]['address_components'][component]['types']) {
                            //alert(results[0]['address_components'][component]['types'][i]);
							if (results[0]['address_components'][component]['types'][i] == "administrative_area_level_1") {
								var county = results[0]['address_components'][component]['long_name'];
								$scope.bussReg.save.county = county;
							}else if (results[0]['address_components'][component]['types'][i] == "administrative_area_level_2") {
								var city = results[0]['address_components'][component]['long_name'];
								$scope.bussReg.save.city = city;
							}
						}
					}
				}
			});
		}
	} 
	
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
									map_city = results[0].address_components[i].long_name;
								}
								if (results[0].address_components[i].types[0] == "administrative_area_level_1") {
									//this is the object you are looking for
									map_region = results[0].address_components[i].long_name;
								}if (results[0].address_components[i].types[0] == "administrative_area_level_2") {
									//this is the object you are looking for
									map_district = results[0].address_components[i].long_name;
								}
								if (results[0].address_components[i].types[0] == "country") {
									//this is the object you are looking for
									map_country = results[0].address_components[i].long_name;
								}
								if (results[0].address_components[i].types[0] == "postal_code") {
									//this is the object you are looking for
									map_postalcode = results[0].address_components[i].long_name;
								}if (results[0].address_components[i].types[0] == "route") {
									//this is the object you are looking for
									map_street = results[0].address_components[i].long_name;
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
		//console.log("Hi :"+map_street+", "+map_postalcode+", "+map_country+", "+map_region+", "+map_city+", "+map_district);
	}
	
	$scope.saveRegistration =  function(){
		$scope.bussReg.save.map_street = map_street;
		$scope.bussReg.save.map_postalcode = map_postalcode;
		$scope.bussReg.save.map_country = map_country;
		$scope.bussReg.save.map_city = map_city;
		$scope.bussReg.save.map_district = map_district;
		$scope.bussReg.save.map_region = map_region;
		
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
	
	function interval(){//debugger;
		if(sec < 0){
			clearInterval(refreshInterval);
			document.location = "account";
		}
		$("#sec").text(sec--);
	}
	
	intialize();
	
});