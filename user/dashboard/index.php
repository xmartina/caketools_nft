<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Start the session
session_start();

// Check if the user is logged in, otherwise redirect to the login page
//if (!isset($_SESSION['user_id'])) {
//    header("Location: /user/sign-in");
//    exit();
//}

// Include any necessary header or layout files

// Display dashboard content
echo "Welcome to the Dashboard!";
require_once ('/user/all-nft');
?>
