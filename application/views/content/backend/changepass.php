<!-- Content-Header -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Change Password</h2>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-dashboard"></i> amanagement -> cpassword</li>
						</ol>
						<?php echo $this->session->flashdata('message'); ?>
					</div>
				</div> <!-- Content-Header :: End -->
				
		<form method="POST" action="<?php echo base_url(); ?>changepass">							
			<div class="col-md-6">
				
				<input type="hidden" name="username" value="<?php echo $this->session->userdata('username'); ?>">
				
				<div class="form-group col-lg-12">
					<label>Old password</label>
					<input type="" name="opassword" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<label>New password</label>
					<input type="" name="npassword" class="form-control" id="">
				</div>
				
				<div class="form-group col-lg-12">
					<button type="submit" class="btn btn-primary">Change</button>
				</div>			
			
			</div>
		
		</form>
