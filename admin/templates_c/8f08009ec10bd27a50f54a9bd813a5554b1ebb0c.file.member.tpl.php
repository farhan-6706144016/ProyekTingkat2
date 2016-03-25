<?php /* Smarty version Smarty-3.1.11, created on 2016-02-29 06:13:52
         compiled from ".\templates\member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:807556d3d390733bb8-12284658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f08009ec10bd27a50f54a9bd813a5554b1ebb0c' => 
    array (
      0 => '.\\templates\\member.tpl',
      1 => 1456722741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '807556d3d390733bb8-12284658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'dataMember' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d3d390784559_50690926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3d390784559_50690926')) {function content_56d3d390784559_50690926($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						Member berhasil dihapus.
					</div>	
				<?php }?>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='view'){?>
				<h4>Detail Member</h4>
				<div class="well">
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
					<label>Nama</label>
						<p><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['nama'];?>
</p>
					<label>Alamat</label>
						<p><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['alamat'];?>
</p>
					<label>Kota</label>
						<p><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['nama_kota'];?>
</p>
					<label>Phone</label>
						<p><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['phone'];?>
</p>
					<label>Email</label>
						<p><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['email'];?>
</p>
					<label>Status</label>
						<p><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['status'];?>
</p>
					<label>Registered</label>
						<p><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['created_date'];?>
</p>
				<?php endfor; endif; ?>
				</div>
				
			<?php }else{ ?>
				<h4>Daftar Member</h4>
				<br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='200'>Nama Member</th>
							<th width='200'>Alamat</th>
							<th width='100'>Kota</th>
							<th width='200'>Email</th>
							<th width='100'>Status</th>
							<th width="60">Aksi</th>
						</tr>
					</thead>
					<tbody>
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
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['nama'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['alamat'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['nama_kota'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['email'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['status'];?>
</td>
								<td><a href="member.php?act=view&id=<?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['member_id'];?>
"><img src="../images/view.png" width="20"></a>
									<a href="member.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['member_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['dataMember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMember']['index']]['nama'];?>
?');"><img src='../images/delete.jpg' width='20'></a></td>
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