<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 01/11/2018
 * Time: 23:12
 */

?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brand</title>
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
                <a href="?controller=produk&action=showProdukPembeli">Produk </a>
            </li>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="?controller=keranjang&action=showCartPembeli"><span
                                class="glyphicon glyphicon-shopping-cart"></span> Keranjang</a></li>
                <li><a href="?controller=transaksi&action=showTransaksiPembeli"><span
                                class="glyphicon glyphicon-paperclip"></span> Riwayat</a></li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span>
                        <?= $_SESSION['user'] ?>
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
    - Riwayat Belanja anda -<br><br>
</div>

<div class="container">
    <div class="table-responsive">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
//            $total = 0;
            foreach ($list as $item) {
            ?>
            <tbody>
            <tr>
                <td><?= $no ?></td>
                <td><?= $item['nama_produk'] ?></td>
                <td><?= "Rp. " . number_format($item['total_harga'], 0, ".", ".") ?></td>
                <td><?= $item['jumlah'] ?></td>
            </tr>
            </tbody>
            <?php
//            $no++;
//            $total += $item['total_harga'];
            }
            ?>
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
