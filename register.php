<?php 
session_start();

if (!isset($_SESSION["login"])){
header("location: login.php");
exit;
}
require 'functions.php';
if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0 ) {
        echo "<sripct>
        alert('user baru berhasil ditambahkan');
        </script>";
    }else {
        echo mysqli_error($conn);

    }
}
?>

<!DOCTYPE html>
<html lang="id">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>REGISTRASI USER SPBE</title>

    <!-- Scripts -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <body class="md-skin fixed-nav no-skin-config">
        <!-- Wrapper-->
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <!!PROFIL>
                                <div class="dropdown profile-element" align="center">
                                    <img alt="image" src="img/naganraya.png" />

                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <span class="block m-t-xs font-bold">PEMERINTAH KABUPATEN NAGAN RAYA</span>
                                        <!-- <span class="text-muted text-xs block">Guest </span> -->
                                    </a>
                                </div>
                                <div class="logo-element">
                                    SPBE NAGAN RAYA
                                </div>
                        </li>

                        <li class="active">
                            <a href="index.php"><i class="fa fa-home"></i> <span class="nav-label">BERANDA</span></a>
                        </li>
                        <li class="">
                            <a href="opd.php"><i class="fa fa-users"></i> <span class="nav-label">OPD </span></a>
                        </li>
                        <li class="">
                            <a href="kecamatan.php"><i class="fa fa-university"></i> <span class="nav-label">KECAMATAN
                                </span></a>
                        </li>
                        <li class="landing_link">
                            <a href="login.php"><i class="fa fa-sign-in"></i> <span class="nav-label">MASUK
                                </span></a>
                        <li class="">
                            <a href="hubungi.php"><i class="fa fa-info-circle"></i> <span class="nav-label">TENTANG
                                    KAMI
                                </span></a>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- Page wrapper -->
            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-fixed-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                    class="fa fa-bars"></i> </a>
                        </div>




                        <ul class="nav navbar-top-links navbar-right">
                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i>Masuk</a>
                        </ul>
                    </nav>
                </div>
                <!-- Main view  -->

                <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f0f0f0;
                    margin: 0;
                    padding: 0;
                }

                .container {
                    max-width: 400px;
                    margin: 50px auto;
                    padding: 20px;
                    background-color: #fff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                    border-radius: 10px;
                }

                h2 {
                    text-align: center;
                }

                label {
                    display: block;
                    margin-bottom: 5px;
                }

                input[type="text"],
                input[type="password"] {
                    width: 100%;
                    padding: 8px;
                    margin-bottom: 15px;
                    border: 1px solid #ccc;
                    /* Ubah ketebalan garis menjadi 1px */
                    border-radius: 5px;
                    transition: border-color 0.3s ease;
                    box-sizing: border-box;
                    /* Tambahkan untuk meratakan kiri dan kanan */
                }

                input[type="text"]:focus,
                input[type="password"]:focus {
                    border-color: #00aaff;
                    outline: none;
                }

                button[name="register"] {
                    width: 100%;
                    padding: 10px;
                    background-color: #0157FF;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }

                button[name="register"]:hover {
                    background-color: #0088cc;
                }
                </style>
                </head>

                <body>
                    <div class="container">
                        <h2>Registrasi Akun</h2>
                        <form action=" " method="POST">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" required>

                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>

                            <label for="password2">Konfirmasi Password:</label>
                            <input type="password" id="password2" name="password2" required>

                            <button type="submit" name="register">Registrasi</button>
                        </form>
                    </div>
                </body>

</html>



<!-- Footer -->
<div class="footer">
    <div class="float-right">
        PEMERINTAH KABUPATEN NAGAN RAYA
    </div>
    <div>
        <strong>SISTEM PEMERINTAHAN BERBASIS ELEKTRONIK</strong> DISKOMINFOTIK &copy; 2023
    </div>
</div>

</div>
<!-- End wrapper-->


<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>

<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/delin.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>



</body>



</html>