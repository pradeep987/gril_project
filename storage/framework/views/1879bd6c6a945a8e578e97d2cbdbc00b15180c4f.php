<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Gril | User Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Gril - User Login" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link
	href="<?= asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link href="<?= asset('assets/pages/css/login-5.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link href="<?= asset('assets/global/css/components.min.css') ?>"
	rel="stylesheet" id="style_components" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body class="login" ng-app="myApp" ng-controller="loginCtrl">
	<!-- BEGIN : LOGIN PAGE 5-1 -->
	<div class="user-login-5">
		<div class="row bs-reset">
			<div class="col-md-6 bs-reset mt-login-5-bsfix">
				<div class="login-bg" style="background-image:url(<?= asset('assets/pages/img/login/bg1.jpg')?>)">
					<img class="login-logo"
						src="<?= asset('assets/pages/img/login/grril-final.png') ?>"
						height="150" width="238" />
				</div>
			</div>
			<div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
				<div class="login-content">
					<h1 ng-show="!enableForgetpwd">Gril User Login</h1>

					<form action="loginValidation" ng-show="!enableForgetpwd"
						class="login-form" name="userLoginForm" method="POST">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						<div class="alert alert-danger"
							ng-show="!userLoginForm.username.$pristine && !userLoginForm.$valid">
							<button class="close" data-close="alert"></button>
							<div
								ng-show="userLoginForm.username.$error.required && !userLoginForm.username.$pristine">Enter
								any username</div>
							<div ng-show="userLoginForm.username.$error.minlength">User name
								have minimum 4 characters</div>
							<div ng-show="userLoginForm.username.$error.maxlength">User name
								have maximum 64 characters</div>
							<div
								ng-show="userLoginForm.password.$error.required && userLoginForm.username.$valid">Enter
								any password.</div>
							<div ng-show="userLoginForm.password.$error.minlength">Password
								have minimum 4 characters</div>
							<div ng-show="userLoginForm.password.$error.maxlength">Password
								have maximum 12 characters</div>
						</div>

						<?php if( Session::has('login_errror')): ?>
						<div class="alert alert-danger"
							ng-show="userLoginForm.username.$pristine">
							<button class="close" data-close="alert"></button>
							<div><?php echo e(Session::get('login_errror')); ?></div>
						</div>
						<?php endif; ?> <?php if(count($errors) > 0): ?>
						<div class="alert alert-danger"
							ng-show="userLoginForm.username.$pristine">
							<button class="close" data-close="alert"></button>
							<div>
								<ul>
									<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($error); ?></li> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
						</div>
						<?php endif; ?>



						<div class="row">
							<div class="col-xs-6">
								<input
									class="form-control form-control-solid placeholder-no-fix form-group"
									type="text" autocomplete="off"
									placeholder="Username(Email Or Mobile No)" name="username"
									ng-model="username" ng-minlength="4" ng-maxlength="64" required />
							</div>
							<div class="col-xs-6">
								<input
									class="form-control form-control-solid placeholder-no-fix form-group"
									type="password" autocomplete="off" placeholder="Password"
									name="password" ng-model="password" ng-minlength="4"
									ng-maxlength="12" required />
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="rem-password">
									<label class="rememberme mt-checkbox mt-checkbox-outline"> <input
										type="checkbox" name="remember" value="1" /> Remember me <span></span>
									</label>
								</div>
							</div>
							<div class="col-sm-8 text-right">
								<div class="forgot-password">
									<a href="javascript:;" ng-click="enableForgetpwd=true"
										class="forget-password">Forgot Password?</a>
								</div>
								<button class="btn green" type="submit"
									ng-disabled="!(!userLoginForm.$error.required && !userLoginForm.$error.maxlength && !userLoginForm.$error.minlength)">Sign
									In</button>
							</div>
						</div>
					</form>
					<!-- BEGIN FORGOT PASSWORD FORM -->
					<h3 class="font-green" ng-show="enableForgetpwd">Forgot Password ?</h3>
					<form action="sendForfetPwdMail" class="login-form"
						ng-show="enableForgetpwd" name="forgetPwd" method="post">
						<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
						<div class="alert alert-danger"
							ng-show="!forgetPwd.forgetUserName.$pristine && !forgetPwd.$valid">
							<div
								ng-show="!sendForgetPwdErrorMsg && !sendForgetPwdSuccessMsg && forgetPwd.forgetUserName.$error.required && !forgetPwd.forgetUserName.$pristine">Enter
								the Email or Mobile number</div>
							<div ng-show="forgetPwd.forgetUserName.$error.minlength">User
								name have minimum 10 characters</div>
							<div ng-show="forgetPwd.forgetUserName.$error.maxlength">User
								name have maximum 64 characters</div>
						</div>
						<div class="alert alert-danger" ng-show="sendForgetPwdErrorMsg">
							<div ng-bind="sendForgetPwdErrorMsg"></div>
						</div>
						<div class="alert alert-success" ng-show="sendForgetPwdSuccessMsg">
							<div ng-bind="sendForgetPwdSuccessMsg"></div>
						</div>
						<p>Enter your e-mail or mobile number below to sent your password.
						</p>
						<div class="form-group">
							<input class="form-control placeholder-no-fix form-group"
								ng-keypress="sendForgetPwdErrorMsg='';sendForgetPwdSuccessMsg='';"
								ng-model="forgetUserNameVal" type="text" autocomplete="off"
								placeholder="Username(Email Or Mobile No)" name="forgetUserName"
								ng-minlength="10" ng-maxlength="64" required />
						</div>
						<div class="form-actions">
							<button type="button" id="back-btn"
								ng-click="enableForgetpwd=false" class="btn green btn-outline">Back</button>
							<button type="button" ng-click="sendForgetPwd();"
								ng-disabled="!(!forgetPwd.$error.required && !forgetPwd.$error.maxlength && !forgetPwd.$error.minlength)"
								class="btn btn-success uppercase pull-right">Submit</button>
						</div>
					</form>
					<!-- END FORGOT PASSWORD FORM -->
				</div>
				<div class="login-footer">
					<div class="row bs-reset">
						<div class="col-xs-5 bs-reset">
							<ul class="login-social">
								<li><a href="javascript:;"> <i class="icon-social-facebook"></i>
								</a>
								</li>
								<li><a href="javascript:;"> <i class="icon-social-twitter"></i>
								</a>
								</li>
								<li><a href="javascript:;"> <i class="icon-social-dribbble"></i>
								</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-7 bs-reset">
							<div class="login-copyright text-right">
								<p>Copyright &copy; Grril 2017</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="<?= asset('assets/global/plugins/jquery.min.js') ?>"
	type="text/javascript"></script>
<script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
<script src="<?= asset('app/lib/angular/ui-grid.min.js') ?>"></script>
<script src="<?= asset('app/lib/angular/angular-touch.js') ?>"></script>
<script src="<?= asset('app/app.js') ?>"></script>
<script src="<?= asset('app/controllers/user/login.js') ?>"></script>
</html>
