<?php
error_reporting(0);
ini_set('display_errors', 0);
include("connection.php");

session_start();

// setcookie("firstname", $name, time()+36000);


$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];

$_SESSION['email'] = $email;


$sql = "select * from users where email='$email' and password='$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['first_name'];
$_SESSION['userId'] = $row['user_id'];

if(mysqli_num_rows($result) > 0){
    header("location:../home.php");
    
}else{
    header("location:../login.php?error=1");
}
?>