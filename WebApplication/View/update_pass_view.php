<!DOCTYPE html>
<?php include '../Controller/header.php'; ?>
<html lang="en">
<head>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="../Asset/styles.css">
  <title>Reset Password</title>
  <center><h3>Reset Password</h3></center>
</head>
<body> 
<br><br>
<div class="container">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <label for="username">Username:</label>
  <input type="text" name="username" required><br><br>
  <label for="current_password">Current password:</label>
  <input type="password" name="current_password" required><br><br>
  <label for="new_password">New password:</label>
  <input type="password" name="new_password" required><br><br>
  <button type="submit">Change Password</button>
</form>
<br>
<button class="back-button" onclick="history.back()">Back</button>
</div>


<?php include '../Controller/footer.php'; ?>
