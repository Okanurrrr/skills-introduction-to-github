<?php
//ini  adalah sintaks pemograman yang saya kerjakan di saat pelaksanaan kerja praktek
session_start();

if (!isset($_SESSION["login"])){
header("location: login.php");
exit;
}
// Hubungkan ke file functions.php 
require 'functions.php';


// Cek apakah form telah di-submit
if (isset($_POST["submit"])) {
    // Panggil fungsi addkec untuk menyimpan data ke database
    $result = addkec($_POST);
    if ($result > 0) {
        // Jika data berhasil disimpan, berikan pesan sukses
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        
        </script> ";
    } else {
        // Jika data gagal disimpan, berikan pesan gagal
        echo "
    <script>
    alert('data berhasil ditambahkan!');
 
    </script> ";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<!DOCTYPE html>
<html lang="id">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAMBAH DATA KECAMATAN</title>

    <!-- Scripts -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
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
                                        <span class="block m-t-xs font-bold">ADMIN SPBE</span>
                                        <!-- <span class="text-muted text-xs block">Guest </span> -->
                                    </a>
                                </div>
                                <div class="logo-element">
                                    SPBE NAGAN RAYA
                                </div>
                        </li>

                        <li class="active">
                            <a href="dataweb.php"><i class="fa fa-users"></i> <span class="nav-label">DATA WEBSITE
                                    OPD</span></a>

                        </li>
                        <li class="">
                            <a href="datakec.php"><i class="fa fa-university"></i> <span class="nav-label">DATA
                                    KECAMATAN
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
                                <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i>Keluar</a>
                        </ul>
                    </nav>
                </div>
                <!-- Main view  -->
                <div class="col-sm-pull-2" align="center">
                    <!-- <h2>DASHBOARDSISTEM PEMERINTAHAN BERBASIS ELEKTRONIK NAGAN RAYA</h2> -->
                </div>
                <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #fff;
                    /* Warna background putih */
                }

                .form-container {
                    width: 400px;
                    margin: 50px auto;
                    padding: 20px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    background-color: #fff;
                    /* Warna background putih */
                }

                .form-row {
                    display: flex;
                    flex-direction: column;
                    margin-bottom: 15px;
                }

                .form-label {
                    font-size: 12px;
                    font-weight: bold;
                    color: #007BFF;
                    margin-bottom: 5px;
                }

                .form-input {
                    padding: 8px;
                    border: 1px solid #ccc;
                    border-radius: 3px;
                    color: #000;
                    transition: border-color 0.3s;
                }

                .form-input:focus {
                    border-color: #007BFF;
                    outline: none;
                }

                .form-container button {
                    width: 100%;
                    margin-top: 15px;
                    padding: 10px 20px;
                    background-color: #007BFF;
                    color: #fff;
                    border: none;
                    border-radius: 3px;
                    cursor: pointer;
                    transition: background-color 0.3s;
                }

                .form-container button:hover {
                    background-color: #0056b3;
                }

                .form-container button:active {
                    background-color: #007BFF;
                }
                </style>
                </head>


                <body>
                    <div class="form-container">
                        <form action="" method="POST">
                            <div class="form-row">
                                <label class="form-label" for="nama_kecamatan">Nama Kecamatan</label>
                                <input class="form-input" type="text" id="nama_kecamatan" name="nama_kecamatan"
                                    required>
                            </div>

                            <div class="form-row">
                                <label class="form-label" for="link_web">Link Web</label>
                                <input class="form-input" type="url" id="link_web" name="link_web" required>
                            </div>

                            <button type="submit" name="submit">Simpan Data</button>
                    </div>
                </body>

</html>
<!-- Footer -->
<div class="footer">
    <div class="float-right">
        <ul class="list-inline social-icon">
            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
            </li>
        </ul>
    </div>
    <div>
        &copy; 2023 Diskominfotik.All Rights
        Reserved.

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


</html>

</html>
