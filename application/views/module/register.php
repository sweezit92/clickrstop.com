
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$this->load->view("common/meta_links");
?>

	<title>Login | Click R stop</title>
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
	
			<!-- /FORM POPUP -->




			<!-- FORM POPUP -->
			

			<!-- FORM POPUP -->
			<div class="form-popup align-center">


				<!-- FORM POPUP HEADLINE -->
				<div class="form-popup-headline secondary">
					<h2>Login to your Account</h2>
					<p>Enter now to your account and start buying and selling!</p>
				</div>
				<!-- /FORM POPUP HEADLINE -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<form id="login-form2">
						<label for="username5" class="rl-label">Username</label>
						<input type="text" id="username5" name="username5" placeholder="Enter your username here...">
						<label for="password5" class="rl-label">Password</label>
						<input type="password" id="password5" name="password5" placeholder="Enter your password here...">
						<!-- CHECKBOX -->
						<input type="checkbox" id="remember2" name="remember2" checked>
						<!-- /CHECKBOX -->
						<p>Forgot your password? <a href="#" class="primary">Click here!</a></p>
						<button class="button mid dark">Login <span class="primary">Now!</span></button>
					</form>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator double">
					<!-- /LINE SEPARATOR -->
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