<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 19/10/2018
 * Time: 10:44
 */

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brand</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/styles.css">
    <link rel="stylesheet" href="../../resources/css/Mockup-MacBook-Pro.css">
    <link rel="stylesheet" href="../../resources/css/id.css">
</head>

<body><img src="../../resources/images/logoal.jpg" width="100%">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Skincare </a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="skincare.php">Skin / Toner</a></li>
                    <li role="presentation"><a href="essence.php">Essence / Serum</a></li>
                    <li role="presentation"><a href="clean.php">Cleansing </a></li>
                    <li role="presentation"><a href="pre.php">Premium Care</a></li>
                    <li role="presentation"><a href="sun.php">Sun care</a></li>
                    <li role="presentation"><a href="lipeycr.php">Lip &amp; Eyecare</a></li>
                </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Makeup </a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="makeup.php">BB Cream</a></li>
                    <li role="presentation"><a href="cc.php">CC Cream</a></li>
                    <li role="presentation"><a href="cush.php">Cushion Foundation</a></li>
                    <li role="presentation"><a href="found.php">Foundation </a></li>
                    <li role="presentation"><a href="eyesh.php">Eyeshadow </a></li>
                    <li role="presentation"><a href="eyel.php">Eyeliner </a></li>
                    <li role="presentation"><a href="eyeb.php">Eyebrows </a></li>
                    <li role="presentation"><a href="masc.php">Mascara </a></li>
                    <li role="presentation"><a href="liptint.php">Lip tint</a></li>
                    <li role="presentation"><a href="lipst.php">Lipstick </a></li>
                    <li role="presentation"><a href="lipgl.php">Lip Gloss &amp; Balm</a></li>
                    <li role="presentation"><a href="conc.php">Makeup Concealer</a></li>
                    <li role="presentation"><a href="base.php">Primer / Base</a></li>
                    <li role="presentation"><a href="blusher.php">Blusher / Highlight</a></li>
                    <li role="presentation"><a href="powder.php">Powder / Pact</a></li>
                    </li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Hair &amp; Body</a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="hairbody.php">Lotion / Oil</a></li>
                    <li role="presentation"><a href="hand.php">Hand / Foot Care</a></li>
                    <li role="presentation"><a href="shampoo.php">Shampoo </a></li>
                    <li role="presentation"><a href="cond.php">Conditioner </a></li>
                </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Other </a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="other.php">Sponge </a></li>
                    <li role="presentation"><a href="brush.php">Brush </a></li>
                </ul>
            </li>

            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="v_pembeli_keranjang.php"><span class="glyphicon glyphicon-shopping-cart"></span> Keranjang</a></li>
                <li><a href="v_pembeli_transaksi.php"><span class="glyphicon glyphicon-paperclip"></span> Riwayat</a></li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span>
                        User
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="v_pembeli_profile.php">Profile</a></li>
                        <li><a href="home.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </ul>
    </div>
</nav>

<div class="container">
    <div id="iklan2">
        - Trending Now -<br>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../../resources/images/fixdiskoni.jpg" alt="Image">
                        <div class="carousel-caption">
                            <h3>Diskon 20%</h3>
                            <p>Beli Produknya sekarang juga</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../../resources/images/limited edition.jpg" alt="Image">
                        <div class="carousel-caption">
                            <h3>Harga Terjangkau</h3>
                            <p>Ayo beli</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div id="iklan">
                <div class="well">
                    <p>THE BURGUNDY LIP TREND</p>
                </div>
                <div class="well">
                    <p>BOLD & BLUE MAKEUP LOOKS</p>
                </div>
                <div class="well">
                    <p>GET INSPIRED</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>


<div id="judul">
    - Riwayat Belanja anda  -<br><br>
</div>

<div class="container">
    <div class="table-responsive">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Produk</th>
                <th>Gambar</th>
                <th>Kuantitas</th>
                <th>Harga</th>
                <th>Status</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>2018-10-10</td>
                <td>Pixi Skintreats</td>
                <td></td>
                <td>2</td>
                <td>Rp 56.000</td>
                <td>Lunas</td>
            </tr>
            </tbody>
        </table>

    </div>
</div>


<footer class="container-fluid text-center">
    <p>Online Store </p>
    <form class="form-inline">Get deals:
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger">Subscribe</button>
    </form>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>

