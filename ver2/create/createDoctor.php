<?php 
    require_once('../connect.php');
    
    if(isset($_POST['dfname'])&&isset($_POST['dmname'])&&isset($_POST['dlname'])&&isset($_POST['dcnum'])
    &&isset($_POST['donum'])&&isset($_POST['demail'])&&isset($_POST['dspecial'])&&isset($_POST['ccode'])&&isset($_POST['pcode'])
    &&isset($_POST['duser'])&&isset($_POST['dpass'])){
		$username = $_POST['duser'];
		$password = $_POST['dpass'];
        $first = $_POST['dfname'];
        $middle = $_POST['dmname'];
        $last=	$_POST['dlname'];
        $celnum = $_POST['dcnum'];
        $ofnum = $_POST['donum'];
        $email = $_POST['demail'];
        $city = $_POST['ccode'];
        $gender = $_POST['dgender'];
        $province = $_POST['pcode'];
        $specialization = $_POST['dspecial'];
		$query = "SELECT * FROM user WHERE username=".$username." OR (user_firstn =".$first." AND user_middlen =".$middle." AND user_lastn =".$last.")";
		

		$result = mysqli_query($mysql,$query);

		if ($result){
			echo json_encode("0");
		}else{
            $query = "INSERT INTO `user`(`user_id`, `user_firstn`, `user_middlen`, `user_lastn`, `user_gender`, `user_level`, `username`, 
            `user_email`, `user_province`, `user_city`, `user_mobile`, `user_tele`, `user_password`) 
                    VALUES (NULL,'".$first."','".$middle."','".$last."','".$gender."','1','".$username."','".$email.
                            "','".$province."','".$city."','".$celnum."','".$ofnum."','".$password."')";
			$result = mysqli_query($mysql,$query);
			if($result){
                $query3 = "SELECT * FROM user WHERE username=".$username;
                $result = mysqli_query($mysql,$query3);
                $row = mysqli_fetch_row($result); 

                $query2 = "INSERT INTO `doctors`(`doctor_id`, `user_id`, `location_id`, `doc_specialization`, `medical_license`) 
                            VALUES (NULL,$row[0],[value-3],[value-4],[value-5])";
				echo json_encode("1");
			} else {
				echo json_encode("2");
			}
			
		}
	} else {
		echo json_encode("3");
	}

?>