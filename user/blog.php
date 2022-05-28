<?php include 'header.php' ;

include 'dbconnect.php';
$sql = 'SELECT blogs.*
FROM blogs';
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
    font-size: 2rem;">Blogs</h1><br>


    <div class="hostel container">
    <?php 
    
    foreach($query as $q){
    
          ?>
    
      <div class="hostel__card">
    <img class="hostel__card__img" src="admin/uploads/<?php $im=$q['blog_image']; echo $im;?>" />
             
        <h5 class="hostel__card__name"><?php echo $q['blog_title'];?></h5>
        <p class="hostel__card__type"><?php echo $q['blog_short'];?></p>
<br>

        <a href="viewblog.php?id=<?php echo $q['blog_id'] ?>&username=<?php echo $_GET['usernaem'];?>" class="btn btn-light"> <button class="btn_read" style="margin: 25px; height: 50px; width: 150px;"> Read More <span class="text-danger">&rarr;</span></button></a>
       
      </div>
    
      <?php }
    
     ?>
       </div>
  
       </div> 

<?php include 'footer.php';
?>

</body>
</html>