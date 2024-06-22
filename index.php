<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://i.imgur.com/FHnHqMh.jpeg" type="image/x-icon">
      
    <title>WELCOME - BLEACH: KROWNED KUEENS</title>
    </head>
    <body>

	<a href="logout.php">Logout</a>
	<h1>Welcome!</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>
