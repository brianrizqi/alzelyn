<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:06
 */

class RegisterController
{
    public function register()
    {
        $list = Register::kota();
        require_once('view/pages/v_register.php');
    }

    public function createUser()
    {
        if ($_POST['check'] == "check") {
            $list = Register::createUser($_POST['nama'], $_POST['email'], $_POST['alamat'], $_POST['kota'],
                $_POST['no_telp'], $_POST['username'], md5($_POST['password']), $_POST['level']);
            header("location: index.php?controller=login&action=login");
        } else {
            ?>
            <script type="text/javascript">
                alert("mohon dicentang");
            </script>
            <?php
            header("location: ?controller=register&action=register");
        }
    }
}

?>