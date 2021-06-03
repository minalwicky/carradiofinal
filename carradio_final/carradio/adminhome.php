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
                <li><a class="active" href="adminhome.php">Home</a></li>
                <li><a  href="adminads.php">Active ads</a></li>
                <li><a href="activeusers.php">Active users</a></li>
                <li><a  href="contactsubmit.php">Contact Us forms</a></li>
                
                
              </ul>
            </nav>
          </div>
          <br><br><br><br><br>
    <h1>WELCOME ADMIN</h1>
    <p>These advertisements have been submitted for approval.</p>
<br><br><?php
session_start();
 include('inc/dbConn.php');
  // Fetch image from database
 
    $query = mysqli_query($conn, "SELECT * FROM carsdetail WHERE approval='pending' AND deleted='no' ");
    
       while ($row = mysqli_fetch_array($query)) {     
        $_variable=($row['id']);
          
          
          ?>



  <div class="column" style="background-color:seagreen; align-items:center; display:inline-block">
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
   
   echo "<li>Contact number of seller: ".$row['sellernum']. "</li>";
    ?>
  </ul>
  <br>
  <br>
  <br>
  
  <form method="POST">
  <label for="rejectreason">If rejecting:</label>
          <input type="text" id="rejectreason" name="rejectreason" placeholder="Reason for rejection..">
          <br>
          <br>

  <button type="submit" id="accept" name="submit1" style="background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    border-radius:0.5cm;
    "
  >Accept</button>

  <button type="submit" id="reject" name="submit2" style="
    background-color: #a10505;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    border-radius:0.5cm;
    ">Reject</button>
  </form>
  <?php
  if (isset($_POST['submit1'])){
    $sql_update="UPDATE  carsdetail SET approval = 'approved' WHERE id = '".$row['id']."'";
    $result=mysqli_query($conn,$sql_update);
  if ($result){
  ?>
  <script>
			alert("approval changed");
			
		</script>
        <?php
  }
  }
  if (isset($_POST['submit2'])){
    $rejectreason = $_POST['rejectreason']; 
    $sql_update="UPDATE  carsdetail SET approval = 'rejected',rejectreason = '$rejectreason' WHERE id = '".$row['id']."'";
    $result=mysqli_query($conn,$sql_update);
  if ($result){
  ?>
  <script>
			alert("approval changed");
			
		</script>
        <?php
  }
}
        ?>
  </div>
  <?php
       }
       ?>
    </div>
</body>
</html>