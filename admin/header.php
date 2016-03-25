<?php
error_reporting(0);
session_start();
include "../config/koneksi.php";
include "../config/debug.php";
include "../config/date_function.php";
include "../config/fungsi_rupiah.php";
include "../config/zip.php";

require('../libs/Smarty.class.php');
$smarty = new Smarty;

$year = date('Y');

if ($_SESSION['level'] == '1'){
	$level = "Super Administrator";
}
elseif ($_SESSION['level'] == '2'){
	$level = "Administrator";
}
else{
	$level = "Staff";
}


$smarty->assign("dateNow", $_SESSION['dateNow']);
$smarty->assign("username", $_SESSION['username']);
$smarty->assign("photo", $_SESSION['photo']);
$smarty->assign("date", date_indo(date('Y-m-d')));
$smarty->assign("nama", $_SESSION['nama']);
$smarty->assign("levelStat", $level);
$smarty->assign("lev", $_SESSION['level']);
$smarty->assign("usedip", $_SERVER['REMOTE_ADDR']);
?>