<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:06
 */

class UserController
{
    public function showProfilePenjual()
    {
        if (isset($_SESSION['user'])){
            $list = User::showPenjual($_SESSION['id_user']);
            require_once ('view/pages/v_penjual_profile.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }
    public function showEditProfilePenjual(){
        if (isset($_SESSION['user'])){
            $list = User::showEditPenjual($_SESSION['id_user']);
            require_once ('view/pages/v_penjual_edit_profile.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }
}

?>