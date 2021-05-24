function validation() {


    const name = document.forms['Reg_form']['name'].value;
    const email = document.forms['Reg_form']['email'].value;
    const user_name = document.forms['Reg_form']['user_name'].value;
    const password = document.forms['Reg_form']['password'].value;
    const confirm_password = document.forms['Reg_form']['confirm_password'].value;

    const role = document.forms['Reg_form']['radio'].value;

    const word1 = "@";
    const word2 = "#";
    const word3 = "$";
    const word4 = "%";


    if (name == "" || email == "" || role == "" || user_name == "" || password == "" || confirm_password == "") {
        alert('Fill all the fields');


    } else if (user_name.length < 3) {
        alert("User name must be greater than 3 characters");
        return false;

    } else if (!email.includes(word1)) {
        alert("Put a valid email address");
        return false;


    } else if (!password.includes(word1) && !password.includes(word2) && !password.includes(word3) && !password.includes(word4)) {
        alert('Password must contains special characters');
        return false;


    } else if (password.length < 8) {
        alert('Password must be greater than 8 characters');
        return false;

    } else if (password != confirm_password) {
        alert("Password Didn't match with confirm password");
        return false;

    }

}