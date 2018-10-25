<?php 
    require_once('../connect.php');
    if(isset($_POST['dfname'])&&isset($_POST['dmname'])&&isset($_POST['duser'])&&isset($_POST['dpass'])
    &&isset($_POST['dlname'])&&isset($_POST['dcnum'])&&isset($_POST['donum'])&&isset($_POST['demail'])
    &&isset($_POST['dgender'])&&isset($_POST['dspecial'])&&isset($_POST['medli'])
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
        $x = $_POST['lat'];
        $clinadd = $_POST['address'];
        $y = $_POST['long'];
      
        $gender = $_POST['dgender'];
        $specialization = $_POST['dspecial'];		
		$clinicarr = json_decode($_POST['clinics']);
       
        $query = "SELECT * FROM user WHERE username='".$username."' OR (user_firstn ='".$first."' AND user_middlen ='".$middle."' AND user_lastn ='".$last."') OR user_email ='".$email."'";
		$result = mysqli_query($mysql,$query);
        
       


		if (mysqli_fetch_row($result)){
            echo json_encode(mysqli_fetch_row($result));
           // echo 'waht';
		}else{
            //uploading
            $file = $_FILES['image'];
            $prof = $_FILES['profpic'];
            
            $fileName = $_FILES['image']['name'];
            $fileTmpName= $_FILES['image']['tmp_name'];
            $fileSize = $_FILES['image']['size'];
            $fileError = $_FILES['image']['error'];
            $fileType = $_FILES['image']['type'];

            $fileExtenstion = explode('.',$fileName);
            $profExtenstion = explode('.',$_FILES['profpic']['name']);
            $actualExtenstion = strtolower(end($fileExtenstion));
            
            $profActualExtenstion = strtolower(end($profExtenstion));
            $allowedExt = array('jpg','png','jpeg','pdf'); 
            
            if(in_array($actualExtenstion,$allowedExt)){
                if($fileError == 0){
                    if($fileSize < 5000000 && $_FILES['profpic']['size'] < 5000000){  //less than 5mb  image
                        $newFileName = uniqid();
                        $newProfPicName = uniqid();
                        $newProfPicName  =  $newProfPicName .".".$profActualExtenstion;
                        $newFileName = $newFileName.".".$actualExtenstion;
                        $fileDestination = "../uploads/".$newFileName;
                        move_uploaded_file($fileTmpName, $fileDestination);   //done uploading
                        $fileDestination = "../uploads/".$newProfPicName;
                        move_uploaded_file($_FILES['profpic']['tmp_name'], $fileDestination);   //done uploading
                        $query = "INSERT INTO `user`(`user_id`, `user_firstn`, `user_middlen`, `user_lastn`, `user_gender`, 
                        `user_level`, `username`, `user_email`,`user_mobile`, `user_tele`, `user_password`,`user_status`) 
                                VALUES (NULL,'".$first."','".$middle."','".$last."','".$gender."','1','".$username."','".$email.
                                        "','".$celnum."','".$ofnum."','".$password."','0')";
                        $result = mysqli_query($mysql,$query);
                        
                        if($result){
                            $query3 = "SELECT * FROM user WHERE username='".$username."'";
                            $result = mysqli_query($mysql,$query3);
                            $row = mysqli_fetch_row($result);                     
                            $query2 = "INSERT INTO `doctors`(`doctor_id`, `user_id`, `doc_specialization`, `medical_license`, `medical_evidence`,`doc_profpic`) 
                                        VALUES (NULL,'".$row[0]."','".$specialization."','".$license."','".$newFileName."','".$newProfPicName."')";
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
                                    
                                    header("Location:../index.php?register_suc=1");
                                    exit();
                                } else {
                                    echo json_encode("2");
                                }
                            } else {
                                echo json_encode("2");
                            }
                        } else {
                            echo json_encode("2");
                        }

                    } else {
                        echo json_encode("Too big image" . $fileSize);
                    }
                }else {
                    echo json_encode("Error in uploading the file");
                }
            }else {
                echo json_encode("Extenstion now allowed");
            }
            
		}
	} else {
		echo json_encode("3");
	}
?>