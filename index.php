<?php require_once('header.php'); ?>

<?php
echo $_SERVER['REQUEST_METHOD'];
    if($_SERVER['REQUEST_METHOD'] == ''){
        echo require_once ('main.php');
    }
?>

<?php require_once ('footer.php'); ?>