<?php
include "../../backend/connection.php";


$id = $_POST['id'];
$sql = "DELETE FROM products WHERE product_id = '$id'";
mysqli_query($con, $sql);

?>