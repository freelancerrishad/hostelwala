<?php  

session_start();

include "connection.php";

$username = $_GET['username'];
$id = $_GET['id'];
$sql = "UPDATE hostel SET admin_status='0' WHERE hostel_id = '$id'";
mysqli_query($conn,$sql);
Header("Location: more_details.php?username=$username");
?>