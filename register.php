<?php include "connection.php"; ?>

<?php

// Get from data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $sql = "SELECT * FROM signup WHERE email = '$email'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "<script>alert('Email already exists plz choose a new email'); window.location='index.php';</script>";
    }
    else{
        // email does not exist in the database the details will be stored in the database
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $confirm_password_hash = password_hash($confirm_password, PASSWORD_DEFAULT);
        // set timezone
        date_default_timezone_set('Asia/Kolkata');
        $signup_time = date('Y-m-d H:i:s a');
        $sql = "INSERT INTO signup (first_name, last_name, email, password_hash, confirm_password, signup_time) VALUES ('$fname', '$lname', '$email', '$password_hash', '$confirm_password_hash', '$signup_time')";

        if (!(mysqli_query($conn, $sql))){
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } else {
            $user_id = mysqli_insert_id($conn);
            $sql = "INSERT INTO login (id, email, password_hash) VALUES ('$user_id', '$email', '$password_hash')";
            if(!(mysqli_query($conn, $sql))){
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            } else {
                echo "<script>alert('your have successfully created a new user plz login'); window.location = 'login.php';</script>";
            }
        }
    }
}
mysqli_close($conn);
?>