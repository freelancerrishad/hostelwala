
<?php
include "connection.php";
session_start();



if (!isset($_SESSION["username"])) {
    header("Location: ../signup.php");
}
$username = $_GET['username'];
$idselection = $_GET['id'];

$floor = mysqli_real_escape_string($conn, $_POST['floor']);
$num_floor = mysqli_real_escape_string($conn, $_POST['num_floor']);
$facing = mysqli_real_escape_string($conn, $_POST['facing']);
$date = mysqli_real_escape_string($conn, $_POST['date']);

$sql = "INSERT INTO property_additional_information(floor_available,total_floor,facing,handover_date,username,id) VALUES ('$floor','$num_floor','$facing','$date','$username','$idselection')";
mysqli_query($conn, $sql);
header("Location:  three.php?username=$username&id=$idselection")

?>