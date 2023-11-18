<?php
const basePath = '/home/multistream6/domains/caketoolsnftmarketplace.com/user';
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Start the session
session_start();

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: /user/sign-in");
    exit();
}
$id = $_SESSION['user_id'];
include('../../../config/db_connect.php');
$stmt = mysqli_prepare($conn, "SELECT id, user_name, email, first_name, last_name FROM users WHERE id = ?");

// Check if the prepared statement is successful
if ($stmt) {
    // Bind parameters to the statement
    mysqli_stmt_bind_param($stmt, "i", $id); // Assuming id is an integer, adjust accordingly if it's a different data type

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    require_once('validate.php');

} else {
    echo "Error preparing the statement: " . mysqli_error($conn);
}
mysqli_close($conn);