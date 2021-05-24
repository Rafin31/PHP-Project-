<?php
session_start();
require_once('../Modal/userModel.php');

if (isset($_POST['submit'])) {

    $userid        = $_GET['id'];
    $username      = $_POST['user_name'];
    $name          = $_POST['name'];
    $email         = $_POST['email'];
    $phone_number  = $_POST['phone_number'];
    $address       = $_POST['address'];
    $bio           = $_POST['bio'];
    $social_media  = $_POST['social_media'];
    $role          =  'buyer';

    $user_name_length = strlen($username);
    $numlength = strlen((string)$phone_number);


    $word1 = "@";
    $word2 = "#";
    $word3 = "%";
    $word4 = "$";

    if ($name == "" || $email == "" || $username == "" || $phone_number == "" || $address == "" || $bio == "" || $social_media == "") {
        echo " Information Required ";
    } elseif (strpos($email, $word1) == false) {
        echo "Put valid Email";
    } elseif ($user_name_length < 3) {
        echo "username should be more than 2 words......";
    } elseif (!is_numeric($phone_number) || $numlength != 11) {
        echo "INVALID NUMBER";
    } else {

        $user = [
            'userid'      => $userid,
            'username'    => $username,
            'name'        => $name,
            'email'       => $email,
            'phone_number' => $phone_number,
            'address'     => $address,
            'bio'         => $bio,
            'social_media' => $social_media,
            'role'        => $role
        ];


        $status = updateUser($user);

        if ($status) {
            $_SESSION['username'] = $username;
            header('location: ../view/profile.php');
        } else {
            echo "Something Wrong";
        }
    }
}
