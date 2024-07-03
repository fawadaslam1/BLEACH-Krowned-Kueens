<?php
include('server.php'); // Include your database connection file

$errors = array(); // Initialize an array to store error messages

if (isset($_POST['reg_user'])) {
    // Sanitize User Input
    $usernameOrEmail = mysqli_real_escape_string($con, $_POST['username']); 
    $password = mysqli_real_escape_string($con, $_POST['password']); 

    // Check If Fields Are Empty
    if (empty($usernameOrEmail)) {
        array_push($errors, "Username or Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // Attempt Login if No Errors
    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE username='$usernameOrEmail' OR email='$usernameOrEmail' LIMIT 1";
        $results = mysqli_query($con, $query);

        if (mysqli_num_rows($results) == 1) {
            $user = mysqli_fetch_assoc($results);
            if (password_verify($password, $user['password'])) {
                // Successful login (You'll likely want to set a session here)
                header('location: index.html'); // Redirect to index.html
                exit();
            } else {
                array_push($errors, "Wrong username/email or password combination");
            }
        } else {
            array_push($errors, "Wrong username/email or password combination");
        }
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="icon" href="https://i.imgur.com/FHnHqMh.jpeg" type="image/x-icon">
        <title>LOGIN - BLEACH: KROWNED KUEENS</title>
          <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <div class="wrapper">
        <form action="login.php" method="post">
            <h1>Krowned Kueens Site Login</h1>
			<?php include('errors.php'); ?> 
            <div class="input-box">
                <input type="text" placeholder="Username or Email" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
               <!-- <div class="input-box">
                <input type="text" placeholder="E-mail" required>
                <i class='bx bxs-user'></i>
            </div> -->
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember Me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn" name="reg_user">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.html"> | Register Here </a></p>
            </div>
        </form>
    </div>

</body>

</html>
