<?php
$uploaddir = '../images/products/'; 
$file = $uploaddir ."khalwa_".date('Ymdhis').basename($_FILES['uploadfile3']['name']); 
$file_name= "khalwa_".date('Ymdhis').$_FILES['uploadfile3']['name']; 
 
if (move_uploaded_file($_FILES['uploadfile3']['tmp_name'], $file)) {
	echo "$file_name"; 
} 
else {
	echo "error";
}
?>