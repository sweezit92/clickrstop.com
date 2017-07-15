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
			
			<?php
				if($this->session->flashdata('success')){
			?>
				<div class="form-popup headline primary align-center" style="margin-bottom:10px;">
					<h4><img src="<?php echo base_url();?>images/if_sign-check_299110.png" style="height:34px;margin-top:15px;float:left;"> &nbsp; <p style="margin-top:25px;float:left;margin-left:10px;"><?php echo $this->session->flashdata('success');?></p></h4>
				</div>
			<?php
				}
			?>

			<?php
				if($this->session->flashdata('failed')){
			?>
				<div class="form-popup headline primary align-center" style="margin-bottom:10px;">
					<h4><img src="<?php echo base_url();?>images/if_ic_cancel_48px_352263.png" style="height:34px;margin-top:15px;float:left;"> &nbsp; <p style="margin-top:25px;float:left;margin-left:10px;"><?php echo $this->session->flashdata('failed');?></p></h4>
				</div>
			<?php
				}
			?>

			<div class="form-popup align-center">
				
				<!-- FORM POPUP CONTENT -->
				
				
				<div class="form-popup-content">
					<h4 class="popup-title">Register a new Account</h4>
					<hr class="line-separator double">

					<form id="login-form" name="myform" method="POST" action="<?php echo base_url();?>index.php/register/save_register" enctype="multipart/form-data" >
						<select id="type" name="type" style="margin-bottom:25px;color:#888;">
							<option value="" selected disabled> Choose user type </option>
							<option value="clickr"> I want to sell</option>
							<option value="employer"> I want to hire</option>
						</select>
						
						<input type="text" id="fname" name="fname" placeholder="First Name" style="width:47.5%;float:left;">
						<input type="text" id="lname" name="lname" placeholder="Last Name" style="width:47.5%;float:left;margin-left:5%;" >
						<input type="text" id="email" name="email" placeholder="Email">

						<input type="checkbox" id="remember" name="remember" checked>
						<label for="remember" class="label-check">
							<span class="checkbox primary primary"><span></span></span>
							I agree to <a href='' style="color:#0fccf4;">terms and conditions</a> and <a href='' style="color:#0fccf4;">privacy policy</a>.
						</label>

						<button class="button mid dark" style="margin-top:0px;" name="submit">Submit <span class="primary">Now!</span></button>
					</form>
					<!-- LINE SEPARATOR -->
					<!--<hr class="line-separator double">

					<a href="#" class="button mid fb half">Signup with Facebook</a>
					<a href="#" class="button mid tertiary half">Signup with Google</a>-->
					<!-- /LINE SEPARATOR -->
				</div>
	
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- /SECTION -->

<?php
	$this->load->view("common/footer");
?>
</body>
</html>