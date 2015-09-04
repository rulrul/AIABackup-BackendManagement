<?php foreach($query as $row) { ?>
<!-- Content-Header -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Edit Client Data Header <small>RECORD ID - <?php echo $row->id; ?></small></h2>
						<ol class="breadcrumb">
							<li class="active"><i class="fa fa-dashboard"></i> cdmanagement -> addnewheader</li>
						</ol>
					</div>
				</div> <!-- Content-Header :: End -->
				
		<form method="POST" action="<?php echo base_url(); ?>editheader">
			<?php
				echo "<input type='hidden' name='id' class='form-control' id='' value='". $row->id. "'>";
			?>	
			<div class="col-md-6">
				
				<div class="form-group col-lg-6">
					<label>Company</label>
					<?php
						echo "<input type='text' name='company' class='form-control' id='' value='". $row->company. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-6">
					<label>Username</label>
					<?php
						echo "<input type='text' name='username' class='form-control' id='' value='". $row->username. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-12">
					<label>InventoryAvailable Header</label>
					<?php
						echo "<input type='text' name='ia' class='form-control' id='' value='". $row->ia. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-12">
					<label>InventoryReserved Header</label>
					<?php
						echo "<input type='text' name='ivr' class='form-control' id='' value='". $row->ivr. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-12">
					<label>ItemMaster Header</label>
					<?php
						echo "<input type='text' name='im' class='form-control' id='' value='". $row->im. "'>";
					?>
				</div>
								
				<div class="form-group col-lg-12">
					<label>ItemReceipt Header</label>
					<?php
						echo "<input type='text' name='itr' class='form-control' id='' value='". $row->itr. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-12">
					<label>Items Header</label>
					<?php
						echo "<input type='text' name='items' class='form-control' id='' value='". $row->items. "'>";
					?>
				</div>	
			
			</div>
		
			<div class="col-md-6">
				
				<div class="form-group col-lg-12">
					<label>PurchaseOrders Header</label>
					<?php
						echo "<input type='text' name='po' class='form-control' id='' value='". $row->po. "'>";
					?>
				</div>	
				
				<div class="form-group col-lg-12">
					<label>SalesOrders Header</label>
					<?php
						echo "<input type='text' name='so' class='form-control' id='' value='". $row->so. "'>";
					?>
				</div>
				
				<div class="form-group col-lg-12">
					<label>ShippingStatus Header</label>
					<?php
						echo "<input type='text' name='ss' class='form-control' id='' value='". $row->ss. "'>";
					?>
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
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
				
			</div>
		
		</form>
<?php } ?>
