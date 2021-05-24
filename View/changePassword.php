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
        <link rel="stylesheet" href="../Asset/css/changePassword.css">
        <title>Change Password </title>

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

            <table>
                <form action="" method="post">

                <tr>
                    <td>Current Password</td>
                    <td><input type="password" name="current_password" id=""></td>
                </tr>

                <tr>
                    <td>New Password</td>
                    <td><input type="password" name="new_password" id=""></td>
                </tr>
                <tr>
                    <td>Retype Password</td>
                    <td><input type="password" name="re_password" id=""></td>
                </tr>
                <tr>
                    <td colspan="2" > <input type="submit" name="Confirm" value="Confirm"> </td>
                </tr>

                
                </form>
            </table>

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