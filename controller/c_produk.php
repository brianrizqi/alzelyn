<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:06
 */

class ProdukController
{
    public function showProdukPenjual()
    {
        if (isset($_SESSION['user'])) {
            $list = Produk::showProdukPenjual($_SESSION['id_user']);
            require_once('view/pages/v_penjual_produk.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }

    public function showTambahProduk()
    {
        if (isset($_SESSION['user'])) {
            require_once('view/pages/v_penjual_tambah_produk.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }

    public function tambahProduk()
    {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $gambar = date('dmYHis') . $foto;
        $path = "gambar/" . $gambar;
        if (move_uploaded_file($tmp, $path)) {
            $produk = Produk::tambahProduk($_SESSION['id_user'], $_POST['nama_produk'], $_POST['harga'],
                $_POST['stok'], $gambar, $_POST['kategori']);
            header("location: index.php?controller=produk&action=showProdukPenjual");
        }
    }

    public function detailProdukPenjual()
    {
        $list = Produk::detailProdukPenjual($_GET['id_produk']);
        require_once('view/pages/v_penjual_detail_produk.php');
    }

    public function showEditProduk()
    {
        $list = Produk::editProdukPenjual($_GET['id_produk']);
        require_once('view/pages/v_penjual_edit_produk.php');
    }

    public function editProduk()
    {
        if (!file_exists($_FILES['foto']['tmp_name'])) {
            $produk = Produk::editProduk($_POST['id_produk'], $_POST['nama_produk'], $_POST['harga'], $_POST['stok'], $_POST['foto'], $_POST['kategori']);
            header("Location: index.php?controller=produk&action=showProdukPenjual");
        } else {
            $foto = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];
            $gambar = date('dmYHis') . $foto;
            $path = "gambar/" . $gambar;
            if (move_uploaded_file($tmp, $path)) {
                $produk = Produk::editProduk($_POST['id_produk'], $_POST['nama_produk'], $_POST['harga'], $_POST['stok'], $gambar, $_POST['kategori']);
                header("Location: index.php?controller=produk&action=showProdukPenjual");
            }
        }
    }

    public function hapusProduk()
    {
        $produk = Produk::hapusProduk($_GET['id_produk']);
        header("Location: index.php?controller=produk&action=showProdukPenjual");
    }

    public function showProduk()
    {
        $list = Produk::showProduk($_GET['kategori']);
        require_once('view/pages/v_produk.php');
    }

    public function showProdukPembeli()
    {
        if (isset($_SESSION['user'])) {
            $list = Produk::showProduk($_GET['kategori']);
            require_once('view/pages/v_pembeli_produk.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }
}

?>