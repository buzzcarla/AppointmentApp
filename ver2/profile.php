
<!DOCTYPE html>
<html lang="en">

<?php
	require('head.php');
?>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
    
	<?php
		require('header.php');
	?>
	<!-- /Header -->
	
	<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="index.php">Home ></a></li>
					<li>User Profile</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
						<div class="box_style_cat" id="faq_box">
							<ul id="cat_nav">
								<li><a href="#payment" class="active">User Profile<img src="https://static.thenounproject.com/png/56954-200.png" style="max-width: 25px; float: right;"></a></li>
								<li><a href="#tips"><i class="icon_document_alt"></i>Change Password<img src="https://cdn3.iconfinder.com/data/icons/antivirus-internet-security-thin-version/33/security_management-512.png" style="max-width: 25px; float: right;"></li></a>
								<li><a href="#booking"><i class="icon_document_alt"></i>Booking History<img src="https://st2.depositphotos.com/1032749/10287/v/450/depositphotos_102879122-stock-illustration-thin-line-document-icon-illustration.jpg" style="max-width: 25px; float: right;"></li></a>
							</ul>
						</div>
						<!--/sticky -->
				</aside>
				<!--/aside -->
				
				<div class="col-lg-9" id="faq">
					<h4 class="nomargin_top">User Profile</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="payment">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true">Basic Information</a>
								</h5>
							</div>

							<div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
								<div class="card-body">
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
											<div class="col-md-12">
												<div class="form-group">
													<select class="form-control sel-gender" required>
														<option value="1" selected>Male</option>
														<option value="0">Female</option>
													</select>
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
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id="cnum" type="text" class="form-control" placeholder="Mobile Phone" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id ="demail" type="email" class="form-control" placeholder="Email Address" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id ="username" type="text" class="form-control" placeholder="Username" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id ="password" type="password" class="form-control" placeholder="Password" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id ="confpass" type="password" class="form-control" placeholder="Confirm Password" required>
												</div>
											</div>
										</div>
										<p class="text-center"><input type="button" class="btn_1 sub" value="Update Information"></p>
									</form>
								</div>
							</div>
						</div>
						<!-- /card -->

					</div>
					<!-- /accordion payment -->
					
					<h4 class="nomargin_top">Change Password</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="tips">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_tips" aria-expanded="true">Update Password</a>
								</h5>
							</div>

							<div id="collapseOne_tips" class="collapse" role="tabpanel" data-parent="#tips">
								<div class="card-body">
									<form id="passwordform">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id ="password" type="password" class="form-control" placeholder="Current Password" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id ="password" type="password" class="form-control" placeholder="New Password" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id ="confpass" type="password" class="form-control" placeholder="Confirm Password" required>
												</div>
											</div>
										</div>
										<p class="text-center"><input type="button" class="btn_1 sub" value="Update Password"></p>
									</form>
								</div>
							</div>
						</div>

					</div>
					
					<h4 class="nomargin_top">Booking History</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="booking">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_booking" aria-expanded="true">Previous Transactions / Bookings</a>
								</h5>
							</div>

							<div id="collapseOne_booking" class="collapse" role="tabpanel" data-parent="#booking">
								<div class="card-body">
									<div class="container">
									  <p>The .table-hover class enables a hover state on table rows:</p>            
									  <table class="table table-hover">
									    <thead>
									      <tr>
									        <th>Firstname</th>
									        <th>Lastname</th>
									        <th>Email</th>
									      </tr>
									    </thead>
									    <tbody>
									      <tr>
									        <td>John</td>
									        <td>Doe</td>
									        <td>john@example.com</td>
									      </tr>
									      <tr>
									        <td>Jane</td>
									        <td>Doe</td>
									        <td>mary@example.com</td>
									      </tr>
									      <tr>
									        <td>July</td>
									        <td>Dooley</td>
									        <td>july@example.com</td>
									      </tr>
									    </tbody>
									  </table>
									</div>

								</div>
							</div>
						</div>
						
					</div>
					<!-- /accordion Booking -->

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

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
	
</body>
</html>