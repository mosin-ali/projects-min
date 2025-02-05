<?php 
session_start();     
  $con=mysqli_connect("localhost","root","","agriculture");
  if(!$con)
  {
	echo'not connected';
  }
 $em=$_POST['em'];
 $password=$_POST['password'];
 $sql="select * from reg where email='$em' and password='$password'";  
 $res=mysqli_query($con,$sql);

 $_SESSION['em']=$_POST['em'];

 if ($res->num_rows > 0) {
  while($row = $res->fetch_assoc()) {
    $tname=$row["email"];
    $tpassword=$row["password"];
    if($em==$tname && $password== $tpassword)
    {
      echo '<script>
      alert("yes");
      window.location="index.php"
      </script>';
    }
  }
} else {
  echo '<script>
  alert("no");
  window.location="login.php"
  </script>';
}

?> 
