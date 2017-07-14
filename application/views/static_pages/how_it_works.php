<!DOCTYPE html>
<html lang="en">
<head>
<?php
	 $this->load->view("common/meta_links");
?>
	<title>Hire professional photographers |  Click R stop</title>
	<style>
		.website_homepage_1st_screen .website_homepage_1st_screen_no_more {
			text-align: center;
			position: relative;
			z-index: 2;
			margin-top: 7vh;
		}
		.website_homepage_1st_screen .typed-cursor {
			display: inline-block;
			vertical-align: top;
			font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 400;
			font-size: 39px;
			line-height: 31px;
			color: #fff;
			opacity: 1;
			-webkit-animation: blink 0.7s infinite;
			-moz-animation: blink 0.7s infinite;
			animation: blink 0.7s infinite;
		}
		
		.product-item:hover{
			cursor:pointer;
			-webkit-box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);
		}
		.badge:hover{
			height:200px;
			width:200px;
		}
		.asda{
			background:#ff932a;color:#fff;font-style:normal !important;font-size:22px;
		}
		.asda:hover{
			background:#00d7b3;
		}
	</style>
</head>
<body>

<?php
		 $this->load->view("common/header");
	?>
		<div class="section-headline-wrap v3">
			<div class="section-headline">
				<h2>Terms and Conditions</h2>
				<p>Home<span class="separator">/</span><span class="current-section">Terms and Conditions</span></p>
			</div>
		</div>

		<!-- how it works -->
			<div class="section overflowable" style="height:500px;">
				<div class="badges-showcase column5-wrap" style="margin-top:100px;">
					<div class="badges-showcase-item column">
						<div class="badge big" style="text-align:center;">
							<img src="<?php echo base_url();?>images/search.png" alt="" style="height:128px !important;">
						</div>
						<p class="text-header" style="margin-top:-40px;">Explore Services</p>
						<p class="badge-description">Opportunity to choose by comparing 1000's of photographers/agencies from your locality.</p>
						<div class="badge-progress badge-progress7 xmlinefill" style="width: 150px; height: 18px; position: relative;"><canvas class="lineOutline" width="150" height="18" style="position: absolute; z-index: 0; top: 0px; left: 0px;"></canvas><canvas class="lineBar" width="150" height="18" style="position: absolute; z-index: 1; top: 0px; left: 0px;"></canvas></div>
					</div>

					<div class="badges-showcase-item column">
						<div class="badge big" style="text-align:center;">
							<img src="<?php echo base_url();?>images/choose_the_best.png" alt="" style="height:128px !important;">
						</div>
						<p class="text-header"  style="margin-top:-40px;">Shortlist the best</p>
						<p class="badge-description">Choose the best from entire marketplace depending on your requirement and budget.</p>
						<div class="badge-progress badge-progress8 xmlinefill" style="width: 150px; height: 18px; position: relative;"><canvas class="lineOutline" width="150" height="18" style="position: absolute; z-index: 0; top: 0px; left: 0px;"></canvas><canvas class="lineBar" width="150" height="18" style="position: absolute; z-index: 1; top: 0px; left: 0px;"></canvas></div>
					</div>

					<div class="badges-showcase-item column">
						<div class="badge big" style="text-align:center;">
							<img src="<?php echo base_url();?>images/query.png" alt="" style="height:128px !important;">
						</div>
						<p class="text-header" style="margin-top:-40px;">Chat and Hire</p>
						<p class="badge-description">One to One chat with vendors , clear your doubts and get started.</p>
						<div class="badge-progress badge-progress9 xmlinefill" style="width: 150px; height: 18px; position: relative;"><canvas class="lineOutline" width="150" height="18" style="position: absolute; z-index: 0; top: 0px; left: 0px;"></canvas><canvas class="lineBar" width="150" height="18" style="position: absolute; z-index: 1; top: 0px; left: 0px;"></canvas></div>
					</div>

					<div class="badges-showcase-item column">
						<div class="badge big" style="text-align:center;">
							<img src="<?php echo base_url();?>images/cart.png" alt="" style="height:128px !important;">
						</div>
						<p class="text-header" style="margin-top:-40px;">Payment security</p>
						<p class="badge-description">Your money will be on hold in our platform. Pay only when you get your things done.</p>
						<div class="badge-progress badge-progress10 xmlinefill" style="width: 150px; height: 18px; position: relative;"><canvas class="lineOutline" width="150" height="18" style="position: absolute; z-index: 0; top: 0px; left: 0px;"></canvas><canvas class="lineBar" width="150" height="18" style="position: absolute; z-index: 1; top: 0px; left: 0px;"></canvas></div>
					</div>

					<div class="badges-showcase-item column">
						<div class="badge big" style="text-align:center;">
							<img src="<?php echo base_url();?>images/complete.png" alt="" style="height:128px !important;">
						</div>
						<p class="text-header" style="margin-top:-40px;">Feedback and rating</p>
						<p class="badge-description">Release your onhold money to vendors. Give feedback and rating to vendors.</p>
						<div class="badge-progress badge-progress11 xmlinefill" style="width: 150px; height: 18px; position: relative;"><canvas class="lineOutline" width="150" height="18" style="position: absolute; z-index: 0; top: 0px; left: 0px;"></canvas><canvas class="lineBar" width="150" height="18" style="position: absolute; z-index: 1; top: 0px; left: 0px;"></canvas></div>
					</div>

				</div>
				<div class="clearfix"></div>
	     </div>

		

		 <div class="section" style="margin-top:-0px;">
			
			<div class="ht-banner-wrap" style="background:white !important;margin-top:0px !important;border-top:1px solid #CCC;">
				<video controls loop autoplay class="ht-banner void" style="background:#fff;">
				  <source src="<?php echo base_url();?>images/homepage-de21e73d.mp4" type="video/mp4">
				  Your browser does not support the video tag.
				</video>
				<div class="ht-banner" style="background:white !important;">
					<div class="ht-banner-content" style="padding:0px !important;">
						<p class="text-header">Why Post Project?</p>
						<p style="padding:5px;"><i class="fa fa-check-circle" aria-hidden="true" style="color:#5dc26a;font-size:18px;"></i> &nbsp;Our executive get back to you and guide you for free.</p>
						<p style="padding:5px;"><i class="fa fa-check-circle" aria-hidden="true" style="color:#5dc26a;font-size:18px;"></i> &nbsp;We help you choose and suggest the best match for your requirement.</p>
						
						<p style="padding:5px;"><i class="fa fa-check-circle" aria-hidden="true" style="color:#5dc26a;font-size:18px;"></i> &nbsp;Browse samples of previous work.</p>
						<p style="padding:5px;"><i class="fa fa-check-circle" aria-hidden="true" style="color:#5dc26a;font-size:18px;"></i> &nbsp;Chat with photographer clear all queries.</p>
						<p style="padding:5px;"><i class="fa fa-check-circle" aria-hidden="true" style="color:#5dc26a;font-size:18px;"></i> &nbsp;Get started by clicking hire button.</p>
						<p style="padding:5px;"><i class="fa fa-check-circle" aria-hidden="true" style="color:#5dc26a;font-size:18px;"></i> &nbsp;Release money when you're fully satisfied.</p>
						<a href="#" class="button mid asda">POST PROJECT</a>
					</div>
				</div>
			</div>
		 </div>

	<?php
		 $this->load->view("common/footer");
	?>
<script src="<?php echo base_url();?>js/home.js"></script>
<script src="<?php echo base_url();?>js/8b038c3dc4c40927d4119c639043b6bc10322310039.js"></script>
</body>
</html>