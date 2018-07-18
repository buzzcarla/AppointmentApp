<?php 
    require_once('../connect.php');

    if(isset($_POST['dfname'])&&isset($_POST['dmname'])&&isset($_POST['duser'])&&isset($_POST['dpass'])
    &&isset($_POST['dlname'])&&isset($_POST['dcnum'])&&isset($_POST['donum'])&&isset($_POST['demail'])&&isset($_POST['ccode'])
    &&isset($_POST['dgender'])&&isset($_POST['pcode'])&&isset($_POST['dspecial'])&&isset($_POST['medli'])&&isset($_POST['clinics'])){
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
		$clinicarr = json_decode($_POST['clinics']);
        $license = $_POST['medli'];
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

                    for($i=0;$i<sizeof($clinicarr); $i++){
                        $query = "INSERT INTO `clinic`(`clinic_id`, `clinic_name`, `coordinates_x`, `coordinates_y`, `clinic_address`) 
                                VALUES (NULL,'".$clinicarr[$i]->clinname."','".$clinicarr[$i]->x."','".$clinicarr[$i]->y."','".$clinicarr[$i]->clinaddress."')";
                        $result = mysqli_query($mysql,$query);
                        
                        $query3 = "SELECT * FROM clinic WHERE clinic_name='".$clinicarr[$i]->clinname."' ORDER BY clinic_id DESC LIMIT 1";
                        $result = mysqli_query($mysql,$query3);
                        $row2 = mysqli_fetch_row($result); 
                       
                        $query2 = "INSERT INTO `location_clinic`(`location_id`, `clinic_id`, `doctor_id`, `schedule_start`, `schedule_end`, `schedule_type`) 
                                     VALUES (NULL,'".$row2[0]."','".$row[0]."','".$clinicarr[$i]->clinfrom."','".$clinicarr[$i]->clinto."','1')";
                        $result = mysqli_query($mysql,$query2);
                        
                    }
                    if($result){
                        echo json_encode("1");
                    } else {
                        echo json_encode("2");
                    }
                } else {
                    echo json_encode($row[0]);
                }
			
			} else {
				echo json_encode("2");
			}
			
		}
	} else {
		echo json_encode("3");
	}

?>