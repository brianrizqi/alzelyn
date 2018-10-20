<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 12/10/2018
 * Time: 9:05
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
    <link rel="stylesheet" href="../../resources/css/untitled.css">
    <link rel="stylesheet" href="../../resources/css/Google-Style-Login.css">
    <link rel="stylesheet" href="../../resources/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="../../resources/css/Pretty-Header.css">
</head>

<body>
<div class="row register-form">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal custom-form">
            <h1>Register Form</h1>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="name-input-field">Username </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="name-input-field">Name </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="email-input-field">Email </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="pawssword-input-field">Password </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="repeat-pawssword-input-field">Phone </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="repeat-pawssword-input-field">Address </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="dropdown-input-field">Role </label>
                </div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Customer </a></li>
                            <li role="presentation"><a href="#">Seller </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox">I've read and accept the terms and conditions</label>
            </div>
            <button class="btn btn-default submit-button" type="button">Sign In</button>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>