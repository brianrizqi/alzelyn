<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 20/10/2018
 * Time: 7:24
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
                    <?php
                    foreach ($list as $item) {
                        ?>
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h5>Nama : <?= $item['nama'] ?></h5>
                                    <h5>Tanggal : <?= $item['tanggal'] ?></h5>
                                    <?php
                                    if ($item['verif'] == 0) {
                                        $status = "Belum Lunas";
                                    } else if ($item['verif'] == 1) {
                                        $status = "Lunas";
                                    } else {
                                        $status = "Ditolak";
                                    }
                                    if ($item['bukti'] == NULL) {
                                        $bukti = "Belum Upload";
                                    } else {
                                        $bukti = "Sudah Upload";
                                    }
                                    ?>
                                    <h5>Bukti : <?= $bukti ?></h5>
                                    <h5>Status : <?= $status ?></h5>
                                    <?php
                                    if ($status == "Belum Lunas") {
                                        ?>
                                        <form name="formTolak" class="formTolak" method="POST">
                                            <input type="hidden" name="controller" value="transaksi">
                                            <input type="hidden" name="action" value="hapusTransaksiAdmin">
                                            <input type="hidden" name="id_order" value="<?= $item['id_order'] ?>">
                                            <input type="text" placeholder="Alasan tolak" name="tolak">
                                            <input type="submit" class="btn btn-primary">
                                        </form>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="panel-body">
                                    <div style="position: absolute; margin-top: -30px; right: 50px;">
                                        <a href="?controller=transaksi&action=detailTransaksiAdmin&id_order=<?= $item['id_order'] ?>">
                                            <button class="btn btn-primary" data-class="floyd-purple">Detail</button>
                                        </a>
                                        <!--                                                                                <a href="?controller=transaksi&action=hapusTransaksiAdmin&id_order=-->
                                        <!--                                        -->
                                        <?//= $item['id_order'] ?><!--">-->
                                        <!--                                            <button class="btn btn-danger" data-class="floyd-red">Delete</button>-->
                                        <!--                                        </a>-->
                                        <?php
                                        if ($status == "Belum Lunas") {
                                            ?>
                                            <a href="?controller=transaksi&action=verifAdmin&id_order=<?= $item['id_order'] ?>">
                                                <button class="btn btn-success" data-class="">Verif</button>
                                            </a>
                                            <button onclick="tolak()" class="btn btn-danger" data-class="floyd-red">
                                                Tolak
                                            </button>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".formTolak").hide();

    function tolak() {
        $(".formTolak").show();
    }
</script>

</body>
</html>
