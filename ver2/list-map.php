<!DOCTYPE html>
<html lang="en">
<!-- <?php 
	require_once('connect.php');
	
	$searchname = $_GET['search'];
	$radiosearch= $_GET['radio_search'];					
	
?> -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>FINDOCTOR - Find easily a doctor and book online an appointment</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	
    <style>
        html,
        body {
            height: 100%;
        }
    </style>

</head>

<body>

	
	<!-- /Preload-->

	<div id="page">		
	
	<header class="header_sticky">	
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<!-- /btn_mobile-->
		<div class="container">
			
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="index.php" title="Findoctor">Finding Doctors</a></h1>
					</div>
				</div>
				<div class="col-lg-9 col-6">
					<ul id="top_access">
						<li><a href="login.html"><i class="pe-7s-user"></i></a></li>
						<li><a href="register-doctor.html"><i class="pe-7s-add-user"></i></a></li>
					</ul>
					<nav id="menu" class="main-menu">
						<ul>
							<li>
								<span><a href="index.php">Home</a></span>
							</li>
							<li>
								<span><a href="#0">Register</a></span>
								<ul>
									<li><a href="register-doctor.html">Register Doctor</a></li>
									<li><a href="register.html">Register User</a></li>
								</ul>
							</li>
							<li>
								<span><a href="login.html">Login</a></span>
							</li>
							<li>
								<li><a href="list-map.html">Doctor List</a></li>
							</li>
						</ul>
					</nav>
					<!-- /main-menu -->
				</div>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->
	
	
	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-5 content-left">
				<form>
					<div class="search_bar_wrapper">
						<div class="search_bar_list">
							<input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
							<input type="submit" value="Search">
						</div>
					</div>
					<div class="filters_listing map_listing">
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
					<!-- /filters -->
				</form>

				<?php 
				if($radiosearch == "clinic"){
					$query = "SELECT * FROM clinic 
							LEFT JOIN location_clinic ON clinic.clinic_id = location_clinic.clinic_id
							LEFT JOIN doctors ON location_clinic.doctor_id = doctors.doctor_id
							LEFT JOIN user ON doctors.user_id = user.user_id
							WHERE clinic_name LIKE'%".$searchname."%' OR clinic_address LIKE '%".$searchname."%'";
			
					$res = mysqli_query($mysql,$query);
					if($res){
						while($row = mysqli_fetch_array($res)) {
							echo '<div class="strip_list">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="img/doctor_listing_1.jpg" alt=""></a>
							</figure>';
							echo '<small>'.$row[1].'</small>';
							echo '<h3>'.$row[4].'</h3>';
							echo '<ul>
									<li><a href="#0" onclick="onHtmlClick("Doctors", 2)" class="btn_listing">View on Map</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
									<li><a href="detail-page.html">Book now</a></li>
								</ul> </div>';
						}
					} else {
						echo '<div class="row" ><h1>FOUND NONE</h1></div>';
					}
				} else if($radiosearch == "doctor"){
					$query = "SELECT * FROM user 
							LEFT JOIN doctors on user.user_id = doctors.user_id
							WHERE CONCAT(user.user_firstn,' ',user.user_lastn) LIKE '%".$searchname."%' AND user.user_level = '1'";
			
					$res = mysqli_query($mysql,$query);
					if($res){
						while($row = mysqli_fetch_array($res)) {
							echo '<div class="strip_list">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="img/doctor_listing_1.jpg" alt=""></a>
							</figure>';
							echo '<small>'.$row[15].'</small>';
							echo '<h3>Dr.'.$row[3].'</h3>';
							echo '<ul>
									<li><a href="#0" onclick="onHtmlClick("Doctors", 2)" class="btn_listing">View on Map</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
									<li><a href="detail-page.html">Book now</a></li>
								</ul> </div>';
						}
					} 
				}	else if($radiosearch == "all"){
					$query = "SELECT * FROM user 
							LEFT JOIN doctors on user.user_id = doctors.user_id
							WHERE CONCAT(user.user_firstn,' ',user.user_lastn) LIKE '%".$searchname."%' AND user.user_level = '1'";
			
					$res = mysqli_query($mysql,$query);
					if($res){
						while($row = mysqli_fetch_array($res)) {
							echo '<div class="strip_list">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="img/doctor_listing_1.jpg" alt=""></a>
							</figure>';
							echo '<small>'.$row[15].'</small>';
							echo '<h3>Dr.'.$row[3].'</h3>';
							echo '<ul>
									<li><a href="#0" onclick="onHtmlClick("Doctors", 2)" class="btn_listing">View on Map</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
									<li><a href="detail-page.html">Book now</a></li>
								</ul> </div>';
						}
					}
					$query2 = "SELECT * FROM clinic 
						LEFT JOIN location_clinic ON clinic.clinic_id = location_clinic.clinic_id
						LEFT JOIN doctors ON location_clinic.doctor_id = doctors.doctor_id
						LEFT JOIN user ON doctors.user_id = user.user_id
						WHERE clinic_name LIKE'%".$searchname."%' OR clinic_address LIKE '%".$searchname."%'";
			
					$res2 = mysqli_query($mysql,$query2);
					if($res2){
						while($row1 = mysqli_fetch_array($res2)) {
							echo '<div class="strip_list">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="img/doctor_listing_1.jpg" alt=""></a>
							</figure>';
							echo '<small>'.$row1[1].'</small>';
							echo '<h3>'.$row1[4].'</h3>';
							echo '<ul>
									<li><a href="#0" onclick="onHtmlClick("Doctors", 2)" class="btn_listing">View on Map</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
									<li><a href="detail-page.html">Book now</a></li>
								</ul> </div>';
						}
					}
				}else {
						echo '<div class="row" ><h1>FOUND NONE</h1></div>';
					}

			
			?>
			
				<!-- /strip_list_map -->
				
				<p class="text-center index.php"><a href="#0"><strong>Load more</strong></a></p>
			</div>
			<!-- /content-left-->

			<div class="col-lg-7 map-right Fixed">
				<!-- <div id="map_listing"></div> -->
				<img id="map_listing" src="https://4.bp.blogspot.com/-j8FGrXs7Lis/WadnahWNFNI/AAAAAAAAVso/-Tkq3DIjyacE6tV2AtPpf781Nj4uFcn5ACLcBGAs/s1600/Capture.JPG">
				<!-- map-->
			</div>
			<!-- /map-right-->
			
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->
	</div>
	<!-- page -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/functions.js"></script>
    
    <!-- SPECIFIC SCRIPTS -->
    <!-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCoz993id_Qq7AcfaoVzviC6swgvQRixuQ"></script> -->
    <script src="js/map_listing.js"></script>
    <script src="js/infobox.js"></script> 
    <script src="js/jquery.selectbox-0.2.js"></script>
	<script>
		$(".selectbox").selectbox();
	</script>


</body>

</html>