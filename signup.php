<!DOCTYPE html>
<?php include 'header.php' ; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Signup</title>
</head>
<body>
    <div class="containe">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                <h2>LOGIN</h2>
                    <form action="login.php" method="POST">
                           <input type="text" name="username" class="input-box" placeholder="Enter your username" required>
                            <input type="password" name="password" class="input-box" placeholder="Enter your password" required>
                       
                        <button type="submit" name="login" class="submit-btn">Submit</button>
                       
                </form>
                <button type="button" class="btn" onclick="openRegister()">I am new Here</button>
                <a href="#">Forget Password</a>
                </div>
   
  
                
               
                <div class="card-back">
                <h2>Signup</h2>
                    <form action="register.php" method="POST">
                         <input type="name" name="name" class="input-box" placeholder="Enter your name" required>
                        <input type="username" name="username" class="input-box" placeholder="Enter your username" required>
                        <input type="email" name="email" class="input-box" placeholder="Enter your email" required>
                        <input type="number" name="number" class="input-box" placeholder="Enter your number" required>
                        <input type="password" name="password" class="input-box" placeholder="Enter your password" required>
                        <input type="address" name="address" class="input-box" placeholder="Enter your address" required>
                        <select name="role" id="role" class="input-box">
                            <option value="hostel_owner">Hostel Owner</option>
                            <option value="user">User</option>
                        </select>
                        <button type="submit" name="signup" class="submit-btn">Submit</button>
                       
                </form>

                <button type="button" class="btn" id="btn-log" onclick="openLogin()">I have an account</button>
              
                </div>
            </div>
        </div>
    </div>

    <script>

        var card = document.getElementById('card');

        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }
    </script>
</body>
</html>