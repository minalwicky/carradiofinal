<!DOCTYPE html>
<html lang="en">
<head>
<title>CARRADIO</title>
<meta charset="utf-8">
<link rel="stylesheet" href="buyer.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300&display=swap" rel="stylesheet"> 

</head>
<body>
  <div class="bar">
  <img src="LOGO_G.png" class="logo">
    <nav>
    <ul>
        <li><a  href="buyerprofile.php">Home</a></li>
        <li><a class="active" href="buyerpage.php">Vehicles</a></li>
        <li><a  href="buyermessage.php">Messages</a></li>
        <li><a href="contactbuyer.php">Contact Us</a></li>
        
        
      </ul>
    </nav>
  </div>
<br><br>
<h2 >
<?php

      session_start();
      $uname = $_SESSION['uname'];
      echo "Welcome "  .$uname. ",here are the newest cars available for sale "
      ?>
</h2>


<div class="header">
</div>
<script>
function newWindow(url, width, height)
{
    myWindow=window.open(url,'','width=' + width + ',height=' + height);
}
</script>
<form  method="POST">
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="submit6">Search</button>
    </form>
<div class="row"> 
<div class="column" style="background-color:white;align-items:center;"> 
<?php
 include('inc/dbConn.php');
 if (isset($_POST['submit6'])) {
  $searchValue = $_POST['search'];
  $_SESSION['searchvalue']=$searchValue;
  header('location:searchpage.php');
 }

    $query = mysqli_query($conn, "SELECT * FROM carsdetail WHERE approval='approved' AND deleted='no'");
    
       while ($row = mysqli_fetch_array($query)) {     
      
          
          
          ?>



  <div class="column" style="background-color:seagreen; align-items:center; display:inline-block; border-radius: 0.5cm; ">
  <?php
  echo "<img src='images/".$row['photo'] . "' style='width: 325px; height: 200px;'> "
  ?>
  <ul>
    
    <?php
   
    echo "<li>Ad ID: " .$row['id']. "</li>"
  
    ?>
  </ul>
  <ul>
  <ul>
    
    <?php
   
    echo "<li>Name: " .$row['title']. "</li>"
  
    ?>
  </ul>
  <ul>
    
    <?php
    
    echo "<li>Year of manufacture: ".$row['yom']. "</li>"
   
    ?>
  </ul>
  <ul>
    <?php
    
    echo "<li>Car make: ".$row['make'] ."</li>"
   
    ?>
  </ul>
  <ul>
    <?php
    
    echo "<li>Car model: ".$row['model']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
    
    echo "<li>Car condition: ".$row['car_type']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
   
    echo "<li>Car mileage: ".$row['mileage']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
    
    echo "<li>Fuel type: ".$row['fuel']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
   
    echo " <li>Gearbox type: ".$row['gearbox']. "</li>"
     
    ?>
  </ul>
  <ul>
    
    <?php
    
    echo "<li>Colour of car: ".$row['color']. "</li>"
    
    ?>
  </ul>
  <ul>
    
    <?php
    
    echo "<li>Price: ".$row['price']. "</li>"
    
    ?>
  </ul>
  <ul>
    
    <?php
    
    echo "<li>Description: ".$row['descr']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
    
    echo "<li>Name of seller: ".$row['sellername']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
   
   echo "<li>Contact number of seller: ".$row['sellernum']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
   
   echo "<li>Email address of seller: ".$row['selleremail']. "</li>";
   $buyername=$row['buyersname'];
   if ($buyername == 'no' ) {
    ?>
  </ul>
  <form method="POST">
  <button type="submit" id="like" name="submit4" style="
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    border-radius:0.25cm;
    cursor: pointer;
    " onclick="newWindow('buyconfirm.php',500,500)">Like</button>
  </form>
 <?php
   }
   ?>
  
  </div>
  <?php
   
       }
       ?>

</body>
</html>