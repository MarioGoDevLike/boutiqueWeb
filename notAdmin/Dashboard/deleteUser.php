<?php
include "../../backend/connection.php";


$id = $_POST['id'];
$sql = "DELETE FROM users WHERE user_id = '$id'";
mysqli_query($con, $sql);

?>