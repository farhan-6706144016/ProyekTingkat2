{include file="header.tpl"}
					
{include file="leftmenu.tpl"}
					
<div id="content">
	
	<br><h2>Kategori: {$kategori}</h2><br>	
	<div id="products">
		{section name=dataProduk loop=$dataProduk}
			<div class="product">
				<a href="detailproduk-{$dataProduk[dataProduk].product_id}-{$dataProduk[dataProduk].namalower}.html"><img src="images/products/thumb/small_{$dataProduk[dataProduk].gambar1}" width="225" height="230" alt="{$dataProduk[dataProduk].nama_produk}" /></a>
				<div class="pr-info">
					<br>
					<h4><a href="detailproduk-{$dataProduk[dataProduk].product_id}-{$dataProduk[dataProduk].namalower}.html">{$dataProduk[dataProduk].nama_produk}</a></h4>
					<h4>Rp. {$dataProduk[dataProduk].price}</h4>
				</div>
			</div>
		{/section}
		<div class="cl">&nbsp;</div>
	</div>
	<p>&nbsp;</p>
	<div id="paging">{$linkHalaman}</div>
</div>					

{include file="footer.tpl"}