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
        if (isset($_SESSION['user'])){
            require_once ('view/pages/v_penjual_produk.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }
}

?>