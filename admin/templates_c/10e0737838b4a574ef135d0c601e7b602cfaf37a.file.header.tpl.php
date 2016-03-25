<?php /* Smarty version Smarty-3.1.11, created on 2016-03-04 08:16:14
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2249556c961f9d6b744-16538439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1457075772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2249556c961f9d6b744-16538439',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56c961f9d70362_78882164',
  'variables' => 
  array (
    'username' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c961f9d70362_78882164')) {function content_56c961f9d70362_78882164($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Administrator - Khalwahijab</title>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="This site was made using Smarty PHP.">
		<meta name="author" content="Avin Putra">
		
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
		
		<link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
		<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
		
		<script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>
		
		<!-- Demo page code -->
		<style type="text/css">
			#line-chart {
				height:300px;
				width:800px;
				margin: 0px auto;
				margin-top: 1em;
			}
			.brand { font-family: georgia, serif; }
			.brand .first {
				color: #ccc;
				font-style: italic;
			}
			.brand .second {
				color: #fff;
				font-weight: bold;
			}
			
			.error {
				font-size:small; 
				-webkit-border-radius: 4px;
				-moz-border-radius: 4px;
				border-radius: 4px;
		  		border-color: #eed3d7;
		  		color: #b94a48; 
			}
		</style>

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="../favicon.jpg">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
		
		<style type="text/css" title="currentStyle">
			@import "../DataTables/media/css/demo_page.css";
			@import "../DataTables/media/css/demo_table_jui.css";
			@import "../DataTables/examples/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css";
			@import "../DataTables/extras/TableTools/media/css/TableTools_JUI.css";
		</style>
		<script type="text/javascript" charset="utf-8" src="../DataTables/media/js/jquery.js"></script>
		<script type="text/javascript" charset="utf-8" src="../DataTables/media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" src="../DataTables/extras/TableTools/media/js/ZeroClipboard.js"></script>
		<script type="text/javascript" charset="utf-8" src="../DataTables/extras/TableTools/media/js/TableTools.js"></script>
	
		<link rel="stylesheet" href="js/development-bundle/themes/base/jquery.ui.all.css" type="text/css">
		<script type="text/javascript" src="js/development-bundle/ui/jquery.ui.core.js"></script>
		<script type="text/javascript" src="js/development-bundle/ui/jquery.ui.datepicker.js"></script>
		<script type="text/javascript" src="js/development-bundle/ui/jquery.ui.widget.js"></script>
	
		
		<script type="text/javascript" charset="utf-8">
			$(document).ready( function () {
				$('#example').dataTable( {
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				} );
			} );
		</script>
		
		<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
	</head>
	
	
	<!--[if (gt IE 9)|!(IE)]><!-->
	<body class="">
	<!--<![endif]-->
	
	<div class="navbar">
		<div class="navbar-inner">
			<img src="../images/logopt.png">
			<p>
				<b>Selamat datang, <b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b></br>
				Tanggal : <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</b>
			</p>
		</div>
	</div><?php }} ?>