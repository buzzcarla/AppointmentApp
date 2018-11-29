<?php 
    require_once('../connect.php');
    if(isset($_POST['stat'])){
        list($stat, $id) = explode("_", $_POST['stat']);
       
        $query = "UPDATE `user` 
                    SET `user_status`=".$stat." 
                    WHERE user.user_id =".$id;
        $res = mysqli_query($mysql,$query);
        if($res){
            echo json_encode('Update Successfully');
        }else{
            echo json_encode('Failed to Update');
        }
    } else{
        echo json_encode('Fields are missing');
    }
?>