<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:09
 */

require_once 'init.php';

class Produk
{
    public static function showProdukPenjual($id_user)
    {
        global $con;
        $sql = "select * from produk where id_user = $id_user";
        $result = $con->query($sql);
        $list = [];
        foreach ($result as $item) {
            $list[] = array(
                'id_produk' => $item['id_produk'],
                'nama_produk' => $item['nama_produk'],
                'harga' => $item['harga'],
                'stok' => $item['stok'],
                'kategor' => $item['kategori'],
                'gambar' => $item['gambar']
            );
        }
        return $list;
    }

    public static function editProdukPenjual($id_produk)
    {
        global $con;
        $sql = "select * from produk where id_produk = $id_produk";
        $result = $con->query($sql);
        $list = [];
        foreach ($result as $item) {
            $list[] = array(
                'id_produk' => $item['id_produk'],
                'nama_produk' => $item['nama_produk'],
                'harga' => $item['harga'],
                'stok' => $item['stok'],
                'kategori' => $item['kategori'],
                'gambar' => $item['gambar']
            );
        }
        return $list;
    }


    public static function detailProdukPenjual($id_produk)
    {
        global $con;
        $sql = "select * from produk where id_produk = $id_produk";
        $result = $con->query($sql);
        $list = [];
        foreach ($result as $item) {
            $list[] = array(
                'id_produk' => $item['id_produk'],
                'nama_produk' => $item['nama_produk'],
                'harga' => $item['harga'],
                'stok' => $item['stok'],
                'kategori' => $item['kategori'],
                'gambar' => $item['gambar']
            );
        }
        return $list;
    }

    public static function tambahProduk($id_user, $nama_produk, $harga, $stok, $gambar, $kategori)
    {
        global $con;
        $sql = "call tambah_produk($id_user,'$nama_produk',$harga,$stok,'$gambar','$kategori')";
        $result = $con->query($sql);
        return $result;
    }

    public static function editProduk($id_produk, $nama_produk, $harga, $stok, $gambar, $kategori)
    {
        global $con;;
        $sql1 = "select gambar from produk where id_produk = $id_produk";
        $result1 = mysqli_query($con, $sql1);
        foreach ($result1 as $item) {
            $url_gambar = $item['gambar'];
        }
        if ($gambar == "") {
            $sql2 = ("UPDATE `produk` SET `nama_produk`='$nama_produk',`harga`=$harga,
`stok`=$stok,`kategori` = '$kategori'WHERE id_produk =  $id_produk");
            $result2 = mysqli_query($con, $sql2);
        } else {
            $sql3 = ("UPDATE `produk` SET `nama_produk`='$nama_produk',`harga`=$harga,
`stok`=$stok, `gambar`='$gambar',`kategori` = '$kategori' WHERE id_produk =  $id_produk");
            unlink('gambar/' . $url_gambar);
            $result3 = mysqli_query($con, $sql3);
        }
        return $result1;
    }

    public static function hapusProduk($id_produk)
    {
        global $con;
        $sql2 = "select gambar from produk where id_produk = $id_produk";
        $result1 = $con->query($sql2);
        if (mysqli_num_rows($result1)) {
            $row = mysqli_fetch_assoc($result1);
            unlink('gambar/' . $row['gambar']);
        }
        $sql = "delete from produk where id_produk = $id_produk";
        $result = $con->query($sql);
        return $result;
    }

    public static function page(){
        global $con;
        $count = "SELECT COUNT(*) as jum FROM `produk` WHERE stok > 0";
        $res = $con->query($count)->fetch_assoc();
        $jum = ceil($res['jum']/5);
        return $jum;
    }
    public static function showProduk($page)
    {
        global $con;
        $akhir = $page * 5;
        $awal = $akhir - 5;
        $list = [];
        $sql = "select * from produk where stok > 0 order by id_produk desc limit $awal,$akhir";
        $result = $con->query($sql);
        foreach ($result as $item) {
            $list[] = array(
                'id_produk' => $item['id_produk'],
                'nama_produk' => $item['nama_produk'],
                'harga' => $item['harga'],
                'stok' => $item['stok'],
                'gambar' => $item['gambar'],
                'kategori' =>$item['kategori'],
            );
        }
        return $list;
    }
    public static function showDetailProduk($id_produk)
    {
        global $con;
        $list = [];
        $sql = "select * from produk where id_produk = $id_produk";
        $result = $con->query($sql);
        foreach ($result as $item) {
            $list[] = array(
                'id_produk' => $item['id_produk'],
                'nama_produk' => $item['nama_produk'],
                'harga' => $item['harga'],
                'stok' => $item['stok'],
                'gambar' => $item['gambar'],
                'kategori' =>$item['kategori']
            );
        }
        return $list;
    }
}

?>