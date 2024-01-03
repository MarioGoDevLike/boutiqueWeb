<?php
include("../../backend/connection.php");

$categoryName = $_POST['categoryName'];
$image = $_FILES["image"];

$errorResult = 0;

$sql2 = "SELECT * FROM category WHERE category_name = '$categoryName'";
$result2 = mysqli_query($con, $sql2);
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
        print_r($errors);
    }
}

if (empty($categoryName)) {
    $errorResult = 1;
    header('location:addCategory.php?error=1');
} else if (mysqli_num_rows($result2) > 0) {
    $errorResult = 2;
    header('location:addCategory.php?error=2');
} else {
    $sql = "INSERT INTO category(category_name, category_picture) VALUES ('$categoryName', '$file_name')";
    mysqli_query($con, $sql);
    header("location:../Dashboard/dashboard.php");
}
