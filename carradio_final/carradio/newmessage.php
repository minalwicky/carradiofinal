<!DOCTYPE html>
<html lang="en">
<head>
<title>CARRADIO</title>
<meta charset="utf-8">
<link rel="stylesheet" href="seller.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

</head>
<body>
  <div class="bar">
    <img src="Capture.PNG" class="logo">
    <!--
    <nav>
    <ul>
        <li><a  href="buyerprofile.php">Home</a></li>
        <li><a class="active" href="buyerpage.php">Vehicles</a></li>
        <li><a href="contactbuyer.html">Contact Us</a></li>
        
        
      </ul>
    </nav>
-->
  </div>
  
<br><br>

<p>Please enter message </p>
<form  method="POST"  enctype="multipart/form-data">
        <input type="text" placeholder="Enter seller name" name="sname" id="sname">
        <br>
        <input type="text" placeholder="Enter seller email address" name="semail" id="semail">
        <br>
        <input type="text" placeholder="Enter message" name="smessage" id="smessage" >
        <br>
        <button type="submit" name="submit35">Send</button>
        
    </form>
    
    <?php
    session_start();
    $sname = "";
    $uname = "";
    $smail = "";
    $uemail = "";
    $smessage = "";
    if (isset($_POST['submit35'])){
        $sname = $_POST['sname'];
        $smail = $_POST['semail'];
        $uname = $_SESSION['uname'];
        $uemail= $_SESSION['uemail'];
        $smessage = $_POST['smessage'];
    
    include('inc/dbConn.php');
    if($conn){
        
        $sql="INSERT INTO messages ( reciever, sender, senderemail, textmessage, recieveremail) VALUES ( '$sname','$uname','$uemail','$smessage','$smail')";
        $result=mysqli_query($conn,$sql);
        
      ?>
      <script>
     alert("Message sent, exit window now");
     
   </script>
   <?php  
    }
}
?>
 
</body>
</html>