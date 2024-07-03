<?php
include('server.php'); // Include the database connection file
if (isset($_POST['reg_user'])) {
// Sanitize User Input
$username = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($con, $_POST['password_2']);
// Form Validation (Add More as Needed)
$errors = array();
if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
}
// Check if Username or Email Already Exists
$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($con, $user_check_query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
    }
    if ($user['email'] === $email) {
        array_push($errors, "Email already exists");
    }
}
// Register User if No Errors
if (count($errors) == 0) {
    $password = password_hash($password_1, PASSWORD_DEFAULT); // Hash the password
    $query = "INSERT INTO users (username, email, password) 
            VALUES('$username', '$email', '$password')";
    mysqli_query($con, $query);
    header('location: index.html'); // Redirect to index.html
        exit(); // Ensure no further code is executed after the redirect
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
        <title>REGISTER - BLEACH: KROWNED KUEENS</title>
          <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <div class="wrapper">
        <form action="register.php" method="POST">
            <h1>Krowned Kueens Site Registration</h1>
            <?php include('errors.php');  ?>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
               <div class="input-box">
                <input type="text" placeholder="E-mail" name="email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password_1" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" name="password_2" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember Me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn" name="reg_user">Register</button>

            <div class="register-link">
                <p>Already have an account? <a href="login.html"> | Login Here </a></p>
            </div>
        </form>
    </div>

</body>

</html>
