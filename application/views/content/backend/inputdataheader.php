<!-- Content-Header -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Add New Client Data Header</h2>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-dashboard"></i> cdmanagement -> addnewheader</li>
						</ol>
					</div>
				</div> <!-- Content-Header :: End -->
				
		<form method="POST" action="<?php echo base_url(); ?>addheader">							
			<div class="col-md-6">
				
				<div class="form-group col-lg-6">
					<label>Company</label>
					<input type="text" name="company" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Username</label>
					<input type="text" name="username" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<label>InventoryAvailable Header</label>
					<input type="text" name="ia" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<label>InventoryReserved Header</label>
					<input type="text" name="ivr" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<label>ItemMaster Header</label>
					<input type="text" name="im" class="form-control" id="" value="">
				</div>
								
				<div class="form-group col-lg-12">
					<label>ItemReceipt Header</label>
					<input type="" name="itr" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<label>Items Header</label>
					<input type="text" name="items" class="form-control" id="" value="">
				</div>	
			
			</div>
		
			<div class="col-md-6">
				
				<div class="form-group col-lg-12">
					<label>PurchaseOrders Header</label>
					<input type="text" name="po" class="form-control" id="" value="">
				</div>	
				
				<div class="form-group col-lg-12">
					<label>SalesOrders Header</label>
					<input type="text" name="so" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<label>ShippingStatus Header</label>
					<input type="text" name="ss" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<h3 class="dark-grey">Information</h3>
					<p>
						Setiap penulisan dari header field dipisahkan dengan ","<br/>(koma tanpa tanda kutip)
					</p>
				
					<p>
						Ex. (Untuk file CSV PurchaseOrders dengan header field: PO# Item Id QTY)<br/>PO#,Item Id,QTY
					</p>
				</div>
				
				<div class="form-group col-lg-12">
					<button type="submit" class="btn btn-primary">Add New</button>
				</div>
				
			</div>
		
		</form>
