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
					<div class="alert alert-error">
						Password lama Anda salah.
					</div>
				{/if}
				{if $code eq '2'}
					<div class="alert alert-error">
						Password Baru dan Re-type password tidak cocok.
					</div>
				{/if}
				{if $code eq '3'}
					<div class="alert alert-success">
						Password berhasil diubah.
					</div>
				{/if}
			</div>
			
			<style>
				.error {
					font-size:small; 
					-webkit-border-radius: 4px;
					-moz-border-radius: 4px;
					border-radius: 4px;
			  		border-color: #eed3d7;
			  		color: #b94a48; 
				}
			</style>
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			{literal}
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_password').validate({
							rules:{
								oldpassword: true,
								newpassword: true,
								retypenewpassword: true
							},
							messages:{
								oldpassword:{
									required: "Masukkan password lama Anda."
								},
								newpassword:{
									required: "Masukkan password baru."
								},
								retypenewpassword:{
									required: "Masukkan ulang password baru."
								}
							}
						});
					});
				</script>
			{/literal}
			
			<h4>Ubah Password</h4>
			<div class='well'>
				<form method="POST" action="ubah_password.php?act=update" id="frm_password">
				<label>Password Lama</label>
					<input type="password" name="oldpassword" class="required">
				<label>Password Baru</label>
					<input type="password" name="newpassword" class="required">
				<label>Ketikkan Ulang Password Baru</label>
					<input type="password" name="retypenewpassword" class="required">
				<div>
					<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan Perubahan</button>
				</div>
				</form>
			</div>
			
		</div>
	</div>
</div>

{include file="footer.tpl"}