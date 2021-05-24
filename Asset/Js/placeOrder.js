function validation() {

    const name = document.forms['edit_profile']['name'].value;
    const email = document.forms['edit_profile']['email'].value;
    const phone_number = document.forms['edit_profile']['phone_number'].value;
    const user_name = document.forms['edit_profile']['user_name'].value;
    const address = document.forms['edit_profile']['address'].value;
    const social_media = document.forms['edit_profile']['social_media'].value;
    const bio = document.forms['edit_profile']['bio'].value;



    const word1 = "@";
    const word2 = "#";
    const word3 = "$";
    const word4 = "%";
    const word5 = ".com";



    if (name == "" || email == "" || phone_number == "" || user_name == "" || address == "" || social_media == "" || bio == "") {
        alert('information Required');
        return false;


    } else if (user_name.length < 3) {
        alert("User name must be greater than 3 characters");
        return false;

    } else if (!email.includes(word1) || !email.includes(word5)) {
        alert("Put a valid email address");
        return false;


    } else if (phone_number < 11 || !Number.isInteger(phone_number)) {
        alert('Invalid Number');
        return false;

    }

}