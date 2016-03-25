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
						Data order berhasil diupdate.
					</div>
				{/if}
			</div>
			
			{if $act == 'view'}
				<h4>Detail Order</h4>
				
				<form method="POST" action="sales.php?act=update">
					<input type="hidden" name="nofaktur" value="{$faktur}">
					<label>Status: <b>{$statuslower}</b></label>
					<label>Ubah Status Menjadi: </label>
						<select name="status">
							{if $status == '1'}
								<option value="2">Arsip</option>
							{else}
								<option value="1">Baru</option>
							{/if}
						</select>
					<label>Ekspedisi</label>
						<input type="text" name="ekspedisi" placeholder="Layanan Ekspedisi" value="{$ekspedisi}">
					<label>No. Resi</label>
						<input type="text" name="no_resi" placeholder="Nomor Resi" value="{$no_resi}">
						<input type="submit" name="submit" value="Ubah Status">
				</form>
				<div class="well">
					{section name=dataCustomer loop=$dataCustomer}
						<label>Nama </label>
							<p>{$dataCustomer[dataCustomer].nama}</p>
						<label>Alamat </label>
							<p>{$dataCustomer[dataCustomer].alamat}</p>
						<label>Kota </label>
							<p>{$dataCustomer[dataCustomer].nama_kota}</p>
						<label>Phone </label>
							<p>{$dataCustomer[dataCustomer].phone}</p>
						<label>Email </label>
							<p>{$dataCustomer[dataCustomer].email}</p>
					{/section}
				</div>
				
				<table class='table'>
					<tr class='tr'>
						<th class='th' width="10">No.</th>
						<th class='th' width="70">Gambar</th>
						<th class='th' width="250">Nama Produk</th>
						<th class='th' width="100">Berat (Kg)</th>
						<th class='th' width="60">Qty</th>
						<th class='th' width="100">Harga</th>
						<th class='th' width="100">Subtotal</th>
					</tr>
					{section name=dataOrder loop=$dataOrder}
					<tr class='tr'>
						<td class='td'>{$dataOrder[dataOrder].no}</td>
						<td class='td'><img src="../images/products/thumb/small_{$dataOrder[dataOrder].gambar1}" width="60"></td>
						<td class='td'><a href="../detailproduk-{$dataOrder[dataOrder].product_id}-{$dataOrder[dataOrder].namalower}.html" target="_blank">{$dataOrder[dataOrder].nama_produk}</a></td>
						<td class='td'>{$dataOrder[dataOrder].berat}</td>
						<td class='td'>{$dataOrder[dataOrder].qty}</td>
						<td class='td'>Rp. {$dataOrder[dataOrder].price}</td>
						<td class='td'>Rp. {$dataOrder[dataOrder].subtotal}</td>
					</tr>
					{/section}
					<tr>
						<td class='td' colspan='3'></td>
						<td class='td'>{$qty}</td>
						<td class='td'>Total</td>
						<td class='td'>{$subtotal}</td>
					</tr>
					<tr>
						<td class='td' colspan='5'></td>
						<td class='td'><b>Total</b></td>
						<td class='td'>{$grandtotal}</td>
					</tr>
				</table>
				
			{else}
				<h4>Data Penjualan</h4><br>
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='150'>Tanggal</th>
							<th width='150'>No Faktur</th>
							<th width='250'>Nama Konsumen</th>
							<th width='150'>Total</th>
							<th width='150'>Status</th>
							<th width="100">Aksi</th>
						</tr>
					</thead>
					<tbody>
						{section name=dataOrder loop=$dataOrder}
							<tr valign='top'>
								<td>{$dataOrder[dataOrder].no}</td>
								<td>{$dataOrder[dataOrder].tanggal}</td>
								<td>{$dataOrder[dataOrder].nofaktur}</td>
								<td>{$dataOrder[dataOrder].nama}</td>
								<td>Rp. {$dataOrder[dataOrder].grandtotal}</td>
								<td>{$dataOrder[dataOrder].status}</td>
								<td><a href='sales.php?act=view&id={$dataOrder[dataOrder].nofaktur}&mid={$dataOrder[dataOrder].member_id}'><img src='../images/view.png' width='20'></a></td>
							</tr>
						{/section}
					</tbody>
				</table>
			
			{/if}
			
		</div>
	</div>
</div>

{include file="footer.tpl"}