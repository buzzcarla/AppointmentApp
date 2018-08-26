<?php 
    require_once('../connect.php');

    $query = "SELECT * FROM user where username = '".$_POST['user']."' AND user_password='".$_POST['pass']."' LIMIT 1";
	$res = mysqli_query($mysql,$query);
	if ($res){
        
       
        $row = mysqli_fetch_row($res); 
        if($row == null){
            echo json_encode('3');
        } else {
            $query1 = "SELECT * FROM user 
            LEFT JOIN FROM doctors ON user.user_id = doctor.user_id
            WHERE user.user_id = ".$row[0];

            $res1 = mysqli_query($mysql,$query1);
            if($res1){
                $row1 = mysqli_fetch_row($res1); 
            } 
           
            session_start();
            $_SESSION['docid'] = $row[0];
            $_SESSION['username'] = $row[11];
            $_SESSION['fname'] = $row[1];
            $_SESSION['lname'] = $row[3];
            $_SESSION['mname'] = $row[2];
            $_SESSION['specialization'] = $row[4];
            $_SESSION['city'] = $row[5];
            $_SESSION['prov'] = $row[6];
            $_SESSION['mobile'] = $row[7];
            $_SESSION['office'] = $row[8];
            $_SESSION['email'] = $row[9];
            $_SESSION['stat'] = $row[12];
            echo json_encode($row1);
        }
            

       
	} else {
        echo json_encode('2');
    }

?>