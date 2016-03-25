<?php
function generate_password($length = 8){
	$chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	$str = '';
	$max = strlen($chars) - 1;
	
	for ($i=0; $i < $length; $i++)
		$str .= $chars[rand(0, $max)];
		
	return $str;
}
?> 
