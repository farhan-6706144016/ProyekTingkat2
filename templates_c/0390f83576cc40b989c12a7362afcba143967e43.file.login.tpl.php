<?php /* Smarty version Smarty-3.1.11, created on 2016-03-06 17:14:49
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2855856d995f79f7d85-86132926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1457280886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2855856d995f79f7d85-86132926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d995f7a21214_27789814',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d995f7a21214_27789814')) {function content_56d995f7a21214_27789814($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php echo $_smarty_tpl->getSubTemplate ("leftmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
		
		<script type='text/javascript' src='templates/js/jquery.validate.js'></script>
			
		
			<script type='text/javascript'>
				$(document).ready(function() {
					$('#frm_login').validate({
						rules:{
							email: true,
							password: true
						},
						messages:{
							email:{
								required: "This is a required field."
							},
							password:{
								required: "This is a required field."
							}
						}
					});
				});
			</script>
		
		
		<div id="login">
		
		<?php if ($_smarty_tpl->tpl_vars['result']->value=='1'){?>
			<p class='error'><b>Email dan password Anda salah.</b></p>
		<?php }?>
		<h2><span class="fontawesome-lock"></span>Login</h2>

		<form action="login.php?act=login" method="POST" id="frm_login">

			<fieldset>

				<p><label for="email">E-mail address</label></p>
				<p><input type="email" class="required" name="email" id="email" placeholder="Email"></p>

				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" class="required" name="password" placeholder="Password">

				<p><input type="submit" value="Login"></p>

			</fieldset>

		</form>
		<br>
		<center>
			<p>Lupa Password? Klik <a href="#">disini</a>. </p>
			<p>Mendaftar, klik <a href="register.html">disini</a>.</p>
		</center>
	</div>				
</div>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>