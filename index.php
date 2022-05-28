<?php include 'header.php' ; ?>
<?php
include 'dbconnect.php';
$sql = 'SELECT hostel.*, hostel_image.*
FROM hostel
INNER JOIN hostel_image ON hostel.hostel_id=hostel_image.hostel_id;';
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/homeStyle.css">
   

    <title>Document</title>
</head>
<body>
<div class="banner container">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/58235145.jpg" class="d-block w-100 banner__img" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/istockphoto-956062278-612x612.jpg" class="d-block w-100 banner__img" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/95d93db71293f4acb0502c3a50b7f6f3.jpg" class="d-block w-100 banner__img" alt="..." />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- .banner -->
    <div class="search container">
      <form action="show.php" method="POST">
    <select name="location" id="location" class="search__box">
        <option value="location">Location</option>
        <option value="dhaka">Dhaka</option>
        <option value="khulna">Khulna</option>
        <option value="ctg">Chittagong</option>
        <option value="rajshahi">Rajshahi</option>
        <option value="sylhet">Sylhet</option>
        <option value="rangpur">Rangpur</option>
        <option value="barishal">Barishal</option>
        <option value="gazipur">Gazipur</option>
        <option value="narayanganj">Narayanganj</option>
        <option value="comilla">Comilla</option>
        <option value="bogra">Bogra</option>
        <option value="kuakata">Kuakata</option>
        <option value="tangail">Tangail</option>
       

      </select>

      <select name="hosteltype" id="propertytype" class="search__box">
        <option value="propertytype">Hostel Type</option>
        <option value="boys_hostel">Boys Hostel</option>
        <option value="girls_hostel">Girls Hostel</option>
      </select>

   
      <button class="button_search" type="search2" name="search2">Search</button>
      </form>
    </div>

    <div class="card-heading container">
      <h2 class="card-heading__title">Features Of Hostels</h2>
      <p class="card-heading__text">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam incidunt quos laborum iure cum
        quia?Lorem,Lorem, ipsum dolor sit
      </p>
    </div>

    <!-- .card__heading -->

    <div class="card-area">
      <div class="cards container">
        <div class="cards__info">
          <div class="cards__info__icon">
            <i class="fa-solid fa-graduation-cap"></i>
          </div>
          <h4 class="cards__info__name">In House Student</h4>
          <p class="cards__info__content">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, amet?
          </p>
        </div>
        <!-- .card__info -->
        <div class="cards__info">
          <div class="cards__info__icon">
            <i class="fa-solid fa-briefcase"></i>
          </div>
          <h4 class="cards__info__name">In House Corporate</h4>
          <p class="cards__info__content">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, amet?
          </p>
        </div>
        <!-- .card__info -->
        <div class="cards__info">
          <div class="cards__info__icon">
            <i class="fa-solid fa-star"></i>
          </div>
          <h4 class="cards__info__name">Vip House</h4>
          <p class="cards__info__content">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, amet?
          </p>
        </div>
        <!-- .card__info -->
        <div class="cards__info">
          <div class="cards__info__icon">
            <i class="fa-solid fa-wifi"></i>
          </div>
          <h4 class="cards__info__name">Wifi</h4>
          <p class="cards__info__content">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, amet?
          </p>
        </div>
        <!-- .cards__info -->
      </div>
      <!-- .card -->
    </div>
    <!-- .card-area -->

    <!-- .hostels -->
  
    <div class="hostel_area">
    <h1 class="container" style="text-align: center; padding: 1rem 0; color: #2f4a69;
    font-weight: 700;
    font-size: 2rem;">Hostels</h1><br>
    <div class="hostel container">
    
    <?php 
     $counter=0;
    foreach($query as $q){
      if($counter < 6 ){
        if($q['admin_status']==1){
      ?>
      <div class="hostel__card">

    <img class="hostel__card__img" src="hostel_owner/gallary_images/<?php $im=$q['image']; echo $im;?>" />
             
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
          <a href="view.php?id=<?php echo $q['hostel_id'] ?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
              
        
        </div>

     

      </div>
      <?php $counter++; } } }?>
      </div>
      <a href="hostel.php" class="btn btn-light" style="margin-left: 40%"> <button class="btn_read" style="margin: 25px; height: 50px; width: 400px; background-color: gray; left: 50%"> Load More <span class="text-danger">&rarr;</span></button></a>
     
   
    </div> 
    <!-- .hostel end -->


 
    
    <div class="about-us">
      <div class="about container">
        <h2 class="about__title">About Us</h2>
        <div class="about__content">
          <div class="about__content__info">
            <h3 class="about__content__info__title">Discover what makes us a qualityfull hostel</h3>
            <p class="about__content__info__description">
              Hostel means a buffet of memories. In this Dhaka city too many students come from the local area. These
              students want a good environment for study and also want a safe living place. So, it's a very tough
              situation to find a good hostel in a short time. For this reason we develop this website which is helpful
              for students searching for their hostel. You can visit our website. I hope it will be helpful for you.
            </p>
            <div class="about__content__info__member">
              <p class="about__content__info__member__counter">
                1.5k+<br />
                <span class="about__content__info__member__title">Student</span>
              </p>
              <p class="about__content__info__member__counter">
                2k+<br />
                <span class="about__content__info__member__title">Job Holders</span>
              </p>
              <p class="about__content__info__member__counter">
                1k+<br />
                <span class="about__content__info__member__title">VIP</span>
              </p>
            </div>
            <!-- .about__content__info__member -->
          </div>
          <!-- .about__content__info -->
          <div class="about__content__imgs">
            <img src="img/hotel-resort-img1.jpg " class="about__content__imgs__img" alt="Hostel Image" />
          </div>
          <!-- .about__content__info__img -->
        </div>
        <!-- .about__content__info -->
      </div>
    </div>

    <div class="join-area">
      <div class="join container">
        <h2 class="join__title">Join us today</h2>
        <p class="join__text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Soluta, repudiandae!.
        </p>
        <input type="email" placeholder="Enter Your Email" class="join__mail" />
        <input type="submit" value="Submit" class="join__submit" />
      </div>
      <!-- .join-->
    </div>
    <!-- .join-area -->

  <?php include 'footer.php' ; ?>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/625db0e37b967b11798b4aa2/1g0uvlurr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>