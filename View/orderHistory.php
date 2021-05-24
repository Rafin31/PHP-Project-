<?php
require_once('../Modal/orderModal.php');
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
        <link rel="stylesheet" href="../Asset/css/orderStatus.css">
        <title> Order Status </title>

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

                <table align="center">
                    <tr>
                        <th>Order Id</th>
                        <th>Customer Id</th>
                        <th>Seller Id</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Unit price</th>
                        <th>Total Price</th>
                        <th>Delivary Boy</th>
                        <th>Order Time</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                    </tr>
                    <?php
                    $i = 0;
                    $orders = getOrderByID($_SESSION['user_id']);
                    for ($i = 0; $i != count($orders); $i++) {
                        if ($orders[$i]['order_status'] == "Delivared") {
                    ?>
                            <tr align="center">
                                <td> <?php echo  $orders[$i]['Order_id']  ?> </td>
                                <td> <?php echo  $orders[$i]['customer_id']  ?> </td>
                                <td> <?php echo  $orders[$i]['seller_id']  ?> </td>
                                <td> <?php echo  $orders[$i]['customer_name']  ?> </td>
                                <td> <?php echo  $orders[$i]['customer_number']  ?> </td>
                                <td> <?php echo  $orders[$i]['customer_address']  ?> </td>
                                <td> <?php echo  $orders[$i]['quantity']  ?> </td>
                                <td> <?php echo  $orders[$i]['unit_price']  ?> </td>
                                <td> <?php echo  $orders[$i]['total_price']  ?> </td>
                                <td> <?php echo  $orders[$i]['delivary_boy_name']  ?> </td>
                                <td> <?php echo  $orders[$i]['order_time']  ?> </td>
                                <td> <?php echo  $orders[$i]['order_date']  ?> </td>
                                <td> <?php echo  $orders[$i]['order_status']  ?> </td>
                            </tr>




                    <?php
                        }
                    }
                    ?>
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