<?php
include "header.php";
session_start();
$page = "merk.tpl";

if ($_SESSION['username'] == '' && $_SESSION['passwd'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
}
else{
	
	$act = $_GET['act'];
	
	if ($act == 'input'){
		$created_date = date('Y-m-d H:i:s');
		
		mysql_query("INSERT INTO merks (	merk,
											active,
											created_date,
											created_userid,
											modified_date,
											modified_userid)
								VALUES	(	'$_POST[merk]',
											'$_POST[aktif]',
											'$created_date',
											'$_SESSION[userid]',
											'',
											'')");
		header("Location: merk.php?code=1");
	}
	elseif( $act == 'delete'){
		mysql_query("DELETE FROM merks WHERE merk_id = '$_GET[id]'");
		
		header("Location: merk.php?code=3");
	}
	elseif ($act == 'edit'){
		
		$merk = mysql_fetch_array(mysql_query("SELECT * FROM merks WHERE merk_id = '$_GET[id]'"));
		$dataMerk[] = array(	'merk_id' => $merk['merk_id'],
								'merk' => $merk['merk'],
								'active' => $merk['active']);
		
		$smarty->assign("dataMerk", $dataMerk);
	} 
	elseif ($act == 'update'){
		$modified_date = date('Y-m-d H:i:s');
		
		$save = mysql_query("UPDATE merks SET	merk = '$_POST[merk]',
												active = '$_POST[aktif]',
												modified_date = '$modified_date',
												modified_userid = '$_SESSION[userid]'
												WHERE merk_id = '$_POST[id]'");
									
		header("Location: merk.php?code=2");
	}
	else{
		$code = $_GET['code'];

		$i = 1;
		$merk = mysql_query("SELECT * FROM merks ORDER BY merk_id ASC");
		while ($dtMerk = mysql_fetch_array($merk)){
			
			$dataMerk[] = array(	'no' => $i,
									'merk_id' => $dtMerk['merk_id'],
									'merk' => $dtMerk['merk'],
									'active' => $dtMerk['active']);
			$i++;
		}
		$smarty->assign("code", $code);
		$smarty->assign("dataMerk", $dataMerk);
	}
	$smarty->assign("act", $act);
	$smarty->assign("level", $_SESSION['level']);
} 
include "footer.php";
?>