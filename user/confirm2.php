<?php  
$username = $_GET['username'];
echo '<script>alert("Payment successfull");
    window.location.href="http://localhost/hostelwala/user?username='.$username.'";
</script>';
 ?>