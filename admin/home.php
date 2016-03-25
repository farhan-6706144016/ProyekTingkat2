<?php
include "header.php";
session_start();
$page = "home.tpl";

if ($_SESSION['username'] == '' && $_SESSION['passwd'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
}

else{
	$smarty->assign("ip", $_SESSION['ip']);
	$smarty->assign("dateNow", $_SESSION['dateNow']);
	$smarty->assign("username", $_SESSION['username']);
	$smarty->assign("year", $year);
	$smarty->assign("level", $_SESSION['level']);
}

include "footer.php";
?>