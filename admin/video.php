<?php
include "header.php";
session_start();
$page = "video.tpl";

if ($_SESSION['username'] == '' && $_SESSION['passwd'] == ''){
	echo "You have not authorization for access the modules.";
	exit();
}
else{
	
	$act = $_GET['act'];
	
	if ($act == 'input'){
		$created_date = date('Y-m-d H:i:s');

		mysql_query("INSERT INTO video (	judul_video,
											video,
											status,
											created_date,
											created_userid,
											modified_date,
											modified_userid)
								VALUES	(	'$_POST[judul_video]',
											'$_POST[video]',
											'$_POST[status]',
											'$_SESSION[userid]',
											'$created_date',
											'',
											'')");
		header("Location: video.php?code=1");
	}
	elseif( $act == 'delete'){
		mysql_query("DELETE FROM video WHERE video_id = '$_GET[id]'");
		
		header("Location: video.php?code=3");
	}
	elseif ($act == 'edit'){
		$video = mysql_fetch_array(mysql_query("SELECT * FROM video WHERE video_id = '$_GET[id]'"));
		
		$dataVideo[] = array(	'video_id' => $video['video_id'],
								'judul_video' => $video['judul_video'],
								'video' => $video['video'],
								'status' => $video['status']);
		
		$smarty->assign("dataVideo", $dataVideo);
	} 
	elseif ($act == 'update'){
		$modified_date = date('Y-m-d H:i:s');
		
		$save = mysql_query("UPDATE video SET	judul_video = '$_POST[judul_video]',
												video = '$_POST[video]',
												status = '$_POST[status]',
												modified_date = '$modified_date',
												modified_userid = '$_SESSION[userid]'
												WHERE video_id = '$_POST[id]'");
									
		header("Location: video.php?code=2");
	}
	else{
		$code = $_GET['code'];
		
		$i = 1;
		$video = mysql_query("SELECT * FROM video ORDER BY video_id ASC");
		while ($dtVideo = mysql_fetch_array($video)){
			
			$dataVideo[] = array(	'no' => $i,
									'video_id' => $dtVideo['video_id'],
									'judul_video' => $dtVideo['judul_video'],
									'video' => $dtVideo['video'],
									'status' => $dtVideo['status']);
			$i++;
		}
		$smarty->assign("code", $code);
		$smarty->assign("dataVideo", $dataVideo);
	}
	$smarty->assign("act", $act);
	$smarty->assign("level", $_SESSION['level']);
} 
include "footer.php";
?>