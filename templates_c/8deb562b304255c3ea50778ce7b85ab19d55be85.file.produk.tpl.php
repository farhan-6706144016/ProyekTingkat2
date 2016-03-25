<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 09:27:18
         compiled from ".\templates\produk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1353056d93fb27cb9b9-16400996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8deb562b304255c3ea50778ce7b85ab19d55be85' => 
    array (
      0 => '.\\templates\\produk.tpl',
      1 => 1457339237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1353056d93fb27cb9b9-16400996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d93fb28479d4_70730273',
  'variables' => 
  array (
    'dataProduk' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d93fb28479d4_70730273')) {function content_56d93fb28479d4_70730273($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php echo $_smarty_tpl->getSubTemplate ("leftmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="templates/js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<link rel="stylesheet" href="templates/js/fancy/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="templates/js/fancy/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<link rel="stylesheet" href="templates/js/fancy/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="templates/js/fancy/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="templates/js/fancy/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="templates/js/fancy/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="templates/js/fancy/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


<script>
	$(document).ready(function() {
		$(".fancybox-button").fancybox({
			prevEffect		: 'none',
			nextEffect		: 'none',
			closeBtn		: false,
			helpers		: {
				title	: { type : 'inside' },
				buttons	: {}
			}
		});
	});
</script>

					
<div id="content">
	<div id="produk">

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
	
		<h2><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['nama_produk'];?>
</h2>
		<h4><span class="fontawesome-lock">Kategori : <?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['kategori'];?>
 | Merk : <?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['merk'];?>
</span></h4>		<br>
		<?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar1']!=''){?>
			<a class="fancybox-button" rel="fancybox-button" href="images/products/<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar1'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['nama_produk'];?>
">
				<img src="images/products/thumb/small_<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar1'];?>
" alt="" width="230" height="250">
			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar2']!=''){?>
			<a class="fancybox-button" rel="fancybox-button" href="images/products/<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar2'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['nama_produk'];?>
">
				<img src="images/products/thumb/small_<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar2'];?>
" alt="" width="230" height="250">
			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar3']!=''){?>
			<a class="fancybox-button" rel="fancybox-button" href="images/products/<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar3'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['nama_produk'];?>
">
				<img src="images/products/thumb/small_<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar3'];?>
" alt="" width="230" height="250">
			</a>
		<?php }?>
		<br>
		Sisa Stok : <?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['stock'];?>

		<h3 style='color: #000000;'>Rp. <?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['price'];?>
<br><br></h3>
		<p>
			<h3><b>Deskripsi Produk : </b></h3>
			<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['description'];?>

		</p>
		
		<br><br>
	<?php endfor; endif; ?>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>