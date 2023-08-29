<?php
session_start();

if (!isset($_SESSION["login"])){
header("location: login.php");
exit;
}
require 'functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href = 'dataweb.php';
    </script> ";
}else {
    echo "
    <script>
    alert('data gagal dihapus!');
    </script> ";
}
?>