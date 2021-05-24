<?php

session_start();
$user_input = $_SESSION['user_name'];
?>
<!DOCTYPE html>

<head>
    <title>Transaction </title>

</head>

<body>
    <table align="center" width="700px" border="1" height="500px">
        <tr>
            <td align="left" colspan="3">
                <img width="20%" src=../Assets/logo.jpeg>
                <div align="right">
                    Logged in as <a href="#" target="_blank"> <?php echo $_SESSION['user_name'] ?> &nbsp</a>
                    <a href="../View/Login.html" target="_blank">Logout</a>
                </div>
            </td>
        </tr>
        <?php
        include('../Controller/Side.php');
        ?>
        <tr>
            <td width="70%" align="center" colsapn="3">

                <table>
                    <tr>
                        <td>Order Id:</td>
                        <td><input type="text" name="id" value=""></td>
                    </tr>
                    <tr>
                        <td><b>Payment Method</b></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="radio" value="bkash">Bkash </td>
                        <td><input type="radio" name="radio" value="Cash">Cash </td>
                    </tr>
                    <tr>
                </table>
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td colspan="3" align="center">
                <?php include('../Controller/Footer.php') ?>
            </td>
        </tr>
    </table>
</body>

</html>