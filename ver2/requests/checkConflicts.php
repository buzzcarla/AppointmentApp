<?php 
require_once('../connect.php');
$times = array_fill(0,12, 0);
if(isset($_POST['datesel']) && isset($_POST['docid']))
{
    $datefrom = $_POST['datesel'] .' 00:00:00';
    $dateto = $_POST['datesel'] .' 23:59:59';
    $query = "SELECT * FROM booking_list
            WHERE booking_list.doctor_id=".$_POST['docid']." 
                    AND (booking_list.book_date BETWEEN '".$datefrom."' AND '".$dateto."')
            ORDER BY booking_list.book_date ASC";
    $res = mysqli_query($mysql,$query);
    if (mysqli_num_rows($res)!=0){
        while($row = mysqli_fetch_row($res))
        {
            $time = date("H:i",strtotime($row[3]));
           
            if($time == "09:30")
            {
                $times[0] = 1;
            } 
            if($time == "10:00")
            {
                $times[1] = 1;
               
            }
           if($time == "10:30")
            {
                $times[2] = 1;
            
            }    
            if($time == "11:00")
            {
                $times[3] = 1;
            }
            if($time == "11:30")
            {
                $times[4] = 1;
            }
            
            if($time == "12:00")
            {
                $times[5] = 1;
            }
            
            if($time == "01:30")
            {
                $times[6] = 1;
            }
            
            if($time == "02:00")
            {
                $times[7] = 1;
            }
            
            if($time == "02:30")
            {
                $times[8] = 1;
            }
            
            if($time == "03:00")
            {
                $times[9] = 1;
            }
            
            
            if($time == "03:30")
            {
                $times[10] = 1;
            }
           
            if($time == "04:00")
            {
                $times[11] = 1;
            }
            
           
        }
        echo (json_encode($times));
    } else {
    echo json_encode($times);
    }
} 
else 
{
    echo json_encode($times);
}


?>