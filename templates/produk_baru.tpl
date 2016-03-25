<div id="products">
	<h2>PRODUK BARU</h2>
	
	{section name=dataProduk loop=$dataProduk}
		<div class="product">
			<a href="detailproduk-{$dataProduk[dataProduk].product_id}-{$dataProduk[dataProduk].namalower}.html"><img src="images/products/thumb/small_{$dataProduk[dataProduk].gambar1}" width="225" height="230" alt="{$dataProduk[dataProduk].nama_produk}" /></a>
			<div class="pr-info">
				<center><br>
				<h4><a href="detailproduk-{$dataProduk[dataProduk].product_id}-{$dataProduk[dataProduk].namalower}.html">{$dataProduk[dataProduk].nama_produk}</a></h4>
				<h4>Rp. {$dataProduk[dataProduk].price}</h4>
				</center>
			</div>
		</div>
	{/section}
	<div class="cl">&nbsp;</div><br><br>
	<div id="paging">
		{section name=num loop=$num}
			{if $num[num].url == "yes"}
				<span class=current>{$num[num].i}</span>
			{else}
			<a href="home.php?next={$num[num].i}">{$num[num].i}</a>
			{/if}
		{/section}
	</div>
</div>