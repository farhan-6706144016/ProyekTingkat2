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
						Petugas baru berhasil disimpan.
					</div>
				{/if}
				{if $code eq '2'}
					<div class="alert alert-success">
						Petugas berhasil diubah.
					</div>
				{/if}
				{if $code eq '3'}
					<div class="alert alert-success">
						Petugas berhasil dihapus.
					</div>	
				{/if}
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			{literal}
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_user').validate({
							rules:{
								nama: true,
								email: true,
								username: true,
								level: true,
								phone:{
									number: true
								}
							},
							messages:{
								nama:{
									required: "This is a required field."
								},
								email:{
									required: "This is a required field.",
									email: "Email format is wrong."
								},
								username:{
									required: "This is a required field."
								},
								level:{
									required: "This is a required field."
								},
								phone:{
									number: "This is a number field."
								}
							}
						});
					});
				</script>
			{/literal}
			
			{if $act eq 'add' || $act eq 'edit'}
				<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
				<link rel="stylesheet" type="text/css" href="../css/Ajaxfile-upload.css" />
			{/if}
			
			
			{if $act eq 'add'}
				<a href="petugas.php"><img src="../images/back.png"></a>
				<h4>Tambah Petugas</h4>
				<div class="well">
					<form action="petugas.php?act=input" method="POST" enctype="multipart/form-data" id="frm_user">
						<label>Nama </label>
							<input type="text" name="nama" class="required">
						<label>Email </label>
							<input type="email" name="email" class="required">
						<label>Username </label>
							<input type="text" name="username" class="required">
						<label>Phone </label>
							<input type="text" name="phone" class="number">
						<label>Alamat </label>
							<textarea name="alamat" rows="6" cols="50"></textarea>	
						<label>Level</label>
							<select name="level">
								<option value=""></option>
								<option value="2">Administrator</option>
								<option value="3">Staff</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				</div>
			
			{elseif $act == 'edit'}
				<h4>Ubah Petugas</h4>
				<div class="well">
				{section name=dataPetugas loop=$dataPetugas}
					<form action="petugas.php?act=update" method="POST" enctype="multipart/form-data" id="frm_user">
						<input type="hidden" name="id" value="{$dataPetugas[dataPetugas].petugas_id}">
						<label>Nama </label>
							<input type="text" name="nama" class="required" value="{$dataPetugas[dataPetugas].nama}">
						<label>Email </label>
							<input type="text" name="email" class="required" value="{$dataPetugas[dataPetugas].email}">
						<label>Username </label>
							<input type="text" name="username" class="required" value="{$dataPetugas[dataPetugas].username}">
						<label>Phone </label>
							<input type="text" name="phone" value="{$dataPetugas[dataPetugas].phone}" class="number">
						<label>Alamat </label>
							<textarea name="alamat" rows="6" cols="50">{$dataPetugas[dataPetugas].alamat}</textarea>	
						<label>Level</label>
							<select name="level">
								<option value=""></option>
								<option value="2" {if $dataPetugas[dataPetugas].level == '2'} SELECTED {/if}>Administrator</option>
								<option value="3" {if $dataPetugas[dataPetugas].level == '3'} SELECTED {/if}>Staff</option>
							</select>
						<br><br>	
						<div>
							<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan Perubahan</button>
						</div>
					</form>
				{/section}
				</div>
				
			{else}
				<h4>Manajemen Petugas</h4>
				<div>
					<a href="petugas.php?act=add"><button type="button" class="btn btn-primary">+ Tambah Petugas</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='150'>Nama</th>
							<th width='150'>Username</th>
							<th width='200'>Email</th>
							<th width='100'>Phone</th>
							<th width='150'>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						{section name=dataPetugas loop=$dataPetugas}
							<tr valign='top'>
								<td>{$dataPetugas[dataPetugas].no}</td>
								<td>{$dataPetugas[dataPetugas].nama}</td>
								<td>{$dataPetugas[dataPetugas].username}</td>
								<td>{$dataPetugas[dataPetugas].email}</td>
								<td>{$dataPetugas[dataPetugas].phone}</td>
								<td>{$dataPetugas[dataPetugas].level}</td>
								<td>
									{if $lev == '1'}
										<a href='petugas.php?act=edit&id={$dataPetugas[dataPetugas].petugas_id}'><img src='../images/edit.jpg' width='20'></a>
										<a href="petugas.php?act=delete&id={$dataPetugas[dataPetugas].petugas_id}" onclick="return confirm('Anda Yakin ingin menghapus {$dataPetugas[dataPetugas].nama}?');"><img src='../images/delete.jpg' width='20'></a>
										
									{else}
										{if $lev == '2' AND $dataPetugas[dataPetugas].levelori == '3'}
											<a href='petugas.php?act=edit&id={$dataPetugas[dataPetugas].petugas_id}'><img src='../images/edit.jpg' width='20'></a>
											<a href="petugas.php?act=delete&id={$dataPetugas[dataPetugas].petugas_id}" onclick="return confirm('Anda Yakin ingin menghapus {$dataPetugas[dataPetugas].nama}?');"><img src='../images/delete.jpg' width='20'></a>
										{/if} 
									{/if}
									
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