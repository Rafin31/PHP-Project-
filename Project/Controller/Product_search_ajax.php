<?php



$keyword = $_REQUEST['keyword'];

$conn = mysqli_connect('localhost', 'root', '', 'cloud_kitchen');
$sql = "select * from post_food where product_name like '%{$keyword}%' AND food_description like'%{$keyword}%' ";
$result = mysqli_query($conn, $sql);
$flag = 0;

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {

        $flag = 1;
        $response = " <table width='100%' align='center'>
    	                <tr width='100%'>
							<td align='center' colspan='2'><img src='../Assets/upload/{$row['food_photo']}' width='30%'></td></tr>
                            <tr>
							<td align='center'>
                            <form action='' method='post'>
                            <h1> {$row['product_name']}  </h1>
                            <h3>  {$row['food_description']} </h3>
                            <h3> Price : {$row['price']} </h3>
                            <p> Available : {$row['availability']}  </p>
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
