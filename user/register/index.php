<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/user/auth/auth.css">
    <title>User Register</title>
</head>
<body>
<?php require_once('../auth/header.php'); ?>

<div class="main-form d-flex align-items-center justify-content-center">
    <div class="form-wrap d-flex align-items-center flex-column px-4">
        <h2 class="pt-5 pb-3">User Registration
            <?php
            if (isset($_GET['success'])) {
                echo '<div class="success-msg text-success">
                            Account Successfully Created <a href="/user/sign-in">login</a>
                          </div>';
            } elseif (isset($_GET['error_reg'])) {
                echo '<div class="error-msg text-danger">
                            There was an error while creating your account, please check your details and try again
                          </div>';
            }
            ?>
        </h2>
        <form method="post" action="">
            <div onclick="location.href='https://caketoolsnftmarketplace.com/user/sign-in'" class="have-acct rounded d-flex align-items-center justify-content-evenly bg-primary text-white"><div class="icon-g"><span class="material-symbols-outlined px-3">person</span></div>
                Login to Account</div>
            <div class="pt-3"></div>
            <div class="form-group">
                <div class="row gy-1">
                    <div class="col-6">
                        <label for="">First Name
                            <input type="text" name="first_name" required>
                        </label>
                    </div>
                    <div class="col-6">
                        <label for="">Last Name
                            <input type="text" name="last_name" required>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row gy-1">
                    <div class="col-lg-6">
                        <label for="">User Name
                        <input type="text" name="user_name" required>
                        </label>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Email
                            <input type="email" name="email" required>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row gy-1">
                    <div class="col-12">
                        <label for="">Password
                            <input type="password" name="password" required>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-8">
                        <input type="submit" value="Register" name="register">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require_once('../auth/footer.php'); ?>
