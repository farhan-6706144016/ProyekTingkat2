{include file="header.tpl"}
					
{include file="leftmenu.tpl"}

<script type="text/javascript" src="templates/js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<link rel="stylesheet" href="templates/js/fancy/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="templates/js/fancy/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<link rel="stylesheet" href="templates/js/fancy/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="templates/js/fancy/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="templates/js/fancy/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="templates/js/fancy/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="templates/js/fancy/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

{literal}
<script>
	$(document).ready(function() {
		$(".fancybox-button").fancybox({
			prevEffect		: 'none',
			nextEffect		: 'none',
			closeBtn		: false,
			helpers		: {
				title	: { type : 'inside' },
				buttons	: {}
			}
		});
	});
</script>
{/literal}
					
<div id="content">
	<div id="produk">

	{section name=dataProduk loop=$dataProduk}
	
		<h2>{$dataProduk[dataProduk].nama_produk}</h2>
		<h4><span class="fontawesome-lock">Kategori : {$dataProduk[dataProduk].kategori} | Merk : {$dataProduk[dataProduk].merk}</span></h4>		<br>
		{if $dataProduk[dataProduk].gambar1 != ''}
			<a class="fancybox-button" rel="fancybox-button" href="images/products/{$dataProduk[dataProduk].gambar1}" title="{$dataProduk[dataProduk].nama_produk}">
				<img src="images/products/thumb/small_{$dataProduk[dataProduk].gambar1}" alt="" width="230" height="250">
			</a>
		{/if}
		{if $dataProduk[dataProduk].gambar2 != ''}
			<a class="fancybox-button" rel="fancybox-button" href="images/products/{$dataProduk[dataProduk].gambar2}" title="{$dataProduk[dataProduk].nama_produk}">
				<img src="images/products/thumb/small_{$dataProduk[dataProduk].gambar2}" alt="" width="230" height="250">
			</a>
		{/if}
		{if $dataProduk[dataProduk].gambar3 != ''}
			<a class="fancybox-button" rel="fancybox-button" href="images/products/{$dataProduk[dataProduk].gambar3}" title="{$dataProduk[dataProduk].nama_produk}">
				<img src="images/products/thumb/small_{$dataProduk[dataProduk].gambar3}" alt="" width="230" height="250">
			</a>
		{/if}
		<br>
		Sisa Stok : {$dataProduk[dataProduk].stock}
		<h3 style='color: #000000;'>Rp. {$dataProduk[dataProduk].price}<br><br></h3>
		<p>
			<h3><b>Deskripsi Produk : </b></h3>
			{$dataProduk[dataProduk].description}
		</p>
		
		<br><br>
	{/section}
	</div>
</div>

{include file="footer.tpl"}