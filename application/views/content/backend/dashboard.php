<!-- Content-Header -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Dashboard <small>Acommerce Integration Apps</small></h2>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-dashboard"></i> panel</li>
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
					<div class="col-lg-4">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="fa fa-comments fa-5x"></i>
									</div>
									<div class="col-xs-6 text-right"><br />
										<p class="announcement-heading"><?php $query = $this->db->get('aia_client'); echo $query->num_rows();?></p><br />
										<p class="announcement-text">Clients <br /> Registered!</p>
									</div>
								</div>
							</div>
							<a href="<?php echo base_url(). 'cmanagement'?>">
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
					<div class="col-lg-4">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="fa fa-check fa-5x"></i>
									</div>
									<div class="col-xs-6 text-right"><br />
										<p class="announcement-heading"><?php $query = $this->db->get('aia_admin'); echo $query->num_rows();?></p><br />
										<p class="announcement-text">Administrators <br /> Registered!</p>
									</div>
								</div>
							</div>
							<a href="<?php echo base_url(). 'amanagement'?>">
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
					<div class="col-lg-4">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="fa fa-tasks fa-5x"></i>
									</div>
									<div class="col-xs-6 text-right"><br />
										<p class="announcement-heading">Info</p><br />
										<p class="announcement-text">Last Login:<br />
											<?php
												$this->db->where('username', $this->session->userdata('username'));
												$query = $this->db->get('aia_admin');
												$row = $query->row();
												echo $row->last_login;
											?>
										</p>
									</div>
								</div>
							</div>
							<a href="#">
							<div class="panel-footer announcement-bottom">
								<div class="row">
									<div class="col-xs-6">
										Hello, <?php echo $this->session->userdata('username');?>
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
