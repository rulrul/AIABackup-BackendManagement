<!-- Content-Header -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Add New Admin</h2>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-dashboard"></i> amanagement -> addnewadmin</li>
						</ol>
					</div>
				</div> <!-- Content-Header :: End -->
				
		<form method="POST" action="<?php echo base_url(); ?>addadmin">							
			<div class="col-md-6">
				
				<div class="form-group col-lg-12">
					<label>Username</label>
					<input type="" name="username" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<label>Password</label>
					<input type="text" name="password" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>First Name</label>
					<input type="" name="firstName" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Last Name</label>
					<input type="" name="lastName" class="form-control" id="" value="">
				</div>
								
				<div class="form-group col-lg-6">
					<label>Email Address</label>
					<input type="" name="email" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<button type="submit" class="btn btn-primary">Add New</button>
				</div>		
			
			</div>
		
		</form>
