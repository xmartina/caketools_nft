<?php
$pageTitle = 'User Registration';
require_once('../auth/header.php'); ?>
<div class="main-form d-flex align-items-center justify-content-center">
    <div class="pt-5"></div>
    <div class="form-wrap d-flex align-items-center flex-column px-4 pt-5">
        <h2 class="py-5">User Registration</h2>
        <form method="post" action="">
            <div class="have-acct rounded d-flex align-items-center justify-content-evenly bg-primary text-white"><span class="material-symbols-outlined">person</span>
                Login to Account</div>
            <div class="py-5"></div>
            User Name: <input type="text" name="user_name" required><br>
            Password: <input type="password" name="password" required><br>
            Email: <input type="email" name="email" required><br>
            First Name: <input type="text" name="first_name" required><br>
            Last Name: <input type="text" name="last_name" required><br>
            <input type="submit" value="Register">
            <div class="login">Have an account? <a href="/user/sign-in">Sign In</a></div>
        </form>
    </div>
</div>
<?php require_once('../auth/footer.php'); ?>
