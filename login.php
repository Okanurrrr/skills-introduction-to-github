<?php 
session_start();
require 'functions.php';
// jika user sudah login,makajangan tampilkan halaman login lagi tapi alihkan ke halaman admin
if (isset($_SESSION["login"])) {
    header("location: admin.php");
    exit;
}

// Jika tombol login ditekan
if (isset($_POST["login"])) {
    // Ambil data dari formulir login
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Lakukan kueri untuk memeriksa apakah data username ada di database
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Periksa apakah username ditemukan
        if (mysqli_num_rows($result) === 1) {
            // Ambil data password dari hasil kueri
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row['password'];

            // Periksa apakah password cocok
            if (password_verify($password, $storedPassword)) {
                // Login berhasil
                // Lakukan sesuatu yang sesuai dengan login berhasil, misalnya set session atau cookie

                // Contoh set session untuk menyimpan informasi login
                // session_start();
                $_SESSION["login"] = true;
                // ini adalah session loginya dari pak sandika galih

                // Redirect ke halaman lain setelah login berhasil
                header("Location: admin.php");
                exit; // Pastikan exit() dipanggil setelah header() untuk mencegah eksekusi lebih lanjut pada halaman ini
            } else {
                // Password salah
                echo "<script>alert('Password salah!');</script>";
            }
        } else {
            // Username tidak ditemukan
            echo "<script>alert('Username tidak ditemukan!');</script>";
        }
    } else {
        // Kueri gagal dieksekusi, tampilkan pesan error
        echo "Kesalahan dalam eksekusi kueri: " . mysqli_error($conn);
    }

    // Tutup koneksi setelah selesai menggunakan database
    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="id">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>

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
                    /* Menambah jarak dari konten sebelumnya */
                    padding: 50px;
                    background-color: #fff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                    border-radius: 10px;
                    font-family: 'Roboto', sans-serif;
                }

                h2 {
                    text-align: center;
                    color: #000;
                    margin-bottom: 20px;
                    font-family: 'Roboto', sans-serif;
                    /* Menambah jarak di bawah judul */
                }

                label {
                    display: block;
                    margin-bottom: 5px;
                    color: #333;
                }

                input[type="text"],
                input[type="password"] {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 15px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    box-sizing: border-box;
                    transition: border-color 0.3s ease;
                    outline: none;
                }

                input[type="text"]:focus,
                input[type="password"]:focus {
                    border-color: #007bff;
                }

                button[type="submit"] {
                    width: 100%;
                    padding: 10px;
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }

                button[type="submit"]:hover {
                    background-color: #0056b3;
                }

                .daftar-link {
                    color: blue;
                    text-decoration: underline;
                    cursor: pointer;
                }

                .daftar-link {
                    color: blue;
                    text-decoration: underline;
                    cursor: pointer;
                }

                /* Styling untuk teks "Belum punya akun" yang tidak dapat di klik */
                .non-clickable {
                    color: black;
                    pointer-events: none;
                    cursor: default;
                }

                .daftar-link:hover {
                    color: #0056b3;
                }
                </style>
                </head>


                <div class="container">
                    <h2>Halaman Login</h2>
                    <form action="" method="POST">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>

                        <button type="submit" name="login">Login</button>
                    </form>
                    <a href="Register.php"> <span class="non-clickable">Belum punya akun?</span> <span
                            class="daftar-link">Daftar sekarang!</span></a>
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

</body>

</html>