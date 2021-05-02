var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);

function validated(){
    if (email.value.length == 0) {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    if (password.value.length == 0) {
        password.style.border = "1px solid red";
        pass_error.style.display = "block";
        password.focus();
        return false;
    }

    alert("Login Success.")
    return false;

}
function email_Verify(){
    if (email.value.length >= 1) {
        email.style.border = "1px solid silver";
        email_error.style.display = "none";
        return true;
    }
}
function pass_Verify(){
    if (password.value.length >= 1) {
        password.style.border = "1px solid silver";
        pass_error.style.display = "none";
        return true;
    }
}
    