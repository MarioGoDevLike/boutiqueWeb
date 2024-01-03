<?php
include "../backend/connection.php";
session_start();

$user_Id = $_SESSION['userId'];

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    
    $sql = "INSERT INTO user_cart (user_id, product_id) VALUES ('$user_Id', '$id')";
    if(mysqli_query($con, $sql)) {
        echo "Product added to cart successfully";
    } 
    } 
?>
