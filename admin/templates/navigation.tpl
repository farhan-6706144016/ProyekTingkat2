
<div class="sidebar-nav">
	<a href="home.php" class="nav-header"><i class="icon-dashboard"></i>Home</a>
	
	{if $level == '2' || $level == '1'}
	<a href="#master-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-briefcase"></i>Master Data <i class="icon-chevron-up"></i></a>
	<ul id="master-menu" class="nav nav-list collapse">
		<li><a href="supplier.php">Supplier</a></li>
		<li><a href="kategori.php">Kategori</a></li>
		<li><a href="merk.php">Merk</a></li>
		<li><a href="produk.php">Produk</a></li>
		<li><a href="video.php">Video</a></li>
		<li><a href="petugas.php">Petugas</a></li>
	</ul>
	{/if}
	
	<a href="transaksi.php" class="nav-header"><i class="icon-briefcase"></i>Transaksi</a>
	
	<a href="member.php" class="nav-header"><i class="icon-briefcase"></i>Member</a>
	
	{if $level == '2' || $level == '1'}

	<a href="laporan.php" class="nav-header"><i class="icon-briefcase"></i>Laporan Penjualan</a>

	{/if}
	<a href="ubah_password.php" class="nav-header collapsed"><i class="icon-briefcase"></i>Ubah Password</i></a>
	<a href="logout.php" class="nav-header collapsed"><i class="icon-briefcase"></i>Logout</i></a>
</div>