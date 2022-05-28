<?php 
$username = $_GET['username'];
$id = $_GET['id'];
if (isset($_POST['submit']) && isset($_FILES['my_image1'])) {
	include "connection.php";

	// echo "<pre>";
	// print_r($_FILES['my_image1']);
	// echo "</pre>";

	$img_name = $_FILES['my_image1']['name'];
	$img_size = $_FILES['my_image1']['size'];
	$tmp_name = $_FILES['my_image1']['tmp_name'];
	$error = $_FILES['my_image1']['error'];

	if ($error === 0) {
		if ($img_size > 1250000000) {
			$username = $_GET['username'];
			echo '<script>alert("Sorry, your file is too large."); window.location.href="index.php?username='.$username.'"</script>';
			
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'floor_plan/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO floor_image(floor_plan,id) 
				        VALUES('$new_img_name','$id')";
				mysqli_query($conn, $sql);

                $id = $_GET['id'];
				$username = $_GET['username'];
                // header("Location: index.php?username=$username&id=$id");

				echo '<script>alert("upload successfully"); window.location.href="three.php?username='.$username.'&id='.$id.'"</script>';
		
		
			}else {
				
				echo '<script>alert("you can not upload this type of file"); window.location.href="index.php?username='.$username.'"</script>';
		
			}
		}
	}else {
		
		echo '<script>alert("unknown error occurred!"); window.location.href="index.php?username='.$username.'"</script>';
		
	}

}else {
	echo '<script>alert("Nothing Happened"); window.location.href="index.php?username='.$username.'"</script>';
		
}