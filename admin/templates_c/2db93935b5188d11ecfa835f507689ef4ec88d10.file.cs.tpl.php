<?php /* Smarty version Smarty-3.1.11, created on 2016-02-29 05:38:36
         compiled from ".\templates\cs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3144956d3c51f424409-48960720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2db93935b5188d11ecfa835f507689ef4ec88d10' => 
    array (
      0 => '.\\templates\\cs.tpl',
      1 => 1456720710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3144956d3c51f424409-48960720',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d3c51f47e543_15338577',
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'dataCS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3c51f47e543_15338577')) {function content_56d3c51f47e543_15338577($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						CS baru berhasil disimpan.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-success">
						CS berhasil diubah.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						CS berhasil dihapus.
					</div>	
				<?php }?>
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_cs').validate({
							rules:{
								nama: true,
								cs: true,
								status: true
							},
							messages:{
								nama:{
									required: "This is a required field."
								},
								cs:{
									required: "This is a required field."
								},
								status:{
									required: "This is a required field."
								}
							}
						});
					});
				</script>
			
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='add'){?>
				<a href="cs.php"><img src="../images/back.png"></a>
				<h4>Tambah CS</h4>
				<div class="well">
					<form action="cs.php?act=input" method="POST" id="frm_cs">
						<label>Nama </label>
							<input type="text" name="nama" class="required">
						<label>CS </label>
							<input type="text" name="cs" class="required">
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
			
			<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='edit'){?>
				<h4>Ubah CS</h4>
				<div class="well">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['name'] = 'dataCS';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataCS']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['total']);
?>
					<form action="cs.php?act=update" method="POST" id="frm_cs">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['cs_id'];?>
">
						<label>Nama </label>
							<input type="text" name="nama" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['nama'];?>
">
						<label>CS </label>
							<input type="text" name="cs" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['cs'];?>
">
						<label>Aktif</label>
							<select name="status" class="required">
								<option value=""></option>
								<option value="Y" <?php if ($_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['status']=='Y'){?> SELECTED <?php }?>>Ya</option>
								<option value="N" <?php if ($_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['status']=='N'){?> SELECTED <?php }?>>Tidak</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				<?php endfor; endif; ?>
				</div>
				
			<?php }else{ ?>
				<h4>Manajemen CS</h4>
				<div>
					<a href="cs.php?act=add"><button type="button" class="btn btn-primary">+ Tambah CS</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='200'>Nama</th>
							<th width='150'>CS</th>
							<th width='50'>Aktif</th>
							<th width="100">Aksii</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['name'] = 'dataCS';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataCS']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCS']['total']);
?>
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['nama'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['cs'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['status'];?>
</td>
								<td><a href='cs.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['cs_id'];?>
'><img src='../images/edit.jpg' width='20'></a>
									<a href="cs.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['cs_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['dataCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCS']['index']]['nama'];?>
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