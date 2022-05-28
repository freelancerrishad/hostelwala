<?php  
$username = $_GET['username'];
echo '<script>alert("Submit successfully");
    window.location.href="http://localhost/hostelwala/hostel_owner?username='.$username.'";
</script>';
 ?>