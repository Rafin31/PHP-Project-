<?php

session_start();
if ($_SESSION['state']) {
    require_once("../Model/userModel.php");

    $user_input = $_SESSION['user_name'];

?>
    <!DOCTYPE html>

    <head>
        <title>Post Food </title>
    </head>

    <body>
        <table align="center" width="700px" border="1" height="500px">
            <form method="post" action="../Controller/post_foodcheck.php" enctype="multipart/form-data">
                <tr>
                    <td align="left" colspan="3">
                        <img width="20%" src=../Assets/logo.jpeg>
                        <div align="right">
                            Logged in as <a href="#" target="_blank"> <?php echo $_SESSION['user_name'] ?>&nbsp</a>
                            <a href="../View/Login.php" target="_blank">Logout</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="30%" align="center" rowspan="3">
                        <a href="../Controller/Profile.php" target="_blank">Profile</a>
                        <hr>
                        <a href="../Controller/Edit_Profile.php" target="_blank">Edit Profile</a>
                        <hr>
                        <a href="../Controller/Change_Password.php" target="_blank">Change Password</a>
                        <hr>
                        <a href="../View/Post_Food.php" target="_blank">Post Food</a>
                        <hr>
                        <a href="../View/Foods.php" target="_blank">Foods</a>
                        <hr>
                        <a href="Update_availability.php" target="_blank">Update Availability</a>
                        <hr>
                        <a href="../View/More_Information.php" target="_blank">More Information</a>
                        <hr>
                        <a href="Order_Information.php" target="_blank">Order Information</a>
                        <hr>
                        <a href="../View/Transaction.php" target="_blank">Transaction</a>
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td width="70%" align="center" rowsapn="3">
                        <table>
                            <tr>
                                <td>Food Photo</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="file" name="image">
                                </td>
                            </tr>
                            <tr>
                                <td>Product Name</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="product_name" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Food Description</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="food_description" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Price</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="number" name="price">
                                </td>
                            </tr>
                            <tr>
                                <td>Availability</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="radio" value="Available">Available &nbsp
                                    <input type="radio" name="radio" value="Not Available">Not Available
                                </td>
                            </tr>
                            <tr>

                                <td align="left">
                                    <input type="submit" name="submit" value="submit">
                                </td>
                            </tr>


                        </table>
                    </td>
                </tr>

                <tr></tr>
                <tr>
                    <td colspan="3" align="center">
                        <?php include('../Controller/Footer.php') ?>
                    </td>
                </tr>
            </form>

        </table>

    </body>

    </html>

<?php
} else {
    header('location:../View/Login.php');
}
?>