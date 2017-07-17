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
			<!-- FORM POPUP -->
			<div class="form-popup align-center">

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Login to your Account 
				
					</h4>
					<hr class="line-separator double">

					<form id="login-form" name="myform" method="POST" action="<?php echo base_url();?>index.php/login/login_check" enctype="multipart/form-data" >
						<input type="text" id="email" name="email" placeholder="Email">
						<input type="password" id="password5" name="password" placeholder="Password">
						<!-- CHECKBOX -->
						
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