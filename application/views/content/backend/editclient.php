<?php foreach($query as $row) { ?>
<!-- Content-Header -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Edit Client Info <small>RECORD ID - <?php echo $row->id; ?></small></h2>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-dashboard"></i> cmanagement -> editclient</li>
						</ol>
					</div>
				</div> <!-- Content-Header :: End -->
				
				
		<form method="POST" action="<?php echo base_url(); ?>editclient">
			<?php
				echo "<input type='hidden' name='id' class='form-control' id='' value='". $row->id. "'>";
			?>							
			<div class="col-md-6">
				
				<div class="form-group col-lg-12">
					<label>Company</label>
					<?php
						echo "<input type='text' name='company' class='form-control' id='' value='". $row->company. "'>";
					?>
					<!-- <input type="" name="username" class="form-control" id="" value=""> -->
				</div>
				
				<div class="form-group col-lg-6">
					<label>Username</label>
					<?php
						echo "<input type='text' name='username' class='form-control' id='' value='". $row->username. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-6">
					<label>Password</label>
					<?php
						echo "<input type='text' name='password' class='form-control' id='' value='". $row->password. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-6">
					<label>URL Host</label>
					<?php
						echo "<input type='text' name='urlHost' class='form-control' id='' value='". $row->url_host. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-6">
					<label>Port</label>
					<?php
						echo "<input type='text' name='port' class='form-control' id='' value='". $row->port. "'>";
					?>
				</div>
								
				<div class="form-group col-lg-12">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>			
			
			</div>
		
		</form>
<?php } ?>
