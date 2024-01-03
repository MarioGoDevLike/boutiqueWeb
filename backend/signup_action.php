<?php
include("connection.php");

$firstname = $_POST['txtFirstName'];
$lastname = $_POST['txtLastName'];
$email = $_POST['txtEmail'];
$birthday = $_POST['txtBirthday'];
$gender = $_POST['txtGender'];
$password = $_POST['txtPassword'];

// if(isset($_FILES['image'])){
//     $errors = array();
//     $file_name = $_FILES['image']['name'];
//     $file_size = $_FILES['image']['size'];
//     $file_tmp = $_FILES['image']['tmp_name'];
//     $file_type = $_FILES['image']['type'];
//     $file_ext= strtolower(end(explode('.',$_FILES['image']['name'])));
//     $extensions = array("jpeg", "jpg", "jpg", "png");
//     if(in_array($file_ext, $extensions)=== false){
//         $errors[] = "Extension not allowed, please choose a JPEG or PNG file";
//     }
//     if($file_size>2097152){
//         $errors[] = "File size must be exactly 2MB";
//     }
//     if(empty($errors) == true){
//         move_uploaded_file($file_tmp, "images/".$file_name);
//         // echo "Success";
//     }else{
//         print_r($errors);
//     }
// }

$sqlQuery = "SELECT email FROM users WHERE email = '$email'";
$results = mysqli_query($con, $sqlQuery);
$result2 =  mysqli_fetch_assoc($results);

if ($result2) {
    $errorResult = 1;
    header("location:addUser.php?error=$errorResult");
    echo "Email is already in use";
} else {
    $sql = "INSERT INTO users(first_name, last_name, email, birthday, gender, password)  VALUES ('$firstname', '$lastname', '$email', '$birthday', '$gender', '$password')";
    mysqli_query($con, $sql);
    header("location:../login.php");
}

// if(empty($firstname) == false && empty($lastname) == false && empty($email) == false && empty($birthday) == false && empty($gender) == false && empty($password) == false){
//     $errorResult = 2;
//     header("location:addUser.php?error=$errorResult");
//     echo "make sure all fields are filled";

// }else 