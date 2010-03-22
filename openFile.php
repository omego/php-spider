<?php

$myfile = "text.txt";
$file_read = fopen($myfile,'r');
$thedata = fread($file_read, filesize($myfile));
fclose($file_read);
echo $thedata;
?>