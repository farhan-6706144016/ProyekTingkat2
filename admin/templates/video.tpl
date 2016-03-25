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
						Video baru berhasil disimpan.
					</div>
				{/if}
				{if $code eq '2'}
					<div class="alert alert-success">
						Video berhasil diubah.
					</div>
				{/if}
				{if $code eq '3'}
					<div class="alert alert-success">
						Video berhasil dihapus.
					</div>	
				{/if}
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			{literal}
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_video').validate({
							rules:{
								judul_video: true,
								video: true,
								status: true
							},
							messages:{
								judul_video:{
									required: "This is a required field."
								},
								video:{
									required: "This is a required field."
								},
								status:{
									required: "This is a required field."
								}
							}
						});
					});
				</script>
			{/literal}
			
			{if $act eq 'add'}
				<a href="video.php"><img src="../images/back.png"></a>
				<h4>Tambah Video</h4>
				<div class="well">
					<form action="video.php?act=input" method="POST" id="frm_video">
						<label>Judul Video </label>
							<input type="text" name="judul_video" class="required">
						<label>Link Video </label>
							<input type="text" name="video" class="required">
						<label>Aktif</label>
							<select name="status" class="required">
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
				<h4>Ubah Video</h4>
				<div class="well">
				{section name=dataVideo loop=$dataVideo}
					<form action="video.php?act=update" method="POST" id="frm_video">
						<input type="hidden" name="id" value="{$dataVideo[dataVideo].video_id}">
						<label>Judul Video</label>
							<input type="text" name="judul_video" class="required" value="{$dataVideo[dataVideo].judul_video}">
						<label>Link Video</label>
							<input type="text" name="video" class="required" value="{$dataVideo[dataVideo].video}">
						<label>Aktif</label>
							<select name="status" class="required">
								<option value=""></option>
								<option value="Y" {if $dataVideo[dataVideo].status == 'Y'} SELECTED {/if}>Ya</option>
								<option value="N" {if $dataVideo[dataVideo].status == 'N'} SELECTED {/if}>Tidak</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				{/section}
				</div>
				
			{else}
				<h4>Manajemen Video</h4>
				<div>
					<a href="video.php?act=add"><button type="button" class="btn btn-primary">+ Tambah Video</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='200'>Judul Video</th>
							<th width='100'>Link Video</th>
							<th width='50'>Aktif</th>
							<th width="100">Aksi</th>
						</tr>
					</thead>
					<tbody>
						{section name=dataVideo loop=$dataVideo}
							<tr valign='top'>
								<td>{$dataVideo[dataVideo].no}</td>
								<td>{$dataVideo[dataVideo].judul_video}</td>
								<td>{$dataVideo[dataVideo].video}</td>
								<td>{$dataVideo[dataVideo].status}</td>
								<td><a href='video.php?act=edit&id={$dataVideo[dataVideo].video_id}'><img src='../images/edit.jpg' width='20'></a>
									<a href="video.php?act=delete&id={$dataVideo[dataVideo].video_id}" onclick="return confirm('Anda Yakin ingin menghapus {$dataVideo[dataVideo].judul_video}?');"><img src='../images/delete.jpg' width='20'></a>
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