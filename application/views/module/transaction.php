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
				?>
				<!-- /DROPDOWN -->

				<!-- SIDEBAR ITEM -->
				
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content right">
				<!-- HEADLINE -->
						<!-- FORM BOX ITEM -->
			
				<!-- /FORM BOX ITEM -->
				<div class="headline buttons primary">
					<h4>Transaction History</h4>
					<a href="author-profile-items.html" class="button mid-short dark-light">Deposit Now</a>
				</div>
				<!-- /HEADLINE -->
						<!-- FORM BOX ITEM -->
				<div class="form-box-item withdraw-history">
							<div class="transaction-history-item" style="background:#cccccc;">
							<div class="transaction-history-item-date" >
								<p class="text-header" style="margin-left:8px;">Date</p>
							</div>
							<div class="transaction-history-item-mail">
								<p class="text-header">Transaction</p>
							</div>
							<div class="transaction-history-item-amount">
								<p class="text-header">Currency</p>
							</div>
							<div class="transaction-history-item-status">
								<p class="text-header " style="margin-right:8px;">Amount</p>
							</div>
						</div>
					<hr class="line-separator">
					<!-- TRANSACTION HISTORY -->
					<div class="transaction-history">
						<!-- TRANSACTION HISTORY ITEM -->
						<div class="transaction-history-item">
							<div class="transaction-history-item-date">
								<p>Mar 27th, 2014</p>
							</div>
							<div class="transaction-history-item-mail">
								<p>jhonny_fisher@paypal.com</p>
							</div>
							<div class="transaction-history-item-amount">
								<p class="text-header">$537,20</p>
							</div>
							<div class="transaction-history-item-status">
								<p class="text-header">Pending</p>
							</div>
						</div>
						<!-- /TRANSACTION HISTORY ITEM -->

						<!-- TRANSACTION HISTORY ITEM -->
						<div class="transaction-history-item">
							<div class="transaction-history-item-date">
								<p>Feb 25th, 2014</p>
							</div>
							<div class="transaction-history-item-mail">
								<p>jhonny_fisher@paypal.com</p>
							</div>
							<div class="transaction-history-item-amount">
								<p class="text-header">$235,00</p>
							</div>
							<div class="transaction-history-item-status">
								<p class="text-header primary">Paid</p>
							</div>
						</div>
						<!-- /TRANSACTION HISTORY ITEM -->

						<!-- TRANSACTION HISTORY ITEM -->
						<div class="transaction-history-item">
							<div class="transaction-history-item-date">
								<p>Jan 28th, 2014</p>
							</div>
							<div class="transaction-history-item-mail">
								<p>jhonny_fisher@paypal.com</p>
							</div>
							<div class="transaction-history-item-amount">
								<p class="text-header">$1200,85</p>
							</div>
							<div class="transaction-history-item-status">
								<p class="text-header primary">Paid</p>
							</div>
						</div>
						<!-- /TRANSACTION HISTORY ITEM -->

						<!-- TRANSACTION HISTORY ITEM -->
						<div class="transaction-history-item">
							<div class="transaction-history-item-date">
								<p>Dec 26th, 2013</p>
							</div>
							<div class="transaction-history-item-mail">
								<p>jhonny_fisher@paypal.com</p>
							</div>
							<div class="transaction-history-item-amount">
								<p class="text-header">$406,08</p>
							</div>
							<div class="transaction-history-item-status">
								<p class="text-header primary">Paid</p>
							</div>
						</div>
						<!-- /TRANSACTION HISTORY ITEM -->

						<!-- TRANSACTION HISTORY ITEM -->
						<div class="transaction-history-item">
							<div class="transaction-history-item-date">
								<p>Nov 29th, 2013</p>
							</div>
							<div class="transaction-history-item-mail">
								<p>jhonny_fisher@paypal.com</p>
							</div>
							<div class="transaction-history-item-amount">
								<p class="text-header">$97,60</p>
							</div>
							<div class="transaction-history-item-status">
								<p class="text-header primary">Paid</p>
							</div>
						</div>
						<!-- /TRANSACTION HISTORY ITEM -->

						<!-- TRANSACTION HISTORY ITEM -->
						<div class="transaction-history-item">
							<div class="transaction-history-item-date">
								<p>Oct 24th, 2013</p>
							</div>
							<div class="transaction-history-item-mail">
								<p>jhonny_fisher@paypal.com</p>
							</div>
							<div class="transaction-history-item-amount">
								<p class="text-header">$512,64</p>
							</div>
							<div class="transaction-history-item-status">
								<p class="text-header primary">Paid</p>
							</div>
						</div>
						<!-- /TRANSACTION HISTORY ITEM -->
					</div>
					<!-- /TRANSACTION HISTORY -->
				</div>
					<div class="pager secondary" style="margin-top:-11px;">
					<div class="pager-item"><p>1</p></div>
					<div class="pager-item active"><p>2</p></div>
					<div class="pager-item"><p>3</p></div>
					<div class="pager-item"><p>...</p></div>
					<div class="pager-item"><p>17</p></div>
				</div>
	
			

				<div class="clearfix"></div>

		
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