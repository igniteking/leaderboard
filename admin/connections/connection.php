<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "spardha";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die;
session_start();
date_default_timezone_set('Asia/Kolkata');
if (isset($_SESSION['user_email'])) {
    $email = $_SESSION["user_email"];
    $id = $_SESSION['ID'];
} else {
    $email = "No User";
}
?>