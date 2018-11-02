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
}

?>