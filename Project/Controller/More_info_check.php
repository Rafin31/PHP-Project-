<?php


session_start();
require_once('../Model/More_info_checkdb.php');





if (isset($_POST['submit'])) {
   $contact_info = $_POST['contact_info'];
   $social_media = $_POST['social_media'];
   $about_us = $_POST['about_us'];

   if ($contact_info == "" || $social_media == "" || $about_us == "") {
      echo "Filled all the section..";
   } else {

      $information = [
         
         'contact_info' => $contact_info,
         'social_media' => $social_media,
         'about_us' => $about_us,


      ];
      $status = insertUser($information);

      if ($status) {
         header('location:../Controller/More_info_show.php');
      } else {
         echo "Some error has been showing";
      }
   }
}


?>
