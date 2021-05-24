<?php
	session_start();
	require_once('../Modal/userModel.php');
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['user_name'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Give Username and Password";
		}else{

			$status = validateUser($username, $password);
				
			if($status){
				$user = getUserByUser_name($username);
			    $_SESSION['user_id'] =  $user['user_id'] ;
				$_SESSION['status'] = true;
				$_SESSION['username'] = $username;
				header('location: ../View/buyerHomepage.php');
			}else{
				echo "No user Found";
			}
		}
	}
?>