<?php
	session_start();
	include_once('connection.php');
	$username = $_GET['username'];

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$hostel_name = $_POST['hostel_name'];
		$hostel_description = $_POST['hostel_description'];
		$hostel_price = $_POST['hostel_price'];
		$hostel_status = $_POST['hostel_status'];
		$hostel_type = $_POST['hostel_type'];
		
		$username = $_GET['username'];
		$city= $_POST['city'];
		$address = $_POST['address'];
		

		$sql = "UPDATE hostel SET  hostel_name = '$hostel_name', hostel_description = '$hostel_description', hostel_price = '$hostel_price' , hostel_status = '$hostel_status' , hostel_type = '$hostel_type', city='$city', address='$address' WHERE hostel_id = '$id'";
	
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'hostel updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating hostel';
		}
	}
	else{
		$_SESSION['error'] = 'Select hostel to edit first';
	}

	header("Location: index.php?username=$username");
?>