<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\project sem_5\Ragister.css?v=<?php echo time();?>">
</head>
<body>
<div class="wrapper">
    <form action="R_1.php" method="post">
      <h2>Register</h2>
      <div class="input-field">
        <input type="text"  name="fn"  required>
        <label>First_name</label>
      </div>
      <div class="input-field">
        <input type="text"  name="ln" required>
        <label>last_Name</label>
      </div>
      <div class="input-field">
        <input type="text"  name="mn" required />
        <label>Mobaile_no </label>
      </div>
        <div class="input-field">
        <input type="text"  name="em" required>
        <label>Enter your Email</label>
      </div>
      <div class="input-field">
        <input type="password"  name="password" required>
        <label>Enter your Password</label>
      </div>
      <div class="input-field">
        <input type="password"  name="cp" required>
        <label>Confirm Password</label>
      </div>
      <div class="input-field">
      <input type="date"  name="date" required><br>  
</div>
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>