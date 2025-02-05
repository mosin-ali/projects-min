<?php      
  $con=mysqli_connect("localhost","root","","agriculture");
  if(!$con)
  {
	echo'not connected';
  }

  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $pin=$_POST['pin'];
  $pn=$_POST['pn'];
  $pm=$_POST['pm'];

  $sql="INSERT INTO `order1`(`fname`, `email`, `address`, `city`, `state`, `pin`, `product name`, `payment`) VALUES ('$fname','$email','$address','$city','$state','$pin','$pn','$pm')";
  $res=mysqli_query($con,$sql);

  if(!$res)
  {
   echo 'not order'.mysqli_error($con);
  }
  else
  {
     
    echo '<script>
  alert("payment succsfully");
  window.location="Catagaris.php"
  </script>';
  }
?> 
