<?php

     session_start();
     require_once('../Model/userModel.php');
if ( isset ( $_POST ['submit'] ) ) {

    $user_name = $_POST ['user_name'];
    $password = $_POST ['password'];


    if( $user_name == "" || $password == ""){
      echo "please fill all the fields..";
    }
    else{
      
      $status = validateUser($user_name, $password) ;    
      
      if($status){
        $_SESSION['state']= true  ;
        $_SESSION['user_name'] = $user_name ;
      
        header('location:../controller/Logged_IN.php');
      }
      
    else{
    echo "Username and password didin't match";

  }
 }
}
?>