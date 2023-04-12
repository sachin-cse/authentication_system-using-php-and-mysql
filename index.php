<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <script src="./js/script.js"></script>
    <title>Signup Form</title>
</head>
<body>
    <div class="full-screen-container">
        <div class="login-container">
            <h1 class="login-title">Welcome to signup page</h1>
            <form class="form" name="signup_form" action="register.php" method="post" autocomplete="off" onsubmit="return validateForm()">
              <div class="input-group error">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">
                <span id="fname_error"></span>
              </div> 
              
              <div class="input-group error">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">
                <span id="lname_error"></span>
              </div> 

              <div class="input-group error">
                <label for="email">Email<span class="required">*</span></label>
                <input type="email" name="email" id="email">
                <span id="email_error"></span>
              </div> 

              <div class="input-group error">
                <label for="password">Password<span class="required">*</span></label>
                <input type="password" name="password" id="pass">
                <span id="pass_error"></span>
              </div> 

              <div class="input-group error">
                <label for="password">Confirm Password<span class="required">*</span></label>
                <input type="password" name="confirm_password" id="cpass">
                <span id="cpass_error"></span>
              </div> 

              <input type="submit" class="login-button" value="Signup">

              <div class = "sign_account">
                <p>You have an already account? <a href = "login.php">Signin</a></p>
              </div>
            </form>
</div>
</div>
</body>
</html>