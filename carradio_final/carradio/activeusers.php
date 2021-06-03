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
</head>
<body>
    <div class="container">
        <div class="bar">
        <img src="LOGO_G.png" class="logo">
            <nav>
            <ul>
            <li><a  href="adminhome.php">Home</a></li>
            <li><a  href="adminads.php">Active ads</a></li>
            <li><a class="active" href="activeusers.php">Active users</a></li>
            <li><a  href="contactsubmit.php">Contact Us forms</a></li>
                
                
              </ul>
            </nav>
          </div>
          <script>
function newWindow(url, width, height)
{
    myWindow=window.open(url,'','width=' + width + ',height=' + height);
}
</script>
          <br><br><br><br><br>
    <h1 style="color:black;">ACTIVE USERS</h1>
    <form method="POST" enctype="multipart/form-data">
    <div class="row" >
      <table >
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>User type</th>
              </tr>
          </thead>
          <?php
          include('inc/dbConn.php');
          $query = mysqli_query($conn ,"SELECT * FROM carusers where deleted = 'no'");
          while ($row = mysqli_fetch_array($query)) {     
             ?>
             <tr>
                     <td><?php echo $row['name']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td><?php echo $row['usertype']; ?></td>

             </tr>
             <?php
          }
            ?>
  
        
      </table>
    </div>

     </form>
    <form method="POST">
  <button type="submit" id="delete" name="submit14" style="
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    border-radius:0.25cm;
    margin-left: 45%;
    margin-right: auto;
    " onclick="newWindow('deleteconfirm.php',500,500)">Delete Account</button>
  </form>
    </div>
</body>
</html>