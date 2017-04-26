<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Metronic Admin Theme #6 | User Login 5</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Preview page of Metronic Admin Theme #6 for "
	name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link
	href="<?= asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') ?>"
	rel="stylesheet" type="text/css" />
<link href="<?= asset('assets/pages/css/login-5.min.css') ?>"
	rel="stylesheet" type="text/css" />
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
					<h1>Grril Admin Login</h1>

					<form action="admin/loginValidation" class="login-form"
						name="loginForm" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="alert alert-danger"
							ng-show="!loginForm.username.$pristine && !loginForm.$valid">
							<button class="close" data-close="alert"></button>
							<div
								ng-show="loginForm.username.$error.required && !loginForm.username.$pristine">Enter
								any username</div>
							<div ng-show="loginForm.username.$error.minlength">User name have
								minimum 4 characters</div>
							<div ng-show="loginForm.username.$error.maxlength">User name have
								maximum 50 characters</div>
							<div
								ng-show="loginForm.password.$error.required && loginForm.username.$valid">Enter
								any password.</div>
							<div ng-show="loginForm.password.$error.minlength">Password have
								minimum 4 characters</div>
							<div ng-show="loginForm.password.$error.maxlength">Password have
								maximum 12 characters</div>
						</div>

						@if( Session::has('login_errror'))
						<div class="alert alert-danger"
							ng-show="loginForm.username.$pristine">
							<button class="close" data-close="alert"></button>
							<div>{{ Session::get('login_errror') }}</div>
						</div>
						@endif @if (count($errors) > 0)
						<div class="alert alert-danger"
							ng-show="loginForm.username.$pristine">
							<button class="close" data-close="alert"></button>
							<div>
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li> @endforeach
								</ul>
							</div>
						</div>
						@endif



						<div class="row">
							<div class="col-xs-6">
								<input
									class="form-control form-control-solid placeholder-no-fix form-group"
									type="text" autocomplete="off" placeholder="Username"
									name="username" ng-model="username" ng-minlength="4"
									ng-maxlength="50" required />
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

								<button class="btn green" type="submit"
									ng-disabled="!(!loginForm.$error.required && !loginForm.$error.maxlength && !loginForm.$error.minlength)">Sign
									In</button>
							</div>
						</div>
					</form>
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
<script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
<script src="<?= asset('app/lib/angular/ui-grid.min.js') ?>"></script>
<script src="<?= asset('app/lib/angular/angular-touch.js') ?>"></script>
<script src="<?= asset('app/controllers/admin/app.js') ?>"></script>
<script src="<?= asset('app/controllers/admin/login.js') ?>"></script>
</html>
