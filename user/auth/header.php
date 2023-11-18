<?php
// Include database connection file
include('../../config/db_connect.php');

if (isset($_POST['register'])) {
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

elseif (isset($_POST['login'])) {
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
            header('Location: /user/sign-in/?login-success');
            sleep(3);
            header("Location: ../../user/dashboard");
            exit();
        } else {
            header('Location: /user/sign-in/?wrong-pass');
            exit();
        }
    } else {
        header('Location: /user/sign-in/?no-user');
        exit();
    }
}
// Close the database connection
mysqli_close($conn);
?>
