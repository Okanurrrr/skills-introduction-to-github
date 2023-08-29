<?php
session_start();

if (!isset($_SESSION["login"])){
header("location: login.php");
exit;
}
require 'functions.php';
// Cek apakah parameter ID ada di URL
if (isset($_GET['id'])) {
    $id_to_delete = $_GET['id'];

    hapuskec($id_to_delete);
} else {
    echo "ID data yang ingin dihapus tidak ditemukan.";
}
// unntuk kelanjutannya ada di file function ya
?>