<?php
include "../backend/connection.php";
session_start();

$user_Id = $_SESSION['userId'];

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM user_favorite WHERE user_id = '$user_Id' and product_id = '$id'";
    mysqli_query($con, $sql);
    } 
?>
