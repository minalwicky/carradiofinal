<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<title>CARRADIO</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="buyer.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <div class="bar">
        <img src="LOGO_G.png" class="logo">
            <nav>
            <ul>
                <li><a href="sellerpage.php">Add new vehicle</a></li>
                <li><a class="active" href="sellerapproved.php">Current Ads</a></li>
                <li><a href="soldads.php">Liked vehicles</a></li>
                <li><a  href="sellermessage.php">Messages</a></li>
                <li><a href="contactseller.php">Contact Us</a></li>
                
                
              </ul>
            </nav>
          </div>
          <br><br><br><br><br>
          <script>
function newWindow(url, width, height)
{
    myWindow=window.open(url,'','width=' + width + ',height=' + height);
}
</script>
    <h1 style="color:black;">APPROVED ADVERTISEMENTS</h1>
    <p style="color:black;">These advertisements have been approved by the CARRADIO admins and are now able to be viewed by potential buyers.</p>
<br><br><?php
session_start();

 include('inc/dbConn.php');
  $uname = $_SESSION['uname'];
    $query = mysqli_query($conn, "SELECT * FROM carsdetail WHERE approval='approved'AND sellername = '$uname' AND deleted='no'");
    
       while ($row = mysqli_fetch_array($query)) {     
      
          
          
          ?>



  <div class="column" style="background-color:white; align-items:center; display:inline-block; color:black; background-color:seagreen;">
  <?php
  echo "<img src='images/".$row['photo'] . "'style='width: 325px; height: 200px;' > "
  ?>
  <br>
  <ul>
    
    <?php
   
    echo "<li>Ad ID: " .$row['id']. "</li>"
  
    ?>
  </ul>
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
  <form method="POST">
  <button type="submit" id="delete" name="submit5" style="
    background-color: #a10505;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    " onclick="newWindow('deletedconfirm.php',500,500)">Delete</button>
  </form>

       </div>
  <?php
       }
       ?>
  
    </div>
       <br><br>

       <h1 style="color:black;">PENDING ADVERTISEMENTS</h1>
    <p style="color:black;">These advertisements have been sent for approval by the CARRADIO admins.</p>     
<br><br><?php

 include('inc/dbConn.php');
  // Fetch image from database
  $uname = $_SESSION['uname'];
    $query = mysqli_query($conn, "SELECT * FROM carsdetail WHERE approval='pending'AND sellername = '$uname' AND deleted='no' AND buyersname = 'no'");
    
       while ($row = mysqli_fetch_array($query)) {     
      
          
          
          ?>



  <div class="column" style="background-color:white; align-items:center; display:inline-block; color:black; background-color:seagreen;">
  <?php
  echo "<img src='images/".$row['photo'] . "' style='width: 325px; height: 200px;'> "
  ?>

  <ul>
    <br>
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
  
  
  </div>
  <?php
       }
       ?>
       </div>
       <br><br>

       <h1 style="color:black;">REJECTED ADVERTISEMENTS</h1>
    <p style="color:black;">These advertisements have been rejected by the CARRADIO admins.The reasons for rejection have been detailed under each advertisement</p>
    <br><br>
       <?php

 include('inc/dbConn.php');
  // Fetch image from database
  $uname = $_SESSION['uname'];
    $query = mysqli_query($conn, "SELECT * FROM carsdetail WHERE approval='rejected'AND sellername = '$uname' AND deleted ='no' ");
    
       while ($row = mysqli_fetch_array($query)) {     
      
          
          
          ?>



  <div class="column" style="background-color:white; align-items:center; display:inline-block; color:black; background-color:seagreen;">
  <?php
  echo "<img src='images/".$row['photo'] . "' style='width: 325px; height: 200px;'> "
  ?>
 
  <ul>
    <br>
    <ul>
    
    <?php
   
    echo "<li>Ad ID: " .$row['id']. "</li>"
  
    ?>
  </ul>
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
   
   echo "<li>Reason for rejection: ".$row['rejectreason']. "</li>"
    
    ?>
  </ul>
  <form method="POST">
  <button type="submit" id="delete" name="submit3" style="
    background-color: #a10505;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    "  onclick="newWindow('deletedconfirm.php',500,500)">Delete</button>
  </form>
 
  
      
  </div>
  <?php
       }
       ?>
       </div>
       
<!--
</body>
</html>