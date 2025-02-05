<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\project sem_5\Forgot.css?v=<?php echo time();?>">
</head>
<body>
<div class="wrapper">
    <form action="f_1.php" method="post">
      <h2>Forgot password</h2>
      <div class="input-field">
        <input type="text"  name="em" required>
        <label>Enter your email</label>
      </div>
        <div class="input-field">
        <input type="password"  name="password" required>
        <label>Change password?</label>
      </div>
      <button type="submit">Forgot password</button>
      </div>
    </form>
  </div>
</body>
</html>