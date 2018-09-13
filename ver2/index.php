<!DOCTYPE html>
<html lang="en">

<?php
	session_start();
	if(isset($_GET['stat'])){
		//do something 
	}
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find doctors easily and book an appointment online">
	<meta name="author" content="ict-capstone">
	<title>FINDING DOCTORS - Find doctors easily and book an appointment online</title>

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
   
    <!-- SPECIFIC CSS -->
    <link href="css/date_picker.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">


<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Javascripts -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.bootstrap.year.calendar.min.js"></script>
	<!-- CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/jquery.bootstrap.year.calendar.min.css" rel="stylesheet">

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
				<form method="GET" action="list-2.php">
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
			<p class="text-center" style="text-align: center;"><a href="listall.php" class="btn_1 medium">Find Doctor</a></p>

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
							<li><a href="listall.php"><strong>23</strong>Abra<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Agusan Del Norte<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Agusan Del Sur<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Aklan<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Albay<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Antique<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Apayao<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Aurora<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Basilan<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li style="text-align: right;"><strong><a style="font-weight: bold;" href="listall.php">More...</a></strong></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 col-md-6">
					<div class="list_home">
						<div class="list_title">
							<h3>Search by type</h3>
						</div>
						<ul>
							<li><a href="listall.php"><strong>23</strong>Allergist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Cardiologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Chiropractor<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Dentist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Dermatologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Gastroenterologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Ophthalmologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Optometrist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="listall.php"><strong>23</strong>Pediatrician<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li style="text-align: right;"><a style="font-weight: bold;" href="listall.php">More....</a></li>
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