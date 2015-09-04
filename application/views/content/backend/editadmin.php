<?php foreach($query as $row) { ?>
<!-- Content-Header -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Edit Admin Info <small>RECORD ID - <?php echo $row->id; ?></small></h2>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-dashboard"></i> amanagement -> editadmin</li>
						</ol>
					</div>
				</div> <!-- Content-Header :: End -->
				
				
		<form method="POST" action="<?php echo base_url(); ?>editadmin">
			<?php
				echo "<input type='hidden' name='id' class='form-control' id='' value='". $row->id. "'>";
			?>							
			<div class="col-md-6">
				
				<div class="form-group col-lg-12">
					<label>Username</label>
					<?php
						echo "<input type='text' name='username' class='form-control' id='' value='". $row->username. "'>";
					?>
					<!-- <input type="" name="username" class="form-control" id="" value=""> -->
				</div>
				
				<div class="form-group col-lg-12">
					<label>Password</label>
					<?php
						echo "<input type='text' name='password' class='form-control' id='' value='". $row->password. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-6">
					<label>First Name</label>
					<?php
						echo "<input type='text' name='firstName' class='form-control' id='' value='". $row->first_name. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-6">
					<label>Last Name</label>
					<?php
						echo "<input type='text' name='lastName' class='form-control' id='' value='". $row->last_name. "'>";
					?>
				</div>
								
				<div class="form-group col-lg-6">
					<label>Email Address</label>
					<?php
						echo "<input type='text' name='email' class='form-control' id='' value='". $row->email. "'>";
					?>
				</div>			
			
			</div>
		
			<div class="col-md-6">
				<h3 class="dark-grey">Information</h3>
				<p>
					Status "Superadmin" menandakan admin dengan role tersebut dapat menambahkan dan menghapus akun admin yang lain. 
				</p>
				
				<p>
					Untuk memberikan role "Superadmin" Pastikan form status superadmin terpilih.
				</p>
				
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
<?php } ?>
