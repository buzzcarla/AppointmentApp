<?php 
    require_once('../connect.php');
    
    $query = "SELECT * FROM refprovince ORDER BY provDesc ASC";
	$res = mysqli_query($mysql,$query);
	if ($res){
		echo (json_encode(mysqli_fetch_all($res)));
	} 

?>