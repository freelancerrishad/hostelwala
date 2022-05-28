
      <?php
        include 'dbconnect.php';
        include 'header.php';

        if (isset($_POST['submit1'])) {

            $str = mysqli_real_escape_string($conn, $_POST['str']);
            $location = mysqli_real_escape_string($conn,$_POST['location']);
            
            $sql1 = "select * from hostel WHERE  hostel_type like '%$str%'  
            AND city like '%$location%'";
            $res = mysqli_query($conn, $sql1);
            echo $str;
            echo $location;
            if (mysqli_num_rows($res) > 0) {
                 while ($row = mysqli_fetch_assoc($res)) {
                    // echo "<span style='color:white; font-size: 40px'>Your search result: &nbsp;&nbsp;</span>";
                    // echo "<a href='view.php?id=".$row['hostel_id']."'>".$row['hostel_name'];
                    $row = mysqli_fetch_assoc($res);
                    echo '<div class="hostel container">
      <div class="hostel__card">
        
           
          
            
        
  
        <p class="hostel__card__call">' . $row['hostel_type'] . '</p>
        <h5 class="hostel__card__name">' . $row['hostel_name'] . '</h5>
        <p class="hostel__card__type">' . $row['hostel_status'] . '</p>
        <p class="hostel__card__address">
          <span><i class="fa-solid fa-location-dot"></i></span>
          ' . $row['address'] . '?>
        </p>
        <div class="hostel__card__room">
          <div class="hostel__card__room__details">
            <p class="hostel__card__room__details__info">Price</p>
            <p class="hostel__card__room__details__num">' . $row['hostel_price'] . 'bdt</p>
          </div>
          <a href="view.php?id=' . $row['hostel_id'] . '" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
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