<?php require_once('header.php'); ?>

<?php
echo $_SERVER['REQUEST_URI'];
    if($_SERVER['REQUEST_URI'] == ''){
        echo require_once ('main.php');
    }
?>

<?php require_once ('footer.php'); ?>