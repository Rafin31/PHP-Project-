<?php
session_start();
require_once('../Model/userModel.php');

if (isset($_POST['submit'])) {

    $user_id = $_GET['id'];
    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $user_name_lenght = strlen($user_name);


    if ($name == "" || $email == "" || $user_name == "" ) {
        echo "Filled all the section..";
    } elseif ($user_name_lenght < 3) {
        echo "user name should be more than 3  charecters";
    } else {

        $users = [
            'user_id' => $user_id,
            'name' => $name,
            'email' => $email,
            'user_name' => $user_name,
        ];
         
        $status = updateUser ($users) ;

        if($status){

            $_SESSION['user_name'] = $user_name;
            header('location:../View/Login.php');
        }else{
            echo "Some error has been showing";
        }
    }
}
?>
