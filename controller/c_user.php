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
    public function showProfilePembeli(){
        if (isset($_SESSION['user'])){
            $list = User::showPenjual($_SESSION['id_user']);
            require_once ('view/pages/v_pembeli_profile.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }
    public function showEditProfilePembeli(){
        if (isset($_SESSION['user'])){
            $list = User::showPenjual($_SESSION['id_user']);
            require_once ('view/pages/v_pembeli_edit_profile.php');
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }
    public function editPembeli(){
        if (isset($_SESSION['user'])){
            $list = User::editPenjual($_POST['nama'],$_POST['email'],$_POST['alamat'],$_POST['no_tlp'],
                $_POST['username'],md5($_POST['password']),$_SESSION['id_user']);
            header("location: index.php?controller=user&action=showProfilePembeli");
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }
    public function editPenjual(){
        if (isset($_SESSION['user'])){
            $list = User::editPenjual($_POST['nama'],$_POST['email'],$_POST['alamat'],$_POST['no_tlp'],
                $_POST['username'],md5($_POST['password']),$_SESSION['id_user']);
            header("location: index.php?controller=user&action=showProfilePenjual");
        } else {
            header("location: index.php?controller=login&action=login");
        }
    }
}

?>