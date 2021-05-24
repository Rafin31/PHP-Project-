<?php

session_start();
if ($_SESSION['state']) {
    require_once("../Model/userModel.php");

    $user_input = $_SESSION['user_name'];

    $users = getUserByUser_name($_SESSION['user_name']);

?>

    <!DOCTYPE html>

    <head>
        <title>Edit Profile </title>

        <script>
            function validation() {
                const name = document.forms['Edit_form']['name'].value;
                const user_name = document.forms['Edit_form']['user_name'].value;
                const email = document.forms['Edit_form']['email'].value;

                if (name == "" || user_name == "" || email == "") {
                    alert("Please fill all the fields");
                    return false;
                } else if (user_name.length < 3) {
                    alert("Please enter your user name");
                    return false;
                }

            }
        </script>

    </head>

    <body>
        <table align="center" width="700px" border="1" height="500px">
            <form name="Edit_form" method="post" onsubmit="return validation()" action="../Controller/edit_profile_validation.php?id=<?= $users['user_id'] ?>">
                <tr>
                    <td align="left" colspan="3">
                        <img width="20%" src=../Assets/logo.jpeg>
                        <div align="right">
                            Logged in as <a href="#" target="_blank"> <?php echo $_SESSION['user_name'] ?> &nbsp</a>
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
                        <a href="../View/Change_Password.php" target="_blank">Change Password</a>
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
                        <a href="../View/Transaction.php" target="_blank">Transaction History</a>
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td width="90%" align="center" colspan="3">
                        <table>
                            <tr>
                                <td>
                                    User Id :
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <input type="text" disabled name="user_id" value="<?php echo $users['user_id'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Name :
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="name" autocomplete="off" value="<?php echo $users['name'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td> User Name :</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="user_name" autocomplete="off" value="<?php echo $users['user_name'] ?>">
                                </td>
                            </tr>

                            <tr>
                                <td> Email :
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="email" name="email" value="<?php echo $users['email'] ?>">
                                </td>
                            </tr>



                        </table>

                        <div align="center">
                            <input type="submit" name="submit" value="submit">
                        </div>
            </form>
            </fieldset>
            </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <?php include('../Controller/Footer.php') ?>
                </td>
            </tr>
        </table>
        </td>
        </tr>
    </body>

    </html>
<?php
} else {
    header('location:../View/Login.php');
}
?>