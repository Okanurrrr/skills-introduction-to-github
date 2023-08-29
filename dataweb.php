<?php 
session_start();

if (!isset($_SESSION["login"])){
header("location: login.php");
exit;
}
require 'functions.php';
$dataweb = query ("SELECT * FROM dataweb");
?>
<!DOCTYPE html>
<html lang="id">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>DATA WEBSITE OPD</title>

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
                                <a class="nav-link" href="logout.php"><i class="fa fa-sign-in"></i>Keluar</a>
                        </ul>
                    </nav>
                </div>
                <!-- Main view  -->
                <div class="col-sm-pull-2" align="center">
                    <!-- <h2>DASHBOARDSISTEM PEMERINTAHAN BERBASIS ELEKTRONIK NAGAN RAYA</h2> -->
                </div>
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                            background-color: #f4f4f4;
                        }

                        .container {
                            max-width: 1000px;
                            margin: 20px auto;
                            padding: 20px;
                            background-color: #fff;
                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                            border-radius: 5px;
                        }

                        table {
                            width: 100%;
                            /* Atur lebar tabel menjadi 100% dari lebar kontainer */
                            border-collapse: collapse;
                            margin-top: 10px;
                            background-color: #fff;
                        }

                        table th,
                        table td {
                            border: 1px solid #ccc;
                            padding: 4px;
                            /* Kurangi padding menjadi 4px */
                            text-align: left;
                        }

                        thead {
                            background-color: #2980b9;
                            /* Latar belakang biru untuk thead */
                            color: #fff;
                            /* Tulisan putih untuk thead */
                        }

                        /* CSS untuk kolom "NO" */
                        table th:first-child,
                        table td:first-child {
                            width: 50px;
                            /* Atur lebar kolom "NO" sesuai yang diinginkan (misalnya 50px) */
                        }

                        /* CSS untuk kolom "Aksi" */
                        table th:last-child,
                        table td:last-child {
                            width: 120px;
                            /* Atur lebar kolom "Aksi" menjadi 120px */
                        }

                        .button-container {
                            display: flex;
                            gap: 10px;
                        }

                        .add-button,
                        .edit-button,
                        .delete-button {
                            background-color: #2980b9;
                            color: #fff;
                            border: none;
                            padding: 8px 12px;
                            cursor: pointer;
                            border-radius: 3px;
                            transition: background-color 0.3s ease;
                        }

                        .edit-button {
                            background-color: #e67e22;
                        }

                        .delete-button {
                            background-color: #c0392b;
                        }

                        .add-button:hover,
                        .edit-button:hover,
                        .delete-button:hover {
                            background-color: #1b4f72;
                        }

                        table td img {
                            max-width: 100%;
                            max-height: 100px;
                            /* Ubah nilai 100px sesuai dengan tinggi maksimum yang diinginkan */
                            display: block;
                        }
                        </style>

                        </head>

                        <body>
                            <div class="container">
                                <div class="button-container">
                                    <!-- Tombol "Tambah" permanen di luar tabel -->
                                    <button class="add-button"
                                        onclick="window.location.href = 'addweb.php';">Tambah</button>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Status</th>
                                            <th>Link</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data Baris 1 -->
                                        <?php  $i = 1; ?>
                                        <?php foreach ( $dataweb as $row) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $row["Nama"] ?></td>
                                            <td><?= $row["Deskripsi"] ?></td>
                                            <td><?= $row["Status"] ?></td>
                                            <td><a href="<?= $row["Link"] ?>">Kunjungi</a></td>
                                            <td><img src="img/<?= $row["Gambar"] ?>" width="50" height="50"></td>
                                            <td>
                                                <button class="edit-button"
                                                    onclick="window.location.href='editweb.php?id=<?= $row["id"]; ?>'">Edit</button>
                                                <button class="delete-button" onclick="if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                window.location.href='hapus.php?id=<?= $row["id"]; ?>';
             }">hapus</button>

                            </div>
                            </td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>

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



</body>



</html>