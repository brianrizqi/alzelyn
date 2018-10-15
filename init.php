<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:06
 */

$db_name = "alzelyn";
$mysql_user = "root";
$mysql_pass = "";
$server_name = "localhost";

$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
if (!$con) {
//    echo "connection error";
} else {
//    echo "connection successfull";
}


?>