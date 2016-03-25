<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 08:56:32
         compiled from ".\templates\transaksi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2546356d3d2447e8e95-10161999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba46a21f090fcf79607756596af40fe90a233385' => 
    array (
      0 => '.\\templates\\transaksi.tpl',
      1 => 1457337390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2546356d3d2447e8e95-10161999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d3d24485d9e6_33557783',
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'faktur' => 0,
    'statuslower' => 0,
    'status' => 0,
    'ekspedisi' => 0,
    'no_resi' => 0,
    'dataCustomer' => 0,
    'dataOrder' => 0,
    'qty' => 0,
    'subtotal' => 0,
    'grandtotal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3d24485d9e6_33557783')) {function content_56d3d24485d9e6_33557783($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						Data order berhasil diupdate.
					</div>
				<?php }?>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='view'){?>
				<h4>Detail Order</h4>
				
				<form method="POST" action="sales.php?act=update">
					<input type="hidden" name="nofaktur" value="<?php echo $_smarty_tpl->tpl_vars['faktur']->value;?>
">
					<label>Status: <b><?php echo $_smarty_tpl->tpl_vars['statuslower']->value;?>
</b></label>
					<label>Ubah Status Menjadi: </label>
						<select name="status">
							<?php if ($_smarty_tpl->tpl_vars['status']->value=='1'){?>
								<option value="2">Arsip</option>
							<?php }else{ ?>
								<option value="1">Baru</option>
							<?php }?>
						</select>
					<label>Ekspedisi</label>
						<input type="text" name="ekspedisi" placeholder="Layanan Ekspedisi" value="<?php echo $_smarty_tpl->tpl_vars['ekspedisi']->value;?>
">
					<label>No. Resi</label>
						<input type="text" name="no_resi" placeholder="Nomor Resi" value="<?php echo $_smarty_tpl->tpl_vars['no_resi']->value;?>
">
						<input type="submit" name="submit" value="Ubah Status">
				</form>
				<div class="well">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['name'] = 'dataCustomer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataCustomer']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataCustomer']['total']);
?>
						<label>Nama </label>
							<p><?php echo $_smarty_tpl->tpl_vars['dataCustomer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCustomer']['index']]['nama'];?>
</p>
						<label>Alamat </label>
							<p><?php echo $_smarty_tpl->tpl_vars['dataCustomer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCustomer']['index']]['alamat'];?>
</p>
						<label>Kota </label>
							<p><?php echo $_smarty_tpl->tpl_vars['dataCustomer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCustomer']['index']]['nama_kota'];?>
</p>
						<label>Phone </label>
							<p><?php echo $_smarty_tpl->tpl_vars['dataCustomer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCustomer']['index']]['phone'];?>
</p>
						<label>Email </label>
							<p><?php echo $_smarty_tpl->tpl_vars['dataCustomer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataCustomer']['index']]['email'];?>
</p>
					<?php endfor; endif; ?>
				</div>
				
				<table class='table'>
					<tr class='tr'>
						<th class='th' width="10">No.</th>
						<th class='th' width="70">Gambar</th>
						<th class='th' width="250">Nama Produk</th>
						<th class='th' width="100">Berat (Kg)</th>
						<th class='th' width="60">Qty</th>
						<th class='th' width="100">Harga</th>
						<th class='th' width="100">Subtotal</th>
					</tr>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['name'] = 'dataOrder';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataOrder']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['total']);
?>
					<tr class='tr'>
						<td class='td'><?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['no'];?>
</td>
						<td class='td'><img src="../images/products/thumb/small_<?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['gambar1'];?>
" width="60"></td>
						<td class='td'><a href="../detailproduk-<?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['product_id'];?>
-<?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['namalower'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['nama_produk'];?>
</a></td>
						<td class='td'><?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['berat'];?>
</td>
						<td class='td'><?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['qty'];?>
</td>
						<td class='td'>Rp. <?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['price'];?>
</td>
						<td class='td'>Rp. <?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['subtotal'];?>
</td>
					</tr>
					<?php endfor; endif; ?>
					<tr>
						<td class='td' colspan='3'></td>
						<td class='td'><?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
</td>
						<td class='td'>Total</td>
						<td class='td'><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
					</tr>
					<tr>
						<td class='td' colspan='5'></td>
						<td class='td'><b>Total</b></td>
						<td class='td'><?php echo $_smarty_tpl->tpl_vars['grandtotal']->value;?>
</td>
					</tr>
				</table>
				
			<?php }else{ ?>
				<h4>Data Penjualan</h4><br>
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='150'>Tanggal</th>
							<th width='150'>No Faktur</th>
							<th width='250'>Nama Konsumen</th>
							<th width='150'>Total</th>
							<th width='150'>Status</th>
							<th width="100">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['name'] = 'dataOrder';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataOrder']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataOrder']['total']);
?>
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['tanggal'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['nofaktur'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['nama'];?>
</td>
								<td>Rp. <?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['grandtotal'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['status'];?>
</td>
								<td><a href='sales.php?act=view&id=<?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['nofaktur'];?>
&mid=<?php echo $_smarty_tpl->tpl_vars['dataOrder']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataOrder']['index']]['member_id'];?>
'><img src='../images/view.png' width='20'></a></td>
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