<?php
	
	require_once('db.php');

    function insertUser($information){
		$conn = getConnection(); 
		$sql = "insert into information values(' ' , '{$information['contact_info']}', '{$information['social_media']}' , '{$information['about_us']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function getUserByMore_info($contact_info){
		$conn = getConnection();
		$sql = "select * from information where contact_info='{$contact_info['contact_info']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
?>