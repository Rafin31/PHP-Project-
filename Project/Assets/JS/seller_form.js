function validation() {
    const rest_name = document.forms['seller_form.js']['rest_name'].value;
    const type = document.forms['seller_form.js']['radio'].value;
    const about_rest = document.forms['seller_form.js']['about_rest'].value;


    if (rest_name == "" || type == "" || about_rest == "") {
        alert('Fill all the fields');
        return false;

    } else {

    }

}