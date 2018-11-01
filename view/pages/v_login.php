<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 12/10/2018
 * Time: 9:01
 */

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_register_prifilan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="resources/css/untitled.css">
    <link rel="stylesheet" href="resources/css/Google-Style-Login.css">
    <link rel="stylesheet" href="resources/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="resources/css/Pretty-Header.css">
</head>

<body><img class="hidden" src="resources/images/wow.jpg">
<h1 class="text-uppercase text-center bg-warning">ALZENLYN </h1>
<div class="login-card"><img src="resources/images/avatar_2x.png" class="profile-img-card">
    <p class="profile-name-card"> </p>
    <form class="form-signin" method="post"><span class="reauth-email"> </span>
        <input type="hidden" name="controller" value="login">
        <input type="hidden" name="action" value="auth">
        <input class="form-control" type="text" placeholder="Username" autofocus="" id="inputEmail" name="username" required>
        <input class="form-control" type="password" placeholder="Password" id="inputPassword" name="password" required>
        <div class="checkbox">
            <div class="checkbox">
                <label>
                    <input type="checkbox">Remember me</label>
            </div>
        </div>
        <input class="btn btn-primary btn-block btn-lg btn-signin" type="submit" value="Login" name="submit">
    </form><a href="#" class="forgot-password">Forgot your password?</a></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>