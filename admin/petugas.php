<?php
include "header.php";
session_start();
$page = "petugas.tpl";

if ($_SESSION['username'] == '' && $_SESSION['password'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
}
else{
	
	$act = $_GET['act'];
	
	if ($act == 'input'){
		$created_date = date('Y-m-d H:i:s');
		$password = md5(123);

		mysql_query("INSERT INTO petugas (	nama,
											email,
											username,
											passwd,
											alamat,
											phone,
											level,
											created_date,
											created_userid,
											modified_date,
											modified_userid)
								VALUES	(	'$_POST[nama]',
											'$_POST[email]',
											'$_POST[username]',
											'$password',
											'$_POST[alamat]',
											'$_POST[phone]',
											'$_POST[level]',
											'$created_date',
											'$_SESSION[userid]',
											'',
											'')");
		header("Location: petugas.php?code=1");
	} 
	elseif( $act == 'delete'){
		mysql_query("DELETE FROM petugas WHERE petugas_id = '$_GET[id]'");
		
		header("Location: petugas.php?code=3");
	} 
	elseif ($act == 'edit'){
		$petugas = mysql_fetch_array(mysql_query("SELECT * FROM petugas WHERE petugas_id = '$_GET[id]'"));
		
		$dataPetugas[] = array(	'petugas_id' => $petugas['petugas_id'],
								'nama' => $petugas['nama'],
								'email' => $petugas['email'],
								'username' => $petugas['username'],
								'alamat' => $petugas['alamat'],
								'phone' => $petugas['phone'],
								'level' => $petugas['level']);
		
		$smarty->assign("dataPetugas", $dataPetugas);
	} 
	elseif ($act == 'update'){
		$modified_date = date('Y-m-d H:i:s');
			
		mysql_query("UPDATE petugas SET	nama = '$_POST[nama]',
										email = '$_POST[email]',
										username = '$_POST[username]',
										alamat = '$_POST[alamat]',
										phone = '$_POST[phone]',
										level = '$_POST[level]',
										modified_date = '$modified_date',
										modified_userid = '$_SESSION[userid]'
										WHERE petugas_id = '$_POST[id]'");
		header("Location: petugas.php?code=2");
	} 
else{
	$code = $_GET['code'];
		
	$i = 1;
		
	$petugas = mysql_query("SELECT * FROM petugas WHERE level != '1' ORDER BY petugas_id ASC");
		
	while ($dtUser = mysql_fetch_array($petugas)){
		if ($dtUser['level'] == '1'){
			$level = "Super Administrator";
		}
		elseif ($dtUser['level'] == '2'){
			$level = "Administrator";
		}
		else{
			$level = "Staff";
		}
		$dataPetugas[] = array(	'no' => $i,
								'petugas_id' => $dtUser['petugas_id'],
								'nama' => $dtUser['nama'],
								'email' => $dtUser['email'],
								'username' => $dtUser['username'],
								'level' => $level,
								'levelori' => $dtUser['level']);
		$i++;
	}
		$smarty->assign("code", $code);
		$smarty->assign("dataPetugas", $dataPetugas);
	} 
	$smarty->assign("act", $act);
	$smarty->assign("level", $_SESSION['level']);
} 
include "footer.php";
?>