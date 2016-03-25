<?php
include "header.php";
?>
<p id="searchresults">
	
	<?php
	$keyword = strip_tags($_POST['queryString']);
	$sql = mysql_query("SELECT * FROM products WHERE nama_produk LIKE '%$keyword%' ORDER BY nama_produk ASC");
	while ($data = mysql_fetch_array($sql)){
		$namalower = strtolower(str_replace(" ", "+", $data['nama_produk']));
		$price = format_rupiah($data['price']);
		
		echo "<a href='detailproduk-$data[product_id]-$namalower.html'>
		         <img alt='' src='images/products/thumb/small_$data[gambar1]' width='40' height='40'/>
		         <span class='searchheading'>$data[nama_produk]</span>
		         <span class='searchheading'>Rp. $price</span>
		      </a>";
	}
	?>
</p>