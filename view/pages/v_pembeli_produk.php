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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>
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
                <li><a href="v_pembeli_keranjang.php"><span class="glyphicon glyphicon-shopping-cart"></span> Keranjang</a></li>
                <li><a href="v_pembeli_transaksi.php"><span class="glyphicon glyphicon-paperclip"></span> Riwayat</a></li>
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


<!-- <kolom gambar1> -->
<div class="container">
    <div class="row">
        <?php
        foreach ($list as $item) {
            ?>
            <div class="col-md-4">
                <div class="container">
                    <img src="gambar/<?=$item['gambar']?>" width="" height="200px"><br>

                    <div class="container">
                        <div id="produk">
                            <h2><?=$item['nama_produk']?></h2>
                            <h3>Stok : <?=$item['stok']?></h3>
                            <div id="harga">
                                <h2>Rp <?=number_format($item['harga'],0,".",".")?></h2>
                            </div>
                        </div>

                        <button type="button" class="btn btn-basic" data-toggle="modal"
                                data-target="#exampleModal">ADD TO
                            <img src="resources/images/cart1.png">
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nama Produk</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <input type="number" class="form form-control" required
                                                   placeholder="Jumlah">

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel
                                        </button>
                                        <button type="button" class="btn btn-primary">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<footer class="container-fluid text-center">
    <br><br><br><br><br>
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
