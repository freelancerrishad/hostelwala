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
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
 
    
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
        <div class="text">Chat with user</div>
        <div class="container">
        
    
  
      <?php 
        $sql = "SELECT chat.*,hostel.* FROM chat INNER JOIN hostel ON chat.outgoing_msg_id=hostel.hostel_id HAVING hostel.username = '$username' ";
            $query = mysqli_query($conn,$sql);
         foreach($query as $q){
        ?>
       <h1><span><?php echo "Name: &nbsp;".$q['name'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo "Email: &nbsp;".$q['email'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo "Number: &nbsp;".$q['number'];?></span></h1>
        <p style="font-size: 20px; border: 1px solid black; margin-bottom: 30px; margin-top: 10px"><?php echo "Message: &nbsp;".$q['message']; echo "\n";}?></p> 
        
          
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
