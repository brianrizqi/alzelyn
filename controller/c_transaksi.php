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
}

?>