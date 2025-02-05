
<?php

$con=mysqli_connect("localhost","root","","agriculture");
if(!$con)
{
  echo'not connected';
}


$sql = "SELECT * FROM `reg`ORDER BY id ASC  ";

$result = $con->query($sql);
$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Agriculture</title>
	<link rel="stylesheet" href="\project sem_5\dis.css?v=<?php echo time();?>">

</head>

<body>
	<section>
		<h1>Admin-Reports</h1>
		<hr>
		<table>
			<tr>
				<th>id</th>
				<th>first_name</th>
				<th>last name</th>
				<th>mobile_no</th>
                <th>email</th>
                <th>password</th>
                <th>conf password</th>
                <th>date</th>
			</tr>
			
			<?php 
				
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
                <td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['firstname'];?></td>
				<td><?php echo $rows['lastname'];?></td>
				<td><?php echo $rows['mobaile_no'];?></td>
				<td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['password'];?></td>
                <td><?php echo $rows['Confirm password'];?></td>
                <td><?php echo $rows['date'];?></td>
			</tr>

			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
