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
            <img src="Capture.PNG" class="logo">
            <nav>
            <ul>
            <li><a  href="adminhome.php">Home</a></li>
            <li><a  href="adminads.php">Active ads</a></li>
            <li><a  href="activeusers.php">Active users</a></li>
            <li><a class="active" href="contactsubmit.php">Contact Us forms</a></li>    
                
              </ul>
            </nav>
          </div>
          <br><br><br><br><br>
    <h1 style="color:black;">CONTACT FORM SUBMISSIONS</h1>
    <form method="POST" enctype="multipart/form-data">
    <div class="row" >
      <table >
          <thead>
              <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Contact Number</th>
                  <th>Email</th>
                  <th>Details</th>
              </tr>
          </thead>
          <?php
          include('inc/dbConn.php');
          $query = mysqli_query($conn ,"SELECT * FROM contactform");
          while ($row = mysqli_fetch_array($query)) {     
             ?>
             <tr>
                     <td><?php echo $row['firstname']; ?></td>
                     <td><?php echo $row['lastname']; ?></td>
                     <td><?php echo $row['contactnumber']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td><?php echo $row['details']; ?></td>

             </tr>
             <?php
          }
            ?>
  
        
      </table>
    </div>

     </form>