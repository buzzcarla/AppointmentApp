<?php 
    require_once('../connect.php');

    if(isset($_POST['dfname'])&&isset($_POST['dmname'])&&isset($_POST['duser'])&&isset($_POST['dpass'])
    &&isset($_POST['dlname'])&&isset($_POST['dcnum'])&&isset($_POST['donum'])&&isset($_POST['demail'])&&isset($_POST['ccode'])
    &&isset($_POST['dgender'])&&isset($_POST['pcode'])&&isset($_POST['dspecial'])&&isset($_POST['medli'])&&isset($_POST['clinics'])
&&isset($_POST['lat'])&&isset($_POST['long'])&&isset($_POST['clinname'])&&isset($_POST['address'])&&isset($_POST['from'])&&isset($_POST['to'])){
		$username = $_POST['duser'];
		$password = $_POST['dpass'];
        $first = $_POST['dfname'];
        $middle = $_POST['dmname'];
        $last=	$_POST['dlname'];
        $clinfrom = $_POST['from'];
        $clinto = $_POST['to'];
        $celnum = $_POST['dcnum'];
        $ofnum = $_POST['donum'];
        $email = $_POST['demail'];
        $city = $_POST['ccode'];
        $x = $_POST['lat'];
        $clinadd = $_POST['address'];
        $y = $_POST['long'];
        $clinicname = $_POST['clinname'];
        $gender = $_POST['dgender'];
        $province = $_POST['pcode'];
        $specialization = $_POST['dspecial'];
		$query = "SELECT * FROM user WHERE username='".$username."' OR (user_firstn ='".$first."' AND user_middlen ='".$middle."' AND user_lastn ='".$last."') OR user_email ='".$email."'";
		$clinicarr = json_decode($_POST['clinics']);
        $license = $_POST['medli'];
		$result = mysqli_query($mysql,$query);

		if ($result){
			echo json_encode($result);
		}else{
            $query = "INSERT INTO `user`(`user_id`, `user_firstn`, `user_middlen`, `user_lastn`, `user_gender`, `user_level`, `username`, 
            `user_email`, `user_province`, `user_city`, `user_mobile`, `user_tele`, `user_password`) 
                    VALUES (NULL,'".$first."','".$middle."','".$last."','".$gender."','1','".$username."','".$email.
                            "','".$province."','".$city."','".$celnum."','".$ofnum."','".$password."')";
			$result = mysqli_query($mysql,$query);
			if($result){
                $query3 = "SELECT * FROM user WHERE username='".$username."'";
                $result = mysqli_query($mysql,$query3);
                $row = mysqli_fetch_row($result); 

                $query2 = "INSERT INTO `doctors`(`doctor_id`, `user_id`, `doc_specialization`, `medical_license`) 
                            VALUES (NULL,'".$row[0]."','".$specialization."','".$license."')";
                $result = mysqli_query($mysql,$query2);

                if($result){
                    $query3 = "SELECT * FROM doctors WHERE user_id='".$row[0]."'";
                    $result = mysqli_query($mysql,$query3);
                    $row = mysqli_fetch_row($result); 

                    
                    $query = "INSERT INTO `clinic`(`clinic_id`, `clinic_name`, `coordinates_x`, `coordinates_y`, `clinic_address`) 
                            VALUES (NULL,'".$clinicname."','".$x."','".$y."','".$clinadd."')";
                    $result = mysqli_query($mysql,$query);
                    
                    $query3 = "SELECT * FROM clinic WHERE clinic_name='".$clinicname."' ORDER BY clinic_id DESC LIMIT 1";
                    $result = mysqli_query($mysql,$query3);
                    $row2 = mysqli_fetch_row($result); 
                   
                    $query2 = "INSERT INTO `location_clinic`(`location_id`, `clinic_id`, `doctor_id`, `schedule_start`, `schedule_end`, `schedule_type`) 
                                 VALUES (NULL,'".$row2[0]."','".$row[0]."','".$clinfrom."','".$clinto."','1')";
                    $result = mysqli_query($mysql,$query2);
                    
                
                    if($result){
                        echo json_encode("1");
                    } else {
                        echo json_encode("2");
                    }
                } else {
                    echo json_encode("2");
                }
			
			} else {
				echo json_encode("2");
			}
			
		}
	} else {
		echo json_encode("3");
	}

?>