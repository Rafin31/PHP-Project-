<!DOCTYPE html>
<html>

<head>
    <title>Seller Info</title>
    <script src="../Assets/JS/seller_form.js"></script>
</head>

<body>
    <table align="center" width="900px" border="1">
        <form name="seller_form.js"method="post" action="../controller/sellerinfocheck.php" onsubmit="return validation()">
            <tr>
                <td align="left" colspan="3">
                    <img width=20% src=../Assets/logo.jpeg>
                    <div align="right">
                        <a href="home.html" target="_blank">Home &nbsp</a>
                        <a href="Contact_us.html" target="_blank">Contact Us</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="3" height="400px">
                    <fieldset>
                        <legend>Seller Info</legend>

                        <table>
                            <tr>
                                <td>Restaurant Name:</td>
                                <td><input type="text" name="rest_name" value="" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Type:</td>


                                <td><input type="radio" name="radio" value="Fast Food">Fast Food &nbsp
                                    <input type="radio" name="radio" value="Cafe">Cafe &nbsp
                                    <input type="radio" name="radio" value="Chinese">Chinese &nbsp
                                    <input type="radio" name="radio" value="Refreshing Drinks">Refreshing Drinks
                                </td>

                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>About Resturant:</td>

                                <td>
                                    <textarea name="about_rest" cols="30" rows="3" autocomplete="off"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div align="left">
                                        <input type="submit" name="submit" value="submit">
                                    </div>

                                </td>
                            </tr>
                        </table>

                    </fieldset>
                </td>
            </tr>

            <tr>
                <td align="center" colspan="3" height="50px">
                    <?php include('../Controller/Footer.php') ?>
                </td>
            </tr>
        </form>
    </table>
</body>

</html>