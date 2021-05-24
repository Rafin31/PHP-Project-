<?php

session_start();
if ($_SESSION['status']) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Asset/css/style.css">
        <link rel="stylesheet" href="../Asset/css/buyerHomePage.css">
        <title> Welcome | Cloud Kitchen </title>

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
                <h1>Welcome To Bangladesh First Digital Cloud Kitchen</h1>
                <h3>Here you can Order Your favourate food and get Free Delivary at your home! </h3>
                <p> Get <span class="typingText"></span> <span class="cursor">&nbsp</span> </p>
            </div>

        </div>
    </body>
    <script src="../Asset/Js/script.js"></script>
    

    </html>

<?php

} else {
    header('location: ../view/login.php');
}
?>