<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Include database connection file
include('../../config/db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect user input
    $user_name = $_POST['user_name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Insert user data into the database
    $sql = "INSERT INTO users (user_name, password, email, first_name, last_name) VALUES ('$user_name', '$password', '$email', '$first_name', '$last_name')";
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful. You can now <a href='../../user/sign-in'>sign in</a>.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!-- HTML form for registration -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
<h2>User Registration</h2>
<form method="post" action="">
    User Name: <input type="text" name="user_name" required><br>
    Password: <input type="password" name="password" required><br>
    Email: <input type="email" name="email" required><br>
    First Name: <input type="text" name="first_name" required><br>
    Last Name: <input type="text" name="last_name" required><br>
    <input type="submit" value="Register">
    <div class="login">Have an account? <a href="/user/sign-in">Sign In</a></div>
</form>
</body>
</html>
