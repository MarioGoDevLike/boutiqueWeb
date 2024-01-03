<?php
include "../../backend/connection.php";


$id = $_POST['id'];
$sql = "DELETE FROM category WHERE category_id = '$id'";
mysqli_query($con, $sql);

?>