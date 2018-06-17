<?php 
    require_once('../connect.php');

    $query = "SELECT * FROM doctors where doc_user = '".$_GET['user']."' AND doc_pass='".$_GET['pass']."' LIMIT 1";
	$res = mysqli_query($mysql,$query);
	if ($res){
        
       
        $row = mysqli_fetch_row($res); 
        if($row == null){
            echo json_encode('3');
        } else {
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
            echo json_encode('1');
        }
            

       
	} else {
        echo json_encode('2');
    }

?>