<!DOCTYPE html>
<html>
	<head>
		<title>aCommerce Admin Panel</title>
		
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
		
		<!-- Tambahan -->
		<link href="<?php echo base_url();?>assets/bootstrap/css/acommerce-admin.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/jqueryui/themes/smoothness/jquery-ui.css" rel="stylesheet" />

	</head>
	<body>
		<!-- Global-Wrapper -->
		<div id="wrapper">
			
			<!-- Navigasi -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">
				<!-- Navbar-Header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/images/acommerce-small.png" /></a>
				</div> <!-- Navbar-Header :: End -->
				
				<!-- Toggle-Target (Sidebar & Top-Right) -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<!-- Navbar-Top-Right -->
					<ul class="nav navbar-nav navbar-right navbar-user">
						<li class="dropdown user-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#"><?php echo $this->session->userdata('firstName'). " ". $this->session->userdata('lastName'). "<br />"; echo $this->session->userdata('email'); ?></a></li>
								<li class="divider"></li>
								<li><a href="<?php echo base_url();?>cpassword"><i class="fa fa-key"></i> Change Password</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo base_url();?>logout"><i class="fa fa-power-off"></i> Sign Out</a></li>
							</ul>
						</li>
					</ul> <!-- Navbar-Top-Right :: End -->
