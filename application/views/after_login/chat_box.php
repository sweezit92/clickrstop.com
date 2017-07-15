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
	<!-- /HEADER -->

	<!-- SIDE MENU -->
	<div id="account-options-menu" class="side-menu right closed">
		<!-- SVG PLUS -->
		<svg class="svg-plus">
			<use xlink:href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->

		<!-- SIDE MENU HEADER -->
		<div class="side-menu-header">
			<!-- USER QUICKVIEW -->
			<div class="user-quickview">
				<!-- USER AVATAR -->
				<a href="author-profile.html">
				<div class="outer-ring">
					<div class="inner-ring"></div>
					<figure class="user-avatar">
						<img src="<?php echo base_url();?>images/avatar_01.jpg" alt="avatar">
					</figure>
				</div>
				</a>
				<!-- /USER AVATAR -->

				<!-- USER INFORMATION -->
				<p class="user-name">Johnny Fisher</p>
				<p class="user-money">$745.00</p>
				<!-- /USER INFORMATION -->
			</div>
			<!-- /USER QUICKVIEW -->
		</div>
		<!-- /SIDE MENU HEADER -->


		<!-- DROPDOWN -->
		
	</div>
	<!-- /SIDE MENU -->


	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap">
		<div class="section-headline">
			<h2>Author's Profile</h2>
			<p>Home<span class="separator">/</span><span class="current-section">Author's Profile</span></p>
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
					$this->load->view("common/employer_sidebar");
				?>
				<!-- /DROPDOWN -->

				<!-- SIDEBAR ITEM -->
				
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content right">
				
				<div class="headline buttons primary">
					 <h4> Inbox</h4>
					<a href="#new-message-popup" class="button mid-short secondary open-new-message">Back To Messsage Board</a>
				</div>
			
				
            <!-- HEADLINE -->
          
            <!-- /HEADLINE -->

            <!-- INBOX MESSAGES PREVIEW -->
               
                <!-- INBOX MESSAGE PREVIEW -->
                <div class="inbox-messages-preview full">
                <!-- INBOX MESSAGE PREVIEW -->
                <div class="inbox-message-preview">
                    <div class="inbox-message-preview-header">
                        <p class="text-header">
                            Product Question
                            <img src="<?php echo base_url();?>images/star-filled.png" alt="star-icon">
                        </p>
                    </div>

                    <div class="inbox-message-preview-body">
						<!-- COMMENT LIST -->
						<div class="comment-list">
							<!-- COMMENT -->
							<div class="comment-wrap">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="<?php echo base_url();?>images/avatar_06.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<div class="comment">
									<p class="text-header">Sarah-Imaginarium</p>
									<p class="timestamp">May 18th, 2014 - 8:22PM</p>
									<a href="#" class="report">Report</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
							<!-- /COMMENT -->

							<!-- LINE SEPARATOR -->
							<hr class="line-separator">
							<!-- /LINE SEPARATOR -->

							<!-- COMMENT -->
							<div class="comment-wrap">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="<?php echo base_url();?>images/avatar_01.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<div class="comment">
									<p class="text-header">Johnny Fisher</p>
									<p class="timestamp">May 19th, 2014 - 2:14PM</p>
									<a href="#" class="report">Report</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
								</div>
							</div>
							<!-- /COMMENT -->

							<!-- LINE SEPARATOR -->
							<hr class="line-separator">
							<!-- /LINE SEPARATOR -->

							<!-- COMMENT -->
							<div class="comment-wrap">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="<?php echo base_url();?>images/avatar_06.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->
								<div class="comment">
									<p class="text-header">Sarah-Imaginarium</p>
									<p class="timestamp">May 19th, 2014 - 3:47PM</p>
									<a href="#" class="report">Report</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
							<!-- /COMMENT -->

							<!-- LINE SEPARATOR -->
							<hr class="line-separator">
							<!-- /LINE SEPARATOR -->

							<!-- COMMENT REPLY -->
							<div class="comment-wrap comment-reply">
								<!-- USER AVATAR -->
								<a href="user-profile.html">
									<figure class="user-avatar medium">
										<img src="<?php echo base_url();?>images/avatar_01.jpg" alt="">
									</figure>
								</a>
								<!-- /USER AVATAR -->

								<!-- STYLE TOOL BAR -->
								
								<!-- /STYLE TOOL BAR -->

								<!-- COMMENT REPLY FORM -->
								<form class="comment-reply-form">
									<textarea name="treply" placeholder="Write your reply here..."></textarea>
									<button class="button secondary">Post Reply</button>
								</form>
								<!-- /COMMENT REPLY FORM -->
							</div>
							<!-- /COMMENT REPLY -->
						</div>
						<!-- /COMMENT LIST -->
                    </div>
                </div>
                <!-- /INBOX MESSAGE PREVIEW -->
            </div>
                <!-- /INBOX MESSAGE PREVIEW -->
            
            <!-- /INBOX MESSAGES PREVIEW -->
        
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
</body>
</html>