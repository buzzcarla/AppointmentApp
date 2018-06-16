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
        $province = $_POST['pcode'];
        $specialization = $_POST['dspecial'];
		$query = "SELECT * FROM doctors WHERE doc_user=".$username." OR (doc_fname =".$first." AND doc_mname =".$middle." AND doc_lname =".$last.")";
		

		$result = mysqli_query($mysql,$query);

		if ($result){
			echo json_encode("0");
		}else{
            $query = "INSERT INTO `doctors`(`doctor_id`, `doc_fname`, `doc_mname`, `doc_lname`, `doc_specialization`, 
                                            `doc_city`, `doc_province`, `doc_mobile`, `doc_officeno`, `doc_email`,
                                             `doc_user`, `doc_pass`,`doc_stat`) 
                    VALUES (NULL,'".$first."','".$middle."','".$last."','".$specialization."','".$city."','".$province.
                            "','".$celnum."','".$ofnum."','".$email."','".$username."','".$password."',1)";
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