<?php /* Smarty version Smarty-3.1.11, created on 2016-03-05 10:06:02
         compiled from ".\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:868556d999232f60f3-72072510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9489e0e0cf9cf9b13f913ba886d8ccac28fd30' => 
    array (
      0 => '.\\templates\\register.tpl',
      1 => 1457168761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '868556d999232f60f3-72072510',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d9992332b7b9_75743573',
  'variables' => 
  array (
    'result' => 0,
    'dataKota' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d9992332b7b9_75743573')) {function content_56d9992332b7b9_75743573($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php echo $_smarty_tpl->getSubTemplate ("leftmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<div id="content">
		
		<script type='text/javascript' src='templates/js/jquery.validate.js'></script>
			
		
			<script type='text/javascript'>
				$(document).ready(function() {
					$('#frm_register').validate({
						rules:{
							nama: true,
							alamat: true,
							kota: true,
							phone:{
								required: true,
								number: true
							},
							email: true,
							password: true,
							confirm: true
						},
						messages:{
							nama:{
								required: "This is a required field."
							},
							alamat:{
								required: "This is a required field."
							},
							kota:{
								required: "This is a required field."
							},
							phone:{
								required: "This is a required field.",
								number: "This is a number field."
							},
							email:{
								required: "This is a required field."
							},
							password:{
								required: "This is a required field."
							},
							confirm:{
								required: "This is a required field."
							}
						}
					});
				});
			</script>
		
		
		<div id="login">
		
		<?php if ($_smarty_tpl->tpl_vars['result']->value=='1'){?>
			<div class="messageerror"><p><b>Password tidak cocok.</b></p></div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['result']->value=='2'){?>
			<div class="messageerror"><p><b>Email Anda sudah digunakan.</b></p></div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['result']->value=='3'){?>
			<div class="messagesuccess"><p><b>Registrasi Anda berhasil</b></p></div>
		<?php }?>
		<h2><span class="fontawesome-lock"></span>Register</h2>

		<form action="register.php?act=register" method="POST" id="frm_register">

			<fieldset>

				<p><label for="nama">Nama</label></p>
				<p><input type="text" class="required" name="nama" id="nama" placeholder="Nama" style="background-color: #EEEEEE; color: #777777; padding: 4px 10px; width: 328px;"></p>
				
				<p><label for="alamat">Alamat</label></p>
				<p><textarea name="alamat" cols="50" rows="4" class="required" placeholder="Alamat" style="background-color: #EEEEEE; color: #777777; padding: 4px 10px; width: 328px;"></textarea></p>
				
				<p><label for="kota">Kota</label></p>
				<p>
					<select name="kota" class="required" style="background-color: #EEEEEE; color: #777777; padding: 4px 10px; width: 328px;">
						<option value="">- Pilih Kota -</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['name'] = 'dataKota';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataKota']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKota']['total']);
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['id_kota'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['nama_kota'];?>
</option>
						<?php endfor; endif; ?>
					</select>
				</p>
				
				<p><label for="phone">Phone</label></p>
				<p><input type="text" class="required" name="phone" id="phone" placeholder="Phone" style="background-color: #EEEEEE; color: #777777; padding: 4px 10px; width: 328px;"></p>
				
				<p><label for="email">E-mail</label></p>
				<p><input type="email" class="required" name="email" id="email" placeholder="Email"></p>

				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" class="required" name="password" placeholder="Password">
				
				<p><label for="confirm">Konfirmasi Password</label></p>
				<p><input type="password" id="confirm" class="required" name="confirm" placeholder="Konfirmasi Password">

				<p><input type="submit" value="Register"></p>

			</fieldset>

		</form>
	</div>						
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>