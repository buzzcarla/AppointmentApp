<!DOCTYPE html>
<html lang="en">

<?php
	
	require('head.php');
	require_once('connect.php');
	$message1="Entry is invalid please check again";
	$mesclass1="info_fail";
	$message2="Password Didnt Match";
	$mesclass2="pass_fail";
	if(isset($_POST['up_stat'])){
		if($_POST['up_stat'] == 2){
			if(isset($_POST['pass'])&&isset($_POST['newpass'])&&isset($_POST['confpass'])){
				if($_POST['pass'] == $_SESSION['pass']){
					if($_POST['newpass'] == $_POST['confpass']){
						$query = "UPDATE `user` 
						SET `user_password`=".$_POST['newpass']."
						WHERE user_id =".$_SESSION['userid'];

						$res = mysqli_query($mysql,$query);
						
						if($res){
							
							$message2="Password Updated";
							$mesclass2="pass_suc";
							$_SESSION['pass'] = $_POST['newpass'];
							
						}
					}		
				}
			}
		}
	}
?>
<style>
	.info_suc{
		display:none;
	}
	.info_fail{
		display:block;
	}
	.pass_suc{
		display:none;
	}
	.pass_fail{
		display:block;
	}
</style>
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
									<form id="doctorform"  method='GET' action="profile.php">
									
										<input type='text' name='up_stat' value='1' hidden />
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group">
													<input disabled id="fname" name="fname" type="text" class="form-control" placeholder="First Name" value='<?php echo''.$_SESSION['fname']; ?>' >
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group">
													<input disabled id="mname" name="mname"  type="text" class="form-control" placeholder="Middle Name" value='<?php echo''.$_SESSION['mname']; ?>'>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group">
													<input disabled id="lname" name="lname"  type="text" class="form-control" placeholder="Last Name" value='<?php echo''.$_SESSION['lname']; ?>' >
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input disabled id="cnum" name="cnum"  type="text" class="form-control" placeholder="Mobile Phone"  value='<?php echo''.$_SESSION['mobile']; ?>'>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input disabled id ="demail" name="demail"  type="email" class="form-control" placeholder="Email Address" value='<?php echo''.$_SESSION['email']; ?>' >
												</div>
											</div>
										</div>
										<!-- <p class="text-center"><input type="submit" class="btn_1 sub" value="Update Information"></p> -->
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
								<label class="<?php echo ''.$mesclass2; ?>"><?php echo ''.$message2; ?></label>
									<form id="passwordform" method='POST' action="profile.php">
										
										<input type='text' name='up_stat' value='2' hidden />
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id ="password" name='pass' type="password" class="form-control" placeholder="Current Password" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id ="password" name='newpass' type="password" class="form-control" placeholder="New Password" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input id ="confpass" name='confpass' type="password" class="form-control" placeholder="Confirm Password" required>
												</div>
											</div>
										</div>
										<p class="text-center"><input type="submit" class="btn_1 sub" value="Update Password"></p>
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
									        <th>Doctor Name</th>
									        <th>Date</th>
											<th>Clinic Address</th>
									        <th>Booking Type</th>
									      </tr>
									    </thead>
									    <tbody>
											<?php 
												$query = "SELECT * FROM user
														LEFT JOIN booking_list on booking_list.user_id = user.user_id
														LEFT JOIN doctors on doctors.doctor_id = booking_list.doctor_id
														LEFT JOIN user as doctor_info on doctor_info.user_id = doctors.user_id
														LEFT JOIN location_clinic on location_clinic.doctor_id = doctors.doctor_id
														LEFT JOIN clinic on clinic.clinic_id = location_clinic.clinic_id  
														where user.user_id =".$_SESSION['userid']."
														Group BY booking_id";
												$res = mysqli_query($mysql,$query);
												$ctr= 0;
												while($row = mysqli_fetch_row($res)){
													
													echo '
												
													<tr class="odd gradeX">
															<td>'.$row[26].' '.$row[27].'</td>
															<td>'.$row[16].'</td>
															<td>'.$row[48].'</td>
															<td >'.$row[18].'</td>
														</tr>';
												}
											?>
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