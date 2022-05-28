<!DOCTYPE html>

<?php
  include "connection.php";
   session_start();

  if(!isset($_SESSION["username"])){
    header("Location: ../signup.php");
  }
  $username = $_GET['username'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Plano &</span>
                    <span class="profession">Tramo</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                      <?php echo '<a href="index.php?username='. $username.'">'?>
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
					<?php echo '<a href="profile.php?username='. $username.'">'?>
                     
                       
					<img src="img/profile.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Profile</span>
                        </a>
                    </li>

                       
                    <li class="nav-link">
					<?php echo '<a href="more_details.php?username='. $username.'">'?>
                     
                       
					<img src="img/plus.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Add More details</span>
                        </a>
                    </li> 

					<li class="nav-link">
					<?php echo '<a href="chat.php?username='. $username.'">'?>
                     
                       
					<img src="img/chat.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Chat</span>
                        </a>
                    </li> 

                 

                    

                

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    
                    <a href="logout.php">
                    <i class='bx bx-log-out icon' ></i></a>
                        <a href="logout.php"><span class="text nav-text">Logout</span></a>
                   
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home" style="height: 100%;">
        <div class="text">Profile</div><br><br><br>

        <div class="container">
           <form action="">
               <section class="full">
                   <!-- <div class="first"></div> -->
                   <div class="title">
                        <b>Name</b><br><br>
                        <b>Email</b><br><br>
                        <b>Address</b><br><br>
                        <b>Mobile</b><br><br>
                        <b>Username</b><br><br>
                       
                   </div>
                   <div class="middle"></div>
                   <div class="value">
                        <?php 
                        $username = $_GET['username'];
                            $sql = "SELECT * FROM signup WHERE signup_username = '$username'";
                            $result = mysqli_query($conn, $sql) or die("Query Failed");
							if (mysqli_num_rows($result) > 0) {
								while ($row =  mysqli_fetch_assoc($result)) {
                                    $password = trim($row['signup_password']);
                                    $password = md5($password);
                                    
                                   

                                    echo "<b>".$row['signup_name']."</b><br><br>";
                                    echo "<b>".$row['signup_email']."</b><br><br>";
                                    echo "<b>".$row['signup_address']."</b><br><br>";
                                    echo "<b>".$row['signup_number']."</b><br><br>";
                                    echo "<b>".$row['signup_username']."</b><br><br>";
                                  
                                }
                            }
                         ?>
                   </div>
               </section>
           </form>
        </div>
        
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>
