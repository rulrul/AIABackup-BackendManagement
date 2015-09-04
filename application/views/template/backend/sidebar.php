<!-- Sidebar -->
					<ul class="nav navbar-nav side-nav">
						<li class="<?php if($this->uri->segment(1)=="panel"){ echo "active";}?>"><a href="<?php echo base_url();?>panel"><i class="fa fa-dashboard"></i> Dashboard</a></li>
						<li class="dropdown <?php if($this->uri->segment(1)=="cmanagement"){ echo "active";}?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Client Management <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($this->uri->segment(1)=="cmanagement" && $this->uri->segment(2)==""){ echo "active";}?>"><a href="<?php echo base_url();?>cmanagement">All Clients</a></li>
								<li class="<?php if($this->uri->segment(1)=="cmanagement" && $this->uri->segment(2)=="addnewclient"){ echo "active";}?>"><a href="<?php echo base_url();?>cmanagement/addnewclient">Add New Client</a></li>
							</ul>
						</li>
						<li class="dropdown <?php if($this->uri->segment(1)=="cdmanagement"){ echo "active";}?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Data Management <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($this->uri->segment(1)=="cdmanagement" && $this->uri->segment(2)==""){ echo "active";}?>"><a href="<?php echo base_url();?>cdmanagement">All Clients Data</a></li>
								<li class="<?php if($this->uri->segment(1)=="cdmanagement" && $this->uri->segment(2)=="addnewheader"){ echo "active";}?>"><a href="<?php echo base_url();?>cdmanagement/addnewheader">Add New Client Data</a></li>
							</ul>
						</li>
						<li class="dropdown <?php if($this->uri->segment(1)=="amanagement"){ echo "active";}?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Admin Management <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($this->uri->segment(1)=="amanagement" && $this->uri->segment(2)==""){ echo "active";}?>"><a href="<?php echo base_url();?>amanagement">All Administrator</a></li>
								<li class="<?php if($this->uri->segment(1)=="amanagement" && $this->uri->segment(2)=="addnewadmin"){ echo "active";}?>"><a href="<?php echo base_url();?>amanagement/addnewadmin">Add New Admin</a></li>
							</ul>
						</li>
						
						<li class="<?php if($this->uri->segment(1)=="cpassword"){ echo "active";}?>"><a href="<?php echo base_url();?>cpassword"><i class="fa fa-key"></i> Change Password</a></li>
					</ul> <!-- Sidebar :: End -->
				</div> <!-- Toggle-Target : End -->				
			</nav> <!-- Navigasi :: End -->
