<?php 
 include 'header.php' ;
  include 'dbconnect.php';
$id = $_GET['id'];
  $sql = "SELECT hostel.*,hostel_image.*,room.* FROM hostel INNER JOIN hostel_image INNER JOIN room ON hostel.hostel_id=hostel_image.hostel_id AND hostel.hostel_id =  room.hostel_id HAVING hostel.hostel_id = '$id'";
  $query = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- Fontawosom -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/details.css" />
    <link rel="stylesheet" href="user/css/comment.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php 
    foreach($query as $q) {
      if($q['admin_status']==1){
        ?> 
    <header1>
     
      <div class="header1 container">
        <div class="header__box1">
        <h3 class="header__title"><?php echo $q['hostel_name'] ; ?></h3>
        <p class="hostel__card__address">
          <span><i class="fa-solid fa-location-dot"></i></span>
          <?php echo $q['address'] ; ?><span style="color: #faaa39"><?php echo 'Price:'.$q['hostel_price'] ; ?></span>
        </p>
        <hr />
        <img class="header__img" src="hostel_owner/gallary_images/<?php echo $q['image'] ; ?>" alt="" />
        </div>
        <div class="header__box2">
          <h3 class="message__title" style="border-bottom: 1px dashed black;">Plano AND Tramo LTD.</h3><br><br> 
          <h3 class="message_title" style="color: green;">For Send Any Kind Of Message To The Sellers Please Log In</h3>
          <a href="signup.php" target="blank"><button class='btn_go'> LogIn</button></a>
         
        </div>
       
      </div>
    </header1>
    <div class="summary-area">
      <div class="summary container">
        <p class="summary__title">HOSTEL SUMMARY</p>
        <hr class="summary__hr" />
        <div class="summary__feature">
          <ul class="feature__ul">
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Property Name : <?php echo $q['hostel_name'] ; ?></span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Type : <?php echo $q['hostel_type'] ;?></span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Property_Status:<?php echo $q['hostel_status'] ;?></span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Bathroom: <?php echo $q['bathroom'] ;?></span>
            </li>
           
          </ul>
          <ul class="feature__ul">
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Location : <?php echo $q['address'] ;?></span>
            </li>
           
           
          </ul>
        </div>
      </div>
    </div>
    <div class="summary-area">
      <div class="summary container">
        <p class="summary__title">PROPERTY  FEATURES</p>
        <hr class="summary__hr" />
        <div class="summary__feature">
          <ul class="feature__ul">
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Mosque/Prayer Room</span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Fire exit</span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Electricity</span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Gas Connection</span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Generator</span>
            </li>
          </ul>
          <ul class="feature__ul">
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> CCTV </span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Lift</span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Telephone line</span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Wi-Fi connectivity</span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Electronic security</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="summary-area">
      <div class="summary container">
        <p class="summary__title">PROPERTY  DESCRIPTION</p>
        <hr class="summary__hr" />
        <div class="summary__feature">
          
            <li class="feature__ul__list">
            
              <span>  <?php echo $q['hostel_description'] ;}}?></span>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <br>
        <h1 style="border-bottom: 1px dotted black;">Comments:</h1>
        <div class="bod" style="margin-left: 100px;">
        <div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comm where hostel_id = $id";
			$result = mysqli_query($conn, $sql);
            
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['comm_name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comm_des']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
        </div> 


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
