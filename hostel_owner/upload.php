<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "connection.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 12500000) {
			$username = $_GET['username'];
			echo '<script>alert("Sorry, your file is too large."); window.location.href="index.php?username='.$username.'"</script>';
				
			
		}else {
			

			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$id = $_GET['id'];
				$username = $_GET['username'];
				echo $id;
				
				$sql = "UPDATE property SET property_image = '$new_img_name' WHERE property_id = '$id'";
				mysqli_query($conn, $sql);
				 header("Location: index.php?username=$username");
			}else {
				$username = $_GET['username'];
				echo '<script>alert("You can not upload this type of file"); window.location.href="index.php?username='.$username.'"</script>';
				
			}
		}
	}else {
		$username = $_GET['username'];
				echo '<script>alert("unknown error occurred!"); window.location.href="index.php?username='.$username.'"</script>';
		
	}

}else {
	$username = $_GET['username'];
	header("Location: index.php?username=$username");
}

?>