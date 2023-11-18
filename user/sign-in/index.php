

<!-- HTML form for login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/user/auth/auth.css">
    <?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        header("Location: ../../user/dashboard");
        exit();
    }
    require_once ('../auth/header.php');?>
    <title>User Login</title>
</head>

<body>
<div class="main-form d-flex align-items-center justify-content-center">
    <div class="form-wrap d-flex align-items-center flex-column px-4">
        <h2 class="pt-5 pb-3">User Login
            <?php
            if (isset($_GET['wrong-pass'])) {
                echo '<div class="error-msg text-danger">
                            your password is incorrect, please check and try again
                          </div>';
            } elseif (isset($_GET['no-user'])) {
                echo '<div class="error-msg text-danger">
                            Sorry this user was not found, please check and try again
                          </div>';
            } elseif (isset($_GET['login-success'])){
                echo '<div class="success-msg text-success">
                            login successful, <a href="/user/dashboard">redirecting to dashboard</a>
                          </div>';
            }
            ?>
        </h2>
        <form method="post" action="">
            <div onclick="location.href='https://caketoolsnftmarketplace.com/user/register'" class="have-acct rounded d-flex align-items-center justify-content-evenly bg-primary text-white"><div class="icon-g"><span class="material-symbols-outlined px-3">person</span></div>
                Register An Account</div>
            <div class="pt-3"></div>
            <div class="form-group">
                <div class="row ">
                    <div class="col-lg-12">
                        <label for="">Email or Username
                            <input type="text" name="user_input" required>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="">Password
                            <input type="password" name="password" required>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-8">
                        <input type="submit" value="login" name="login">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require_once('../auth/footer.php'); ?>

