<?php /* Smarty version Smarty-3.1.11, created on 2016-02-21 09:22:09
         compiled from ".\templates\kategori.tpl" */ ?>
<?php /*%%SmartyHeaderCode:497556c964f7502bd0-83143039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce8ac0d3da1a897c7d0e5b2d5da6c048f884bb44' => 
    array (
      0 => '.\\templates\\kategori.tpl',
      1 => 1456042923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497556c964f7502bd0-83143039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56c964f75516e6_31438930',
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'dataKategori' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c964f75516e6_31438930')) {function content_56c964f75516e6_31438930($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						Kategori baru berhasil disimpan.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-success">
						Kategori berhasil diubah.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						Kategori berhasil dihapus.
					</div>	
				<?php }?>
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_kategori').validate({
							rules:{
								kategori: true,
								aktif: true
							},
							messages:{
								kategori:{
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
				<a href="kategori.php"><img src="../images/back.png"></a>
				<h4>Tambah Kategori</h4>
				<div class="well">
					<form action="kategori.php?act=input" method="POST" id="frm_kategori">
						<label>Nama Kategori </label>
							<input type="text" name="kategori" class="required">
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
				<h4>Ubah Kategori</h4>
				<div class="well">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['name'] = 'dataKategori';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataKategori']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total']);
?>
					<form action="kategori.php?act=update" method="POST" id="frm_kategori">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori_id'];?>
">
						<label>Nama Kategori</label>
							<input type="text" name="kategori" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori'];?>
">
						<label>Aktif</label>
							<select name="aktif" class="required">
								<option value=""></option>
								<option value="Y" <?php if ($_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['active']=='Y'){?> SELECTED <?php }?>>Ya</option>
								<option value="N" <?php if ($_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['active']=='N'){?> SELECTED <?php }?>>Tidak</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				<?php endfor; endif; ?>
				</div>
				
			<?php }else{ ?>
				<h4>Manajemen Kategori</h4>
				<div>
					<a href="kategori.php?act=add"><button type="button" class="btn btn-primary">+ Tambah Kategori</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='200'>Nama Kategori</th>
							<th width='50'>Aktif</th>
							<th width="100">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['name'] = 'dataKategori';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataKategori']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total']);
?>
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['aktif'];?>
</td>
								<td><a href='kategori.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori_id'];?>
'><img src='../images/edit.jpg' width='20'></a>
									<a href="kategori.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori'];?>
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