<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\project sem_5\login.css?v=<?php echo time();?>">
</head>
<body>
  <main>
<div class="wrapper">
    <form action="l_1.php" method="post">
      <h2>Login</h2>
        <div class="input-field">
        <input type="email"  name="em"  required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password"  required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="Forgot_p.php">Forget password?</a>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="ragister.php">Register</a></p>
      </div>
    </form>
  </div>
</main>
</body>
</html>