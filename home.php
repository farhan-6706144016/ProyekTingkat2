<?php
include "header.php";
$page = "home.tpl";

$limit = 6;
$next = $_GET['next'];
if(empty($next)){
	$posisi = 0;
	$next = 1;
}else{
	$posisi = ($next - 1) * $limit;
}

$produk = mysql_query("SELECT * FROM products WHERE active = 'Y' ORDER BY product_id DESC LIMIT $posisi, $limit");
$no = $posisi + 1;
while ($dtProduk = mysql_fetch_array($produk)){
	$namaProduk = strtolower(str_replace(" ", "+", $dtProduk['nama_produk']));
	$price = format_rupiah($dtProduk['price']);
	
	$dataProduk[] = array(	'no' => $no,
							'product_id' => $dtProduk['product_id'],
							'nama_produk' => $dtProduk['nama_produk'],
							'namalower' => $namaProduk,
							'gambar1' => $dtProduk['gambar1'],
							'price' => $price);
	$no++;
}

$jmldata = mysql_num_rows(mysql_query("SELECT * FROM products"));
$jmlhal = ceil($jmldata/$limit);

for ($i=1; $i <= $jmlhal; $i++) {
	if ($i == $next) {
		$url = "yes";
	} else {
		$url = "no";
	}
	$num[] = array(	'i' => $i,
					'url' => $url );
	$smarty -> assign("num",$num);
}

$smarty->assign("dataProduk", $dataProduk);

include "footer.php";
?>