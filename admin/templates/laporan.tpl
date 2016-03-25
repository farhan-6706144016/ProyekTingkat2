{include file="header.tpl"}

{include file="navigation.tpl"}

<div class="content">
	<div class="header">
		<div class="stats"></div>
	</div>
	
	<ul class="breadcrumb">
		<li><a href="index.html"></a> <span class="divider"></span></li>
		<li class="active"></li>
	</ul>
	
	<div class="container-fluid">
		<div class="row-fluid">
			
			<div class="row-fluid">
				{if $code eq '1'}
					<div class="alert alert-success">
						Supplier baru berhasil disimpan.
					</div>
				{/if}
				{if $code eq '2'}
					<div class="alert alert-success">
						Supplier berhasil diubah.
					</div>
				{/if}
				{if $code eq '3'}
					<div class="alert alert-success">
						Supplier berhasil dihapus.
					</div>	
				{/if}
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			{literal}
				<script type='text/javascript'>
					$(document).ready(function() {
						$( "#datepicker1" ).datepicker({
							changeMonth: true,
							changeYear: true,
							dateFormat: "yy-mm-dd",
							yearRange: '2013:c-0'
						});
						
						$( "#datepicker2" ).datepicker({
							changeMonth: true,
							changeYear: true,
							dateFormat: "yy-mm-dd",
							yearRange: '2013:c-0'
						});
					});
				</script>
			{/literal}
			
			{if $start_date != '' AND $end_date != ''}
				
				<p>&nbsp;</p>
				<h4>Laporan Penjualan</h4>
				<p>Periode {$start_indo} s/d {$end_indo}</p>
				<table id="example" class="display">
					<thead>
						<tr>
							<th width="10">No.</th>
							<th width="300">Nama Produk</th>
							<th width="200">Kategori</th>
							<th width="120">Harga Satuan</th>
							<th width="70">Qty</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
						{section name=dataLaporan loop=$dataLaporan}
						<tr>
							<td>{$dataLaporan[dataLaporan].no}</td>
							<td>{$dataLaporan[dataLaporan].nama_produk}</td>
							<td>{$dataLaporan[dataLaporan].category}</td>
							<td>{$dataLaporan[dataLaporan].price}</td>
							<td>{$dataLaporan[dataLaporan].qty}</td>
							<td>{$dataLaporan[dataLaporan].subtotal}</td>
						</tr>
						{/section}
					</tbody>
				</table>
				<br>
				<a href="print.php?start_date={$start_date}&end_date={$end_date}" target="_blank"><button type="button" class="btn btn-primary">Print PDF</button></a>
				
			{else}
			
				<h4>Laporan</h4><br>		
				
				<form method="GET" action="Laporan.php">
				<label>Periode Awal</label>
					<input type="text" name="start_date" id="datepicker1">
				<label>Periode Akhir</label>
					<input type="text" name="end_date" id="datepicker2">
				<br>
				<button type="submit" class="btn btn-primary">Go</button>
				</form>
			
			{/if}
			
		</div>
	</div>
</div>

{include file="footer.tpl"}