<?php



$keyword = $_REQUEST['keyword'];

$conn = mysqli_connect('localhost', 'root', '', 'cloudkitchen');
$sql = "select * from product_list where product_name like '%{$keyword}%'";
$result = mysqli_query($conn, $sql);
$flag = 0;

if ($result) {
    

    while ($row = mysqli_fetch_assoc($result)) {

        $flag = 1;
        $response = " <table width='100%' align='center'>
    	                <tr width='30%'>
							<td><img src='../Asset/Photos/{$row['product_photo']}'</td>
							<td>
                            <form action='' method='post'>
                            <p> Seller id:  {$row['seller_id']} </p>
                            <h1> {$row['product_name']}  </h1>
                            <h3>  {$row['product_description']} </h3>
                            <h3> Price : {$row['product_price']} </h3>
                            <p> Available : {$row['product_availbility']}  </p
                            <input type='button' value='Order Now'>
                            </form>
                            </td>
							
						</tr>";
    }
    if ($flag != 0) {
        $response .= "</table>";
        echo $response;
    } else
        echo "No result";
} else
    echo "No result";
