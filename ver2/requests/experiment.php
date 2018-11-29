
<?php 
    require_once('../connect.php');
    define('TIMEZONE', 'Asia/Manila');
    date_default_timezone_set(TIMEZONE);

    $query = "SELECT * FROM user
            LEFT JOIN booking_list on booking_list.user_id = user.user_id
            WHERE booking_list.doctor_id ='2' 
            AND yearweek(DATE(booking_list.book_date), 1) = yearweek(DATE(NOW()), 1) 
            AND booking_list.book_stat = '2' 
            Group BY booking_list.booking_id
            ORDER BY booking_list.book_date ASC ";
	$res = mysqli_query($mysql,$query);
	if (mysqli_num_rows($res)!=0){
        while($row = mysqli_fetch_row($res)){
            $timestamp = strtotime($row[16]);
            $day = date('l',$timestamp);
            if($day == "Monday"){
                $time = date('H:i',$timestamp);
                if($time == "09:30"){
                    echo "here";
                }
            }
            
        }
		echo (json_encode(mysqli_fetch_all($res)));
	} else {
        echo json_encode('NONE');
    }
?>