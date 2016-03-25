<?php
function date_indo($dt){
	$date	= substr($dt,8,2);
	$month	= getMonth(substr($dt,5,2));
	$year 	= substr($dt,0,4);
	return $date.' '.$month.' '.$year;
}

function getMonth($month){
	switch ($month){
		case 1: 
		return "Januari";
		break;
		
		case 2:
		return "Februari";
		break;
		
		case 3:
		return "Maret";
		break;
		
		case 4:
		return "April";
		break;
		
		case 5:
		return "Mei";
		break;
		
		case 6:
		return "Juni";
		break;
		
		case 7:
		return "Juli";
		break;
		
		case 8:
		return "Agustus";
		break;
		
		case 9:
		return "September";
		break;
		
		case 10:
		return "Oktober";
		break;
		
		case 11:
		return "November";
		break;
		
		case 12:
		return "Desember";
		break;
	}
} 
?>