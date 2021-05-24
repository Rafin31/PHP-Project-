<?php

session_start();
if ($_SESSION['status']) {

    require_once ("../Modal/userModel.php");

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Asset/css/style.css">
        <link rel="stylesheet" href="../Asset/css/profile.css">
        <title> Profile </title>

    </head>

    <body>
        <!--************************ navbar****************** -->
        <?php
        require_once("../View/navbar.php");
        ?>




        <div class="container">


            <!-- **************************side menu********************************  -->

            <?php
            require_once("../View/sideMenu.php");
            ?>

            <!-- ***************************Content********************************** -->

            <div class="content">

                <div class="top">
                    <img src="../Asset/Photos/avatar.png">
                </div>

                <div class="bottom">
                    <?php
                    $user  = getUserByUser_name($_SESSION['username'] );
                  
                    ?>

                    <h4>User ID :  <?php echo $user['user_id']  ?>  </h4>
                    <h4>Name : <?php echo $user['name']  ?> </h4>
                    <h4>User Name : <?php echo $user['user_name']  ?> </h4>
                    <h4>Email : <?php echo $user['email']  ?> </h4>
                    <h4>Phone Number : <?php echo $user['user_phone_number']  ?> </h4>
                    <h4>Address : <?php echo $user['user_address']  ?> </h4>
                    <h4>Bio : <?php echo $user['user_bio']  ?> </h4>
                    <h4>Social Media Links : <?php echo $user['user_social_media']  ?> </h4>
                    <h4>Role : <?php echo $user['user_role']  ?> </h4>

                </div>


            </div>

        </div>



        <script src="../Asset/Js/script.js"></script>


    </body>

    </html>

<?php

} else {
    header('location: ../view/login.php');
}
?>