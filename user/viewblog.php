<?php 
 include 'header.php' ;
  include 'dbconnect.php';
$id = $_GET['id'];
  $sql = "SELECT blogs.* FROM blogs where blogs.blog_id = '$id'";
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
        ?> 
    <header1>
     
      <div class="header1 container">
        <div class="header__box1">
        <h3 class="header__title"><?php echo $q['blog_title'] ; ?></h3>
      
        <hr />
        <img class="header__img" src="admin/uploads/<?php echo $q['blog_image'] ; ?>" alt="" />
        </div>
       
       
      </div>
    </header1>
    <div class="summary-area">
      <div class="summary container">
        <p class="summary__title">Blogs</p>
        <hr class="summary__hr" />
        <div class="summary__feature">
          <ul class="feature__ul">
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span>Blog Name : <?php echo $q['blog_title'] ; ?></span>
            </li>
            <li class="feature__ul__list">
              <i class="fa-solid fa-angle-right"></i>
              <span> Blog Short  : <?php echo $q['blog_short'] ;?></span>
            </li>
            
            
           
          </ul>
          
        </div>
      </div>
    </div>
   
    <div class="summary-area">
      <div class="summary container">
        <p class="summary__title"> DESCRIPTION</p>
        <hr class="summary__hr" />
        <div class="summary__feature">
          
            <li class="feature__ul__list">
            
              <span>  <?php echo $q['blog_des'] ;}?></span>
            </li>
          </ul>
        </div>
      </div>
    </div>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
