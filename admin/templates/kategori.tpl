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
						Kategori baru berhasil disimpan.
					</div>
				{/if}
				{if $code eq '2'}
					<div class="alert alert-success">
						Kategori berhasil diubah.
					</div>
				{/if}
				{if $code eq '3'}
					<div class="alert alert-success">
						Kategori berhasil dihapus.
					</div>	
				{/if}
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			{literal}
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_kategori').validate({
							rules:{
								kategori: true,
								aktif: true
							},
							messages:{
								kategori:{
									required: "This is a required field."
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
				<a href="kategori.php"><img src="../images/back.png"></a>
				<h4>Tambah Kategori</h4>
				<div class="well">
					<form action="kategori.php?act=input" method="POST" id="frm_kategori">
						<label>Nama Kategori </label>
							<input type="text" name="kategori" class="required">
						<label>Aktif</label>
							<select name="aktif" class="required">
								<option value=""></option>
								<option value="Y">Ya</option>
								<option value="N">Tidak</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				</div>
			
			{elseif $act == 'edit'}
				<h4>Ubah Kategori</h4>
				<div class="well">
				{section name=dataKategori loop=$dataKategori}
					<form action="kategori.php?act=update" method="POST" id="frm_kategori">
						<input type="hidden" name="id" value="{$dataKategori[dataKategori].kategori_id}">
						<label>Nama Kategori</label>
							<input type="text" name="kategori" class="required" value="{$dataKategori[dataKategori].kategori}">
						<label>Aktif</label>
							<select name="aktif" class="required">
								<option value=""></option>
								<option value="Y" {if $dataKategori[dataKategori].active == 'Y'} SELECTED {/if}>Ya</option>
								<option value="N" {if $dataKategori[dataKategori].active == 'N'} SELECTED {/if}>Tidak</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				{/section}
				</div>
				
			{else}
				<h4>Manajemen Kategori</h4>
				<div>
					<a href="kategori.php?act=add"><button type="button" class="btn btn-primary">+ Tambah Kategori</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='200'>Nama Kategori</th>
							<th width='50'>Aktif</th>
							<th width="100">Aksi</th>
						</tr>
					</thead>
					<tbody>
						{section name=dataKategori loop=$dataKategori}
							<tr valign='top'>
								<td>{$dataKategori[dataKategori].no}</td>
								<td>{$dataKategori[dataKategori].kategori}</td>
								<td>{$dataKategori[dataKategori].aktif}</td>
								<td><a href='kategori.php?act=edit&id={$dataKategori[dataKategori].kategori_id}'><img src='../images/edit.jpg' width='20'></a>
									<a href="kategori.php?act=delete&id={$dataKategori[dataKategori].kategori_id}" onclick="return confirm('Anda Yakin ingin menghapus {$dataKategori[dataKategori].kategori}?');"><img src='../images/delete.jpg' width='20'></a>
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