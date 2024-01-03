<?php
error_reporting(0);
ini_set('display_errors', 0);
include("../backend/connection.php");

session_start();

$email = $_POST['adminEmail'];
$password = $_POST['adminPassword'];

$_SESSION['emailAdmin'] = $email;


$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['username'];
$_SESSION['userName'] = $name;
setcookie("firstname", $name, time()+36000);


if(mysqli_num_rows($result) > 0){
    header('location:Dashboard/dashboard.php');

} else if(mysqli_num_rows($result) == 0){
    header("location:admin.php?error=1");
}
?>
