<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Start the session at the beginning of your script
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: ../../user/dashboard");
    exit();
}
?>