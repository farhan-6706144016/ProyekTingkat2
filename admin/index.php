<?php
include "header.php";
$page = "index.tpl";

$module = $_GET['module'];
$code	= $_GET['code'];

$act = $_GET['act'];
$code = $_GET['code'];

if ($act == 'login'){
	$username	= $_POST['username'];
	$password	= md5($_POST['password']);
	
	$sqlLogin = mysql_query("SELECT * FROM  petugas WHERE username = '$username' AND passwd = '$password'");
	
	$numLogin = mysql_num_rows($sqlLogin);
	$dataLogin = mysql_fetch_array($sqlLogin);
	
	if ($numLogin > 0){
		session_start();
		$_SESSION['username']	= $dataLogin['username'];
		$_SESSION['passwd']		= $password;
		$_SESSION['level']		= $dataLogin['level'];
		$_SESSION['userid']		= $dataLogin['user_id'];
		$_SESSION['photo']		= $dataLogin['photo'];
		$_SESSION['nama']		= $dataLogin['nama'];
		$_SESSION['email']		= $dataLogin['email'];
		
		header('Location: home.php?code=1');
	}
	else{
		header("Location: index.php?code=1");
	}
}

$smarty->assign("code", $code);

include "footer.php";
?>