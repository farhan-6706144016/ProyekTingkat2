
<div id="sidebar">
	<ul>
		<script type='text/javascript' src='templates/js/jquery.validate.js'></script>
			
		{literal}
			<script type='text/javascript'>
				$(document).ready(function() {
					$('#frm_cari').validate({
						rules:{
							keyword: true
						},
						messages:{
							keyword:{
								required: "This is a required field."
							}
						}
					});
				});
			</script>
		{/literal}
		<li class="widget">
			<h2>Pencarian Produk</h2>
			<div id="search">
				<div>
					<form id="searchform">
						<br>
						<div>
							<input type="text" size="30" value="" id="inputString" placeholder="Masukkan keyword" onkeyup="lookup(this.value);" />
						</div>
						<div id="suggestions"></div>
					</form>
				</div>
			</div>
		</li>
		<li class="widget">
			<h2>Kategori</h2>
			<ul>
				{section name=dataKategori loop=$dataKategori}
					<li><a href='kategori-{$dataKategori[dataKategori].kategori_id}-{$dataKategori[dataKategori].kategorilower}-1.html' title="{$dataKategori[dataKategori].kategori}"><span>
						{$dataKategori[dataKategori].kategori} ({$dataKategori[dataKategori].total})
					</span></a></li>
				{/section}
			</ul>
		</li>
		<li class="widget">
			<h2></h2>
		</li>
		
	</ul>
</div>