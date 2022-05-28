<?php  
$username = $_GET['username'];
$id = $_GET['id'];
echo '<script>alert("Payment Failed");
    window.location.href="http://localhost/hostelwala/user/view.php?username='.$username.'&id='.$id.'";
</script>';
 ?>