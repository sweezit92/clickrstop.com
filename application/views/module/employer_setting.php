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
			<p>Home<span class="separator">/</span><span class="current-section">Add Project</span></p>
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
					$this->load->view("common/employer_sidebar");
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
					<h4>Add Service</h4>
					<!--<a href="author-profile-messages.html" class="button mid-short dark-light">See all the Messages</a>-->
				</div>
				<!-- /HEADLINE -->

				<!-- COMMENTS -->
				
					<!-- COMMENT -->
					
				<!-- FORM BOX ITEM -->
				<div class="form-box-item full">
					<h4>Service Specifications</h4>
					<hr class="line-separator">
					<form id="upload_form">
						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_name" class="rl-label required">Full Name</label>
							<input type="text" id="item_name" name="item_name" placeholder="Enter Your Full Name...">
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_name" class="rl-label required">Phone Number</label>
							<input type="text" id="item_name" name="item_name" placeholder="Enter Your Phone Nymber...">
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_name" class="rl-label required">Budget</label>
							<input type="text" id="item_name" name="item_name" placeholder="Enter Your Project Budget...">
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_description" class="rl-label required">Service Description</label>
							<textarea id="item_description" name="item_description" placeholder="What Puporse You Are Looking For..."></textarea>
						</div>
						<!-- INPUT CONTAINER -->
						
						<hr class="line-separator">
						<button class="button big dark">Submit Service <span class="primary">To Us</span></button>
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