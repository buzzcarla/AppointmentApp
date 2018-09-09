<!DOCTYPE html>
<html lang="en">

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

	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">


<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Javascripts -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.bootstrap.year.calendar.min.js"></script>
	<!-- CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/jquery.bootstrap.year.calendar.min.css" rel="stylesheet">
   
    <!-- SPECIFIC CSS -->
    <link href="css/date_picker.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

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
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home ></a></li>
					<li><a href="#">Doctor List ></a></li>
					<li>Book an Appointment</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->
		
		<div class="container margin_60">
			<div class="row">
				
				<aside class="col-xl-3 col-lg-4" id="sidebar">
					<div class="box_profile">
						<figure>
							<img src="img/doctor_listing_2.jpg" alt="" class="img-fluid">
						</figure>
						<small>Primary care - Internist</small>
						<h1>Dr. John Doe</h1>
						<div>
							<img style="max-height: 100px; width: auto;" src="https://thumbs.dreamstime.com/b/male-doctor-icon-doing-ok-hand-sign-vector-illustration-81961335.jpg">
						</div>
						<ul class="statistic">
							<li>4 years in Practice</li>
						</ul>
						<ul class="contacts">
							<li><h6>Address</h6>123 456, Lapu Lapu, Cebu, 6021</li>
							<li><h6>Phone</h6><a>+63 943 432 3342</a></li>
						</ul>
						<div class="text-center"><a  href="https://www.google.com/maps/dir/Mandaue+City,+Cebu/LH+Prime+Medical+Clinic+Basak+Mactan,+Lapu-Lapu+City,+Cebu/@10.3170571,123.9294577,7127m/data=!3m2!1e3!4b1!4m13!4m12!1m5!1m1!1s0x33a99889680ceefd:0xa9f911a1f5dda572!2m2!1d123.9415518!2d10.3402623!1m5!1m1!1s0x33a999f9a2431d03:0x4957877e437e6d01!2m2!1d123.9662371!2d10.2926005" class="btn_1 outline" target="_blank"><i class="icon_pin"></i> View on map</a></div>
					</div>
				</aside>
				<!-- /asdide -->
				
				<div class="col-xl-9 col-lg-8">

					<div class="tabs_styled_2">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book">Book an appointment</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true">General info</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews</a>
							</li>
						</ul>
						<!--/nav-tabs -->

						<div class="tab-content">

							<div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
								<p class="lead add_bottom_30">To book an appointment with the selected doctor, please input or choose from the available dates and time.</p>
								<form>
									<div class="main_title_3">
										<h3><strong>1</strong>Select your date</h3>
									</div>
									<div class="form-group add_bottom_45">
										<div class="calendar"></div>sa
										<input type="hidden" id="my_hidden_input">
										<ul class="legend">
											<li><strong></strong>Available</li>
											<li><strong></strong>Not available</li>
										</ul>
									</div>
									<div class="main_title_3" style="margin-bottom: 4%;">
										<h3><strong>2</strong>Select your time</h3>
									</div>
									<div class="row justify-content-center add_bottom_45" style="margin-left: 33%; margin-bottom: 4%;">
										<div class="col-md-3 col-6 text-center">
											<ul class="time_select">
												<li>
													<input type="radio" id="radio1" name="radio_time" value="09.30am">
													<label for="radio1">09.30am</label>
												</li>
												<li>
													<input type="radio" id="radio2" name="radio_time" value="10.00am">
													<label for="radio2">10.00am</label>
												</li>
												<li>
													<input type="radio" id="radio3" name="radio_time" value="10.30am">
													<label for="radio3">10.30am</label>
												</li>
												<li>
													<input type="radio" id="radio4" name="radio_time" value="11.00am">
													<label for="radio4">11.00am</label>
												</li>
												<li>
													<input type="radio" id="radio5" name="radio_time" value="11.30am">
													<label for="radio5">11.30am</label>
												</li>
												<li>
													<input type="radio" id="radio6" name="radio_time" value="12.00am">
													<label for="radio6">12.00am</label>
												</li>
											</ul>
										</div>
										<div class="col-md-3 col-6 text-center">
											<ul class="time_select">
												<li>
													<input type="radio" id="radio7" name="radio_time" value="01.30pm">
													<label for="radio7">01.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio8" name="radio_time" value="02.00pm">
													<label for="radio8">02.00pm</label>
												</li>
												<li>
													<input type="radio" id="radio9" name="radio_time" value="02.30pm">
													<label for="radio9">02.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio10" name="radio_time" value="03.00pm">
													<label for="radio10">03.00pm</label>
												</li>
												<li>
													<input type="radio" id="radio11" name="radio_time" value="03.30pm">
													<label for="radio11">03.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio12" name="radio_time" value="04.00pm">
													<label for="radio12">04.00pm</label>
												</li>
											</ul>
										</div>
									</div>
									<!-- /row -->
									
									<div class="main_title_3" style="margin-bottom: 4%;">
										<h3><strong>3</strong>Select visit</h3>
									</div>
									<ul class="treatments clearfix">
										
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit1" name="visit1">
												<label for="visit1" class="css-label">Consultation <strong>P500.00</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit2" name="visit2">
												<label for="visit2" class="css-label">Follow-up Visit<strong>P400.00</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit3" name="visit3">
												<label for="visit3" class="css-label">Treatment Visit <strong>P850.00</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit4" name="visit4">
												<label for="visit4" class="css-label">Icontinence visit <strong>P500.00</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit5" name="visit5">
												<label for="visit5" class="css-label">Prescription <strong>P500.00</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit6" name="visit6">
												<label for="visit6" class="css-label">Other <strong>P500.00</strong></label>
											</div>
										</li>
									</ul>
								</form>					
								<hr>
								<p class="text-center"><a style="margin-left: 40%; margin-top: 5%;" href="booking-page.html" class="btn_1 medium">Book Now</a></p>
							</div>
							<!-- /tab_1 -->
							
							<div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
								<p class="lead add_bottom_30">Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
								<div class="indent_title_in">
									<i class="pe-7s-user"></i>
									<h3>Professional statement</h3>
									<p>Mussum ipsum cacilds, vidis litro abertis.</p>
								</div>
								<div class="wrapper_indent">
									<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
									<h6>Specializations</h6>
									<div class="row">
										<div class="col-lg-6">
											<ul class="bullets">
												<li>Abdominal Radiology</li>
												<li>Addiction Psychiatry</li>
												<li>Adolescent Medicine</li>
												<li>Cardiothoracic Radiology </li>
											</ul>
										</div>
										<div class="col-lg-6">
											<ul class="bullets">
												<li>Abdominal Radiology</li>
												<li>Addiction Psychiatry</li>
												<li>Adolescent Medicine</li>
												<li>Cardiothoracic Radiology </li>
											</ul>
										</div>
									</div>
									<!-- /row-->
								</div>
								<!-- /wrapper indent -->
								
								<hr>
								
								<div class="indent_title_in">
									<i class="pe-7s-news-paper"></i>
									<h3>Education</h3>
									<p>Mussum ipsum cacilds, vidis litro abertis.</p>
								</div>
								<div class="wrapper_indent">
									<p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
									<h6>Curriculum</h6>
									<ul class="list_edu">
										<li><strong>New York Medical College</strong> - Doctor of Medicine</li>
										<li><strong>Montefiore Medical Center</strong> - Residency in Internal Medicine</li>
										<li><strong>New York Medical College</strong> - Master Internal Medicine</li>
									</ul>

								</div>
								<!--  End wrapper indent -->

								<hr>

								<div class="indent_title_in">
									<i class="pe-7s-cash"></i>
									<h3>Prices &amp; Payments</h3>
									<p>Mussum ipsum cacilds, vidis litro abertis.</p>
								</div>
								<div class="wrapper_indent">
									<p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
									<table class="table table-responsive table-striped">
										<thead>
											<tr>
												<th>Service - Visit</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>New patient visit</td>
												<td>$34</td>
											</tr>
											<tr>
												<td>General consultation</td>
												<td>$60</td>
											</tr>
											<tr>
												<td>Back Pain</td>
												<td>$40</td>
											</tr>
											<tr>
												<td>Diabetes Consultation</td>
												<td>$55</td>
											</tr>
											<tr>
												<td>Eating disorder</td>
												<td>$60</td>
											</tr>
											<tr>
												<td>Foot Pain</td>
												<td>$35</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--  End wrapper_indent -->

							</div>
							<!-- /tab_2 -->

							<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
								<div class="reviews-container">
									<div class="row">
										<div class="col-lg-3">
											<div id="review_summary">
												<strong>4.7</strong>
												<div class="rating">
													<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
												</div>
												<small>Based on 4 reviews</small>
											</div>
										</div>
										<div class="col-lg-9">
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
											</div>
											<!-- /row -->
										</div>
									</div>
									<!-- /row -->
									
									<hr>
									
									<div class="review-box clearfix">
										<figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
										</figure>
										<div class="rev-content">
											<div class="rating">
												<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<div class="rev-info">
												Admin – April 03, 2016:
											</div>
											<div class="rev-text">
												<p>
													Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
												</p>
											</div>
										</div>
									</div>
									<!-- /review-box -->

									<div class="review-box clearfix">
										<figure class="rev-thumb"><img src="img/avatar2.jpg" alt="">
										</figure>
										<div class="rev-content">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<div class="rev-info">
												Ahsan – April 01, 2016
											</div>
											<div class="rev-text">
												<p>
													Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
												</p>
											</div>
										</div>
									</div>
									<!-- End review-box -->

									<div class="review-box clearfix">
										<figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
										</figure>
										<div class="rev-content">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<div class="rev-info">
												Sara – March 31, 2016
											</div>
											<div class="rev-text">
												<p>
													Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
												</p>
											</div>
										</div>
									</div>
									<!-- End review-box -->
									
								</div>
								<!-- End review-container -->
							</div>
							<!-- /tab_3 -->
						</div>
						<!-- /tab-content -->
					</div>
					<!-- /tabs_styled -->
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
	
	<?php 
		require('footer.php');
	?>
	<!--/footer-->
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
   	
	<!-- SPECIFIC SCRIPTS -->
    <script src="js/bootstrap-datepicker.js"></script>

</body>
</html>

<script type="text/javascript">

if (typeof jQuery == 'undefined') {
    throw new Error('jQuery is not loaded');
     $('.calendar').calendar({
        cols: 12,
        colsSm: 12,
        colsMd: 12,
        colsLg: 12,
        colsXl: 12
    });
}


</script>