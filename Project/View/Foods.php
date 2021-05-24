<?php
session_start();
if ($_SESSION['state']) {
    require_once("../Model/post_food_db.php");

    $foods = getAllFood();
    $count = count($foods);


    $user_input = $_SESSION['user_name'];

?>
    <!DOCTYPE html>

    <head>
        <title>Post Food </title>
        <script src="../Assets/JS/ajax.js"></script>
    </head>

    <body>
        <table align="left"  width="1000px" height="700px">

            <tr>
                <td height="10px" align="left" colspan="3">
                    <img width="20%" src=../Assets/logo.jpeg><br>
                    <div>
                        Logged in as <a href="#" target="_blank"> <?php echo $_SESSION['user_name'] ?>&nbsp</a>
                        <a href="../View/Login.php" target="_blank">Logout</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="20%" align="center" rowspan="3">
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
                <td width="100%" align="center" rowsapn="3">
                    <form action="" method="post" style="margin: 50px;">

                        <input type="text" name="search" placeholder="search" onkeyup="ajax()" id="search">
                        <input type="button" name="submit" value="submit" onclick="ajax()">
                    </form>
                    <div id="foods">


                        <?php

                        $i = 0;
                        while ($i != $count) {
                        ?>

                            <img src="../Assets/upload/<?php echo $foods[$i]["food_photo"] ?>" width="30%">
                            <h3>Product Name: <?php echo $foods[$i]["product_name"] ?></h3>
                            <h4>Food Description:<?php echo $foods[$i]["food_description"] ?></h4>
                            <h3>Price:<?php echo $foods[$i]["price"] ?></h3>
                            <h4>Availability:<?php echo $foods[$i]["availability"] ?></h4>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <div id="search_result">

                    </div>
                </td>
            </tr>
    </body>

    </html>
<?php
} else {
    header('location:../View/Login.php');
}
?>