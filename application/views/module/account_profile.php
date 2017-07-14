
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	$this->load->view("common/meta_links");
?>
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
			<p>Home<span class="separator">/</span><span class="current-section">Author's Profile</span></p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->

	<!-- AUTHOR PROFILE BANNER -->
	<div class="author-profile-banner"></div>
	<!-- /AUTHOR PROFILE BANNER -->

	<!-- AUTHOR PROFILE META -->
	<div class="author-profile-meta-wrap">
		<div class="author-profile-meta">
			<!-- AUTHOR PROFILE INFO -->
			<div class="author-profile-info">
				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Member Since:</p>
					<p>December 26th, 2013</p>
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
			<div class="form-box-items" >
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
							<input type="text" id="new_pwd" name="first_name" placeholder="Enter your password here...">
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="new_pwd2" class="rl-label">Last Name</label>
							<input type="text" id="new_pwd2" name="last_name" placeholder="Repeat your password here...">
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="new_email" class="rl-label">Email</label>
							<input type="email" id="new_email" name="new_email" placeholder="Enter your email address here...">
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
							<div class="input-container half">
							<label for="country1" class="rl-label required">Country</label>
							<label for="country1" class="select-block">
								<select name="country1" id="country1">
									<option value="0">Select your Country...</option>
									<option value="1">United States</option>
									<option value="2">Argentina</option>
									<option value="3">Brasil</option>
									<option value="4">Japan</option>
								</select>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</label>
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="country1" class="rl-label required">State</label>
							<label for="country1" class="select-block">
								<select name="country1" id="country1">
									<option value="0">Select your State...</option>
									<option value="1">United States</option>
									<option value="2">Argentina</option>
									<option value="3">Brasil</option>
									<option value="4">Japan</option>
								</select>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</label>
						</div>
						<!-- /INPUT CONTAINER -->

						
						<!-- INPUT CONTAINER -->
					<div class="input-container">
						<label for="notes2" class="rl-label">About You</label>
						<textarea form="profile-info-form" id="notes2" name="notes2" placeholder="Tell Your Stories..."></textarea>
					</div>
					<!-- /INPUT CONTAINER -->
						

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label class="rl-label">Preferences</label>
							<!-- CHECKBOX -->
							<input type="checkbox" id="show_balance" name="show_balance" checked>
							<label for="show_balance" class="label-check">
								<span class="checkbox primary"><span></span></span>
								Show account balance in the status bar
							</label>
							<!-- /CHECKBOX -->

							<!-- CHECKBOX -->
							<input type="checkbox" id="email_notif" name="email_notif">
							<label for="email_notif" class="label-check">
								<span class="checkbox primary"><span></span></span>
								Send me email notifications
							</label>
							<!-- /CHECKBOX -->
						</div>
						<hr class="line-separator">
						<button class="button big dark">Submit Service <span class="primary">for Review</span></button>
					</form>
				</div>
				<!-- /FORM BOX ITEM -->

		

			
				<!-- /FORM BOX ITEM -->

		
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
</body>
</html>