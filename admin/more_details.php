<!DOCTYPE html>

<?php

session_start();

include "connection.php";

if (!isset($_SESSION["username"])) {
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
	<script src="https://kit.fontawesome.com/04827ae212.js" crossorigin="anonymous"></script>

	<!----===== Boxicons CSS ===== -->

	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />



	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">

	<link rel="stylesheet" href="css/style.css">


	<style>
		.height10 {
			height: 10px;
		}

		.mtop10 {
			margin-top: 10px;
		}

		.modal-label {
			position: relative;
			top: 7px
		}
	</style>



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
						<?php echo '<a href="index.php?username=' . $username . '">' ?>
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


						<i class="fa-solid icon fa-circle-check"></i>
						<span class="text nav-text">Confirm Pannel</span>
						</a>
					</li>


					<li class="nav-link">
						<a href="https://dashboard.tawk.to/#/dashboard/6262fbe67b967b11798c0cda" target="blank">


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

	<section class="home" style="height: auto;">
		<div class="text">Admin Confirmation</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm">
					<div class="row">
						<?php
						if (isset($_SESSION['error'])) {
							echo
							"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						" . $_SESSION['error'] . "
					</div>
					";
							unset($_SESSION['error']);
						}
						if (isset($_SESSION['success'])) {
							echo
							"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						" . $_SESSION['success'] . "
					</div>
					";
							unset($_SESSION['success']);
						}
						?>
					</div>
					
					<div class="height10">
					</div>
					<div class="row">
						<table id="myTable" class="table table-bordered table-striped">
							<thead>
								<th>ID</th>
								<th>hostel Name</th>
							
								<th>hostel Description</th>
								<th>hostel Price</th>
								<th>hostel Status</th>
								<th>hostel Type</th>
								
								<th>City</th>
								<th>Address</th>
							
								<th>Username</th>
								<th>Confirmation</th>
							</thead>
							<tbody>
								<?php
								include 'connection.php';
								$username = $_GET['username'];
								$sql = "SELECT * FROM hostel";

								//use for MySQLi-OOP
								$result = mysqli_query($conn, $sql) or die("Query Failed");
								if (mysqli_num_rows($result) > 0) {
									while ($row =  mysqli_fetch_assoc($result)) {
										echo
										"<tr>
									<td>" . $row['hostel_id'] . "</td>
									
									<td>" . $row['hostel_name'] . "</td>
									
									<td>" . $row['hostel_description'] . "</td>
									<td>" . $row['hostel_price'] . "</td>
									<td>" . $row['hostel_status'] . "</td>
									<td>" . $row['hostel_type'] . "</td>
									
										<td>" . $row['city'] . "</td>
										<td>" . $row['address'] . "</td>
										
                                        <td>" . $row['username'] . "</td>" ?>

								<?php
										if ($row['admin_status'] == 0) {
											echo "<td>
											<a href='confirmed.php?id=" . $row['hostel_id'] . "&username=".$username."' class='btn btn-danger btn-sm' data-toggle='modal'><i class='fa-solid fa-plug-circle-exclamation'></i>waiting for Confirm</a>
									</td>
								</tr>";
										} else {
											echo "<td>
									<a href='unconfirm.php?id=" . $row['hostel_id'] . "&username=".$username."' class='btn btn-success btn-sm' data-toggle='modal'><i class='fa-solid fa-square-check'></i> Confirmed</a>
							</td>
						</tr>";
										}
									}
								}


								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<?php include('add_modal.php') ?>



	</section>

	<script src="jquery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTable.bootstrap.min.js"></script>

	<script>
		const body = document.querySelector('body'),
			sidebar = body.querySelector('nav'),
			toggle = body.querySelector(".toggle"),
			searchBtn = body.querySelector(".search-box"),
			modeSwitch = body.querySelector(".toggle-switch"),
			modeText = body.querySelector(".mode-text");

		$(document).ready(function() {
			//inialize datatable
			$('#myTable').DataTable();

			//hide alert
			$(document).on('click', '.close', function() {
				$('.alert').hide();
			})
		});


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

<style>
	.PP {
		text-align: center;
	}
</style>

</html>