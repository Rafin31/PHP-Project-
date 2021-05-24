<?php
session_start();
if ($_SESSION['state']) {
    require_once("../Model/More_info_checkdb.php");
    $user_input = $_SESSION['user_name'];
   

?>

    <!DOCTYPE html>

    <head>
        <title>More_info_show </title>
    </head>

    <body>
        <table align="center" width="700px" border="1" height="500px">
            <tr>
                <td align="left" colspan="3">
                    <img width="20%" src=../Assets/logo.jpeg>
                    <div align="right">
                        Logged in as <a href="#" target="_blank"> <?php echo $user_input ?> &nbsp</a>
                        <a href="../View/Login.php" target="_blank">Logout</a>
                    </div>
                </td>
            </tr>
            <?php
            include('Side.php');
            ?>
        <?php
        $information = getUserByMore_info($contact_info);
        ?>
         <tr>
            <td width="70%" rowsapn="3">
                <h3>Contact Information : <?php echo  $information['contact_info'] ?></h3><br>
                <h3>Social Media : <?php echo  $information['social_media'] ?></h3><br>
                <h3>About us : <?php echo $information['about_us'] ?></h3><br>
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
<?php 
}
else{
    header('location:../View/Login.php');
    }
?>