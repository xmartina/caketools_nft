<?php require_once ('header.php');?>
<h2>User Registration</h2>
<form method="post" action="">
    User Name: <input type="text" name="user_name" required><br>
    Password: <input type="password" name="password" required><br>
    Email: <input type="email" name="email" required><br>
    First Name: <input type="text" name="first_name" required><br>
    Last Name: <input type="text" name="last_name" required><br>
    <input type="submit" value="Register">
    <div class="login">Have an account? <a href="/user/sign-in">Sign In</a></div>
</form>
<?php require_once('footer.php');?>
