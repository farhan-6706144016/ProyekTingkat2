<?php /* Smarty version Smarty-3.1.11, created on 2016-03-04 07:57:14
         compiled from ".\templates\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1521556d3c29b71cbe0-40634319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d1e5891599f8ad2f3de50c07ac5ae3329ee7a8' => 
    array (
      0 => '.\\templates\\user.tpl',
      1 => 1457074568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1521556d3c29b71cbe0-40634319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56d3c29b799676_42972596',
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'dataUser' => 0,
    'lev' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3c29b799676_42972596')) {function content_56d3c29b799676_42972596($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						Pengguna baru berhasil disimpan.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-success">
						Pengguna berhasil diubah.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						Pengguna berhasil dihapus.
					</div>	
				<?php }?>
			</div>
			
			<script type='text/javascript' src='js/jquery.validate.js'></script>
			
			
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#frm_user').validate({
							rules:{
								nama: true,
								email: true,
								username: true,
								level: true,
								phone:{
									number: true
								}
							},
							messages:{
								nama:{
									required: "This is a required field."
								},
								email:{
									required: "This is a required field.",
									email: "Email format is wrong."
								},
								username:{
									required: "This is a required field."
								},
								level:{
									required: "This is a required field."
								},
								phone:{
									number: "This is a number field."
								}
							}
						});
					});
				</script>
			
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='add'||$_smarty_tpl->tpl_vars['act']->value=='edit'){?>
				<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
				<link rel="stylesheet" type="text/css" href="../css/Ajaxfile-upload.css" />
						
				
					<script type='text/javascript'>
						$(function(){
							var btnUpload=$('#me');
							var mestatus=$('#mestatus');
							var files=$('#files');
							new AjaxUpload(btnUpload, {
								action: 'upload_user.php',
								name: 'uploadfile',
								onSubmit: function(file, ext){
									 if (! (ext && /^(jpg|jpeg)$/.test(ext))){ 
					                   mestatus.text('Only JPG files are allowed');
										return false;
									}
									mestatus.html('<img src="ajax-loader.gif" height="16" width="16">');
								},
								onComplete: function(file, response){
									mestatus.text('');
									files.html('');
									if(response==="success"){
										$('<li></li>').appendTo('#files').html('<img src="../images/user/bukuit_'+file+'" alt="" width="120" /><br />').addClass('success');
										$('<li></li>').appendTo('#user').html('<input type="hidden" name="filename" value="bukuit_'+file+'">').addClass('nameupload');
										
									} else{
										$('<li></li>').appendTo('#files').text(file).addClass('error');
									}
								}
							});
							
						});
					</script>
				
			<?php }?>
			
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='add'){?>
				<a href="user.php"><img src="../images/back.png"></a>
				<h4>Tambah User</h4>
				<div class="well">
					<form action="user.php?act=input" method="POST" enctype="multipart/form-data" id="frm_user">
						<label>Nama </label>
							<input type="text" name="nama" class="required">
						<label>Email </label>
							<input type="email" name="email" class="required">
						<label>Username </label>
							<input type="text" name="username" class="required">
						<label>Phone </label>
							<input type="text" name="phone" class="number">
						<label>Alamat </label>
							<textarea name="alamat" rows="6" cols="50"></textarea>	
						<label>Level?</label>
							<select name="level">
								<option value=""></option>
								<option value="2">Administrator</option>
								<option value="3">Staff</option>
							</select>
						<label>Foto</label>
							<div id="me" class="styleall" style="cursor:pointer;">
								<label>
									<button class="btn btn-primary">Browse</button>
								</label>
							</div>
							<span id="mestatus" ></span>
							<div id="user">
								<li class="nameupload"></li>
							</div>
							<div id="files">
				              <li class="success">
				              </li>
				        	</div>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				</div>
			
			<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='edit'){?>
				<h4>Ubah Pengguna</h4>
				<div class="well">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['name'] = 'dataUser';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataUser']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['total']);
?>
					<form action="user.php?act=update" method="POST" enctype="multipart/form-data" id="frm_user">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['user_id'];?>
">
						<label>Nama </label>
							<input type="text" name="nama" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['nama'];?>
">
						<label>Email </label>
							<input type="text" name="email" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['email'];?>
">
						<label>Username </label>
							<input type="text" name="username" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['username'];?>
">
						<label>Phone </label>
							<input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['phone'];?>
" class="number">
						<label>Alamat </label>
							<textarea name="alamat" rows="6" cols="50"><?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['alamat'];?>
</textarea>	
						<label>Level</label>
							<select name="level">
								<option value=""></option>
								<option value="2" <?php if ($_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['level']=='2'){?> SELECTED <?php }?>>Administrator</option>
								<option value="3" <?php if ($_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['level']=='3'){?> SELECTED <?php }?>>Staff</option>
							</select>
						<label>Foto</label>
							<div id="me" class="styleall" style="cursor:pointer;">
								<label>
									<button class="btn btn-primary">Browse</button>
								</label>
							</div>
							<span id="mestatus" ></span>
							<div id="user">
								<li class="nameupload"></li>
							</div>
							<div id="files">
								<li class="success">
									<?php if ($_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['photo']!=''){?>
										<img src="../images/user/<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['photo'];?>
" width="80">
									<?php }?>
								</li>
				        	</div>
						<br><br>	
						<div>
							<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan Perubahan</button>
						</div>
					</form>
				<?php endfor; endif; ?>
				</div>
				
			<?php }else{ ?>
				<h4>Manajemen Pengguna</h4>
				<div>
					<a href="user.php?act=add"><button type="button" class="btn btn-primary">+ Tambah User</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='90'>Foto</th>
							<th width='150'>Nama</th>
							<th width='150'>Username</th>
							<th width='200'>Email</th>
							<th width='100'>Phone</th>
							<th width='150'>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['name'] = 'dataUser';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataUser']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataUser']['total']);
?>
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['no'];?>
</td>
								<td align='center'>
									<?php if ($_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['photo']!=''){?>
										<img src='../images/user/thumb/<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['photo'];?>
' width='80'>
									<?php }?>
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['nama'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['username'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['email'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['phone'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['level'];?>
</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['lev']->value=='1'){?>
										<a href='user.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['user_id'];?>
'><img src='../images/edit.jpg' width='20'></a>
										<a href="user.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['user_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['nama'];?>
?');"><img src='../images/delete.jpg' width='20'></a>
										
									<?php }else{ ?>
										<?php if ($_smarty_tpl->tpl_vars['lev']->value=='2'&&$_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['levelori']=='3'){?>
											<a href='user.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['user_id'];?>
'><img src='../images/edit.jpg' width='20'></a>
											<a href="user.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['user_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus <?php echo $_smarty_tpl->tpl_vars['dataUser']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataUser']['index']]['nama'];?>
?');"><img src='../images/delete.jpg' width='20'></a>
										<?php }?> 
									<?php }?>
									
								</td>
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