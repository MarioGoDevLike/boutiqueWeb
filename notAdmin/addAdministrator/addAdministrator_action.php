<?php 

include("../../backend/connection.php");

$username = $_POST['userName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$sql2 = "select * from admin where email ='$email'";
$result2 = mysqli_query($con, $sql2);

$errorResult = 0;

if ($password != $confirmPassword) {
    $errorResult = 1;
    header('location:addAdministrator.php?error=1');
} else if(mysqli_num_rows($result2) > 0){
    $errorResult = 2;
    header('location:addAdministrator.php?error=2');
}else{
    $sql = "INSERT INTO admin(username, email, password)  VALUES ('$username', '$email','$password')";
    mysqli_query($con, $sql) or die(mysqli_error($con));
    header("location:../Dashboard/dashboard.php");
}

?>