<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Asset/css/reg.css">
    <script src="../Asset/Js/regcheck.js"></script>

    <title>Registration | Cloud Kitchen</title>
</head>

<body>

    <div class="registrationContainer">
        <div class="box">

            <div class="top">
                <img src="../Asset/Photos/2nd logo.png" alt="">
            </div>

            <div class="bottom">


                <p style="color: red; font-size:medium"> <?php require_once('../Controller/regCheck.php')  ?> </p>

                <form name="registration" action="#" onsubmit="return validation()" method="post">
                    <input type="text" name="name" id="name" placeholder="Full Name">
                    <input type="text" name="email" id="email" placeholder="Email">

                    <select id="role" name="role">
                        <option value="Admin">Admin</option>
                        <option value="Seller">Seller</option>
                        <option value="Buyer">Buyer</option>
                        <option value="Delivary_Boy">Delivary Boy</option>
                        <option value="Delivary_Manager">Delivary Manager</option>
                    </select>
                    
                    <input type="text" name="user_name" id="user_name" placeholder="User Name">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="password" name="re-type-password" id="re-type-password" placeholder="Re-Type Password">
                    <input type="submit" id="signup" name="submit" value="Sign Up">


                </form>

                <p>copyright @ <?php echo date("Y") ?> </p>

            </div>

        </div>
    </div>
</body>

</html>