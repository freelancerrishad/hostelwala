<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/room.css">
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
    <link rel="stylesheet" type="text/css" href="css/comment.css">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php';
    include 'dbconnect.php';

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>?username=<?php echo $_GET['username']; ?>" class="form_one" method="POST">
    <select class="form-control" name="idselection">
        <option selected>Select Your hostel</option>
        <?php
        $res = mysqli_query($conn, "select * from hostel");
        while ($row = mysqli_fetch_assoc($res)) {
            // if($row['id']==$id){
            // 	echo "<option selected value=".$row['hostel_id'].">".$row['hostel_name']."</option>";
            // }else{
            echo "<option value=" . $row['hostel_id'] . ">" . $row['hostel_name'] . "</option>";
        }
       
        ?>
        
    </select>
    <button name="submit1" class="submit1">Submit</button>
    </form><br><br><br><br><br><br><br>
    
    <div class="hostel container">
    <?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
    $hostel_id = mysqli_real_escape_string($conn,$_POST['idselection']);
    $sql = "SELECT room.*,hostel_image.* FROM room INNER JOIN hostel_image ON room.hostel_id = hostel_image.hostel_id HAVING room.hostel_id='$hostel_id'";
    $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result) >0){
         
        foreach($result as $q){?>
      <div class="hostel__card">

<img class="hostel__card__img" src="../hostel_owner/gallary_images/<?php $im=$q['image']; echo $im;?>" />
         
    <p class="hostel__card__call"><?php echo "Room Type: ". $q['room_type'];?></p>
    <h5 class="hostel__card__name"><?php echo "Number of person: ".$q['number_of_person'];?></h5>
    <p class="hostel__card__type"><?php echo "Room Size: ".$q['room_size'];?></p>
    
    <div class="hostel__card__room">
      <div class="hostel__card__room__details">
        <p class="hostel__card__room__details__info">Price</p>
        <p class="hostel__card__room__details__num"><?php echo $q['room_price'];?>bdt</p>
      </div>
           
    
    </div>
<div class="cl" style="display: flex; margin: 10px;">
    <div class="hostel__card__room__details">
        <p class="hostel__card__room__details__info">Bath</p>
        <p class="hostel__card__room__details__num"><?php echo $q['bathroom'];?></p>
       
      </div>
      
      </div>
      
      <div class="cl" style="display: flex; margin: 10px;">
    <div class="hostel__card__room__details">
        <p class="hostel__card__room__details__info">Room Number</p>
        <p class="hostel__card__room__details__num"><?php echo $q['room_number'];?></p>
       
      </div>
      
      </div><br>

    <a href="member.php?id=<?php echo $q['hostel_id'] ?>&username=<?php echo $_GET['username'];?>&amount=<?php echo $q['room_price'];?>" class="btn btn-light"> <button class="btn_read" style="margin: 25px; height: 50px; width: 150px;"> Member Details <span class="text-danger">&rarr;</span></button></a>
   
  </div>

      <?php  }
     }
    
    }
     ?>
    </div>

</body>

</html>