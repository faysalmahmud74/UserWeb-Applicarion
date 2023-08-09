<?//php require '../View/loginview.php'; ?>
<!DOCTYPE html>  
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="../Asset/styles.css">
</head>
<body>
<div class="container">
<h2>Login</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $userErr;?></span>
  <br><br>
  Password: <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passErr;?></span>
<br><br>
  <button type="submit">Log In</button>
  <br> <br>
  <a href="resetpass.php">Forgot Password?</a> <br> <br>
  Don't have a account?
  <a href="../View/regi_view.php">Resister now!</a>
  <br><br>
</form>
</div>
</body>
</html>