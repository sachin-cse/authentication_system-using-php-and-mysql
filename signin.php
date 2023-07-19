
<?php
session_start();
include 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check email exist in the database
    $sql = "SELECT id, email, password_hash FROM login WHERE email = '$email'";
    $result = $conn->query($sql);

    if($result->num_rows == 0){
        echo "<script>alert('Email not found, please register first'); window.location='index.php';</script>";
    }
    else {
        // check email exist if password is correct
        $user = $result->fetch_assoc();
        $password_hash = $user['password_hash'];
        if(!password_verify($password, $password_hash)){
            echo "<script>alert('Incorrect password'); window.location='login.php';</script>";
        }
        else {
            // password is correct 
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            // update last login details and set timezone
            date_default_timezone_set('Asia/Kolkata');
            $login_time = date('Y-m-d H:i:s a');
            $sql = "UPDATE login SET last_login_time = '$login_time' WHERE id={$user['id']}";

            $conn->query($sql);
            echo "<script>alert('Logged in successfully'); window.location='dashboard.php';</script>";
        }
    }
}
mysqli_close($conn);
?>
