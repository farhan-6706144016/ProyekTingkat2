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
						$('#frm_supplier').validate({
							rules:{
								nama: true,
								phone:{ 
									number: true
								},
								aktif: true
							},
							messages:{
								nama:{
									required: "This is a required field."
								},
								phone:{
									number: "This is a number field."
								},
								aktif:{
									required: "This is a required field."
								}
							}
						});
					});
				</script>
			{/literal}
			
			{if $act eq 'add'}
				<a href="supplier.php"><img src="../images/back.png"></a>
				<h4>Tambah Supplier</h4>
				<div class="well">
					<form action="supplier.php?act=input" method="POST" id="frm_supplier">
						<label>Nama </label>
							<input type="text" name="nama" class="required">
						<label>Phone </label>
							<input type="text" name="phone" class="number">
						<label>Alamat </label>
							<textarea name="alamat" rows="6" cols="50"></textarea>	
						<label>Aktif</label>
							<select name="aktif" class="required">
								<option value=""></option>
								<option value="Y">Ya</option>
								<option value="N">Tidak</option>
							</select>
						<label>Keterangan </label>
							<textarea name="description" rows="6" cols="50"></textarea>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				</div>
			
			{elseif $act == 'edit'}
				<h4>Ubah Supplier</h4>
				<div class="well">
				{section name=dataSupplier loop=$dataSupplier}
					<form action="supplier.php?act=update" method="POST" id="frm_supplier">
						<input type="hidden" name="id" value="{$dataSupplier[dataSupplier].supplier_id}">
						<label>Nama </label>
							<input type="text" name="nama" class="required" value="{$dataSupplier[dataSupplier].supplier}">
						<label>Phone </label>
							<input type="text" name="phone" class="number" value="{$dataSupplier[dataSupplier].phone}">
						<label>Alamat </label>
							<textarea name="alamat" rows="6" cols="50">{$dataSupplier[dataSupplier].address}</textarea>	
						<label>Aktif</label>
							<select name="aktif" class="required">
								<option value=""></option>
								<option value="Y" {if $dataSupplier[dataSupplier].active == 'Y'} SELECTED {/if}>Ya</option>
								<option value="N" {if $dataSupplier[dataSupplier].active == 'N'} SELECTED {/if}>Tidak</option>
							</select>
						<label>Keterangan </label>
							<textarea name="description" rows="6" cols="50">{$dataSupplier[dataSupplier].description}</textarea>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				{/section}
				</div>
				
			{else}
				<h4>Manajemen Supplier</h4>
				<div>
					<a href="supplier.php?act=add"><button type="button" class="btn btn-primary">+ Tambah Supplier</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='150'>Nama</th>
							<th width='200'>Alamat</th>
							<th width='150'>Phone</th>
							<th width='50'>Aktif</th>
							<th width='300'>Keterangan</th>
							<th width="100">Aksi</th>
						</tr>
					</thead>
					<tbody>
						{section name=dataSupplier loop=$dataSupplier}
							<tr valign='top'>
								<td>{$dataSupplier[dataSupplier].no}</td>
								<td>{$dataSupplier[dataSupplier].supplier}</td>
								<td>{$dataSupplier[dataSupplier].address}</td>
								<td>{$dataSupplier[dataSupplier].phone}</td>
								<td>{$dataSupplier[dataSupplier].active}</td>
								<td>{$dataSupplier[dataSupplier].description}</td>
								<td><a href='supplier.php?act=edit&id={$dataSupplier[dataSupplier].supplier_id}'><img src='../images/edit.jpg' width='20'></a>
									<a href="supplier.php?act=delete&id={$dataSupplier[dataSupplier].supplier_id}" onclick="return confirm('Anda Yakin ingin menghapus {$dataSupplier[dataSupplier].supplier}?');"><img src='../images/delete.jpg' width='20'></a>
								</td>
							</tr>
						{/section}
					</tbody>
				</table>
			
			{/if}
			
		</div>
	</div>
</div>

{include file="footer.tpl"}