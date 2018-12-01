<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 01/12/2018
 * Time: 8:29
 */

require_once 'init.php';

$id = $_GET['id'];
if ($id != "") {
    $sql = "select * from kota where id_provinsi = $id";
    $result = $con->query($sql);
    echo "<select>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option>"; echo $row['kota']; echo "</option>";
    }
    echo "</select>";
}
?>


