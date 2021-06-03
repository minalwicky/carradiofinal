<?php
session_start();
 
$email="";
$pass="";

if(isset($_POST['email']) && isset($_POST['psw'])){
	$email=$_POST['email'];
	$pass=$_POST['psw'];
	
	include('inc/dbConn.php');
	
	$sql="SELECT * FROM carusers WHERE email='$email' AND password='$pass'";
	
	$result=mysqli_query($conn,$sql);
	$no=mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
    
	if($no>0){
		
        $_SESSION['uemail']=$row['email'];
		$_SESSION['uname']=$row['name'];
        $_SESSION['role']=$row['usertype'];	
		
        if($row['deleted'] == "yes") {
			?>
			<script>
				alert("Your account has been deleted, please contact Admin")
				window.location="index.html";
				</script>
				<?php
        } elseif ($row['usertype'] == "buyer"){
            header('location:buyerprofile.php');
		} elseif ($row['usertype'] == "admin"){
            header('location:adminhome.php');
        } elseif($row['usertype'] == "seller"){
            header('location:sellerpage.php');
        }
		
	}else{
		?>
        
        <script>
			alert("Invalid Login");
			window.location="login.php";
		</script>
             
<?php
}
mysqli_close($conn);
}

?>