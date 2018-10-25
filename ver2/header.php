<!-- NAV BAR AND HEADER BANNER -->
<header class="header_sticky">	
	<a href="#menu" class="btn_mobile">
		<div class="hamburger hamburger--spin" id="hamburger">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</div>
	</a>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-6">
				<div id="logo_home">
					<h1><a href="index.php" title="Findoctor">Finding Doctors</a></h1>
				</div>
			</div>
			<div class="col-lg-9 col-6">
				<ul id="top_access">
					<li><a href="login.php"><i class="pe-7s-user"></i></a></li>
					<li><a href="register-doctor.php"><i class="pe-7s-add-user"></i></a></li>
				</ul>
				<nav id="menu" class="main-menu">
					<ul>
						<li>
							<span><a href="index.php">Home</a></span>
						</li>
						<?php 
						
								if(!isset($_SESSION['userid'])){
									echo '<li>
											<span><a href="#0">Register</a></span>
											<ul>
												<li><a href="register-doctor.php">Register Doctor</a></li>
												<li><a href="register.php">Register User</a></li>
											</ul>
										</li>
										<li>
											<span><a href="login.php">Login</a></span>
										</li>';
								} else {
										echo '<li>
										<span><a href="#0">Welcome, <span style="color: red">'.$_SESSION['fname'].' '.$_SESSION['mname'].'</span></a></span>
										<ul>
											<li><a href="profile.php">View Profile</a></li>
											<li><a href="login.php?logstat=1">Log Out</a></li>
										</ul>
									</li>';
								}
							?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>