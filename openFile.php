<?php
$myfile = "text.txt";
$file_read = fopen($myfile,'r');
$thedata = fread($file_read, filesize($myfile));
fclose($file_read);
$thedata = explode(" " , $thedata);
for ($start=0; $start < count($thedata); $start++) {
print $thedata[$start] . "<BR>";
}
?>