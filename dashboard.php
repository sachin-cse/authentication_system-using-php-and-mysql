<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hare Krishna and Hare Rama</h1>
    <?php
session_start();
if (isset($_SESSION['user_id'])) {
    $email = $_SESSION['user_email'];
    $userid = $_SESSION['user_id'];
    echo "<p>Hello, $email!</p>";
    echo "<form method='post' action='logout.php'>
    <button type='submit'>Logout</button>
    </form>";
} else {
    // Redirect to login page if user is not logged in
    echo "<script> window.location = 'login.php';</script>";
    exit();
}
?>
</body>

</html>