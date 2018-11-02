<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:10
 */

class TransaksiController
{
    public function showTransaksiPenjual()
    {
        if (isset($_SESSION['user'])) {
            require_once('view/pages/v_penjual_transaksi.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }

    public function showTransaksiPembeli()
    {
        if (isset($_SESSION['user'])) {
            $list = Transaksi::showTransaksiPembeli($_SESSION['id_user']);
            require_once('view/pages/v_pembeli_transaksi.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }

    public function showDetailTransaksiPembeli()
    {
        if (isset($_SESSION['user'])) {
            $list = Transaksi::showDetailTransaksiPembeli($_GET['id_order']);
            require_once('view/pages/v_pembeli_detail_transaksi.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }

    public function showUploadBukti()
    {
        if (isset($_SESSION['user'])) {
            require_once('view/pages/v_pembeli_upload_bukti.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }

    public function uploadBukti()
    {
        if (isset($_SESSION['user'])) {
            $foto = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];
            $gambar = date('dmYHis') . $foto;
            $path = "bukti/" . $gambar;
            if (move_uploaded_file($tmp, $path)) {
                $produk = Transaksi::uploadBukti($gambar,$_POST['id_order']);
                header("location: index.php?controller=transaksi&action=showTransaksiPembeli");
            }
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }
}

?>