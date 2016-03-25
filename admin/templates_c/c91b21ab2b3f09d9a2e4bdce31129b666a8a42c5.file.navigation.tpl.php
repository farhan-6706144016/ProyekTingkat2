<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 09:37:21
         compiled from ".\templates\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311656c96252446526-41601385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c91b21ab2b3f09d9a2e4bdce31129b666a8a42c5' => 
    array (
      0 => '.\\templates\\navigation.tpl',
      1 => 1457339835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311656c96252446526-41601385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56c9625246cdc6_79505100',
  'variables' => 
  array (
    'level' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9625246cdc6_79505100')) {function content_56c9625246cdc6_79505100($_smarty_tpl) {?>
<div class="sidebar-nav">
	<a href="home.php" class="nav-header"><i class="icon-dashboard"></i>Home</a>
	
	<?php if ($_smarty_tpl->tpl_vars['level']->value=='2'||$_smarty_tpl->tpl_vars['level']->value=='1'){?>
	<a href="#master-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-briefcase"></i>Master Data <i class="icon-chevron-up"></i></a>
	<ul id="master-menu" class="nav nav-list collapse">
		<li><a href="supplier.php">Supplier</a></li>
		<li><a href="kategori.php">Kategori</a></li>
		<li><a href="merk.php">Merk</a></li>
		<li><a href="produk.php">Produk</a></li>
		<li><a href="video.php">Video</a></li>
		<li><a href="petugas.php">Petugas</a></li>
	</ul>
	<?php }?>
	
	<a href="transaksi.php" class="nav-header"><i class="icon-briefcase"></i>Transaksi</a>
	
	<a href="member.php" class="nav-header"><i class="icon-briefcase"></i>Member</a>
	
	<?php if ($_smarty_tpl->tpl_vars['level']->value=='2'||$_smarty_tpl->tpl_vars['level']->value=='1'){?>

	<a href="laporan.php" class="nav-header"><i class="icon-briefcase"></i>Laporan Penjualan</a>

	<?php }?>
	<a href="ubah_password.php" class="nav-header collapsed"><i class="icon-briefcase"></i>Ubah Password</i></a>
	<a href="logout.php" class="nav-header collapsed"><i class="icon-briefcase"></i>Logout</i></a>
</div><?php }} ?>