<?php
include "header.php";
$page = "produk.tpl";

$dtProduk = mysql_fetch_array(mysql_query("SELECT * FROM products WHERE product_id = '$_GET[id]' AND active = 'Y'"));
$merk = mysql_fetch_array(mysql_query("SELECT merk FROM merks WHERE merk_id = '$dtProduk[merk_id]' AND active = 'Y'"));
$kategori = mysql_fetch_array(mysql_query("SELECT kategori FROM kategori WHERE kategori_id = '$dtProduk[kategori_id]' AND aktif = 'Y'"));

$namaProduk = strtolower(str_replace(" ", "+", $dtProduk['nama_produk']));
$price = format_rupiah($dtProduk['price']);

$dataProduk[] = array(	'product_id' => $dtProduk['product_id'],
						'nama_produk' => $dtProduk['nama_produk'],
						'namalower' => $namaProduk,
						'gambar1' => $dtProduk['gambar1'],
						'gambar2' => $dtProduk['gambar2'],
						'gambar3' => $dtProduk['gambar3'],
						'price' => $price,
						'description' => $dtProduk['description'],
						'stock' => $dtProduk['stock'],
						'harga' => $dtProduk['price'],
						'kategori' => $kategori['kategori'],
						'merk' => $merk['merk']);

$smarty->assign("dataProduk", $dataProduk);
$smarty->assign("gambar1", $dtProduk['gambar1']);
$smarty->assign("gambar2", $dtProduk['gambar2']);
$smarty->assign("gambar3", $dtProduk['gambar3']);
$smarty->assign("nama_produk", $dtProduk['nama_produk']);
$smarty->assign("gambar", $dtProduk['gambar1']);
$smarty->assign("deskripsi", $dtProduk['description']);

include "footer.php";
?>