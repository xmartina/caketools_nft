<?php
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
        // Registration success
        header('Location: /user/register/?success');
        exit();
    } else {
        // Registration failed
        header('Location: /user/register/?error_reg');
        exit();
    }
}

// Close the database connection
mysqli_close($conn);
?>
