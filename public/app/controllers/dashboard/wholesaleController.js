app.controller("wholesaleProfileCntrl", function($scope, $http){//alert(1);
    var geocoder, map, infowindow, latitude = "", longitude = "", marker = "", cnt=0;
	var fullAddr = "",map_city = "",map_region = "",map_district = "",map_country = "",map_postalcode = "",map_street = "",map_city_short = "",map_region_short = "",map_district_short = "",map_country_short = "",map_postalcode_short = "",map_street_short = "";
    function intialize(){
		$scope.contactDtl = {};
		$scope.contactDtl.save = {};
		$scope.contactDtl.mobPatteern = /^[1-9]{1}[0-9]{9}$/;
		$scope.contactDtl.landLinePatteern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
		$scope.contactDtl.emailPatteern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		$scope.contactDtl.landLinePatteern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
		$scope.contactDtl.passwordStrength = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
		$scope.contactDtl.urlPatteern = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
		
		//$scope.getDropDownList();
		//google.maps.event.addDomListener(window, 'load', initialize);
        initializeGmaps();
	}
     function initializeGmaps() {
          geocoder = new google.maps.Geocoder();
          var loca = new google.maps.LatLng(41.7475, -74.0872);

          map = new google.maps.Map(document.getElementById('map'), {
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: loca,
            zoom: 12
          });

        }
    $scope.$watchGroup(['$scope.wholesaleContactDtl[0].numberName', '$scope.wholesaleContactDtl[0].address_1', '$scope.wholesaleContactDtl[0].city', '$scope.wholesaleContactDtl[0].postal_code', '$scope.wholesaleContactDtl[0].county'], function(newValues, oldValues, scope) {
    	addressChange();
	});
    
    $scope.showGoogleMap = function(){
    	addressChange();
	}
    
    function addressChange(){
    	if($scope.wholesaleContactDtl[0].numberName && $scope.wholesaleContactDtl[0].address_1 && $scope.wholesaleContactDtl[0].city 
				&& $scope.wholesaleContactDtl[0].postal_code && $scope.wholesaleContactDtl[0].county){
			 var fullAddr = $scope.wholesaleContactDtl[0].numberName+","+$scope.wholesaleContactDtl[0].address_1; var postalcode = "";
			 
			 if($scope.wholesaleContactDtl[0].address_2)
				 fullAddr += ","+$scope.wholesaleContactDtl[0].address_2;
			 
			 if($scope.wholesaleContactDtl[0].city)
				 fullAddr += ","+$scope.wholesaleContactDtl[0].city;
			 
			 if($scope.wholesaleContactDtl[0].county)
				 fullAddr += ","+$scope.wholesaleContactDtl[0].county;
			 
			 if($scope.wholesaleContactDtl[0].postal_code){
				 fullAddr += ","+$scope.wholesaleContactDtl[0].postal_code;
				 postalcode = $scope.wholesaleContactDtl[0].postal_code;
			 }
			 
			 $scope.showMap(fullAddr);		
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
			  if(cnt == 0 && $scope.wholesaleContactDtl[0].postal_code){
				  $scope.showMap($scope.wholesaleContactDtl[0].postal_code);
				  cnt++;
			  }
			  return false;
			}
		  });
		//console.log("Hi :"+map_street+", "+map_postalcode+", "+map_country+", "+map_region+", "+map_city+", "+map_district);
	}
	
	$scope.saveMyWholesaleBussReg = function(){alert(1);
		 $http({
			method : "POST",
			url : "saveMyWholesaleBussReg",
			data: $scope.wholesaleBuss[0],
			dataType: 'json',
			headers: {'X-CSRF-TOKEN': $('meta[name="myBussReg-csrf-token"]').attr('content')},
		}).then(function(response) {//alert(response.data);
			if(response.data.successMsg){
				alert(response.data.successMsg);
			}
		});
	 };
    
    $scope.saveMyWholesaleBussProf =  function(){//alert(1);
		$http({
			method : "POST",
			url : "saveMyWholesaleBussProf",
			data: $scope.wholesaleContactDtl[0],
			dataModel: 'json',
			headers: {'X-CSRF-TOKEN': $('meta[name="myBussProfile-csrf-token"]').attr('content')},
		}).then(function(response) {
			if(response.data.successMsg){
				alert(response.data.successMsg);
			}
		});
	}
    
    $scope.saveGoogleMapLocation = function(){
    	$scope.geoLocation = {};
    	$scope.geoLocation[0] = {};
    	$scope.geoLocation[0].id = $scope.wholesaleContactDtl[0].id;
    	$scope.geoLocation[0].latitude = latitude;
    	$scope.geoLocation[0].longitude = longitude;
    	$scope.geoLocation[0].map_street = map_street;
		$scope.geoLocation[0].map_postalcode = map_postalcode;
		$scope.geoLocation[0].map_country = map_country;
		$scope.geoLocation[0].map_city = map_city;
		$scope.geoLocation[0].map_district = map_district;
		$scope.geoLocation[0].map_region = map_region;
		$scope.geoLocation[0].map_street_short = map_street_short;
		$scope.geoLocation[0].map_postalcode_short = map_postalcode_short;
		$scope.geoLocation[0].map_country_short = map_country_short;
		$scope.geoLocation[0].map_city_short = map_city_short;
		$scope.geoLocation[0].map_district_short = map_district_short;
		$scope.geoLocation[0].map_region_short = map_region_short;
		
		
		$http({
			method : "POST",
			url : "saveWholesaleGoogleMapLocation",
			data: $scope.geoLocation[0],
			dataModel: 'json',
			headers: {'X-CSRF-TOKEN': $('meta[name="myBussProfile-csrf-token"]').attr('content')},
		}).then(function(response) {
			
		});
    }
        
      
	intialize();
});