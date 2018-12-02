<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:05
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alzenlyn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/styles.css">
    <link rel="stylesheet" href="resources/css/Mockup-MacBook-Pro.css">
    <link rel="stylesheet" href="resources/css/id.css">
</head>

<body>
<a href="index.php">
    <img src="resources/images/logoal.jpg" width="100%" href="index.php"/>
</a>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="dropdown">
                <a href="?controller=home&action=home">Home </a>
            </li>

            <li class="dropdown">
                <a href="?controller=produk&action=showProduk&page=1">Produk </a>
            </li>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="?controller=register&action=register"><span class="glyphicon glyphicon-user"></span> Sign
                        Up</a></li>
                <li><a href="?controller=login&action=login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
            </ul>
        </ul>
    </div>
</nav>


<div class="carousel slide" data-ride="carousel" id="carousel-1">
    <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="resources/images/fixdiskoni.jpg" alt="Slide Image"></div>
        <div class="item"><img src="resources/images/makeup tips&trickdenganlogo.jpg" alt="Slide Image"></div>
        <div class="item"><img src="resources/images/trending.jpg" alt="Slide Image"></div>
    </div>
    <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i
                    class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i
                    class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
    </div>
    <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
    </ol>
</div>
<div class="col-md-6">
    <button class="btn btn-default" type="button">LIMITED EDITION</button>
    <img src="resources/images/limited edition.jpg" width="100%"></div>
<div class="col-md-6">
    <button class="btn btn-default" type="button">NEW PRODUCT</button>
    <img src="resources/images/new product.jpg" width="100%"></div>

<footer class="container-fluid text-center">
    <div class="col-md-12"><img src="resources/images/gmail.png" width="60px">
        <input class="input-lg" type="email" name="email" inputmode="email" placeholder="Email">
        <input type="submit" value="Subscribe" class="btn btn-primary">
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>

