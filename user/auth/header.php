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

        echo '<script>
        setTimeout(function(){
            window.location.href = "/user/register/?success";
        }, 300);
      </script>';
        if ($_SERVER['REQUEST_URI'] == "/user/register/?success") {
            echo '<script>
        var successMsg = document.querySelector(\'.success-msg\');
        successMsg.classList.remove(\'d-none\');
      </script>';
        }
    } else {
        echo '<script>
        setTimeout(function(){
            window.location.href = "/user/register/?error_reg";
        }, 300);
      </script>';

        if ($_SERVER['REQUEST_URI'] == "/user/register/?error_reg") {
            echo '<script>
        var errorMsg = document.querySelector(\'.error-msg\');
        errorMsg.classList.remove(\'d-none\');
      </script>';
        }
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
    <!-- Bootstrap 4 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="/user/auth/auth.css">

    <title><?= $pageTitle ?></title>
</head>
<body>