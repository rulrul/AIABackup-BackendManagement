<!-- Content-Header -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Add New Client</h2>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-dashboard"></i> cmanagement -> addnewclient</li>
						</ol>
					</div>
				</div> <!-- Content-Header :: End -->
				
		<form method="POST" action="<?php echo base_url(); ?>addclient">							
			<div class="col-md-6">
				
				<div class="form-group col-lg-12">
					<label>Company</label>
					<input type="" name="company" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Username</label>
					<input type="text" name="username" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Password</label>
					<input type="text" name="password" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>URL Host</label>
					<input type="" name="urlHost" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Port</label>
					<input type="" name="port" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<button type="submit" class="btn btn-primary">Add New</button>
				</div>
								
			</div>
		
		</form>
