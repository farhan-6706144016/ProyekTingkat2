<?php /* Smarty version Smarty-3.1.11, created on 2016-03-06 03:05:49
         compiled from ".\templates\history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2732856db8eb88bfa64-68466220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50224e8f05f4921b383f737470d7105344ce63db' => 
    array (
      0 => '.\\templates\\history.tpl',
      1 => 1457229947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2732856db8eb88bfa64-68466220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56db8eb89c2003_39321414',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56db8eb89c2003_39321414')) {function content_56db8eb89c2003_39321414($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php echo $_smarty_tpl->getSubTemplate ("leftmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" href="templates/css/cart.css" type="text/css">
					
<div id="content">
	<p>&nbsp;</p>
	<h2> History Transaksi :</h2><br>
	<br>
	
	<table class='table'>
		<tr class='tr'>
			<th class='th' width='10'>No</th>
			<th class='th' width='150'>Tanggal</th>
			<th class='th' width='150'>No Faktur</th>
			<th class='th' width='100'>Status</th>
			<th class='th' width='80'>Ekspedisi</th>
			<th class='th' width='130'>No. Resi</th>
			<th class='th' width='70'>Aksi</th>
		</tr>
		
	</table>
	<p>&nbsp;</p><p>&nbsp;</p>					
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>