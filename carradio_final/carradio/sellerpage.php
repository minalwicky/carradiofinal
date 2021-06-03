<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<title>CARRADIO</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="seller.css">

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
            <li><a class="active" href="sellerpage.php">Add new vehicle</a></li>
                <li><a  href="sellerapproved.php">Current Ads</a></li>
                <li><a href="soldads.php">Liked vehicles</a></li>
                <li><a  href="sellermessage.php">Messages</a></li>
                <li><a href="contactseller.php">Contact Us</a></li>
 
                
                
              </ul>
            </nav>
          </div>
          <br><br><br><br><br>
          <div class="container">
        <form action="insertSellerDet.php" method="post" enctype="multipart/form-data">
          <label for="vname">Vehicle Name</label>
          <input type="text" id="vname" name="vname" placeholder="Vehicle name..">
      
          <label for="yom">Year of Manufacture</label>
          <br>
          <input type="text" id="yom" name="yom" placeholder="Vehicle's year of manufacture..">
      <br>
          <label for="macar">Make of car</label>
          <input type="text" id="macar" name="macar" placeholder="Vehicle's brand..">
          <br>
          <label for="mocar">Model of car</label>
          <input type="text" id="mocar" name="mocar" placeholder="Vehicle's model..">
          <label for="ftype">Type of fuel</label>
          <input type="text" id="ftype" name="ftype" placeholder="Vehicle's fuel type..">
          <label for="vmile">Vehicle mileage</label>
          <input type="text" id="vmile" name="vmile" placeholder="Vehicle's mileage..">
          <label for="gbox">Gearbox</label>
          <input type="text" id="gbox" name="gbox" placeholder="Vehicle's gearbox type..">
          <label for="vcolor">Vehicle colour</label>
          <input type="text" id="vcolor" name="vcolor" placeholder="Vehicle's colour..">
          <label for="vcon">Vehicle condition</label>
          <input type="text" id="vcon" name="vcon" placeholder="Brand New,Reconditioned or Used..">
          <label for="vprice">Vehicle price</label>
          <input type="text" id="vprice" name="vprice" placeholder="Vehicle's price..">
          <label for="description">Description</label>
          <input type="text" id="description" name="description" placeholder="Vehicle's description..">
      
          <label for="cnum">Contact Number</label>
          <input type="text" id="cnum" name="cnum" placeholder="Your Contact Number..">
          <label for="sname">Seller Name</label>
          <input type="text" id="sname" name="sname" placeholder="Your Name..">
      
          <label for="vimage">Insert Vehicle Image</label>
          <br>
          <input type="file" id="vimage" name="vimage">
      <br>
      <br>
      <br>
          <input type="submit" value="Submit">
        </form>
      </div>
      </body>
</html>