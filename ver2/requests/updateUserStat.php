<?php 
    require_once('../connect.php');
    if(isset($_POST['stat'])){
        list($stat, $id) = explode("_", $_POST['stat']);
        echo " ".$stat;
        $query = "UPDATE `user` 
                    SET `user_status`=".$stat." 
                    WHERE user.user_id =".$id;
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