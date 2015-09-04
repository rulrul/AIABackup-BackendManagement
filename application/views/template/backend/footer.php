<!-- Javascript -->
		<script src="<?php echo base_url();?>assets/bootstrap/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- Plugins -->
		<script src="<?php echo base_url();?>assets/bootstrap/js/plugins/jquery.tablesorter.js"></script>
		<script src="<?php echo base_url();?>assets/bootstrap/js/plugins/tables.js"></script>
		<script src="<?php echo base_url();?>assets/jqueryui/jquery-ui.js"></script>
		<!-- Custom Script -->
		<script>
			// Expand dropdown menu when active
			$(function() {
				$(".dropdown.active").toggleClass("open",true);
				// Prevent dropdown to close
				
				$(".dropdown.active").on("hide.bs.dropdown",function(e) {
					e.preventDefault();
					return false;
				});
				
			});
			
			// Confirm Dialog
			$(".openDialog").click(function() {
				var url = $(this).attr('data-href');
				
				$("#dialog-confirm").html("Are you sure want to delete?");
				$("#dialog-confirm").dialog({
					resizable: false,
					modal: true,
					title: "Confirmation",
					height: 150,
					width: 400,
					buttons: {
						"Yes": function() {
							$(this).dialog('close');
							//alert(url);
							window.location.replace(url);
						},
						"No": function() {
							$(this).dialog('close');
						}
					}
				});
			});
		</script>
	</body>
</html>
