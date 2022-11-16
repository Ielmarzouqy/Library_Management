// validation code input
var email = document.forms['form']['email'];
var password = document.forms['form']['login-input'];

var admin_error = document.getElementById('admin_error');
var pass_error = document.getElementById('pass_error');

email.addEvantListner('submit', admin_Verify);
password.addEvantListner('submit', admin_Verify);


function validated(){
    if(email.value.lenght < 9){
        email.style.border = "1px solid red";
        admin_error.style.display = "block";
        email.focus();
        return false;
    }
    if(password.value.lenght <9){
        password.style.border = "1px solid red";
        admin_error.style.display = "block";
    password.focus();
        return false;
    }
}
function admin_Verify(){
     if(email.value.lenght >= 8){
        email.style.border = "1px solid slever";
        admin_error.style.display = "block";
        email.focus();
        return true;
    }
}