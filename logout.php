<?php
session_start();
// clear all the session variables
$_SESSION = array();
session_destroy();

// Redirect login page
echo "<script> window.location = 'login.php';</script>";
exit();
?>