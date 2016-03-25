<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 08:45:05
         compiled from ".\templates\petugas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2968556dd2eacc015b3-88045338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51f852f74b757d775791ee43180ab2d2bb4733ed' => 
    array (
      0 => '.\\templates\\petugas.tpl',
      1 => 1457336701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2968556dd2eacc015b3-88045338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56dd2eacc7e997_25160792',
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'dataPetugas' => 0,
    'lev' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dd2eacc7e997_25160792')) {function content_56dd2eacc7e997_25160792($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						Petugas baru berhasil disimpan.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-success">
						Petugas berhasil diubah.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						Petugas berhasil dihapus.
					</div>	
				<?php }?>
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_user').validate({
							rules:{
								nama: true,
								email: true,
								username: true,
								level: true,
								phone:{
									number: true
								}
							},
							messages:{
								nama:{
									required: "This is a required field."
								},
								email:{
									required: "This is a required field.",
									email: "Email format is wrong."
								},
								username:{
									required: "This is a required field."
								},
								level:{
									required: "This is a required field."
								},
								phone:{
									number: "This is a number field."
								}
							}
						});
					});
				</script>
			
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='add'||$_smarty_tpl->tpl_vars['act']->value=='edit'){?>
				<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
				<link rel="stylesheet" type="text/css" href="../css/Ajaxfile-upload.css" />
			<?php }?>
			
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='add'){?>
				<a href="petugas.php"><img src="../images/back.png"></a>
				<h4>Tambah Petugas</h4>
				<div class="well">
					<form action="petugas.php?act=input" method="POST" enctype="multipart/form-data" id="frm_user">
						<label>Nama </label>
							<input type="text" name="nama" class="required">
						<label>Email </label>
							<input type="email" name="email" class="required">
						<label>Username </label>
							<input type="text" name="username" class="required">
						<label>Phone </label>
							<input type="text" name="phone" class="number">
						<label>Alamat </label>
							<textarea name="alamat" rows="6" cols="50"></textarea>	
						<label>Level</label>
							<select name="level">
								<option value=""></option>
								<option value="2">Administrator</option>
								<option value="3">Staff</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				</div>
			
			<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='edit'){?>
				<h4>Ubah Petugas</h4>
				<div class="well">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['name'] = 'dataPetugas';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataPetugas']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['total']);
?>
					<form action="petugas.php?act=update" method="POST" enctype="multipart/form-data" id="frm_user">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['petugas_id'];?>
">
						<label>Nama </label>
							<input type="text" name="nama" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['nama'];?>
">
						<label>Email </label>
							<input type="text" name="email" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['email'];?>
">
						<label>Username </label>
							<input type="text" name="username" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['username'];?>
">
						<label>Phone </label>
							<input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['phone'];?>
" class="number">
						<label>Alamat </label>
							<textarea name="alamat" rows="6" cols="50"><?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['alamat'];?>
</textarea>	
						<label>Level</label>
							<select name="level">
								<option value=""></option>
								<option value="2" <?php if ($_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['level']=='2'){?> SELECTED <?php }?>>Administrator</option>
								<option value="3" <?php if ($_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['level']=='3'){?> SELECTED <?php }?>>Staff</option>
							</select>
						<br><br>	
						<div>
							<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan Perubahan</button>
						</div>
					</form>
				<?php endfor; endif; ?>
				</div>
				
			<?php }else{ ?>
				<h4>Manajemen Petugas</h4>
				<div>
					<a href="petugas.php?act=add"><button type="button" class="btn btn-primary">+ Tambah Petugas</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='150'>Nama</th>
							<th width='150'>Username</th>
							<th width='200'>Email</th>
							<th width='100'>Phone</th>
							<th width='150'>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['name'] = 'dataPetugas';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataPetugas']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataPetugas']['total']);
?>
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['nama'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['username'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['email'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['phone'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['level'];?>
</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['lev']->value=='1'){?>
										<a href='petugas.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['petugas_id'];?>
'><img src='../images/edit.jpg' width='20'></a>
										<a href="petugas.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['petugas_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['nama'];?>
?');"><img src='../images/delete.jpg' width='20'></a>
										
									<?php }else{ ?>
										<?php if ($_smarty_tpl->tpl_vars['lev']->value=='2'&&$_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['levelori']=='3'){?>
											<a href='petugas.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['petugas_id'];?>
'><img src='../images/edit.jpg' width='20'></a>
											<a href="petugas.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['petugas_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['dataPetugas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataPetugas']['index']]['nama'];?>
?');"><img src='../images/delete.jpg' width='20'></a>
										<?php }?> 
									<?php }?>
									
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