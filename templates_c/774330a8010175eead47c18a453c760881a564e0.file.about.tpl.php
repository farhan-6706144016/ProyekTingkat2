<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 09:42:56
         compiled from ".\templates\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2253956db9c44ca4471-06440168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '774330a8010175eead47c18a453c760881a564e0' => 
    array (
      0 => '.\\templates\\about.tpl',
      1 => 1457340174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2253956db9c44ca4471-06440168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56db9c44cc3ae3_70531610',
  'variables' => 
  array (
    'year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56db9c44cc3ae3_70531610')) {function content_56db9c44cc3ae3_70531610($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php echo $_smarty_tpl->getSubTemplate ("leftmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<div id="content">
		
	<div class="post">
		<p>&nbsp;</p>
		<h2>About Us</h2><br>
		<p>
			 <h3>Deskripsi Produk</h3>
			 <p>
			 	Toko Online
			 </p><br>

			 <h3>Nama Tim dan Anggota</h3>
			 <p>
			 	Nama Tim : Hanahan<br>
			 	Anggota  :<br>
			 	- Hazrina Tsamrotul<br>
			 	- Farhan Dzaky A<br>
			 	- Levina Yunita<br>
			 </p><br>
			 <h3>Nama Pembimbing</h3>
			 <p>
			 	Gunawan (GNW)
			 </p><br>
		</p>
	</div>
	<div class=images>
		<a class="fancybox-button" rel="fancybox-button" href="http://telkomuniversity.ac.id" title="Telkom Univerity" target="_blank">
			<img src="images/logo-telkom.png" alt="" align="left" width="230" height="230">
		</a>
		<a class="fancybox-button" rel="fancybox-button" href="http://dif.telkomuniversity.ac.id" title="D3 Teknik Informatika" target="_blank">
			<img src="images/logo-dif.png" alt="" align="right" width="230" height="230">
		</a>
	</div>	
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h3 style="text-align:center">Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 Khalwahijab.</h3>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>