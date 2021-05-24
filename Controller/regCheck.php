<?php
session_start();
require_once('../Modal/userModel.php');

if (isset($_POST['submit'])) {

	$username 	= $_POST['user_name'];
	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];
	$repass 	= $_POST['re-type-password'];
	$role       = $_POST['role'];

	$user_name_length = strlen($username);
	$password_length = strlen($password);

	$word1 = "@";
	$word2 = "#";
	$word3 = "%";
	$word4 = "$";

	if ($name == "" || $email == "" || $username == "" || $password == "" || $repass == "" || $role == "") {
		echo " Information Required ";
	} elseif (strpos($email, $word1) == false) {
		echo "Put valid Email";
	} elseif ($password_length < 8) {
		echo "password should be more than 8 words......";
	} elseif ($password != $repass) {
		echo "Password didn't match with confirm Password ";
	} elseif (strpos($password, $word1) == false && strpos($password, $word2) == false && strpos($password, $word3) == false && strpos($password, $word4) == false) {
		echo "Password Should contain special cherecters";
	} elseif ($user_name_length < 3) {
		echo "username should be more than 2 words and password should be more than 8 words......";
	} else {

		$user = [
			'name'      => $name,
			'username'	=> $username,
			'email'		=> $email,
			'password'	=> $password,
			'role'		=> $role
		];

		setcookie("username", $username, time() + 3600, '/');
		setcookie("password", $password, time() + 3600, '/');
		
		$status = insertUser($user);

		if ($status) {
			header('location: ../view/login.php');
		} else {
			echo "Db error";
		}
	}
}
