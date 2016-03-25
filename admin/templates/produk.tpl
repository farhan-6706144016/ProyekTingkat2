{include file="header.tpl"}

{include file="navigation.tpl"}

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
				{if $code eq '1'}
					<div class="alert alert-success">
						Produk baru berhasil disimpan.
					</div>
				{/if}
				{if $code eq '2'}
					<div class="alert alert-success">
						Produk berhasil diubah.
					</div>
				{/if}
				{if $code eq '3'}
					<div class="alert alert-success">
						Produk berhasil dihapus.
					</div>	
				{/if}
			</div>
						
			{if $act eq 'add' || $act eq 'edit'}
				<script type='text/javascript' src='js/jquery.validate.js'></script>
				<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
				<link rel="stylesheet" type="text/css" href="../css/Ajaxfile-upload.css" />
						
				{literal}		
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
				{/literal}
			{/if}
			
			
			{if $act eq 'add'}
				<a href="produk.php"><img src="../images/back.png"></a>
				<h4>Tambah Produk</h4>
				<div class="well">
					<form action="produk.php?act=input" method="POST" enctype="multipart/form-data" id="frm_product">
						<label>Kategori</label>
							<select name="kategori" class="required">
								<option value="">Pilih Kategori</label>
								{section name=dataKategori loop=$dataKategori}
									<option value="{$dataKategori[dataKategori].kategori_id}">{$dataKategori[dataKategori].kategori}</option>
								{/section}
							</select>
						<label>Merk</label>
							<select name="merk" class="required">
								<option value="">Pilih Merk</label>
								{section name=dataMerk loop=$dataMerk}
									<option value="{$dataMerk[dataMerk].merk_id}">{$dataMerk[dataMerk].merk}</option>
								{/section}
							</select>
						<label>Supplier</label>
							<select name="supplier" class="required">
								<option value="">Pilih Supplier</label>
								{section name=dataSupplier loop=$dataSupplier}
									<option value="{$dataSupplier[dataSupplier].supplier_id}">{$dataSupplier[dataSupplier].supplier}</option>
								{/section}
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
			
			{elseif $act == 'edit'}
				<h4>Ubah Produk</h4>
				<div class="well">
					{section name=dataProduk loop=$dataProduk}
					<form action="produk.php?act=update" method="POST" enctype="multipart/form-data" id="frm_product">
						<input type="hidden" name="id" value="{$dataProduk[dataProduk].product_id}">
						<label>Kategori</label>
							<select name="kategori" class="required">
								<option value="">Pilih Kategori</label>
								{section name=dataKategori loop=$dataKategori}
									{if $dataKategori[dataKategori].kategori_id == $dataProduk[dataProduk].kategori_id}
										<option value="{$dataKategori[dataKategori].kategori_id}" SELECTED>{$dataKategori[dataKategori].kategori}</option>
									{else}
										<option value="{$dataKategori[dataKategori].kategori_id}">{$dataKategori[dataKategori].kategori}</option>
									{/if}
								{/section}
							</select>
						<label>Merk</label>
							<select name="merk" class="required">
								<option value="">Pilih Merk</label>
								{section name=dataMerk loop=$dataMerk}
									{if $dataMerk[dataMerk].merk_id == $dataProduk[dataProduk].merk_id}
										<option value="{$dataMerk[dataMerk].merk_id}" SELECTED>{$dataMerk[dataMerk].merk}</option>
									{else}
										<option value="{$dataMerk[dataMerk].merk_id}">{$dataMerk[dataMerk].merk}</option>
									{/if}
								{/section}
							</select>
						<label>Supplier</label>
							<select name="supplier" class="required">
								<option value="">Pilih Supplier</label>
								{section name=dataSupplier loop=$dataSupplier}
									{if $dataSupplier[dataSupplier].supplier_id == $dataProduk[dataProduk].supplier_id}
										<option value="{$dataSupplier[dataSupplier].supplier_id}" SELECTED>{$dataSupplier[dataSupplier].supplier}</option>
									{else}
										<option value="{$dataSupplier[dataSupplier].supplier_id}">{$dataSupplier[dataSupplier].supplier}</option>
									{/if}
								{/section}
							</select>
						<label>Nama Produk </label>
							<input type="text" name="nama_produk" class="required" value="{$dataProduk[dataProduk].nama_produk}">
						<label>Harga </label>
							<input type="text" name="price" class="required" value="{$dataProduk[dataProduk].price}">
						<label>Stok </label>
							<input type="text" name="stok" value="{$dataProduk[dataProduk].stock}">
						<label>Gambar</label>
							<table>
								<tr value="top">
									<td height="90">
										<div id="me1" style="cursor:pointer; height: 70px; width: 75px;">
											<button class="button_profile">
												{if $dataProduk[dataProduk].gambar1 != ''}
													<img src='../images/products/thumb/small_{$dataProduk[dataProduk].gambar1}' width='70' height='70' style='border-radius: 15px; margin-left: -10px; margin-bottom: -10px; margin-top: -10px; margin-right: -10px;'>
												{else}
													<img src='../images/add.png' width='50'>
												{/if}
											</button>
												
											<div id="produk1">
												<li class="nameupload1"></li>
											</div>
											<div id="files1">
												<li class="success1">
													{if $dataProduk[dataProduk].gambar1 != ''}													 
														<a href='produk.php?act=delete_image1&id={$dataProduk[dataProduk].product_id}&t={$dataProduk[dataProduk].gambar1}'><img src='../images/delete.jpg' width='20' style='margin-top: 0px;'></a>
													{/if}
												</li>
									        </div>
										</div>
										<span id="mestatus1"></span>
									</td>
									<td>
										<div id="me2" style="cursor:pointer; height: 70px; width: 75px; margin-left: 10px;">
											<button class="button_profile">
												{if $dataProduk[dataProduk].gambar2 != ''}
													<img src='../images/products/thumb/small_{$dataProduk[dataProduk].gambar2}' width='70' height='70' style='border-radius: 15px; margin-left: -10px; margin-bottom: -10px; margin-top: -10px; margin-right: -10px;'>
												{else}
													<img src='../images/add.png' width='50'>
												{/if}
											</button>
												
											<div id="produk2">
												<li class="nameupload2"></li>
											</div>
											<div id="files2">
												<li class="success2">
													{if $dataProduk[dataProduk].gambar2 != ''}													 
														<a href='produk.php?act=delete_image2&id={$dataProduk[dataProduk].product_id}&t={$dataProduk[dataProduk].gambar2}'><img src='../images/delete.jpg' width='20' style='margin-top: 0px;'></a>
													{/if}
												</li>
									        </div>
										</div>
										<span id="mestatus2"></span>
									</td>
									<td>
										<div id="me3" style="cursor:pointer; height: 70px; width: 75px; margin-left: 10px;">
											<button class="button_profile">
												{if $dataProduk[dataProduk].gambar3 != ''}
													<img src='../images/products/thumb/small_{$dataProduk[dataProduk].gambar3}' width='70' height='70' style='border-radius: 15px; margin-left: -10px; margin-bottom: -10px; margin-top: -10px; margin-right: -10px;'>
												{else}
													<img src='../images/add.png' width='50'>
												{/if}
											</button>
												
											<div id="produk3">
												<li class="nameupload3"></li>
											</div>
											<div id="files3">
												<li class="success3">
													{if $dataProduk[dataProduk].gambar3 != ''}													 
														<a href='produk.php?act=delete_image3&id={$dataProduk[dataProduk].product_id}&t={$dataProduk[dataProduk].gambar3}'><img src='../images/delete.jpg' width='20' style='margin-top: 0px;'></a>
													{/if}
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
								<option value="Y" {if $dataProduk[dataProduk].active == 'Y'} SELECTED {/if}>Ya</option>
								<option value="N" {if $dataProduk[dataProduk].active == 'N'} SELECTED {/if}>Tidak</option>
							</select>
						<label>Deskripsi</label>
				        	<textarea name="deskripsi" class="ckeditor">{$dataProduk[dataProduk].description}</textarea>
					<br><br>	
					<div>
						<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
					</div>
					</form>
					{/section}
				</div>
				
			{else}
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
						{section name=dataProduk loop=$dataProduk}
							<tr valign='top'>
								<td>{$dataProduk[dataProduk].no}</td>
								<td>{$dataProduk[dataProduk].kategori}</td>
								<td>{$dataProduk[dataProduk].merk}</td>
								<td>{$dataProduk[dataProduk].nama_produk}</td>
								<td>{$dataProduk[dataProduk].price}</td>
								<td>{$dataProduk[dataProduk].stock}</td>
								<td align='center'>{$dataProduk[dataProduk].active}</td>
								<td><a href='produk.php?act=edit&id={$dataProduk[dataProduk].product_id}'><img src='../images/edit.jpg' width='20'></a>
									<a href="produk.php?act=delete&id={$dataProduk[dataProduk].product_id}" onclick="return confirm('Anda Yakin ingin menghapus produk {$dataProduk[dataProduk].nama_produk}?');"><img src='../images/delete.jpg' width='20'></a>
								</td>
							</tr>
						{/section}
					</tbody>
				</table>
			
			{/if}
			
		</div>
	</div>
</div>

{include file="footer.tpl"}