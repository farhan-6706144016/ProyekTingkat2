<?php
include "header.php";
$page = "kategori.tpl";

$p = new Paging;
$batas  = 6;
$posisi = $p->cariPosisi($batas);

$produk = mysql_query("SELECT * FROM products WHERE active = 'Y' AND kategori_id = '$_GET[id]' ORDER BY product_id DESC LIMIT $posisi,$batas");
while ($dtProduk = mysql_fetch_array($produk)){
		
	$namaProduk = strtolower(str_replace(" ", "+", $dtProduk['nama_produk']));
	$price = format_rupiah($dtProduk['price']);
	
	$dataProduk[] = array(	'product_id' => $dtProduk['product_id'],
							'nama_produk' => $dtProduk['nama_produk'],
							'namalower' => $namaProduk,
							'gambar1' => $dtProduk['gambar1'],
							'price' => $price);
}

$jmldata = mysql_num_rows(mysql_query("SELECT * FROM products WHERE active = 'Y' AND kategori_id = '$_GET[id]'"));
$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
$linkhalaman = $p->navHalaman($_GET['page'], $jmlhalaman);

$kategori = mysql_fetch_array(mysql_query("SELECT kategori FROM kategori WHERE active = 'Y' AND kategori_id = '$_GET[id]'"));

$smarty->assign("dataProduk", $dataProduk);
$smarty->assign("linkHalaman", $linkhalaman);
$smarty->assign("kategori", $kategori['kategori']);

include "footer.php";
?>