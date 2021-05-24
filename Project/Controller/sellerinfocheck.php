<?php
session_start();
require_once('../Model/RestaurantInfoCheck.php');
    
if ( isset ( $_POST ['submit'] ) ) {
    $rest_name = $_POST ['rest_name'];
    $about_rest = $_POST ['about_rest'];
    if(isset($_POST['radio'])){
        $Type = $_POST ['radio']; 
    }
    if ( $rest_name =="" || $about_rest =="" || $Type=="" ){
     echo"Filled all the section..";
    }
     else{
        $seller_info = [ 
            'rest_name'=>$rest_name,
            'Type'=>$Type,
            'about_rest'=>$about_rest,
        ];    
        
        $status = insertUser ( $seller_info) ;


        if ($status){
       header('location: ../View/Login.php');

     }else
     {
         echo 'some error has been showing';
     }

   
}
}
?>
