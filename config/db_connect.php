<?php
const baseUrl = 'https://a9.quickassistant.me';
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Database connection parameters
$host = "localhost";
$user = "quickass_caketools_test";
$password = "000000";
$database = "quickass_caketools_test";

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>