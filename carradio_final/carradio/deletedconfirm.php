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

<p>Please re-enter Vehicle advertisement ID number to delete</p>
<form  method="POST">
        <input type="text" placeholder="Enter ID" name="id">
        <button type="submit" name="submit33">Confirm</button>
        
    </form>
    <?php
    if (isset($_POST['submit33'])){
        $id = $_POST['id'];
        include('inc/dbConn.php');
        $sql_update=" UPDATE  carsdetail SET deleted = 'yes'  WHERE id = '$id' AND sellername = '$uname'";
        $result=mysqli_query($conn,$sql_update);
      ?>
      <script>
     alert("Vehicle succesfully deleted, exit window now");
     
   </script>
   <?php  
    }
    
?>
 
</body>
</html>