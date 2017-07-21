<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article">
<head>
<?php
	 $this->load->view("common/meta_links");
?>
</head>
<body>

	<!-- HEADER -->
	<?php
		$this->load->view("common/header");
	?>
	<!-- /HEADER -->

	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap">
		<div class="section-headline">
			<h2>Add Service</h2>
			<p>Home<span class="separator">/</span><span class="current-section">Add Service</span></p>
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
				<?php
				if($this->session->flashdata('success')){
			?>
				<div class="form-popup headline primary align-center" style="margin-bottom:10px;width:100%;">
					<h4><img src="<?php echo base_url();?>images/if_sign-check_299110.png" style="height:34px;margin-top:15px;float:left;"> &nbsp; <p style="margin-top:25px;float:left;margin-left:10px;"><?php echo $this->session->flashdata('success');?></p></h4>
				</div>
			<?php
				}
			?>

			<?php
				if($this->session->flashdata('failed')){
			?>
				<div class="form-popup headline primary align-center" style="margin-bottom:10px;width:100%;">
					<h4><img src="<?php echo base_url();?>images/if_ic_cancel_48px_352263.png" style="height:34px;margin-top:15px;float:left;"> &nbsp; <p style="margin-top:25px;float:left;margin-left:10px;"><?php echo $this->session->flashdata('failed');?></p></h4>
				</div>
			<?php
				}
			?>
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
					<form name="myform" method="POST" action="<?php echo base_url();?>index.php/users_bank_details/insert_details" enctype="multipart/form-data">
						<!-- INPUT CONTAINER -->
					
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->

						<div class="input-container" >
							<label for="item_name" class="rl-label required">Full Name</label>
							<input type="text" id="item_name" name="holder_name" placeholder="Account Holder Name...">
						</div>

						<div class="input-container" >
							<label for="item_name" class="rl-label required">Name Of The Bank</label>
							<input type="text" id="item_name" name="bank_name" placeholder="Enter Name Of The Bank...">
						</div>

						
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
							<div class="input-container" >
							<label for="item_name" class="rl-label required">Bank Account Number</label>
							<input type="text" id="item_name" name="account_number" placeholder="Enter Your Bank Account Number...">
						</div>

						<div class="input-container" >
							<label for="item_name" class="rl-label required">Bank IFSC Code</label>
							<input type="text" id="item_name" name="ifsc_code" placeholder="Enter Bank IFSC Code...">
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