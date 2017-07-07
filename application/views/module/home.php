<!DOCTYPE html>
<html lang="en">
<head>
<?php
	 $this->load->view("common/meta_links");
?>
	<title>Hire professional photographers |  Click R stop</title>
</head>
<body>

<?php
		 $this->load->view("common/header");
	?>
	<!-- /MAIN MENU -->

	<!-- BANNER -->
	<div class="banner-wrap" style="background:url('<?php echo base_url();?>images/collage_slider.png');">
		<section class="banner">
			<h5>Welcome to</h5>
			<h1>Photographers <span> Marketplace</span></h1>
			<h5>Capture your moments dont just let it get fade away.</h5>
			<img src="<?php echo base_url();?>images/top_items.png" alt="banner-img">

			<!-- SEARCH WIDGET -->
			<div class="search-widget">
				<form class="search-widget-form">
					<input type="text" name="category_name" placeholder="Search goods or services here...">
					<label for="categories" class="select-block">
						<select name="categories" id="categories">
							<option value="0">All Categories</option>
						</select>
						<!-- SVG ARROW -->
						<svg class="svg-arrow">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</label>
					<button class="button medium dark">Search Now!</button>
				</form>
			</div>
			<!-- /SEARCH WIDGET -->
		</section>
	</div>
	<!-- /BANNER -->

	<!-- PRODUCT SIDESHOW -->
	<div id="product-sideshow-wrap">
		<div id="product-sideshow">
			<!-- PRODUCT SHOWCASE -->
			<div class="product-showcase">
				<!-- HEADLINE -->
				<div class="headline primary">
					<h4>Latest Online Products</h4>
					<!-- SLIDE CONTROLS -->
					<div class="slide-control-wrap">
						<div class="slide-control left">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</div>

						<div class="slide-control right">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</div>
					</div>
					<!-- /SLIDE CONTROLS -->
				</div>
				<!-- /HEADLINE -->

				<!-- PRODUCT LIST -->
				<div id="pl-1" class="product-list grid column4-wrap owl-carousel">
					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/westeros_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Westeros Custom Clothing</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="<?php echo base_url();?>images/avatar_01.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Johnny Fisher</p>
							</a>
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
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/flat_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Flatland - Hero Image Composer</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Hero Images</p>
							</a>
							<p class="price"><span>$</span>12</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
								<img src="<?php echo base_url();?>images/pixel_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Pixel Diamond Gaming Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Shopify</p>
							</a>
							<p class="price"><span>$</span>86</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="<?php echo base_url();?>images/avatar_06.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Sarah-Imaginarium</p>
							</a>
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
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/miniverse_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Miniverse - Hero Image Composer</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Hero Images</p>
							</a>
							<p class="price"><span>$</span>12</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
								<img src="<?php echo base_url();?>images/westeros_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Westeros Custom Clothing</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="<?php echo base_url();?>images/avatar_01.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Johnny Fisher</p>
							</a>
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
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/flat_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Flatland - Hero Image Composer</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Hero Images</p>
							</a>
							<p class="price"><span>$</span>12</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
								<img src="<?php echo base_url();?>images/pixel_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Pixel Diamond Gaming Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Shopify</p>
							</a>
							<p class="price"><span>$</span>86</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="<?php echo base_url();?>images/avatar_06.jpg" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny">Sarah-Imaginarium</p>
							</a>
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
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/miniverse_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Miniverse - Hero Image Composer</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Hero Images</p>
							</a>
							<p class="price"><span>$</span>12</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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

				<!-- PRODUCT LIST -->
				<div id="pl-2" class="product-list grid column4-wrap owl-carousel">
					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/phantom_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Phantom Cloud Illustration Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
								<img src="<?php echo base_url();?>images/shadow_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">8 Long Shadow Flat Icons</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Icon Packs</p>
							</a>
							<p class="price"><span>$</span>6</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/monsters_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Little Monsters - 40 Pack Button...</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Graphics</p>
							</a>
							<p class="price"><span>$</span>10</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/trickster_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Trickster Product Builder</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
								<img src="<?php echo base_url();?>images/phantom_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Phantom Cloud Illustration Shop</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
								<img src="<?php echo base_url();?>images/shadow_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">8 Long Shadow Flat Icons</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Icon Packs</p>
							</a>
							<p class="price"><span>$</span>6</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/monsters_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Little Monsters - 40 Pack Button...</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Graphics</p>
							</a>
							<p class="price"><span>$</span>10</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/trickster_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Trickster Product Builder</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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

				<!-- PRODUCT LIST -->
				<div id="pl-3" class="product-list grid column4-wrap owl-carousel">
					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/patriot_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Patriot - Flyer Template</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Flyers</p>
							</a>
							<p class="price"><span>$</span>6</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/city_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">City Seamless Game Background</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Backgrounds</p>
							</a>
							<p class="price"><span>$</span>10</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/alchemists_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Alchemists Sports Magazine</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
								<img src="<?php echo base_url();?>images/park_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Social Media Cover - Park at Night</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Social Covers</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/patriot_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Patriot - Flyer Template</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Flyers</p>
							</a>
							<p class="price"><span>$</span>6</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/city_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">City Seamless Game Background</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Backgrounds</p>
							</a>
							<p class="price"><span>$</span>10</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
					</div>
					<!-- /PRODUCT ITEM -->

					<!-- PRODUCT ITEM -->
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="<?php echo base_url();?>images/alchemists_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">The Alchemists Sports Magazine</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">PSD Templates</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
								<img src="<?php echo base_url();?>images/park_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header">Social Media Cover - Park at Night</p>
							</a>
							<p class="product-description">Lorem ipsum dolor sit urarde...</p>
							<a href="shop-gridview-v1.html">
								<p class="category primary">Social Covers</p>
							</a>
							<p class="price"><span>$</span>14</p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

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
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->
				</div>
				<!-- /PRODUCT LIST -->
			</div>
			<!-- /PRODUCT SHOWCASE -->

		</div>
	</div>
	<!-- /PRODUCTS SIDESHOW -->

	<!-- SUBSCRIBE BANNER -->
	<div id="subscribe-banner-wrap">
		<div id="subscribe-banner">
			<!-- SUBSCRIBE CONTENT -->
			<div class="subscribe-content">
				<!-- SUBSCRIBE HEADER -->
				<div class="subscribe-header">
					<figure>
						<img src="<?php echo base_url();?>images/news_icon.png" alt="subscribe-icon">
					</figure>
					<p class="subscribe-title">Subscribe to our Newsletter</p>
					<p>And receive the latest news and offers</p>
				</div>
				<!-- /SUBSCRIBE HEADER -->

				<!-- SUBSCRIBE FORM -->
				<form class="subscribe-form">
					<input type="text" name="subscribe_email" id="subscribe_email" placeholder="Enter your email here...">
					<button class="button medium dark">Subscribe!</button>
				</form>
				<!-- /SUBSCRIBE FORM -->
			</div>
			<!-- /SUBSCRIBE CONTENT -->
		</div>
	</div>
	<!-- /SUBSCRIBE BANNER -->
<?php
		 $this->load->view("common/footer");
	?>
<script src="js/home.js"></script>
</body>
</html>