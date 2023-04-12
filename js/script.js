function validateForm(){
    // var fname = document.signup_form.fname.value;
    // var lname = document.signup_form.lname.value;
    var email = document.signup_form.email.value;
    var pass = document.signup_form.pass.value;
    var cpass = document.signup_form.cpass.value;

    if(email == "" || email == null){
        document.getElementById('email_error').innerHTML = " Please Enter Your Email ";
        document.getElementById('email_error').style.display = "block";
        document.signup_form.email.focus();
        return false; 
    } else {
        document.getElementById('email_error').style.display = "none";
    }

    if(pass.length < 8){
        document.getElementById('pass_error').innerHTML = " Please enter your password atleast 8 character long ";
        document.getElementById('pass_error').style.display = "block";
        document.signup_form.pass.focus();
        return false; 
    } else {
        document.getElementById('pass_error').style.display = "none";
    }

    if(pass != cpass){
        document.getElementById('cpass_error').innerHTML = " password did not match ";
        document.getElementById('cpass_error').style.display = "block";
        document.signup_form.cpass.focus();
        return false; 
    } else {
        document.getElementById('cpass_error').style.display = "none";
    }

    return true;

}
