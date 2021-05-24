<?php
require_once('../Model/db.php');
function insertUser($post_food){
		$conn = getConnection();
		$sql = "insert into post_food values('{$post_food['image']}', '{$post_food['product_name']}' , '{$post_food['food_description']}' ,  '{$post_food['price']}' , '{$post_food['Availability']}' , ' ' )";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllFood(){
		$conn = getConnection();
		$sql = "select * from post_food";
		$result = mysqli_query($conn, $sql);
		$food = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($food, $row);
		}

		return $food;
	}
?>