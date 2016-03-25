<?php
include "header.php";
session_start();
$page = "kategori.tpl";

if ($_SESSION['username'] == '' && $_SESSION['passwd'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
} 

else{
	
	$act = $_GET['act'];
	
	if ($act == 'input'){
		$created_date = date('Y-m-d H:i:s');
		
		mysql_query("INSERT INTO kategori (	kategori,
												aktif,
												created_user,
												created_date,
												modified_user,
												modified_date)
									VALUES	(	'$_POST[kategori]',
												'$_POST[aktif]',
												'$_SESSION[userid]',
												'$created_date',
												'',
												'')");
		header("Location: kategori.php?code=1");
	} 
	elseif( $act == 'delete'){
		mysql_query("DELETE FROM kategori WHERE kategori_id = '$_GET[id]'");
		
		header("Location: kategori.php?code=3");
	}
	elseif ($act == 'edit'){
		$kategori = mysql_fetch_array(mysql_query("SELECT * FROM kategori WHERE kategori_id = '$_GET[id]'"));
		
		$dataKategori[] = array(	'kategori_id' => $kategori['kategori_id'],
									'kategori' => $kategori['kategori'],
									'aktif' => $kategori['aktif']);
		
		$smarty->assign("dataKategori", $dataKategori);
	}
	elseif ($act == 'update'){
		$modified_date = date('Y-m-d H:i:s');
		
		$save = mysql_query("UPDATE kategori SET	kategori = '$_POST[kategori]',
													aktif = '$_POST[aktif]',
													modified_date = '$modified_date',
													modified_user = '$_SESSION[userid]'
													WHERE kategori_id = '$_POST[id]'");
									
		header("Location: kategori.php?code=2");
	}
	else{
		$code = $_GET['code'];
		
		$i = 1;
		$kategori = mysql_query("SELECT * FROM kategori ORDER BY kategori_id ASC");
		while ($dtKategori = mysql_fetch_array($kategori)){
			
			$dataKategori[] = array(	'no' => $i,
										'kategori_id' => $dtKategori['kategori_id'],
										'kategori' => $dtKategori['kategori'],
										'aktif' => $dtKategori['aktif']);
			$i++;
		}
		$smarty->assign("code", $code);
		$smarty->assign("dataKategori", $dataKategori);
	}
	$smarty->assign("act", $act);
	$smarty->assign("level", $_SESSION['level']);
} 
include "footer.php";
?>