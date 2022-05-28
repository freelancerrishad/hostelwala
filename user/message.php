<?php 


include 'dbconnect.php';
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$number = mysqli_real_escape_string($conn,$_POST['number']);
$message = mysqli_real_escape_string($conn,$_POST['message']);
$id = $_GET['id'];
$username = $_GET['username'];


$sql = "INSERT INTO chat(incomming_msg_username,outgoing_msg_id,message,name,email,number) VALUES ('$username','$id','$message','$name','$email','$number')";
$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('your message send successfull.');
    window.location.href='view.php?username=".$username."&id=".$id."';
    </script>";
    
}
 ?>