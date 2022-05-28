<!DOCTYPE html>

<?php $username = $_GET['username'] ; ?>
<?php include 'dbconnect.php';  ?>
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

    <!-- CSS -->
    <link rel="stylesheet" href="css/homeStyle.css" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>Hostel Seeking!</title>
  </head>
  <body>
    <div class="navigation-area">
      <div class="navigation container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid navigation__logo">
            <a class="navbar-brand" href="index.php?username=<?php echo $_GET['username'];?>">HostelWala</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- .navigation__logo -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent navigation__manu">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navigatoin__manu__ul">
                <li class="nav-item">
                  <a class="nav-link active navigatoin__manu__ul__link" aria-current="page" href="index.php?username=<?php echo $_GET['username'];?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link navigatoin__manu__ul__link" aria-current="page" href="about.php?username=<?php echo $_GET['username'];?>">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link navigatoin__manu__ul__link" aria-current="page" href="hostel.php?username=<?php echo $_GET['username'];?>">Hostel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link navigatoin__manu__ul__link" aria-current="page" href="room.php?username=<?php echo $_GET['username'];?>">Room Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link navigatoin__manu__ul__link" aria-current="page" href="blog.php?username=<?php echo $_GET['username'];?>">Blog</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link navigatoin__manu__ul__link" aria-current="page" href="logout.php">Log Out</a>
                </li>

              </ul>
              <!-- .navigation__manu__ul -->

              
      <form class="d-flex navigation__ manu__search" method="POST">

        <input type="search" name="str" class="form-control me-2 navigation__ manu__search__text" placeholder="search your hostel">
        
        <input type="submit" name="submit" value="Search Now" class="submit">
      </form>

      <?php

if (isset($_POST['submit'])) {
   
  $str = mysqli_real_escape_string($conn, $_POST['str']);
  $sql1 = "select * from hostel where hostel_name like '%$str%' or hostel_description like '%$str%' or hostel_price like '%$str%' or hostel_status like '%$str%' or hostel_type like '%$str%' or city like '%$str%' or address like '%$str%'";
  $res = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
      // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
      // echo "<a href='view.php?id=".$row['hostel_id']."'>".$row['hostel_name'];

      echo '<div class="hostel container">
      <div class="hostel__card">
        
           
          
            
        
  
        <p class="hostel__card__call">'.$row['hostel_type'].'</p>
        <h5 class="hostel__card__name">'. $row['hostel_name'].'</h5>
        <p class="hostel__card__type">'.$row['hostel_status'].'</p>
        <p class="hostel__card__address">
          <span><i class="fa-solid fa-location-dot"></i></span>
          '.$row['address'].'?>
        </p>
        <div class="hostel__card__room">
          <div class="hostel__card__room__details">
            <p class="hostel__card__room__details__info">Price</p>
            <p class="hostel__card__room__details__num">'.$row['hostel_price'].'bdt</p>
          </div>
          <a href="view.php?id='.$row['hostel_id'].'" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
              <?php } ?>
        
        </div>
      </div>
   
    </div>';
     
      echo '<br>';
      
    
    }
  } else {
    echo 'no data found';
  }
}
?>

               
                   <!-- </form> -->
              <!-- .navigation__search__btn -->
            </div>
            <!-- .navigation__manu -->
          </div>
        </nav>
      </div>
      <!-- .navigation -->
    </div>
    <!-- navigation-area -->
    <script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'action.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>



  
  </body>
</html>
