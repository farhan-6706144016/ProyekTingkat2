<?php
include "header.php";
session_start();
$page = "transaksi.tpl";

if ($_SESSION['username'] == '' && $_SESSION['passwd'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
}
else{
	
	$act = $_GET['act'];
	
	if ($act == 'view'){
		
		$smarty->assign("faktur", $_GET['id']);
		$smarty->assign("member_id", $_GET['mid']);
		$dtCustomer = mysql_fetch_array(mysql_query("SELECT * FROM member A INNER JOIN kota B ON B.id_kota=A.id_kota WHERE A.member_id = '$_GET[mid]'"));
		$dataCustomer[] = array(	'member_id' => $dtCustomer['member_id'],
									'nama' => $dtCustomer['nama'],
									'alamat' => $dtCustomer['alamat'],
									'nama_kota' => $dtCustomer['nama_kota'],
									'phone' => $dtCustomer['phone'],
									'email' => $dtCustomer['email']);
		$smarty->assign("dataCustomer", $dataCustomer);
		
		$other = mysql_fetch_array(mysql_query("SELECT SUM(subtotal) as subtotal, SUM(qty) as qty, orders.status, ekspedisi, no_resi FROM orders INNER JOIN products ON
		 orders.product_id=products.product_id WHERE nofaktur = '$_GET[id]'"));
		
		if ($other['status'] == '1'){
			$statuslower = "Baru";
		}
		else{
			$statuslower = "Arsip";
		}
		$smarty->assign("status", $other['status']);
		$smarty->assign("statuslower", $statuslower);
		$ongkir = format_rupiah($dtCustomer['ongkos_kirim']);
		
		$grandtotal = format_rupiah($other['subtotal'] + $dtCustomer['ongkos_kirim']);
		$smarty->assign("qty", $other['qty']);
		$smarty->assign("subtotal", format_rupiah($other['subtotal']));
		$smarty->assign("grandtotal", $grandtotal);
		$smarty->assign("ongkir", $ongkir);
		$smarty->assign("ekspedisi", $other['ekspedisi']);
		$smarty->assign("no_resi", $other['no_resi']);
		
		$sqlOrder = mysql_query("SELECT A.qty,A.subtotal,A.product_id,B.nama_produk,A.tanggal,A.status,B.price,A.ekspedisi,A.no_resi,B.gambar1 
		FROM orders A INNER JOIN products B ON B.product_id=A.product_id WHERE A.nofaktur = '$_GET[id]'");
		$no = 1;
		while ($dtOrder = mysql_fetch_array($sqlOrder)){
			
			if ($dtOrder['status'] == 1){
				$status = "Baru";
			}
			else{
				$status = "Arsip";
			}
			
			$dataOrder[] = array(	'no' => $no,
									'qty' => $dtOrder['qty'],
									'subtotal' => format_rupiah($dtOrder['subtotal']),
									'product_id' => $dtOrder['product_id'],
									'nama_produk' => $dtOrder['nama_produk'],
									'namalower' => strtolower(str_replace(" ", "+", $dtOrder['nama_produk'])),
									'tanggal' => date_indo($dtOrder['tanggal']),
									'status' => $status,
									'price' => format_rupiah($dtOrder['price']),
									'ekspedisi' => $dtOrder['ekspedisi'],
									'no_resi' => $dtOrder['no_resi'],
									'gambar1' => $dtOrder['gambar1']);
			$no++;
		}

		$smarty->assign("dataOrder", $dataOrder);
		
	}
	elseif ($act == 'update'){
		$modified_date = date('Y-m-d H:i:s');
		
		if ($_POST['status'] == '2'){
			$sql = mysql_query("SELECT * FROM orders WHERE nofaktur = '$_POST[nofaktur]'");
			while ($data = mysql_fetch_array($sql)){
				mysql_query("UPDATE products SET stock=stock-$data[qty] WHERE product_id = '$data[product_id]'");
			}
		}
		
		if ($_POST['status'] == '1'){
			$sql = mysql_query("SELECT * FROM orders WHERE nofaktur = '$_POST[nofaktur]'");
			while ($data = mysql_fetch_array($sql)){
				mysql_query("UPDATE products SET stock=stock+$data[qty] WHERE product_id = '$data[product_id]'");
			}
		}
		
		$save = mysql_query("UPDATE orders SET	status = '$_POST[status]',
												ekspedisi = '$_POST[ekspedisi]',
												no_resi = '$_POST[no_resi]'
												WHERE nofaktur = '$_POST[nofaktur]'");
									
		header("Location: transaksi.php?code=1");
	}
	else{
		$code = $_GET['code'];
		
		$i = 1;
		$sqlOrder = mysql_query("SELECT A.nofaktur,A.member_id,B.nama,A.status,A.tanggal, B.id_kota FROM orders A INNER JOIN member B ON B.member_id=A.member_id GROUP BY A.nofaktur DESC");
		while ($dtOrder = mysql_fetch_array($sqlOrder)){
			
			$subtotal = mysql_fetch_array(mysql_query("SELECT SUM(subtotal) as subtotal FROM orders INNER JOIN products ON products.product_id=orders.product_id WHERE nofaktur = '$dtOrder[nofaktur]'"));
			$dataCustomer = mysql_fetch_array(mysql_query("SELECT ongkos_kirim FROM kota WHERE id_kota = '$dtOrder[id_kota]'"));
			
			$grandtotal = format_rupiah($subtotal['subtotal'] + $dataCustomer['ongkos_kirim']);
			
			if ($dtOrder['status'] == '1'){
				$status = "Baru";
			}
			else{
				$status = "Arsip";
			}
			
			$dataOrder[] = array(	'no' => $i,
									'nofaktur' => $dtOrder['nofaktur'],
									'member_id' => $dtOrder['member_id'],
									'nama' => $dtOrder['nama'],
									'status' => $status,
									'grandtotal' => $grandtotal,
									'tanggal' => date_indo($dtOrder['tanggal']));
			$i++;
		}
		
		$smarty->assign("code", $code);
		$smarty->assign("dataOrder", $dataOrder);
	}
	$smarty->assign("act", $act);
	$smarty->assign("level", $_SESSION['level']);
} 
include "footer.php";
?>