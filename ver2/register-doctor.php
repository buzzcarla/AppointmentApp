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
					<div class="col-lg-6">
						<h1>It's time to find you!</h1>
						<p class="lead">Te pri adhuc simul. No eros errem mea. Diam mandamus has ad. Invenire senserit ad has, has ei quis iudico, ad mei nonumes periculis.</p>
						<div class="box_feat_2">
							<i class="pe-7s-map-2"></i>
							<h3>Let patients to Find you!</h3>
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
					<div class="col-lg-5 ml-auto">
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
									<div class="col-md-12 ">
										<div class="form-group">
										  <select  class="form-control sel-gender" required>
										  		<option value=""disabled selected>Gender</option>
												<option value="1">Male</option>
												<option value="0">Female</option>
										  </select>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<select  class="form-control sel-special" required>
												<option value=""disabled selected>Specialization</option>
												<option value="ALLERGIST">Allergist</option>
												<option value="ANESTHESIOLOGIST">Anesthesiologist </option>
												<option value="CARDIOLOGIST">Cardiologist  </option>
												<option value="DERMATOLOGIST">Dermatologist  </option>
												<option value="GASTROENTEROLOGIST  ">Gastroenterologist  </option>
												<option value="HEMATOLOGIST">Hematologist </option>
												<option value="INTERNAL MEDICINE PHYSICIAN">Internal Medicine Physician </option>
												<option value="NEPHROLOGIST">Nephrologist  </option>
												<option value="NEUROLOGIST">Neurologist  </option>
												<option value="NEUROSURGEON">Neurosurgeon  </option>
												<option value="OBSTETRICIAN">Obstetrician  </option>
												<option value="GYNECOLOGIST">Gynecologist  </option>
												<option value="NURSE-MIDWIFERY">Nurse-Midwifery </option>
												<option value="OCCUPATIONAL MEDICINE PHYSICIAN">Occupational Medicine Physician </option>
												<option value="OPHTHALMOLOGIST">Ophthalmologist  </option>
												<option value="ORAL AND MAXILLOFACIAL SURGEON">Oral and Maxillofacial Surgeon </option>
												<option value="ORTHOPAEDIC SURGEON">Orthopaedic Surgeon </option>
												<option value="OTOLARYNGOLOGIST">Otolaryngologist  </option>
												<option value="PATHOLOGIST">Pathologist  </option>
												<option value="PLASTIC SURGEON">Plastic Surgeon  </option>
												<option value="PODIATRIST">Podiatrist </option>
												<option value="PSYCHIATRIST">Psychiatrist </option>
												<option value="PULMONARY MEDICINE PHYSICIAN">Pulmonary Medicine Physician</option>
												<option value="RADIATION ONCONLOGIST">Radiation Onconlogist</option>
												<option value="DIAGNOSTIC RADIOLOGIST">Diagnostic Radiologist</option>
												<option value="RHEUMATOLOGIST">Rheumatologist</option>
												<option value="UROLOGIST">Urologist</option>
											</select>
										</div>
									</div>
								</div>
								<!-- /row -->
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
								<div class="row">
									<div class="col-md-12 ">
										<div class="form-group">
											<input id="license" type="text" class="form-control" placeholder="Medical License" required>
										</div>
									</div>
								</div>
								<!-- /row -->
								<!-- /row -->
								<div class="row">
									<div class="col-md-12">
										<select class="form-control sel-clinic"  required>
											<option value=""disabled selected>How many Clinics?</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<!-- <div class="col-md-6">
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
									</div> -->
								</div>
								<!-- /row -->
								<div class="clinics">
									<div class="form-group clinics-inner">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input id="cnum" type="text" class="form-control" placeholder="Mobile Phone" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input id="onum" type="text" class="form-control" placeholder="Office Phone">
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
<script>
	$( window ).on( "load", function() {
        $.ajax({
			url: "requests/getProv.php",
			type: 'GET',
			dataType: 'text json', // added data type
			success: function(res) {
				$(res).each(function(key,val){
					$('.sel-prov').append($('<option>', {
						value: val[4],
						text: val[2]
					}));
				});
				console.log(res);
			}
    	});
    });
	
	$('.sel-clinic').on("change",function(){
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

	$('.sel-prov').on("change",function(){
		var provCode = this.value;
		$('.sel-city').find('option')
						.remove()
						.end()
		$.ajax({
			url: "requests/getCity.php",
			type: 'GET',
		
			dataType: 'text json', // added data type
			data: {
				pcode: provCode
			},
			success: function(res) {
				$(res).each(function(key,val){
					$('.sel-city').append($('<option>', {
						value: val[5],
						text: val[2]
					}));
				});
				console.log(res);
			}
    	});
		$( ".sel-city" ).prop( "disabled", false );
	});
	$( ".sub" ).on("click",function(){
		var len = $('.sel-clinic').val();
		var jsonObject = [];
		for(var i = 0; i < len ; i++){
			var item = {};
			item['x']= $('.x'+i).val();
			item['y']= $('.y'+i).val();
			item['clinname']= $('.clin_name'+i).val();
			item['clinaddress']= $('.clin_adderss'+i).val(); 
			item['clinfrom']= $('.timestart'+i).val();
			item['clinto']= $('.timeend'+i).val();

			jsonObject.push(item);
		}
		console.log(jsonObject);
		$.ajax({
			url: "create/createDoctor.php",
			type: 'POST',
		
			dataType: 'text json', // added data type
			data: {
				dfname:$('#fname').val(),
				dmname:$('#mname').val(),
				dlname:$('#lname').val(),
				dcnum:$('#cnum').val(),
				donum:$('#onum').val(),
				duser:$('#username').val(),
				dpass:$('#password').val(),
				demail:$('#demail').val(),
				dspecial:$('.sel-special').val(),
				dgender:$('.sel-gender').val(),
				ccode:$('.sel-city').val(),
				pcode: $('.sel-prov').val(),
				clinics: JSON.stringify(jsonObject),
				medli: $('#license').val()
			},
			success: function(res) {
				if(res[0]== 1){
					alert("SUCCESS");
				} else if(res[0] == 2){
					alert("ERROR");
				}else if(res[0] == 0){
					alert("USER EXISTED");
				}
				else if(res[0] == 3){
					alert("DATA ERROR");
				}
				alert(res);
			}
    	});
	});
	
</script>