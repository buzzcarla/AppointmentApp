<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find doctors easily and book an appointment online">
	<meta name="author" content="ict-capstone">
	<title>FINDING DOCTORS - Find doctors easily and book an appointment online</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    
	<!-- CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	
</head>

<body>
	
	<!-- The preloader is the loading icon that will play for 0.95s // see animation presets at [data-loader=circle-side] in style.css-->

	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->
	
	<!-- start of the page -->
	<div id="page">		 
		<?php
			require('header.php');
		?>

	<main>
		<div class="hero_home version_1">
			<div class="content">
				<h3>Finding Doctors</h3>
				<p>
					Lorem ipsum dolor sit amet, novum assentior contentiones nec et, ius putent scripserit ne.
				</p>
				<form method="post" action="list-map.html">
					<div id="custom-search-input">
						<div class="input-group text-center">
							<input type="text" class=" search-query" placeholder="Ex. Name, Specialization ....">
							<input type="submit" class="btn_search" value="Search">
						</div>
						<ul>
							<li>
								<input type="radio" id="all" name="radio_search" value="all" checked>
								<label for="all">All</label>
							</li>
							<li>
								<input type="radio" id="doctor" name="radio_search" value="doctor">
								<label for="doctor">Doctor</label>
							</li>
							<li>
								<input type="radio" id="clinic" name="radio_search" value="clinic">
								<label for="clinic">Clinic</label>
							</li>
						</ul>
					</div>
				</form>
			</div>
		</div>
		<!-- /Hero -->

		<!-- Details Index -->
		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Book via <strong>online</strong> appointment!</h2>
				<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<span></span>
						<h3>Find a Doctor</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<h3>View profile</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Book a visit</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
			</div>
			<!-- /row -->
			<p class="text-center"><a href="list-map.html" class="btn_1 medium">Find Doctor</a></p>

		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title">
					<h2>Most Viewed doctors</h2>
					<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
				</div>
				<div id="reccomended" class="owl-carousel owl-theme">
					<div class="item">
						<a href="detail-page.html">
							<div class="views"><i class="icon-eye-7"></i>140</div>
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician - Cardiologist</em></h4>
							</div><img src="img/doctor_1_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="views"><i class="icon-eye-7"></i>120</div>
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="img/doctor_2_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="views"><i class="icon-eye-7"></i>115</div>
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="img/doctor_3_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="views"><i class="icon-eye-7"></i>98</div>
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="img/doctor_4_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="views"><i class="icon-eye-7"></i>98</div>
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="img/doctor_5_carousel.jpg" alt="">
						</a>
					</div>
				</div>
				<!-- /carousel -->
			</div>
			<!-- /container -->
		</div>
		<!-- /white_bg -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Find your doctor or clinic</h2>
				<p>Nec graeci sadipscing disputationi ne, mea ea nonumes percipitur. Nonumy ponderum oporteat cu mel, pro movet cetero at.</p>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-4 col-lg-5 col-md-6">
					<div class="list_home">
						<div class="list_title">
							<i class="icon_pin_alt"></i>
							<h3>Search by City or Zone</h3>
						</div>
						<ul>
							<li><a href="list-map.html"><strong>23</strong>Albany</a></li>
							<li><a href="list-map.html"><strong>23</strong>Albuquerque</a></li>
							<li><a href="list-map.html"><strong>23</strong>Atlanta</a></li>
							<li><a href="list-map.html"><strong>23</strong>Baltimore</a></li>
							<li><a href="list-map.html"><strong>23</strong>Baton Rouge</a></li>
							<li><a href="list-map.html"><strong>23</strong>Birmingham</a></li>
							<li><a href="list-map.html"><strong>23</strong>Boston</a></li>
							<li><a href="list-map.html"><strong>23</strong>Buffalo</a></li>
							<li><a href="list-map.html"><strong>23</strong>Charleston</a></li>
							<li><a href="list-map.html">More...</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-5 col-md-6">
					<div class="list_home">
						<div class="list_title">
							<i class="icon_archive_alt"></i>
							<h3>Search by type</h3>
						</div>
						<ul>
							<li><a href="list-map.html"><strong>23</strong>Allergist</a></li>
							<li><a href="list-map.html"><strong>23</strong>Cardiologist</a></li>
							<li><a href="list-map.html"><strong>23</strong>Chiropractor</a></li>
							<li><a href="list-map.html"><strong>23</strong>Dentist</a></li>
							<li><a href="list-map.html"><strong>23</strong>Dermatologist</a></li>
							<li><a href="list-map.html"><strong>23</strong>Gastroenterologist</a></li>
							<li><a href="list-map.html"><strong>23</strong>Ophthalmologist</a></li>
							<li><a href="list-map.html"><strong>23</strong>Optometrist</a></li>
							<li><a href="list-map.html"><strong>23</strong>Pediatrician</a></li>
							<li><a href="list-map.html">More....</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

		<div id="app_section">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-md-5">
						<p><img src="img/app_img.svg" alt="" class="img-fluid" width="500" height="433"></p>
					</div>
					<div class="col-md-6">
						<small>Application</small>
						<h3>Download <strong>Finding Doctors App</strong> Now!</h3>
						<p class="lead">Tota omittantur necessitatibus mei ei. Quo paulo perfecto eu, errem percipit ponderum no eos. Has eu mazim sensibus. Ad nonumes dissentiunt qui, ei menandri electram eos. Nam iisque consequuntur cu.</p>
						<div class="app_buttons wow" data-wow-offset="100">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
							<path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
						</svg>
							<a href="#0" class="fadeIn"><img src="img/apple_app.png" alt="" width="150" height="50" data-retina="true"></a>
							<a href="#0" class="fadeIn"><img src="img/google_play_app.png" alt="" width="150" height="50" data-retina="true"></a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /app_section -->
	</main>
	<!-- /main content -->
	
	<?php 
		require('footer.php');
	?>
	</div>
	<!-- page -->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/email-decode.min.js"></script>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>

</body>

</html>