<?php

$db = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('spider', $db);
$result = mysql_query("INSERT INTO spider_pages (url, content) VALUES ('http://www.google.com', 'Content Should Be Here')", $db);
mysql_close($db);

?>