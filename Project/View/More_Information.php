<?php

session_start();
$user_input = $_SESSION['user_name'];
?>

<!DOCTYPE html>

<head>
    <title>More Information </title>
</head>

<body>
    <table align="center" width="700px" border="1" height="500px">
        <form action="../Controller/More_info_check.php" method="post">
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
                            <td>Contact Information</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="contact_info" value="" autocomplete="off"></td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>Social Media</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="social_media" value="" autocomplete="off"></td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>About Us:</td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="about_us" cols="30" rows="3" autocomplete="off"></textarea>
                            </td>
                        </tr>


                    </table>
                    <div align="center">
                        <input type="submit" name="submit" value="submit">
                    </div>
            <tr>
                <td colspan="3" align="center">
                    <?php include('../Controller/Footer.php') ?>
                </td>
            </tr>

        </form>
    </table>
</body>

</html>