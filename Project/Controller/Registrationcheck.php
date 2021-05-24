<?php
      session_start();
      require_once('../Model/userModel.php');
    
if ( isset ( $_POST ['submit'] ) ) {
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $user_name = $_POST ['user_name'];
    $user_name_lenght = strlen($user_name);
    $password = $_POST ['password'];
   
    $confirm_password = $_POST ['confirm_password'];
    $password_name_length = strlen($password);

    $word1 = "#";
    $word2 = "@";
    $word3 = "%";
    $word4 = "$";

    if(isset($_POST['radio'])){
        $Role = $_POST ['radio']; 
    }
    if ( $name =="" || $email =="" || $user_name=="" || $password =="" || $confirm_password =="" || $Role=="" ){
     echo"Filled all the section..";
}
elseif ( $password != $confirm_password) {
        echo "Given Password didn't match";
    }
    
    elseif ( strpos( $password ,$word1) == false && strpos( $password ,$word2) == false && strpos( $password ,$word3) == false && strpos( $password ,$word4) == false) {
    echo "Password should contain at least 1 special character";
    }
    elseif ( $user_name_lenght < 3 && $password_name_length < 8) {
        echo "user name and password should be more than 3 and 8 charecters";
        }
else{

if($password == $confirm_password){

    $users = [ 
                'name'=>$name,
                'email'=>$email,
                'user_name'=>$user_name,
                'password'=>$password,
                'confirm_password'=>$confirm_password,
                'Role'=>$Role,
            ];    
    $status = insertUser ( $users) ;

    if($status){
        header('location:../View/sellerInfo.php');
    }else{
        echo "Some error has been showing";
    }
}
}
}

?>
