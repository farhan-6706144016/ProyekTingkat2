<?php
include "header.php";
session_start();
$page = "laporan.tpl";

if ($_SESSION['username'] == '' && $_SESSION['passwd'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
}
else{
	
	$startDate = $_GET['start_date'];
	$endDate = $_GET['end_date'];
	
	if ($startDate != '' && $endDate != ''){
		
		$sqlLaporan = mysql_query("SELECT A.product_id, SUM(A.qty) as qty, SUM(A.subtotal) as subtotal, B.nama_produk, B.price, C.category
								FROM orders A INNER JOIN products B ON A.product_id=B.product_id
								INNER JOIN categories C ON C.category_id=B.category_id
								WHERE A.tanggal BETWEEN '$startDate' AND '$endDate' GROUP BY A.product_id");
		$i = 1;
		while ($dtLaporan = mysql_fetch_array($sqlLaporan)){
			
			$dataLaporan[] = array(	'product_id' => $dtLaporan['product_id'],
									'nama_produk' => $dtLaporan['nama_produk'],
									'qty' => $dtLaporan['qty'],
									'price' => format_rupiah($dtLaporan['price']),
									'subtotal' => format_rupiah($dtLaporan['subtotal']),
									'category' => $dtLaporan['category'],
									'no' => $i);
			$i++;
		}
		
		$smarty->assign("dataLaporan", $dataLaporan);
		$smarty->assign("start_date", $startDate);
		$smarty->assign("end_date", $endDate);
		$smarty->assign("start_indo", date_indo($startDate));
		$smarty->assign("end_indo", date_indo($endDate));
	}
	else{
		
	}
	$smarty->assign("level", $_SESSION['level']);
} 
include "footer.php";
?>