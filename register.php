<?php include('server.php') ?>
<!doctype html>
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
            <h1>Krowned Kueens Site Registration</h1>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-box">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-box">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-box">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-box">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-box">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>

  	<div class="register-link">
               <div class="register-link">
                <p>Already a member? <a href="login.html"> | Login Here </a></p>
				</div>
  </form>
  </div>
</body>
</html>