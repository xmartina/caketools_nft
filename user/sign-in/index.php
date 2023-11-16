<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Start the session at the beginning of your script
session_start();

// Include database connection file with a relative path
include('../../config/db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect user input
    $user_input = $_POST['user_input'];
    $password = $_POST['password'];

    // Check user credentials
    $sql = "SELECT * FROM users WHERE user_name = '$user_input' OR email = '$user_input'";
    $result = mysqli_query($conn, $sql);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Redirect to the dashboard
            $_SESSION['user_id'] = $row['id'];
            header("Location: ../user/dashboard/index.php");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!-- HTML form for login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
<h2>User Login</h2>
<form method="post" action="">
    User Name or Email: <input type="text" name="user_input" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Login">
    <div class="sign-up">don't have an account? <a href="/user/register"> signup</a></div>
</form>
</body>
</html>
