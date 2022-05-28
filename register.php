<?php
$check = 0;
$check_pass = 0;
$check_email  = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include 'dbconnect.php';
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $mobile_num = mysqli_real_escape_string($conn, $_POST["number"]);

    $status = mysqli_real_escape_string($conn, $_POST['role']);

    $address = mysqli_real_escape_string($conn, $_POST["address"]);

    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $password = md5($password);
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM signup WHERE signup_username='{$username}'")) > 0) {
        echo "<script>alert('{$username} - This username has already taken.');
        window.location.href='signup.php';
        </script>";
    } else {
        if ($status == 'user') {


            $sql = "INSERT INTO signup(signup_username,signup_name,signup_email,signup_number,signup_password,signup_address,signup_role) VALUES ('{$username}', '{$name}','{$email}','{$mobile_num}','{$password}','{$address}','2')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('your signup successfull.');
        window.location.href='index.php';
        </script>";
            } else {
                echo "<script>alert('User error');
        window.location.href='index.php';
        </script>";
            }
        } else if ($status == 'hostel_owner') {
            $sql = "INSERT INTO signup(signup_username,signup_name,signup_email,signup_number,signup_password,signup_address,signup_role) VALUES ('{$username}', '{$name}','{$email}','{$mobile_num}','{$password}','{$address}','1')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('your signup successfull.');
                window.location.href='index.php';
                </script>";
            } else {
                echo "<script>alert('Hostel Owner Error');
        window.location.href='index.php';
        </script>";
            }
        }
    }
}
