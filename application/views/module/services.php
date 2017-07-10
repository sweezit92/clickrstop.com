
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	$this->load->view("common/meta_links");
?>
	<title>Emerald Dragon | Gig List</title>
</head>
<body>

	<!-- HEADER -->
<?php
	$this->load->view("common/header");
?>
	<!-- /HEADER -->

	<!-- SIDE MENU -->

	<!-- /MAIN MENU -->

	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap v3">
		<div class="section-headline">
			<h2>Gig List</h2>
			<p>Home<span class="separator">/</span><span class="current-section">Gig List</span></p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->

	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section">
			<!-- CONTENT -->
			<div class="content">
				<!-- HEADLINE -->
				<div class="headline secondary">
					<h4>12.580 Gigs Found</h4>
					<!-- VIEW SELECTORS -->
					<div class="view-selectors">
						<a href="services.html" class="view-selector grid active"></a>
						<a href="services-listview.html" class="view-selector list"></a>
					</div>
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
						<label for="itemspp_filter" class="select-block">
							<select name="itemspp_filter" id="itemspp_filter">
								<option value="0">12 Items Per Page</option>
								<option value="1">6 Items Per Page</option>
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

				<!-- PRODUCT SHOWCASE -->
				<div class="product-showcase">
					<!-- PRODUCT LIST -->
					<div class="product-list grid column3-4-wrap">
						<!-- PRODUCT ITEM -->
						<div class="product-item column">
							<!-- PRODUCT PREVIEW ACTIONS -->
							<div class="product-preview-actions">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image">
									<img src="<?php echo base_url();?>images/logos_m.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->

								<!-- PREVIEW ACTIONS -->
								<div class="preview-actions">
									<!-- PREVIEW ACTION -->
									<div class="preview-action">
										<a href="<?php echo base_url()?>index.php/services_details">
											<div class="circle tiny primary">
												<span class="icon-tag"></span>
											</div>
										</a>
										<a href="<?php echo base_url()?>index.php/services_details">
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
								<a href="<?php echo base_url()?>index.php/services_details">
									<p class="text-header">Professional Corporate Logos</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="services.html">
									<p class="category secondary">Graphic Design</p>
								</a>
								<p class="price"><span>$</span>260</p>
							</div>
							<!-- /PRODUCT INFO -->
							<hr class="line-separator">

							<!-- USER RATING -->
							<div class="user-rating">
								<a href="author-profile.html">
									<figure class="user-avatar small">
										<img src="<?php echo base_url();?>images/avatar_14.jpg" alt="user-avatar">
									</figure>
								</a>
								<a href="author-profile.html">
									<p class="text-header tiny">Jenny_Block</p>
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
									<img src="<?php echo base_url();?>images/cartoon_m.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->

								<!-- PREVIEW ACTIONS -->
								<div class="preview-actions">
									<!-- PREVIEW ACTION -->
									<div class="preview-action">
										<a href="<?php echo base_url()?>index.php/services_details">
											<div class="circle tiny primary">
												<span class="icon-tag"></span>
											</div>
										</a>
										<a href="<?php echo base_url()?>index.php/services_details">
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
								<a href="<?php echo base_url()?>index.php/services_details">
									<p class="text-header">Clean Cartoon Characters</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="services.html">
									<p class="category secondary">Illustration</p>
								</a>
								<p class="price"><span>$</span>180</p>
							</div>
							<!-- /PRODUCT INFO -->
							<hr class="line-separator">

							<!-- USER RATING -->
							<div class="user-rating">
								<a href="author-profile.html">
									<figure class="user-avatar small">
										<img src="<?php echo base_url();?>images/avatar_15.jpg" alt="user-avatar">
									</figure>
								</a>
								<a href="author-profile.html">
									<p class="text-header tiny">AmyGlush</p>
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
									<img src="<?php echo base_url();?>images/flyers_m.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->

								<!-- PREVIEW ACTIONS -->
								<div class="preview-actions">
									<!-- PREVIEW ACTION -->
									<div class="preview-action">
										<a href="<?php echo base_url()?>index.php/services_details">
											<div class="circle tiny primary">
												<span class="icon-tag"></span>
											</div>
										</a>
										<a href="<?php echo base_url()?>index.php/services_details">
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
								<a href="<?php echo base_url()?>index.php/services_details">
									<p class="text-header">Professional Party Flyers</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="services.html">
									<p class="category secondary">Graphic Design</p>
								</a>
								<p class="price"><span>$</span>95</p>
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
									<img src="<?php echo base_url();?>images/app_m.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->

								<!-- PREVIEW ACTIONS -->
								<div class="preview-actions">
									<!-- PREVIEW ACTION -->
									<div class="preview-action">
										<a href="<?php echo base_url()?>index.php/services_details">
											<div class="circle tiny primary">
												<span class="icon-tag"></span>
											</div>
										</a>
										<a href="<?php echo base_url()?>index.php/services_details">
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
								<a href="<?php echo base_url()?>index.php/services_details">
									<p class="text-header">Vector Icons for Web Apps</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="services.html">
									<p class="category secondary">UI/UX</p>
								</a>
								<p class="price"><span>$</span>260</p>
							</div>
							<!-- /PRODUCT INFO -->
							<hr class="line-separator">

							<!-- USER RATING -->
							<div class="user-rating">
								<a href="author-profile.html">
									<figure class="user-avatar small">
										<img src="<?php echo base_url();?>images/avatar_03.jpg" alt="user-avatar">
									</figure>
								</a>
								<a href="author-profile.html">
									<p class="text-header tiny">Thomas_Ket</p>
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

						<div class="product-item column">
							<!-- PRODUCT PREVIEW ACTIONS -->
							<div class="product-preview-actions">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image">
									<img src="<?php echo base_url();?>images/app_m.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->

								<!-- PREVIEW ACTIONS -->
								<div class="preview-actions">
									<!-- PREVIEW ACTION -->
									<div class="preview-action">
										<a href="<?php echo base_url()?>index.php/services_details">
											<div class="circle tiny primary">
												<span class="icon-tag"></span>
											</div>
										</a>
										<a href="<?php echo base_url()?>index.php/services_details">
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
								<a href="<?php echo base_url()?>index.php/services_details">
									<p class="text-header">Vector Icons for Web Apps</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="services.html">
									<p class="category secondary">UI/UX</p>
								</a>
								<p class="price"><span>$</span>260</p>
							</div>
							<!-- /PRODUCT INFO -->
							<hr class="line-separator">

							<!-- USER RATING -->
							<div class="user-rating">
								<a href="author-profile.html">
									<figure class="user-avatar small">
										<img src="<?php echo base_url();?>images/avatar_03.jpg" alt="user-avatar">
									</figure>
								</a>
								<a href="author-profile.html">
									<p class="text-header tiny">Thomas_Ket</p>
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
						<div class="product-item column">
							<!-- PRODUCT PREVIEW ACTIONS -->
							<div class="product-preview-actions">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image">
									<img src="<?php echo base_url();?>images/app_m.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->

								<!-- PREVIEW ACTIONS -->
								<div class="preview-actions">
									<!-- PREVIEW ACTION -->
									<div class="preview-action">
										<a href="<?php echo base_url()?>index.php/services_details">
											<div class="circle tiny primary">
												<span class="icon-tag"></span>
											</div>
										</a>
										<a href="<?php echo base_url()?>index.php/services_details">
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
								<a href="<?php echo base_url()?>index.php/services_details">
									<p class="text-header">Vector Icons for Web Apps</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="services.html">
									<p class="category secondary">UI/UX</p>
								</a>
								<p class="price"><span>$</span>260</p>
							</div>
							<!-- /PRODUCT INFO -->
							<hr class="line-separator">

							<!-- USER RATING -->
							<div class="user-rating">
								<a href="author-profile.html">
									<figure class="user-avatar small">
										<img src="<?php echo base_url();?>images/avatar_03.jpg" alt="user-avatar">
									</figure>
								</a>
								<a href="author-profile.html">
									<p class="text-header tiny">Thomas_Ket</p>
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
					</div>
					<!-- /PRODUCT LIST -->
				</div>
				<!-- /PRODUCT SHOWCASE -->

				<div class="clearfix"></div>

				<!-- PAGER -->
				<div class="pager secondary">
					<div class="pager-item"><p>1</p></div>
					<div class="pager-item active"><p>2</p></div>
					<div class="pager-item"><p>3</p></div>
					<div class="pager-item"><p>...</p></div>
					<div class="pager-item"><p>17</p></div>
				</div>
				<!-- /PAGER -->
			</div>
			<!-- CONTENT -->

			<!-- SIDEBAR -->
			<div class="sidebar">
				<!-- DROPDOWN -->
				<ul class="dropdown hover-effect secondary">
					<li class="dropdown-item">
						<a href="#">Digital Graphics</a>
					</li>
					<li class="dropdown-item active">
						<a href="#">Illustration</a>
					</li>
					<li class="dropdown-item">
						<a href="#">Web Design</a>
					</li>
					<li class="dropdown-item">
						<a href="#">Stock Photography</a>
					</li>
					<li class="dropdown-item">
						<a href="#">Code and Plugins</a>
					</li>
				</ul>
				<!-- /DROPDOWN -->

				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item">
					<h4>Filter Products</h4>
					<hr class="line-separator">
					<form id="shop_search_form" name="shop_search_form">
						<!-- CHECKBOX -->
						<input type="checkbox" id="filter1" name="filter1" checked>
						<label for="filter1">
							<span class="checkbox secondary"><span></span></span>
							Cartoon Characters
							<span class="quantity">350</span>
						</label>
						<!-- /CHECKBOX -->

						<!-- CHECKBOX -->
						<input type="checkbox" id="filter2" name="filter2" checked>
						<label for="filter2">
							<span class="checkbox secondary"><span></span></span>
							Flat Vector
							<span class="quantity">68</span>
						</label>
						<!-- /CHECKBOX -->

						<!-- CHECKBOX -->
						<input type="checkbox" id="filter3" name="filter3" checked>
						<label for="filter3">
							<span class="checkbox secondary"><span></span></span>
							People
							<span class="quantity">350</span>
						</label>
						<!-- /CHECKBOX -->

						<!-- CHECKBOX -->
						<input type="checkbox" id="filter4" name="filter4">
						<label for="filter4">
							<span class="checkbox secondary"><span></span></span>
							Animals
							<span class="quantity">68</span>
						</label>
						<!-- /CHECKBOX -->

						<!-- CHECKBOX -->
						<input type="checkbox" id="filter5" name="filter5">
						<label for="filter5">
							<span class="checkbox secondary"><span></span></span>
							Objects
							<span class="quantity">350</span>
						</label>
						<!-- /CHECKBOX -->

						<!-- CHECKBOX -->
						<input type="checkbox" id="filter6" name="filter6" checked>
						<label for="filter6">
							<span class="checkbox secondary"><span></span></span>
							Backgrounds
							<span class="quantity">68</span>
						</label>
						<!-- /CHECKBOX -->
					</form>
				</div>
				<!-- /SIDEBAR ITEM -->

				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item">
					<h4>File Types</h4>
					<hr class="line-separator">
					<!-- CHECKBOX -->
					<input type="checkbox" id="ft1" name="ft1" form="shop_search_form">
					<label for="ft1">
						<span class="checkbox secondary"><span></span></span>
						Photoshop PSD
						<span class="quantity">72</span>
					</label>
					<!-- /CHECKBOX -->

					<!-- CHECKBOX -->
					<input type="checkbox" id="ft2" name="ft2" form="shop_search_form" checked>
					<label for="ft2">
						<span class="checkbox secondary"><span></span></span>
						Illustrator AI
						<span class="quantity">254</span>
					</label>
					<!-- /CHECKBOX -->

					<!-- CHECKBOX -->
					<input type="checkbox" id="ft3" name="ft3" form="shop_search_form" checked>
					<label for="ft3">
						<span class="checkbox secondary"><span></span></span>
						EPS
						<span class="quantity">138</span>
					</label>
					<!-- /CHECKBOX -->

					<!-- CHECKBOX -->
					<input type="checkbox" id="ft4" name="ft4" form="shop_search_form" checked>
					<label for="ft4">
						<span class="checkbox secondary"><span></span></span>
						SVG
						<span class="quantity">96</span>
					</label>
					<!-- /CHECKBOX -->

					<!-- CHECKBOX -->
					<input type="checkbox" id="ft5" name="ft5" form="shop_search_form">
					<label for="ft5">
						<span class="checkbox secondary"><span></span></span>
						InDesign INDD
						<span class="quantity">102</span>
					</label>
					<!-- /CHECKBOX -->
				</div>
				<!-- /SIDEBAR ITEM -->

				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item range-feature">
					<h4>Price Range</h4>
					<hr class="line-separator spaced">
					<input type="hidden" class="price-range-slider secondary" value="500" form="shop_search_form">
					<button form="shop_search_form" class="button mid secondary-dark">Update your Search</button>
				</div>
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->
		</div>
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
<?php
	$this->load->view("common/footer");
?>
</body>
</html>