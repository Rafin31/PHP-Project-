<style>
    button {
        background-color: #2ecc71;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        margin-bottom: 100px;
    }
    button:hover{
        opacity: 0.8;
    }
</style>

<?php
session_start();
require_once('../Modal/orderModal.php');

if (isset($_POST['submit'])) {
    $product_name = $_COOKIE['product_name'];
    $seller_id    = $_GET['seller_id'];
    $qantity =     $_POST['quantity'];
    $Name =        $_POST['name'];
    $Address =     $_POST['address'];
    $number =      $_POST['number'];
    $unit_price =  $_COOKIE['product_price'];
    $Delivary_Charge = 50;
    $Discount = 0;
    $total_price = ($qantity * $unit_price) + $Delivary_Charge;
    $order_time =  date("h:i:sa");
    $order_date =  date("Y/m/d");



    $user = [
        'qantity'             => $qantity,
        'Name'                => $Name,
        'product_name'        => $product_name,
        'Address'             => $Address,
        'number'              => $number,
        'unit_price'          => $unit_price,
        'seller_id'           => $seller_id,
        'total_price'         => $total_price,
        'order_time'          => $order_time,
        'order_date'          => $order_date
    ];


    $status = insertOrder($user);
    setcookie("product_name", "", time() - 3600);

    if ($status) {
?>

        <div align='center' id="checkout">
            <h1>Your Order Status : Panding</h1>
            <h1><?= $product_name ?></h1>
            <table width='40%'>
                <tr>
                    <td width='50%'>
                        <h3> Name :</h3>
                    </td>
                    <td>
                        <h3 id="name"> <?= $Name ?> </h3>
                    </td>
                    <br>
                </tr>
                <tr>
                    <td>
                        <h3>Address: </h3>
                    </td>
                    <td>
                        <h3 id="Address"> <?= $Address ?></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Phone Number: </h3>
                    </td>
                    <td>
                        <h3 id="phone_number"> <?= $number ?></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Price</h3>
                    </td>
                    <td>
                        <h2 id="price"> <?= $unit_price ?></h2>
                    </td>
                    <br>
                </tr>
                <tr>
                    <td>
                        <h3>Quantity</h3>
                    </td>
                    <td>
                        <h2 id="price"> <?= $qantity ?></h2>
                    </td>
                    <br>
                </tr>
                <tr>
                    <td>
                        <h3>Delivary Charge</h3>
                    </td>
                    <td>
                        <h3 id="DC"> <?= $Delivary_Charge ?></h3>
                    </td>
                    <br>
                </tr>
                <tr>
                    <td>
                        <h3>Discount</h3>
                    </td>
                    <td>
                        <h3 id="disc"> <?= $Discount ?></h3>
                    </td>
                    <br>
                </tr>
                <tr>
                    <td>
                        <h3>Total</h3>
                    </td>
                    <td>
                        <hr color="black">
                        <h3 id="total"><?= $total_price ?> TK </h3>
                    </td>
                </tr>
                <tr>
                    <td  align='center' colspan="2"> <button onclick="location.href = '../View/orderStatus.php';">Order Status</button> </td>
                </tr>
                </form>
            </table>
        </div>


<?php
    }
} else {
    echo " Something Went wrong. Please try again";
}
?>