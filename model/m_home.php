<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:08
 */

require_once 'init.php';

class Home{
    public static function statAdmin(){
        global $con;
        $sql = "select sum(jumlah)as jumlah,do.id_produk as id_produk,p.nama_produk as nama_produk, u.nama as nama from detail_order do 
join produk p on p.id_produk = do.id_produk join users u on p.id_user = u.id_user GROUP by id_produk order by jumlah desc limit 0,1";
        $result = $con->query($sql);
        $list = [];
        foreach ($result as $item) {
            $list[] = array(
                'jumlah' => $item['jumlah'],
                'id_produk' => $item['id_produk'],
                'nama_produk' => $item['nama_produk'],
                'nama' => $item['nama']
            );
        }
        return $list;
    }
    public static function statPenjual($id_user){
        global $con;
        $sql = "select sum(jumlah) as jumlah,do.id_produk as id_produk,p.nama_produk as nama_produk, u.nama as nama from detail_order do 
join produk p on p.id_produk = do.id_produk join users u on p.id_user = u.id_user 
where u.id_user = $id_user GROUP by id_produk order by jumlah desc limit 0,1";
        $result = $con->query($sql);
        $list = [];
        foreach ($result as $item) {
            $list[] = array(
                'jumlah' => $item['jumlah'],
                'id_produk' => $item['id_produk'],
                'nama_produk' => $item['nama_produk'],
                'nama' => $item['nama']
            );
        }
        return $list;
    }
}

?>