<?php include 'connection.php'; ?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = $_POST['email'];
  $new_pass = $_POST['new_pass'];

  // check if both are empty
  if(empty($email) || empty($new_pass)){
    echo  "<script>alert('Please enter your email and new password.'); window.location='forgot_password.php';</script>";
  } else {
    $sql = "SELECT * FROM login WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result) == 0){
      echo "<script>alert('No user found that email.')</script>";
    } else {
       // update the user's password in the database
       $new_pass = mysqli_real_escape_string($conn, $new_pass);
       $new_pass_hash = password_hash($new_pass, PASSWORD_DEFAULT);

      //  write query top update login table 
      $sql = "UPDATE login SET password_hash = '$new_pass_hash' WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);

      // update signup table 
      $sql = "UPDATE signup SET password_hash = '$new_pass_hash' WHERE email = '$email'";
      $result2 = mysqli_query($conn, $sql);

      $sql = "UPDATE signup SET confirm_password = '$new_pass_hash' WHERE email = '$email'";
      $result3 = mysqli_query($conn, $sql);

      if($result && $result2 && $result3){
        echo "<script>alert('Your password has been updated successfully.plz login.'); window.location = 'login.php';</script>";
      }
      else {
        echo "<script>alert('There was an error updating your password. Please try again later.')</script>";

      }
    }
  }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/forgot.css">
    <title>Reset Password</title>
</head>
<body>
    <div class="full-screen-container">
        <div class="login-container">
            <h1 class="login-title">Forgot Password</h1>
            <form class="form" name="login_form" action="forgot_password.php" method="post" autocomplete="off">
              <div class="input-group error">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <span class="email_error"></span>
              </div> 

              <div class="input-group error">
                <label for="password">New Password</label>
                <input type="password" name="new_pass" id="pass">
                <span class="pass_error"></span>
              </div> 

              <input type="submit" class="login-button" value = "Reset password">

            </form>
        </div>
    </div>
</body>
</html>
