<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 08:00:12
         compiled from ".\templates\produk_baru.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134956d44971d81be0-93351848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ce081895b053fcbc91a55bff36bc784c10e60d3' => 
    array (
      0 => '.\\templates\\produk_baru.tpl',
      1 => 1457334008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134956d44971d81be0-93351848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d44971dab286_13991689',
  'variables' => 
  array (
    'dataProduk' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d44971dab286_13991689')) {function content_56d44971dab286_13991689($_smarty_tpl) {?><div id="products">
	<h2>PRODUK BARU</h2>
	
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['name'] = 'dataProduk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataProduk']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total']);
?>
		<div class="product">
			<a href="detailproduk-<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['product_id'];?>
-<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['namalower'];?>
.html"><img src="images/products/thumb/small_<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar1'];?>
" width="225" height="230" alt="<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['nama_produk'];?>
" /></a>
			<div class="pr-info">
				<center><br>
				<h4><a href="detailproduk-<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['product_id'];?>
-<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['namalower'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['nama_produk'];?>
</a></h4>
				<h4>Rp. <?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['price'];?>
</h4>
				</center>
			</div>
		</div>
	<?php endfor; endif; ?>
	<div class="cl">&nbsp;</div><br><br>
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
			<a href="home.php?next=<?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
"><?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
</a>
			<?php }?>
		<?php endfor; endif; ?>
	</div>
</div><?php }} ?>