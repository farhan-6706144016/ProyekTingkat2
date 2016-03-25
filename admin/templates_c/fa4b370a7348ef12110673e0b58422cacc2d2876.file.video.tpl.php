<?php /* Smarty version Smarty-3.1.11, created on 2016-02-29 04:57:17
         compiled from ".\templates\video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:544956d3c1658138f6-51596863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4b370a7348ef12110673e0b58422cacc2d2876' => 
    array (
      0 => '.\\templates\\video.tpl',
      1 => 1456718231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '544956d3c1658138f6-51596863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d3c165866fc6_59953095',
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'dataVideo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3c165866fc6_59953095')) {function content_56d3c165866fc6_59953095($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						Video baru berhasil disimpan.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-success">
						Video berhasil diubah.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						Video berhasil dihapus.
					</div>	
				<?php }?>
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_video').validate({
							rules:{
								judul_video: true,
								video: true,
								status: true
							},
							messages:{
								judul_video:{
									required: "This is a required field."
								},
								video:{
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
				<a href="video.php"><img src="../images/back.png"></a>
				<h4>Tambah Video</h4>
				<div class="well">
					<form action="video.php?act=input" method="POST" id="frm_video">
						<label>Judul Video </label>
							<input type="text" name="judul_video" class="required">
						<label>Link Video </label>
							<input type="text" name="video" class="required">
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
				<h4>Ubah Video</h4>
				<div class="well">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['name'] = 'dataVideo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataVideo']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['total']);
?>
					<form action="video.php?act=update" method="POST" id="frm_video">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['video_id'];?>
">
						<label>Judul Video</label>
							<input type="text" name="judul_video" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['judul_video'];?>
">
						<label>Link Video</label>
							<input type="text" name="video" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['video'];?>
">
						<label>Aktif</label>
							<select name="status" class="required">
								<option value=""></option>
								<option value="Y" <?php if ($_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['status']=='Y'){?> SELECTED <?php }?>>Ya</option>
								<option value="N" <?php if ($_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['status']=='N'){?> SELECTED <?php }?>>Tidak</option>
							</select>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				<?php endfor; endif; ?>
				</div>
				
			<?php }else{ ?>
				<h4>Manajemen Video</h4>
				<div>
					<a href="video.php?act=add"><button type="button" class="btn btn-primary">+ Tambah Video</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='200'>Judul Video</th>
							<th width='100'>Link Video</th>
							<th width='50'>Aktif</th>
							<th width="100">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['name'] = 'dataVideo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataVideo']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataVideo']['total']);
?>
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['judul_video'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['video'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['status'];?>
</td>
								<td><a href='video.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['video_id'];?>
'><img src='../images/edit.jpg' width='20'></a>
									<a href="video.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['video_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['judul_video'];?>
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