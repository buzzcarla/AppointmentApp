<!DOCTYPE html>
<html lang="en">

<?php
	require('head.php');
?>

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
				<form method="GET" action="list-map.php">
					<div id="custom-search-input">
						<div class="input-group">
							<input type="text" name="search" class=" search-query" placeholder="Ex. Name, Specialization ....">
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
		<div class="container margin_120_95" style="padding-bottom: 30px!important;">
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
			<p class="text-center" style="text-align: center;"><a href="list-map.php" class="btn_1 medium">Find Doctor</a></p>

		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title">
					<h2>Featured doctors</h2>
					<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
				</div>
				<div id="reccomended" class="owl-carousel owl-theme">
					<div class="item">
						<a href="detail-page-2.php">
							<div class="views"><i class="icon-eye-7"></i>140</div>
							<div class="title">
								<h4>Dr. John Doe<em>Pediatrician - Cardiologist</em></h4>
							</div><img src="img/doctor_1_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page-2.php">
							<div class="views"><i class="icon-eye-7"></i>120</div>
							<div class="title">
								<h4>Dr. Jane Doe<em>General Practitioner</em></h4>
							</div><img src="img/doctor_2_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page-2.php">
							<div class="views"><i class="icon-eye-7"></i>115</div>
							<div class="title">
								<h4>Dr. John Smith<em>Family Medicine</em></h4>
							</div><img src="img/doctor_3_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page-2.php">
							<div class="views"><i class="icon-eye-7"></i>98</div>
							<div class="title">
								<h4>Dr. Juan de la Cruz<em>ENT Specialist</em></h4>
							</div><img src="img/doctor_4_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page-2.php">
							<div class="views"><i class="icon-eye-7"></i>98</div>
							<div class="title">
								<h4>Dr. Juana de la Cruz<em>ENT Specialist</em></h4>
							</div><img src="img/doctor_5_carousel.jpg" alt="">
						</a>
					</div>
				</div>
				<!-- /carousel -->
			</div>
			<!-- /container -->
		</div>
		<!-- /white_bg -->

		<div class="container margin_120_95" style="padding-top: 50px!important;">
			<div class="main_title">
				<h2>Find your doctor or clinic</h2>
				<p>Nec graeci sadipscing disputationi ne, mea ea nonumes percipitur. Nonumy ponderum oporteat cu mel, pro movet cetero at.</p>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-5 col-md-6">
					<div class="list_home">
						<div class="list_title">
							<h3>Search by Provice or City</h3>
						</div>
						<ul>
							<li><a href="list-map.php"><strong>23</strong>Abra<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Agusan Del Norte<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Agusan Del Sur<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Aklan<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Albay<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Antique<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Apayao<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Aurora<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Basilan<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li style="text-align: right;"><strong><a style="font-weight: bold;" href="list-map.php">More...</a></strong></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 col-md-6">
					<div class="list_home">
						<div class="list_title">
							<h3>Search by type</h3>
						</div>
						<ul>
							<li><a href="list-map.php"><strong>23</strong>Allergist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Cardiologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Chiropractor<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Dentist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Dermatologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Gastroenterologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Ophthalmologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Optometrist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-map.php"><strong>23</strong>Pediatrician<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li style="text-align: right;"><a style="font-weight: bold;" href="list-map.php">More....</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main content -->
	
	<?php 
		require('footer.php');
	?>
	</div>
	<!-- page -->

	<div id="toTop">
		<img class="topArrow" src="./img/up_arrow.png">
	</div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/email-decode.min.js"></script>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>

</body>
<script>
$( document ).ready(function() {
	$('.btn_search').on('click',function(){
		alert('pressed');

	});
});
</script>
</html>