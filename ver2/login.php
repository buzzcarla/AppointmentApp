<!-- LOGIN FUNCTION FOR USER AND DOCTOR -->
<!DOCTYPE html>
<?php 
session_start();
	require_once('connect.php');
	if(isset($_GET['logstat'])){		
		session_unset();
		session_destroy();
		$message = 'Log out';
	} else {
		$message = 'user_exist';
	}
	
	if(isset($_POST['user'])&&$_POST['pass']){
		$password = md5($_POST['pass']);
	 	$query = "SELECT * FROM user where username = '".$_POST['user']."' AND user_password='".$password."' AND user_status = '1' LIMIT 1";
		$res = mysqli_query($mysql,$query);
		if ($res){
			$row = mysqli_fetch_row($res); 
			if($row != null){
				if($row[11]==1){
					
						$query1 = "SELECT * FROM user 
						LEFT JOIN doctors ON user.user_id = doctors.user_id
						LEFT JOIN location_clinic ON doctors.doctor_id = location_clinic.doctor_id 
						LEFT JOIN clinic ON clinic.clinic_id = location_clinic.clinic_id
						WHERE user.user_id = ".$row[0];
		
						$res1 = mysqli_query($mysql,$query1);
						if($res1){
							$row1 = mysqli_fetch_row($res1);
							$_SESSION['docid'] = $row1[12];
							$_SESSION['locid'] = $row1[18];
							$_SESSION['clinid'] = $row1[19];
							$_SESSION['sched_start'] = $row1[18];
							$_SESSION['sched_end'] = $row1[19];
							$_SESSION['clin_name'] = $row1[26];
							$_SESSION['clinx'] = $row1[27];
							$_SESSION['cliny'] = $row1[28];
							$_SESSION['clin_address'] = $row1[29];

						}
					}
					$_SESSION['level'] = $row[5];
					$_SESSION['userid'] = $row[0];
					$_SESSION['username'] = $row[6];
					$_SESSION['gender'] = $row[4];
					$_SESSION['fname'] = $row[1];
					$_SESSION['lname'] = $row[3];
					$_SESSION['mname'] = $row[2];
					$_SESSION['mobile'] = $row[8];
					$_SESSION['tele'] = $row[9];
					$_SESSION['email'] = $row[7];
					$_SESSION['stat'] = $row[5];
					$_SESSION['pass'] = $row[10];
					if($row[5]== 0)
					{
						header('Location: index.php');
					} else if($row[5]==1)
					{
						header('Location:../doctor/pages/index.php');
					} else if($row[5]==2)
					{
						header('Location:../admin/pages/index.php');
					}
					
						
			} else {
				$message = 'user_not';
			}
		} else{
			if(isset($_GET['login'])){
				$message = 'user_not';
			}
			
		}
	} 
?>

<html lang="en">

<?php
	require('head.php');
?>
<style>
	.user_exist{
		display:none;
	}
	.user_not{
		display:block;
	}
</style>
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
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="login-2">
					<h1>Please login to Findoctor!</h1>
					<form method="POST"action="login.php?login='1'">
						<div class="box_form clearfix">
							<div class="box_login last">
								<div class="form-group">
									<label class= <?php echo '"'.$message.'"'; ?> >User does not exist</label>
								</div>
								<div class="form-group">
									<input type="text" name="user" class="form-control user" placeholder="Your username">
								</div>
								<div class="form-group">
									<input type="password" name="pass" class="form-control pass" placeholder="Your password">
									
								</div>
								<div class="form-group" style="text-align: center;">
									<input class="btn_1 loginbut" type="submit" value="Login">
								</div>
							</div>
						</div>
					</form>
					<p style="text-align: -webkit-center;" class="text-center link_bright">Do not have an account yet? <a href="register.php"><strong>Register now!</strong></a></p>
				</div>
				<!-- /login -->
			</div>
		</div>
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
	<?php
	if(isset($_GET['error_status'])){
		if ($_GET['error_status'] == 4) : ?>
   <script type='text/javascript'>
	   //Code runs ONLY if $test_details['done_test'] is empty
	   $(document).ready(function(){
					setTimeout(function () {
						alert("You have to login first before booking");
					}, 3000);
				});
     
   </script>
<?php endif; }?>


</body>
<script>
	// $( document ).ready(function() {
	// 	$('.loginbut').on("click",function(){
	// 		$.ajax({
	// 			url: "requests/getUserOrDoctor.php",
	// 			type: 'POST',
	// 			dataType: 'text json', // added data type
	// 			data: {
	// 					user:$('.user').val(),
	// 				  	pass:$('.pass').val()
	// 				  },
	// 			success: function(res) {
	// 				console.log(res);
	// 				if(res == 3 || res == 2){
	// 					alert("LOGIN FAILED");
	// 				}  else {
	// 					alert("LOGIN SUCCESFUL")
	// 					window.location.replace("index.php");
	// 				}
					
				
	// 			}
    // 		});
	// 	});
	// });
</script>
</html>