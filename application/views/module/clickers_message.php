
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

	<div id="account-options-menu" class="side-menu right closed">
		<!-- SVG PLUS -->
		<svg class="svg-plus">
			<use xlink:href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->

		<!-- SIDE MENU HEADER -->
		<div class="side-menu-header">
			<!-- USER QUICKVIEW -->
			<div class="user-quickview">
				<!-- USER AVATAR -->
				<a href="author-profile.html">
				<div class="outer-ring">
					<div class="inner-ring"></div>
					<figure class="user-avatar">
						<img src="<?php echo base_url();?>images/avatar_01.jpg" alt="avatar">
					</figure>
				</div>
				</a>
				<!-- /USER AVATAR -->

				<!-- USER INFORMATION -->
				<p class="user-name">Johnny Fisher</p>
				<p class="user-money">$745.00</p>
				<!-- /USER INFORMATION -->
			</div>
			<!-- /USER QUICKVIEW -->
		</div>
		<!-- /SIDE MENU HEADER -->


	</div>
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
					<h4>Message Board</h4>
					<!--<a href="author-profile-messages.html" class="button mid-short dark-light">See all the Messages</a>-->
				</div>
				<!-- /HEADLINE -->

				<!-- COMMENTS -->
				
					<!-- COMMENT -->
					
				<!-- FORM BOX ITEM -->
				<div class="comment-list">
					<!-- COMMENT -->
					<div class="comment-wrap">
						<!-- USER AVATAR -->
						<a href="user-profile.html">
							<figure class="user-avatar medium">
								<img src="<?php echo base_url();?>images/avatar_02.jpg" alt="">
							</figure>
						</a>
						<!-- /USER AVATAR -->
						<div class="comment">
							<p class="text-header">MeganV.</p>
							<!-- PIN -->
							<span class="pin greyed">Purchased</span>
							<!-- /PIN -->
							<p class="timestamp">5 Hours Ago</p>
							<a href="#" class="report">Report</a>
							<a href="<?php echo base_url()?>index.php/chat_box">
								<p>I,ve recently bought your theme and let me say it,s fantastic! I have a small question regarding the main files and how to install the theme. Could you help me? Thanks!</p>
							</a>
						</div>
					</div>
					<!-- /COMMENT -->

					<!-- LINE SEPARATOR -->
					<hr class="line-separator">
					<!-- /LINE SEPARATOR -->

					<!-- COMMENT -->
					<div class="comment-wrap">
						<!-- USER AVATAR -->
						<a href="user-profile.html">
							<figure class="user-avatar medium">
								<img src="<?php echo base_url();?>images/avatar_19.jpg" alt="">
							</figure>
						</a>
						<!-- /USER AVATAR -->
						<div class="comment">
							<p class="text-header">Cloud Templates</p>
							<p class="timestamp">8 Hours Ago</p>
							<a href="#" class="report">Report</a>
							<a href="<?php echo base_url()?>index.php/chat_box">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							</a>
						</div>
					</div>
					<!-- /COMMENT -->

					<div class="comment-wrap">
						<!-- USER AVATAR -->
						<a href="user-profile.html">
							<figure class="user-avatar medium">
								<img src="<?php echo base_url();?>images/avatar_18.jpg" alt="">
							</figure>
						</a>
						<!-- /USER AVATAR -->
						<div class="comment">
							<p class="text-header">Lucy Diamond</p>
							<p class="timestamp">10 Hours Ago</p>
							<a href="#" class="report">Report</a>
							<a href="<?php echo base_url()?>index.php/chat_box">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							</a>
						</div>
					</div>


					<!-- LINE SEPARATOR -->
					<hr class="line-separator">
					<!-- /LINE SEPARATOR -->

					<!-- PAGER -->
					<div class="pager primary">
						<div class="pager-item"><p>1</p></div>
						<div class="pager-item active"><p>2</p></div>
						<div class="pager-item"><p>3</p></div>
						<div class="pager-item"><p>...</p></div>
						<div class="pager-item"><p>17</p></div>
					</div>
					<!-- /PAGER -->

					

					<!-- LINE SEPARATOR -->
					

					<!-- COMMENT REPLY -->
					
					<!-- /COMMENT REPLY -->
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