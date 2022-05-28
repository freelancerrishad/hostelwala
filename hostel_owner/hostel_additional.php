
<?php
include "connection.php";
session_start();



if (!isset($_SESSION["username"])) {
    header("Location: ../signup.php");
}
$username = $_GET['username'];
$idselection = $_GET['id'];

$name1 = mysqli_real_escape_string($conn, $_POST['room_member_name1']);

$name2 = mysqli_real_escape_string($conn, $_POST['room_member_name2']);

$name3 = mysqli_real_escape_string($conn, $_POST['room_member_name3']);


$proifession1 = mysqli_real_escape_string($conn, $_POST['room_member_profession1']);

$proifession2 = mysqli_real_escape_string($conn, $_POST['room_member_profession2']);


$proifession3 = mysqli_real_escape_string($conn, $_POST['room_member_profession3']);

$sql = "INSERT INTO roommate_information(roommate_name1,roommate_profession1,room_id,roommate_name02,roommate_name03,roommate_profession02,roommate_profession03,username	
) VALUES ('$name1','$proifession1','$idselection','$name2','$name3','$proifession2','$proifession3','$username')";
mysqli_query($conn, $sql);
header("Location:  three.php?username=$username&id=$idselection")

?>