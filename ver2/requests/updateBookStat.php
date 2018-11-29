<?php 
    require_once('../connect.php');
    if(isset($_POST['stat'])){
        list($stat, $id) = explode("_", $_POST['stat']);
        
        $query = "UPDATE `booking_list` 
                    SET `book_stat`=".$stat." 
                    WHERE booking_list.booking_id =".$id;
        $res = mysqli_query($mysql,$query);
        if($res){
            $query1 = "SELECT user_firstn,user_lastn,user_mobile,book_stat FROM booking_list
                        LEFT JOIN user on user.user_id = booking_list.user_id
                        WHERE booking_id =".$id."
                        GROUP BY booking_list.booking_id";

            $res1 = mysqli_query($mysql,$query1);
            echo json_encode(mysqli_fetch_array($res1));
        }else{
            echo json_encode('0');
        }
    } else{
        echo json_encode('2');
    }
?>