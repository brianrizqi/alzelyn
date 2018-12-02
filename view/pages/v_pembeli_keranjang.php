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
    <title>suncare</title>
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
                <a href="?controller=home&action=homePembeli">Home </a>
            </li>

            <li class="dropdown">
                <a href="?controller=produk&action=showProdukPembeli&page=1">Produk </a>
            </li>

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
<div id="judul">
    - Keranjang anda saat ini -<br><br>
</div>

<div class="container">
    <div class="table-responsive">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>No</th>
                <th>Penjual</th>
                <th>Nama Produk</th>
                <th>Kuantitas</th>
                <th>Harga</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            $i = 0;
            $totalBayar = 0;
            if (array_key_exists('id_produk', $_SESSION) && !empty($_SESSION['id_produk'])) {
                foreach ($list as $item) {
                    $harga = $item['harga'];
                    $jumlahBeli = $item['jumlahBeli'];
                    $totalHarga = $harga * $jumlahBeli;
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?=$item['penjual']?></td>
                        <td><?=$item['nama_produk']?></td>
                        <td><?=$item['jumlahBeli']?></td>
                        <td>Rp.<?=number_format($totalHarga,0,".",".")?></td>

                    </tr>
                    <?php
                    $totalBayar += $totalHarga;
                    $no++;
                }
            }
            ?>
            </tbody>
        </table>
            <h3>Total Harga : Rp.<?=number_format($totalBayar,0,".",".")?></h3>
        <br>
        <a href="?controller=keranjang&action=bayarCart">
            <button class="btn btn-primary" style="position:relative;left: 87%;">Bayar</button>
        </a>
        <a href="?controller=keranjang&action=hapusCart">
            <button class="btn btn-danger" style="position:relative;left: 87%;">Batal</button>
        </a>

    </div>
</div>
<br><br><br>

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

