<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:06
 */

class HomeController
{
    public function home()
    {
        require_once('view/pages/home.php');
    }

    public function homeAdmin()
    {
        if (isset($_SESSION['user'])) {
            require_once('view/pages/v_admin.php');
        } else {
            header('location:index.php?controller=login&action=login');
        }
    }

    public function homePenjual()
    {
        if (isset($_SESSION['user'])) {
            require_once('view/pages/v_penjual.php');
        } else {
            header('location:index.php?controller=login&action=login');
        }
    }

    public function homePembeli()
    {
        if (isset($_SESSION['user'])) {
            require_once('view/pages/v_pembeli.php');
        } else {
            header('location:index.php?controller=login&action=login');
        }
    }
}

?>