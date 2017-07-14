
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	$this->load->view("common/meta_links");
?>
	<title>Emerald Dragon |User Dashboard</title>
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
			<h2>User Dashboard</h2>
			<p>Home<span class="separator">/</span><span class="current-section">User Dashboard</span></p>
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
				<div class="sidebar-item author-reputation full">
					<h4>Author's Reputation</h4>
					<hr class="line-separator">
					<!-- PIE CHART -->
					<div class="pie-chart pie-chart1">
						<p class="text-header percent">86<span>%</span></p>
						<p class="text-header percent-info">Recommended</p>
						<!-- RATING -->
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
						<!-- /RATING -->
					</div>
					<!-- /PIE CHART -->
					<a href="#" class="button mid dark-light">Read all the Customer Reviews</a>
				</div>
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content right">
				<!-- HEADLINE -->
				<div class="headline buttons primary">
					<h4>DASHBOARD</h4>
					
				</div>
				<!-- /HEADLINE -->

				<!-- PRODUCT LIST -->
			
				<!-- /PRODUCT LIST -->

				<div class="clearfix"></div>
						<!-- SALE DATA -->
			<div class="sale-data" >
				<!-- SALE DATA ITEM -->
				<div class="sale-data-item" style="width:48%;height:153px;">
					<span class="sl-icon icon-present"></span>
					<p class="text-header big">8.530</p>
					
					<div class="sale-data-item-info">
						<p class="text-header">Gigs Uploaded</p>
						<p>In all Time</p>
					</div>
					<div class="sale-data-item-info" style="float:right;margin-right:21px;">
						<a href="author-profile-items.html" class="button mid-short dark-light">See all the items</a>
					</div>
				</div>
				<!-- /SALE DATA ITEM-->

				<!-- SALE DATA ITEM -->
				<div class="sale-data-item" style="width:48%;margin-left:4%;height:153px;">
					<span class="sl-icon icon-camera icons"></span>
					<p class="text-header big">234</p>
					<div class="sale-data-item-info">
						<p class="text-header">Products Sold</p>
						<p>In this Month</p>
					</div>
					<div class="sale-data-item-info" style="float:right;margin-right:21px;">
						<a href="author-profile-items.html" class="button mid-short dark-light">See all the items</a>
					</div>
				</div>
				<!-- /SALE DATA ITEM-->
				<!-- SALE DATA ITEM -->
				<div class="sale-data-item" style="width:48%;;margin-top:11px;height:153px;">
					<span class="sl-icon icon-wallet"></span>
					<p class="text-header big">234</p>
					<div class="sale-data-item-info">
						<p class="text-header">Products Sold</p>
						<p>In this Month</p>
					</div>
					<div class="sale-data-item-info" style="float:right;margin-right:21px;">
						<a href="author-profile-items.html" class="button mid-short dark-light">See Order History</a>
					</div>
				</div>
				<!-- /SALE DATA ITEM-->
				<!-- SALE DATA ITEM -->
				<div class="sale-data-item" style="width:48%;margin-top:11px;margin-left:4%;height:153px;">
					<span class="sl-icon icon-calculator icons"></span>
					<p class="text-header big">234</p>
					<div class="sale-data-item-info">
						<p class="text-header">Products Sold</p>
						<p>In this Month</p>
					</div>
					<div class="sale-data-item-info" style="float:right;margin-right:21px;">
						<a href="author-profile-items.html" class="button mid-short dark-light">See all Trasaction</a>
					</div>
				</div>
				<!-- /SALE DATA ITEM-->
				<!-- SALE DATA ITEM -->
				<div class="sale-data-item" style="width:48%;margin-top:11px;height:153px;">
					<span class="sl-icon icon-event icons"></span>
					<p class="text-header big">234</p>
					<div class="sale-data-item-info">
						<p class="text-header">Message Sent</p>
						<p>In this Month</p>
					</div>
					<div class="sale-data-item-info" style="float:right;margin-right:21px;">
						<a href="author-profile-items.html" class="button mid-short dark-light">See Message Board</a>
					</div>
				</div>
				<!-- /SALE DATA ITEM-->

					<!-- SALE DATA ITEM -->
				<div class="sale-data-item" style="width:48%;margin-top:11px;height:153px;margin-left:4%;">
					<span class="sl-icon icon-drawer icons"></span>
					
					<div class="sale-data-item-info">
						<p class="text-header">Check Your Account Details</p>
						<p>To Update</p>
					</div>
					<div class="sale-data-item-info" style="float:right;margin-right:21px;">
						<a href="author-profile-items.html" class="button mid-short dark-light">View Accounts Details</a>
					</div>
				</div>
				<!-- /SALE DATA ITEM-->

				

				
			</div>
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