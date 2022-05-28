<?php
	session_start();
	include_once('connection.php');
	$username = $_GET['username'];

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$property_name = $_POST['property_name'];
		$property_description = $_POST['property_description'];
		$property_price = $_POST['property_price'];
		$property_status = $_POST['property_status'];
		$property_type = $_POST['property_type'];
		$sub_proper = $_POST['sub_proper'];
		$username = $_GET['username'];
		$city= $_POST['city'];
		$address = $_POST['address'];
		$construction_status = $_POST['construction_status'];
		$property_size = $_POST['property_size'];


		$sql = "UPDATE property SET  property_name = '$property_name', property_description = '$property_description', property_price = '$property_price' , property_status = '$property_status' , property_type = '$property_type', sub_proper='$sub_proper', city='$city', address='$address', construction_status='$construction_status', property_size='$property_size' WHERE property_id = '$id'";
	
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'property updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating property';
		}
	}
	else{
		$_SESSION['error'] = 'Select property to edit first';
	}

	header("Location: index.php?username=$username");
?>