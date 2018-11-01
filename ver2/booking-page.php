<?php session_start(); ?>
<html lang="en" style="transform: none;">
<head>
<?php

require('head.php');
if(!isset($_GET['timestamp']) || !isset($_SESSION['userid'])){
	header("Location: index.php");
}
$timestamp = intval($_GET['timestamp']);
$date = date('Y/m/d',$timestamp);
$time = date('h:i A',$timestamp);
$type = $_GET['type'];
$docid = $_GET['docid'];
$uid = $_GET['userid'];
if(isset($_GET['start']) && isset($_GET['end'])){
	$startstamp = strtotime($_GET['start']);
	$endstamp = strtotime($_GET['end']);
} else {
	
}

?>

<body style="transform: none; overflow: visible;">

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<div id="preloader" style="display: none;">
	<div data-loader="circle-side" style="display: none;"></div>
</div>
<!-- End Preload -->

<?php
	require('header.php');
?>
<!-- /Header -->	

<main style="transform: none;">
	<div id="breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">Home > </a></li>
				<li><a href="list-2.php?search=&radio_search=all">Doctors' List > </a></li>
				<li>Booking</li>
			</ul>
		</div>
	</div>
	<!-- /breadcrumb -->

	<div class="container margin_60" style="transform: none;">
		<div class="row" style="transform: none;">
			<div class="col-xl-8 col-lg-8">
			<div class="box_general_3 cart">
				<div class="message">
					<p>Please review the following information before completing your booking.</p>
				</div>
				<div class="form_title">
					<h3><strong>1</strong>Your Details</h3>
					<p>
						Mussum ipsum cacilds, vidis litro abertis.
					</p>
				</div>
				<div class="step">
					<div class="row">
						<?php 
							echo '
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>First name</label>
								<input type="text" id="userid" value="'.$uid.'" hidden />
								<input type="text" id="docid" value="'.$docid.'" hidden/>
								
								<input type="text" value="'.$_SESSION['fname'].'"  class="form-control" id="firstname_booking" name="firstname_booking" placeholder="John" >
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Last name</label>
								<input type="text" class="form-control"value="'.$_SESSION['lname'].'"   id="lastname_booking" name="lastname_booking" placeholder="Doe">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Contact Number</label>
								<input type="text" id="telephone_booking" value="'.$_SESSION['tele'].'"   name="telephone_booking" class="form-control" placeholder="00 44 678 94329">
							</div>
						</div>
					</div>';
						
						
						?>
						
				</div>
				<hr>
				<!--End step -->

				<div class="form_title">
					<h3><strong>2</strong>Payment Information</h3>
					<p>
						Please select a mode of payment:
					</p>
				</div>
				<div class="step">
					<h5>Pay via Bank <small style="color: red;font-size: 0.6em;">*Currently unavailable</small></h5>
					<div class="form-group">
						<label>Name on card</label>
						<input  disabled="true" type="text" class="form-control" id="name_card_booking" name="name_card_booking" placeholder="Jhon Doe">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Card number</label>
								<input  disabled="true" type="text" id="card_number" name="card_number" class="form-control" placeholder="xxxx - xxxx - xxxx - xxxx">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Expiration date</label>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input  disabled="true" type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input  disabled="true" type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Security code</label>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input  disabled="true" type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--End row -->

					<h5>Pay onsite</h5>
					<p>
						Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie, reque fierent dissentiunt mel ea.
					</p>
				</div>
				<hr>
				<!--End step -->

				<div class="form_title">
					<h3><strong>3</strong>Final Step</h3>
					<p>
						Mussum ipsum cacilds, vidis litro abertis.
					</p>

				</div>
				<div class="step">
					<div class="row">
						<div class="form-group">
							<label>
								<input type="checkbox" name="policy_terms" id="policy_terms"> I accept terms and conditions and general policy.
							</label>
						</div>						
					</div>
					<!--End row -->
				</div>
				
			</div>
			</div>
			<!-- /col -->
			<aside class="col-xl-4 col-lg-4" id="sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
				
				<!-- /box_general -->
			<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 964.6px; top: 0px;"><div class="box_general_3 booking">
					<form>
						<div class="title">
							<h3>Booking Summary</h3>
						</div>
						<?php 
					
							
						
						echo '<div class="summary">
							
							
						<ul>
								<input type = "text" id="timestamp" value="'.$timestamp.'" hidden />
								<input type = "text" id="booktype" value="'.$type.'" hidden />
								<li>Date: <strong class="float-right">'.$date.'</strong></li>
								<li>Time: <strong class="float-right">'.$time.'</strong></li>
								<li>Dr. Name: <strong class="float-right">'.$_GET["docfname"].' '.$_GET["doclname"].'</strong></li>
								<li>Clinic Name: <strong class="float-right">Mactan Doc</strong></li>
								<li>Clinic Address: <strong class="float-right">';
							if(empty($_GET["clinadd"])){
								echo 'Address did not Share</strong></li>
								
																 </ul>';
							}	else {
								echo ''.$_GET["clinadd"].'</strong></li>
								
																 </ul>';
							}
								
						echo'
						</div>
						
						<hr>
						<input type="button" class="btn_1 full-width confirmBut" value="Confirm Booking"></input>';
						
						?>
					</form>
				</div><div class="resize-sensor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 390px; height: 1544px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></aside>
			<!-- /asdide -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!-- /main -->

<?php 
	require('footer.php');
?>
</div>

<div id="toTop" style="display: block;"></div>
<!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts.min.js"></script>
<script src="js/functions.js"></script>
 
<script>
	$(".confirmBut").click(function(){
		var javaTime = $("#timestamp").val() * 1000;
		var currentTime = new Date();
		currentTime.setHours(currentTime.getHours() + 12);
		if(javaTime > currentTime.getTime())
		{
			if($("#policy_terms").is(":checked")){
				$.ajax({
					url: "create/createBookingNow.php",
					type: 'POST',
					dataType: 'text json',
					data: {
						userid: $("#userid").val(),
						docid: $("#docid").val(),
						bookdate: $("#timestamp").val(),
						type: $("#booktype").val(),
						fname: $("#firstname_booking").val(),
						lname: $("#lastname_booking").val()
					},
					success: function(res) {
						console.log(res);
						if(res == 1){
							document.location.href = "confirm.php";
						} else if(res == 2){
							alert("fail booking please try again!");
						}else if(res == 3){
							alert("you already book the same doctor please book again once the schedule is finished");
						} else if (res == 4){
							alert("network problem!");
						}
						
					}
				});
			} else {
				alert("CHECK THE TERMS AND AGREEMENT");
			}
		} else 
		{
			alert("Book Date and Time must be 12 hours earlier than the actual consultation please Book again");
		}
	});
	
</script>

</body>
</html>