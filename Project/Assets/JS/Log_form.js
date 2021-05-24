function validation() {

    const name = document.forms['Log_form']['user_name'].value;
    const password = document.forms['Log_form']['password'].value;



    if (name == "" || password == "") {
        alert('Fill all the fields');
        return false;
    }
}