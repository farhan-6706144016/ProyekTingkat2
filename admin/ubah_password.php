<?php
include "header.php";
$page = "ubah_password.tpl";

if ($_SESSION['username'] == '' && $_SESSION['passwd'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
}
else{
	
	$act = $_GET['act'];
	
	if ($act == 'update'){
		
		$oldPassword 	= md5($_POST['oldpassword']);
		$newPassword 	= md5($_POST['newpassword']);
		$retypePassword	= md5($_POST['retypenewpassword']);
		
		$dataUser = mysql_fetch_array(mysql_query("SELECT passwd FROM users WHERE user_id = '$_SESSION[userid]'"));
		
		if ($oldPassword != $dataUser['passwd']){
			header("Location: ubah_password.php?code=1");
		}
		
		else{
			if ($newPassword != $retypePassword){
				header("Location: ubah_password.php?code=2");
			}
			else{
				mysql_query("UPDATE users SET passwd = '$newPassword' WHERE user_id = '$_SESSION[userid]'");
				
				header("Location: ubah_password.php?code=3");
			} 
		} 
	}
	else{
		$code = $_GET['code'];
		
		$smarty->assign("code", $code);
	}
} 
include "footer.php";
?>