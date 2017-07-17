	<!-- MAIN MENU -->
	<div class="main-menu-wrap">
		<div class="menu-bar">
			<nav>
				<ul class="main-menu">
					<!-- MENU ITEM -->
					<li class="menu-item active">
						<a href="<?php echo base_url();?>" class="active"><img src="<?php echo base_url();?>images/Screenshot_6.png" style="height:60px;width:200px"></a>
					</li>
					<!-- /MENU ITEM -->
				
					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="<?php echo base_url();?>index.php/services">Explore Services</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="<?php echo base_url();?>index.php/categories">Range of Categories</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="<?php echo base_url();?>index.php/how_it_works">How it works</a>
					</li>
					<!-- /MENU ITEM -->
					<!-- MENU ITEM -->
					<li class="menu-item" style="background:#ff932a;color:#fff;">
						<a href="<?php echo base_url();?>index.php/add_project" style="color:#fff;">POST PROJECT</a>
					</li>
					
					<?php
						if(isset($this->session->userdata['logged_in'])){

					?>
					<li class="menu-item sub" style="float:right;">
						<a href="#">
							Dashboard
							<svg class="svg-arrow">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-arrow"></use>
							</svg>
						</a>
						<ul class="dropdown closed" >
							<li class="dropdown-item">
								<a href="<?php echo base_url();?>index.php/user_dashboard">Dashboard</a>
							</li>
							<li class="dropdown-item">
								<a href="<?php echo base_url();?>index.php/">My Profile</a>
							</li>
							<li class="dropdown-item">
								<a href="<?php echo base_url();?>index.php/">Add Services</a>
							</li>
							<li class="dropdown-item">
								<a href="<?php echo base_url();?>index.php/message_list">Messages</a>
							</li>
							<li class="dropdown-item">
								<a href="<?php echo base_url();?>index.php/ongoing_project">Ongoing Projects</a>
							</li>
							<li class="dropdown-item">
								<a href="<?php echo base_url();?>index.php/transaction">Accounts &amp; Finance</a>
							</li>
							<li class="dropdown-item">
								<a href="<?php echo base_url();?>index.php/feedback">Feedback &amp; Ratings</a>
							</li>
							<li class="dropdown-item">
								<a href="<?php echo base_url();?>index.php/account_profile">Settings</a>
							</li>
						</ul>
					</li>
					
					<?php
						}else{
					?>
					<li class="menu-item">
						<a href="<?php echo base_url();?>index.php/login">Login</a>
					</li>
					<li class="menu-item">
						<a href="<?php echo base_url();?>index.php/register">Register</a>
					</li>
					<?php
					}
					?>
					

				</ul>
			</nav>
		</div>
	</div>