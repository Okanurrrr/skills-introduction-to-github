<?php
// ini untuk membersihkan sessionya
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("location:login.php");
exit;
 ?>