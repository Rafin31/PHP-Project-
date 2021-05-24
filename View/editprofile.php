<?php

session_start();
if ($_SESSION['status']) {

    require_once("../Modal/userModel.php");

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Asset/css/style.css">
        <link rel="stylesheet" href="../Asset/css/editProfile.css">
        <script src="../Asset/Js/editprofileValidation.js"></script>
        <title> Edit Profile </title>

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

                <div class="bottom" align='center'>
                    <?php
                    $user  = getUserByUser_name($_SESSION['username']);

                    ?>
                    <form name="edit_profile" onsubmit="return validation()" action="../Controller/editProfile.php?id=<?= $user['user_id'] ?>" method="post">

                        <table width='100%'>
                            <tr>
                                <td align="center">
                                    User Id :
                                </td>
                                <td>
                                    <input type="text" disabled name="user_id" value="<?php echo $user['user_id']  ?>"><br>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">
                                    Name:
                                </td>
                                <td>
                                    <input type="text" name="name" value="<?php echo $user['name']  ?>"><br>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">
                                    User Name :
                                </td>
                                <td>
                                    <input type="text" name="user_name" value="<?php echo $user['user_name']  ?>"><br>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">
                                    Email :
                                </td>
                                <td>
                                    <input type="text" name="email" value="<?php echo $user['email']  ?>"><br>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">
                                    Phone Number
                                </td>
                                <td>
                                    <input type="text" name="phone_number" value=" <?php echo $user['user_phone_number']  ?>"><br>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">
                                    Address
                                </td>
                                <td>
                                    <input type="text" name="address" value="<?php echo $user['user_address']  ?>"><br>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">
                                    Bio
                                </td>
                                <td>
                                    <input type="text" name="bio" value="<?php echo $user['user_bio']  ?>"><br>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">
                                    Spcial Media
                                </td>
                                <td>
                                    <input type="text" name="social_media" value="<?php echo $user['user_social_media']  ?>"><br>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">
                                    Role
                                </td>
                                <td>
                                    <input type="text" disabled name="role" value="<?php echo $user['user_role']  ?>">
                                </td>
                            </tr>
                        </table>

                        <input type="submit" name="submit" value="Confirm">
                    </form>




                </div>


            </div>

        </div>





    </body>

    </html>

<?php

} else {
    header('location: ../view/login.php');
}
?>