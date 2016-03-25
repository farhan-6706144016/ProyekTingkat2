<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 09:19:30
         compiled from ".\templates\topmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1476756d44971c70754-47851204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5523ef8c4ffa1d8e46fdf1aa89b5e4587130b985' => 
    array (
      0 => '.\\templates\\topmenu.tpl',
      1 => 1457338768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1476756d44971c70754-47851204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d44971c7afc1_14854913',
  'variables' => 
  array (
    'subt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d44971c7afc1_14854913')) {function content_56d44971c7afc1_14854913($_smarty_tpl) {?><div id="account">
	<a class="view-account" title="Lihat Keranjang Belanja" href="#">Keranjang Belanja</a>
	<span>Total: <strong>Rp. <?php echo $_smarty_tpl->tpl_vars['subt']->value;?>
</strong></span>
	<div class="cl">&nbsp;</div>
</div>
<div id="navigation">
	<ul>
		<li><a href="home" title="Home"><span>Home</span></a></li>
		<li><a href="cara-pembelian.html" title="Cara Pembelian"><span>Cara Pembelian</span></a></li>
		<li><a href="tutorial.html" title="tutorial"><span>Tutorial</span></a></li>
		<li><a href="#" title="Login"><span>Login</span></a></li>
		<li><a href="#" title="Login"><span>Register</span></a></li>
	</ul>
	<div class="cl">&nbsp;</div>
</div>
<div class="cl">&nbsp;</div><?php }} ?>