function validation() {

    const name = document.forms['login']['user_name'].value;
    const password = document.forms['login']['password'].value;



    if (name == "" || password == "") {
        alert('Null Submission');
        return false;

    }
}