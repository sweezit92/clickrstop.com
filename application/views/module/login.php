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
	<!-- /MAIN MENU -->



	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section" >
			<!-- FORM POPUP -->

			<!-- FORM POPUP -->
			<div class="form-popup align-center">

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Login to your Account</h4>
					<hr class="line-separator double">

					<form id="login-form">
						<input type="text" id="email" name="email" placeholder="Email">
						<input type="password" id="password5" name="password5" placeholder="Password">
						<!-- CHECKBOX -->
						<input type="checkbox" id="remember2" name="remember2" checked>
						<!-- /CHECKBOX -->
						<p>Forgot your password? <a href="<?php echo base_url();?>index.php/forget" class="primary">Click here!</a></p>
						<button class="button mid dark">Login <span class="primary">Now!</span></button>
					</form>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->

			<!-- FORM POPUP -->
	
			<!-- /FORM POPUP -->

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- /SECTION -->

<?php
	$this->load->view("common/footer");
?>
</body>
</html>