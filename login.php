<?php
include 'dbconnect.php';
session_start();

if (isset($_SESSION['username'])) {
   header('Location: admin.php');
}
?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Login Page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/ownerlogin.css">
</head>

<body class="bg-dark">
   
               <?php
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  include 'dbconnect.php';
                  if (empty($_POST['username']) || empty($_POST['password'])) {
                     echo '<script>alert("All fild must be fill by you")</script>';
                     die();
                  } else {
                     $username = mysqli_real_escape_string($conn, $_POST['username']);
                     $password = $_POST['password'];
                     $password = md5($password);

                     $sql = "SELECT signup_id, signup_username, signup_password,signup_role FROM signup WHERE signup_username = '$username' AND signup_password = '$password' ";
                     
                     $result = mysqli_query($conn, $sql) or die("Query Failed");

                     if (mysqli_num_rows($result) > 0) {

                        while($row =  mysqli_fetch_assoc($result)){
                        session_start();
                        $_SESSION["username"] = $row['signup_username'];
                        $_SESSION["user_id"] = $row['signup_id'];
                        $_SESSION["user_role"] = $row['signup_role'];

                        
                        if($row['signup_role']==1){
                           header("Location: hostel_owner?username=$username");
                        }
                        else if($row['signup_role']==0){
                           header("Location: admin?username=$username");
                        }
                        else{
                           header("Location: user/header.php?username=$username");
                        }
                     }
                  }
                     else{
                        echo '<script>alert("Username and password are not matched");
                           window.location.href="signup.php";
                        </script>';
                      }
                  }
               }

             

               ?>
            
</body>

</html>