<?php
include "header.php";
$page = "tutorial.tpl";

$limit = 2;
$next = $_GET['next'];
if(empty($next)){
	$posisi = 0;
	$next = 1;
}else{
	$posisi = ($next - 1) * $limit;
}

$video = mysql_query("SELECT * FROM video WHERE status = 'Y' ORDER BY video_id DESC LIMIT $posisi,$limit");
$no = 1 + $posisi;
while ($dtVideo = mysql_fetch_array($video)){
	
	$dataVideo[] = array(	'no' => $no,
							'video_id' => $dtVideo['video_id'],
							'judul_video' => $dtVideo['judul_video'],
							'video' => $dtVideo['video']);
	
	$no++;
}

$jmldata = mysql_num_rows(mysql_query("SELECT * FROM video WHERE status = 'Y'"));
$jmlhal = ceil($jmldata/$limit);

for ($i=1; $i <= $jmlhal; $i++) {
	if ($i == $next) {
		$url = "yes";
	} else {
		$url = "no";
	}
	$num[] = array(	'i' => $i,
					'url' => $url );
	$smarty -> assign("num",$num);
}

$smarty->assign("dataVideo", $dataVideo);

include "footer.php";
?>