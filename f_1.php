<?php      
  $con=mysqli_connect("localhost","root","","agriculture");
  if(!$con)
  {
	echo'not connected';
  }
  $password=$_POST['password'];
  $em=$_POST['em'];
  $sql="update reg set password='$password' where email='$em'";
  $res=mysqli_query($con,$sql);
  if(!$res)
  {
   echo 'not Forget';
  }
  else
  {
    header ('Location:login.php');
  }
?> 