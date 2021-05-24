<?php
	
	require_once('../Modal/db.php');


	function getProductByID($id){
		$conn = getConnection();
		$sql = "select * from product_list where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	function getProductByname($name){
		$conn = getConnection();
		$sql = "select * from product_list where product_name ='{$name}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from product_list";
		$result = mysqli_query($conn, $sql);
		$product = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($product, $row);
		}

		return $product;
	}





?>