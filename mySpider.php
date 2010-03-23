<html>
<head>
	<title>spider</title>
</head>

<body>
<?php
if (isset($_POST['url']) && !empty($_POST['url'])) {
	$myurl = $_POST['url'];
    $myfile = "text.txt";
	$thedata = file_get_contents($myurl);
    $file_write = fopen($myfile, 'w') or die("can't open file");
    fwrite($file_write, $thedata);
	fclose($file_write);
	echo "<h2>URL: $myurl</h2><hr />";
    echo $thedata;
}
?>
<h4>Enter URL</h4>
<form action="mySpider.php" method="post"> 
<input name="url" type="text" /> 
<input type="submit" />
</form>

</body>
</html>