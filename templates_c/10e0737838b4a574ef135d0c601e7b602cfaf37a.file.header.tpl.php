<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 09:19:18
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:347056d44971c3c920-76154384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1457338638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '347056d44971c3c920-76154384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d44971c46073_00095712',
  'variables' => 
  array (
    'nama_produk' => 0,
    'gambar' => 0,
    'deskripsi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d44971c46073_00095712')) {function content_56d44971c46073_00095712($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>Khalwahijab</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['nama_produk']->value;?>
">
	<meta property="og:image" content="images/products/thumb/small_<?php echo $_smarty_tpl->tpl_vars['gambar']->value;?>
">
	<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['deskripsi']->value;?>
">
	
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="templates/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="templates/css/search.css" type="text/css" media="all" />
	<script src="templates/js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	
	<script src="templates/js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="templates/js/functions.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript" src="templates/js/script.js"></script>
	
	<style>
	.error {
		font-size:small; 
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
  		border-color: #eed3d7;
  		color: #b94a48; 
	}
	</style>


</head>
<body>

<div id="wrapper">
	<div class="inner">
		<div id="header">
			<div class="header-inner">
				<div class="shell">
					<img style="float : left" src="images/logopt.png" height="90">
					<?php echo $_smarty_tpl->getSubTemplate ("topmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</div>
		<div class="batas">
			<div class="strip"></div>
		</div>
		</div>
		<div class="shell">
			<div id="main"><?php }} ?>