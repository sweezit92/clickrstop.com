
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
		<p class="side-menu-title">Your Account</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-notifications.html">Notifications</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-inbox.html">Messages</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="cart.html">Your Cart</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="favourites.html">Favourites</a>
			</li>
			<!-- /DROPDOWN ITEM -->
		</ul>
		<!-- /DROPDOWN -->

		<!-- SIDE MENU TITLE -->
		
		<!-- /DROPDOWN -->

		<a href="#" class="button medium secondary">Logout</a>
		<a href="#" class="button medium primary">Become a Seller</a>
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
				<div class="headline primary">
					<h4>12 Projects Found</h4>
					<!-- VIEW SELECTORS -->
					<!-- /VIEW SELECTORS -->
					<form id="shop_filter_form" name="shop_filter_form">
						<label for="price_filter" class="select-block">
							<select name="price_filter" id="price_filter">
								<option value="0">Price (High to Low)</option>
								<option value="1">Price (Low to High)</option>
							</select>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</label>
					</form>
					<div class="clearfix"></div>
				</div>
				<!-- /HEADLINE -->

				<!-- COMMENTS -->
				
					<!-- COMMENT -->
					
				<!-- FORM BOX ITEM -->
				<div class="product-showcase">
					<!-- PRODUCT LIST -->
					<div class="product-list list">
						<!-- PRODUCT ITEM -->
						
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							<!-- PIN -->
							<span class="pin featured">Featured</span>
							<!-- /PIN -->
							<a href="item-v1.html">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image small">
									<img src="<?php echo base_url();?>images/flat_s.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->
							</a>

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">Flatland - Hero Image Composer</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">Hero Images</p>
								</a>
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="<?php echo base_url();?>images/avatar_09.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Odin_Design</p>
									</a>
								</div>
								<!-- /USER RATING -->

								<!-- METADATA -->
								<div class="metadata">
									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-bubble"></span>
										<p>12</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-eye"></span>
										<p>210</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-heart"></span>
										<p>105</p>
									</div>
									<!-- /META ITEM -->
								</div>
								<!-- /METADATA -->
							</div>
							<!-- /AUTHOR DATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data-reputation">
								<p class="text-header tiny">Reputation</p>
								<ul class="rating">
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
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="item-actions">
								<a href="#" class="tooltip" title="Add to Favourites">
									<div class="circle tiny">
										<span class="icon-heart"></span>
									</div>
								</a>
							</div>
							<!-- /ITEM ACTIONS -->

							<!-- PRICE INFO -->
							<div class="price-info">
								<p class="price medium"><span>$</span>12</p>
							</div>
							<!-- /PRICE INFO -->
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							<a href="item-v1.html">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image small">
									<img src="<?php echo base_url();?>images/pixel_s.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->
							</a>

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">Pixel Diamond Gaming Shop</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">Shopify</p>
								</a>
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="<?php echo base_url();?>images/avatar_06.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Sarah_Imaginarium</p>
									</a>
								</div>
								<!-- /USER RATING -->

								<!-- METADATA -->
								<div class="metadata">
									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-bubble"></span>
										<p>12</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-eye"></span>
										<p>210</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-heart"></span>
										<p>105</p>
									</div>
									<!-- /META ITEM -->
								</div>
								<!-- /METADATA -->
							</div>
							<!-- /AUTHOR DATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data-reputation">
								<p class="text-header tiny">Reputation</p>
								<ul class="rating">
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
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="item-actions">
								<a href="#" class="tooltip" title="Add to Favourites">
									<div class="circle tiny">
										<span class="icon-heart"></span>
									</div>
								</a>
							</div>
							<!-- /ITEM ACTIONS -->

							<!-- PRICE INFO -->
							<div class="price-info">
								<p class="price medium"><span>$</span>86</p>
							</div>
							<!-- /PRICE INFO -->
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							<a href="item-v1.html">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image small">
									<img src="<?php echo base_url();?>images/miniverse_s.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->
							</a>

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">Miniverse - Hero Image Composer</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">Hero Images</p>
								</a>
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="<?php echo base_url();?>images/avatar_09.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Odin_Design</p>
									</a>
								</div>
								<!-- /USER RATING -->

								<!-- METADATA -->
								<div class="metadata">
									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-bubble"></span>
										<p>12</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-eye"></span>
										<p>210</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-heart"></span>
										<p>105</p>
									</div>
									<!-- /META ITEM -->
								</div>
								<!-- /METADATA -->
							</div>
							<!-- /AUTHOR DATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data-reputation">
								<p class="text-header tiny">Reputation</p>
								<ul class="rating">
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
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="item-actions">
								<a href="#" class="tooltip" title="Add to Favourites">
									<div class="circle tiny">
										<span class="icon-heart"></span>
									</div>
								</a>
							</div>
							<!-- /ITEM ACTIONS -->

							<!-- PRICE INFO -->
							<div class="price-info">
								<p class="price medium"><span>$</span>12</p>
							</div>
							<!-- /PRICE INFO -->
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							<a href="item-v1.html">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image small">
									<img src="<?php echo base_url();?>images/phantom_s.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->
							</a>

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">Phantom Cloud Illustration Shop</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">PSD Templates</p>
								</a>
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="<?php echo base_url();?>images/avatar_09.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Odin_Design</p>
									</a>
								</div>
								<!-- /USER RATING -->

								<!-- METADATA -->
								<div class="metadata">
									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-bubble"></span>
										<p>12</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-eye"></span>
										<p>210</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-heart"></span>
										<p>105</p>
									</div>
									<!-- /META ITEM -->
								</div>
								<!-- /METADATA -->
							</div>
							<!-- /AUTHOR DATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data-reputation">
								<p class="text-header tiny">Reputation</p>
								<ul class="rating">
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
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="item-actions">
								<a href="#" class="tooltip" title="Add to Favourites">
									<div class="circle tiny">
										<span class="icon-heart"></span>
									</div>
								</a>
							</div>
							<!-- /ITEM ACTIONS -->

							<!-- PRICE INFO -->
							<div class="price-info">
								<p class="price medium"><span>$</span>14</p>
							</div>
							<!-- /PRICE INFO -->
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							<a href="item-v1.html">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image small">
									<img src="<?php echo base_url();?>images/shadow_s.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->
							</a>

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">8 Long Shadow Flat Icons</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">Icon Packs</p>
								</a>
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="<?php echo base_url();?>images/avatar_04.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Red Thunder Graphics</p>
									</a>
								</div>
								<!-- /USER RATING -->

								<!-- METADATA -->
								<div class="metadata">
									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-bubble"></span>
										<p>12</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-eye"></span>
										<p>210</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-heart"></span>
										<p>105</p>
									</div>
									<!-- /META ITEM -->
								</div>
								<!-- /METADATA -->
							</div>
							<!-- /AUTHOR DATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data-reputation">
								<p class="text-header tiny">Reputation</p>
								<ul class="rating">
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
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="item-actions">
								<a href="#" class="tooltip" title="Add to Favourites">
									<div class="circle tiny">
										<span class="icon-heart"></span>
									</div>
								</a>
							</div>
							<!-- /ITEM ACTIONS -->

							<!-- PRICE INFO -->
							<div class="price-info">
								<p class="price medium"><span>$</span>6</p>
							</div>
							<!-- /PRICE INFO -->
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							<a href="item-v1.html">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image small">
									<img src="<?php echo base_url();?>images/monsters_s.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->
							</a>

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">Little Monsters - 40 Pack Button...</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">Graphics</p>
								</a>
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="<?php echo base_url();?>images/avatar_10.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Haunted Mouse</p>
									</a>
								</div>
								<!-- /USER RATING -->

								<!-- METADATA -->
								<div class="metadata">
									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-bubble"></span>
										<p>12</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-eye"></span>
										<p>210</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-heart"></span>
										<p>105</p>
									</div>
									<!-- /META ITEM -->
								</div>
								<!-- /METADATA -->
							</div>
							<!-- /AUTHOR DATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data-reputation">
								<p class="text-header tiny">Reputation</p>
								
							</div>
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="item-actions">
								<a href="#" class="tooltip" title="Add to Favourites">
									<div class="circle tiny">
										<span class="icon-heart"></span>
									</div>
								</a>
							</div>
							<!-- /ITEM ACTIONS -->

							<!-- PRICE INFO -->
							<div class="price-info">
								<p class="price medium"><span>$</span>10</p>
							</div>
							<!-- /PRICE INFO -->
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							<a href="item-v1.html">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image small">
									<img src="<?php echo base_url();?>images/trickster_s.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->
							</a>

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">The Trickster Product Builder</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">PSD Templates</p>
								</a>
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="<?php echo base_url();?>images/avatar_09.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Odin_Design</p>
									</a>
								</div>
								<!-- /USER RATING -->

								<!-- METADATA -->
								<div class="metadata">
									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-bubble"></span>
										<p>12</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-eye"></span>
										<p>210</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-heart"></span>
										<p>105</p>
									</div>
									<!-- /META ITEM -->
								</div>
								<!-- /METADATA -->
							</div>
							<!-- /AUTHOR DATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data-reputation">
								<p class="text-header tiny">Reputation</p>
								<ul class="rating">
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
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="item-actions">
								<a href="#" class="tooltip" title="Add to Favourites">
									<div class="circle tiny">
										<span class="icon-heart"></span>
									</div>
								</a>
							</div>
							<!-- /ITEM ACTIONS -->

							<!-- PRICE INFO -->
							<div class="price-info">
								<p class="price medium"><span>$</span>14</p>
							</div>
							<!-- /PRICE INFO -->
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							<a href="item-v1.html">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image small">
									<img src="<?php echo base_url();?>images/patriot_s.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->
							</a>

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">The Patriot - Flyer Template</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">Flyers</p>
								</a>
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="<?php echo base_url();?>images/avatar_11.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Vynil Brush</p>
									</a>
								</div>
								<!-- /USER RATING -->

								<!-- METADATA -->
								<div class="metadata">
									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-bubble"></span>
										<p>12</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-eye"></span>
										<p>210</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-heart"></span>
										<p>105</p>
									</div>
									<!-- /META ITEM -->
								</div>
								<!-- /METADATA -->
							</div>
							<!-- /AUTHOR DATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data-reputation">
								<p class="text-header tiny">Reputation</p>
								<ul class="rating">
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
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="item-actions">
								<a href="#" class="tooltip" title="Add to Favourites">
									<div class="circle tiny">
										<span class="icon-heart"></span>
									</div>
								</a>
							</div>
							<!-- /ITEM ACTIONS -->

							<!-- PRICE INFO -->
							<div class="price-info">
								<p class="price medium"><span>$</span>6</p>
							</div>
							<!-- /PRICE INFO -->
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							<a href="item-v1.html">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image small">
									<img src="<?php echo base_url();?>images/city_s.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->
							</a>

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">City Seamless Game Background</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">Backgrounds</p>
								</a>
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="<?php echo base_url();?>images/avatar_12.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Game Pix</p>
									</a>
								</div>
								<!-- /USER RATING -->

								<!-- METADATA -->
								<div class="metadata">
									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-bubble"></span>
										<p>12</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-eye"></span>
										<p>210</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-heart"></span>
										<p>105</p>
									</div>
									<!-- /META ITEM -->
								</div>
								<!-- /METADATA -->
							</div>
							<!-- /AUTHOR DATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data-reputation">
								<p class="text-header tiny">Reputation</p>
								
							</div>
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="item-actions">
								<a href="#" class="tooltip" title="Add to Favourites">
									<div class="circle tiny">
										<span class="icon-heart"></span>
									</div>
								</a>
							</div>
							<!-- /ITEM ACTIONS -->

							<!-- PRICE INFO -->
							<div class="price-info">
								<p class="price medium"><span>$</span>10</p>
							</div>
							<!-- /PRICE INFO -->
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item">
							<a href="item-v1.html">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image small">
									<img src="<?php echo base_url();?>images/park_s.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->
							</a>

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">Social Media Cover - Park at Night</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">Social Covers</p>
								</a>
							</div>
							<!-- /PRODUCT INFO -->

							<!-- AUTHOR DATA -->
							<div class="author-data">
								<!-- USER RATING -->
								<div class="user-rating">
									<a href="author-profile.html">
										<figure class="user-avatar small">
											<img src="<?php echo base_url();?>images/avatar_13.jpg" alt="user-avatar">
										</figure>
									</a>
									<a href="author-profile.html">
										<p class="text-header tiny">Violet &amp; Jane</p>
									</a>
								</div>
								<!-- /USER RATING -->

								<!-- METADATA -->
								<div class="metadata">
									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-bubble"></span>
										<p>12</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-eye"></span>
										<p>210</p>
									</div>
									<!-- /META ITEM -->

									<!-- META ITEM -->
									<div class="meta-item">
										<span class="icon-heart"></span>
										<p>105</p>
									</div>
									<!-- /META ITEM -->
								</div>
								<!-- /METADATA -->
							</div>
							<!-- /AUTHOR DATA -->

							<!-- AUTHOR DATA REPUTATION -->
							<div class="author-data-reputation">
								<p class="text-header tiny">Reputation</p>
								<ul class="rating">
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
									<li class="rating-item empty">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
								</ul>
							</div>
							<!-- /AUTHOR DATA REPUTATION -->

							<!-- ITEM ACTIONS -->
							<div class="item-actions">
								<a href="#" class="tooltip" title="Add to Favourites">
									<div class="circle tiny">
										<span class="icon-heart"></span>
									</div>
								</a>
							</div>
							<!-- /ITEM ACTIONS -->

							<!-- PRICE INFO -->
							<div class="price-info">
								<p class="price medium"><span>$</span>14</p>
							</div>
							<!-- /PRICE INFO -->
						</div>
						<!-- /PRODUCT ITEM -->
					</div>
					<!-- /PRODUCT LIST -->
					<div class="clearfix"></div>
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