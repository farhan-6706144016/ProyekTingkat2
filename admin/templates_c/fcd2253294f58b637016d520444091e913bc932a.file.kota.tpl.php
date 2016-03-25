<?php /* Smarty version Smarty-3.1.11, created on 2016-02-29 06:55:43
         compiled from ".\templates\kota.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2777656d3d9a6a57ab0-39558173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd2253294f58b637016d520444091e913bc932a' => 
    array (
      0 => '.\\templates\\kota.tpl',
      1 => 1456725339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2777656d3d9a6a57ab0-39558173',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d3d9a6aa9b51_08659361',
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'dataKota' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3d9a6aa9b51_08659361')) {function content_56d3d9a6aa9b51_08659361($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
					<div class="alert alert-success">
						Kota baru berhasil disimpan.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-success">
						Kota berhasil diubah.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						Kota berhasil dihapus.
					</div>	
				<?php }?>
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_kota').validate({
							rules:{
								kota: true,
								aktif: true
							},
							messages:{
								kota:{
									required: "This is a required field."
								},
								aktif:{
									required: "This is a required field."
								}
							}
						});
					});
				</script>
			
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='add'){?>
				<a href="kota.php"><img src="../images/back.png"></a>
				<h4>Tambah Kota</h4>
				<div class="well">
					<form action="kota.php?act=input" method="POST" id="frm_kota">
						<label>Nama Kota</label>
							<input type="text" name="nama_kota" class="required">
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
			
			<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='edit'){?>
				<h4>Ubah Kota</h4>
				<div class="well">
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
					<form action="kota.php?act=update" method="POST" id="frm_kota">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['id_kota'];?>
">
						<label>Nama Kota</label>
							<input type="text" name="nama_kota" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['nama_kota'];?>
">
						<label>Aktif</label>
							<select name="aktif" class="required">
								<option value=""></option>
								<option value="Y" <?php if ($_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['aktif']=='Y'){?> SELECTED <?php }?>>Ya</option>
								<option value="N" <?php if ($_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['aktif']=='N'){?> SELECTED <?php }?>>Tidak</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				<?php endfor; endif; ?>
				</div>
				
			<?php }else{ ?>
				<h4>Manajemen Kota</h4>
				<div>
					<a href="kota.php?act=add"><button type="button" class="btn btn-primary">+ Tambah Kota</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='200'>Nama Kota</th>
							<th width='50'>Aktif</th>
							<th width="100">Aksi</th>
						</tr>
					</thead>
					<tbody>
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
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['nama_kota'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['aktif'];?>
</td>
								<td><a href='kota.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['id_kota'];?>
'><img src='../images/edit.jpg' width='20'></a>
									<a href="kota.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['id_kota'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['dataKota']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKota']['index']]['nama_kota'];?>
?');"><img src='../images/delete.jpg' width='20'></a>
								</td>
							</tr>
						<?php endfor; endif; ?>
					</tbody>
				</table>
			
			<?php }?>
			
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>