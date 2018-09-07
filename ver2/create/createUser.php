<?php 
    require_once('../connect.php');

    if(isset($_POST['dfname'])&&isset($_POST['dmname'])&&isset($_POST['duser'])&&isset($_POST['dpass'])
    &&isset($_POST['dlname'])&&isset($_POST['dcnum'])&&isset($_POST['demail'])&&isset($_POST['ccode'])
    &&isset($_POST['dgender'])&&isset($_POST['pcode'])){
		$username = $_POST['duser'];
		$password = $_POST['dpass'];
        $first = $_POST['dfname'];
        $middle = $_POST['dmname'];
        $last=	$_POST['dlname'];
        $celnum = $_POST['dcnum'];
        $ofnum = "00";
        $email = $_POST['demail'];
        $city = $_POST['ccode'];
        $gender = $_POST['dgender'];
        $province = $_POST['pcode'];
		$query = "SELECT * FROM user WHERE username=".$username." OR (user_firstn =".$first." AND user_middlen =".$middle." AND user_lastn =".$last.") OR user_email ='".$email."'";
		$result = mysqli_query($mysql,$query);

		if ($result){
			echo json_encode($result);
		}else{
            $query = "INSERT INTO `user`(`user_id`, `user_firstn`, `user_middlen`, `user_lastn`, `user_gender`, `user_level`, `username`, 
            `user_email`, `user_province`, `user_city`, `user_mobile`, `user_tele`, `user_password`) 
                    VALUES (NULL,'".$first."','".$middle."','".$last."','".$gender."','0','".$username."','".$email.
                            "','".$province."','".$city."','".$celnum."','".$ofnum."','".$password."')";
			$result = mysqli_query($mysql,$query);
			if($result){
              
                echo json_encode("1");
			
			} else {
				echo json_encode("2");
			}
			
		}
	} else {
		echo json_encode("3");
	}

?>