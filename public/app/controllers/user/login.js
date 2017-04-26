app.controller('loginCtrl', function ($scope, $http) {

	
    function initialize(){
    	$scope.enableForgetpwd = false;
    	$scope.sendForgetPwdSuccessMsg = "";
    	$scope.sendForgetPwdErrorMsg = "";
	}
    
    $scope.sendForgetPwd = function(){
    	$scope.sendForgetPwdSuccessMsg = "";
    	$scope.sendForgetPwdErrorMsg = "";
		 $http({
			method : "POST",
			url : "sendForgetPwdMail",
			data: {"forgetUserName" : $scope.forgetUserNameVal},
			dataType: 'json',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		}).then(function(response) {debugger;
			if(response.data){
				$scope.forgetUserNameVal = "";
				if(response.data == "Success Email")
					$scope.sendForgetPwdSuccessMsg = "Password sent to your email,please check it";
				else if(response.data == "Success Mobile")
					$scope.sendForgetPwdSuccessMsg = "Password sent to your mobile number,please check it";
				else
					$scope.sendForgetPwdErrorMsg = response.data;
			}
		});
	 };
     
	initialize();
	 
});