<?php
error_reporting(0);
header('Content-type: image/jpeg');
$text = $_GET['text']; 
$type = $_GET['type'];
$get = file_get_contents("https://en.ephoto360.com/write-text-on-wet-glass-online-589.html.html&text=");
echo $get;
?>
