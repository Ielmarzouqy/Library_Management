// validation code input
var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var admin_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

email.addEvantListner('texInput', email_Verify);
password.addEvantListner('textInput', pass_Verify);


function validated(){
    if(email.value.lenght < 9){
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    if(password.value.lenght <9){
        password.style.border = "1px solid red";
        pass_error.style.display = "block";
    password.focus();
        return false;
    }
}
function email_Verify(){
     if(email.value.lenght >= 8){
        email.style.border = "1px solid slever";
        email_error.style.display = "none";
        email.focus();
        return true;
    }
}
function pass_Verify(){
    if(password.value.lenght >= 8){
       password.style.border = "1px solid slever";
       pass_error.style.display = "none";
       password.focus();
       return true;
   }
}