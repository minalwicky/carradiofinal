<?php
session_start();
	$vname="";
	$date="";
	$macar="";
    $mocar="";
    $ftype="";
    $vmile="";
    $gbox="";
    $vcolor="";
    $vcon="";
    $vprice="";
    $description="";
    $cnum="";
    $sname="";
    $image="";
    $semail="";
	
if(isset($_POST['vname']) ){
    $vname=$_POST['vname'];
	$date=$_POST['yom'];
	$macar=$_POST['macar'];
    $mocar=$_POST['mocar'];
    $ftype=$_POST['ftype'];
    $vmile=$_POST['vmile'];
    $gbox=$_POST['gbox'];
    $vcolor=$_POST['vcolor'];
    $vcon=$_POST['vcon'];
    $vprice=$_POST['vprice'];
    $description=$_POST['description'];
    $contact=$_POST['cnum'];
    $sname=$_POST['sname'];
    $semail=$_SESSION['uemail'];
    
    
  	
    $filename = $_FILES["vimage"]["name"];
    $tempname = $_FILES["vimage"]["tmp_name"];    
    $folder = "carradio/images/".$filename;
} 


include('inc/dbConn.php');

if($conn){ 
	
$sql="INSERT INTO carsdetail (title, car_type, make, model, mileage, color, fuel, gearbox, descr, price, yom, sellername, sellernum, photo, selleremail  ) VALUES ('$vname', '$vcon', '$macar', '$mocar', '$vmile', '$vcolor', '$ftype', '$gbox', '$description', '$vprice', '$date', '$sname', '$contact', '$filename', '$semail')";

  

$result=mysqli_query($conn,$sql);


if($result){

?>


<script>
    alert("Successfully Inserted");
	window.location="sellerpage.php";
</script>

<?php

}
$result = mysqli_query($conn, "SELECT vimage FROM carsdetail");
}
?>