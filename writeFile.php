<?php
$myfile = "text.txt";
$file_write = fopen($myfile, 'w') or die("can't open file");
$stringData = "Hello World";
fwrite($file_write, $stringData);
fclose($file_write);
?>

