<?php
session_start();
include_once('connection.php');
$username = $_GET['username'];


if (isset($_POST['add'])) {
	$property_name = $_POST['property_name'];
	$property_description = $_POST['property_description'];
	
	$username = $_GET['username'];
	
	$con = $_POST['con'];
	$property_size = $_POST['property_size'];

	
        
       

	$sql = "INSERT INTO blogs (	blog_title,blog_short,blog_des,blog_image,username	) VALUES ('$property_name', '$property_size', '$property_description','0','$username')";


	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Property added successfully';
	} else {
		$_SESSION['error'] = 'Something went wrong while adding';
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}


 header("Location: index.php?username=$username");
?>