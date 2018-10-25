<!DOCTYPE html>
<?php 

session_start();
?>
<html lang="en">
	<!-- SESSION START IF USER IS LOGGED IN -->
	<?php
		require('connect.php');
		if(isset($_GET['stat'])){
			//do something 
		}
	?>
	<head>
	<!-- Head contains all the needed links for the program -->
	<?php
		require('head.php');
	?>
	</head>
<body>
	
	<!-- The preloader is the loading icon that will play for 0.95s // see animation presets at [data-loader=circle-side] in style.css-->
	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	
	<!-- Header file with the navigation bar is added to the page -->
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
			<p class="text-center" style="text-align: center;"><a href="list-2.php" class="btn_1 medium">Find Doctor</a></p>

		</div>
		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title">
					<h2>Featured doctors</h2>
					<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
				</div>
				<div id="reccomended" class="owl-carousel owl-theme">
					<?php 
						$query = "SELECT * FROM user 
								LEFT JOIN doctors on user.user_id = doctors.user_id
								LEFT JOIN location_clinic on doctors.doctor_id = location_clinic.doctor_id
								LEFT JOIN clinic on location_clinic.clinic_id = clinic.clinic_id
								where user.user_level = '1'
								Group BY user.user_id
								ORDER BY user.user_id DESC
								LIMIT 5 
								";
						$res = mysqli_query($mysql,$query);
						$ctr= 0;
						if(isset($_SESSION['userid']))
						{
							while($row = mysqli_fetch_row($res)){
								if($row[4] == 1){
									echo '
									
										<div class="item">
											<a href="detail-page-2.php?docid='.$row[12].'&userid='.$_SESSION['userid'].'&clinname='.$row[25].'&clinadd='.$row[28].'&docfname='.$row[1].'&docmname='.$row[2].'&doclname='.$row[3].'&start='.$row[18].'&end='.$row[19].'&mobile='.$row[8].'&tele='.$row[9].'">
												<div class="views"><i class="icon-eye-7"></i>140</div>
												<div class="title">
													<h4>Dr.'.$row[1].' '.$row[3].'</em></h4>
												</div><img src="img/doctor_1_carousel.jpg" alt="">
											</a>
										</div>';
								} else {
									echo '
									
										<div class="item">
											<a href="detail-page-2.php?docid='.$row[12].'&userid='.$_SESSION['userid'].'&clinname='.$row[25].'&clinadd='.$row[28].'&docfname='.$row[1].'&docmname='.$row[2].'&doclname='.$row[3].'&start='.$row[18].'&end='.$row[19].'&mobile='.$row[8].'&tele='.$row[9].'">
												<div class="views"><i class="icon-eye-7"></i>140</div>
												<div class="title">
												<h4>Dr.'.$row[1].' '.$row[3].'</em></h4>
												</div><img src="img/doctor_2_carousel.jpg" alt="">
											</a>
										</div>';
								}
							}
						} else
						{
							while($row = mysqli_fetch_row($res)){
								if($row[4] == 1){
									echo '
									
										<div class="item">
											<a href="detail-page-2.php?docid='.$row[12].'&userid=-1&clinname='.$row[25].'&clinadd='.$row[28].'&docfname='.$row[1].'&docmname='.$row[2].'&doclname='.$row[3].'&start='.$row[18].'&end='.$row[19].'&mobile='.$row[8].'&tele='.$row[9].'">
												<div class="views"><i class="icon-eye-7"></i>140</div>
												<div class="title">
													<h4>Dr.'.$row[1].' '.$row[3].'</em></h4>
												</div><img src="img/doctor_1_carousel.jpg" alt="">
											</a>
										</div>';
								} else {
									echo '
									
										<div class="item">
											<a href="detail-page-2.php?docid='.$row[12].'&userid=-1&clinname='.$row[25].'&clinadd='.$row[28].'&docfname='.$row[1].'&docmname='.$row[2].'&doclname='.$row[3].'&start='.$row[18].'&end='.$row[19].'&mobile='.$row[8].'&tele='.$row[9].'">
												<div class="views"><i class="icon-eye-7"></i>140</div>
												<div class="title">
												<h4>Dr.'.$row[1].' '.$row[3].'</em></h4>
												</div><img src="img/doctor_2_carousel.jpg" alt="">
											</a>
										</div>';
								}
							}
						}
					?>
				</div>
			</div>
		</div>
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
							<li><a href="list-2.php"><strong>23</strong>Abra<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Agusan Del Norte<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Agusan Del Sur<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Aklan<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Albay<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Antique<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Apayao<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Aurora<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Basilan<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li style="text-align: right;"><strong><a style="font-weight: bold;" href="list-2.php">More...</a></strong></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 col-md-6">
					<div class="list_home">
						<div class="list_title">
							<h3>Search by type</h3>
						</div>
						<ul>
							<li><a href="list-2.php"><strong>23</strong>Allergist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Cardiologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Chiropractor<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Dentist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Dermatologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Gastroenterologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Ophthalmologist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Optometrist<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li><a href="list-2.php"><strong>23</strong>Pediatrician<img src="./img/nexticon.png" class="nextIcon"></a></li>
							<li style="text-align: right;"><a style="font-weight: bold;" href="list-2.php">More....</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<!-- INCLUDE PAGE FOOTER -->
	<?php 
		require('footer.php');
	?>
	</div>

	<!-- Back to top button -->
	<div id="toTop">
		<img class="topArrow" src="./img/up_arrow.png">
	</div>

	<!-- COMMON SCRIPTS -->
	<script src="js/email-decode.min.js"></script>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
	<?php if ($_GET['register_suc	'] == 1) : ?>
   <script type='text/javascript'>
       //Code runs ONLY if $test_details['done_test'] is empty
       $(document).ready(function(){
         alert("Succesful Register please wait for the activation of account");
       });
   </script>
<?php endif; ?>

</body>
<!-- HANDLE IF THE SEARCH BUTTON IS PRESSED -->

</html>