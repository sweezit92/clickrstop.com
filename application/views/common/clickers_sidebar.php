<?php 
	$user_data = json_decode(json_encode($usr_data[0]), True);
?>
<div class="sidebar-item author-bio">
	<!-- USER AVATAR -->
	<a href="user-profile.html" class="user-avatar-wrap medium">
		<figure class="user-avatar medium">
			<img src="<?php echo base_url().$user_data['profile_picture'];?>" alt="">
		</figure>
	</a>
	<!-- /USER AVATAR -->
	<p class="text-header"><?php echo ucfirst($user_data['fname']);?>&nbsp;<?php echo ucfirst($user_data['lname']);?></p>
	<p class="text-oneline"><?php echo ucfirst($user_data['city']);?></p>
	<!-- SHARE LINKS -->

	<!--<a href="#" class="button mid dark-light">Send a Private Message</a>-->
</div>
<ul class="dropdown hover-effect">
	<li class="dropdown-item active">
		<a href="<?php echo base_url();?>index.php/clickers_profile">Profile Page</a>
	</li>
	<li class="dropdown-item">
		<a href="<?php echo base_url();?>index.php/add_service">Add Service</a>
	</li>
	<li class="dropdown-item">
		<a href="<?php echo base_url();?>index.php/message_list">Message Board</a>
	</li>
	<li class="dropdown-item">
		<a href="<?php echo base_url();?>index.php/ongoing_project">Ongoing Project</a>
	</li>
	<li class="dropdown-item">
		<a href="<?php echo base_url();?>index.php/transaction">Account & Finnace</a>
	</li>
	<li class="dropdown-item">
		<a href="<?php echo base_url();?>index.php/feedback">Feedback & Ratings</a>
	</li>
	<li class="dropdown-item">
		<a href="<?php echo base_url();?>index.php/account_profile">Manage Your Account</a>
	</li>
</ul>

<!--<div class="sidebar-item author-reputation full">
	<h4>Author's Reputation</h4>
	<hr class="line-separator">
	<div class="pie-chart pie-chart1">
		<p class="text-header percent">86<span>%</span></p>
		<p class="text-header percent-info">Recommended</p>
		<ul class="rating">
			<li class="rating-item">
				<svg class="svg-star">
					<use xlink:href="#svg-star"></use>
				</svg>
			</li>
			<li class="rating-item">
				<svg class="svg-star">
					<use xlink:href="#svg-star"></use>
				</svg>
			</li>
			<li class="rating-item">
				<svg class="svg-star">
					<use xlink:href="#svg-star"></use>
				</svg>
			</li>
			<li class="rating-item">
				<svg class="svg-star">
					<use xlink:href="#svg-star"></use>
				</svg>
			</li>
			<li class="rating-item empty">
				<svg class="svg-star">
					<use xlink:href="#svg-star"></use>
				</svg>
			</li>
		</ul>
	</div>
	<a href="#" class="button mid dark-light">Read all the Customer Reviews</a>
</div>-->