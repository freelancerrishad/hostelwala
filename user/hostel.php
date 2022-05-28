<?php include 'header.php' ;

include 'dbconnect.php';
$sql = 'SELECT hostel.*, hostel_image.*,room.*
FROM hostel
INNER JOIN hostel_image INNER JOIN room ON hostel.hostel_id=hostel_image.hostel_id AND hostel.hostel_id=room.hostel_id';
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Website Landing Page With Full Screen Draggable Image Slider - Html, Css & Javascript</title>
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    

<div class="hostel_area">
<h1 class="container" style="text-align: center; padding: 1rem 0; color: #2f4a69;
    font-weight: 700;
    font-size: 2rem;">Hostels</h1><br>


    <div class="hostel container">
    <?php 
    
    foreach($query as $q){
    
            if($q['admin_status']==1){
          ?>
    
      <div class="hostel__card">

    <img class="hostel__card__img" src="../hostel_owner/gallary_images/<?php $im=$q['image']; echo $im;?>" />
             
        <p class="hostel__card__call"><?php echo $q['hostel_type'];?></p>
        <h5 class="hostel__card__name"><?php echo $q['hostel_name'];?></h5>
        <p class="hostel__card__type"><?php echo $q['hostel_status'];?></p>
        <p class="hostel__card__address">
          <span><i class="fa-solid fa-location-dot"></i></span>
          <?php echo $q['address'];?>
        </p>
        <div class="hostel__card__room">
          <div class="hostel__card__room__details">
            <p class="hostel__card__room__details__info">Price</p>
            <p class="hostel__card__room__details__num"><?php echo $q['hostel_price'];?>bdt</p>
          </div>
               
        
        </div>
<div class="cl" style="display: flex; margin: 10px;">
        <div class="hostel__card__room__details">
            <p class="hostel__card__room__details__info">Bath</p>
            <p class="hostel__card__room__details__num"><?php echo $q['bathroom'];?></p>
           
          </div>
          
          </div><br>

        <a href="view.php?id=<?php echo $q['hostel_id'] ?>&username=<?php echo $_GET['username'];?>" class="btn btn-light"> <button class="btn_read" style="margin: 25px; height: 50px; width: 150px;"> Read More <span class="text-danger">&rarr;</span></button></a>
       
      </div>
    
      <?php }
    
    } ?>
       </div>
  
       </div> 

<?php include 'footer.php';
?>

</body>
</html>