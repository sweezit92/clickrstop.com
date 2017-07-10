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
	
	<!-- services start -->
	<div id="services-wrap">
		<section id="services">
			<!-- SERVICE LIST -->
			<div class="service-list column4-wrap">
				<!-- SERVICE ITEM -->
				<div class="service-item column">
					<div class="circle medium gradient"></div>
					<div class="circle white-cover"></div>
					<div class="circle dark">
						<span class="icon-present"></span>
					</div>
					<h3>Buy &amp; Sell Easily</h3>
					<p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /SERVICE ITEM -->

				<!-- SERVICE ITEM -->
				<div class="service-item column">
					<div class="circle medium gradient"></div>
					<div class="circle white-cover"></div>
					<div class="circle dark">
						<span class="icon-lock"></span>
					</div>
					<h3>Secure Transaction</h3>
					<p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /SERVICE ITEM -->

				<!-- SERVICE ITEM -->
				<div class="service-item column">
					<div class="circle medium gradient"></div>
					<div class="circle white-cover"></div>
					<div class="circle dark">
						<span class="icon-like"></span>
					</div>
					<h3>Products Control</h3>
					<p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /SERVICE ITEM -->

				<!-- SERVICE ITEM -->
				<div class="service-item column">
					<div class="circle medium gradient"></div>
					<div class="circle white-cover"></div>
					<div class="circle dark">
						<span class="icon-diamond"></span>
					</div>
					<h3>Quality Platform</h3>
					<p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /SERVICE ITEM -->
			</div>
			<!-- /SERVICE LIST -->
			<div class="clearfix"></div>
		</section>
	</div>
	<!-- services ends -->

	<!-- how it works -->
	<div class="ht-banner-wrap">
		<!-- HT BANNER -->
		<div class="ht-banner void violet">
			<figure class="ht-banner-img1">
				<img src="<?php echo base_url();?>images/how_to_shop_01.png" alt="">
			</figure>
		</div>
		<!-- /HT BANNER -->

		<!-- HT BANNER -->
		<div class="ht-banner">
			<!-- HT BANNER CONTENT -->
			<div class="ht-banner-content">
				<p class="text-header">Create Your Account</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in der henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<a href="#" class="button mid dark">Create your <span class="primary">New Account</span></a>
			</div>
			<!-- /HT BANNER CONTENT -->
		</div>
		<!-- /HT BANNER -->

		<!-- HT BANNER -->
		<div class="ht-banner void pink">
			<figure class="ht-banner-img2">
				<img src="<?php echo base_url();?>images/how_to_shop_02.png" alt="">
			</figure>
		</div>
		<!-- /HT BANNER -->

		<!-- HT BANNER -->
		<div class="ht-banner">
			<!-- HT BANNER CONTENT -->
			<div class="ht-banner-content">
				<p class="text-header">Browse Our Shop Items</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in der henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<a href="#" class="button mid dark"><span class="primary">Most Popular</span> Items</a>
			</div>
			<!-- /HT BANNER CONTENT -->
		</div>
		<!-- /HT BANNER -->

		<!-- HT BANNER -->
		<div class="ht-banner void blue">
			<figure class="ht-banner-img3">
				<img src="<?php echo base_url();?>images/how_to_shop_03.png" alt="">
			</figure>
		</div>
		<!-- /HT BANNER -->

		<!-- HT BANNER -->
		<div class="ht-banner">
			<!-- HT BANNER CONTENT -->
			<div class="ht-banner-content">
				<p class="text-header">Shopping Cart and Checkout</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in der henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<a href="#" class="button mid dark">Our <span class="primary">Payment Methods</span></a>
			</div>
			<!-- /HT BANNER CONTENT -->
		</div>
		<!-- /HT BANNER -->
	</div>
	<!-- how it works -->


<?php
		 $this->load->view("common/footer");
	?>
<script src="js/home.js"></script>
</body>
</html>