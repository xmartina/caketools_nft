<?php
const siteName = 'Caketools NFT Marketplace';
const siteLogo = '/asset/img/logo.png';
const siteIcon = '/asset/img/icon.png';
const siteUrl = 'https://caketoolsnftmarketplace.com';


if (isset($_POST['logout'])){

    session_start();

// Unset all session variables
    $_SESSION = array();

// Destroy the session
    session_destroy();

// Redirect to the login page or any other desired page after logout
    header("Location: /user/sign-in");
    exit();


}