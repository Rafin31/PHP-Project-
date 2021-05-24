<?php
session_start();


require_once('../Model/post_food_db.php');

if (isset($_POST['submit'])) {
    $food_photo = $_FILES['image'];
    $product_name = $_POST['product_name'];
    $food_description = $_POST['food_description'];
    $price =  $_POST['price'];

    if (isset($_POST['radio'])) {
        $Availability = $_POST['radio'];
    }


    $filename = $food_photo['name'];
    $fileerror = $food_photo['error'];
    $filetmp = $food_photo['tmp_name'];
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');
    if (in_array($filecheck, $fileextstored)) {

        $destinationfile = '../Assets/upload/' . $filename;
        move_uploaded_file($filetmp, $destinationfile);
    }

    if ( empty($food_photo) || $product_name == "" || $food_description =="" || $price == "" ||  $Availability == "") {
        echo "Filled all the section..";
    } else {
        $post_food = [
            'image' => $filename,
            'product_name' => $product_name,
            'food_description' => $food_description,
            'price'   => $price,
            'Availability'   => $Availability
        ];
        $status = insertUser($post_food);

        if ($status) {
            header('location:../View/Foods.php');
        } else {
            echo "something wrong";
        }
    }
}
