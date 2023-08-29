<?php 
session_start(); 

if (!isset($_SESSION["login"])){
header("location: login.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN SPBE</title>

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
            <div id="welcome-text">
                <h1>Selamat Datang Admin Pengelola SPBE</h1>

            </div>

            <style>
            /* Gaya CSS untuk teks selamat datang */
            #welcome-text {
                position: fixed;
                top: 50%;
                left: 55%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: #0157FF;
                /* Warna teks biru */
                z-index: 9999;
                /* Pastikan teks muncul di atas konten lain */
                font-family: Arial, sans-serif;
                /* Menggunakan font Arial atau font sans-serif */
            }

            h1 {
                font-size: 36px;
                /* Ukuran font untuk judul */
            }

            p {
                font-size: 20px;
                /* Ukuran font untuk paragraf */
                font-weight: bold;
                /* Menebalkan teks pada paragraf */
            }

            /* Gaya untuk mengatur latar belakang halaman */
            body {
                background-color: #f0f0f0;
                /* Ganti dengan warna latar belakang yang diinginkan */
            }
            </style>

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
                            <a href="dataweb.php"><i class="fa fa-users"></i> <span class="nav-label">DATA WEBSITE OPD
                                </span></a>

                        </li>
                        <li class="">
                            <a href="datakec.php"><i class="fa fa-university"></i> <span class="nav-label">
                                    DATA KECAMATAN
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