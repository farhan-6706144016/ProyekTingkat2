<?php
include "header.php";
session_start();
$page = "supplier.tpl";

if ($_SESSION['username'] == '' && $_SESSION['passwd'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
}
else{
	
	$act = $_GET['act'];
	
	if ($act == 'input'){
		$created_date = date('Y-m-d H:i:s');
		
		mysql_query("INSERT INTO suppliers (	supplier,
												address,
												phone,
												active,
												description,
												created_user,
												created_date,
												modified_user,
												modified_date)
									VALUES	(	'$_POST[nama]',
												'$_POST[alamat]',
												'$_POST[phone]',
												'$_POST[aktif]',
												'$_POST[description]',
												'$_SESSION[userid]',
												'$created_date',
												'',
												'')");
		header("Location: supplier.php?code=1");
	}
	elseif( $act == 'delete'){
		mysql_query("DELETE FROM suppliers WHERE supplier_id = '$_GET[id]'");
		
		header("Location: supplier.php?code=3");
	}
	elseif ($act == 'edit'){
		$supplier = mysql_fetch_array(mysql_query("SELECT * FROM suppliers WHERE supplier_id = '$_GET[id]'"));
		
		$dataSupplier[] = array(	'supplier_id' => $supplier['supplier_id'],
									'supplier' => $supplier['supplier'],
									'address' => $supplier['address'],
									'phone' => $supplier['phone'],
									'active' => $supplier['active'],
									'description' => $supplier['description']);
		
		$smarty->assign("dataSupplier", $dataSupplier);
	}
	elseif ($act == 'update'){
		$modified_date = date('Y-m-d H:i:s');
		
		$save = mysql_query("UPDATE suppliers SET	supplier = '$_POST[nama]',
											address = '$_POST[alamat]',
											phone = '$_POST[phone]',
											active = '$_POST[aktif]',
											description = '$_POST[description]',
											modified_date = '$modified_date',
											modified_user = '$_SESSION[userid]'
											WHERE supplier_id = '$_POST[id]'");
									
		header("Location: supplier.php?code=2");
	}else{
		$code = $_GET['code'];
		
		$i = 1;
		$supplier = mysql_query("SELECT * FROM suppliers ORDER BY supplier_id ASC");
		while ($dtSupplier = mysql_fetch_array($supplier)){
			
			$dataSupplier[] = array(	'no' => $i,
										'supplier_id' => $dtSupplier['supplier_id'],
										'supplier' => $dtSupplier['supplier'],
										'address' => $dtSupplier['address'],
										'phone' => $dtSupplier['phone'],
										'active' => $dtSupplier['active'],
										'description' => $dtSupplier['description']);
			$i++;
		}
		$smarty->assign("code", $code);
		$smarty->assign("dataSupplier", $dataSupplier);
	}
	$smarty->assign("act", $act);
	$smarty->assign("level", $_SESSION['level']);
} 
include "footer.php";
?>