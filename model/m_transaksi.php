<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:09
 */

require_once 'init.php';

class Transaksi
{
    public static function showTransaksiPembeli($id_user)
    {
        global $con;
        $list = [];
        $sql = "SELECT * from `order` where id_user=$id_user";
        $result = mysqli_query($con, $sql);
        foreach ($result as $item) {
            $list[] = array(
                'id_order' => $item['id_order'],
                'tanggal' => $item['tanggal'],
                'verif' => $item['verif'],
                'bukti' => $item['bukti']
            );
        }
        return $list;
    }

    public static function showDetailTransaksiPembeli($id_order)
    {
        global $con;
        $list = [];
        $sql = "select p.nama_produk,dt.jumlah,dt.total_harga from `detail_order` dt 
join produk p on dt.id_produk = p.id_produk 
where dt.id_order = $id_order";
        $result = mysqli_query($con, $sql);
        foreach ($result as $item) {
            $list[] = array(
                'nama_produk' => $item['nama_produk'],
                'total_harga' => $item['total_harga'],
                'jumlah' => $item['jumlah'],
            );
        }
        return $list;
    }

    public static function uploadBukti($gambar, $id_order)
    {
        global $con;
        $sql = "update `order` set bukti = '$gambar' where id_order = $id_order";
        $result = $con->query($sql);
        return $result;
    }

    public static function showTransaksiPenjual($id_user)
    {
        global $con;
        $list = [];
        $sql = "SELECT p.nama_produk,dp.jumlah,dp.total_harga,dp.tanggal,
		(SELECT verif FROM `order` WHERE id_order=dp.id_order) as verif,
		(SELECT u.nama FROM `order` o JOIN users u ON o.id_user=u.id_user 
		WHERE id_order=dp.id_order) as pembeli,(SELECT u.alamat FROM `order` o JOIN users u ON o.id_user=u.id_user 
		WHERE id_order=dp.id_order) as alamat FROM detail_order dp
		JOIN produk p on dp.id_produk=p.id_produk join users u ON p.id_user=u.id_user
		WHERE p.id_user= $id_user";
        $result = $con->query($sql);
        foreach ($result as $item) {
            $list[] = array(
                'nama_produk' => $item['nama_produk'],
                'jumlah' => $item['jumlah'],
                'total_harga' => $item['total_harga'],
                'tanggal' => $item['tanggal'],
                'verif' => $item['verif'],
                'pembeli' => $item['pembeli'],
                'alamat' => $item['alamat']
            );
        }
        return $list;
    }

    public static function showTransaksiAdmin()
    {
        global $con;
        $sql = "SELECT id_order,u.nama,tanggal,verif,bukti from `order` t 
		JOIN users u ON t.id_user=u.id_user";
        $result = $con->query($sql);
        $list = [];
        foreach ($result as $item) {
            $list[] = array(
                'id_order' => $item['id_order'],
                'nama' => $item['nama'],
                'tanggal' => $item['tanggal'],
                'verif' => $item['verif'],
                'bukti' => $item['bukti'],
            );
        }
        return $list;
    }

    public static function hapusTransaksi($id_order)
    {
        global $con;
        $sql = "delete from `order` where id_order = $id_order";
        $result = $con->query($sql);
        return $result;
    }

    public static function detailBuktiAdmin($id_order)
    {
        global $con;
        $list = [];
        $sql = "select bukti from `order` where id_order = $id_order";
        $result = $con->query($sql);
        foreach ($result as $item) {
            $list[] = array(
                'bukti' => $item['bukti']
            );
        }
        return $list;
    }

    public static function detailTransaksiAdmin($id_order)
    {
        global $con;
        $sql = "SELECT alamat, p.nama_produk,dt.jumlah,dt.total_harga,dt.tanggal,nama FROM detail_order dt
		JOIN produk p on dt.id_produk=p.id_produk JOIN users u on p.id_user=u.id_user join `order` t on
		t.id_order = dt.id_order
		WHERE dt.id_order=$id_order";
        $list = [];
        $result = $con->query($sql);
        foreach ($result as $item) {
            $list[] = array(
                'alamat' => $item['alamat'],
                'nama_produk' => $item['nama_produk'],
                'jumlah' => $item['jumlah'],
                'total_harga' => $item['total_harga'],
                'tanggal' => $item['tanggal'],
                'nama' => $item['nama']
            );
        }
        return $list;
    }
    public static function verifAdmin($id_order){
        global $con;
        $id_produk = array();
        $jumlah = array();
        $status = 0;
        $sql2 = "SELECT * FROM detail_order WHERE id_order=$id_order";
        $result2 = mysqli_query($con, $sql2);
        if (mysqli_num_rows($result2) > 0) {
            while ($row = mysqli_fetch_assoc($result2)) {
                $id_produk[] = $row['id_produk'];
                $jumlah[] = $row['jumlah'];
            }
        }
        $sql3 = "select * from `order` where id_order = $id_order";
        $result3 = mysqli_query($con, $sql3);
        if (mysqli_num_rows($result3) > 0) {
            while ($row = mysqli_fetch_assoc($result3)) {
                $status = $row['verif'];
            }
        }
        if ($status == 0) {
            for ($i = 0; $i < count($jumlah); $i++) {
                $sql4 = "update produk set stok = stok-$jumlah[$i] where id_produk = $id_produk[$i]";
                $result4 = mysqli_query($con, $sql4);
            }
        }
        $sql = "update `order` set verif = 1 where id_order = $id_order";
        $result = mysqli_query($con, $sql);
        return $result4;
    }
}

?>