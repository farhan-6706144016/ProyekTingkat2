<?php /* Smarty version Smarty-3.1.11, created on 2016-03-05 08:19:19
         compiled from ".\templates\kategori.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1829256d9694b7a41a1-72874617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce8ac0d3da1a897c7d0e5b2d5da6c048f884bb44' => 
    array (
      0 => '.\\templates\\kategori.tpl',
      1 => 1457162347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1829256d9694b7a41a1-72874617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d9694b822400_42091005',
  'variables' => 
  array (
    'kategori' => 0,
    'dataProduk' => 0,
    'linkHalaman' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d9694b822400_42091005')) {function content_56d9694b822400_42091005($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php echo $_smarty_tpl->getSubTemplate ("leftmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<div id="content">
	
	<br><h2>Kategori: <?php echo $_smarty_tpl->tpl_vars['kategori']->value;?>
</h2><br>	
	<div id="products">
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
					<br>
					<h4><a href="detailproduk-<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['product_id'];?>
-<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['namalower'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['nama_produk'];?>
</a></h4>
					<h4>Rp. <?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['price'];?>
</h4>
				</div>
			</div>
		<?php endfor; endif; ?>
		<div class="cl">&nbsp;</div>
	</div>
	<p>&nbsp;</p>
	<div id="paging"><?php echo $_smarty_tpl->tpl_vars['linkHalaman']->value;?>
</div>
</div>					

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>