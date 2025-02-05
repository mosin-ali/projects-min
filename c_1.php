<?php      
  $con=mysqli_connect("localhost","root","","agriculture");
  if(!$con)
  {
	echo'not connected';
  }
 $fn=$_POST['fn'];
 $ce=$_POST['ce'];
 $tm=$_POST['tm'];
 $sql="insert into contact values('$fn','$ce','$tm')";
 $res=mysqli_query($con,$sql);
 if(!$res)
 {
  echo 'not Inserted';
 }
 else
 {
    echo "<script>alert('Inserted Sucessfully') 
    window.location='index.php'
    </script>";
 }
?> 
