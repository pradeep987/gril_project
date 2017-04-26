var menuId="";

function isEmpty(value) {
  return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
}

function isInvalidMobileNumber(value) {
	var mob = /^[1-9]{1}[0-9]{9}$/;
	if (mob.test(value) == false) {
		return true;
	}
	return false;
}

function isInvalidEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return !re.test(email);
}

function activeDashboardMenu(){
	if(menuId > 0){
		document.location = 'activeDashboardMenu/'+menuId;
	}
}

app.directive('appFilereader', function($q) {
    var slice = Array.prototype.slice;

    return {
        restrict: 'A',
        require: '?ngModel',
        link: function(scope, element, attrs, ngModel) {
                if (!ngModel) return;

                ngModel.$render = function() {};

                element.bind('change', function(e) {
                    var element = e.target;

                    $q.all(slice.call(element.files, 0).map(readFile))
                        .then(function(values) {
                            if (element.multiple) ngModel.$setViewValue(values);
                            else ngModel.$setViewValue(values.length ? values[0] : null);
                        });

                    function readFile(file) {
                        var deferred = $q.defer();

                        var reader = new FileReader();
                        reader.onload = function(e) {
                            deferred.resolve(e.target.result);
                        };
                        reader.onerror = function(e) {
                            deferred.reject(e);
                        };
						
                        reader.readAsDataURL(file);

                        return deferred.promise;
                    }

                }); //change

            } //link
    }; //return
});

app.directive('focusElement', function() {
  return {
    link: function(scope, element) {
      element[0].focus();
    }
  };
});

app.directive('inputRequired', function(){
	
});


$(document).ready(function() {
	$('li[data-toggle=modal]').click(function () {
		if (typeof $(this).data('id') !== 'undefined') {
			menuId = $(this).data('id');
		}
		if (typeof $(this).data('name') !== 'undefined') {
			$("#menuTitle").text($(this).data('name'));
		}
	})
});