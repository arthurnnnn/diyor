<?php
error_reporting(0);
header('Content-type: image/jpeg');
$text = $_GET['text']; 
$type = $_GET['type'];
$get = file_get_contents("https://DOMEN.xvest.ru/PAPKANOMI/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-$type.html&text=$text");
echo $get;
?>