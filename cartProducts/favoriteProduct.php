<?php
include "../backend/connection.php";
session_start();

$user_Id = $_SESSION['userId'];

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $checkSql = "SELECT * FROM user_favorite WHERE user_id = '$user_Id' AND product_id = '$id'";
    $checkResult = mysqli_query($con, $checkSql);

    if (mysqli_num_rows($checkResult) == 0) {
        $insertSql = "INSERT INTO user_favorite (user_id, product_id) VALUES ('$user_Id', '$id')";
        mysqli_query($con, $insertSql);
    }
}
?>
