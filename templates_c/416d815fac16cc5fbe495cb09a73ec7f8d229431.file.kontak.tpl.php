<?php /* Smarty version Smarty-3.1.11, created on 2016-03-04 13:55:52
         compiled from ".\templates\kontak.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2254456d985d8a7b3f1-77243496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '416d815fac16cc5fbe495cb09a73ec7f8d229431' => 
    array (
      0 => '.\\templates\\kontak.tpl',
      1 => 1457096123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2254456d985d8a7b3f1-77243496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d985d8aea487_32166907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d985d8aea487_32166907')) {function content_56d985d8aea487_32166907($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php echo $_smarty_tpl->getSubTemplate ("leftmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div class="post">
		<script type='text/javascript' src='templates/js/jquery.validate.js'></script>
			
		
			<script type='text/javascript'>
				$(document).ready(function() {
					$('#frm_kontak').validate({
						rules:{
							nama: true,
							email: true,
							subjek: true,
							pesan: true
						},
						messages:{
							nama:{
								required: "This is a required field."
							},
							email:{
								required: "This is a required field.",
								email: "Email format is wrong."
							},
							subjek:{
								required: "This is a required field."
							},
							pesan:{
								required: "This is a required field."
							}
						}
					});
				});
			</script>
		
		
		<div id="login">
		
		<?php if ($_smarty_tpl->tpl_vars['result']->value=='1'){?>
			<div class="messagesuccess"><h3>Terimakasih telah menghubungi. Tunggu balasan via Email.</h3></div>
		<?php }?>
		<h2><span class="fontawesome-lock"></span>Kontak:</h2>

		<form action="kontak.php?act=submit" method="POST" id="frm_kontak">

			<fieldset>
				<p><label for="nama">Nama</label></p>
				<p><input type="text" class="required" name="nama" id="nama" placeholder="Nama" style="background-color: #EEEEEE; color: #777777; padding: 4px 10px; width: 328px;"></p>
				
				<p><label for="email">E-mail</label></p>
				<p><input type="email" class="required" name="email" id="email" placeholder="Email"></p>
				
				<p><label for="subjek">Subjek</label></p>
				<p><input type="text" class="required" name="subjek" id="subjek" placeholder="Subjek" style="background-color: #EEEEEE; color: #777777; padding: 4px 10px; width: 328px;"></p>
				
				<p><label for="pesan">Pesan</label></p>
				<p><textarea name="pesan" cols="40" rows="5" class="required" style="background-color: #EEEEEE; color: #777777; padding: 4px 10px; width: 328px;"></textarea></p>

				<p><input type="submit" value="Kirim"></p>

			</fieldset>

		</form>
	</div> 
	</div>
						
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>