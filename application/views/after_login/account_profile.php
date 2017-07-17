<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article">
<head>
<?php
	 $this->load->view("common/meta_links");
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVEqoCsKgUMmAcDVX9OAwVMDewLI6yOAQ&sensor=false&libraries=places&language=en"></script>
<style>
post-tab .tab-header.tertiary .tab-item.selected > p{
border-top-color: #00d7b3 !important;
}
</style>
	<title>Emerald Dragon | Author Profile</title>
</head>
<body>

	<!-- HEADER -->
<?php
	$this->load->view("common/header");
?>
	<!-- /HEADER -->

	<!-- SIDE MENU -->


	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap">
		<div class="section-headline">
			<h2>Author's Profile</h2>
			<p>Home<span class="separator">/</span><span class="current-section">Author's Profile-</span></p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->

	<!-- AUTHOR PROFILE META -->
	<div class="author-profile-meta-wrap">
		<div class="author-profile-meta">
			<!-- AUTHOR PROFILE INFO -->
			<div class="author-profile-info">
				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Member Since:</p>
					<p>December 26th, 2013 - 
					<?php 
					$row = $usr_data;
					$array = json_decode(json_encode($row),True);
					print_r($array);
					?>
					</p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->

				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Total Sales:</p>
					<p>820</p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->

				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Freelance Work:</p>
					<p>Available</p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->

				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Website:</p>
					<p><a href="http://www.odindesign-themes.com/" class="primary">www.odindesign-themes.com</a></p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->
			</div>
			<!-- /AUTHOR PROFILE INFO -->
		</div>
	</div>
	<!-- /AUTHOR PROFILE META -->

	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section overflowable">
			<!-- SIDEBAR -->
			<div class="sidebar left author-profile">
			

				<!-- DROPDOWN -->
				<?php
					$this->load->view("common/clickers_sidebar");
				?>
				<!-- /DROPDOWN -->

				<!-- SIDEBAR ITEM -->
				
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content right">
				<!-- HEADLINE -->
				
				<!-- /HEADLINE -->

				
				<!-- /PRODUCT LIST -->

				<div class="clearfix"></div>
					<!-- FORM BOX ITEMS -->
			<div class="content left">
			<!-- POST TAB -->
			
				<div class="post-tab">
					<!-- TAB HEADER -->
					<div class="tab-header primary">
						<!-- TAB ITEM -->
						<div class="tab-item selected" style="width:50%;"> 
							<p class="text-header">General Settings</p>
						</div>
						<!-- /TAB ITEM -->

						<!-- TAB ITEM -->
						<div class="tab-item" style="width:50%;">
							<p class="text-header">Security Settings</p>
						</div>
						<!-- /TAB ITEM -->
					</div>
					<!-- /TAB HEADER -->

					<!-- TAB CONTENT -->
					<div class="tab-content void">
						<!-- COMMENTS -->
						
							<!-- FORM BOX ITEM -->
							
							<div class="form-box-item " style="width:100%;">
								<h4>Profile Information</h4>
								<hr class="line-separator">
								<!-- PROFILE IMAGE UPLOAD -->
								<div class="profile-image">
									<div class="profile-image-data">
										<figure class="user-avatar medium">
											<img src="<?php echo base_url();?>images/profile-default-image.png" alt="profile-default-image">
										</figure>
										<p class="text-header">Profile Photo</p>
										<p class="upload-details">Minimum size 70x70px</p>
									</div>
									<a href="#" class="button mid-short dark-light">Upload Image...</a>
								</div>
								<!-- PROFILE IMAGE UPLOAD -->

								<form id="profile-info-form">
									

									<!-- INPUT CONTAINER -->
									<div class="input-container half">
										<label for="new_pwd" class="rl-label">First Name</label>
										<input type="text" id="new_pwd" value="<?php echo $row['fname'];?>" name="first_name" placeholder="Enter your Firstname here...">
									</div>
									<!-- /INPUT CONTAINER -->

									<!-- INPUT CONTAINER -->
									<div class="input-container half">
										<label for="new_pwd2" class="rl-label">Last Name</label>
										<input type="text" id="new_pwd2" name="last_name" placeholder="Enter Your Lastname here...">
									</div>
									<!-- /INPUT CONTAINER -->

									<!-- INPUT CONTAINER -->
									<div class="input-container">
										<label for="new_email" class="rl-label">Email</label>
										<input type="email" id="new_email" name="new_email" placeholder="Enter your email address here...">
									</div>
									<!-- /INPUT CONTAINER -->
									
									<!-- INPUT CONTAINER -->
									<div class="input-container">
										<label for="new_email" class="rl-label">City</label>
										<input type="text" id="cityz" name="addr" placeholder="Choose from dropdown">
									</div>
									<!-- /INPUT CONTAINER -->

									<!-- INPUT CONTAINER -->
								<div class="input-container">
									<label for="notes2" class="rl-label">About You</label>
									<textarea form="profile-info-form" id="notes2" name="notes2" placeholder="Tell Your Stories..."></textarea>
								</div>
									

									<!--<div class="input-container">
										<label class="rl-label">Preferences</label>

										<input type="checkbox" id="show_balance" name="show_balance" checked>
										<label for="show_balance" class="label-check">
											<span class="checkbox primary"><span></span></span>
											Show account balance in the status bar
										</label>

										<input type="checkbox" id="email_notif" name="email_notif">
										<label for="email_notif" class="label-check">
											<span class="checkbox primary"><span></span></span>
											Send me email notifications
										</label>
									</div>
									<hr class="line-separator">-->
									<button class="button big dark">Update Profile</button>
								</form>
							</div>
						
					</div>
					<!-- /TAB CONTENT -->

					<!-- TAB CONTENT -->
					<div class="tab-content void">
						<!-- COMMENTS -->
						<div class="form-box-item " style="width:100%;">
								<h4>Profile Information</h4>
								<hr class="line-separator">
								<form id="profile-info-form">

									<!-- INPUT CONTAINER -->
									<div class="input-container">
										<label for="new_email" class="rl-label">Current Password</label>
										<input type="email" id="new_email" name="new_email" placeholder="Enter your current password...">
									</div>
									<!-- /INPUT CONTAINER -->

									<!-- INPUT CONTAINER -->
									<div class="input-container">
										<label for="new_email" class="rl-label">New Password</label>
										<input type="email" id="new_email" name="new_email" placeholder="Enter your new password...">
									</div>
									<!-- /INPUT CONTAINER -->

									<!-- INPUT CONTAINER -->
									<div class="input-container">
										<label for="new_email" class="rl-label">Confirm New Password</label>
										<input type="email" id="new_email" name="new_email" placeholder="Confirm your new password...">
									</div>
									<!-- /INPUT CONTAINER -->

									<hr class="line-separator">
									<button class="button big dark">Update Password</button>
								</form>
							</div>
						<!-- /COMMENTS -->
					</div>
					<!-- /TAB CONTENT -->

				</div>
			
			<!-- /POST TAB -->
			</div>

			<!-- /FORM BOX -->

				<!-- HEADLINE -->
				
				<!-- /HEADLINE -->

			
			</div>
			<!-- CONTENT -->

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
<?php
	$this->load->view("common/footer");
?>
  <script>
      var input = document.getElementById('cityz');
      var autocomplete = new google.maps.places.Autocomplete(input);
    </script>
</body>
</html>