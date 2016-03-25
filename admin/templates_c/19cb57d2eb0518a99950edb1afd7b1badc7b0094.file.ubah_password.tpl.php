<?php /* Smarty version Smarty-3.1.11, created on 2016-03-04 08:26:41
         compiled from ".\templates\ubah_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2165356d9386a952122-60305719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19cb57d2eb0518a99950edb1afd7b1badc7b0094' => 
    array (
      0 => '.\\templates\\ubah_password.tpl',
      1 => 1457076390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2165356d9386a952122-60305719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d9386a97f533_62941027',
  'variables' => 
  array (
    'code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d9386a97f533_62941027')) {function content_56d9386a97f533_62941027($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='1'){?>
					<div class="alert alert-error">
						Password lama Anda salah.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-error">
						Password Baru dan Re-type password tidak cocok.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						Password berhasil diubah.
					</div>
				<?php }?>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>