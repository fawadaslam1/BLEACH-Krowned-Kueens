// <?php include('server.php') ?>
// <!doctype html>
// <html lang="en">
//     <head>
//         <meta charset="utf-8">
//         <meta name="viewport" content="width=device-width, initial-scale=1">
    
//         <meta name="description" content="">
//         <meta name="author" content="">

//         <link rel="icon" href="https://i.imgur.com/FHnHqMh.jpeg" type="image/x-icon">
//         <title>REGISTER - BLEACH: KROWNED KUEENS</title>
//           <link rel="stylesheet" href="login.css">
//     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

// </head>

// <body>

//     <div class="wrapper">
//             <h1>Krowned Kueens Site Registration</h1>
//   <form method="POST" action="register.php">
//   	<?php include('errors.php'); ?>
//   	<div class="input-box">
//   	  <label>Username</label>
//   	  <input type="text" name="username" value="<?php echo $username; ?>">
//   	</div>
//   	<div class="input-box">
//   	  <label>Email</label>
//   	  <input type="email" name="email" value="<?php echo $email; ?>">
//   	</div>
//   	<div class="input-box">
//   	  <label>Password</label>
//   	  <input type="password" name="password_1">
//   	</div>
//   	<div class="input-box">
//   	  <label>Confirm password</label>
//   	  <input type="password" name="password_2">
//   	</div>
//   	<div class="input-box">
//   	  <button type="submit" class="btn" name="reg_user">Register</button>
//   	</div>

//   	<div class="register-link">
//                <div class="register-link">
//                 <p>Already a member? <a href="login.html"> | Login Here </a></p>
// 				</div>
//   </form>
//   </div>
// </body>
// </html>

<?php
// Start session and error reporting
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initializing variables
$username = "";
$email = "";
$errors = array(); 

// Connect to the database
$db = mysqli_connect('localhost:3306', 'root', '');

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reg_user'])) {
    // Sanitize and receive form inputs
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // Form validation
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) { array_push($errors, "Passwords do not match"); }

    // Check if user exists
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            if ($user['username'] === $username) { array_push($errors, "Username already exists"); }
            if ($user['email'] === $email) { array_push($errors, "Email already exists"); }
        }
    } else {
        echo "Error executing query: " . mysqli_error($db);
    }

    // Register user if no errors
    if (count($errors) == 0) {
        $password = md5($password_1);
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
        exit(); // Ensure script execution stops after redirect
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
        <form action="register.php" method="post">
            <h1>Krowned Kueens Site Registration</h1>
            <?php if (!empty($errors)) {
                echo '<div class="errors">';
                foreach ($errors as $error) {
                    echo '<p>' . htmlspecialchars($error) . '</p>';
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
</html>
