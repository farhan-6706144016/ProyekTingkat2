<?php /* Smarty version Smarty-3.1.11, created on 2016-03-07 13:44:40
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2463356c96172323053-14929419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1457354677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2463356c96172323053-14929419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56c9617234d498_95281536',
  'variables' => 
  array (
    'code' => 0,
    'year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9617234d498_95281536')) {function content_56c9617234d498_95281536($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>

	<!-- General meta information -->
	<title>Administrator - Khalwahijab</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />
	<!-- // General meta information -->
	
	<!-- Load Javascript -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="../js/rainbows.js"></script>
	<!-- // Load Javascipt -->

	<!-- Load stylesheets -->
	<link type="text/css" rel="stylesheet" href="../css/stylelogin.css" media="screen" />
	<!-- // Load stylesheets -->
	
	
	<script>
	
		$(document).ready(function(){
	 
			$("#submit1").hover(
				function() {
					$(this).animate({"opacity": "0"}, "slow");
				},
		
				function() {
					$(this).animate({"opacity": "1"}, "slow");
				}
			);
	 	});
	
	
	</script>
	
	
	<style>
		.alert {
		  padding: 8px 35px 8px 14px;
		  margin-bottom: 20px;
		  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
		  background-color: #fcf8e3;
		  border: 1px solid #fbeed5;
		  -webkit-border-radius: 4px;
		  -moz-border-radius: 4px;
		  border-radius: 4px;
		  color: #c09853;
		}
		.alert h4 {
		  margin: 0;
		}
		.alert .close {
		  position: relative;
		  top: -2px;
		  right: -21px;
		  line-height: 20px;
		}
		.alert-success {
		  background-color: #dff0d8;
		  border-color: #d6e9c6;
		  color: #468847;
		}
		.alert-danger,
		.alert-error {
		  background-color: #f2dede;
		  border-color: #eed3d7;
		  color: #b94a48;
		}
		.alert-info {
		  background-color: #d9edf7;
		  border-color: #bce8f1;
		  color: #3a87ad;
		}
		.alert-block {
		  padding-top: 14px;
		  padding-bottom: 14px;
		}
		.alert-block > p,
		.alert-block > ul {
		  margin-bottom: 0;
		}
		.alert-block p + p {
		  margin-top: 5px;
		}
	</style>
	
</head>
<body>
	<div id = "image">
		<img src="../images/logopt.png">
	</div>
	<div id="wrapper">
		<?php if ($_smarty_tpl->tpl_vars['code']->value=='1'){?>
			<div class="alert alert-danger">
				Username (E-mail) atau Password salah.
			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
			<div class="alert alert-success">
				Anda telah keluar (Logout)
			</div>
		<?php }?>
		
		<div id="wrappertop"></div>
		<div id="wrappermiddle">
			<h2>Login</h2>
			<form method="POST" action="index.php?act=login">
			<div id="username_input">

				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
					<input type="text" name="username" id="url" value="Username" onclick="this.value = ''">
					<img id="url_user" src="../images/mailicon.png" alt="">
				
				</div>

				<div id="username_inputright"></div>

			</div>

			<div id="password_input">

				<div id="password_inputleft"></div>

				<div id="password_inputmiddle">
					<input type="password" name="password" id="url" value="Password" onclick="this.value = ''">
					<img id="url_password" src="../images/passicon.png" alt="">
				</div>

				<div id="password_inputright"></div>

			</div>

			<div id="submit">
				<input type="image" src="../images/submit_hover.png" id="submit1" value="Sign In">
				<input type="image" src="../images/submit.png" id="submit2" value="Sign In">
			</div>
			</form>

			<div id="links_left"></div>
			<div id="links_right"></div>

		</div>

		<div id="wrapperbottom"></div>
		
		<div id="powered">
		<p>Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 <b>khalwahijab</b></p>
		</div>
	</div>

</body>
</html><?php }} ?>