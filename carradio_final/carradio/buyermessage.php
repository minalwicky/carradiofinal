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
        <li><a  href="buyerpage.php">Vehicles</a></li>
        <li><a class="active" href="buyermessage.php">Messages</a></li>
        <li><a href="contactbuyer.php">Contact Us</a></li>
        
        
      </ul>
    </nav>
  </div>
<br><br>
<h3>Messages</h3>
<script>
function newWindow(url, width, height)
{
    myWindow=window.open(url,'','width=' + width + ',height=' + height);
}
</script>
<form method="POST">
  <button type="submit" id="newmes" name="submit22" style="
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    border-radius: 0.5cm;
    " onclick="newWindow('newmessage.php',500,500)">New Message</button>
  </form>
<?php
 session_start();
 $uname = $_SESSION['uname'];
 $uemail = $_SESSION['uemail'];
 include('inc/dbConn.php');
 $query = mysqli_query($conn, "SELECT * FROM messages WHERE reciever='$uname' AND recieveremail='$uemail'");
 
 while ($row = mysqli_fetch_array($query)) {    
 ?>
  <div class="column" style="background-color:seagreen; align-items:center; display:inline-block;">
  <ul>
    
    <?php
   
    echo "<li>Sender: " .$row['sender']. "</li>"
  
    ?>
  </ul>
  <ul>
    
    <?php
   
    echo "<li>Sender Email: " .$row['senderemail']. "</li>"
  
    ?>
  </ul>
  <ul>
    
    <?php
   
    echo "<li>Message: " .$row['textmessage']. "</li>"
  
    ?>
  </ul>
  </div>
 <?php
 }
 ?>
</body>
</html>