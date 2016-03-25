<?php
$database_host = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "db_khalwahijab";
mysql_connect($database_host,$database_username,$database_password) or die("Koneksi Gagal");
mysql_select_db($database_name) or die("Database tidak ditemukan");
?>