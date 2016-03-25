<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 09:38:17
         compiled from ".\templates\leftmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:454056d44971d0bc61-88597212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '210e5d75d1694376a3710f099ba3bf1a2cb7ffbb' => 
    array (
      0 => '.\\templates\\leftmenu.tpl',
      1 => 1457339891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '454056d44971d0bc61-88597212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d44971d34ab9_49735158',
  'variables' => 
  array (
    'dataKategori' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d44971d34ab9_49735158')) {function content_56d44971d34ab9_49735158($_smarty_tpl) {?>
<div id="sidebar">
	<ul>
		<script type='text/javascript' src='templates/js/jquery.validate.js'></script>
			
		
			<script type='text/javascript'>
				$(document).ready(function() {
					$('#frm_cari').validate({
						rules:{
							keyword: true
						},
						messages:{
							keyword:{
								required: "This is a required field."
							}
						}
					});
				});
			</script>
		
		<li class="widget">
			<h2>Pencarian Produk</h2>
			<div id="search">
				<div>
					<form id="searchform">
						<br>
						<div>
							<input type="text" size="30" value="" id="inputString" placeholder="Masukkan keyword" onkeyup="lookup(this.value);" />
						</div>
						<div id="suggestions"></div>
					</form>
				</div>
			</div>
		</li>
		<li class="widget">
			<h2>Kategori</h2>
			<ul>
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
					<li><a href='kategori-<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori_id'];?>
-<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategorilower'];?>
-1.html' title="<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori'];?>
"><span>
						<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori'];?>
 (<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['total'];?>
)
					</span></a></li>
				<?php endfor; endif; ?>
			</ul>
		</li>
		<li class="widget">
			<h2></h2>
		</li>
		
	</ul>
</div><?php }} ?>