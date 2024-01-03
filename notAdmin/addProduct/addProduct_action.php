<?php
error_reporting(0);
ini_set('display_errors', 0);
include("../../backend/connection.php");

$pName = $_POST["productName"];
$pCategory = $_POST["productCategory"];
$pPrice = $_POST["productPrice"];
$pDescription = $_POST["productDescription"];
$image = $_FILES["image"];


$errorResult = 0;


if (isset($image)) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $file_name)));
    $extensions = array("jpeg", "jpg", "png");
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Extension not allowed, please choose a JPEG or PNG file";
    }
    if ($file_size > 2097152) {
        $errors[] = "File size must be exactly 2MB";
    }
    if (empty($errors) == true) {
        if (!file_exists("images")) {
            mkdir("images");
        }
        move_uploaded_file($file_tmp, "images/" . $file_name);
    } else {
    }
}


if (empty($pName)  || empty($pCategory) || empty($pPrice)  || empty($pDescription)) {
    $errorResult = 1;
    header('location:addProduct.php?error=1');
} else {
    $sql = "INSERT INTO products (product_name, product_category, product_description, product_price, product_image) VALUES ('$pName', '$pCategory', \"$pDescription\", '$pPrice', '$file_name')";
    mysqli_query($con, $sql) or die(mysqli_error($con));
    header("location:../Dashboard/dashboard.php");
}
