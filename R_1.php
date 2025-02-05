<?php      
  $con=mysqli_connect("localhost","root","","agriculture");
  if(!$con)
  {
	echo'not connected';
  }

$fn=$_POST['fn'];
$ln=$_POST['ln'];
$mn=$_POST['mn'];
$em=$_POST['em'];
$password=$_POST['password'];
$cp=$_POST['cp'];
$date=$_POST['date'];
 $sql="INSERT INTO `reg`(`firstname`, `Lastname`,`mobaile_no`,`email`, `password`, `Confirm password`, `date`) VALUES ('$fn','$ln','$mn','$em','$password','$cp','$date')";
 $res=mysqli_query($con,$sql);
 if(!$res)
 {
  echo 'not Ragister';
 }
 else
 {
  header ('Location:login.php');
 }
?> 