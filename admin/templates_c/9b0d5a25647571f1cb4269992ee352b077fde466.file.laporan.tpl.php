<?php /* Smarty version Smarty-3.1.11, created on 2016-03-04 08:20:26
         compiled from ".\templates\laporan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:934556d3d4d37f2f38-58275384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b0d5a25647571f1cb4269992ee352b077fde466' => 
    array (
      0 => '.\\templates\\laporan.tpl',
      1 => 1456723548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '934556d3d4d37f2f38-58275384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d3d4d383c802_32579518',
  'variables' => 
  array (
    'code' => 0,
    'start_date' => 0,
    'end_date' => 0,
    'start_indo' => 0,
    'end_indo' => 0,
    'dataLaporan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3d4d383c802_32579518')) {function content_56d3d4d383c802_32579518($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						Supplier baru berhasil disimpan.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-success">
						Supplier berhasil diubah.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						Supplier berhasil dihapus.
					</div>	
				<?php }?>
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			
				<script type='text/javascript'>
					$(document).ready(function() {
						$( "#datepicker1" ).datepicker({
							changeMonth: true,
							changeYear: true,
							dateFormat: "yy-mm-dd",
							yearRange: '2013:c-0'
						});
						
						$( "#datepicker2" ).datepicker({
							changeMonth: true,
							changeYear: true,
							dateFormat: "yy-mm-dd",
							yearRange: '2013:c-0'
						});
					});
				</script>
			
			
			<?php if ($_smarty_tpl->tpl_vars['start_date']->value!=''&&$_smarty_tpl->tpl_vars['end_date']->value!=''){?>
				
				<p>&nbsp;</p>
				<h4>Laporan Penjualan</h4>
				<p>Periode <?php echo $_smarty_tpl->tpl_vars['start_indo']->value;?>
 s/d <?php echo $_smarty_tpl->tpl_vars['end_indo']->value;?>
</p>
				<table id="example" class="display">
					<thead>
						<tr>
							<th width="10">No.</th>
							<th width="300">Nama Produk</th>
							<th width="200">Kategori</th>
							<th width="120">Harga Satuan</th>
							<th width="70">Qty</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['name'] = 'dataLaporan';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataLaporan']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataLaporan']['total']);
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['dataLaporan']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataLaporan']['index']]['no'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['dataLaporan']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataLaporan']['index']]['nama_produk'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['dataLaporan']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataLaporan']['index']]['category'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['dataLaporan']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataLaporan']['index']]['price'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['dataLaporan']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataLaporan']['index']]['qty'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['dataLaporan']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataLaporan']['index']]['subtotal'];?>
</td>
						</tr>
						<?php endfor; endif; ?>
					</tbody>
				</table>
				<br>
				<a href="print.php?start_date=<?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
&end_date=<?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
" target="_blank"><button type="button" class="btn btn-primary">Print PDF</button></a>
				
			<?php }else{ ?>
			
				<h4>Laporan</h4><br>		
				
				<form method="GET" action="Laporan.php">
				<label>Periode Awal</label>
					<input type="text" name="start_date" id="datepicker1">
				<label>Periode Akhir</label>
					<input type="text" name="end_date" id="datepicker2">
				<br>
				<button type="submit" class="btn btn-primary">Go</button>
				</form>
			
			<?php }?>
			
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>