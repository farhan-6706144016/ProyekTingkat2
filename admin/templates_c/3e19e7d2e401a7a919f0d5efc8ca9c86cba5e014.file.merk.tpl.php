<?php /* Smarty version Smarty-3.1.11, created on 2016-02-29 04:50:05
         compiled from ".\templates\merk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:846756d3bfed3543b9-39899784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e19e7d2e401a7a919f0d5efc8ca9c86cba5e014' => 
    array (
      0 => '.\\templates\\merk.tpl',
      1 => 1456717774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '846756d3bfed3543b9-39899784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'dataMerk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d3bfed522b33_96090762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3bfed522b33_96090762')) {function content_56d3bfed522b33_96090762($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						Merk baru berhasil disimpan.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-success">
						Merk berhasil diubah.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						Merk berhasil dihapus.
					</div>	
				<?php }?>
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			
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
			
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='add'){?>
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
			
			<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='edit'){?>
				<h4>Ubah Merk</h4>
				<div class="well">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['name'] = 'dataMerk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataMerk']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total']);
?>
					<form action="merk.php?act=update" method="POST" id="frm_merk">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk_id'];?>
">
						<label>Nama Merk</label>
							<input type="text" name="merk" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk'];?>
">
						<label>Aktif</label>
							<select name="aktif" class="required">
								<option value=""></option>
								<option value="Y" <?php if ($_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['active']=='Y'){?> SELECTED <?php }?>>Ya</option>
								<option value="N" <?php if ($_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['active']=='N'){?> SELECTED <?php }?>>Tidak</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				<?php endfor; endif; ?>
				</div>
				
			<?php }else{ ?>
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
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['name'] = 'dataMerk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataMerk']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total']);
?>
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['active'];?>
</td>
								<td><a href='merk.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk_id'];?>
'><img src='../images/edit.jpg' width='20'></a>
									<a href="merk.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk_id'];?>
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