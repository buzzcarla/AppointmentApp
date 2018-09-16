<?php 
    require_once('../connect.php');
    define('TIMEZONE', 'Asia/Manila');
    date_default_timezone_set(TIMEZONE);
    if(isset($_POST['userid'])&&isset($_POST['docid'])&&isset($_POST['bookdate'])){
        $uid = $_POST['userid'];
        $did = $_POST['docid'];
        $bd = $_POST['bookdate'];
        $type = $_POST['type'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $query = "SELECT * FROM booking_list WHERE user_id='".$uid."' AND doctor_id ='".$did."'";
        $result = mysqli_query($mysql,$query);
        $bd = intval($bd);
        $row1 = mysqli_fetch_row($result);
        
        if( $row1  == null){
            $query1 = "INSERT INTO `booking_list`(`booking_id`, `user_id`, `doctor_id`, `book_date`, `book_stat`, `booking_type`, `booking_fname`, `booking_lname`) 
            VALUES (NULL,'".$uid."','".$did."','".date('Y-m-d H:i:s',$bd)."','1','".$type."','".$fname."','".$lname."')";
			$result = mysqli_query($mysql,$query1);
			if($result){
              
                echo json_encode("1");
			
			} else {
				echo json_encode("2");
			}
        } else {
            echo json_encode("3");
        }
    } else {
        echo json_encode("4");
    }
?>