<?php /* Smarty version Smarty-3.1.11, created on 2016-03-01 05:29:39
         compiled from ".\templates\produk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1528256cc781f59c488-51123277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8deb562b304255c3ea50778ce7b85ab19d55be85' => 
    array (
      0 => '.\\templates\\produk.tpl',
      1 => 1456806107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1528256cc781f59c488-51123277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56cc781f680e51_03775688',
  'variables' => 
  array (
    'code' => 0,
    'act' => 0,
    'dataKategori' => 0,
    'dataMerk' => 0,
    'dataSupplier' => 0,
    'dataProduk' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cc781f680e51_03775688')) {function content_56cc781f680e51_03775688($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						Produk baru berhasil disimpan.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='2'){?>
					<div class="alert alert-success">
						Produk berhasil diubah.
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['code']->value=='3'){?>
					<div class="alert alert-success">
						Produk berhasil dihapus.
					</div>	
				<?php }?>
			</div>
						
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='add'||$_smarty_tpl->tpl_vars['act']->value=='edit'){?>
				<script type='text/javascript' src='js/jquery.validate.js'></script>
				<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
				<link rel="stylesheet" type="text/css" href="../css/Ajaxfile-upload.css" />
						
						
					<script type='text/javascript'>
						$(function(){
							$('#frm_product').validate({
								rules:{
									kategori: true,
									merk: true,
									supplier: true,
									nama_produk: true,
									stock:{
										number: true
									},
									price:{
										required: true,
										number: true
									},
									aktif: true
								},
								messages:{
									kategori:{
										required: "This is a required field."
									},
									merk:{
										required: "This is a required field."
									},
									supplier:{
										required: "This is a required field."
									},
									nama_produk:{
										required: "This is a required field."
									},
									price:{
										required: "This is a required field.",
										number: "This is a numeric field."
									},
									stock:{
										number: "This is a numeric field."
									},
									aktif:{
										required: "This is a required field."
									}
								}
							});
						
							// Image 2
							var btnUpload1=$('#me1');
							var mestatus1=$('#mestatus1');
							var files1=$('#files1');
							new AjaxUpload(btnUpload1, {
								action: 'upload_product1.php',
								name: 'uploadfile1',
								onSubmit: function(file, ext){
									 if (! (ext && /^(jpg|jpeg)$/.test(ext))){ 
					                    // extension is not allowed 
										mestatus1.text('Only JPG file are allowed');
										return false;
									}
									//mestatus.html('<img src="ajax-loader.gif" height="16" width="16">');
									mestatus1.html('');
								},
								onComplete: function(file, response){
									//On completion clear the status
									mestatus1.text('');
									//On completion clear the status
									files1.html('');
									//Add uploaded file to list
									if(response!=="error"){
										$('<li></li>').appendTo('#files1').html('<img src="../images/products/'+response+'" alt="" width="70" height="70" style="border-radius: 10px; margin-left: -3px; margin-top:-80px; border: 3px solid #ccc"/><br />').addClass('success1');
										$('<li></li>').appendTo('#produk1').html('<input type="hidden" name="filename1" value="'+response+'">').addClass('nameupload1');
										
									} else{
										$('<li></li>').appendTo('#files1').text(file).addClass('error');
									}
								}
							});
							
							var btnUpload2=$('#me2');
							var mestatus2=$('#mestatus2');
							var files2=$('#files2');
							new AjaxUpload(btnUpload2, {
								action: 'upload_product2.php',
								name: 'uploadfile2',
								onSubmit: function(file, ext){
									 if (! (ext && /^(jpg|jpeg)$/.test(ext))){ 
					                    // extension is not allowed 
										mestatus2.text('Only JPG files are allowed');
										return false;
									}
									mestatus2.html('<img src="../images/ajax-loader.gif" height="16" width="16">');
								},
								onComplete: function(file, response){
									//On completion clear the status
									mestatus2.text('');
									//On completion clear the status
									files2.html('');
									//Add uploaded file to list
									if(response!=="error"){
										$('<li></li>').appendTo('#files2').html('<img src="../images/products/'+response+'" alt="" width="70" height="70" style="border-radius: 10px; margin-left: -3px; margin-top:-80px; border: 3px solid #ccc"/><br />').addClass('success2');
										$('<li></li>').appendTo('#produk2').html('<input type="hidden" name="filename2" value="'+response+'">').addClass('nameupload2');
										
									} else{
										$('<li></li>').appendTo('#files2').text(file).addClass('error');
									}
								}
							});
							
							var btnUpload3=$('#me3');
							var mestatus3=$('#mestatus3');
							var files3=$('#files3');
							new AjaxUpload(btnUpload3, {
								action: 'upload_product3.php',
								name: 'uploadfile3',
								onSubmit: function(file, ext){
									 if (! (ext && /^(jpg|jpeg)$/.test(ext))){ 
					                    // extension is not allowed 
										mestatus3.text('Only JPG files are allowed');
										return false;
									}
									mestatus3.html('<img src="../images/ajax-loader.gif" height="16" width="16">');
								},
								onComplete: function(file, response){
									//On completion clear the status
									mestatus3.text('');
									//On completion clear the status
									files3.html('');
									//Add uploaded file to list
									if(response!=="error"){
										$('<li></li>').appendTo('#files3').html('<img src="../images/products/'+response+'" alt="" width="70" height="70" style="border-radius: 10px; margin-left: -3px; margin-top:-80px; border: 3px solid #ccc"/><br />').addClass('success3');
										$('<li></li>').appendTo('#produk3').html('<input type="hidden" name="filename3" value="'+response+'">').addClass('nameupload3');
										
									} else{
										$('<li></li>').appendTo('#files2').text(file).addClass('error');
									}
								}
							});
							
						});
					</script>
				
			<?php }?>
			
			
			<?php if ($_smarty_tpl->tpl_vars['act']->value=='add'){?>
				<a href="produk.php"><img src="../images/back.png"></a>
				<h4>Tambah Produk</h4>
				<div class="well">
					<form action="produk.php?act=input" method="POST" enctype="multipart/form-data" id="frm_product">
						<label>Kategori</label>
							<select name="kategori" class="required">
								<option value="">Pilih Kategori</label>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['name'] = 'dataKategori';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataKategori']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total']);
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori'];?>
</option>
								<?php endfor; endif; ?>
							</select>
						<label>Merk</label>
							<select name="merk" class="required">
								<option value="">Pilih Merk</label>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['name'] = 'dataMerk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataMerk']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total']);
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk'];?>
</option>
								<?php endfor; endif; ?>
							</select>
						<label>Supplier</label>
							<select name="supplier" class="required">
								<option value="">Pilih Supplier</label>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['name'] = 'dataSupplier';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataSupplier']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total']);
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplier_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplier'];?>
</option>
								<?php endfor; endif; ?>
							</select>
						<label>Nama Produk </label>
							<input type="text" name="nama_produk" class="required">
						<label>Harga </label>
							<input type="text" name="price" class="required">
						<label>Stok </label>
							<input type="text" name="stok" class="number">
						<label>Gambar</label>
							<table>
								<tr value="top">
									<td height="90">
										<div id="me1" style="cursor:pointer; height: 70px; width: 75px;">
											<button class="button_profile"><img src="../images/add.png" width="55" height="50"></button>
												
											<div id="produk1">
												<li class="nameupload1"></li>
											</div>
											<div id="files1">
												<li class="success1"></li>
									        </div>
										</div>
										<span id="mestatus1"></span>
									</td>
									<td>
										<div id="me2" style="cursor:pointer; height: 70px; width: 75px; margin-left: 10px;">
											<button class="button_profile"><img src="../images/add.png" width="50" height="50"></button>
												
											<div id="produk2">
												<li class="nameupload2"></li>
											</div>
											<div id="files2">
												<li class="success2"></li>
									        </div>
										</div>
										<span id="mestatus2"></span>
									</td>
									<td>
										<div id="me3" style="cursor:pointer; height: 70px; width: 75px; margin-left: 10px;">
											<button class="button_profile"><img src="../images/add.png" width="50" height="50"></button>
												
											<div id="produk3">
												<li class="nameupload3"></li>
											</div>
											<div id="files3">
												<li class="success3"></li>
									        </div>
										</div>
										<span id="mestatus3"></span>
									</td>
								</tr>
							</table>
							
						<label>Aktif?</label>
							<select name="aktif" class="required">
								<option value=""></option>
								<option value="Y">Ya</option>
								<option value="N">Tidak</option>
							</select>
						<label>Deskripsi</label>
				        	<textarea name="deskripsi" class="ckeditor"></textarea>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
				</div>
			
			<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='edit'){?>
				<h4>Ubah Produk</h4>
				<div class="well">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['name'] = 'dataProduk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataProduk']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total']);
?>
					<form action="produk.php?act=update" method="POST" enctype="multipart/form-data" id="frm_product">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['product_id'];?>
">
						<label>Kategori</label>
							<select name="kategori" class="required">
								<option value="">Pilih Kategori</label>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['name'] = 'dataKategori';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataKategori']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataKategori']['total']);
?>
									<?php if ($_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori_id']==$_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['kategori_id']){?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori_id'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori'];?>
</option>
									<?php }else{ ?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataKategori']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataKategori']['index']]['kategori'];?>
</option>
									<?php }?>
								<?php endfor; endif; ?>
							</select>
						<label>Merk</label>
							<select name="merk" class="required">
								<option value="">Pilih Merk</label>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['name'] = 'dataMerk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataMerk']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataMerk']['total']);
?>
									<?php if ($_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk_id']==$_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['merk_id']){?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk_id'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk'];?>
</option>
									<?php }else{ ?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataMerk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataMerk']['index']]['merk'];?>
</option>
									<?php }?>
								<?php endfor; endif; ?>
							</select>
						<label>Supplier</label>
							<select name="supplier" class="required">
								<option value="">Pilih Supplier</label>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['name'] = 'dataSupplier';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataSupplier']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataSupplier']['total']);
?>
									<?php if ($_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplier_id']==$_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['supplier_id']){?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplier_id'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplier'];?>
</option>
									<?php }else{ ?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplier_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataSupplier']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataSupplier']['index']]['supplier'];?>
</option>
									<?php }?>
								<?php endfor; endif; ?>
							</select>
						<label>Nama Produk </label>
							<input type="text" name="nama_produk" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['nama_produk'];?>
">
						<label>Harga </label>
							<input type="text" name="price" class="required" value="<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['price'];?>
">
						<label>Stok </label>
							<input type="text" name="stok" value="<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['stock'];?>
">
						<label>Gambar</label>
							<table>
								<tr value="top">
									<td height="90">
										<div id="me1" style="cursor:pointer; height: 70px; width: 75px;">
											<button class="button_profile">
												<?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar1']!=''){?>
													<img src='../images/products/thumb/small_<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar1'];?>
' width='70' height='70' style='border-radius: 15px; margin-left: -10px; margin-bottom: -10px; margin-top: -10px; margin-right: -10px;'>
												<?php }else{ ?>
													<img src='../images/add.png' width='50'>
												<?php }?>
											</button>
												
											<div id="produk1">
												<li class="nameupload1"></li>
											</div>
											<div id="files1">
												<li class="success1">
													<?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar1']!=''){?>													 
														<a href='produk.php?act=delete_image1&id=<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['product_id'];?>
&t=<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar1'];?>
'><img src='../images/delete.jpg' width='20' style='margin-top: 0px;'></a>
													<?php }?>
												</li>
									        </div>
										</div>
										<span id="mestatus1"></span>
									</td>
									<td>
										<div id="me2" style="cursor:pointer; height: 70px; width: 75px; margin-left: 10px;">
											<button class="button_profile">
												<?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar2']!=''){?>
													<img src='../images/products/thumb/small_<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar2'];?>
' width='70' height='70' style='border-radius: 15px; margin-left: -10px; margin-bottom: -10px; margin-top: -10px; margin-right: -10px;'>
												<?php }else{ ?>
													<img src='../images/add.png' width='50'>
												<?php }?>
											</button>
												
											<div id="produk2">
												<li class="nameupload2"></li>
											</div>
											<div id="files2">
												<li class="success2">
													<?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar2']!=''){?>													 
														<a href='produk.php?act=delete_image2&id=<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['product_id'];?>
&t=<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar2'];?>
'><img src='../images/delete.jpg' width='20' style='margin-top: 0px;'></a>
													<?php }?>
												</li>
									        </div>
										</div>
										<span id="mestatus2"></span>
									</td>
									<td>
										<div id="me3" style="cursor:pointer; height: 70px; width: 75px; margin-left: 10px;">
											<button class="button_profile">
												<?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar3']!=''){?>
													<img src='../images/products/thumb/small_<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar3'];?>
' width='70' height='70' style='border-radius: 15px; margin-left: -10px; margin-bottom: -10px; margin-top: -10px; margin-right: -10px;'>
												<?php }else{ ?>
													<img src='../images/add.png' width='50'>
												<?php }?>
											</button>
												
											<div id="produk3">
												<li class="nameupload3"></li>
											</div>
											<div id="files3">
												<li class="success3">
													<?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar3']!=''){?>													 
														<a href='produk.php?act=delete_image3&id=<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['product_id'];?>
&t=<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['gambar3'];?>
'><img src='../images/delete.jpg' width='20' style='margin-top: 0px;'></a>
													<?php }?>
												</li>
									        </div>
										</div>
										<span id="mestatus3"></span>
									</td>
								</tr>
							</table>
							
						<label>Aktif?</label>
							<select name="aktif" class="required">
								<option value=""></option>
								<option value="Y" <?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['active']=='Y'){?> SELECTED <?php }?>>Ya</option>
								<option value="N" <?php if ($_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['active']=='N'){?> SELECTED <?php }?>>Tidak</option>
							</select>
						<label>Deskripsi</label>
				        	<textarea name="deskripsi" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['description'];?>
</textarea>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
					<?php endfor; endif; ?>
				</div>
				
			<?php }else{ ?>
				<h4>Manajemen Produk</h4>
				<div>
					<a href="produk.php?act=add"><button type="button" class="btn btn-primary">+ Tambah Produk</button></a>
				</div><br>		
				<table id="example" class="display">
					<thead>
						<tr>
							<th width='10'>No</th>
							<th width='150'>Kategori</th>
							<th width='150'>Merk</th>
							<th width='150'>Nama Produk</th>
							<th width='100'>Harga</th>
							<th width='50'>Stok</th>
							<th width='50'>Aktif</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['name'] = 'dataProduk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataProduk']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduk']['total']);
?>
							<tr valign='top'>
								<td><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['kategori'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['merk'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['nama_produk'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['price'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['stock'];?>
</td>
								<td align='center'><?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['active'];?>
</td>
								<td><a href='produk.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['product_id'];?>
'><img src='../images/edit.jpg' width='20'></a>
									<a href="produk.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['product_id'];?>
" onclick="return confirm('Anda Yakin ingin menghapus produk <?php echo $_smarty_tpl->tpl_vars['dataProduk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduk']['index']]['nama_produk'];?>
?');"><img src='../images/delete.jpg' width='20'></a>
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