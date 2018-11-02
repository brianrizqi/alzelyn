<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 02/11/2018
 * Time: 20:41
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">
    <link rel="stylesheet" href="resources/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="wrapper">
    <div id="sidebar">
        <div class="sidebar-title">
            <div class="sidebar-avatar-text">Penjual</div>
        </div>
        <ul class="sidebar-nav">
            <li><a href="?controller=home&action=homeAdmin"><i class="fa fa-fw fa-home"></i><span>Home</span></a></li>
            <li class="active"><a href="?controller=transaksi&action=showTransaksiAdmin"><i
                            class="fa fa-fw fa-shopping-bag"></i><span>Transaksi</span></a></li>
        </ul>
    </div>
    <div id="main-panel">
        <div id="top-nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand text-size-24" href="#"><i class="fa fa-shopping-bag"></i> Transaksi</a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">
										<span class="fa-stack">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-power-off fa-stack-1x"></i>
										</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: #1daf9c;">
                            </div>
                            <div class="panel-body">
                                <center>
                                    <?php
                                    foreach ($bukti as $item) {
                                        ?>
                                        <img src="bukti/<?= $item['bukti'] ?>"
                                             style="height: 250px; width: 100%;">
                                        <?php
                                    }
                                    ?>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Tanggal</th>
                            <th>Alamat</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                        </tr>
                        </thead>
                        <?php
                        $no = 1;
                        $total = 0;
                        foreach ($list as $item) {
                            ?>
                            <tbody>
                            <tr>
                                <td><?=$no?></td>
                                <td><?= $item['nama_produk'] ?></td>
                                <td><?= $item['tanggal'] ?></td>
                                <td><?= $item['alamat'] ?></td>
                                <td><?= $item['jumlah'] ?></td>
                                <td>Rp. <?= number_format($item['total_harga'] ,0,".",".")?></td>
                            </tr>
                            </tbody>
                            <?php
                            $total += $item['total_harga'];
                            $no++;
                        }
                        ?>
                    </table>
                    <h3>Total Harga : Rp.<?=number_format($total,0,".",".")?></h3>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
