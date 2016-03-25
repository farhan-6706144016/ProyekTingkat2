<?php /* Smarty version Smarty-3.1.11, created on 2016-03-05 09:50:50
         compiled from ".\templates\akun.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2839556da9dea75a0e4-43649037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a576d595503260b2e79e74cf9f8010b3ca2cb2ce' => 
    array (
      0 => '.\\templates\\akun.tpl',
      1 => 1457167746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2839556da9dea75a0e4-43649037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'dataMember' => 0,
    'dataKota' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56da9dea7a18a5_83737912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56da9dea7a18a5_83737912')) {function content_56da9dea7a18a5_83737912($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php echo $_smarty_tpl->getSubTemplate ("leftmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
		
		<script type='text/javascript' src='templates/js/jquery.validate.js'></script>
			
		
			<script type='text/javascript'>
				$(document).ready(function() {
					$('#frm_akun').validate({
						rules:{
							nama: true,
							alamat: true,
							kota: true,
							phone: true
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
								required: "This is a required field."
							}
						}
					});
				});
			</script>
		
		<p>&nbsp;</p>
		<?php if ($_smarty_tpl->tpl_vars['result']->value=='1'){?>
			<div class="messagesuccess"><h2>Akun Anda berhasil diupdate</h2></div>
		<?php }?>
		<div id="login">
		
		<h2><span class="fontawesome-lock"></span>Ubah Akun</h2>

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['name'] = 'dataMember';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataMember']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMember']['total']);
?>
		<form action="akun.php?act=submit" method="POST" id="frm_akun">
			
			<fieldset>

				<p><label for="nama">Nama</label></p>
				<p><input type="text" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['nama'];?>
" name="nama" id="nama" placeholder="Nama" style="background-color: #EEEEEE; color: #777777; padding: 4px 10px; width: 328px;"></p>
				
				<p><label for="alamat">Alamat</label></p>
				<p><textarea name="alamat" cols="50" rows="4" class="required" placeholder="Alamat" style="background-color: #EEEEEE; color: #777777; padding: 4px 10px; width: 328px;"><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['alamat'];?>
</textarea></p>
				
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
							<?php if ($_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['id_kota']==$_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['id_kota']){?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['id_kota'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['nama_kota'];?>
</option>
							<?php }else{ ?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['id_kota'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['nama_kota'];?>
</option>
							<?php }?>
						<?php endfor; endif; ?>
					</select>
				</p>
				
				<p><label for="phone">Phone</label></p>
				<p><input type="text" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['phone'];?>
" name="phone" id="phone" placeholder="Phone" style="background-color: #EEEEEE; color: #777777; padding: 4px 10px; width: 328px;"></p>
				
				<p><label for="email">E-mail</label></p>
				<p><input type="email" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['email'];?>
" name="email" id="email" placeholder="Email" DISABLED></p>

				<p><input type="submit" value="Update"></p>

			</fieldset>

		</form>
		<?php endfor; endif; ?>
	</div> 			
</div>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>