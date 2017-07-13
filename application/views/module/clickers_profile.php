
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
	
	<!-- /SIDE MENU -->

	<!-- SIDE MENU -->
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

		<!-- SIDE MENU TITLE -->
		
	</div>
	<!-- /SIDE MENU -->

	<!-- MAIN MENU -->
	
	<!-- /MAIN MENU -->

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
					<h4>Latest Services</h4>
					<!--<a href="author-profile-items.html" class="button mid-short dark-light">See all the items</a>-->
				</div>
				<!-- /HEADLINE -->

				<!-- PRODUCT LIST -->
				<div class="product-list grid column3-4-wrap">
					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<a href="<?php echo base_url()?>index.php/services_details">
									<img src="<?php echo base_url();?>images/miniverse_m.jpg" alt="product-image">
								</a>
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="<?php echo base_url()?>index.php/services_details">
								<p class="text-header">Miniverse - Hero Image Composer</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<p class="category primary">Hero Images</p>
							<p class="price"><span>$</span>12</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<figure class="user-avatar small">
								<img src="<?php echo base_url();?>images/avatar_09.jpg" alt="user-avatar">
							</figure>
							<p class="text-header tiny">Odin_Design</p>
							<ul class="rating tooltip" title="Author's Reputation">
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PIN -->
						<span class="pin featured">Featured</span>
						<!-- /PIN -->

						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="image-slide product-preview-image">
								<a href="<?php echo base_url()?>index.php/services_details">
									<img src="<?php echo base_url();?>images/flat_m.jpg" alt="product-image">
								</a>
							</figure>
							
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="<?php echo base_url()?>index.php/services_details">
								<p class="text-header">Flatland - Hero Image Composer</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<p class="category primary">Hero Images</p>
							<p class="price"><span>$</span>12</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<figure class="user-avatar small">
								<img src="<?php echo base_url();?>images/avatar_09.jpg" alt="user-avatar">
							</figure>
							<p class="text-header tiny">Odin_Design</p>
							<ul class="rating tooltip" title="Author's Reputation">
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<a href="<?php echo base_url()?>index.php/services_details">
									<img src="<?php echo base_url();?>images/phantom_m.jpg" alt="product-image">
								</a>
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="<?php echo base_url()?>index.php/services_details">
								<p class="text-header">Phantom Cloud Illustration Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<p class="category primary">PSD Templates</p>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<figure class="user-avatar small">
								<img src="<?php echo base_url();?>images/avatar_09.jpg" alt="user-avatar">
							</figure>
							<p class="text-header tiny">Odin_Design</p>
							<ul class="rating tooltip" title="Author's Reputation">
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->
				</div>
				<!-- /PRODUCT LIST -->

				<div class="clearfix"></div>

				<!-- HEADLINE -->
				<div class="headline buttons primary">
					<h4>Latest Feedback</h4>
					<!--<a href="author-profile-messages.html" class="button mid-short dark-light">See all the Messages</a>-->
				</div>
				<!-- /HEADLINE -->

				<!-- COMMENTS -->
				<div class="comment-list">
					<!-- COMMENT -->
					<div class="comment-wrap">
						<!-- USER AVATAR -->
						<a href="<?php echo base_url()?>index.php/employers_profile">
							<figure class="user-avatar medium">
								<img src="<?php echo base_url();?>images/avatar_02.jpg" alt="">
							</figure>
						</a>
						<!-- /USER AVATAR -->
						<div class="comment">
							<a href="<?php echo base_url()?>index.php/employers_profile">
								<p class="text-header">MeganV.</p>
							</a>
							<!-- PIN -->
							<!--<span class="pin greyed">Purchased</span>-->
							<!-- /PIN -->
							<div class="user-rating">
								<ul class="rating tooltip" title="Author's Reputation">
								 <li class="rating-item">
								  <!-- SVG STAR -->
								  <svg class="svg-star">
								   <use xlink:href="#svg-star"></use>
								  </svg>
								  <!-- /SVG STAR -->
								 </li>
								 <li class="rating-item">
								  <!-- SVG STAR -->
								  <svg class="svg-star">
								   <use xlink:href="#svg-star"></use>
								  </svg>
								  <!-- /SVG STAR -->
								 </li>
								 <li class="rating-item">
								  <!-- SVG STAR -->
								  <svg class="svg-star">
								   <use xlink:href="#svg-star"></use>
								  </svg>
								  <!-- /SVG STAR -->
								 </li>
								 <li class="rating-item">
								  <!-- SVG STAR -->
								  <svg class="svg-star">
								   <use xlink:href="#svg-star"></use>
								  </svg>
								  <!-- /SVG STAR -->
								 </li>
								 <li class="rating-item empty">
								  <!-- SVG STAR -->
								  <svg class="svg-star">
								   <use xlink:href="#svg-star"></use>
								  </svg>
								  <!-- /SVG STAR -->
								 </li>
								</ul>
							</div>
							<p class="timestamp">5 Hours Ago</p>
							<a href="#" class="report">Report</a>
							<p>I've recently bought your theme and let me say it's fantastic! I have a small question regarding the main files and how to install the theme. Could you help me? Thanks!</p>
						</div>
					</div>
					<!-- /COMMENT -->

					<!-- LINE SEPARATOR -->
					<hr class="line-separator">
					<!-- /LINE SEPARATOR -->

					<!-- COMMENT -->
					<div class="comment-wrap">
						<!-- USER AVATAR -->
						<a href="<?php echo base_url()?>index.php/employers_profile">
							<figure class="user-avatar medium">
								<img src="<?php echo base_url();?>images/avatar_19.jpg" alt="">
							</figure>
						</a>
						<!-- /USER AVATAR -->
						<div class="comment">
							<a href="<?php echo base_url()?>index.php/employers_profile">
								<p class="text-header">Cloud Templates</p>
							</a>
							<div class="user-rating">
								<ul class="rating tooltip" title="Author's Reputation">
								 <li class="rating-item">
								  <!-- SVG STAR -->
								  <svg class="svg-star">
								   <use xlink:href="#svg-star"></use>
								  </svg>
								  <!-- /SVG STAR -->
								 </li>
								 <li class="rating-item">
								  <!-- SVG STAR -->
								  <svg class="svg-star">
								   <use xlink:href="#svg-star"></use>
								  </svg>
								  <!-- /SVG STAR -->
								 </li>
								 <li class="rating-item">
								  <!-- SVG STAR -->
								  <svg class="svg-star">
								   <use xlink:href="#svg-star"></use>
								  </svg>
								  <!-- /SVG STAR -->
								 </li>
								 <li class="rating-item">
								  <!-- SVG STAR -->
								  <svg class="svg-star">
								   <use xlink:href="#svg-star"></use>
								  </svg>
								  <!-- /SVG STAR -->
								 </li>
								 <li class="rating-item empty">
								  <!-- SVG STAR -->
								  <svg class="svg-star">
								   <use xlink:href="#svg-star"></use>
								  </svg>
								  <!-- /SVG STAR -->
								 </li>
								</ul>
							</div>
							<p class="timestamp">8 Hours Ago</p>
							<a href="#" class="report">Report</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
					<!-- /COMMENT -->
				</div>
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