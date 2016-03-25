<?php
include "header.php";
session_start();
$page = "produk.tpl";

if ($_SESSION['username'] == '' && $_SESSION['passwd'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
}
else{
	
	$act = $_GET['act'];
	
	if ($act == 'input'){
		$created_date = date('Y-m-d H:i:s');
		
		if ($_POST['filename1'] != ''){
			$file = "../images/products/".$_POST['filename1'];
			$gbr_asli = imagecreatefromjpeg($file);
			$lebar = imagesx($gbr_asli);
			$tinggi = imagesy($gbr_asli);
			
			$tum_lebar = 235;
			$tum_tinggi = 235;
			
			$gbr_thumb = imagecreatetruecolor($tum_lebar, $tum_tinggi);
			imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $tum_lebar, $tum_tinggi, $lebar, $tinggi);
			
			imagejpeg($gbr_thumb, "../images/products/thumb/small_".$_POST['filename1']);
			
			imagedestroy($gbr_asli);
			imagedestroy($gbr_thumb);
		}
		
		if ($_POST['filename2'] != ''){
			$file = "../images/products/".$_POST['filename2'];
			$gbr_asli = imagecreatefromjpeg($file);
			$lebar = imagesx($gbr_asli);
			$tinggi = imagesy($gbr_asli);
			
			$tum_lebar = 235;
			$tum_tinggi = 235;
			
			$gbr_thumb = imagecreatetruecolor($tum_lebar, $tum_tinggi);
			imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $tum_lebar, $tum_tinggi, $lebar, $tinggi);
			
			imagejpeg($gbr_thumb, "../images/products/thumb/small_".$_POST['filename2']);
			
			imagedestroy($gbr_asli);
			imagedestroy($gbr_thumb);
		}
		
		if ($_POST['filename3'] != ''){
			$file = "../images/products/".$_POST['filename3'];
			$gbr_asli = imagecreatefromjpeg($file);
			$lebar = imagesx($gbr_asli);
			$tinggi = imagesy($gbr_asli);
			
			$tum_lebar = 235;
			$tum_tinggi = 235;
			
			$gbr_thumb = imagecreatetruecolor($tum_lebar, $tum_tinggi);
			imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $tum_lebar, $tum_tinggi, $lebar, $tinggi);
			
			imagejpeg($gbr_thumb, "../images/products/thumb/small_".$_POST['filename3']);
			
			imagedestroy($gbr_asli);
			imagedestroy($gbr_thumb);
		}
		
		mysql_query("INSERT INTO products (	kategori_id,
											merk_id,
											supplier_id,
											gambar1,
											gambar2,
											gambar3,
											nama_produk,
											price,
											stock,
											active,
											description,
											created_user,
											created_date,
											modified_user,
											modified_date)
									VALUES(	'$_POST[kategori]',
											'$_POST[merk]',
											'$_POST[supplier]',
											'$_POST[filename1]',
											'$_POST[filename2]',
											'$_POST[filename3]',
											'$_POST[nama_produk]',
											'$_POST[price]',
											'$_POST[stok]',
											'$_POST[aktif]',
											'$_POST[deskripsi]',
											'$_SESSION[userid]',
											'$created_date',
											'',
											'')");
		
		header("Location: produk.php?code=1");
	} 
	elseif( $act == 'add'){
		$sqlKategori = mysql_query("SELECT * FROM kategori WHERE aktif = 'Y' ORDER BY kategori ASC");
		while ($dtKategori = mysql_fetch_array($sqlKategori)){
			
			$dataKategori[] = array(	'kategori_id' => $dtKategori['kategori_id'],
										'kategori' => $dtKategori['kategori']);
		}
		
		$sqlMerk = mysql_query("SELECT * FROM merks WHERE active = 'Y' ORDER BY merk ASC");
		while ($dtMerk = mysql_fetch_array($sqlMerk)){
			
			$dataMerk[] = array(	'merk_id' => $dtMerk['merk_id'],
									'merk' => $dtMerk['merk']);
		}

		$sqlSupplier = mysql_query("SELECT * FROM suppliers WHERE active = 'Y' ORDER BY supplier ASC");
		while ($dtSupplier = mysql_fetch_array($sqlSupplier)){
			
			$dataSupplier[] = array(	'supplier_id' => $dtSupplier['supplier_id'],
										'supplier' => $dtSupplier['supplier']);
		}
		
		$smarty->assign("dataSupplier", $dataSupplier);
		$smarty->assign("dataKategori", $dataKategori);
		$smarty->assign("dataMerk", $dataMerk);
	}
	
	elseif( $act == 'delete'){
		mysql_query("DELETE FROM products WHERE product_id = '$_GET[id]'");
		
		header("Location: produk.php?code=3");
	}
	elseif( $act == 'delete_image1'){
		$data = mysql_fetch_array(mysql_query("SELECT gambar1 FROM products WHERE product_id = '$_GET[id]'"));
		
		if ($data['gambar1'] != ''){
			$img = unlink("../images/products/".$data['gambar1']);
			if ($img){
				unlink("../images/products/thumb/small_".$data['gambar1']);
			}	
		}
		mysql_query("UPDATE products SET gambar1 = NULL WHERE product_id = '$_GET[id]'");
		header("Location: produk.php?act=edit&id=".$_GET['id']);
	}
	elseif( $act == 'delete_image2'){
		$data = mysql_fetch_array(mysql_query("SELECT gambar2 FROM products WHERE product_id = '$_GET[id]'"));
		
		if ($data['gambar2'] != ''){
			$img = unlink("../images/products/".$data['gambar2']);
			if ($img){
				unlink("../images/products/thumb/small_".$data['gambar2']);
			}	
		}
		mysql_query("UPDATE products SET gambar2 = NULL WHERE product_id = '$_GET[id]'");
		header("Location: produk.php?act=edit&id=".$_GET['id']);
	} 
	elseif( $act == 'delete_image3'){
		$data = mysql_fetch_array(mysql_query("SELECT gambar3 FROM products WHERE product_id = '$_GET[id]'"));
		
		if ($data['gambar3'] != ''){
			$img = unlink("../images/products/".$data['gambar3']);
			if ($img){
				unlink("../images/products/thumb/small_".$data['gambar3']);
			}	
		}
		mysql_query("UPDATE products SET gambar3 = NULL WHERE product_id = '$_GET[id]'");
		header("Location: produk.php?act=edit&id=".$_GET['id']);
	}
	elseif ($act == 'edit'){
		
		$sqlKategori = mysql_query("SELECT * FROM kategori WHERE aktif = 'Y' ORDER BY kategori ASC");
		while ($dtKategori = mysql_fetch_array($sqlKategori)){
			
			$dataKategori[] = array(	'kategori_id' => $dtKategori['kategori_id'],
										'kategori' => $dtKategori['kategori']);
		}
		
		$sqlMerk = mysql_query("SELECT * FROM merks WHERE active = 'Y' ORDER BY merk ASC");
		while ($dtMerk = mysql_fetch_array($sqlMerk)){
			
			$dataMerk[] = array(	'merk_id' => $dtMerk['merk_id'],
									'merk' => $dtMerk['merk']);
		}

		$sqlSupplier = mysql_query("SELECT * FROM suppliers WHERE active = 'Y' ORDER BY supplier ASC");
		while ($dtSupplier = mysql_fetch_array($sqlSupplier)){
			
			$dataSupplier[] = array(	'supplier_id' => $dtSupplier['supplier_id'],
										'supplier' => $dtSupplier['supplier']);
		}
		
		$produk = mysql_fetch_array(mysql_query("SELECT * FROM products WHERE product_id = '$_GET[id]'"));
		$dataProduct[] = array(	'product_id' => $produk['product_id'],
								'kategori_id' => $produk['kategori_id'],
								'supplier_id' => $produk['supplier_id'],
								'merk_id' => $produk['merk_id'],
								'gambar1' => $produk['gambar1'],
								'gambar2' => $produk['gambar2'],
								'gambar3' => $produk['gambar3'],
								'nama_produk' => $produk['nama_produk'],
								'price' => $produk['price'],
								'stock' => $produk['stock'],
								'active' => $produk['active'],
								'description' => $produk['description']);
		
		$smarty->assign("dataProduk", $dataProduct);
		$smarty->assign("dataSupplier", $dataSupplier);
		$smarty->assign("dataKategori", $dataKategori);
		$smarty->assign("dataMerk", $dataMerk);
	}
	elseif ($act == 'update'){
		$modified_date = date('Y-m-d H:i:s');
		
		if ($_POST['filename1'] != '' || $_POST['filename2'] != '' || $_POST['filename3'] != ''){
				
			if ($_POST['filename1'] != ''){
				$file = "../images/products/".$_POST['filename1'];
				$gbr_asli = imagecreatefromjpeg($file);
				$lebar = imagesx($gbr_asli);
				$tinggi = imagesy($gbr_asli);
				
				$tum_lebar = 235;
				$tum_tinggi = 235;
				
				$gbr_thumb = imagecreatetruecolor($tum_lebar, $tum_tinggi);
				imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $tum_lebar, $tum_tinggi, $lebar, $tinggi);
				
				imagejpeg($gbr_thumb, "../images/products/thumb/small_".$_POST['filename1']);
				
				imagedestroy($gbr_asli);
				imagedestroy($gbr_thumb);
		
				mysql_query("UPDATE products SET	kategori_id = '$_POST[kategori]',
													merk_id = '$_POST[merk]',
													supplier_id = '$_POST[supplier]',
													gambar1 = '$_POST[filename1]',
													nama_produk = '$_POST[nama_produk]',
													price = '$_POST[price]',
													stock = '$_POST[stok]',
													active = '$_POST[aktif]',
													description = '$_POST[deskripsi]',
													modified_user = '$_SESSION[userid]',
													modified_date = '$modified_date'
													WHERE product_id = '$_POST[id]'");
			}

			if ($_POST['filename2'] != ''){
				$file = "../images/products/".$_POST['filename2'];
				$gbr_asli = imagecreatefromjpeg($file);
				$lebar = imagesx($gbr_asli);
				$tinggi = imagesy($gbr_asli);
				
				$tum_lebar = 235;
				$tum_tinggi = 235;
				
				$gbr_thumb = imagecreatetruecolor($tum_lebar, $tum_tinggi);
				imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $tum_lebar, $tum_tinggi, $lebar, $tinggi);
				
				imagejpeg($gbr_thumb, "../images/products/thumb/small_".$_POST['filename2']);
				
				imagedestroy($gbr_asli);
				imagedestroy($gbr_thumb);
		
				mysql_query("UPDATE products SET	kategori_id = '$_POST[kategori]',
													merk_id = '$_POST[merk]',
													supplier_id = '$_POST[supplier]',
													gambar2 = '$_POST[filename2]',
													nama_produk = '$_POST[nama_produk]',
													price = '$_POST[price]',
													stock = '$_POST[stok]',
													active = '$_POST[aktif]',
													description = '$_POST[deskripsi]',
													modified_user = '$_SESSION[userid]',
													modified_date = '$modified_date'
													WHERE product_id = '$_POST[id]'");
			}

			if ($_POST['filename3'] != ''){
				$file = "../images/products/".$_POST['filename3'];
				$gbr_asli = imagecreatefromjpeg($file);
				$lebar = imagesx($gbr_asli);
				$tinggi = imagesy($gbr_asli);
				
				$tum_lebar = 235;
				$tum_tinggi = 235;
				
				$gbr_thumb = imagecreatetruecolor($tum_lebar, $tum_tinggi);
				imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $tum_lebar, $tum_tinggi, $lebar, $tinggi);
				
				imagejpeg($gbr_thumb, "../images/products/thumb/small_".$_POST['filename3']);
				
				imagedestroy($gbr_asli);
				imagedestroy($gbr_thumb);
		
				mysql_query("UPDATE products SET	kategori_id = '$_POST[kategori]',
													merk_id = '$_POST[merk]',
													supplier_id = '$_POST[supplier]',
													gambar3 = '$_POST[filename3]',
													nama_produk = '$_POST[nama_produk]',
													price = '$_POST[price]',
													stock = '$_POST[stok]',
													active = '$_POST[aktif]',
													description = '$_POST[deskripsi]',
													modified_user = '$_SESSION[userid]',
													modified_date = '$modified_date'
													WHERE product_id = '$_POST[id]'");
			}
		}

		else{
			mysql_query("UPDATE products SET	kategori_id = '$_POST[kategori]',
												merk_id = '$_POST[merk]',
												supplier_id = '$_POST[supplier]',
												nama_produk = '$_POST[nama_produk]',
												price = '$_POST[price]',
												stock = '$_POST[stok]',
												active = '$_POST[aktif]',
												description = '$_POST[deskripsi]',
												modified_user = '$_SESSION[userid]',
												modified_date = '$modified_date'
												WHERE product_id = '$_POST[id]'");
		}
										
		header("Location: produk.php?code=2");
	}
	else{
		$code = $_GET['code'];
		
		$i = 1;
		$produk = mysql_query("SELECT A.product_id, A.kategori_id, A.merk_id, A.supplier_id, A.nama_produk, A.price, A.stock, A.active
							FROM products A ORDER BY A.product_id ASC");
		while ($dtProduk = mysql_fetch_array($produk)){
				
			$dtKategori = mysql_fetch_array(mysql_query("SELECT kategori FROM kategori WHERE kategori_id = '$dtProduk[kategori_id]'"));
			$dtMerk = mysql_fetch_array(mysql_query("SELECT merk FROM merks WHERE merk_id = '$dtProduk[merk_id]'"));	
			
			$price = format_rupiah($dtProduk['price']);
			$dataProduk[] = array(	'no' => $i,
									'product_id' => $dtProduk['product_id'],
									'kategori' => $dtKategori['kategori'],
									'merk' => $dtMerk['merk'],
									'nama_produk' => $dtProduk['nama_produk'],
									'price' => $price,
									'stock' => $dtProduk['stock'],
									'active' => $dtProduk['active']);
			$i++;
		}
		
		$smarty->assign("code", $code);
		$smarty->assign("dataProduk", $dataProduk);
	}
	$smarty->assign("act", $act);
	$smarty->assign("level", $_SESSION['level']);
} 
include "footer.php";
?>