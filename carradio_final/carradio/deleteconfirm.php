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
  <?php
  session_start();
  $uname = $_SESSION['uname'];
  ?>
<br><br>

<p>Please enter details of account to be deleted </p>
<form  method="POST">
        <input type="text" placeholder="Enter name" name="uname">
        <input type="text" placeholder="Enter email address" name="email">
        <button type="submit" name="submit21">Confirm</button>
        
    </form>
    <?php
    if (isset($_POST['submit21'])){
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        include('inc/dbConn.php');
        $sql_update="UPDATE  carusers SET deleted ='yes'  WHERE  name = '$uname' AND email = '$email'";
        $result=mysqli_query($conn,$sql_update);
      ?>
      <script>
     alert("Account deleted, exit window now");
     
   </script>
   <?php  
    }
    
?>
 
</body>
</html>