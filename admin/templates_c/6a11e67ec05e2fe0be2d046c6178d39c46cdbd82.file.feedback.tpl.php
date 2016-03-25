<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 08:48:56
         compiled from ".\templates\feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2366756dd31d75ce171-00315914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a11e67ec05e2fe0be2d046c6178d39c46cdbd82' => 
    array (
      0 => '.\\templates\\feedback.tpl',
      1 => 1457336932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2366756dd31d75ce171-00315914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56dd31d762f454_54521684',
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'datafeedback' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dd31d762f454_54521684')) {function content_56dd31d762f454_54521684($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						Balasan berhasil dikirimkan.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-success">
						Pesan berhasil dihapus.
					</div>
				<?php }?>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='view'){?>
				<h4>Detail Kontak</h4>
				<div class="well">
					<form method="POST" action="kontak.php?act=submit">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['name'] = 'datafeedback';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datafeedback']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['total']);
?>
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['pesan_id'];?>
">
						<input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['email'];?>
">
						<input type="hidden" name="subjek" value="<?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['subjek'];?>
">
						<label>Status         : <?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['status'];?>
</label>
						<label>Dikirim        : <?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['tanggal_jawab'];?>
</label>
						<label>Dikirim Oleh   : <?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['pengirim'];?>
</label>
						<br>	
						<label>Tanggal Kirim  : <?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['tanggal'];?>
</label>
						<label>Nama Pengirim  : <?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['nama'];?>
</label>
						<label>Email          : <?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['email'];?>
</label>
						<label>Subjek         : <b><?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['subjek'];?>
</b></label>
						<label>Pesan</label>
<textarea name="pesan" id="pesan" style="width: 800px; height: 180px;">

-----------------------------------------------------------------------------------------------------------------------------------------------
<?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['pesan'];?>

</textarea><br>
						<input type="submit" name="submit" value="Kirim">
						<?php endfor; endif; ?>
					</form>
				</div>
				
			<?php }else{ ?>
				<h4>Data Kontak</h4>
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='100'>Tanggal</th>
							<th width='150'>Nama Pengirim</th>
							<th width='250'>Email</th>
							<th width='230'>Subjek</th>
							<th width="70">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['name'] = 'datafeedback';
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datafeedback']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['datafeedback']['total']);
?>
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['tanggal'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['nama'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['email'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['subjek'];?>
</td>
								<td><a href='kontak.php?act=view&id=<?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['pesan_id'];?>
'><img src='../images/view.png' width='20'></a>
								<?php if ($_smarty_tpl->tpl_vars['level']->value=='3'){?>
									
								<?php }else{ ?> 
									<a href="kontak.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['pesan_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['datafeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['datafeedback']['index']]['nama'];?>
?');"><img src='../images/delete.jpg' width='20'></a>
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