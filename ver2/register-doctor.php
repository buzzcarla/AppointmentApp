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
					<div class="col-lg-6" id="map">
						<!-- Map is placed here -->
					</div>
					<div class="col-lg-5 ml-auto">
						<div class="box_form">
							<div class="card">
							    <div class="card-body mb-4">
							        <h2 class="text-center font-weight-bold pt-4 pb-5"><strong>Enter Credentials</strong></h2>
							        <!-- Doctor's Form -->
							        <div class="steps-form">
							            <div class="steps-row setup-panel">
							                <div class="steps-step">
							                    <a href="#step-9" type="button" class="btn btn-indigo btn-circle" style="background-color: white; border: none;">1</a>
							                </div>
							                <div class="steps-step">
							                    <a href="#step-10" style="background-color: white; border: none;" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
							                </div>
							                <div class="steps-step">
							                    <a href="#step-11" style="background-color: white; border: none;" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
							                </div>
							            </div>
							        </div>
							        <br>
							        <form role="form" action="" method="post">
							            <!-- First Step -->
							            <div class="row setup-content" id="step-9">
							                <div class="col-md-12">
												<h3 class="font-weight-bold pl-0 my-4"><strong>Basic Information</strong></h3>
							                    <div class="form-group md-form">
							                        <label for="yourName" data-error="wrong" data-success="right">First Name</label>
							                        <input id="fname" type="text" class="form-control validate" placeholder="First Name" required>
							                    </div>
							                    <div class="form-group md-form mt-3">
							                        <label for="yourLastName" data-error="wrong" data-success="right">Middle Name</label>
							                        <input id="mname" type="text" class="form-control validate" placeholder="Middle Name">
							                    </div>
							                    <div class="form-group md-form mt-3">
							                        <label for="yourLastName" data-error="wrong" data-success="right">Last Name</label>
							                        <input id="lname" type="text" class="form-control validate" placeholder="Last Name" required>
							                    </div>
							                    <div class="form-group md-form mt-3">
							                        <label for="yourAddress" data-error="wrong" data-success="right">Gender</label>
							                        <div class="form-group">
													  	<select  class="form-control sel-gender" required>
													  		<option value=""disabled selected>Gender</option>
															<option value="1">Male</option>
															<option value="0">Female</option>
													  	</select>
													</div>
							                    </div>
							                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
							                </div>
							            </div>

							            <!-- Second Step -->
							            <div class="row setup-content" id="step-10">
							                <div class="col-md-12">
							                    <h3 class="font-weight-bold pl-0 my-4"><strong>Work Information</strong></h3>
							                    <div class="form-group md-form">
							                        <label for="companyName" data-error="wrong" data-success="right">Specialization</label>
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
							                   
												<div class="form-group md-form">
							                        <label for="yourName" data-error="wrong" data-success="right">Clinic Name</label>
							                        <input id="clinicname" type="text" class="form-control validate" placeholder="Clinic Name" required>
							                        <label for="yourName" data-error="wrong" data-success="right">Clinic Address</label>
													<input id="gmap_where" type="text" class="form-control validate" placeholder="Clinic Address" required>
													<label for="yourName" data-error="wrong" data-success="right">Clinic Opening Hours</label>
													<input id="TimeFrom" type="time" class="form-control validate" placeholder="From" required>
													<input id="TimeTo" type="time" class="form-control validate" placeholder="To" required>
													<button class="form-control" onclick="findAddress(); return false;">Search for address</button>
													<input name="x" id="lat1" type="text" hidden="true">
													<input name="y" id="lng1" type="text" hidden="true">
													<input name="clinname" id="addressclin" type="text" hidden="true">
							                    </div>
							                    <div class="form-group md-form mt-3">
							                        <label for="companyAddress" data-error="wrong" data-success="right">Medical License</label>
							                        <input id="license" type="text" class="form-control" placeholder="Medical License" required>
							                    </div>
							                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
							                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
							                </div>
							            </div>

							            <!-- Third Step -->
							            <div class="row setup-content" id="step-11">
							                <div class="col-md-12">
							                    <h3 class="font-weight-bold pl-0 my-4"><strong>Contact Information</strong></h3>

							                    <div class="form-group md-form mt-3">
							                        <label for="companyAddress" data-error="wrong" data-success="right">Mobile Phone</label>
							                        <input id="cnum" type="text" class="form-control" placeholder="Mobile Phone" required>
							                    </div>
							                    <div class="form-group md-form mt-3">
							                        <label for="companyAddress" data-error="wrong" data-success="right">Office Phone</label>
							                        <input id="onum" type="text" class="form-control" placeholder="Office Phone">
							                    </div>
							                    <div class="form-group md-form mt-3">
							                        <label for="companyAddress" data-error="wrong" data-success="right">E-mail Address</label>
							                        <input id ="demail" type="email" class="form-control" placeholder="Email Address" required>
							                    </div>
							                    <div class="form-group md-form mt-3">
							                        <label for="companyAddress" data-error="wrong" data-success="right">Username</label>
							                        <input id ="username" type="text" class="form-control" placeholder="Username" required>
							                    </div>
							                    <div class="form-group md-form mt-3">
							                        <label for="companyAddress" data-error="wrong" data-success="right">Password</label>
							                        <input id ="password" type="password" class="form-control" placeholder="Password" required>
							                    </div>
							                    <div class="form-group md-form mt-3">
							                        <label for="companyAddress" data-error="wrong" data-success="right">Confirm Password</label>
							                        <input id ="password" type="password" class="form-control" placeholder="Confirm Password" required>
							                    </div>

							                    <div class="form-group md-form mt-3">
							                        <label for="companyAddress" data-error="wrong" data-success="right">Proof of Legitimacy</label>
											            <input type="file" multiple>
												        <div class="file-path-wrapper">
												            <input class="file-path validate" hidden="true" type="text" placeholder="Upload one or more files">
												        </div>
							                    </div>

							                    <div class="checkbox-holder text-left">
													<div class="checkbox_2">
														<input type="checkbox" value="accept_2" id="check_2" name="check_2" checked>
														<label for="check_2"><span>By clicking submit and signing up to this website, I agree to have read and understood the <a href="#">terms and agreements.</a></span></label>
													</div>
												</div>
												<br>
							                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
							                    <button class="btn btn-default btn-rounded float-right sub">Submit</button>
							                </div>
							            </div>
							        </form>
							    </div>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- Include Footer -->
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
	<script src="js/functions.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script src="js/maps_script.js"></script>
	
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXvaLsga6mWXFOGi9ttJXGh1FmvdowzFw&callback=initMap"
    async defer></script>

</body>
</html>
<!-- Same as register.php functions -->
<script>
	$( window ).on( "load", function() {
        $.ajax({
			url: "requests/getProv.php",
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
			dataType: 'text json', 
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
		$.ajax({
			url: "create/createDoctor.php",
			type: 'POST',
			dataType: 'text json', 
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
				ccode:$('.sel-city').text(),
				pcode: $('.sel-prov').text(),
				clinics: JSON.stringify(jsonObject),
				medli: $('#license').val(),
				lat : $('#lat1').val(),
				long : $('#lng1').val(),
				clinname: $('#clinicname').val(),
				address: $('#addressclin').val(),
				from: $('#TimeFrom').val(),
				to: $('#TimeTo').val()
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

	$(document).ready(function () {	// nav buttons for stepper initialization
    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-indigo').addClass('btn-default');
            $item.addClass('btn-indigo');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allPrevBtn.click(function(){	// previous button in stepper form behaviour controller
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepSteps = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

            prevStepSteps.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function(){		// next button in stepper form behaviour controller
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i< curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
   		 });

    	$('div.setup-panel div a.btn-indigo').trigger('click');
	});
</script>