<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .roommates_info{
        margin: 48px 20px;
    }
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  display: flex;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
    <?php 
include 'header.php'; ?>
<div class="roommates_info">
<h2 style="text-align:center">Members of this hostel</h2><br><br>

<div class="card">
<?php 
include 'dbconnect.php';
$id = $_GET['id'];
$username = $_GET['username'];
$sql = "SELECT * FROM roommate_information WHERE room_id='$id'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        

?>
  <h3>RoomMate Name 01: <?php echo $row['roommate_name1'] ; ?></h3>
  <p class="title">Member01 Profession: <?php echo $row['roommate_profession1'] ; ?></p>
  <h3>RoomMate Name 02: <?php echo $row['roommate_name02'] ; ?></h3>
  <p class="title">Member02 Profession: <?php echo $row['roommate_profession02'] ; ?></p>
  <h3>RoomMate Name 03: <?php echo $row['roommate_name03'] ; ?></h3>
  <p class="title">Member03 Profession: <?php echo $row['roommate_profession03'] ; ?></p>
  
  
  <?php     }
} ; ?>
</div>
</div>

<h1>If you want to book this room go to payment option</h1>
<a href="payment.php?id=<?php echo $_GET['id'];?>&username=<?php echo $_GET['username'];?>&amount=<?php echo $_GET['amount'];?>"><button class="payment" style="background-color: white; border: 1px solid black; width: 200px">Payment</button></a>
</body>
</html>
