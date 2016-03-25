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
						Merk baru berhasil disimpan.
					</div>
				{/if}
				{if $code eq '2'}
					<div class="alert alert-success">
						Merk berhasil diubah.
					</div>
				{/if}
				{if $code eq '3'}
					<div class="alert alert-success">
						Merk berhasil dihapus.
					</div>	
				{/if}
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			{literal}
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_merk').validate({
							rules:{
								merk: true,
								aktif: true
							},
							messages:{
								merk:{
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
				<a href="merk.php"><img src="../images/back.png"></a>
				<h4>Tambah Merk</h4>
				<div class="well">
					<form action="merk.php?act=input" method="POST" id="frm_merk">
						<label>Nama Merk</label>
							<input type="text" name="merk" class="required">
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
				<h4>Ubah Merk</h4>
				<div class="well">
				{section name=dataMerk loop=$dataMerk}
					<form action="merk.php?act=update" method="POST" id="frm_merk">
						<input type="hidden" name="id" value="{$dataMerk[dataMerk].merk_id}">
						<label>Nama Merk</label>
							<input type="text" name="merk" class="required" value="{$dataMerk[dataMerk].merk}">
						<label>Aktif</label>
							<select name="aktif" class="required">
								<option value=""></option>
								<option value="Y" {if $dataMerk[dataMerk].active == 'Y'} SELECTED {/if}>Ya</option>
								<option value="N" {if $dataMerk[dataMerk].active == 'N'} SELECTED {/if}>Tidak</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				{/section}
				</div>
				
			{else}
				<h4>Manajemen Merk</h4>
				<div>
					<a href="merk.php?act=add"><button type="button" class="btn btn-primary">+ Tambah Merk</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='200'>Nama Merk</th>
							<th width='50'>Aktif</th>
							<th width="100">Aksi</th>
						</tr>
					</thead>
					<tbody>
						{section name=dataMerk loop=$dataMerk}
							<tr valign='top'>
								<td>{$dataMerk[dataMerk].no}</td>
								<td>{$dataMerk[dataMerk].merk}</td>
								<td>{$dataMerk[dataMerk].active}</td>
								<td><a href='merk.php?act=edit&id={$dataMerk[dataMerk].merk_id}'><img src='../images/edit.jpg' width='20'></a>
									<a href="merk.php?act=delete&id={$dataMerk[dataMerk].merk_id}" onclick="return confirm('Anda Yakin ingin menghapus {$dataMerk[dataMerk].merk_id}?');"><img src='../images/delete.jpg' width='20'></a>
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