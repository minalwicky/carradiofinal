<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<title>CARRADIO</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="sellerp.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="bar">
            <img src="Capture.PNG" class="logo">
            <nav>
            <ul>
                <li><a href="sellerpage.php">Add new vehicle</a></li>
                <li><a  href="sellerpending.html">Pending Ads</a></li>
                <li><a href="sellerapproved.html">Approved Ads</a></li>
                <li><a class="active" href="sellerreject.html">Rejected Ads</a></li>
                <li><a href="contactseller.html">Contact Us</a></li>
                
                
              </ul>
            </nav>
          </div>
          <br><br><br><br><br>
    <h1>REJECTED ADVERTISEMENTS</h1>
    <p>These advertisements have been rejected by the CARRADIO admins.The reasons for rejection have been detailed under each advertisement</p>
<br><br><br><br><?php
session_start();
 include('inc/dbConn.php');
  // Fetch image from database
  $uname = $_SESSION['uname'];
    $query = mysqli_query($conn, "SELECT * FROM carsdetail WHERE approval='rejected'AND sellername = '$uname' AND deleted ='no' ");
    
       while ($row = mysqli_fetch_array($query)) {     
      
          
          
          ?>



  <div class="column" style="background-color:white; align-items:center;">
  <?php
  echo "<img src='images/".$row['photo'] . "' style='width:400px;'> "
  ?>
  <p>Details</p>
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
  
  
  </div>
  <?php
       }
       ?>
    <!--<div class="row">
        <div class="column" style="background-color:#aaa;">
        <img src="alexandre-brondino-G7rPA-8SJ-M-unsplash.jpg" id="car" width="400px">
        <p>Details</p>
        <ul>
          <li>Name:</li>
          <output id="vname"></output>
        </ul>
        <ul>
          <li>Year of manufacture:</li>
          <output id="yom"></output>
        </ul>
        <ul>
          <li>Engine type:</li>
          <output id="etype"></output>
        </ul>
        <ul>
          <li>Name of seller:</li>
          <output id="sellername"></output>
        </ul>
        <ul>
          <li>Contact number of seller:</li>
          <output id="sellercontact"></output>
        </ul>
        <ul>
          <li>Description:</li>
           <output id="description"></output>
        </ul>
            <li>Reason for rejection:</li>
           <output id="reject"></output>
          </ul>
        
        </div>
        
        <div class="column" style="background-color:rgb(15, 87, 45);">
        <img src="alexandre-brondino-G7rPA-8SJ-M-unsplash.jpg" id="car" width="400px">
        <p>Details</p>
        <ul>
          <li>Name:</li>
          <output id="vname"></output>
        </ul>
        <ul>
          <li>Year of manufacture:</li>
          <output id="yom"></output>
        </ul>
        <ul>
          <li>Engine type:</li>
          <output id="etype"></output>
        </ul>
        <ul>
          <li>Name of seller:</li>
          <output id="sellername"></output>
        </ul>
        <ul>
          <li>Contact number of seller:</li>
          <output id="sellercontact"></output>
        </ul>
        <ul>
          <li>Description:</li>
           <output id="description"></output>
        </ul>
            <li>Reason for rejection:</li>
           <output id="reject"></output>
          </ul>
        </div>
        <div class="column" style="background-color:#aaa;">
            <img src="alexandre-brondino-G7rPA-8SJ-M-unsplash.jpg" id="car" width="400px">
            <p>Details</p>
            <ul>
              <li>Name:</li>
              <output id="vname"></output>
            </ul>
            <ul>
              <li>Year of manufacture:</li>
              <output id="yom"></output>
            </ul>
            <ul>
              <li>Engine type:</li>
              <output id="etype"></output>
            </ul>
            <ul>
              <li>Name of seller:</li>
              <output id="sellername"></output>
            </ul>
            <ul>
              <li>Contact number of seller:</li>
              <output id="sellercontact"></output>
            </ul>
            <ul>
              <li>Description:</li>
               <output id="description"></output>
            </ul>
                <li>Reason for rejection:</li>
               <output id="reject"></output>
              </ul>
          </div>
</div>
</div>
</body>
</html>