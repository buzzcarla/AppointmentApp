<!DOCTYPE html>
<?php 
	require('init.php');
?>
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
		<div id="hero_register">
			<div class="container margin_120_95">			
				<div class="row">
					<div class="col-lg-6 ml-auto">
						<div class="box_form">
							<form id="doctorform">
								<div class="row">
									<div class="col-md-12 ">
										<div class="form-group">
											<input id="fname" type="text" class="form-control" placeholder="First Name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 ">
										<div class="form-group">
											<input id="mname" type="text" class="form-control" placeholder="Middle Name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 ">
										<div class="form-group">
											<input id="lname" type="text" class="form-control" placeholder="Last Name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control sel-prov" required>
												<option value="" disabled selected>Province</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control sel-city" disabled required>
												<option value=""disabled selected>City</option>
											</select>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input id="cnum" type="text" class="form-control" placeholder="Mobile Phone" required>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input id ="demail" type="email" class="form-control" placeholder="Email Address" required>
										</div>
									</div>
								</div>
								<!-- /row -->
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input id ="username" type="text" class="form-control" placeholder="Username" required>
										</div>
									</div>
								</div>
								<!-- /row -->
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input id ="password" type="password" class="form-control" placeholder="Password" required>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input id ="password" type="password" class="form-control" placeholder="Confirm Password" required>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="checkbox-holder text-left">
									<div class="checkbox_2">
										<input type="checkbox" value="accept_2" id="check_2" name="check_2" checked>
										<label for="check_2"><span>By clicking submit and signing up to this website, I agree to have read and understood the <a href="#">terms and agreements.</a></span></label>
									</div>
								</div>
								<p class="text-center add_top_30"><input type="button" class="btn_1 sub" value="Submit"></p>
							</form>
						</div>
						<!-- /box_form -->
					</div>
					<!-- /col -->
					<div class="col-lg-6">
						<h1>Booking an appointment has never been easier!</h1>
						<p class="lead">Te pri adhuc simul. No eros errem mea. Diam mandamus has ad. Invenire senserit ad has, has ei quis iudico, ad mei nonumes periculis.</p>
						<div class="box_feat_2">
							<i class="pe-7s-map-2"></i>
							<h3>Find doctors around you!</h3>
							<p>Ut nam graece accumsan cotidieque. Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet.</p>
						</div>
						<div class="box_feat_2">
							<i class="pe-7s-date"></i>
							<h3>Easly manage Bookings</h3>
							<p>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. Eum no atqui putant democritum, velit nusquam sententiae vis no.</p>
						</div>
						<div class="box_feat_2">
							<i class="pe-7s-phone"></i>
							<h3>Instantly via Mobile</h3>
							<p>Eos eu epicuri eleifend suavitate, te primis placerat suavitate his. Nam ut dico intellegat reprehendunt, everti audiam diceret in pri, id has clita consequat suscipiantur.</p>
						</div>
					</div>
					<!-- /col -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /hero_register -->
	</main>
	<!-- /main -->
	
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
</html>