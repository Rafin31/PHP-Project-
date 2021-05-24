<?php

session_start();
$user_input = $_SESSION['user_name'];
?>

<!DOCTYPE html>

<head>
    <title>Change password </title>
</head>

<body>
    <table align="center" width="700px" border="1" height="500px">
        <form action="../Controller/Change_Password_validation.php" method="post">
            <tr>
                <td align="left" colspan="3">
                    <img width="20%" src=../Assets/logo.jpeg>
                    <div align="right">
                        Logged in as <a href="#" target="_blank"> <?php echo $_SESSION['user_name'] ?> &nbsp</a>
                        <a href="../View/Login.php" target="_blank">Logout</a>
                    </div>
                </td>
            </tr>
            <?php
            include('../Controller/Side.php');
            ?>
            <tr>
                <td width="90%" align="center" colspan="3">
                    <table>
                        <tr>
                            <td>Change Password</td>
                        </tr>
                        <tr>
                            <td><input type="password" name="change_password" value=""></td>
                        </tr>
                        <tr>
                            <td>Confirm Password</td>
                        </tr>
                        <tr>
                            <td><input type="password" name="confirm_password" value=""></td>
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