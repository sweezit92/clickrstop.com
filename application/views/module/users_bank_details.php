
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$this->load->view("common/meta_links");
	?>
	<title>Emerald Dragon | Add Service</title>
</head>
<body>

	<!-- HEADER -->
	<?php
		$this->load->view("common/header");
	?>
	<!-- /HEADER -->

		<!-- /DROPDOWN -->

	
	<!-- /SIDE MENU -->

	<!-- MAIN MENU -->
	
	<!-- /MAIN MENU -->

	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap">
		<div class="section-headline">
			<h2>Add Service</h2>
			<p>Home<span class="separator">/</span><span class="current-section">Add Service</span></p>
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
				<!-- SIDEBAR ITEM -->
		
				<!-- /SIDEBAR ITEM -->

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
				<div class="headline buttons primary">
					<h4>Add Bank Account Details</h4>
					<!--<a href="author-profile-messages.html" class="button mid-short dark-light">See all the Messages</a>-->
				</div>
				<!-- /HEADLINE -->

				<!-- COMMENTS -->
				
					<!-- COMMENT -->
					
				<!-- FORM BOX ITEM -->
				<div class="form-box-item full">
					<h4>Details Specifications</h4>
					<hr class="line-separator">
					<form id="upload_form">
						<!-- INPUT CONTAINER -->
					
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->

						<div class="input-container" >
							<label for="item_name" class="rl-label required">Name</label>
							<input type="text" id="item_name" name="item_name" placeholder="Enter Your Name...">
						</div>

						<div class="input-container" >
							<label for="item_name" class="rl-label required">Name Of The Bank</label>
							<input type="text" id="item_name" name="item_name" placeholder="Enter Name Of The Bank...">
						</div>

						
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
							<div class="input-container" >
							<label for="item_name" class="rl-label required">Bank Account Number</label>
							<input type="text" id="item_name" name="item_name" placeholder="Enter Your Bank Account Number...">
						</div>

						<div class="input-container" >
							<label for="item_name" class="rl-label required">Bank IFSC Code</label>
							<input type="text" id="item_name" name="item_name" placeholder="Enter Bank IFSC Code...">
						</div>
						<!-- INPUT CONTAINER -->
						<!-- INPUT CONTAINER -->
						<!--<div class="input-container">
							<label class="rl-label required">Upload Images</label>
							
							<div class="upload-file">
								<div class="upload-file-actions">
									<a href="#" class="button dark-light">Upload File...</a>
									<p>Screenshot 01.jpeg</p>
								</div>
								<div class="upload-file-progress">
									
									<div class="upload-bar">
										<div class="upload-pg3"></div>
									</div>
									
									<p class="text-header">68%</p>
									<a href="#" class="button dark-light square">
										<img src="<?php echo base_url();?>images/close-icon-small.png" alt="close-icon">
									</a>
								</div>
							</div>
							
							<div class="upload-file multiupload">
								<div class="upload-file-actions">
									<a href="#" class="button dark-light">Upload File...</a>
									<p>Screenshot 02.jpeg</p>
								</div>
								<div class="upload-file-progress">
								
									<div class="upload-bar">
										<div class="upload-pg4"></div>
									</div>
									
									<p class="text-header">73%</p>
									<a href="#" class="button dark-light square">
										<img src="<?php echo base_url();?>images/close-icon-small.png" alt="close-icon">
									</a>
								</div>
							</div>
							
							<div class="upload-file multiupload">
								<div class="upload-file-actions">
									<a href="#" class="button dark-light">Upload File...</a>
									<p>Screenshot 03.jpeg</p>
								</div>
								<div class="upload-file-progress">
									
									<div class="upload-bar">
										<div class="upload-pg5"></div>
									</div>
									
									<p class="text-header">92%</p>
									<a href="#" class="button dark-light square">
										<img src="<?php echo base_url();?>images/close-icon-small.png" alt="close-icon">
									</a>
								</div>
							</div>
							
						</div>
						<!-- /INPUT CONTAINER -->


						<!-- INPUT CONTAINER -->
					
						<!-- /INPUT CONTAINER -->

						<hr class="line-separator">
						<button class="button big dark">Submit Your <span class="primary">Bank Details</span></button>
					</form>
				</div>
				<!-- /FORM BOX ITEM -->
			
					


				<!-- /COMMENTS -->
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