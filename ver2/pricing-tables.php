<!DOCTYPE html>
<html lang="en">

<?php
	require('head.php');
?>

<body>

	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->
	
	<div id="page">		
	<?php
		require('header.php');
	?>	
	
    <main>
	<div id="breadcrumb">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Category</a></li>
				<li>Page active</li>
			</ul>
		</div>
	</div>
	<!-- /breadcrumb -->
	<div class="margin_60_35">
		<div class="container">
			<div class="main_title">
				<h1>Pricing Tables</h1>
				<p>Version with monthly/year switcher</p>
			</div>
		</div>
		
		<div class="pricing-container cd-has-margins">
		<div class="pricing-switcher">
			<p class="fieldset">
				<input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
				<label for="monthly-2">Monthly</label>
				<input type="radio" name="duration-2" value="yearly" id="yearly-2">
				<label for="yearly-2">Yearly</label>
				<span class="switch"></span>
			</p>
		</div>
		<!--/pricing-switcher -->
		<ul class="pricing-list bounce-invert">
			<li>
				<ul class="pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="pricing-header">
							<h2>Basic</h2>

							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">30</span>
								<span class="price-duration">mo</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>1</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div>
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
					<li data-type="yearly" class="is-hidden">
						<header class="pricing-header">
							<h2>Basic</h2>

							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">320</span>
								<span class="price-duration">yr</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>1</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div> 
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
				</ul>
				<!-- /pricing-wrapper -->
			</li>
			<li class="popular">
				<ul class="pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="pricing-header">
							<h2>Popular</h2>
							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">60</span>
								<span class="price-duration">mo</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>3</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div>
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
					<li data-type="yearly" class="is-hidden">
						<header class="pricing-header">
							<h2>Popular</h2>

							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">630</span>
								<span class="price-duration">yr</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>3</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div>
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
				</ul>
				<!-- /cd-pricing-wrapper -->
			</li>
			<li>
				<ul class="pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="pricing-header">
							<h2>Premier</h2>
							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">90</span>
								<span class="price-duration">mo</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>5</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div>
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
					<li data-type="yearly" class="is-hidden">
						<header class="pricing-header">
							<h2>Premier</h2>

							<div class="price">
								<span class="currency">$</span>
								<span class="price-value">950</span>
								<span class="price-duration">yr</span>
							</div>
						</header>
						<!-- /pricing-header -->
						<div class="pricing-body">
							<ul class="pricing-features">
								<li><em>One Time</em> Fee</li>
								<li><em>5</em> User</li>
								<li><em>Lifetime</em> Availability</li>
								<li><em>Non</em> Featured</li>
								<li><em>30 days</em> Listing</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div>
						<!-- /pricing-body -->
						<footer class="pricing-footer">
							<a class="select-plan" href="#0">Select</a>
						</footer>
					</li>
				</ul>
				<!-- /pricing-wrapper -->
			</li>
		</ul>
		<!-- /pricing-list -->
	</div>
	<!-- /pricing-container -->	
	</div>
	<!-- /margin_60_35 -->
	
	<div class="container margin_60_35">
		<div class="row">
        	<div class="col-md-6">
            	<div class="box_faq">
                	<i class="icon_info_alt"></i>
                	<h4>Porro soleat pri ex, at has lorem accusamus?</h4>
                    <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
                </div>
            </div>
            <div class="col-md-6">
            	<div class="box_faq">
                	<i class="icon_info_alt"></i>
                	<h4>Ut quo inani dolorem mediocritatem?</h4>
                    <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
                </div>
            </div>
        </div><!-- /row  --> 
        <div class="row">
        	<div class="col-md-6">
            	<div class="box_faq">
                	<i class="icon_info_alt"></i>
                	<h4>Per sale virtute legimus ne?</h4>
                    <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
                </div>
            </div>
            <div class="col-md-6">
            	<div class="box_faq">
                	<i class="icon_info_alt"></i>
                	<h4>Mea in justo posidonium necessitatibus?</h4>
                    <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
                </div>
            </div>
        </div><!-- /row  --> 
	</div>
	<!-- /container -->
    </main>
    <!-- /main -->
	
	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<p>
						<a href="index.html" title="Findoctor">
							<img src="img/icon.png" data-retina="true" alt="" width="163" height="36" class="img-fluid">
						</a>
					</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>About</h5>
					<ul class="links">
						<li><a href="about.html">About us</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="#0">Doctors</a></li>
						<li><a href="#0">Clinics</a></li>
						<li><a href="#0">Specialization</a></li>
						<li><a href="#0">Join as a Doctor</a></li>
						<li><a href="#0">Download App</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="icon_mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href="/cdn-cgi/l/email-protection#2d44434b426d4b444349424e59425f034e4240"><i class="icon_mail_alt"></i> <span class="__cf_email__" data-cfemail="aec6cbc2deeec8c7c0cac1cddac1dc80cdc1c3">[email&#160;protected]</span></a></li>
					</ul>
					<div class="follow_us">
						<h5>Follow us</h5>
						<ul>
							<li><a href="#0"><i class="social_facebook"></i></a></li>
							<li><a href="#0"><i class="social_twitter"></i></a></li>
							<li><a href="#0"><i class="social_linkedin"></i></a></li>
							<li><a href="#0"><i class="social_instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2017 Findoctor</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/email-decode.min.js"></script>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/tables_func.js"></script>

</body>
</html>