<?php
include "../../backend/connection.php";


$id = $_POST['id'];
$sql = "DELETE FROM admin WHERE admin_id = '$id'";
mysqli_query($con, $sql);

?>