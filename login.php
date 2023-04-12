<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>login</title>
</head>
<body>
    <div class="full-screen-container">
        <div class="login-container">
            <h1 class="login-title">Welcome to login page</h1>
            <form class="form" name="login_form" action="signin.php" method="post" autocomplete="on" onsubmit="return validateForm()">
              <div class="input-group error">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <span class="email_error"></span>
              </div> 
              
              <div class="input-group error">
                <label for="password">Password</label>
                <input type="password" name="password" id="pass">
                <span class="pass_error"></span>
              </div> 

              <input type="submit" class="login-button" value = "Login">

              <div class="forgot-password">
                <a href = "forgot_password.php">Forgot Password?</a>
              </div>
            </form>
        </div>
    </div>
</body>
</html>
