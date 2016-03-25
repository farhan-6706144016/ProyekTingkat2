<?php
// class paging untuk halaman produk
class Paging{
		
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas){
		if(empty($_GET['page'])){
			$posisi=0;
			$_GET['page']=1;
		}
		else{
			$posisi = ($_GET['page']-1) * $batas;
		}
		return $posisi;
		}
		
		// Fungsi untuk menghitung total halaman
		function jumlahHalaman($jmldata, $batas){
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
		}
		
		// Fungsi untuk link halaman 1,2,3 
		function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		$title = strtolower(str_replace(" ", "+", $_GET['title']));
		
		// Link halaman 1,2,3, ...
		$angka = ($halaman_aktif > 3 ? " ... " : " "); 
		for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
		  if ($i < 1)
		  	continue;
			  $angka .= "<a href=kategori-$_GET[id]-$title-$i.html>$i</a>";
		  }
			  $angka .= " <span class=current>$halaman_aktif</span> ";
			  
		    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
		    if($i > $jmlhalaman)
		      break;
			  $angka .= "<a href=kategori-$_GET[id]-$title-$i.html>$i</a>";
		    }
			  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... <a href=kategori-$_GET[id]-$title-$jmlhalaman.html>$jmlhalaman</a> " : " ");
		
		$link_halaman .= "$angka";
		
		return $link_halaman;
	}
}

// class paging untuk halaman cari produk
class PagingCari{
	
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisiCari($batas){
		if(empty($_GET['page'])){
			$posisi=0;
			$_GET['page']=1;
		}
		else{
			$posisi = ($_GET['page']-1) * $batas;
		}
		return $posisi;
		}
		
		// Fungsi untuk menghitung total halaman
		function jumlahHalaman($jmldata, $batas){
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
		}
		
		// Fungsi untuk link halaman 1,2,3 
		function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		$title = strtolower(str_replace(" ", "+", $_GET['keyword']));
		
		// Link ke halaman pertama (first) dan sebelumnya (prev)
		if($halaman_aktif > 1){
			$prev = $halaman_aktif-1;
			$link_halaman .= "<span class=prevnext><a href=search.php?keyword=$title&page=1><< First</a></span> 
		                    <span class=prevnext><a href=search.php?keyword=$title&page=$prev>< Prev</a></span> ";
		}
		else{ 
			$link_halaman .= "<span class=disabled><< First</span> <span class=disabled>< Prev</span>";
		}
		
		// Link halaman 1,2,3, ...
		$angka = ($halaman_aktif > 3 ? " ... " : " "); 
		for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
		  if ($i < 1)
		  	continue;
			  $angka .= "<a href=search.php?keyword=$title&page=$i>$i</a>";
		  }
			  $angka .= " <span class=current>$halaman_aktif</span> ";
			  
		    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
		    if($i > $jmlhalaman)
		      break;
			  $angka .= "<a href=search.php?keyword=$title&page=$i>$i</a>";
		    }
			  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... <a href=search.php?keyword=$title&page=$jmlhalaman>$jmlhalaman</a> " : " ");
		
		$link_halaman .= "$angka";
		
		// Link ke halaman berikutnya (Next) dan terakhir (Last) 
		if($halaman_aktif < $jmlhalaman){
			$next = $halaman_aktif+1;
			$link_halaman .= " <span class=prevnext><a href=search.php?keyword=$title&page=$next>Next ></a></span> 
		                     <span class=prevnext><a href=search.php?keyword=$title&page=$jmlhalaman>Last >></a></span> ";
		}
		else{
			$link_halaman .= "<span class=disabled>Next ></span><span class=disabled>Last >></span>";
		}
		return $link_halaman;
	}
}
?>