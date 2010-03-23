<html>
<head>
	<title>spider</title>
</head>

<body>
<?php
if (isset($_POST['url']) && !empty($_POST['url'])) {
	$myfile = "text.txt";
	$text = $_POST['url'];
	$file_write = fopen($myfile, 'w') or die("can't open file");
	fwrite($file_write, $text);
	fclose($file_write);
}
echo "$text"
?>
<h4>Enter URL</h4>
<form action="mySpider.php" method="post"> 
<input name="url" type="text" /> 
<input type="submit" />
</form>

</body>
</html>