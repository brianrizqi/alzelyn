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
    public static function createUser($nama,$email,$alamat,$no_tlp,$username,$password,$level)
    {
        global $con;
        $sql = "call tambah_user('$nama','$email','$alamat','$no_tlp','$username','$password',$level)";
        $result = $con->query($sql);
        return $result;
    }
}

?>