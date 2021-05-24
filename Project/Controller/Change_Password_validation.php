<?php
session_start();
require_once('../Model/userModel.php');

if (isset($_POST['submit'])) {
            
    $change_password = $_POST ['change_password'];
    $confirm_password = $_POST ['confirm_password'];

    $password_name_length = strlen($change_password);

    $word1 = "#";
    $word2 = "@";
    $word3 = "%";
    $word4 = "$";

    if ( $change_password =="" || $confirm_password =="" ){
        echo"Filled all the section..";
   }
   elseif ( $change_password != $confirm_password) {
           echo "Given Password didn't match";
       }
       
       elseif ( strpos( $change_password ,$word1) == false && strpos( $change_password ,$word2) == false && strpos( $change_password ,$word3) == false && strpos( $change_password ,$word4) == false) {
       echo "Password should contain at least 1 special character";
       }else {

        $password = [
            'change_password' => $change_password,
            'user_name' => $_SESSION['user_name'],
        ];
        $status = updatePassword ($password) ;

        if($status){

            header('location:../View/Login.php');
        }else{
            echo "Some error has been showing";
        }
    }
       
}

