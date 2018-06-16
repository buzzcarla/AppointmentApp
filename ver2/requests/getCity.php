<?php 
    require_once('../connect.php');
    
    $query = "SELECT * FROM refcity where provCode = ".$_GET['pcode']." ORDER BY citymunDesc ASC";
	$res = mysqli_query($mysql,$query);
	if ($res){
		echo (json_encode(mysqli_fetch_all($res)));
	} 

?>