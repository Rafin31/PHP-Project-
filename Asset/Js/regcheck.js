function validation() {

    const name = document.forms['registration']['name'].value;
    const email = document.forms['registration']['email'].value;
    const role = document.forms['registration']['role'].value;
    const user_name = document.forms['registration']['user_name'].value;
    const password = document.forms['registration']['password'].value;
    const confirm_password = document.forms['registration']['re-type-password'].value;

    const word1 = "@";
    const word2 = "#";
    const word3 = "$";
    const word4 = "%";
    const word5 = ".com";




    if (name == "" || email == "" || role == "" || user_name == "" || password == "" || confirm_password == "") {
        alert('Null Submission');
        return false;


    } else if (user_name.length < 3) {
        alert("User name must be greater than 3 characters");
        return false;

    } else if (!email.includes(word1) || !email.includes(word5)) {
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