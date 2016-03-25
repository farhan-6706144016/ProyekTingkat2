<?php
include "header.php";
session_start();
$page = "member.tpl";

if ($_SESSION['username'] == '' && $_SESSION['passwd'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
}
else{
	
	$act = $_GET['act'];
	
	if ($act == 'view'){
		
		$sqlMember = mysql_query("SELECT A.member_id, A.nama, A.alamat, B.nama_kota, A.phone, A.email, A.status, A.created_date FROM member A INNER JOIN kota B ON B.id_kota=A.id_kota WHERE A.member_id = '$_GET[id]'");
		$i = 1;
		while ($dtMember = mysql_fetch_array($sqlMember)){
			
			if ($dtMember['status'] == '0'){
				$status = "Belum Aktif";
			}
			elseif ($dtMember['status'] == '1'){
				$status = "Aktif";
			}
			else{
				$status = "Lupa Password";
			}
			
			$dataMember[] = array(	'member_id' => $dtMember['member_id'],
									'nama' => $dtMember['nama'],
									'alamat' => $dtMember['alamat'],
									'nama_kota' => $dtMember['nama_kota'],
									'phone' => $dtMember['phone'],
									'email' => $dtMember['email'],
									'status' => $status,
									'created_date' => $dtMember['created_date'],
									'no' => $i);
			$i++;
		}
		
		$smarty->assign("dataMember", $dataMember);
	}
	elseif( $act == 'delete'){
		mysql_query("DELETE FROM member WHERE member_id = '$_GET[id]'");
		
		header("Location: member.php?code=3");
	}	
	else{
		$code = $_GET['code'];
		
		$i = 1;
		$member = mysql_query("SELECT A.member_id, A.nama, A.alamat, B.nama_kota, A.phone, A.email, A.status, A.created_date FROM member A INNER JOIN kota B ON B.id_kota=A.id_kota ORDER BY A.member_id ASC");
		while ($dtMember = mysql_fetch_array($member)){
			
			// save contents to array
			if ($dtMember['status'] == '0'){
				$status = "Belum Aktif";
			}
			elseif ($dtMember['status'] == '1'){
				$status = "Aktif";
			}
			else{
				$status = "Lupa Password";
			}
			
			$dataMember[] = array(	'member_id' => $dtMember['member_id'],
									'nama' => $dtMember['nama'],
									'alamat' => $dtMember['alamat'],
									'nama_kota' => $dtMember['nama_kota'],
									'phone' => $dtMember['phone'],
									'email' => $dtMember['email'],
									'status' => $status,
									'created_date' => $dtMember['created_date'],
									'no' => $i);
			$i++;
		}
		
		$smarty->assign("code", $code);
		$smarty->assign("dataMember", $dataMember);
	}
	$smarty->assign("act", $act);
	$smarty->assign("level", $_SESSION['level']);
} 
include "footer.php";
?>