<?php 
session_start();     
  $con=mysqli_connect("localhost","root","","agriculture");
  if(!$con)
  {
	echo'not connected';
  }
 $em=$_POST['em'];
 $password=$_POST['password'];
 $sql="select * from admin where email='$em' and password='$password'";  
 $res=mysqli_query($con,$sql);
if ($res->num_rows > 0) {
  while($row = $res->fetch_assoc()) {
    $tname=$row["email"];
    $tpassword=$row["password"];
    if($em==$tname && $password== $tpassword)
    {
      echo  '<script>
      alert(" admin");
      window.location="ahome.php"
      </script>';
    }
  }
} 
else 
{
  echo '<script>
      alert("not  admin");
      window.location="admin.php"
      </script>';
}
?> 
