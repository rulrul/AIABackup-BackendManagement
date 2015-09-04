<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
		
		<style>
			body {
				background-color: #333333;
			}
		</style>
	</head>
	<body>
		
		<!-- Global-Wrapper -->
		<div class="container theme-showcase" role="main">
			
			<!-- Message -->
			<div class="row">
			<div style="margin-top:25px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<?php echo $this->session->flashdata('message'); ?>
			</div>
			</div>
			
			<!-- Logo -->
			<div align="center">
				<img src="<?php echo base_url();?>assets/images/acommerce-small.png" />
			</div><!-- Logo: End -->
			
			<div class="row">
				
				<div style="margin-top:25px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-info">
						<div class="panel-heading">
							<div class="panel-title">Sign in</div>
							<!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
						</div>
						<div class="panel-body">
							<!-- Message-Alert // Notes: Delete style="display:none" to showing alert message -->
							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div> <!-- Message-Alert :: End -->
							<!-- Login Form -->
							<form class="form-horizontal" role="form" method="POST" action="loginproc">
								<!-- Username -->
								<div class="input-group" style="margin-bottom:25px">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
								</div> <!-- Username :: End -->
								<!-- Password -->
								<div class="input-group" style="margin-bottom:25px">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
								</div> <!-- Password :: End -->
								<!-- Remember me -->
								<div class="input-group">
									<div class="checkbox">
										<label>
											<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
									</div>
                                </div> <!-- Remember me -->
                                <!-- Button -->
                                <div style="margin-top:10px" class="form-group">
									<div class="col-sm-12 controls">
										<!-- <a id="btn-login" href="#" class="btn btn-success">Login  </a> -->
										<input class="btn btn-success" id="login-submit" type="submit" value="Login" />
									</div>
								</div> <!-- Button :: End -->
							</form> <!-- Login Form :: End -->
						</div>
					</div>
				</div>
				
			</div>
		</div> <!-- Global-Wrapper :: End -->
		
		
		<!-- Javascript -->
		<script src="<?php echo base_url();?>assets/bootstrap/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
