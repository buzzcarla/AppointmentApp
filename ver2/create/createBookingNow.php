<?php 
    require_once('../connect.php');

    if(isset($_POST['userid'])&&isset($_POST['docid'])&&isset($_POST['bookdate'])){
        $uid = $_POST['userid'];
        $did = $_POST['docid'];
        $bd = $_POST['bookdate'];
      
        $query = "SELECT * FROM booking_list WHERE user_id=".$uid."AND doctor_id =".$did;
        $result = mysqli_query($mysql,$query);
        
        if(!$result){
            
            $query1 = "INSERT INTO `booking_list`(`booking_id`, `user_id`, `doctor_id`, `book_date`, `book_stat`)
                        VALUES (NULL,'".$uid."','".$did."','".date('Y-m-d H:i:s',$bd)."','1')";
			$result = mysqli_query($mysql,$query1);
			if($result){
              
                echo json_encode("1");
			
			} else {
				echo json_encode("2");
			}
        } else {
            echo json_encode("3");
        }
    }
?>