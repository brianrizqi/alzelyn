<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 15/10/2018
 * Time: 22:10
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
            <li><a href="v_penjual_produk.php"><i class="fa fa-fw fa-magic"></i><span>Produk</span></a></li>
            <li class="active"><a href="v_penjual_transaksi.php"><i
                            class="fa fa-fw fa-shopping-bag"></i><span>Transaksi</span></a></li>
            <li><a href="v_penjual_profile.php"><i class="fa fa-fw fa-user-circle"></i><span>Profile</span></a></li>
            <!--                        <li><a href="?controller=home&action=homePenjual"><i class="fa fa-fw fa-home"></i><span>Home</span></a></li>-->
            <!--                        <li><a href="?controller=produk&action=showProdukPenjual"><i class="fa fa-fw fa-magic"></i><span>Produk</span></a></li>-->
            <!--                        <li class="active"><a href="?controller=transaksi&action=showTransaksiPenjual"><i class="fa fa-fw fa-shopping-bag"></i><span>Transaksi</span></a></li>-->
            <!--                        <li><a href="?controller=user&action=showProfilePenjual"><i class="fa fa-fw fa-user-circle"></i><span>Profile</span></a></li>-->
        </ul>
    </div>
    <div id="main-panel">
        <div id="top-nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand text-size-24" href="#"><i class="fa fa-shopping-bag"></i> Detail Transaksi</a>
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
                                    <img src="../../resources/images/Logo.png" style="height: 450px; width: 100%;">
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3">

                    </div>
                    <div class="col-xs-6">
                        <div class="panel">
                            <div class="panel-body">
                                <h2>Nama Produk</h2>
                                <br>
                                <h3>Nama Pembeli</h3>
                                <p>Miko</p>
                                <h4 class="break-top-20">Harga</h4>
                                <p>Rp. 10.000</p>
                                <h4 class="break-top-20">Jumlah</h4>
                                <p>20</p>
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
