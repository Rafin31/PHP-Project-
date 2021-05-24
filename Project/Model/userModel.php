<?php
	
	require_once('db.php');

	function validateUser($user_name, $password){
		$conn = getConnection();
		$sql = "select * from users where user_name='{$user_name}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function insertUser($users){
		$conn = getConnection();
		$sql = "insert into users values('', '{$users['name']}', '{$users['user_name']}' , '{$users['password']}' , '{$users['Role']}' , '{$users['email']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){
		$conn = getConnection();
		$sql = "select * from users where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getUserByUser_name($user_name){
		$conn = getConnection();
		$sql = "select * from users where user_name='{$user_name}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function updateUser($users){
		$conn = getConnection();
$sql = "update users set name='{$users['name']}', user_name='{$users['user_name']}',email='{$users['email']}' where user_id={$users['user_id']}";	
if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updatePassword($password){
		$conn = getConnection();
$sql = "update users set password='{$password['change_password']}' where user_name='{$password['user_name']}'";	
if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>