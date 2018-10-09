<?php 
    require_once('../connect.php');
    if(isset($_POST['stat'])){
        list($stat, $id) = explode("_", $_POST['stat']);
        echo " ".$stat;
        $query = "UPDATE `booking_list` 
                    SET `book_stat`=".$stat." 
                    WHERE booking_list.booking_id =".$id;
        $res = mysqli_query($mysql,$query);
        if($res){
            echo json_encode('1');
        }else{
            echo json_encode('0');
        }
    } else{
        echo json_encode('2');
    }
?>