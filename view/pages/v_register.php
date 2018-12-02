<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 12/10/2018
 * Time: 9:05
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_register_prifilan</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="resources/css/untitled.css">
    <link rel="stylesheet" href="resources/css/Google-Style-Login.css">
    <link rel="stylesheet" href="resources/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="resources/css/Pretty-Header.css">

</head>

<body>
<div class="row register-form">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal custom-form" method="post" name="formRegis" onsubmit="return validateForm()">
            <input type="hidden" name="controller" value="register">
            <input type="hidden" name="action" value="createUser">
            <h1>Register Form</h1>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="name-input-field">Username </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="username">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="name-input-field">Name </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="nama">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="email-input-field">Email </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="email" name="email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="pawssword-input-field">Password </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="password" name="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="-pawssword-input-field">Phone </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="no_telp">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="repeat-pawssword-input-field">Address </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="alamat">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="dropdown-input-field">Provinsi </label>
                </div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown">
                        <select id="provinsi" class="btn btn-default dropdown-toggle" onchange="pilihkota()">
                            <option value="">Pilih Provinsi</option>
                            <?php
                            foreach ($list as $item) {
                                ?>
                                <option value="<?= $item['id_provinsi'] ?>"><?= $item['provinsi'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="dropdown-input-field">Kabupaten/Kota </label>
                </div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown" id="kota">
                        <select name="kota" class="btn btn-default dropdown-toggle">
                            <option value="">Pilih Kota</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="dropdown-input-field">Role </label>
                </div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown">
                        <select name="level" class="btn btn-default dropdown-toggle">
                            <option value="2">Penjual</option>
                            <option value="3">Pembeli</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox">I've read and accept the terms and conditions</label>
            </div>
            <input class="btn btn-default submit-button" type="submit" name="submit" value="Register">
        </form>
    </div>
</div>
</body>

<script type="text/javascript">
    function pilihkota() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","kota.php?id="+document.getElementById("provinsi").value,false);
        xmlhttp.send(null);
        document.getElementById("kota").innerHTML=xmlhttp.responseText;
    }
    function validateForm() {
        var username = document.forms["formRegis"]["username"].value;
        var password = document.forms["formRegis"]["password"].value;
        var nama = document.forms["formRegis"]["nama"].value;
        var no_telp = document.forms["formRegis"]["no_telp"].value;
        var alamat = document.forms["formRegis"]["alamat"].value;
        var email = document.forms["formRegis"]["email"].value;
        if (username == "") {
            alert("Username Kosong");
            return false;
        } else if (password == ""){
            alert("Password Kosong");
            return false;
        } else if (nama == ""){
            alert("Nama Kosong");
            return false;
        } else if (no_telp == ""){
            alert("No Telp Kosong");
            return false;
        } else if (alamat == ""){
            alert("Alamat Kosong");
            return false;
        } else if (email =="") {
            alert("email Kosong");
            return false;
        }
    }
</script>
</html>
