<?php require_once('header.php'); ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == ''){
        echo require_once ('main.php');
    }
?>

<?php require_once ('footer.php'); ?>