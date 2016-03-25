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
				{if $code eq '3'}
					<div class="alert alert-success">
						Member berhasil dihapus.
					</div>	
				{/if}
			</div>
			
			{if $act == 'view'}
				<h4>Detail Member</h4>
				<div class="well">
				{section name=dataMember loop=$dataMember}
					<label>Nama</label>
						<p>{$dataMember[dataMember].nama}</p>
					<label>Alamat</label>
						<p>{$dataMember[dataMember].alamat}</p>
					<label>Kota</label>
						<p>{$dataMember[dataMember].nama_kota}</p>
					<label>Phone</label>
						<p>{$dataMember[dataMember].phone}</p>
					<label>Email</label>
						<p>{$dataMember[dataMember].email}</p>
					<label>Status</label>
						<p>{$dataMember[dataMember].status}</p>
					<label>Registered</label>
						<p>{$dataMember[dataMember].created_date}</p>
				{/section}
				</div>
				
			{else}
				<h4>Daftar Member</h4>
				<br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='200'>Nama Member</th>
							<th width='200'>Alamat</th>
							<th width='100'>Kota</th>
							<th width='200'>Email</th>
							<th width='100'>Status</th>
							<th width="60">Aksi</th>
						</tr>
					</thead>
					<tbody>
						{section name=dataMember loop=$dataMember}
							<tr valign='top'>
								<td>{$dataMember[dataMember].no}</td>
								<td>{$dataMember[dataMember].nama}</td>
								<td>{$dataMember[dataMember].alamat}</td>
								<td>{$dataMember[dataMember].nama_kota}</td>
								<td>{$dataMember[dataMember].email}</td>
								<td>{$dataMember[dataMember].status}</td>
								<td><a href="member.php?act=view&id={$dataMember[dataMember].member_id}"><img src="../images/view.png" width="20"></a>
									<a href="member.php?act=delete&id={$dataMember[dataMember].member_id}" onclick="return confirm('Anda Yakin ingin menghapus {$dataMember[dataMember].nama}?');"><img src='../images/delete.jpg' width='20'></a></td>
							</tr>
						{/section}
					</tbody>
				</table>
			
			{/if}
			
		</div>
	</div>
</div>

{include file="footer.tpl"}