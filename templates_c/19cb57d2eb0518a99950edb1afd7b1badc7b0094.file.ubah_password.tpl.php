<?php /* Smarty version Smarty-3.1.11, created on 2016-03-05 09:59:35
         compiled from ".\templates\ubah_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2913756da9ff7039ba9-99607366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19cb57d2eb0518a99950edb1afd7b1badc7b0094' => 
    array (
      0 => '.\\templates\\ubah_password.tpl',
      1 => 1457168334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2913756da9ff7039ba9-99607366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56da9ff7064e49_22266144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56da9ff7064e49_22266144')) {function content_56da9ff7064e49_22266144($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php echo $_smarty_tpl->getSubTemplate ("leftmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
	<script type='text/javascript' src='templates/js/jquery.validate.js'></script>
			
	
		<script type='text/javascript'>
			$(document).ready(function() {
				$('#frm_ubah').validate({
					rules:{
						password_lama: true,
						password_baru: true,
						password_baru2: true
					},
					messages:{
						password_lama:{
							required: "This is a required field."
						},
						password_baru:{
							required: "This is a required field."
						},
						password_baru2:{
							required: "This is a required field."
						}
					}
				});
			});
		</script>
	
	
	<p>&nbsp;</p><p>&nbsp;</p>
	<?php if ($_smarty_tpl->tpl_vars['result']->value=='1'){?>
		<div class="messageerror"><h2>Password lama salah.</h2></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['result']->value=='2'){?>
		<div class="messageerror"><h2>Password baru tidak cocok.</h2></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['result']->value=='3'){?>
		<div class="messagesuccess"><h2>Password berhasil diupdate.</h2></div>
	<?php }?>
		
	<div id="login">
		<h2><span class="fontawesome-lock"></span>Ubah Password</h2>

		<form action="ubah_password.php?act=submit" method="POST" id="frm_ubah">
	
			<fieldset>
				<p><label for="password">Password Lama</label></p>
				<p><input type="password" class="required" name="password_lama" id="password_lama" placeholder="Password Lama"></p>
				
				<p><label for="password">Password Baru</label></p>
				<p><input type="password" class="required" name="password_baru" id="password_baru" placeholder="Password Baru"></p>
	
				<p><label for="password">Ulangi Password</label></p>
				<p><input type="password" class="required" name="password_baru2" id="password_baru2" placeholder="Ulangi Password"></p>
	
				<p><input type="submit" value="Ubah Password"></p>
	
			</fieldset>
	
		</form>
	</div>
	
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>					
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>