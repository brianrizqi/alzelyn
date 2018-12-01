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
                <th>Tanggal</th>
                <th>Status</th>
                <th>Bukti</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($list as $item) {
                ?>
                <tr>
                    <td><?=$no?></td>
                    <td hidden><?= $item['id_order'] ?></td>
                    <td><?=$item['tanggal']?></td>
                    <?php
                    if ($item['verif'] == 0) {
                        $status = "Belum bayar";
                    } else {
                        $status = "Lunas";
                    }
                    if ($item['bukti'] == NULL) {
                        $bukti = "Belum Upload";
                    } else {
                        $bukti = "Sudah Upload";
                    }
                    ?>
                    <td><?=$status?></td>
                    <td><?=$bukti?></td>
                    <td>
                        <a href="?controller=transaksi&action=showDetailTransaksiPembeli&id_order=<?=$item['id_order']?>" class="btn btn-primary">
                            Detail
                        </a>
                        <a href="?controller=transaksi&action=showUploadBukti&id_order=<?=$item['id_order']?>" class="btn btn-success">
                            Upload
                        </a>
                    </td>
                </tr>
                <?php
                $no++;
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

