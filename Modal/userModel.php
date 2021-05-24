<?php
	
	require_once('../Modal/db.php');

	function validateUser($username, $password){
		$conn = getConnection();
		$sql = "select * from users where user_name='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	     print_r($row);  
		if($row != NULL){
			return true;
		}else{
			return false;
		}
	}

	function insertUser($user){
		$conn = getConnection();
		$sql = "insert into users values('','{$user['name']}','{$user['username']}','{$user['password']}','{$user['role']}','{$user['email']}','null','null','null','null','null' )";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from users where user_id= '{$id}' ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getUserByUser_name($username){
		$conn = getConnection();
		$sql = "select * from users where user_name= '{$username}' ";
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

	function updateUser($user){
		$conn = getConnection();
		
		$sql = "update users set user_name='{$user['username']}', email='{$user['email']}', user_role='{$user['role']}', 
		user_address='{$user['address']}', user_phone_number ='{$user['phone_number']}', user_social_media='{$user['social_media']}', user_bio='{$user['bio']}' where user_id={$user['userid']}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
