<!DOCTYPE html>
<?php 
	require('init.php');
?>
<html lang="en">

<!-- Head contains all the needed links for the program -->
<?php
	require('head.php');		
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
	
	<main>
		<div id="hero_register">
			<div class="container margin_120_95">			
				<div class="row">
					<div class="col-lg-6 ml-auto">
						<div class="box_form">
							<!-- The user's registration form. ID is still doctorform because they share the same UI styling as the doctor's form-->
							<form id="doctorform">	
								<div class="row">
									<div class="col-md-12 ">
										<div class="form-group">
											<label>First Name*</label>
											<input id="fname" type="text" class="form-control" placeholder="First Name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 ">
										<div class="form-group">
											<label>Middle Name</label>
											<input id="mname" type="text" class="form-control" placeholder="Middle Name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 ">
										<div class="form-group">
											<label>Last Name*</label>
											<input id="lname" type="text" class="form-control" placeholder="Last Name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Gender*</label>
											<select class="form-control sel-gender" required>
												<option value="1" selected>Male</option>
												<option value="0">Female</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Contact Number*</label>
											<div class="row">
												<div class="col-md-1">
													<p>+63</p>
												</div>
												<div class="col-md-11">
													<input id="cnum" type="number" min="9999999999" max="9999999999" class="form-control" placeholder="Mobile Phone" required>
												</div>												
											</div>
											
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Email Address*</label>
											<input id ="demail" type="email" class="form-control" placeholder="Email Address" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Username*</label>
											<input id ="username" type="text" class="form-control" placeholder="Username" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Password*</label>
											<input id ="password" type="password" class="form-control" placeholder="Password" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Confirm Password*</label>
											<input id ="confpass" type="password" class="form-control" placeholder="Confirm Password" required>
										</div>
									</div>
								</div>
								<div class="checkbox-holder text-left">
									<div class="checkbox_2">
										<input type="checkbox" value="accept_2" id="check_2" name="check_2" checked>
										<label for="check_2"><span>By clicking submit and signing up to this website, I agree to have read and understood the <a href="#">terms and agreements.</a></span></label>
									</div>
								</div>
								<p class="text-center index.php"><input type="button" class="btn_1 sub" value="Submit"></p>
							</form>
						</div>
					</div>
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
				</div>
			</div>
		</div>
	</main>
	
	<?php 
		require('footer.php');
	?>
	</div>

	<!-- Back to top button -->
	<div id="toTop">
		<img class="topArrow" src="./img/up_arrow.png">
	</div>

	<!-- COMMON SCRIPTS USED IN ALL FILES -->
	<script src="js/email-decode.min.js"></script>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>

</body>
</html>
<script>
	$( window ).on( "load", function() {
		// When the page is loading, this function is triggered
		$.ajax({
			url: "requests/getProv.php",	// Get the list of provinces from DB
			type: 'GET',
			dataType: 'text json',
			success: function(res) {
				$(res).each(function(key,val){
					$('.sel-prov').append($('<option>', {
						value: val[4],
						text: val[2]
					}));
				});
			}
		});
    });

	$('.sel-clinic').on("change",function(){	// Set the coordinates of the clinic address
		var num = this.value;
		$(".clinics-inner").html("");
		for (i = 0; i < num; i++) { 
			$(".clinics-inner").append("</br>");
			$(".clinics-inner").append("<div class='row'><div class='col-md-6'><input type='text' class='form-control x"+i+"' placeholder='COORDINATE X' required></div><div class='col-md-6'><input type='text' class='form-control y"+i+"' placeholder='COORDINATE Y' required></div></div>");
			$(".clinics-inner").append("<div class='row'><div class='col-md-12'><input type='text' class='form-control clin_name"+i+"' placeholder='Clinic Name "+(i+1)+"'></div></div>");
			$(".clinics-inner").append("<div class='row'><div class='col-md-12'><input type='text' class='form-control clin_adderss"+i+"' placeholder='Clinic Address "+(i+1)+"'></div></div>");
			$(".clinics-inner").append("<div class='row'><div class='col-md-6'><input type='time' class='form-control timestart"+i+"' required value='12:00' required></div><div class='col-md-6'><input type='time' class='form-control timeend"+i+"' required value='12:00' required></div></div>");
			$(".clinics-inner").append("</br>");
		}
	});

	$('.sel-prov').on("change",function(){		// When a province is selected
		var provCode = this.value;
		$('.sel-city').find('option')
						.remove()
						.end()
		$.ajax({
			url: "requests/getCity.php",	// Load cities from DB according to Province selected
			type: 'GET',
			dataType: 'text json', 
			data: {
				pcode: provCode
			},
			success: function(res) {
				$(res).each(function(key,val){
					$('.sel-city').append($('<option>', { // Append the selected City with the selected Province
						value: val[5],
						text: val[2]
					}));
				});
			}
    	});
		$( ".sel-city" ).prop( "disabled", false );		// Enable selecting a city
	});

	$( ".sub" ).on("click",function(){	
		// form validation
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var n = $('#cnum').val();
		var realnum = n.toString();
		realnum = "63"+realnum;
		var username = $('#username').val();
		var password = $('#password').val();
		var demail = $('#demail').val();
		var gender = $('.sel-gender').val();

		if (fname == ""){
			alert("Please input first name");
		} else if(lname == ""){
			alert("Please input last name");
		} else if(realnum.match(/^\d{12}$/) == null)
		{
			alert("Please input contact number");
		} else if(username == "")
		{
			alert("Please input a username");
		} else if(password == "")
		{
			alert("Please input a password");
		} else if(demail == "")
		{
			alert("Please input an e-mail address");
		} else if(gender == null)
		{
			alert("Please select a gender");
		}	

		$.ajax({
			url: "create/createUser.php",	// where the data is posted or sent
			type: 'POST',
			dataType: 'text json', 
			data: {
				dfname:$('#fname').val(),
				dmname:$('#mname').val(),
				dlname:$('#lname').val(),
				dcnum:realnum,
				duser:$('#username').val(),
				dpass:$('#password').val(),
				demail:$('#demail').val(),
				dgender:$('.sel-gender').val()
				
			},
			success: function(res) {		// If the data is successfully posted (user data is sent to db)
				if(res[0]== 1){
					alert("Successfully Created! Please Log in.");
					document.location.href = 'login.php';
				} else if(res[0] == 2){
					alert("Error in creating user. Please retry.");
				}else if(res[0] == 0){
					alert("User already exists.");
				}
				else if(res[0] == 3){
					alert("There is invalid data in the form. Please review.");
				}	
			}
		});
	});

</script>
