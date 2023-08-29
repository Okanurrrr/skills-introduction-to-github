<?php
// Impor konfigurasi koneksi database
require "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ORGANISASI PERANGKAT DAERAH</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">



    <!-- Scripts -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
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
                                    SPBENAGAN RAYA
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
                        <li class="">
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
                <div class="col-sm-pull-2" align="center">
                    <!-- <h2>DASHBOARDSPBENAGAN RAYA</h2> -->
                </div>
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">


                        <!-- Aplikasi scripts -->
                        <div class="container">
                            <?php
    // Query untuk mengambil data dari database (misalnya tabel Dataweb)
    $sql = "SELECT Nama, Deskripsi, Status, Link, Gambar FROM Dataweb";
    $result = mysqli_query($conn, $sql);

    // Definisikan jumlah kotak (kolom) dalam satu baris
    $kotak_per_baris = 4;
    $counter = 0;

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Setiap baris ditutup dan dibuka kembali setiap jumlah kotak (kolom) sesuai dengan $kotak_per_baris
            if ($counter % $kotak_per_baris === 0) {
                // Menutup baris sebelumnya jika sudah ada
                if ($counter !== 0) {
                    echo '</div>';
                }
                // Membuka baris baru
                echo '<div class="row">';
            }
    ?>
                            <div class="col-md-3">
                                <div class="ibox">
                                    <div class="ibox-content product-box">
                                        <div class="product-images" align="center">
                                            <img src="img/<?php echo $row['Gambar']; ?>" />
                                        </div>
                                        <div class="product-desc">
                                            <small class="label label-warning-light">Status:
                                                <?php echo $row['Status']; ?></small>
                                            <a target="_blank" href="<?php echo $row['Link']; ?>" class="product-name">
                                                <?php echo $row['Nama']; ?>
                                            </a>
                                            <div class="small m-t-xs">
                                                <?php echo $row['Deskripsi']; ?>
                                            </div>
                                            <div class="m-t text-right2">
                                                <a target="_blank" href="<?php echo $row['Link']; ?>"
                                                    class="btn btn-xs btn-outline btn-primary">Selengkapnya <i
                                                        class="fa fa-long-arrow-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
            $counter++;
        }
        // Menutup baris terakhir jika jumlah kotak (kolom) tidak habis dibagi $kotak_per_baris
        if ($counter % $kotak_per_baris !== 0) {
            echo '</div>';
        }
    } else {
        echo "Tidak ada data produk.";
    }

    // Menutup koneksi
    mysqli_close($conn);
    ?>

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


    </body>

</html>

</body>

</html>