<!-- Content-Header -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Clients <small>Acommerce Integration Apps</small></h2>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-dashboard"></i> cmanagement</li>
						</ol>
						<?php echo $this->session->flashdata('message'); ?>
						<!--
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							Selamat Datang, Admin! <br /> Ini adalah contoh message alert untuk halaman admin. Untuk keluhan atau pelaporan mengenai bug system, pengembang dapat dihubungi melalui kontak berikut. Email: <a class="alert-link" href="#">Rully Andhika</a> | No. Telp: 08119931709. Terima kasih.
						</div>
						-->
					</div>
				</div> <!-- Content-Header :: End -->
				
				<!-- Table -->
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table table-bordered table-hover tablesorter">
								<thead>
									<tr>
										<th>Company <i class="fa fa-sort"></i></th>
										<th>Username <i class="fa fa-sort"></i></th>
										<th>URL Host <i class="fa fa-sort"></i></th>
										<th>Register Date <i class="fa fa-sort"></i></th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									<!-- Table Body Example
									<tr>
										<td>Jarul</td>
										<td>Rully Andhika</td>
										<td>13 April 2015</td>
										<td>14 April 2015</td>
										<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
									</tr>
									<tr>
										<td>KsatriaTampan</td>
										<td>Rully Andhika</td>
										<td>13 April 2015</td>
										<td>14 April 2015</td>
										<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
									</tr><!-- Table Body Example:: End -->
									<?php
									foreach($query as $row) {
										echo "<tr>";
										echo "<td>". $row->company. "</td>";
										echo "<td>". $row->username. "</td>";
										echo "<td>". $row->url_host. "</td>";
										echo "<td>". $row->reg_date. "</td>";
										echo "<td><a href='". base_url(). "cmanagement/editclient/?id=". $row->id. "'>Edit</a> | <a class='openDialog' href='#' data-href='". base_url(). "delclient/?id=". $row->id. "'>Delete</a></td>";
										echo "</tr>";
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div> <!-- Table :: End -->
