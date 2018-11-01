<!doctype html>
<?php
    require('../../ver2/connect.php');
	session_start();
?>
<html lang="en" class="no-js">
	<head>
		<?php
	        require('sched-head.php');
	    ?>

		<style>
			.hide-class{
				display:none;
			}
			.show-class{
				display:block;
			}
		</style>
	</head>
	<body style="">
		<?php
	        require('sched-nav.php');
	    ?>
		<div class="cd-schedule loading">
			<div class="timeline">
				<ul>
					<li><span>09:00</span></li>
					<li><span>09:30</span></li>
					<li><span>10:00</span></li>
					<li><span>10:30</span></li>
					<li><span>11:00</span></li>
					<li><span>11:30</span></li>
					<li><span>12:00</span></li>
					<li><span>12:30</span></li>
					<li><span>13:00</span></li>
					<li><span>13:30</span></li>
					<li><span>14:00</span></li>
					<li><span>14:30</span></li>
					<li><span>15:00</span></li>
					<li><span>15:30</span></li>
					<li><span>16:00</span></li>
					<li><span>16:30</span></li>
					<li><span>17:00</span></li>
					<li><span>17:30</span></li>
					<li><span>18:00</span></li>
				</ul>
			</div>
			<!-- <div class="event-modal">
				<header class="header">
					<div class="content">
						<span class="event-date"></span>
						<h3 class="event-name"></h3>
					</div>
					<div class="header-bg"></div>
				</header>

				<div class="body">
					<div class="event-info" style="padding: 30px; width: 420px;">
					
					HELLO THIS IS THE CONTENT WITH THE PATIENT INFORMATION
					</div>
					<div class="body-bg"></div>
				</div>
				<a href="#0" class="close">Close</a>
			</div> -->
			<?php
				//[0][0] = Monday 9:30
				//[0][1] = Monday 10:00
				//[0][2] = Monday 10:30
				//[0][3] = Monday 11:00
				//[0][4] = Monday 11:30
				//[0][5] = Monday 12:00
				//[0][6] = Monday 1:30
				//[0][7] = Monday 2:00
				//[0][8] = Monday 2:30
				//[0][9] = Monday 3:00
				//[0][10] = Monday 3:30
				//[0][11] = Monday 4:00
				echo '<div class="event-modal">
				<header class="header">
					<div class="content">
						<span class="event-date"></span>
						<h3 class="event-name"></h3>
					</div>
					<div class="header-bg"></div>
				</header>

				<div class="body">
					<div class="event-info" style="padding: 30px; width: 420px;">';
					$userCount = array(array());
					$timeSpan = array(array());
					$timeSpan[0][0] = "09:30";
					$timeSpan[0][1] = "10:30";
					$timeSpan[1][0] = "10:00";
					$timeSpan[1][1] = "11:00";
					$timeSpan[2][0] = "10:30";
					$timeSpan[2][1] = "11:30";
					$timeSpan[3][0] = "11:00";
					$timeSpan[3][1] = "12:00";
					$timeSpan[4][0] = "11:30";
					$timeSpan[4][1] = "12:30";
					$timeSpan[5][0] = "12:00";
					$timeSpan[5][1] = "01:00";
					$timeSpan[6][0] = "01:30";
					$timeSpan[6][1] = "02:30";
					$timeSpan[7][0] = "02:00";
					$timeSpan[7][1] = "02:30";
					$timeSpan[8][0] = "02:30";
					$timeSpan[8][1] = "03:30";
					$timeSpan[9][0] = "03:00";
					$timeSpan[9][1] = "04:00";
					$timeSpan[10][0] = "03:30";
					$timeSpan[10][1] = "04:30";
					$timeSpan[11][0] = "04:00";
					$timeSpan[11][1] = "05:00";
					for ($x = 0; $x <= 5; $x++) {
						for ($y = 0; $y <= 11; $y++) {
							$userCount[$x][$y] = 0;
						}
					}	
					 $query = "SELECT * FROM user
					 LEFT JOIN booking_list on booking_list.user_id = user.user_id
					 WHERE booking_list.doctor_id ='".$_SESSION['docid']."' 
					 AND yearweek(DATE(booking_list.book_date), 1) = yearweek(DATE(NOW()), 1) 
					 AND booking_list.book_stat = '2' 
					 Group BY booking_list.booking_id
					 ORDER BY booking_list.book_date ASC ";
					$res = mysqli_query($mysql,$query);
					if (mysqli_num_rows($res)!=0){

						while($row = mysqli_fetch_row($res)){
							
							$timestamp = strtotime($row[15]);
							$day = date('l',$timestamp);
							$time = date('H:i',$timestamp);
							echo '<p  class="even '.$day.'_'.$time.' hide-class">'.$row[1].' '.$row[3].'</p>';
							if($day == "Monday"){
								
								
								if($time == "09:30"){
									$userCount[0][0] = $userCount[0][0] + 1;
								} else if($time == "10:00"){
									$userCount[0][1] = $userCount[0][1] + 1;
								}else if($time == "10:30"){
									$userCount[0][2] = $userCount[0][2] + 1;
								}else if($time == "11:00"){
									$userCount[0][3] = $userCount[0][3] + 1;
								}else if($time == "11:30"){
									$userCount[0][4] = $userCount[0][4] + 1;
								}else if($time == "12:00"){
									$userCount[0][5] = $userCount[0][5] + 1;
								}else if($time == "01:30"){
									$userCount[0][6] = $userCount[0][6] + 1;
								}else if($time == "02:00"){
									$userCount[0][7] = $userCount[0][7] + 1;
								}else if($time == "02:30"){
									$userCount[0][8] = $userCount[0][8] + 1;
								}else if($time == "03:00"){
									$userCount[0][9] = $userCount[0][9] + 1;
								}else if($time == "03:30"){
									$userCount[0][10] = $userCount[0][10]+ 1;
								}else if($time == "04:00"){
									$userCount[0][11] = $userCount[0][11] + 1;
								}
							} else if($day == "Tuesday"){
								$time = date('H:i',$timestamp);
								if($time == "09:30"){
									$userCount[1][0] = $userCount[1][0] + 1;
								} else if($time == "10:00"){
									$userCount[1][1] = $userCount[1][1] + 1;
								}else if($time == "10:30"){
									$userCount[1][2] = $userCount[1][2] + 1;
								}else if($time == "11:00"){
									$userCount[1][3] = $userCount[1][3] + 1;
								}else if($time == "11:30"){
									$userCount[1][4] = $userCount[1][4] + 1;
								}else if($time == "12:00"){
									$userCount[1][5] = $userCount[1][5] + 1;
								}else if($time == "01:30"){
									$userCount[1][6] = $userCount[1][6] + 1;
								}else if($time == "02:00"){
									$userCount[1][7] = $userCount[1][7] + 1;
								}else if($time == "02:30"){
									$userCount[1][8] = $userCount[1][8] + 1;
								}else if($time == "03:00"){
									$userCount[1][9] = $userCount[1][9] + 1;
								}else if($time == "03:30"){
									$userCount[1][10] = $userCount[1][10]+ 1;
								}else if($time == "04:00"){
									$userCount[1][11] = $userCount[1][11] + 1;
								}
							}else if($day == "Wednesday"){
								$time = date('H:i',$timestamp);
								if($time == "09:30"){
									$userCount[2][0] = $userCount[2][0] + 1;
								} else if($time == "10:00"){
									$userCount[2][1] = $userCount[2][1] + 1;
								}else if($time == "10:30"){
									$userCount[2][2] = $userCount[2][2] + 1;
								}else if($time == "11:00"){
									$userCount[2][3] = $userCount[2][3] + 1;
								}else if($time == "11:30"){
									$userCount[2][4] = $userCount[2][4] + 1;
								}else if($time == "12:00"){
									$userCount[2][5] = $userCount[2][5] + 1;
								}else if($time == "01:30"){
									$userCount[2][6] = $userCount[2][6] + 1;
								}else if($time == "02:00"){
									$userCount[2][7] = $userCount[2][7] + 1;
								}else if($time == "02:30"){
									$userCount[2][8] = $userCount[2][8] + 1;
								}else if($time == "03:00"){
									$userCount[2][9] = $userCount[2][9] + 1;
								}else if($time == "03:30"){
									$userCount[2][10] = $userCount[2][10]+ 1;
								}else if($time == "04:00"){
									$userCount[2][11] = $userCount[2][11] + 1;
								}
							}else if($day == "Thursday"){
								$time = date('H:i',$timestamp);
								if($time == "09:30"){
									$userCount[3][0] = $userCount[3][0] + 1;
								} else if($time == "10:00"){
									$userCount[3][1] = $userCount[3][1] + 1;
								}else if($time == "10:30"){
									$userCount[3][2] = $userCount[3][2] + 1;
								}else if($time == "11:00"){
									$userCount[3][3] = $userCount[3][3] + 1;
								}else if($time == "11:30"){
									$userCount[3][4] = $userCount[3][4] + 1;
								}else if($time == "12:00"){
									$userCount[3][5] = $userCount[3][5] + 1;
								}else if($time == "01:30"){
									$userCount[3][6] = $userCount[3][6] + 1;
								}else if($time == "02:00"){
									$userCount[3][7] = $userCount[3][7] + 1;
								}else if($time == "02:30"){
									$userCount[3][8] = $userCount[3][8] + 1;
								}else if($time == "03:00"){
									$userCount[3][9] = $userCount[3][9] + 1;
								}else if($time == "03:30"){
									$userCount[3][10] = $userCount[3][10]+ 1;
								}else if($time == "04:00"){
									$userCount[3][11] = $userCount[3][11] + 1;
								}
							}else if($day == "Friday"){
								$time = date('H:i',$timestamp);
								if($time == "09:30"){
									$userCount[4][0] = $userCount[4][0] + 1;
								} else if($time == "10:00"){
									$userCount[4][1] = $userCount[4][1] + 1;
								}else if($time == "10:30"){
									$userCount[4][2] = $userCount[4][2] + 1;
								}else if($time == "11:00"){
									$userCount[4][3] = $userCount[4][3] + 1;
								}else if($time == "11:30"){
									$userCount[4][4] = $userCount[4][4] + 1;
								}else if($time == "12:00"){
									$userCount[4][5] = $userCount[4][5] + 1;
								}else if($time == "01:30"){
									$userCount[4][6] = $userCount[4][6] + 1;
								}else if($time == "02:00"){
									$userCount[4][7] = $userCount[4][7] + 1;
								}else if($time == "02:30"){
									$userCount[4][8] = $userCount[4][8] + 1;
								}else if($time == "03:00"){
									$userCount[4][9] = $userCount[4][9] + 1;
								}else if($time == "03:30"){
									$userCount[4][10] = $userCount[4][10]+ 1;
								}else if($time == "04:00"){
									$userCount[4][11] = $userCount[4][11] + 1;
								}
							}else if($day == "Saturday"){
								$time = date('H:i',$timestamp);
								if($time == "09:30"){
									$userCount[5][0] = $userCount[5][0] + 1;
								} else if($time == "10:00"){
									$userCount[5][1] = $userCount[5][1] + 1;
								}else if($time == "10:30"){
									$userCount[5][2] = $userCount[5][2] + 1;
								}else if($time == "11:00"){
									$userCount[5][3] = $userCount[5][3] + 1;
								}else if($time == "11:30"){
									$userCount[5][4] = $userCount[5][4] + 1;
								}else if($time == "12:00"){
									$userCount[5][5] = $userCount[5][5] + 1;
								}else if($time == "01:30"){
									$userCount[5][6] = $userCount[5][6] + 1;
								}else if($time == "02:00"){
									$userCount[5][7] = $userCount[5][7] + 1;
								}else if($time == "02:30"){
									$userCount[5][8] = $userCount[5][8] + 1;
								}else if($time == "03:00"){
									$userCount[5][9] = $userCount[5][9] + 1;
								}else if($time == "03:30"){
									$userCount[5][10] = $userCount[5][10]+ 1;
								}else if($time == "04:00"){
									$userCount[5][11] = $userCount[5][11] + 1;
								}
							}
							
						}
					}
					
					echo '</div>
					<div class="body-bg"></div>
				</div>
				<a href="#0" class="close">Close</a>
			</div>';
				?>
			<div class="events">
				<ul>
				
					<li class="events-group">
						<div class="top-info"><span>Monday</span></div>
						<ul>
							<!-- DATA CONTENT IS LINKED WITH EVENT MODAL AT THE BOTTOM OF PAGE -->
							<?php 
								
								for ($y = 0; $y <= 11; $y++) {
									if($userCount[0][$y]>0){
										echo '<li class="single-event " data-start="'.$timeSpan[$y][0].'" data-end="'.$timeSpan[$y][1].'" data-content="event-abs-circuit" data-event="event-1">
												<a href="#0" onclick="ShowPara('; 
												echo "'Monday','".$timeSpan[$y][0]."')";echo '">
													<em class="event-name">Number of Patients: '.$userCount[0][$y].'</em>
													<p>Patients that are Accepted</p>
												</a>
											</li>';
									}
								}
								
							
							
							?>
							
							<!-- <li class="single-event" data-start="10:00" data-end="11:00" data-content="event-abs-circuit" data-event="event-1">
								<a href="#0">
									<em class="event-name">John Doe</em>
									<p>Consultation</p>
								</a>
							</li>
							<li class="single-event" data-start="11:00" data-end="12:30" data-content="event-rowing-workout" data-event="event-2">
								<a href="#0">
									<em class="event-name">Jane Doe</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="14:00" data-end="15:15"  data-content="event-yoga-1" data-event="event-3">
								<a href="#0">
									<em class="event-name">Some Name</em>
									<p>Follow Up Checkup</p>
								</a>
							</li> -->
						</ul>
					</li>
					
					<li class="events-group">
						<div class="top-info"><span>Tuesday</span></div>

						<ul>
							<?php 
								
								for ($y = 0; $y <= 11; $y++) {
									if($userCount[1][$y]>0){
										echo '<li class="single-event" data-start="'.$timeSpan[$y][0].'" data-end="'.$timeSpan[$y][1].'" data-content="event-abs-circuit" data-event="event-1">
												<a href="#0" onclick="ShowPara('; 
												echo "'Tuesday','".$timeSpan[$y][0]."')";echo '">
													<em class="event-name">Number of Patients: '.$userCount[1][$y].'</em>
													<p>Patients that are Accepted</p>
												</a>
											</li>';
									}
								}
								
							
							
							?>
							<!-- <li class="single-event" data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2">
								<a href="#0">
									<em class="event-name">Joshua Lee</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="11:30" data-end="13:00"  data-content="event-restorative-yoga" data-event="event-4">
								<a href="#0">
									<em class="event-name">Leonille Christie</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="13:30" data-end="15:00" data-content="event-abs-circuit" data-event="event-1">
								<a href="#0">
									<em class="event-name">John Doe</em>
									<p>Prescription</p>
								</a>
							</li>

							<li class="single-event" data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li> -->
						</ul>
					</li>

					<li class="events-group">
						<div class="top-info"><span>Wednesday</span></div>

						<ul>
						<?php 
								
								for ($y = 0; $y <= 11; $y++) {
									if($userCount[2][$y]>0){
										echo '<li class="single-event" data-start="'.$timeSpan[$y][0].'" data-end="'.$timeSpan[$y][1].'" data-content="event-abs-circuit" data-event="event-1">
												<a href="#0" onclick="ShowPara('; 
												echo "'Wednesday','".$timeSpan[$y][0]."')";echo '">
													<em class="event-name">Number of Patients: '.$userCount[2][$y].'</em>
													<p>Patients that are Accepted</p>
												</a>
											</li>';
									}
								}
								
							
							
							?>
							<!-- <li class="single-event" data-start="09:00" data-end="10:15" data-content="event-restorative-yoga" data-event="event-4">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="10:45" data-end="11:45" data-content="event-yoga-1" data-event="event-3">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="12:00" data-end="13:45"  data-content="event-rowing-workout" data-event="event-2">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="13:45" data-end="15:00" data-content="event-yoga-1" data-event="event-3">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li> -->
						</ul>
					</li>

					<li class="events-group">
						<div class="top-info"><span>Thursday</span></div>

						<ul>
							<?php 
								
								for ($y = 0; $y <= 11; $y++) {
									if($userCount[3][$y]>0){
										echo '<li class="single-event" data-start="'.$timeSpan[$y][0].'" data-end="'.$timeSpan[$y][1].'" data-content="event-abs-circuit" data-event="event-1">
												<a href="#0" onclick="ShowPara('; 
												echo "'Thursday','".$timeSpan[$y][0]."')";echo '">
													<em class="event-name">Number of Patients: '.$userCount[3][$y].'</em>
													<p>Patients that are Accepted</p>
												</a>
											</li>';
									}
								}
								
							
							
							?>	
							<!-- <li class="single-event" data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="12:00" data-end="13:45" data-content="event-restorative-yoga" data-event="event-4">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="15:30" data-end="16:30" data-content="event-abs-circuit" data-event="event-1">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="17:00" data-end="18:30"  data-content="event-rowing-workout" data-event="event-2">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li> -->
						</ul>
					</li>

					<li class="events-group">
						<div class="top-info"><span>Friday</span></div>

						<ul>

							<?php 
								
								for ($y = 0; $y <= 11; $y++) {
									if($userCount[4][$y]>0){
										echo '<li class="single-event" data-start="'.$timeSpan[$y][0].'" data-end="'.$timeSpan[$y][1].'" data-content="event-abs-circuit" data-event="event-1">
												<a href="#0" onclick="ShowPara('; 
												echo "'Friday','".$timeSpan[$y][0]."')";echo '">
													<em class="event-name">Number of Patients: '.$userCount[4][$y].'</em>
													<p>Patients that are Accepted</p>
												</a>
											</li>';
									}
								}
								
							
							
							?>		
							<!-- <li class="single-event" data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="12:30" data-end="14:00" data-content="event-abs-circuit" data-event="event-1">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li> -->
						</ul>
					</li>
					<li class="events-group">
						<div class="top-info"><span>Saturday</span></div>

						<ul>

							<?php 
								
								for ($y = 0; $y <= 11; $y++) {
									if($userCount[5][$y]>0){
										echo '<li class="single-event" data-start="'.$timeSpan[$y][0].'" data-end="'.$timeSpan[$y][1].'" data-content="event-abs-circuit" data-event="event-1">
												<a href="#0" onclick="ShowPara('; 
												echo "'Saturday','".$timeSpan[$y][0]."')";echo '">
													<em class="event-name">Number of Patients: '.$userCount[5][$y].'</em>
													<p>Patients that are Accepted</p>
												</a>
											</li>';
									}
								}
								
							
							
							?>		
							<!-- <li class="single-event" data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="12:30" data-end="14:00" data-content="event-abs-circuit" data-event="event-1">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li>

							<li class="single-event" data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3">
								<a href="#0">
									<em class="event-name">Bla Bla</em>
									<p>Consultation</p>
								</a>
							</li> -->
						</ul>
					</li>
				</ul>
			</div>

			
			<div class="cover-layer"></div>
		</div>
		<script src="../vendor/jquery/jquery.min.js"></script>						
		<script src="js/modernizr.js"></script>
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
		<!-- <script>
			if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
		</script> -->
		<script>
			function ShowPara(day,time){
				var classname = day+"_"+time;
				
				var elements = document.getElementsByClassName('even');
				for (var i in elements) {
					if (elements.hasOwnProperty(i)) {
						var name = elements[i].className.split(" ");
						elements[i].className = name[0]+' '+name[1]+' hide-class';
					}
				}
				var show = document.getElementsByClassName(classname);
				for (var i in show) {
					if (show.hasOwnProperty(i)) {
						show[i].className = 'even '+classname+' show-class';
					}
				}
				
			}
		</script>
		<script src="js/main.js"></script>

	</body>
</html>
