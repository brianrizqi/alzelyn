<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 19/10/2018
 * Time: 10:43
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
<a href="?controller=home&action=homePembeli">
    <img src="resources/images/logoal.jpg" width="100%" href="?controller=home&action=homePembeli"/>
</a>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="dropdown">
                <a href="?controller=produk&action=showProdukPembeli&kategori=skincare">Skincare </a>
            </li>

            <li class="dropdown">
                <a href="?controller=produk&action=showProdukPembeli&kategori=makeup">Makeup </a>
            </li>
            <li class="dropdown">
                <a href="?controller=produk&action=showProdukPembeli&kategori=hairbody">Hair &amp; Body</a>
            </li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Other </a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="?controller=produk&action=showProdukPembeli&kategori=sponge">Sponge </a></li>
                    <li role="presentation"><a href="?controller=produk&action=showProdukPembeli&kategori=brush">Brush </a></li>
                </ul>
            </li>

            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="?controller=keranjang&action=showCartPembeli"><span class="glyphicon glyphicon-shopping-cart"></span> Keranjang</a></li>
                <li><a href="?controller=transaksi&action=showTransaksiPembeli"><span class="glyphicon glyphicon-paperclip"></span> Riwayat</a></li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span>
                        <?=$_SESSION['user']?>
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="?controller=user&action=showProfilePembeli">Profile</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                </li>
            </ul>
        </ul>
    </div>
</nav>

<div id="promo">
    <div class="jumbotron">
        <h1 class="text-center">BEST SELLER</h1>
        <p class="text-center">Dapatkan produk terbaik dari kami sekarang juga</p>
        <p class="text-center"><a class="btn btn-danger" role="button" href="#">Beli Sekarang</a></p>
    </div>
</div>
<div class="carousel slide" data-ride="carousel" id="carousel-1">
    <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="resources/images/fixdiskoni.jpg" alt="Slide Image"></div>
        <div class="item"><img src="resources/images/makeup tips&trickdenganlogo.jpg" alt="Slide Image"></div>
        <div class="item"><img src="resources/images/trending.jpg" alt="Slide Image"></div>
    </div>
    <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
    </div>
    <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
    </ol>
</div>
<div class="col-md-6">
    <button class="btn btn-default" type="button">LIMITED EDITION</button><img src="resources/images/limited edition.jpg" width="100%"></div>
<div class="col-md-6">
    <button class="btn btn-default" type="button">NEW PRODUCT</button><img src="resources/images/new product.jpg" width="100%"></div>

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
