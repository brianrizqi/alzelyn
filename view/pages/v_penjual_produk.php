<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 15:48
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
    <link rel="stylesheet" href="../../resources/css/style.css" type="text/css">
    <link rel="stylesheet" href="../../resources/css/font-awesome-4.7.0/css/font-awesome.min.css">
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
            <li><a href="v_penjual.php"><i class="fa fa-fw fa-home"></i><span>Home</span></a></li>
            <li class="active"><a href="v_penjual_produk.php"><i class="fa fa-fw fa-magic"></i><span>Produk</span></a>
            </li>
            <li><a href="v_penjual_transaksi.php"><i class="fa fa-fw fa-shopping-bag"></i><span>Transaksi</span></a>
            </li>
            <li><a href="v_penjual_profile.php"><i class="fa fa-fw fa-user-circle"></i><span>Profile</span></a></li>
<!--                        <li><a href="?controller=home&action=homePenjual"><i class="fa fa-fw fa-home"></i><span>Home</span></a></li>-->
<!--                        <li class="active"><a href="?controller=produk&action=showProdukPenjual"><i class="fa fa-fw fa-magic"></i><span>Produk</span></a></li>-->
<!--                        <li><a href="?controller=transaksi&action=showTransaksiPenjual"><i class="fa fa-fw fa-shopping-bag"></i><span>Transaksi</span></a></li>-->
<!--                        <li><a href="?controller=user&action=showProfilePenjual"><i class="fa fa-fw fa-user-circle"></i><span>Profile</span></a></li>-->
        </ul>
    </div>
    <div id="main-panel">
        <div id="top-nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand text-size-24" href="#"><i class="fa fa-magic"></i> Produk</a>
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
                <a href="v_penjual_tambah_produk.php" class="btn btn-primary" style="position: relative; left: 92.5%;">Tambah</a>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Lipstick</h3>
                            </div>
                            <div class="panel-body">
                                <h5>Harga</h5>
                                <h5>Jumlah</h5>
                                <h5>Status</h5>
                            </div>
                            <div class="panel-body">
                                <div style="position: absolute; margin-top: -30px; right: 50px;">
                                    <a href="v_penjual_detail_produk.php">
                                        <button class="btn btn-success">Detail</button>
                                    </a>
                                    <a href="v_penjual_edit_produk.php">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Lipstick</h3>
                            </div>
                            <div class="panel-body">
                                <h5>Harga</h5>
                                <h5>Jumlah</h5>
                                <h5>Status</h5>
                            </div>
                            <div class="panel-body">
                                <div style="position: absolute; margin-top: -30px; right: 50px;">
                                    <button class="btn btn-success">Detail</button>
                                    <a href="v_penjual_edit_produk.php">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>