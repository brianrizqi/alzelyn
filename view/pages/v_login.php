<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 12/10/2018
 * Time: 9:01
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="hidden" name="controller" value="login">
    <input type="hidden" name="action" value="auth">
    <h4>Username</h4>
    <input type="text" name="username" required>
    <h4>Password</h4>
    <input type="password" name="password" required>
    <br><br>
    <input type="submit" name="submit" value="Login">
</form>
<?php
//if (isset($_POST['submit'])) {
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//    if ($username == "admin" || $password == "admin") {
//        header("Location: v_admin.php");
//        exit();
//    } else if ($username == "penjual" || $password == "penjual") {
//         header("Location: v_penjual.php");
//         exit();
//    }
//}
?>
</body>
</html>
