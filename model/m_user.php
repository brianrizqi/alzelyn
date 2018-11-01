<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:08
 */

require_once 'init.php';

class User
{
    public static function showPenjual($id_user)
    {
        global $con;
        $sql = "select * from users where id_user = $id_user";
        $list = [];
        $result = mysqli_query($con, $sql);
        foreach ($result as $item) {
            $list[] = array(
                'id_user' => $item['id_user'],
                'nama' => $item['nama'],
                'email' => $item['email'],
                'alamat' => $item['alamat'],
                'no_tlp' => $item['no_tlp'],
                'username' => $item['username'],
            );
        }
        return $list;
    }

    public static function showEditPenjual($id_user)
    {
        global $con;
        $sql = "select * from users where id_user = $id_user";
        $list = [];
        $result = mysqli_query($con, $sql);
        foreach ($result as $item) {
            $list[] = array(
                'nama' => $item['nama'],
                'email' => $item['email'],
                'alamat' => $item['alamat'],
                'no_tlp' => $item['no_tlp'],
                'username' => $item['username']
            );
        }
        return $list;
    }

    public static function editPembeli($nama,$email,$alamat,$no_tlp,$username,$password,$id_user)
    {
        global $con;
        $sql = "update users set nama='$nama',email='$email',alamat='$alamat',no_tlp='$no_tlp',
username = '$username', password = '$password' where id_user = $id_user";
        $result = $con->query($sql);
        return $result;
    }
    public static function editPenjual($nama,$email,$alamat,$no_tlp,$username,$password,$id_user)
    {
        global $con;
        $sql = "update users set nama='$nama',email='$email',alamat='$alamat',no_tlp='$no_tlp',
username = '$username', password = '$password' where id_user = $id_user";
        $result = $con->query($sql);
        return $result;
    }
}

?>