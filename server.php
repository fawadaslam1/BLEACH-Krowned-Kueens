 


<?php

// Database Configuration
$servername = "localhost"; // Change if your database is not on localhost
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "login_krownedkueens"; // Your database name

// Create Connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check Connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>

<!-- <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://i.imgur.com/FHnHqMh.jpeg" type="image/x-icon">
  <title>REGISTER - BLEACH: KROWNED KUEENS</title>
  <link rel="stylesheet" href="login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="register.php" method="post">
      <h1>Krowned Kueens Site Registration</h1>
      <?php if (!empty($errors)) {
        echo '<div class="errors">';
        foreach ($errors as $error) {
          echo '<p>' . $error . '</p>';
        }
        echo '</div>';
      } ?>
      <div class="input-box">
        <input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($username); ?>" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="E-mail" value="<?php echo htmlspecialchars($email); ?>" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password_1" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password_2" placeholder="Confirm Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox"> Remember Me</label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit" name="reg_user" class="btn">Register</button>
      <div class="register-link">
        <p>Already have an account? <a href="login.html"> | Login Here </a></p>
      </div>
    </form>
  </div>
</body>
</html> -->
