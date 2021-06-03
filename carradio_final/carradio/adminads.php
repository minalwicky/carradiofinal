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
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <div class="bar">
        <img src="LOGO_G.png" class="logo">
            <nav>
            <ul>
            <li><a  href="adminhome.php">Home</a></li>
            <li><a class="active" href="adminads.php">Active ads</a></li>
            <li><a  href="activeusers.php">Active users</a></li>
            <li><a  href="contactsubmit.php">Contact Us forms</a></li>
                
                
              </ul>
            </nav>
          </div>
          <br><br><br><br><br>
    <h1 style="color:black;">ACTIVE ADVERTISEMENTS</h1>
   
<br><br><?php
session_start();
 include('inc/dbConn.php');
  // Fetch image from database
 
    $query = mysqli_query($conn, "SELECT * FROM carsdetail WHERE approval='approved' AND deleted='no' ");
    
       while ($row = mysqli_fetch_array($query)) {     
      
          
          
          ?>



  <div class="column" style="background-color:white; align-items:center; display:inline-block; color:black; background-color:seagreen;">
  <?php
  echo "<img src='images/".$row['photo'] . "' style='width:400px;'> "
  ?>
  <br>
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
  <button type="submit" id="delete" name="submit12" style="
    background-color: #a10505;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    ">Delete</button>
    </form>
    </div>
    <?php
       }
       
    ?>
  
 
    
</body>
</html>
