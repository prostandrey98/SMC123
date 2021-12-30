<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION["password"]);
unset($_SESSION['fio']);
unset($_SESSION['position']);
header("HTTP/1.1 301 Moved Permanently");
header("Location: http://localhost/SMC/index.php");
?>
