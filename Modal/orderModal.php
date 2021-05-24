<?php
	
	require_once('../Modal/db.php');


    function insertOrder($order){
		$conn = getConnection();
		$sql = "insert into orders values( '', '{$_SESSION['user_id']}'  ,'{$order['seller_id']}' ,  '{$order['Name']}' ,'{$order['product_name']}' , '{$order['number']}', '{$order['Address']}', '{$order['qantity']}', '{$order['unit_price']}', '{$order['total_price']}', 'Raju', '{$order['order_time']}', '{$order['order_date']}', 'Pending' )";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getOrderByID($id){
		$conn = getConnection();
		$sql = "select * from orders where customer_id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$orders = [];
		while ($row = mysqli_fetch_assoc($result)) {
			 	array_push($orders, $row);
			 }
		return $orders;

	}
	function getOrdertByname($name){
		$conn = getConnection();
		$sql = "select * from orders where product_name ='{$name}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllOrder(){
		$conn = getConnection();
		$sql = "select * from orders";
		$result = mysqli_query($conn, $sql);
		$product = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($product, $row);
		}

		return $product;
	}





?>