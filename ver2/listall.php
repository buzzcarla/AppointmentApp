
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
	<!-- /header -->
	
	<main class="theia-exception">
		<div id="results">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h4><strong>Showing 10</strong> of 140 results</h4>
					</div>
					<div class="col-md-6">
						<div class="search_bar_list">
							<input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
							<input type="submit" value="Search">
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /results -->

		<div class="filters_listing" style="margin-bottom: 10px;">
			<div class="container">
				<ul class="clearfix">
					<li>
						<h6>Type</h6>
						<div class="switch-field">
							<input type="radio" id="all" name="type_patient" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="doctors" name="type_patient" value="doctors">
							<label for="doctors">Doctors</label>
							<input type="radio" id="clinics" name="type_patient" value="clinics">
							<label for="clinics">Clinics</label>
						</div>
					</li>
					<li>
						<h6>Sort by</h6>
						<select name="orderby" class="selectbox">
						<option value="Closest">Closest</option>
						<option value="Best rated">Best rated</option>
						<option value="Men">Men</option>
						<option value="Women">Women</option>
						</select>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
		
		<div class="container margin_60_35" style="padding-top: 0px;">
			<div class="row">
				<div class="col-lg-7">
					<div class="strip_list wow fadeIn">

						<small>Pediatrician</small>
						<h3>Dr. Cornfield</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li><a href="detail-page-2.php">Book now</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<small>Psicologist</small>
						<h3>Dr. Shoemaker</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">View on Map</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li><a href="detail-page-2.php">Book now</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<small>Pediatrician</small>
						<h3>Dr. Lachinet</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 2)" class="btn_listing">View on Map</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li><a href="detail-page-2.php">Book now</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<small>Pediatrician</small>
						<h3>Dr. Rainwater</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">View on Map</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li><a href="detail-page-2.php">Book now</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<small>Psicologist</small>
						<h3>Dr. Manzone</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">View on Map</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li><a href="detail-page-2.php">Book now</a></li>
						</ul>
					</div>
					<!-- /strip_list -->
					
					<nav aria-label="" class="add_top_20">
						<ul class="pagination pagination-sm">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->
				
				<aside class="col-lg-5" id="sidebar">
					<div id="map_listing" class="normal_list">
					</div>
				</aside>
				<!-- /aside -->
				
			</div>
			<!-- /row -->
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
							<img src="img/logo.png" data-retina="true" alt="" width="163" height="36" class="img-fluid">
						</a>
					</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>About</h5>
					<ul class="links">
						<li><a href="#0">About us</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="#0">FAQ</a></li>
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
						<li><a href="mailto:info@findoctor.com"><i class="icon_mail_alt"></i> help@findoctor.com</a></li>
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
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCoz993id_Qq7AcfaoVzviC6swgvQRixuQ"></script>
    <script src="js/map_listing.js"></script>
    <script src="js/infobox.js"></script>


</body>
</html>