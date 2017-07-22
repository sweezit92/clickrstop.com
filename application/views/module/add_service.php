<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article">
<head>
<?php
	 $this->load->view("common/meta_links");
?>
	 <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>
</head>
<body>

	<!-- HEADER -->
	<?php
		$this->load->view("common/header");
	?>
	<!-- /HEADER -->

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
				?>
				<!-- /DROPDOWN -->

				<!-- SIDEBAR ITEM -->
				
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content right">
				<!-- HEADLINE -->
				<div class="headline buttons primary">
					<h4>Add Service</h4>
					<!--<a href="author-profile-messages.html" class="button mid-short dark-light">See all the Messages</a>-->
				</div>
				<!-- /HEADLINE -->

				<!-- COMMENTS -->
				
					<!-- COMMENT -->
					
				<!-- FORM BOX ITEM -->
				<div class="form-box-item full">
					<h4>Service Specifications</h4>
					<hr class="line-separator">
					<form id="upload_form" name="myform" method="POST" action="<?php echo base_url();?>index.php/add_service/insert_service" enctype="multipart/form-data">
						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="category" class="rl-label required">Select Category</label>
							<label for="category" class="select-block">
								<?php
									$categories_data = json_decode(json_encode($get_categories), True);
									//print_r($categories_data);
								?>
								<select name="category" id="category">
									<option selected disabled>Choose A Category...</option>
									<?php
									foreach($categories_data As $cat_val){
									?>
										<option value="<?php echo $cat_val['category_id'];?>"><?php echo $cat_val['category_name'];?></option>
									<?php
									}
									?>
									
								</select>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</label>
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_name" class="rl-label required">Title of the Service (Max 40 Characters)</label>
							<input type="text" id="item_name" name="item_title" maxlength="40" placeholder="Enter them service title here.">
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_description" class="rl-label required">Service Description</label>
							<textarea id="item_description" name="item_description" placeholder="Enter them service description here."></textarea>
							<div id="summernote"><p>Hello Summernote</p></div>
							 <script>
								$(document).ready(function() {
									$('#summernote').summernote();
								});
							  </script>
						</div>
						
						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_tags" class="rl-label required">Price (&#x20B9;)</label>
							<input type="text" id="item_tags" name="item_price" placeholder="Enter price for this service">
						</div>
						<!-- /INPUT CONTAINER -->

						<div class="input-container">
							<label class="rl-label required">Upload Service Banners</label>
							
							<div class="add-more-contz">
							<div class="atrri_add_cont">
								<div class="profile-image">
									<div class="profile-image-data">
										<figure class="user-avatar medium">
											<img src="<?php echo base_url();?>images/favicon.jpg" alt="profile-default-image" id="lolwa_pic">
										</figure>
										<p class="text-header">Upload best work pictures</p>
										<p class="upload-details">for the best results</p>
									</div>
									<label class="button mid-short dark-light" for="pro_pic">Upload Image</label>
									<input type="file" id="pro_pic" name="picture[]" style="display:none"/>

									<a href="javascript:void(0)" class="button dark-light square add-more">
										<!--<img src="<?php echo base_url();?>images/close-icon-small.png" alt="close-icon">-->
										Add More
									</a>
								</div>
							</div>
							</div>
						</div>
						<!-- /INPUT CONTAINER -->


						

						<hr class="line-separator">
						<button class="button big dark" type="submit">Submit Service <span class="primary">for Review</span></button>
					</form>
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

	<script>
		$(document).ready(function() {
		  $(".add-more").click(function(){ 
			  var htmlz = "<div class='atrri_add_cont'><div class='profile-image'><div class='profile-image-data'><figure class='user-avatar medium'><img src='<?php echo base_url();?>images/favicon.jpg' alt='profile-default-image' id='lolwa_pic'></figure><p class='text-header'>Upload best work pictures</p><p class='upload-details'>for the best results</p></div><label class='button mid-short dark-light' for='pro_pic'>Upload Image</label><input type='file' id='pro_pic' name='picture[]' style='display:none'/><a href='javascript:void(0)' class='button dark-light square add-more remove'  style='width:40px;'><img src='<?php echo base_url();?>images/close-icon-small.png' alt='close-icon'></a></div></div>";
			  //alert(htmlz);
			  $(".add-more-contz").append(htmlz);
		  });

		  $("body").on("click",".remove",function(){ 
			  
			  $(this).parents(".atrri_add_cont").remove();
		  });

		});
	</script>
								 
</body>
</html>