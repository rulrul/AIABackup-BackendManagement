<!DOCTYPE html>
<html>
	<head>
		<title>aCommerce Admin Panel</title>
		
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
		
		<!-- Tambahan -->
		<link href="<?php echo base_url();?>assets/bootstrap/css/acommerce-admin.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

	</head>
	<body>
		<!-- Global-Wrapper -->
		<div id="wrapper">
			
			<!-- Navigasi -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
				<!-- Navbar-Header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">aCommerce-Admin-Panel</a>
				</div> <!-- Navbar-Header :: End -->
				
				<!-- Toggle-Target (Sidebar & Top-Right) -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<!-- Navbar-Top-Right -->
					<ul class="nav navbar-nav navbar-right navbar-user">
						<li class="dropdown user-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Jarul <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Rully Andhika <br /> sanguinis13@gmail.com</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="fa fa-key"></i> Change Password</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="fa fa-power-off"></i> Sign Out</a></li>
							</ul>
						</li>
					</ul> <!-- Navbar-Top-Right :: End -->
					<!-- Sidebar -->
					<ul class="nav navbar-nav side-nav">
						<li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Client Management <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Menu 1</a></li>
								<li class="active"><a href="#">Menu 2</a></li>
								<li><a href="#">Menu 3</a></li>
								<li><a href="#">Menu 4</a></li>
							</ul>
						</li>
						<li><a href="#"><i class="fa fa-wrench"></i> Admin Management</a></li>
						<li><a href="#"><i class="fa fa-key"></i> Change Password</a></li>
					</ul> <!-- Sidebar :: End -->
				</div> <!-- Toggle-Target : End -->				
			</nav> <!-- Navigasi :: End -->
			
			<!-- Content-Page-Wrapper -->
			<div id="page-wrapper">
				
				<!-- Content-Header -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Under Development <small>by jarul</small></h2>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
						</ol>
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							Selamat Datang, Admin! <br /> Ini adalah contoh message alert untuk halaman admin. Untuk keluhan atau pelaporan mengenai bug system, pengembang dapat dihubungi melalui kontak berikut. Email: <a class="alert-link" href="#">Rully Andhika</a> | No. Telp: 08119931709. Terima kasih.
						</div>
					</div>
				</div> <!-- Content-Header :: End -->
				
				<!-- Panel-Information -->
				<div class="row">
					<!-- 1 -->
					<div class="col-lg-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="fa fa-comments fa-5x"></i>
									</div>
									<div class="col-xs-6 text-right"><br />
										<p class="announcement-heading">13</p><br />
										<p class="announcement-text">New Client Registered!</p>
									</div>
								</div>
							</div>
							<a href="#">
							<div class="panel-footer announcement-bottom">
								<div class="row">
									<div class="col-xs-6">
										View Client
									</div>
									<div class="col-xs-6 text-right">
										<i class="fa fa-arrow-circle-right"></i>
									</div>
								</div>
							</div>
							</a>
						</div>
					</div> <!-- 1 :: End -->
					<!-- 2 -->
					<div class="col-lg-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="fa fa-check fa-5x"></i>
									</div>
									<div class="col-xs-6 text-right"><br />
										<p class="announcement-heading">3</p><br />
										<p class="announcement-text">Administrator</p>
									</div>
								</div>
							</div>
							<a href="#">
							<div class="panel-footer announcement-bottom">
								<div class="row">
									<div class="col-xs-6">
										View Admin
									</div>
									<div class="col-xs-6 text-right">
										<i class="fa fa-arrow-circle-right"></i>
									</div>
								</div>
							</div>
							</a>
						</div>
					</div> <!-- 2 :: End -->
					<!-- 3 -->
					<div class="col-lg-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="fa fa-tasks fa-5x"></i>
									</div>
									<div class="col-xs-6 text-right"><br />
										<p class="announcement-heading">Info</p><br />
										<p class="announcement-text">Last Login:<br />24 hours ago</p>
									</div>
								</div>
							</div>
							<a href="#">
							<div class="panel-footer announcement-bottom">
								<div class="row">
									<div class="col-xs-6">
										Change Password
									</div>
									<div class="col-xs-6 text-right">
										<i class="fa fa-arrow-circle-right"></i>
									</div>
								</div>
							</div>
							</a>
						</div>
					</div> <!-- 3 :: End -->
				</div> <!-- Panel-Information :: End -->
				
			</div> <!-- Content-Page-Wrapper :: End -->
			
			
		</div> <!-- Global-Wrapper :: End -->
		
		<!-- Javascript -->
		<script src="<?php echo base_url();?>assets/bootstrap/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- Plugins -->
		<script src="<?php echo base_url();?>assets/bootstrap/js/plugins/jquery.tablesorter.js"></script>
		<script src="<?php echo base_url();?>assets/bootstrap/js/plugins/tables.js"></script>
		<!-- Custom Script -->
		<script>
			// Expand dropdown menu when active
			$(function() {
				$(".dropdown.active").toggleClass("open",true);
				// Prevent dropdown to close
				/*
				$(".dropdown.active").on("hide.bs.dropdown",function(e) {
					e.preventDefault();
					return false;
				});
				*/
			});
		</script>
	</body>
</html>
