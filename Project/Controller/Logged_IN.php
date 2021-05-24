 <?php
    session_start();
    if ($_SESSION['state']) {
        require_once("../Model/userModel.php");

        $user_input = $_SESSION['user_name'];

    ?>

     <!DOCTYPE html>

     <head>
         <title>Seller home </title>
     </head>

     <body>
         <table align="center" width="700px" border="1" height="500px">
             <tr>
                 <td align="left" colspan="3">
                     <img width="20%" src=../Assets/logo.jpeg>
                     <div align="right">
                         Logged in as <a href="#" target="_blank"> <?php echo $user_input ?> &nbsp</a>
                         <a href="../Controller/Logout.php" target="_blank">Logout</a>
                     </div>
                 </td>
             </tr>
             <tr>
                 <td width="30%" align="center" rowspan="3">
                     <a href="../Controller/Profile.php" target="_blank">Profile</a>
                     <hr>
                     <a href="../Controller/Edit_Profile.php" target="_blank">Edit Profile</a>
                     <hr>
                     <a href="../View/Change_Password.php" target="_blank">Change Password</a>
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
                     <a href="../View/Transaction.php" target="_blank">Transaction History</a>
                     <hr>
                 </td>
             </tr>
             <tr>
                 <td width="70%" rowsapn="3">
                     <h1>Welcome <?php echo $user_input ?> </h1>
                 </td>
             </tr>
             <tr></tr>
             <tr></tr>
             <tr>
                 <td align="center" colspan="3"><?php include('Footer.php') ?>
         </table>
     </body>

     </html>
 <?php
    } else {
        header('location:../View/Login.php');
    }
 ?>