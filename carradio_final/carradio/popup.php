<!DOCTYPE html>
<body>
    <h1>Reason for rejection</h1>
    <input type="text" id="rejectreason1" name="rejectreason1">
    <button type="submit" id="reasonsubmit" name="submit3">Submit</button>
    <?php
     if (isset($_POST['submit3'])){
         $rejectreason = $_POST['rejectreason1'];
        $sql_update="UPDATE  carsdetail SET approval = 'rejected',rejectreason = VALUE('$rejectreason') WHERE id = '".$row['id']."'";
        $result=mysqli_query($conn,$sql_update);
      if ($result){
      ?>
      <script>
                alert("approval changed");
                
            </script>
            <?php
      }
      ?>
      
      <?php
      }
            ?>
    
</body>