<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:08
 */

require_once 'init.php';

class Register
{
    public static function kota()
    {
        global $con;
        $sql = "select * from provinsi";
        $result = $con->query($sql);
        $list = [];
        foreach ($result as $item) {
            $list[] = array(
                'id_provinsi' => $item['id_provinsi'],
                'provinsi' => $item['provinsi']
            );
        }
        return $list;
    }

    public static function createUser($nama, $email, $alamat,$id_kota ,$no_tlp, $username, $password, $level)
    {
        global $con;
        $sql = "INSERT INTO `users`(`nama`, `email`, `alamat`, `id_kota`, `no_tlp`, `username`, `password`, `level`) 
VALUES ('$nama','$email','$alamat',$id_kota,'$no_tlp','$username','$password',$level)";
        $result = $con->query($sql);
        return $result;
    }
}

?>