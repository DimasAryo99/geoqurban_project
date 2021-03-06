<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/regis2/') ?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/regis2/') ?>css/style.css">

</head>

<body>

    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <form method="POST" class="signup-form" action="<?= base_url('registrasi/index'); ?>">
        <center>            
            <a>
                <img src="<?= base_url('assets/'); ?>gambar/GeoQurban2.png">
            </a>
        </center>
            <br>
            <h2 class="form-title">Create account</h2>
            <center>
                <h3 class="form-title">Data Diri</h3>

            </center>

            <div class="form-group">
                <input type="text" class="form-input" name="nama_lengkap" id="nama_lengkap" placeholder="nama lengkap" autofocus>
                <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="email" id="email" placeholder="email" autofocus>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="no_telp" id="no_telp" placeholder="nomor telepon" autofocus>
                <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="username" id="username" placeholder="username" autofocus>
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password1" id="password1" placeholder="password">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password2" id="password2" placeholder="repeat password">
            </div>


            <div class="form-group">
                <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
            </div>
        </form>
        <p class="loginhere">
            Have already an account ? <a href="<?= base_url("login/index") ?>" class="loginhere-link">Login here</a>
        </p>
    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/regis2/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/regis2/') ?>js/main.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/jquery.steps.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>