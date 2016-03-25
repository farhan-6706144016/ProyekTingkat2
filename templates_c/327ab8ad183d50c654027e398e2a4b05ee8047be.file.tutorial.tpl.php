<?php /* Smarty version Smarty-3.1.11, created on 2016-03-05 08:27:12
         compiled from ".\templates\tutorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3248756d94b32cce082-81295374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327ab8ad183d50c654027e398e2a4b05ee8047be' => 
    array (
      0 => '.\\templates\\tutorial.tpl',
      1 => 1457162830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3248756d94b32cce082-81295374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d94b32cf18c4_91089832',
  'variables' => 
  array (
    'dataVideo' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d94b32cf18c4_91089832')) {function content_56d94b32cf18c4_91089832($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php echo $_smarty_tpl->getSubTemplate ("leftmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="videos">
	<h2>Video Tutorial</h2>
	
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
		<div class="video">
			<center>
			<iframe src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['dataVideo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataVideo']['index']]['video'];?>
"></iframe>
			</center>
		</div>
	<?php endfor; endif; ?>
	<div id="paging">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['num'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['num']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['name'] = 'num';
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['num']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total']);
?>
		<?php if ($_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['url']=="yes"){?>
			<span class=current><?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
</span>
		<?php }else{ ?>
		<a href="tutorial.php?next=<?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
"><?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
</a>
		<?php }?>
	<?php endfor; endif; ?>

	</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>