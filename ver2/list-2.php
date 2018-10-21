<!-- list all doctors -->
<!DOCTYPE html>
<html lang="en">

<!-- Head contains all the needed links for the program -->
<?php
	require('head.php');
	require_once('connect.php');
	
	if(isset($_SESSION['userid'])){
		$userid = $_SESSION['userid'];
	} else {
		$userid = -1;
	}

	$searchname = $_GET['search'];
	$radiosearch= $_GET['radio_search'];		
?>

<body>
	<!-- Loading icon with animation before the page finished loading -->
	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	
	<div id="page">		
	<!-- Header file with the navigation bar is added to the page -->
	<?php
		require('header.php');
	?>

	<main class="theia-exception">
		<div id="results">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					</div>
					<div class="col-md-6">
						<form>
						<div class="search_bar_list">
							<input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
							<input type="submit" value="Search">
						</div>
					</div>
				</div>
			</div>
		</div>

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
					
				</ul>
			</div>
		</div>
		</form>

		<!-- Search function -->
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
						echo '
						<div class="container margin_60_35" style="padding-top: 0px;">
							<div class="row">
								<div class="col-lg-7">
									<div class="strip_list">
									<a href="#0" class="wish_bt"></a>
										<figure>
											<a href="detail-page-2.php"><img src="img/doctor_listing_1.jpg" alt=""></a>
										</figure>';
										echo '<small>'.$row[1].'</small>';
										echo '<h3>'.$row[4].'</h3>';
										echo '<p><strong>Clinic Starts at: '.$row[8].' and Ends at:'.$row[9].'</strong></p>';
										echo '<ul>
										<li><a href="#0" onclick="onHtmlClick("Doctors", 2)" class="btn_listing">View on Map</a></li>
										<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
										<li><a href="detail-page-2.php?docid='.$row[11].'&userid='.$row[12].'&clinname='.$row[1].'&clinadd='.$row[4].'&docfname='.$row[16].'&docmname='.$row[17].'&doclname='.$row[18].'&start='.$row[8].'&end='.$row[9].'&mobile='.$row[23].'&tele='.$row[24].'">Book now</a></li>
										</ul> 
									</div>
								</div>
							
							<div class="col-lg-5" id="sidebar">
								<div id="map_listing" class="normal_list">
								<p>test</p>
								</div>
							</div>
						</div>
						</div>';
					}
				} else {
					echo '<div class="row" ><h1>FOUND NONE</h1></div>';
				}
			} else if($radiosearch == "doctor"){
				$query = "SELECT * FROM user 
						LEFT JOIN doctors on user.user_id = doctors.user_id
						LEFT JOIN location_clinic on doctors.doctor_id = location_clinic.doctor_id
                        LEFT JOIN clinic on location_clinic.clinic_id = clinic.clinic_id
						WHERE CONCAT(user.user_firstn,' ',user.user_lastn) LIKE '%".$searchname."%' AND user.user_level = '1'";
		
				$res = mysqli_query($mysql,$query);
				if($res){
					while($row = mysqli_fetch_array($res)) {
						echo '<div class="container margin_60_35" style="padding-top: 0px;">
						<div class="row">
							<div class="col-lg-7">
							<div class="strip_list">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page-2.php"><img src="img/doctor_listing_1.jpg" alt=""></a>
						</figure>';
						echo '<small>'.$row[13].'</small>';
						echo '<h3>Dr.'.$row[3].'</h3>';
						echo '<p><strong>Clinic Starts at: '.$row[18].' and Ends at:'.$row[19].'</strong></p>';
						echo '<ul>
								<li><a href="#0" onclick="onHtmlClick("Doctors", 2)" class="btn_listing">View on Map</a></li>
								<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
								<li><a href="detail-page-2.php?docid='.$row[11].'&userid='.$row[0].'&clinname='.$row[22].'&clinadd='.$row[25].'&docfname='.$row[1].'&docmname='.$row[2].'&doclname='.$row[3].'&start='.$row[18].'&end='.$row[19].'&mobile='.$row[8].'&tele='.$row[9].'">Book now</a></li>
							</ul> </div>
							</div>
							
							<div class="col-lg-5" id="sidebar">
								<div id="map_listing" class="normal_list">
								<p>test</p>
								</div>
							</div>
						</div>
						</div>';
					}
				} 
			} else if($radiosearch == "all"){
				$query = "SELECT * FROM user 
						LEFT JOIN doctors on user.user_id = doctors.user_id
						LEFT JOIN location_clinic on doctors.doctor_id = location_clinic.doctor_id
                        LEFT JOIN clinic on location_clinic.clinic_id = clinic.clinic_id
						WHERE CONCAT(user.user_firstn,' ',user.user_lastn) LIKE '%".$searchname."%' AND user.user_level = '1'
						GROUP BY user.user_id";
		
				$res = mysqli_query($mysql,$query);
				if($res){
					while($row = mysqli_fetch_array($res)) {
						echo '<div class="container margin_60_35" style="padding-top: 0px;">
						<div class="row">
							<div class="col-lg-7">
								<div class="strip_list wow fadeIn">';
									echo '<small>'.$row[13].'</small>';
									echo '<h3>Dr.'.$row[3].'</h3>';
									echo '<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
									<p><strong>Clinic Starts at: '.$row[18].' and Ends at:'.$row[19].'</strong></p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_4.svg" width="15" height="15" alt=""></a>
									<ul>
										<li><a href="https://www.google.com/maps/place/Mactan+Doctors+Hospital-CMJredelosa/@10.2901698,123.9648429,17z/data=!3m1!4b1!4m5!3m4!1s0x33a999f88ca2d461:0xbcd42a1c82d0693d!8m2!3d10.2901698!4d123.9670316" class="btn_listing">View on Map</a></li>
										<li><a href="https://www.google.com/maps/dir/University+of+San+Carlos,+General+Maxilom+Ave,+Cebu+City,+6000+Cebu/Mactan+Doctors+Hospital-CMJredelosa,+Lapu-Lapu+City,+Cebu/@10.3168601,123.9160215,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x33a99946c07f77db:0x534b2a92ebc7c7e1!2m2!1d123.9011653!2d10.3117538!1m5!1m1!1s0x33a999f88ca2d461:0xbcd42a1c82d0693d!2m2!1d123.9670316!2d10.2901698">Directions</a></li>
										<li><a href="detail-page-2.ph	p?docid='.$row[11].'&userid='.$row[0].'&clinname='.$row[22].'&clinadd='.$row[25].'&docfname='.$row[1].'&docmname='.$row[2].'&doclname='.$row[3].'&start='.$row[18].'&end='.$row[19].'&mobile='.$row[8].'&tele='.$row[9].'">Book now</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-5" id="sidebar">
								<div id="map_listing" class="normal_list">
								<p>test</p>
								</div>
							</div>
						</div>
						</div>';
					}
				}
				$query2 = "SELECT * FROM clinic 
					LEFT JOIN location_clinic ON clinic.clinic_id = location_clinic.clinic_id
					LEFT JOIN doctors ON location_clinic.doctor_id = doctors.doctor_id
					LEFT JOIN user ON doctors.user_id = user.user_id
					WHERE clinic_name LIKE'%".$searchname."%' OR clinic_address LIKE '%".$searchname."%'
					GROUP BY clinic.clinic_id";
		
				$res2 = mysqli_query($mysql,$query2);
				if($res2){
					while($row = mysqli_fetch_array($res2)) {
						echo '<div class="container margin_60_35" style="padding-top: 0px;">
						<div class="row">
							<div class="col-lg-7">
								<div class="strip_list wow fadeIn">';
									echo '<small>'.$row[1].'</small>';
									echo '<h3>'.$row[4].'</h3>';
									echo '<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
									<p><strong>Clinic Starts at: '.$row[8].' and Ends at:'.$row[9].'</strong></p>
									<ul>
										<li><a href="https://www.google.com/maps/place/Mactan+Doctors+Hospital-CMJredelosa/@10.2901698,123.9648429,17z/data=!3m1!4b1!4m5!3m4!1s0x33a999f88ca2d461:0xbcd42a1c82d0693d!8m2!3d10.2901698!4d123.9670316" class="btn_listing">View on Map</a></li>
										<li><a href="https://www.google.com/maps/dir/University+of+San+Carlos,+General+Maxilom+Ave,+Cebu+City,+6000+Cebu/Mactan+Doctors+Hospital-CMJredelosa,+Lapu-Lapu+City,+Cebu/@10.3168601,123.9160215,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x33a99946c07f77db:0x534b2a92ebc7c7e1!2m2!1d123.9011653!2d10.3117538!1m5!1m1!1s0x33a999f88ca2d461:0xbcd42a1c82d0693d!2m2!1d123.9670316!2d10.2901698">Directions</a></li>
										<li><a href="detail-page-2.php?docid='.$row[11].'&userid='.$row[12].'&clinname='.$row[1].'&docfname='.$row[16].'&clinadd='.$row[25].'&docmname='.$row[17].'&doclname='.$row[18].'&start='.$row[8].'&end='.$row[9].'&mobile='.$row[23].'&tele='.$row[24].'">Book now</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-5" id="sidebar">
								<div id="map_listing" class="normal_list">
								<p>test</p>
								</div>
							</div>
						</div>
						</div>';
					}
				}
			}else {
				echo 
					'<div class="container margin_60_35" style="padding-top: 0px;">
						<div class="row">
							<div class="col-lg-7">
								<div class="strip_list wow fadeIn">
									<h3>No Results Found</h3>
									</ul>
								</div>
							</div>
						  

						  	<div class="col-lg-5" id="sidebar">
								<div id="map_listing" class="normal_list">
								</div>
							</div>
						</div>
					</div>';
				}
			?>
		</div>
	</main>
	
	<?php 
		require('footer.php');
	?>
	</div>
	</div>

	<div id="toTop"></div>

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
	
	<!-- SPECIFIC SCRIPTS FOR THIS PAGE -->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCoz993id_Qq7AcfaoVzviC6swgvQRixuQ"></script>
    <script src="js/map_listing.js"></script>
    <script src="js/infobox.js"></script>
</body>
</html>