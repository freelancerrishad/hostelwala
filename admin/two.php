<!DOCTYPE html>

<?php
include "connection.php";
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../signup.php");
}
$username = $_GET['username'];

$idselection = mysqli_real_escape_string($conn,$_POST['idselection']);
$bedroom = mysqli_real_escape_string($conn,$_POST['bedroom']);
$bathroom = mysqli_real_escape_string($conn,$_POST['bathroom']);
$balconies = mysqli_real_escape_string($conn,$_POST['balconies']);
$garages = mysqli_real_escape_string($conn,$_POST['garages']);

$sql = "INSERT INTO property_basic_feature(bedroom,bathroom,balconies,garages,username,id) VALUES ('$bedroom','$bathroom','$balconies','$garages','$username','$idselection')";
mysqli_query($conn,$sql);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/details.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />


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
                        <?php echo '<a href="index.php?username='.$username.'&id='.$idselection.'">' ?>
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <?php echo '<a href="profile.php?username=' . $username . '">' ?>


                        <img src="img/profile.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Profile</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <?php echo '<a href="more_details.php?username=' . $username . '">' ?>


                        <img src="img/plus.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Add More details</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <?php echo '<a href="chat.php?username=' . $username . '">' ?>


                        <img src="img/chat.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Chat</span>
                        </a>
                    </li>







                </ul>
            </div>

            <div class="bottom-content">
                <li class="">

                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i></a>
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
        <div class="text">Add More Details about your property</div>
        <div class="container">
            <div class="details">

                <div class="progress-bar">
                    <div class="step">
                        <p>
                            Basic Information
                        </p>
                        <div class="bulle">
                            <span><img src="img/checked.png" alt="" height="21px"></span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Description
                        </p>
                        <div class="bullet">
                            <span>2</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Attachment
                        </p>
                        <div class="bullet">
                            <span>3</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Submit
                        </p>
                        <div class="bullet">
                            <span>4</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                </div>
                <div class="form-outer">
                    <?php $username = $_GET['username'];

                    echo '
                    <form action="property_additional.php?username='.$username.'&id='.$idselection.'"method="POST">'?>

                    <div class="page" style="width: 25%;">
                        <div class="title">
                            Property Additional Information *
                        </div>
                        <div class="con">
                            <div class="field">
                                <div class="label">
                                    Floor avaiable on
                                </div>
                                <select name="floor" class="form-control">
                                    <option value="Ground">Ground</option>
                                    <option value="1st Floor">1st Floor</option>
                                    <option value="2nd Floor">2nd Floor</option>
                                    <option value="3rd Floor">3rd Floor</option>
                                    <option value="4th Floor">4th Floor</option>
                                    <option value="5th Floor">5th Floor</option>
                                    <option value="6th Floor">6th Floor</option>
                                    <option value="7th Floor">7th Floor</option>
                                    <option value="8 Floor">8 Floor</option>
                                    <option value="9 Floor">9 Floor</option>
                                    <option value="10 Floor">10 Floor</option>
                                    <option value="11 Floor">11 Floor</option>
                                    <option value="12 Floor">12 Floor</option>

                                </select>
                            </div>

                            <div class="field" style="width: 70px;">
                                <div class="label" style="width: 150px;">
                                    Total Number Of FLoor
                                </div>
                                <select name="num_floor" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>

                                </select>
                            </div>

                            <div class="field">
                                <div class="label">
                                    Facing
                                </div>
                                <select name="facing" class="form-control">
                                    <option value="South Facing">South Facing</option>
                                    <option value="East Facing">East Facing</option>
                                    <option value="North Facing">North Facing</option>
                                    <option value="West Facing">West Facing</option>


                                </select>
                            </div>


                            <div class="field">
                                <div class="label">
                                    Handover Date *

                                </div>
                                <input type="date" name="date">
                            </div>
                        </div>
                        <div class="field btns">
                            <button class="submit next">Next</button>
                        </div>
                    </div>

                    </form>
                    <?php
                    $username =  $_GET['username'];

                    echo '
                    <a href="more_details.php?username=' . $username . '">' ?><button class="prev-1 prev">Back To Previous page Editor</button></a>
                </div>



            </div>
        </div>
    </section>
    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>
</body>

</html>