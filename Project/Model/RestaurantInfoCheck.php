<?php
	
	require_once('db.php');

    function insertUser($seller_info){
		$conn = getConnection(); 
		$sql = "insert into restaurant_info values('{$seller_info['rest_name']}', '{$seller_info['Type']}' , '{$seller_info['about_rest']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>