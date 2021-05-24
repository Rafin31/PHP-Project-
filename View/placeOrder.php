<?php

session_start();
if ($_SESSION['status']) {
   
    require_once('../Modal/productModel.php');

    $product_name = $_GET['name'];
    $seller_id    = $_GET['seller_id'];
    $product = getProductByname($product_name);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Asset/css/style.css">
        <link rel="stylesheet" href="../Asset/css/placeOrder.css">

        <title> Place Order </title>

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
                <div class="product">
                    <img src="../Asset/Photos/<?php echo $product['product_photo']
                                                ?>" alt="">
                    <h3>Name : <?php echo $product['product_name'] ?></h3>
                    <h4>Price: &nbsp; <?php echo $product['product_price'] ?></h4>
                </div>
                <div align="center" class="calculation">
                    <?php
                    setcookie('product_name', $product['product_name'], time() + 3600, '/');
                    setcookie('product_price', $product['product_price'], time() + 3600, '/');
                    ?>
                    <form action="../Controller/confirmorder.php?seller_id=<?php echo $seller_id ?> " method="post">
                        <table border="0" width='50%'>
                            <tr>
                                <td width='30%'>Quantitiy</td>
                                <td>
                                    <input type="number" name="quantity" id="quan">
                                </td>
                            </tr>
                            <tr>
                                <td width='30%'>Name</td>
                                <td>
                                    <input type="text" name="name" id="u_name">
                                </td>
                            </tr>
                            <tr>
                                <td width='30%'>Address</td>
                                <td>
                                    <input type="text" name="address" id="addr">
                                </td>
                            </tr>
                            <tr>
                                <td width='30%'>Phone Number</td>
                                <td>
                                    <input type="text" name="number" id="number">
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2"> <input type="submit" name="submit" value="Check Out"> </td>
                            </tr>

                        </table>
                    </form>

                </div>
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