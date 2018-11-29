<?php 
    require_once('../connect.php');
    define('TIMEZONE', 'Asia/Manila');
    date_default_timezone_set(TIMEZONE);

    $query = "SELECT userbook.user_mobile, doc.user_firstn, doc.user_lastn FROM `booking_list` 
            LEFT JOIN doctors on booking_list.doctor_id = doctors.doctor_id
            LEFT JOIN user as doc on doc.user_id = doctors.user_id
            LEFT JOIN user as userbook on userbook.user_id = booking_list.user_id
            WHERE `book_date` = (NOW()-SECOND(NOW())) + INTERVAL 1 HOUR AND booking_list.book_stat = 2
            GROUP BY `booking_id`";
	$res = mysqli_query($mysql,$query);
	if (mysqli_num_rows($res)!=0){
		echo (json_encode(mysqli_fetch_all($res)));
	} else {
        echo json_encode('NONE');
    }
?>