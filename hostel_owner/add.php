<?php
session_start();
include_once('connection.php');
$username = $_GET['username'];


if (isset($_POST['add'])) {
	$hostel_name = $_POST['hostel_name'];
	$hostel_description = $_POST['hostel_description'];
	$hostel_price = $_POST['hostel_price'];
	$hostel_status = $_POST['hostel_status'];
	$hostel_type = $_POST['hostel_type'];
	$username = $_GET['username'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$con = $_POST['con'];
	
	
        
       

	$sql = "INSERT INTO hostel (hostel_name, hostel_description, hostel_price,hostel_status,hostel_type,city,username,address,admin_status) VALUES ('$hostel_name', '$hostel_description', '$hostel_price', '$hostel_status', '$hostel_type', '$city', '$username','$address','0')";


	if ($conn->query($sql)) {
		$_SESSION['success'] = 'hostel added successfully';
	} else {
		$_SESSION['error'] = 'Something went wrong while adding';
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}


 header("Location: index.php?username=$username");
?>