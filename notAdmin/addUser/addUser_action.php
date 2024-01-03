<?php
error_reporting(0);
ini_set('display_errors', 0);
include("../../backend/connection.php");

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = $_POST['email'];
$birthday = $_POST['txtBirthday'];
$gender = $_POST['txtGender'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$sql2 = "select * from users where email='$email'";
$result2 = mysqli_query($con, $sql2);

$errorResult = 0;

if ($password != $confirmPassword) {
    $errorResult = 1;
    header('location:addUser.php?error=1');
} else if(mysqli_num_rows($result2) > 0){
    $errorResult = 2;
    header('location:addUser.php?error=2');
}else{
    $sql = "INSERT INTO users(first_name, last_name, email, birthday, gender, password)  VALUES ('$firstname', '$lastname', '$email', '$birthday', '$gender', '$password')";
    mysqli_query($con, $sql) or die(mysqli_error($con));
    header("location:../Dashboard/dashboard.php");
}
?>
