<?php

session_start();
require_once('../Modal/productModel.php');

if ($_SESSION['status']) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Asset/css/orderNow.css">
        <link rel="stylesheet" href="../Asset/css/style.css">
        <script src="../Asset/Js/productSearchAjax.js"></script>
        <title> Order Now </title>


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

                <div class="form__group">

                    <input type="text" id="search" onkeyup="ajax()" class="form_field" placeholder="Search">
                    <label for="search" class="form_label">Search</label>
                    <input type="button" onclick="ajax()" value="Search">
                </div>
                <div class="foods" id="foods">

                    <?php
                    $products =  getAllProduct();
                    $index = count($products);
                    $i = 0;
                    while ($i != $index) {

                    ?>
                        <table width='100%' align="center">
                            <tr>

                                <td width="30%">

                                    <img src="../Asset/Photos/<?php echo $products[$i]['product_photo']
                                                                ?>" alt="">
                                </td>

                                <td>
                                    <form action="../View/placeOrder.php?name=<?php echo $products[$i]['product_name']?>&seller_id=<?php echo $products[$i]['seller_id'] ?>" method="post">
                                        <p> Seller id: <?php echo $products[$i]['seller_id'] ?> </p>
                                        <h1> <?php echo $products[$i]['product_name'] ?> </h1>
                                        <h3> <?php echo $products[$i]['product_description'] ?> </h3>
                                        <h3> Price : <?php echo $products[$i]['product_price'] ?> </h3>
                                        <p> Available :<?php echo $products[$i]['product_availbility'] ?> </p>
                                        <input type="submit" name="submit" value="Order Now">
                                    </form>
                                </td>

                            </tr>

                        </table>
                    <?php $i++;
                    } ?>
                </div>

                <div id="search_result">

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