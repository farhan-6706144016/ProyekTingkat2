<?php
error_reporting(0);
session_start();
include "config/koneksi.php";
include "config/debug.php";
include "config/fungsi_rupiah.php";
include "config/fungsi_url.php";
include "config/fungsi_generate.php";
include "config/fungsi_halaman.php";
include "config/date_function.php";
include "config/fungsi_halaman_tutorial.php";

require('libs/Smarty.class.php');

$smarty = new Smarty;

$ip =$_SERVER['REMOTE_ADDR'] ;

$year = date('Y');
$faktur = $_SESSION['nofaktur'];
if(empty($faktur)){
	$faktur = date('ymdhis');
	$_SESSION['nofaktur'] = $faktur;
}

$kategori = mysql_query("SELECT * FROM kategori WHERE aktif = 'Y' ORDER BY kategori ASC");
while ($dtKategori = mysql_fetch_array($kategori)){
	$nums = mysql_num_rows(mysql_query("SELECT product_id FROM products WHERE kategori_id = '$dtKategori[kategori_id]' AND active = 'Y'"));
	
	$kategori_1 = strtolower(str_replace(" ", "+", $dtKategori['kategori']));
	$dataKategori[] = array(	'kategori_id' => $dtKategori['kategori_id'],
								'kategorilower' => $kategori_1,
								'kategori' => $dtKategori['kategori'],
								'total' => $nums);
}
$smarty->assign("dataKategori", $dataKategori);

$cs = mysql_query("SELECT * FROM cs WHERE status = 'Y' ORDER BY cs_id ASC");
while ($dtCS = mysql_fetch_array($cs)){
	
	$yahooid = $dtCS['cs'];
	$ch = curl_init("http://opi.yahoo.com/online?u=".$yahooid."&m=t");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$status = curl_exec($ch);
	curl_close($ch);
	if($status == $yahooid." is NOT ONLINE"){
		$csStatus = "2";
	} 
	elseif ($status == $yahooid." is ONLINE"){
		$csStatus = "1";
	}
	
	$dataCS[] = array(	'nama' => $dtCS['nama'],
						'cs' => $dtCS['cs'],
						'csstatus' => $CSStatus);
}

$smarty->assign("dataCS", $dataCS);
$smarty->assign("member_id", $_SESSION['member_id']);
$smarty->assign("email", $_SESSION['email']);
$smarty->assign("nama", $_SESSION['nama']);
$smarty->assign("nofaktur", $_SESSION['nofaktur']);
$smarty->assign("server", "http://".$_SERVER['SERVER_NAME']);
$smarty->assign("code", $_GET['code']);
?>