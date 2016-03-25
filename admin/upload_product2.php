<?php
$uploaddir = '../images/products/'; 
$file = $uploaddir ."khalwa_".date('Ymdhis').basename($_FILES['uploadfile2']['name']); 
$file_name= "khalwa_".date('Ymdhis').$_FILES['uploadfile2']['name']; 
 
if (move_uploaded_file($_FILES['uploadfile2']['tmp_name'], $file)) {
	echo "$file_name"; 
} 
else {
	echo "error";
}
?>